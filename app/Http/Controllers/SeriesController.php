<?php

namespace Bahdcasts\Http\Controllers;

use Bahdcasts\Http\Requests\CreateSeriesRequest;
use Bahdcasts\Series;
use Illuminate\Http\Request;

class SeriesController extends Controller
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
        return view('admin.series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateSeriesRequest $request
     * @return void
     */
    public function store(CreateSeriesRequest $request)
    {
        // upload file
        $uploadedImage = $request->image;
        $fileName = str_slug($request->title) . '.' .  $uploadedImage->getClientOriginalExtension();

        $uploadedImage->storePubliclyAs(
            'series',
            $fileName
        );

        // create series
        Series::create([
           'title' => $request->title,
           'slug' => str_slug($request->title),
           'description' => $request->description,
           'image_url' => 'series/' . $fileName
        ]);

        // redirect user to a page to see all series
        return redirect()->back();
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
