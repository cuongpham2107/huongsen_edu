<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CategoryCooperationLink;
use App\CooperationLink;

class CooperationController extends Controller
{
    public function category($id) {

        $category = CategoryCooperationLink::where('slug', $id)->first();
     
        $posts = CooperationLink::where('status','published')->where('category_cooperation_link_id', $category->id)->orderBy('created_at', 'desc')->paginate(6);
        $pageMeta = [
            'title' => setting('site.title') ?? null,
            'meta_description' => setting('site.description') ?? null,
            'image' => setting('site.logo'),
        ];
        return view('pages.cooperation-links.index')->with(compact('posts','pageMeta','category'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = CooperationLink::where('status','published')->orderBy('created_at', 'desc')->paginate(6);
        $pageMeta = [
            'title' => setting('site.title') ?? null,
            'meta_description' => setting('site.description') ?? null,
            'image' => setting('site.logo'),
        ];
        return view('pages.cooperation-links.index')->with(compact('posts','pageMeta'));
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
        $post = CooperationLink::where('status','published')->where('slug', $id)->first();
        if ($post) {
            $post_popular = CooperationLink::where('status', 'published')
                ->whereNotIn('id', [$post->id])
                ->limit(5)
                ->get();
        }
        $pageMeta = [
            'title' => $post->title ?? null,
            'meta_description' => $post->excerpt ?? null,
            'image' => $post->image ?? setting('site.logo')
        ];
        return view('pages.cooperation-links.show')->with(compact('post','pageMeta','post_popular'));
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
