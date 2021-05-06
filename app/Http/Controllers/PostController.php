<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user')->orderBy('updated_at', 'DESC')->get();
        return view('frontend.blog.index', compact(['posts']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('frontend.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'post_image' => 'required|mimes:jpg, jpeg, png|max:5048',
        ]);

        $slug = Str::slug($request->title);
        $newImageName = uniqid() . '-' .  $slug . '.' . $request->post_image->getClientOriginalExtension();
        $request->post_image->move(public_path('/storage/post_images/'), $newImageName);

        Post::create([
            'title' => $request->title,
            'slug' => $slug,
            'description' => $request->description,
            'post_image' => $newImageName,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('blog.index')->with('message', 'Your post has been added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('frontend.blog.show', compact(['post']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $post = Post::where('slug', $slug)->first();
        return view('frontend.blog.edit', compact(['post']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $old = Post::where('slug', $slug)->first();
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'post_image' => 'nullable|mimes:jpg, jpeg, png|max:5048',
        ]);

        $slug_title = Str::slug($request->title);
        if ($request->hasFile('post_image')) {

            $newImageName = uniqid() . '-' .  $slug_title . '.' . $request->post_image->getClientOriginalExtension();
            $request->post_image->move(public_path('/storage/post_images/'), $newImageName);

            if ($old->post_image) {
                unlink(public_path('/storage/post_images/') . $old->post_image);
            }
        } else {
            $newImageName = $old->post_image;
        }

        $post = Post::where('slug', $slug)->update([
            'title' => $request->title,
            'slug' => $slug_title,
            'description' => $request->description,
            'post_image' => $newImageName,
        ]);

        if ($post) {
            return redirect()->route('blog.index')->with('message', 'Your post has been Updated!');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}