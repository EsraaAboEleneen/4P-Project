<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\About\AboutCreateController;
use App\Http\Requests\Admin\About\AboutUpdateController;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $abouts = About::paginate(5);
        return view('admin.about.index',compact('abouts',$abouts));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AboutCreateController $request)
    {
        $input = $request->all();
        if ($request->hasFile('image')){
            $file_des = 'public/images/about';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $request->file('image')->storeAs($file_des,$image_name);
            $input['image'] = $image_name;
        }
        $about = About::create($input);
        return redirect(route('about.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view('admin.about.show',compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about = About::find($id);
        return view('admin.about.edit',compact('about',$about));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AboutUpdateController $request,About $about)
    {
        $input = $request->all();
        if ($request->hasFile('image'))
        {
            $attach_des = 'public/images/about';
            $image = $request->file('image');
            $attach_name = $image->getClientOriginalName();
            if ($attach_name){
                Storage::delete($attach_des.$attach_name);
            }
            $request->file('image')->storeAs($attach_des,$attach_name);
            $input['image'] = $attach_name;
        }
        $about->update($input);
        return redirect(route('about.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();
        return redirect(route('about.index'));
    }
}
