<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Feedback\FeedbackCreateController;
use App\Http\Requests\Admin\Feedback\FeedbackUpdateController;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $feedbacks = Feedback::paginate(5);
        return view('admin.feedbacks.index',compact('feedbacks',$feedbacks));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.feedbacks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FeedbackCreateController $request)
    {
        $input = $request->all();
        if ($request->hasFile('attachment')){
            $attach_des = 'public/images/feedbacks';
            $attachment = $request->file('attachment');
            $attach_name = $attachment->getClientOriginalName();
            $request->file('attachment')->storeAs($attach_des,$attach_name);
            $input['attachment'] = $attach_name;
        }
        $feedbacks = Feedback::create($input);
        return redirect(route('feedbacks.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Feedback $feedback)
    {
        return view('admin.feedbacks.show',compact('feedback',$feedback));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $feedback = Feedback::find($id);
        return view('admin.feedbacks.edit',compact('feedback',$feedback));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FeedbackUpdateController $request, Feedback $feedback)
    {
        $input = $request->all();
        if ($request->hasFile('attachment'))
        {
            $attach_des = 'public/images/feedbacks';
            $attachment = $request->file('attachment');
            $attach_name = $attachment->getClientOriginalName();
            if ($attach_name){
                Storage::delete($attach_des.$attach_name);
            }
            $request->file('attachment')->storeAs($attach_des,$attach_name);
            $input['attachment'] = $attach_name;
        }
        $feedback->update($input);
        return redirect(route('feedbacks.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();
        return redirect(route('feedbacks.index'));
    }
}
