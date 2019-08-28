<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function welcome()
    {
        return view('welcome', ['products' => Product::paginate(3)]);
    }

    public function index()
    {
        //dd(auth()->user()->hasRole('admin'));
        return view('home');
    }

    public function adminDemo()
    {
        return view('layouts.admin');
    }

    public function userDemo()
    {
        return view('layouts.user');
    }

    public function shopDemo()
    {
        return view('products.shop');
    }

    public function userAccess()
    {
        return view('layouts.noaccess');
    }

    // public function showImage()
    // {
    //     return view('layouts.showimage');

    //     $images = auth()->user()->getMedia();

    //     return view('showimage', compact('images'));
    // }

    // public function createImage($id)
    // {
    //     return view('layouts.createimage');

    //     $user->addMediaFromRequest('image')->toMediaCollection();

    //     return $user;
    // }

    // public function storeImage(Request $request)
    // {
    //     return view('layouts.storeimage');
    //     $user = auth()->user();

    //     $user->addMediaFromRequest('image')->toMediaCollection();
    //     //dd($user);

    //     return redirect()->back();
    // }
}
