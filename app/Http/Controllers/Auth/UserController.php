<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Job;
use App\Models\Application;
use App\Models\Query;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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

    public function addjob(){
        return view ('auth.addjob');
    }

    public function jobpost(Request $request)
    {
        $request->validate([
            'title' => 'required|max_length[100]',
            'company' => 'required|max_length[100]',
            'openings'=>'required|max_length[100]',
            'skills' => 'required|max_length[500]',
            'exp'=>'required|max_length[10]',
            'qualification' => 'required|max_length[80]',
            'location'=>'required|max_length[100]',
            'description'=> 'required|max_length[5000]',
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
        $request->validate([
            'title' => 'required',
            'company' => 'required',
            'openings'=>'required',
            'skills' => 'required',
            'qualification' => 'required',
            'location'=>'required',
            'description'=> 'required',
            'closedate'=>'required',            
        ]);

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

    public function applicants(){
        $applicants=Application::all();
        $jobs=Job::all();
        return view ('auth.applicants',compact("applicants","jobs"));
    }

    public function applicantsfilter(Request $request)
    {
        $jobs=Job::all();
        $search=$request->input('filter');
        if($search=="all")
        {
            $applicants=Application::all();
        }
        else
        {
        $applicants = Application::where('applying_for','LIKE',"%{$search}%")->get();
        }
        return view ('auth.applicants',compact("applicants","jobs"));
    }

    public function resumeshow($path){
        
        return response()->file(public_path('storage/'.$path),['content-type' => 'application/pdf']);
        

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
            return redirect("/login")->withErrors("Invalid Email or Password");
            toastr()->addSuccess("Invalid Email or Password", "Login Failed!");
        }

    }

    public function logout(){
        // Log out the user.
        Auth::logout();
        return redirect('/login')->withSuccess("You have successfully logged out");
        
    }

    
}
