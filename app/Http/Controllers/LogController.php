<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Admin;
use app\Models\Client;
use app\Models\Vendor;
use app\Models\User;

class LogController extends Controller
{
    // public function loginAdmin(){
    // 	return view('log/loginadmin');
    // }

    //  public function loginVendor(){
    // 	return view('log/loginvendor');
    // }

    //  public function login(){
    // 	return view('log/login');
    // }

     public function indexAdmin(){
        $name = 'name';
    	return view('log/indexadmin', ['name' => $name]);
    }

     public function indexVendor(){
        $name = 'name';
    	return view('log/indexvendor', ['name' => $name]);
    }

     public function index(){
        $name = 'name';
    	return view('log/index', ['name' => $name]);
    }
    
    public function registerClient($role){

        return view('log/register',['role' => $role]);
    }
    // public function registerVendor(){
    //     return view('log/registervendor');
    // }

}

