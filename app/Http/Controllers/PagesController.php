<?php

namespace App\Http\Controllers;
use App\Gallery;
use Ipalaus\Buffer\Client;
use Ipalaus\Buffer\TokenAuthorization;
use Ipalaus\Buffer\Schedule;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index ()
    {
        /* API BUFFER (buffer.com) */

        $social_posts =[];
        $_social_posts =[];
        $token_access = '1/7b7c2046ca2292ba303c599b7bc75530';
        $auth = new TokenAuthorization($token_access);
        $client = new Client($auth);
        $profiles = $client->getProfiles();

        foreach ($profiles as $client_id) {
            $sent_posts = $client->getProfileSentUpdates($client_id['_id'], $page = null, $count = null, $since = null, $utc = false)['updates'];

            foreach ($sent_posts as $posts) {
                $key =  $posts['text_md5'];
                if(!isset($social_posts[$key])) $social_posts[$key] = [];
                $social_posts[$key][$posts['profile_service']] = [
                    'text'  => $posts['text'],
                    'link'  => $posts['service_link'],
                    'day'  => $posts['day'],
                    'created_at'  => $posts['created_at'],
                    'updated_at'  => $posts['updated_at'],
                    'text_md5'  => $posts['text_md5'],
                ];
            }

            /*foreach ($sent_posts as $posts) {

              //  dump($posts);

                $_social_posts[$posts['created_at']] = $posts;
                krsotr
                $key = $posts['text_md5'];
                if(!isset($social_posts[$key])) $social_posts[$key] = [];
                $social_posts[$key][$posts['profile_service']] = [
                    'text'  => $posts['text'],
                    'link'  => $posts['service_link'],
                    'day'  => $posts['day'],
                    'created_at'  => $posts['created_at'],
                    'updated_at'  => $posts['updated_at'],
                    'text_md5'  => $posts['text_md5'],
                ];
            }*/


        }
       // dump($social_posts);





        return view('pages.index', [
            'social_posts' => $social_posts
        ]);
    }

    public function galleries ()
    {
        $gallery = Gallery::all();
        $years = Gallery::orderBy('year')->pluck('year');
        $menu = [];

        foreach ($years as $year) {
           $menu[] = $year;
        }

        return view('pages.galleries', [
            'gallery' => $gallery,
            'menu' => array_unique($menu)
        ]);
    }

    public function gallery_details ($id)
    {
        $gallery = Gallery::find($id);

        return view('pages.gallery', ['gallery' => $gallery]);
    }

    /*public function gallery ()
    {
        return view('pages.gallery');
    }*/

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
