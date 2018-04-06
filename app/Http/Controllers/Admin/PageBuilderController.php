<?php

namespace App\Http\Controllers\Admin;

use App\PageTemplate;
use Illuminate\Http\Request;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\Admin\PageBuilderHelperController;

class PageBuilderController extends HelperController
{

    public function __construct()
    {
        PageBuilderHelperController::updatePageBuilder();
    }

    public function index()
    {
        return view("admin.pagebuilder.pages.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $directories = $this->recursiveDirectoryPath($this->recursiveDirectoryOnlyIterator('site'));
        $templates = [];
        return view("admin.pagebuilder.pages.create",compact('directories','templates'));
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