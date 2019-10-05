<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $post = [
               ['image'=>"\images.Image1.png",'name'=>"youssef",'prise'=>120,'discount'=>0.15],
               ['image'=>'\images.Image1.png','name'=>'youssef','prise'=>120,'discount'=>0.15],
               ['image'=>'\images.Image1.png','name'=>'youssef','prise'=>120,'discount'=>0.15],
               ['image'=>'\images.Image1.png','name'=>'youssef','prise'=>120,'discount'=>0.15],
               ['image'=>'\images.Image1.png','name'=>'youssef','prise'=>120,'discount'=>0.15],
             ];
        return view('pages.home',[
          'prodecits'=>$post,
        ]);
    }
}
