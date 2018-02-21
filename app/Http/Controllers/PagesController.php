<?php

namespace App\Http\Controllers;
use Ipalaus\Buffer\Client;
use Ipalaus\Buffer\TokenAuthorization;
use Ipalaus\Buffer\Schedule;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index ()
    {
        /* API BUFFER (buffer.com) */
        $token_access = '1/7b7c2046ca2292ba303c599b7bc75530';
        $client_id = '5a868f4e8d98e28e54d367bf';

        $auth = new TokenAuthorization($token_access);
        $client = new Client($auth);

        $sent_posts = $client->getProfileSentUpdates($client_id, $page = null, $count = 4, $since = null, $utc = false);
        $pending_posts = $client->getProfilePendingUpdates($client_id, $page = null, $count = null, $since = null, $utc = false);

        return view('pages.index', [
            'sent_posts' => $sent_posts,
            'pending_posts' => $pending_posts
        ]);
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
