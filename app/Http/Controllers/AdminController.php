<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use LaravelLocalization;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application news.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();

        return view('admin.news.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Request
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Request
     */
    public function store(Request $request)
    {
        $lang = LaravelLocalization::getCurrentLocale();

        $rules = array(
            'title_fr'      => 'required',
            'title_en'      => 'required',
        );

        $news = new News;
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to($lang . '/admin/news/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $image_file = $request->file('image_file');
            $pdf_file = $request->file('pdf_file');
            $archive_file = $request->file('archive_file');

            if($request->hasFile('image_file'))
            {
                $file_name = sha1(rand() . time() . rand()) . '.' . $image_file->getClientOriginalExtension();
                $image_file->move(public_path("/news/image/" . date('F_Y')), $file_name);

                /* resize image */
                $path = $_SERVER['DOCUMENT_ROOT'] . "/news/image/" . date('F_Y') . '/' . $file_name;
                $image = Image::make($path);

                list($width, $height) = getimagesize($path);
                $new_width = 1200;
                $ratio = $width / $height;

                if($width > $new_width) {
                    $image->resize($new_width, intval($new_width / $ratio));
                }

                /* save new image */
                $image->save($path);

                $news->image_file = $file_name;
            } else {
                $news->image_file = '';
            }

            if($request->hasFile('pdf_file'))
            {
                $file_name = sha1(rand() . time() . rand()) . '.' . $pdf_file->getClientOriginalExtension();
                $pdf_file->move(public_path("/news/pdf/" . date('F_Y')), $file_name);

                $news->pdf_file = $file_name;
            } else {
                $news->pdf_file = '';
            }

            if($request->hasFile('archive_file'))
            {
                $file_name = sha1(rand() . time() . rand()) . '.' . $archive_file->getClientOriginalExtension();
                $archive_file->move(public_path("/news/archives/" . date('F_Y')), $file_name);

                $news->archive_file = $file_name;
            } else {
                $news->archive_file = '';
            }

            $news->title_fr        = Input::get('title_fr');
            $news->title_en        = Input::get('title_en');
            $news->description_fr  = Input::get('description_fr');
            $news->description_en  = Input::get('description_en');

            $news->save();

            // redirect
            return Redirect::to($lang . '/admin/news');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $news = News::find($id);

        return view('admin.news.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id, Request $request)
    {
        $lang = LaravelLocalization::getCurrentLocale();

        $rules = array(
            'title_fr'      => 'required',
            'title_en'      => 'required',
        );

        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('admin/news/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $news = News::find($id);

            $image_file = $request->file('image_file');
            $pdf_file = $request->file('pdf_file');
            $archive_file = $request->file('archive_file');

            // IMAGE
            if($request->hasFile('image_file'))
            {
                $file_name = sha1(rand() . time() . rand()) . '.' . $image_file->getClientOriginalExtension();
                $image_file->move(public_path("/news/image/" . date('F_Y')), $file_name);

                /* resize image */
                $path = $_SERVER['DOCUMENT_ROOT'] . "/news/image/" . date('F_Y') . '/' . $file_name;
                $image = Image::make($path);

                list($width, $height) = getimagesize($path);
                $new_width = 1200;
                $ratio = $width / $height;

                if($width > $new_width) {
                    $image->resize($new_width, intval($new_width / $ratio));
                }

                /* save new image */
                $image->save($path);

                $news->image_file = $file_name;
            } else {
                $news->image_file = News::where('id', '=', $id)->value('image_file');
            }

            // PDF
            if($request->hasFile('pdf_file'))
            {
                $file_name = sha1(rand() . time() . rand()) . '.' . $pdf_file->getClientOriginalExtension();
                $pdf_file->move(public_path("/news/pdf/" . date('F_Y')), $file_name);

                /* convert first page pdf to jpg */
                $pdf_path = 'news/pdf/' . date('F_Y') . '/' . $file_name;
                $jpg_path = preg_replace('"\.pdf$"', '.jpg', $pdf_path);

                exec("convert \"{$pdf_path}[0]\" \"{$jpg_path}\"");
            } else {
                $news->pdf_file = News::where('id', '=', $id)->value('pdf_file');
            }

            // ARCHIVE
            if($request->hasFile('archive_file'))
            {
                $file_name = sha1(rand() . time() . rand()) . '.' . $archive_file->getClientOriginalExtension();
                $archive_file->move(public_path("/news/archives/" . date('F_Y')), $file_name);

                $news->archive_file = $file_name;
            } else {
                $news->archive_file = News::where('id', '', $id)->value('archive_file');
            }

            $news->title_fr        = Input::get('title_fr');
            $news->title_en        = Input::get('title_en');
            $news->description_fr  = Input::get('description_fr');
            $news->description_en  = Input::get('description_en');

            $news->save();

            // redirect
            return Redirect::to($lang . '/admin/news');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        // delete
        $news = News::find($id);

        // IMAGE
        if(!empty($news['image_file'])) {
            $image_file_path = $_SERVER['DOCUMENT_ROOT'] . "/news/image/" . date('F_Y') . '/' . $news['image_file'];
            if(file_exists($image_file_path)) {
                unlink($image_file_path);
            }
        }

        // PDF
        if(!empty($news['pdf_file'])) {
            $pdf_file_path = $_SERVER['DOCUMENT_ROOT'] . "/news/pdf/" . date('F_Y') . '/' . $news['pdf_file'];
            if(file_exists($pdf_file_path)) {
                unlink($pdf_file_path);
            }
        }

        // ZIP
        if(!empty($news['archive_file'])) {
            $archive_file_path = $_SERVER['DOCUMENT_ROOT'] . "/news/archives/" . date('F_Y') . '/' . $news['archive_file'];
            if(file_exists($archive_file_path)) {
                unlink($archive_file_path);
            }
        }

        $news->delete();

        // redirect
        return back();
    }
}
