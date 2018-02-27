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
        $sent_posts = [];
        $social_posts =[];
        $token_access = '1/7b7c2046ca2292ba303c599b7bc75530';
        $auth = new TokenAuthorization($token_access);
        $client = new Client($auth);

        $profiles = $client->getProfiles();
        foreach ($profiles as $client_id) {
            $sent_posts = $client->getProfileSentUpdates($client_id['_id'], $page = null, $count = null, $since = null, $utc = false)['updates'];
            foreach ($sent_posts as $posts) {
                $social_posts[] = $posts;
            }
        }

        //$pending_posts = $client->getProfilePendingUpdates($facebook_client_id, $page = null, $count = null, $since = null, $utc = false);

        return view('pages.index', [
            'social_posts' => $social_posts,
            //'pending_posts' => $pending_posts
        ]);
    }

    public function galleries ()
    {
        return view('pages.galleries');
    }

    public function gallery ()
    {
        return view('pages.gallery');
    }

    public function editions ()
    {
        return view('pages.editions');
    }

    public function tickets ()
    {
        return view('pages.tickets');
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

    public function virtual_tour ()
    {
        return view('pages.virtual_tour');
    }

}
