<?php

namespace App\Http\Controllers;
use App\Gallery;
use Ipalaus\Buffer\Client;
use Ipalaus\Buffer\TokenAuthorization;
use Illuminate\Http\Request;
use App\News;

class PagesController extends Controller
{
    public function index ()
    {
        /* API BUFFER (buffer.com) */
        $token_access = env('BUFFER_TOKEN_ACCESS');
        $auth = new TokenAuthorization($token_access);
        $client = new Client($auth);
        $profiles = $client->getProfiles();
        $prof = [
            ['_id' => '5a54cb3decbe8a1c474ec402'],
            ['_id' => '5a377adea43056c05d33ab0f'],
            ['_id' => '5a377adea43056c05d33ab11'],
            ['_id' => '5a68965df7fb85143c2b4006'],
        ];

        $social_posts =[];
        $formatted_posts = [];

        foreach ($prof as $client_id) {
            $sent_posts = $client->getProfileSentUpdates($client_id['_id'], $page = null, $count = null, $since = null, $utc = false)['updates'];
            foreach ($sent_posts as $posts) {
                if(isset($posts['text_md5'])) {
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
        $news = News::all();
//        dd($news->toArray());
        return view('pages.press',[
            'news' => $news
        ]);
    }

    public function pressDetails ($id)
    {
        $item = News::where('id', '=', $id)->get()->toArray();

//        dd($item);

        return view('pages.news-details',[
            'item' => $item
        ]);
    }

    public function about ()
    {
        return view('pages.about');
    }

    public function privacy_policy ()
    {
        return view('pages.privacy_policy');
    }

    public function contact ()
    {
        return view('pages.contact');
    }

    public function postContact (Request $request)
    {
        $this->validate($request, [
            'email'         => 'required|email',
            'message'       => 'required',
        ]);

        $data = [
            'select_option' => $request->select_option_contact,
            'email' => $request->email,
            'message' => $request->message,
        ];

        $to = env('CONTACT_EMAIL');
        $subject = 'Fight Night Contact form';
        $message = '
			<h3>You have a new contact Via the contact form</h3>
			<p>Name: ' . $data['select_option'] . '</p>
			<div>
				Message: ' . $data['message'] . '
			</div>
			<p>Sent via ' . $data['email'] . '</p>
		';

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: ' . $data['email'] . '' . "\r\n";

        mail($to, $subject, $message, $headers);

        return back();
    }

    public function virtual_tour ()
    {
        return view('pages.virtual_tour');
    }

}
