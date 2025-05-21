<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class FrontController extends Controller
{
    public function index()
    {
       $data['homeimagebanner'] = Image::where('image_section', 'banner')->first();
       $data['homeimagelogo'] = Image::where('image_section', 'logo')->first();
       $data['imagesocial_link'] = Image::where('image_section', 'social_link')->get();
        return view('front_Page.home_page', $data);
    }
    public function about_us(Request $request)
    {
        $data['homeimagebanner'] = Image::where('image_section', 'banner')->first();
        $data['homeimagelogo'] = Image::where('image_section', 'logo')->first();
        $data['imagesocial_link'] = Image::where('image_section', 'social_link')->get();
        $data['imageabout_us'] = Image::where('image_section', 'about_us')->get();
        return view('front_Page.about', $data);
    }
    public function our_products(Request $request)
    {
        $data['homeimagebanner'] = Image::where('image_section', 'banner')->first();
        $data['homeimagelogo'] = Image::where('image_section', 'logo')->first();
        $data['imagesocial_link'] = Image::where('image_section', 'social_link')->get();
        $data['imageour_products'] = Image::where('image_section', 'our_products')->get();
        return view('front_Page.our_product', $data);
    }
    public function blogs(Request $request)
    {
        $data['homeimagebanner'] = Image::where('image_section', 'banner')->first();
        $data['homeimagelogo'] = Image::where('image_section', 'logo')->first();
        $data['imagesocial_link'] = Image::where('image_section', 'social_link')->get();
        $data['imageblogs'] = Image::where('image_section', 'blogs')->get();
        return view('front_Page.blogs', $data);
    }
    public function why_us(Request $request)
    {
        $data['homeimagebanner'] = Image::where('image_section', 'banner')->first();
        $data['homeimagelogo'] = Image::where('image_section', 'logo')->first();
        $data['imagesocial_link'] = Image::where('image_section', 'social_link')->get();
        $data['imagewhy_us'] = Image::where('image_section', 'why_us')->get();
        return view('front_Page.home_page', $data);
    }
    public function contact_us(Request $request)
    {
        $data['homeimagebanner'] = Image::where('image_section', 'banner')->first();
        $data['homeimagelogo'] = Image::where('image_section', 'logo')->first();
        $data['imagesocial_link'] = Image::where('image_section', 'social_link')->get();
        $data['imagebcontact_us'] = Image::where('image_section', 'contact_us')->get();
        return view('front_Page.contact', $data);
    }
}
