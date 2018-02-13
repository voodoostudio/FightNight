<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index ()
    {
        return view('pages.index');
    }

    public function gallery ()
    {
        return view('pages.gallery');
    }

    public function results ()
    {
        return view('pages.results');
    }

    public function partners ()
    {
        return view('pages.partners');
    }

    public function news ()
    {
        return view('pages.news');
    }

    public function press ()
    {
        return view('pages.press');
    }

    public function about ()
    {
        return view('pages.about');
    }

    public function contact ()
    {
        return view('pages.contact');
    }

    public function postContact ()
    {
        return view('pages.contact');
    }

}
