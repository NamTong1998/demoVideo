<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Video;

class VideoController extends Controller
{
    const VIDEO = 'video';

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $videos = Video::all();
        return view('video.list', ['videos' => $videos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('video.create');
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
        $request->validate([
            'title' => 'required'
        ]);

        $video = new Video();
        $video->title = $request->get('title');
        
        /*
        $file = $request->file('video');
        $name = $file->getClientOriginalName();
        while( file_exists("uploaded_videos/".$name) )
        {
            $name = $name.str_random(6);
        }
        $file->move('uploaded_videos', $name);

        $video->path = $name;
        */
        $path = Storage::disk('public')->put(self::VIDEO, $request->file('video'));
        $video->path = $path;

        $video->save();

        return redirect()->route('list');
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
        $video = Video::find($id);

        return view('video.show', ['video' => $video]);
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
