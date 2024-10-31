<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Job\Application;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Job\JobSaved;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UsersController extends Controller
{
    public function profile(){
        $profile=User::find(Auth::user()->id);
        return view('users.profile',compact('profile'));

    }

    public function applications(){
        //return the job applications of the currently authenticated user
        $applications=Application::where('user_id','=',Auth::user()->id)->get();
        return view('users.applications',compact('applications'));
    }

    public function savedJobs(){
        //return the job applications of the currently authenticated user
        $savedJobs=JobSaved::where('user_id','=',Auth::user()->id)->get();
        return view('users.savedjobs',compact('savedJobs'));
    }

    public function editDetails(){
        //$userDetails=User::where('id',Auth::user()->id)->first();
        $userDetails=User::find(Auth::user()->id);
        return view('users.editdetails',compact('userDetails'));
    }

    public function updateDetails(Request $request){
        //$userDetails=User::where('id',Auth::user()->id)->first();
        $userDetailsUpdate=User::find(Auth::user()->id);
        //dd($request);
        $userDetailsUpdate->update([
            'name'=>$request->name,
            'job_title'=>$request->job_title,
            'bio'=>$request->bio,
            'facebook'=>$request->facebook,
            'twitter'=>$request->twitter,
            'linkedin'=>$request->linkedin,

        ]);
        if($userDetailsUpdate){
            return back()->with('update','Profile Details Updated Successfully');
        }

    }

    public function editCV(){
        //$userDetails=User::where('id',Auth::user()->id)->first();
        $userDetails=User::find(Auth::user()->id);
        return view('users.editcv',compact('userDetails'));
    }

    public function updateCV(Request $request){
        //delete the old cv first
        $oldCV=User::find(Auth::user()->id);
        if(File::exists(public_path('assets/cvs/'.$oldCV->CV))){
            //$filepath=public_path('assets/cvs/'.$oldCV->CV);
            File::delete(public_path('assets/cvs/'.$oldCV->CV));
            if(File::delete(public_path('assets/cvs/'.$oldCV->CV))){
                //return redirect('users/profile')->with('update','deleted CV' );
                $destinationPath='assets/cvs/';
                $mycv=$request->cv->getClientOriginalName();
                $request->cv->move(public_path($destinationPath),$mycv);
                $oldCV->update([
                    'cv'=>$mycv,
        ]);
        return redirect('users/profile')->with('update','CV Updated Successfully');
            }
        }else{
            return redirect('users/profile')->with('update','No CV' );
        }

        //update with new cv
        /*$destinationPath='assets/cvs/';
        $mycv=$request->cv->getClientOriginalName();
        $request->cv->move(public_path($destinationPath),$mycv);
        $oldCV->update([
            'cv'=>$mycv,
        ]);
        return redirect('users/profile')->with('update','CV Updated Successfully');*/







    }

}
