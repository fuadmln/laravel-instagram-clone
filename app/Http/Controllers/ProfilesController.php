<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
    	$user = User::findOrFail($user);
    	//$user = $user->posts;
    	//dd($user);//
        return view('profile.index', compact('user'));
    }

    public function edit(User $user){
        return view('profile.edit', compact('user'));
    } 

    public function update(User $user)
    {
    	$data = request()->validate([
    		'title' => 'required',
    		'description' => 'required',
    		'url' => 'url',
    		'image' => '',
    	]);

    	dd($data);
    }
}
