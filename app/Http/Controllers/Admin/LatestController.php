<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Latest\LatestCreateController;
use App\Http\Requests\Admin\Latest\LatestUpdateController;
use App\Models\Latest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class LatestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $latests = Latest::paginate(5);
        return view('admin.latest.index',compact('latests',$latests));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.latest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LatestCreateController $request)
    {
        $input = $request->all();
        if ($request->hasFile('attach')){
            $file_des = 'public/attachs/latest';
            $attach = $request->file('attach');
            $attach_name = $attach->getClientOriginalName();
            $request->file('attach')->storeAs($file_des,$attach_name);
            $input['attach'] = $attach_name;
        }
        Latest::create($input);
        return redirect(route('latest.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Latest $latest)
    {
        return view('admin.latest.show',compact('latest',$latest));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $latest = Latest::find($id);
        return view('admin.latest.edit',compact('latest',$latest));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LatestUpdateController $request, Latest $latest)
    {
        $input = $request->all();
        if ($request->hasFile('attach'))
        {
            $attach_des = 'public/images/latest';
            $attach = $request->file('attach');
            $attach_name = $attach->getClientOriginalName();
            if ($attach_name){
                Storage::delete($attach_des.$attach_name);
            }
            $request->file('attach')->storeAs($attach_des,$attach_name);
            $input['attach'] = $attach_name;
        }
        $latest->update($input);
        return redirect(route('latest.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Latest $latest)
    {
        $latest->delete();
        return redirect(route('latest.index'));
    }
}
