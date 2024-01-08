<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use App\StaticData;
use App\Teacher;

class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $about = Page::where('status','ACTIVE')->where('slug', $id)->first();
        $pageMeta = [
            'title' => $about->title ?? null,
            'meta_description' => $about->excerpt ?? null,
            'image' => $about->image ?? setting('site.logo')
        ];
        return view('pages.about-us.show')->with(compact('about','pageMeta'));
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function staff($id)
    {
        $our_team = Teacher::all();
        $about = Page::where('status','ACTIVE')->where('slug', $id)->first();
        $pageMeta = [
            'title' => $about->title ?? null,
            'meta_description' => $about->excerpt ?? null,
            'image' => $about->image ?? setting('site.logo')
        ];
        return view('pages.about-us.staff')->with(compact('about', 'our_team','pageMeta'));
    }
}
