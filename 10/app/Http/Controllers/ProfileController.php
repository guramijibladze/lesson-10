<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProfileController extends Controller 
{

    public function index(Request $request)
    {
        // $posts = Blog::query()
        //     ->select('id', 'title', 'description', 'created_at')
        //     ->where('is_publish', '=', 1)
        //     ->whereNull('deleted_at')
        //     ->orderBy('created_at')
        //     ->get();
        return view('profile.main');
    }

    public function create()
    {
        return view('profile.create');
    }

    public function getWhereId()
    {
        return view('profile.id');
    }

    public function store(Request $request)
    {
        if(empty($request->description))
        return Redirect::back()->withWarning('სავალდებულოა ორივე ველი შეავსოთ.');
        
        return Redirect::back()->withSuccess('პოსტი წარმატებით დაემატა.');
    }

}