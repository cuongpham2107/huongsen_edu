<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdmissionArticle;
use App\CategoryAdmissionArticle;

class AdmissionArticlesController extends Controller
{
    public function category($id) {
        $category = CategoryAdmissionArticle::where('slug', $id)->first();
     
        $posts = AdmissionArticle::where('status','published')->where('category_admission_article_id', $category->id)->paginate(6);
        $pageMeta = [
            'title' => setting('site.title') ?? null,
            'meta_description' => setting('site.description') ?? null,
            'image' => setting('site.logo'),
        ];
        return view('pages.admission-articles.category')->with(compact('posts','pageMeta','category'));
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = AdmissionArticle::where('status','published')->orderBy('created_at', 'desc')->paginate(6);
        $pageMeta = [
            'title' => setting('site.title') ?? null,
            'meta_description' => setting('site.description') ?? null,
            'image' => setting('site.logo'),
        ];
        return view('pages.admission-articles.index')->with(compact('post','pageMeta'));
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
        $post = AdmissionArticle::where('status','published')->where('slug', $id)->first();
        if ($post) {
            $post_popular = AdmissionArticle::where('status', 'published')
                ->whereNotIn('id', [$post->id])
                ->limit(5)
                ->get();
        }
        $pageMeta = [
            'title' => $post->title ?? null,
            'meta_description' => $post->excerpt ?? null,
            'image' => $post->image ?? setting('site.logo')
        ];
        return view('pages.admission-articles.show')->with(compact('post','pageMeta','post_popular'));
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
