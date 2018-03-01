<?php

namespace App\Http\Controllers;
use App\Gallery;
use Ipalaus\Buffer\Client;
use Ipalaus\Buffer\TokenAuthorization;

class PagesController extends Controller
{
    public function index ()
    {
        /* API BUFFER (buffer.com) */
        $token_access = env('BUFFER_TOKEN_ACCESS');
        $auth = new TokenAuthorization($token_access);
        $client = new Client($auth);
        $profiles = $client->getProfiles();
        $social_posts =[];
        $formatted_posts = [];

        foreach ($profiles as $client_id) {
            $sent_posts = $client->getProfileSentUpdates($client_id['_id'], $page = null, $count = null, $since = null, $utc = false)['updates'];
            foreach ($sent_posts as $posts) {
                $value = $posts['text_md5'] . '|' . $posts['created_at'];
                $key = explode("|", $value);
                if (!isset($social_posts[$key[0]])) $social_posts[$key[0]] = [];
                $social_posts[$key[0]][$posts['profile_service']] = [
                    'text' => $posts['text'],
                    'link' => $posts['service_link'],
                    'day' => $posts['day'],
                    'created_at' => $posts['created_at'],
                    'updated_at' => $posts['updated_at'],
                    'text_md5' => $posts['text_md5'],
                ];
            }
        }

        foreach ($social_posts as $key => $items) {
            $posts = array_merge(
                [
                    'text' => (isset($items['facebook'])) ? $items['facebook']['text'] : ((isset($items['linkedin'])) ? $items['linkedin']['text'] : ((isset($items['twitter'])) ? $items['twitter']['text'] : ((isset($items['instagram'])) ? $items['instagram']['text'] : ''))),
                    'day' => (isset($items['facebook'])) ? $items['facebook']['day'] : ((isset($items['linkedin'])) ? $items['linkedin']['day'] : ((isset($items['twitter'])) ? $items['twitter']['day'] : ((isset($items['instagram'])) ? $items['instagram']['day'] : ''))),
                    'created_at' => (isset($items['facebook'])) ? $items['facebook']['created_at'] : ((isset($items['linkedin'])) ? $items['linkedin']['created_at'] : ((isset($items['twitter'])) ? $items['twitter']['created_at'] : ((isset($items['instagram'])) ? $items['instagram']['created_at'] : ''))),
                    'updated_at' => (isset($items['facebook'])) ? $items['facebook']['updated_at'] : ((isset($items['linkedin'])) ? $items['linkedin']['updated_at'] : ((isset($items['twitter'])) ? $items['twitter']['updated_at'] : ((isset($items['instagram'])) ? $items['instagram']['updated_at'] : ''))),
                ],

                [
                    'facebook_link' => (isset($items['facebook']['link'])) ? $items['facebook']['link'] : ''
                ],

                [
                    'linked_link' => (isset($items['linkedin']['link'])) ? $items['linkedin']['link'] : ''
                ],

                [
                    'twitter_link' => (isset($items['twitter']['link'])) ? $items['twitter']['link'] : ''
                ],

                [
                    'instagram_link' => (isset($items['instagram']['link'])) ? $items['instagram']['link'] : ''
                ]

            );
            $formatted_posts[(isset($items['facebook'])) ? $items['facebook']['created_at'] : ((isset($items['linkedin'])) ? $items['linkedin']['created_at'] : ((isset($items['twitter'])) ? $items['twitter']['created_at'] : ((isset($items['instagram'])) ? $items['instagram']['created_at'] : '')))] = $posts;
        }

        krsort($formatted_posts);

        return view('pages.index', [
            'formatted_posts'   => $formatted_posts,
            'count_items'           => env('BUFFER_COUNT_ITEMS')
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
