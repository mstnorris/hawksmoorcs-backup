<?php namespace HawksmoorCS\Http\Controllers;

class PagesController extends Controller {

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function welcome()
    {
        return view('pages.welcome');
    }

    public function home()
    {
        return view('pages.home');
    }

    public function policies()
    {
        return view('pages.policies');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function vision()
    {
        return view('pages.vision');
    }

    public function news()
    {
        return view('pages.news');
    }

}