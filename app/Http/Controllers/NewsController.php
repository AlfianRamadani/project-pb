<?php

namespace App\Http\Controllers;

use App\Models\news;
use App\Http\Requests\StorenewsRequest;
use App\Http\Requests\UpdatenewsRequest;
use App\Models\Post;
use Carbon\Carbon;

class NewsController extends Controller
{

    public function __invoke()
    {
        Carbon::setLocale('id');
        $data = Post::first();
        return view('news')
        ->with(compact('data'));
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorenewsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(news $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(news $news)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenewsRequest $request, news $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(news $news)
    {
        //
    }
}
