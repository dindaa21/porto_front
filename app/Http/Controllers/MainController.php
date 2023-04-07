<?php

namespace App\Http\Controllers;

use App\Models\Approach;
use App\Models\Dashboard;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Socmed;
use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $user = User::find(2);

        $title = Dashboard::first();
        $title = $title->title;

        $profile = Profile::first();

        $project = Project::get();

        $instagram = Socmed::where('category','instagram')->first();
        $twitter   = Socmed::where('category','twitter')->first();
        $linkedin  = Socmed::where('category','linkedin')->first();

        return view('home', compact('title', 'profile', 'project', 'user', 'instagram', 'twitter', 'linkedin'));
    }
    
    public function portofolio()
    {
        $user = User::find(2);

        $project = Project::get();

        $instagram = Socmed::where('category','instagram')->first();
        $twitter   = Socmed::where('category','twitter')->first();
        $linkedin  = Socmed::where('category','linkedin')->first();

        return view('porto', compact('project', 'user', 'instagram', 'twitter', 'linkedin'));
    }
    
    public function contactMe(Request $request)
    {
        $user = User::find(2);

        $instagram = Socmed::where('category','instagram')->first();
        $twitter   = Socmed::where('category','twitter')->first();
        $linkedin  = Socmed::where('category','linkedin')->first();

        if(request()->isMethod('get')){
            return view('contact-me', compact('user', 'instagram', 'twitter', 'linkedin'));
        }

        $reach = new Approach();
        $reach->name    = $request->name;
        $reach->email   = $request->email;
        $reach->subject = $request->subject;
        $reach->message = $request->message;
        $reach->save();

        return back()->with('success', 'Terima Kasih Sudah Menghubungi Saya! Saya akan membalas secepatnya ya...');
    }
    
}
