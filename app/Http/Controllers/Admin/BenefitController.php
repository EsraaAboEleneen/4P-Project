<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Benefit\BenefitCreateRequest;
use App\Http\Requests\Admin\Benefit\BenefitUpdateRequest;
use App\Models\Benefit;
use App\Models\Blog;
//use Faker\Provider\File;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use function Sodium\compare;

class BenefitController extends Controller
{

    public $model ;
    protected $view = 'benefits' ;
    public function __construct()
    {
        $this->model =new Benefit() ;
    }

    public function view($view,$par = null){
        return $this->view($view.$par);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $benefits =  $this->model->paginate(5);
        return view('admin.benefits.index',compact('benefits',$benefits));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.benefits.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BenefitCreateRequest $request)
    {
        $input = $request->all();
        if ($request->hasFile('attachment')){
            $attach_des = 'public/images/benefits';
            $attachment = $request->file('attachment');
            $attach_name = $attachment->getClientOriginalName();
            $request->file('attachment')->storeAs($attach_des,$attach_name);
            $input['attachment'] = $attach_name;
        }
        $benefits = Benefit::create($input);
        return redirect(route('benefits.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Benefit $benefit)
    {
        return view('admin.benefits.show',compact('benefit',$benefit));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $benefit = Benefit::find($id);
        return view('admin.benefits.edit',compact('benefit',$benefit));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BenefitUpdateRequest $request,Benefit $benefit)
    {
        $input = $request->all();
        if ($request->hasFile('attachment'))
        {
            $attach_des = 'public/images/benefits';
            $attachment = $request->file('attachment');
            $attach_name = $attachment->getClientOriginalName();
            if ($attach_name){
                Storage::delete($attach_des.$attach_name);
            }
            $request->file('attachment')->storeAs($attach_des,$attach_name);
            $input['attachment'] = $attach_name;
        }
        $benefit->update($input);
        return redirect(route('benefits.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Benefit $benefit)
    {
        $benefit->delete();
        return redirect(route('benefits.index'));
    }
}
