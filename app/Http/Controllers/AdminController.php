<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
    	return view('admin.index');
    }

    public function categorylist()
    {
    	return view('admin.categorylist');
    }

     public function add_category()
    {
    	return view('admin.add_category');
    }

     public function users_list()
    {
    	return view('admin.users_list');
    }
}
