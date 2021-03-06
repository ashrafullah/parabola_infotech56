<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ImageGallery;
use App\Business;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }

    // public function categorylist()
    // {
    // 	return view('admin.categorylist');
    // }

    //  public function add_category()
    // {
    // 	return view('admin.add_category');
    // }

     public function users_list()
    {
    	return view('admin.users_list');
    }




    /**
     * Listing Of images gallery
     *
     * @return \Illuminate\Http\Response
     */
    public function add_slider()
    {
        $images = ImageGallery::get();
        return view('admin.add_slider',compact('images'));
    }


    /**
     * Upload image function
     *
     * @return \Illuminate\Http\Response
     */
    public function upload(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $input['image'] = time().'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/slider'), $input['image']);


        $input['title'] = $request->title;
        ImageGallery::create($input);


        return back()
            ->with('success','Image Uploaded successfully.');
    }


    /**
     * Remove Image function
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ImageGallery::find($id)->delete();
        return back()
            ->with('success','Image removed successfully.');    
    }
}
