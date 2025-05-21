<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function view_image(Request $request)
    {
        $data['images'] = Image::latest()->get();
        return view('image_management.view_image', $data);
    }
    public function addEdit_image(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'You need to be logged in to access this page.');
        } else {
            $data['editimage'] = Image::find($id);
            return view('image_management.addEdit_image', $data);
        }
    }
    public function postImageAddEdit(Request $request)
    {
        if ($request->image_id == 0) {
            $request->validate([
                'image_name' => 'required|string|max:255',
                'image_section' => 'required|string',
                'social_media_link' => 'nullable|string',
                'details' => 'nullable|string',
                'image_file' => 'nullable|file|mimes:jpg,jpeg,png,webp',
            ]);

            if ($request->hasFile('image_file')) {
                $image = $request->file('image_file');
                $imageName = time() . '.' . $image->getClientOriginalExtension();

                // Move the file to the public/assets/front_images directory
                $image->move(public_path('assets/front_images'), $imageName);

                // Store the relative path
                $imagePath = $imageName;
            }else{
                $imagePath = Null;
            }

            $add_image = Image::create([
                'image_name' => $request->image_name,
                'social_media_link' => $request->social_media_link,
                'image_section' => $request->image_section,
                'alignment' => $request->alignment,
                'details' => $request->details,
                'file_path' => $imagePath,
                'created_at' => date("Y-m-d H:i:s"),
            ]);
            if ($add_image) {
                return redirect()->back()->with('success', 'Image uploaded successfully!');
            } else {
                return redirect()->back()->with('error', 'Faild to upload!');
            }
        } else {
            //  Update Existing Image
            $request->validate([
                'image_name' => 'required|string|max:255',
                'image_section' => 'required|string',
                'image_file' => 'nullable|file|mimes:jpg,jpeg,png,webp',
            ]);

            $edit_image = Image::find($request->image_id);
            if (!$edit_image) {
                return redirect()->back()->with('error', 'Image not found.');
            }

            if ($request->hasFile('image_file')) {
                // Delete old image if it exists
                if ($edit_image->file_path && file_exists(public_path($edit_image->file_path))) {
                    unlink(public_path($edit_image->file_path));
                }
                // Upload new image
                $image = $request->file('image_file');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('assets/front_images'), $imageName);
                //$imagePath = 'assets/front_images/' . $imageName;
            } else {
                // Keep the old image path if no new file is uploaded
                $imageName = $edit_image->file_path;
            }
            $edit_image->image_name = $request->image_name;
            $edit_image->social_media_link = $request->social_media_link;
            $edit_image->image_section = $request->image_section;
            $edit_image->alignment = $request->alignment;
            $edit_image->details = $request->details;
            $edit_image->file_path = $imageName;
            $edit_image->updated_at = date("Y-m-d H:i:s");
            $updated = $edit_image->save();

            return $updated
                ? redirect()->back()->with('success', 'Image updated successfully!')
                : redirect()->back()->with('error', 'Failed to update image!');
        }
    }
    public function view_blog(Request $request)
    {
        $data['images'] = Image::latest()->get();
        $data['blog'] = Blog::latest()->get();
        return view('blog_management.view_blog', $data);
    }
    public function addEdit_blog(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect('/login')->with('error', 'You need to be logged in to access this page.');
        } else {
            $data['editimage'] = Image::find($id);
            $data['blog'] = Blog::find($id);
            return view('blog_management.addEdit_blog', $data);
        }
    }
    public function postBlogAddEdit(Request $request)
    {
        if ($request->blog_id == 0) {
            $request->validate([
                'blog_title' => 'required|string|max:255',
                'blog_content' => 'required|string',
            ]);

            $add_blog = Blog::create([
                'title' => $request->blog_title,
                'content' => $request->blog_content,
            ]);
            if ($add_blog) {
                return redirect()->back()->with('success', 'Image uploaded successfully!');
            } else {
                return redirect()->back()->with('error', 'Faild to upload!');
            }
        } else {
            //  Update Existing Blog
            $request->validate([
                'blog_title' => 'required|string|max:255',
                'blog_content' => 'required|string',
            ]);

            $edit_blog = Blog::find($request->blog_id);

            //echo $request->blog_id;exit;
            $edit_blog->title = $request->blog_title;
            $edit_blog->content = $request->content;
            $updated = $edit_blog->save();

            return $updated
                ? redirect()->back()->with('success', 'Blog updated successfully!')
                : redirect()->back()->with('error', 'Failed to update Blog!');
        }
    }
    public function delete_image(Request $request, $id)
    {
        // Find the image by ID
        $image = Image::find($id);
        if (!$image) {
            return response()->json(['error' => 'Image not found'], 404);
        }
        if ($image->file_path && file_exists(public_path($image->file_path))) {
            unlink(public_path($image->file_path));
        }
        $image_delete = $image->delete();
        // Attempt to delete the database record only if file deletion was successful
        if ($image_delete) {
            return redirect()->back()->with('success', 'Image deleted successfully!');
        } else {
            return redirect()->back()->with('error', 'Failed to delete image!');
        }
    }
    public function deleteSingleImage(Request $request, $id)
    {
        // Find the image by ID
        $image = Image::find($id);

        if (!$image) {
            return response()->json(['error' => 'Image not found'], 404);
        }
        if ($image->file_path && file_exists(public_path($image->file_path))) {
            unlink(public_path($image->file_path));
        }
        // Set file_path to null and save
        $image->file_path = '';
        $image->save();

        return response()->json(['message' => 'Image deleted and path cleared successfully.']);
    }
}
