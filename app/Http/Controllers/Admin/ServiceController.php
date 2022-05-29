<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Service\ServiceUpdateController;
use App\Http\Requests\Admin\Service\ServiceCreateController;
use App\Models\Package;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $services = Service::paginate(5);
        return view('admin.service.index',compact('services',$services));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceCreateController $request)
    {
        $input = $request->all();
        if ($request->hasFile('attach')){
            $file_des = 'public/images/service';
            $attach = $request->file('attach');
            $attach_name = $attach->getClientOriginalName();
            $request->file('attach')->storeAs($file_des,$attach_name);
            $input['attach'] = $attach_name;
        }
        Service::create($input);
        return redirect(route('service.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        return view('admin.service.show',compact('service',$service));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        return view('admin.service.edit',compact('service',$service));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceUpdateController $request, Service $service)
    {
        $input = $request->all();
        if ($request->hasFile('attach'))
        {
            $attach_des = 'public/images/service';
            $attach = $request->file('attach');
            $attach_name = $attach->getClientOriginalName();
            if ($attach_name){
                Storage::delete($attach_des.$attach_name);
            }
            $request->file('attach')->storeAs($attach_des,$attach_name);
            $input['attach'] = $attach_name;
        }
        $service->update($input);
        return redirect(route('service.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect(route('service.index'));
    }
}
