<?php

namespace App\Http\Controllers\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category\Category;
use App\Models\Job\Job;

class Categoriescontroller extends Controller
{
    public function singleCategory($name){
        $jobs=Job::where('category',$name)->take(5)->orderBy('created_at','desc');
        return view('categories.single',compact('jobs'));

    }
}