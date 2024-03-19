<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Application;
use App\Models\Subscriber;
use App\Models\Query;

class SiteController extends Controller
{   

    public function h1(){
        return view('home.site');
    } 

    public function software_development(){
        return view('home.software_development');
    }

    public function staff(){
        return view('home.staff');
    }

    public function  android(){
        return view ('home.android');
    }

    public function ai(){
        return view ('home.ai');
    }

    public function cloud(){
        return view('home.cloud');
    }

    public function digital_marketing(){
        return view ('home.digital_marketing');
    }

    public function entertainment(){
        return view ('home.entertainment');
    }

    public function life_science(){
        return view ('home.life_science');
    }

    public function it(){
        return view('home.it');
    }

    public function transport(){
        return view ('home.transport');
    }

    public function services_details(){
        return view ('home.services-details');
    }

    public function gas(){
        return view ('home.gas');
    }

    public function aviation(){
        return view ('home.aviation');
    }

    public function contact(){
        return view('home.contact');
    }
    
    public function career(){
        $jobs = Job::all();
        return view ('home.careers',compact('jobs'));
    }

   
    public function jobform($id){
        $jobs = Job::where("id", $id)->first();
        return view('home.application_form', compact('jobs'));
    }

    public function jobdescription($id){
        $jobs = Job::where("id", $id)->first();
        return view('home.jobdescription', compact('jobs'));
    }

   
    /**
     * Store a newly created user in the database.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the form data
        $request->validate([
            'applying_for' => 'required',
            'applicant_name' => 'required',
            'applicant_mobile' => 'required',
            'applicant_email' => 'required|email',
            'qualification' => 'required',
            'skills' => 'required',
            'exp_yr' => 'required',
            'designation' => 'required',
            'last_employer' => 'required',
            'peroid'=>'required',
            'profile_link' => 'required',
            'Resume_path' => 'required',
            
            
        ]);
        //print_r($request);die();
        $filename = '';
        if($request->hasFile('Resume_path')){
            $folder = 'Resume';   
            $filename = $request->file('Resume_path')->store('Resume', 'public');;

        }

        // Create a new user record
        $application = new Application();
        $application->applying_for = $request->input('applying_for');
        $application->applicant_name = $request->input('applicant_name');
        $application->applicant_mobile = $request->input('applicant_mobile');
        $application->applicant_email = $request->input('applicant_email');
        $application->qualification = $request->input('qualification');
        $application->skills = $request->input('skills');
        $application->exp_yr = $request->input('exp_yr');
        $application->designation = $request->input('designation');
        $application->last_employer = $request->input('last_employer');
        $application->joining_date=$request->input('peroid');
        $application->profile_link = $request->input('profile_link');
        $application->Resume_path = $filename;
        $application->Job_ID = $request->input('Job_ID');
        $application->Status = "Applied";
        $application->application_Status = "Active";
        $application->save();

        // Redirect to a success page or do something else
        return redirect()->route('applicationsubmission')->with('status', 'User added successfully!');
    }

    public function applicationsubmission(){
        return view ('home.applicationsubmission');
    }

    public function subscriber(Request $request){
        $request->validate(['email' => 'required|email',]);

        $subscriber=new Subscriber();
        $subscriber->email=$request->input('email');
        $subscriber->save();
        toastr()->addSuccess('Our all updates will reach you.');
        return back();

    }

    public function subscriberlist(){
        $subscriber=Subscriber::all();
        return view('auth.subscriber',compact('subscriber'));
    }

    

    
}
