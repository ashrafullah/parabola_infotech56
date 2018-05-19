<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageGallery;

class FrontendController extends Controller
{
    public function frontend()
    {
    	$images = ImageGallery::get();
    	return view('frontend.index',compact('images'));
    }
}
