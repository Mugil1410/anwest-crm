<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Job;
use App\Models\Application;
use App\Models\Query;
use App\Models\Subscriber;
use Response;

class UserController extends Controller
{
   

    public function index(){
        $applicants = Application::count();
        $jobs = Job::count();
        $Subscriber=Subscriber::count();
        $query=Query::count(); 
        return view ('auth.home', compact('applicants', 'jobs','Subscriber','query')); 
    }

    

    

    public function job(){
        $jobs = Job::all();
        return view("auth.job",compact("jobs"));
    }

    public function jobstatus(Request $request){
        $isActive=$request->isActive;
        if($isActive=='false'){
            $newstatus = "Inactive";
        }
        else{
            $newstatus = "Active";
        }
        $job = Job::find($request->jobId);
        $job->Job_post = $newstatus;
        $job->save();
        return response()->json(['sent_data'=>$isActive,'newstatus' =>$newstatus,'data'=>$job]);
    
    
    }

    public function addjob(){
        return view ('auth.addjob');
    }

    public function jobpost(Request $request)
    {
        $request->validate([
            'title' => 'required|max:100',
            'company' => 'required|max:100',
            'openings'=>'required|max:100',
            'skills' => 'required|max:500',
            'exp'=>'required|max:10',
            'qualification' => 'required|max:80',
            'location'=>'required|max:100',
            'description'=> 'required|max:5000',
            'closedate'=>'required',            
        ]);
    
        $job = new Job();
        $job->title = $request->input('title');
        $job->company_posted = $request->input('company');
        $job->no_of_opening = $request->input('openings'); 
        $job->Skills = $request->input('skills');
        $job->exp_needed = $request->input('exp');
        $job->qualification = $request->input('qualification');
        $job->location = $request->input('location');
        $job->description = $request->input('description');
        $job->job_close = $request->input('closedate');
        $job->Job_post = $request->input('status');

        $job->save();
        toastr()->addSuccess('Job posted successfully');
        return redirect()->route('job'); // Redirect to the jobs listing page
    }

    public function edit($id)
    {
        $job = Job::find($id);
        return view('auth.editjob', compact('job'));
    }

    
    public function update(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'company' => 'required',
            'openings'=>'required',
            'skills' => 'required',
            'qualification' => 'required',
            'location'=>'required',
            'description'=> 'required',
            'closedate'=>'required',
        ]);

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                toastr()->error($error);
            }
            // Redirect back to the form
            return redirect()->back();
        }


        $job = Job::find($id);
        $job->title = $request->input('title');
        $job->company_posted = $request->input('company');
        $job->no_of_opening = $request->input('openings');
        $job->Skills = $request->input('skills');
        $job->exp_needed = $request->input('exp');
        $job->qualification = $request->input('qualification');
        $job->location = $request->input('location');
        $job->description = $request->input('description');
        $job->job_close = $request->input('closedate');
        $job->Job_post = $request->input('status');
        $job->save();
        toastr()->addWarning("Job Updated Successfully");
        return redirect()->route('job'); 
         
     }

    public function delete($id)
    {
        $job = Job::find($id);
        $job->delete();
        toastr()->addError("Job Deleted Successfully");
        return redirect()->route('job'); 
        
    }

    public function applicants(Request $request){
        $applicants=Application::all();
        $jobs=Job::all();
        if ($request->ajax()) {
            return response()->json(['applicants' => $applicants]);
        }
        return view ('auth.applicants',compact("jobs"));
    }

    public function updatestatus(Request $request){
            $id = $request->input('id');
            $status = $request->input('status');
                $applicant = Application::findOrFail($id);
                $applicant->status = $status;
                $applicant->save();
                return response()->json(['status' => $applicant->status]);
    }

    public function applicantsfilter(Request $request)
    {
        $applyforfilter=$request->input('applyforfilter');
        $statusfilter=$request->input('statusfilter');

        if($applyforfilter=="all" && $statusfilter=="all")
        {
            $applicants=Application::all();
            return response()->json(['applicants' => $applicants]);
            
        }
        if ($statusfilter=="all" && $applyforfilter!== 'all') {
            $applicants = Application::where('applying_for', 'LIKE', "%{$applyforfilter}%")->get();
            return response()->json(['applicants' => $applicants]);
        }

        if ($applyforfilter=="all" && $statusfilter!== 'all') 
        {
            $applicants = Application::where('Status', 'LIKE', "%{$statusfilter}%")->get();
            return response()->json(['applicants' => $applicants]);

        }
        else{
            $applicants = Application::where('applying_for', 'LIKE', "%{$applyforfilter}%")
            ->where('Status', 'LIKE', "%{$statusfilter}%")->get();
            return response()->json(['applicants' => $applicants]);
        }
     
    }

    public function applicantdelete(Request $request){
        $ids = $request->ids;

        Application::whereIn('id', $ids)->get()->each(function ($app) {
        $filePath = $app->Resume_path;
        if ($filePath) {
            Storage::delete('public/'.$filePath);
        }
        // Delete the database record
        $app->delete();
        });
        return response()->json(['success' => 'Applicant(s) Deleted Successfully']);
    }

    public function applicantsprofile($id){
        $applicant = Application::find($id);
        return view ('auth.applicantsprofile',compact("applicant"));
    }

    public function resumeshow($id){
        {
            // Retrieve the PDF path from the users table
            $resumepath = Application::find($id);
            if (!$resumepath) {
                return redirect()->back();
                toastr()->addError("Applicant resume not found ");
            }

            $path=Storage::path('public/'.$resumepath->Resume_path);
            if (!file_exists($path)) {
                // Resume file does not exist, handle the error (e.g., redirect with a message)
                return redirect()->back()->with('error', 'Resume not found');
            }
            return response()->file($path);
        }
    }

    

    public function querylist(){
        $queries=Query::all();
        return view ('auth.querylist',compact("queries"));
    }

    public function query(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'query' => 'required',  
        ]);

        $query=new Query();
        $query->name=$request->input('name');
        $query->email=$request->input('email');
        $query->subject=$request->input('subject');
        $query->query=$request->input('query');
        $query->save();
        toastr()->addSuccess('Your message has been sent. We will get in touch with you');
        return back();
    }

    public function querydelete(Request $request){

        $ids = $request->ids;
        Query::whereIn('id', $ids)->get()->each(function ($query) {
        // Delete the database record
        $query->delete();
        });
        return response()->json(['success' => 'Query(s) Deleted Successfully']);
    }



    public function login(){
        return view ('auth.login');
    }

    public function authCheck(Request $request){
        $request->validate([
            'name' => 'required',
            'password'=>'required'
        ]);

        $name=$request->input('name');
        $password=$request->input('password');

        if(Auth::attempt(['name' => $name, 'password' => $password])){
            // Authentication passed...
            $user=User::where(['name' => $name])->first();
            Auth::login($user);

            return redirect()->route('home')->withSuccess("You have Successfully logged in");
        }else{
            return redirect("/login")->withErrors("Invalid Username or Password");
            toastr()->addSuccess("Invalid Email or Password", "Login Failed!");
        }

    }

    public function logout(){
        // Log out the user.
        Auth::logout();
        return redirect('/login')->withSuccess("You have successfully logged out");
        
    }

    
}
