<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Blogs\BlogCreateRequest;
use App\Http\Requests\Admin\Blogs\BlogUpdateRequest;
use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $blogs = Blog::paginate(5);
        return view('admin/blogs.index',compact('blogs',$blogs));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCreateRequest $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')){
            $file_des = 'public/images/blogs';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $request->file('image')->storeAs($file_des,$image_name);
            $input['image'] = $image_name;
        }
        $blogs = Blog::create($input);
        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        return view('admin/blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('admin/blogs.edit',compact('blog',$blog));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogUpdateRequest $request, Blog $blog)
    {
        $input = $request->all();
        if ($request->hasFile('image'))
        {
            $attach_des = 'public/images/blogs';
            $image = $request->file('image');
            $attach_name = $image->getClientOriginalName();
            if ($attach_name){
                Storage::delete($attach_des.$attach_name);
            }
            $request->file('image')->storeAs($attach_des,$attach_name);
            $input['image'] = $attach_name;
        }
        $blog->update($input);
        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
        return redirect(route('blogs.index'));
    }
}
