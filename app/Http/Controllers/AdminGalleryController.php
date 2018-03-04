<?php

namespace App\Http\Controllers;
use App\Gallery;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use LaravelLocalization;

class AdminGalleryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function index()
    {
        $gallery = Gallery::orderBy('created_at', 'desc')->get();

        return view('admin.gallery.index', ['gallery' => $gallery]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $front_image_title = [];
        $gallery_images_title = [];
        $lang = LaravelLocalization::getCurrentLocale();

        $rules = array(
            'title_fr'      => 'required',
//            'title_en'      => 'required',
        );

        $gallery = new Gallery;
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to($lang . '/admin/gallery/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {

            $front_image = $request->file('front_image');
            $gallery_images = $request->file('gallery_images');

            if($request->hasFile('front_image'))
            {
                foreach ($front_image as $key => $file) {
                    $file_name = sha1(rand() . time() . rand()) . '.' . $file->getClientOriginalExtension();
                    $front_image_title[$file->getClientOriginalExtension() . '_' . $key] = $file_name;
                    $file->move(public_path("/gallery/front_image/" . date('F_Y')), $file_name);

                    /* resize image */
                    $path = $_SERVER['DOCUMENT_ROOT'] . "/gallery/front_image/" . date('F_Y') . '/' . $file_name;
                    $image = Image::make($path);

                    list($width, $height) = getimagesize($path);
                    $new_width = 1200;
                    $ratio = $width / $height;

                    if($width > $new_width) {
                        $image->resize($new_width, intval($new_width / $ratio));
                    }

                    /* save new image */
                    $image->save($path);
                }
                $gallery->front_image = json_encode($front_image_title);
            } else {
                $gallery->front_image = json_encode($front_image_title);
            }

            if($request->hasFile('gallery_images'))
            {
                foreach ($gallery_images as $key => $file) {
                    $file_name = sha1(rand() . time() . rand()) . '.' . $file->getClientOriginalExtension();
                    $gallery_images_title[$file->getClientOriginalExtension() . '_' . $key] = $file_name;
                    $file->move(public_path("/gallery/gallery_images/" . date('F_Y')), $file_name);

                    /* resize image */
                    $path = $_SERVER['DOCUMENT_ROOT'] . "/gallery/gallery_images/" . date('F_Y') . '/' . $file_name;
                    $image = Image::make($path);

                    list($width, $height) = getimagesize($path);
                    $new_width = 1200;
                    $ratio = $width / $height;

                    if($width > $new_width) {
                        $image->resize($new_width, intval($new_width / $ratio));
                    }

                    /* save new image */
                    $image->save($path);
                }
                $gallery->gallery_images = json_encode($gallery_images_title);
            } else {
                $gallery->gallery_images = json_encode($gallery_images_title);
            }

            $gallery->title_fr        = Input::get('title_fr');
            $gallery->title_en        = Input::get('title_en');
            $gallery->year            = Input::get('year');
            $gallery->save();

            // redirect
            return redirect($lang . '/admin/gallery');
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
        $gallery = Gallery::find($id);
        $gallery_image = Gallery::where('id', '=', $id)->get()->toArray();

        foreach($gallery_image as $item) {
            foreach (json_decode($item['front_image'], true) as $image_path) {
                if(!empty($item['front_image'])) {
                    $front_image_path = $_SERVER['DOCUMENT_ROOT'] . "/gallery/front_image/" . date('F_Y') . '/' . $image_path;
                    if(file_exists($front_image_path)) {
                        unlink($front_image_path);
                    }

                }
            }

            foreach (json_decode($item['gallery_images'], true) as $image_path) {
                if(!empty($item['gallery_images'])) {
                    $gallery_images_path = $_SERVER['DOCUMENT_ROOT'] . "/gallery/gallery_images/" . date('F_Y') . '/' . $image_path;
                    if(file_exists($gallery_images_path)) {
                        unlink($gallery_images_path);
                    }
                }
            }
            $gallery->delete();
        }

        // redirect
        return back();
    }
}
