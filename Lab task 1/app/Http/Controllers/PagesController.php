<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function page1(){
		return view('home');
	}
	public function page2(){
		$productnames = ['Silicone cover', 'Cat cover', 'Glassback cover'];
        return view('product', [
            'productnames' => $productnames
        ]);
	}
	public function page3(){
		return view('Teams');
	}
	public function page4(){
		return view('ABOUTUS');
	}
	public function page5(){
		return view('contact');
	}
}
