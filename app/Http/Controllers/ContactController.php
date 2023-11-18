<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Feedback;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pageMeta = [
            'title' =>  'Contact Us',
            'meta_description' => setting('site.description')
        ];
        return view('pages.contact.index',compact('pageMeta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quick = $request->input('quick', false);
        $validated = $request->validate([
        'email' => 'email:rfc,dns',
        
        ]);

        if (!$quick) {
        $validated = $request->validate([
            'name' => 'required|max:120',
            'phone' => 'required|numeric|min:10'
        ]);
        }

        try {
        $alert = [
            "type" => "success",
            "title" => __("Thành công"),
            "body" => __("Cảm ơn bạn đã liên hệ, chúng tôi sẽ sớm phản hồi cho bạn!")
        ];

        $feedback= new Feedback();
        $feedback->name= $request->name;
        $feedback->email= $request->email;
        $feedback->phone= $request->phone;
        $feedback->content= $request->content;
        // $feedback->title= $request->title;
        $feedback->save();
        } catch (\Exception $e) {
        $alert = [
            "type" => "error",
            "title" => __("Không thành công"),
            "body" => __("Có lỗi đã xảy ra, vui lòng thử lại!")
        ];
        }

        return redirect()->back()->with('alert', $alert);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
