<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Page;
use TCG\Voyager\Models\Post;
use App\Banner;
use App\StaticData;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $about_us = Page::where('status','ACTIVE')->where('slug','ve-chung-toi')->first();
        $our_blog = Post::where('status','PUBLISHED')->limit(3)->get();
        $our_gallery = StaticData::where('status','PUBLISHED')->where('slug','our-gallery')->first();
        $admission_articles = StaticData::where('status','PUBLISHED')->where('type','tuyen-sinh')->get();
        $our_team = StaticData::where('status','PUBLISHED')->where('type','our-team')->get();
        $banner_image = \App\Banner::where('status','PUBLISHED')->where('type','image-home')->first();
        return view('pages.home.index')
            ->with(compact(
                'our_blog',
                'about_us',
                'our_gallery',
                'admission_articles',
                'our_team',
                'banner_image'
                )
            );
    }

    public function search(Request $request)
    {
        $post = Post::where('status','PUBLISHED')->where('title', 'like', '%' . $request->search ?? '' . '%')->paginate(6);
        return view('pages.search.index')
        ->with(compact(
            'post'
            )
        );
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
