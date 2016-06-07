<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;


    public function index()
	{
		return view('webpages.index');
	}


	public function welcome()
	{
		return view('welcome');
	}



	public function checkout()
	{
		return view('webpages.checkout');
	}



	public function cart()
	{
		return view('webpages.cart');
	}



	public function clinicinfo()
	{
		return view('webpages.clinic-information');
	}


	public function contact()
	{
		return view('webpages.contact-us');
	}


	public function gallery()
	{
		return view('webpages.gallery');
	}


	public function generalques()
	{
		return view('webpages.general-questions');
	}


	public function medicalstaff()
	{
		return view('webpages.medical-staff');
	}


	public function newspost()
	{
		return view('webpages.news-post');
	}


	public function news()
	{
		return view('webpages.news');
	}


	public function prodpost()
	{
		return view('webpages.product-post');
	}


	public function services()
	{
		return view('webpages.services');
	}


	public function store()
	{
		return view('webpages.store');
	}


}


