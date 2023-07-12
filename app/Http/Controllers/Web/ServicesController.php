<?php

namespace App\Http\Controllers\Web;

use App\AcademicLevel;
use App\Blog;
use App\Deadline;
use App\Http\Controllers\Controller;
use App\PaperType;
use App\Service;
use App\CarrerLevelModel;
use App\SelectServices;
use App\DayModel;
use Illuminate\Http\Request;


class ServicesController extends Controller
{
    public function show($slug)
    {
        $blog = Blog::where(['slug' => $slug])->first();
        
        if( $blog ){
            return view('pages.blogs.show', compact('blog'));
        }

        $service = Service::where(['slug' => $slug])->firstOrFail();

        return view('pages.services.show',compact('service'));
    }

}
