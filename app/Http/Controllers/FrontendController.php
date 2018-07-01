<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageGallery;
use App\Business;

class FrontendController extends Controller
{
    public function frontend()
    {
    	$images = ImageGallery::get();
    	$business = Business::get();
    	// $obj = (object) array_merge((array) $images, (array) $business);
    	return view('frontend.index', compact('images','business'));
    }
    public function building()
    {
    	$images = ImageGallery::get();
    	$business = Business::get();
    	// $obj = (object) array_merge((array) $images, (array) $business);
    	return view('frontend.building', compact('images','business'));
    }
}
