<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Welcome', [
            'tweets' => Tweet::orderBy('created_at', 'desc')->get(),
        ]);
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
    public function store(Request $request)
    {
        $file = null;
        $extension = null;
        $fileName = null;
        $path = null;

        if ($request->hasFile('file')) {
            $request->validate([
                'file' => 'required|image|mimes:jpg,png,jpeg,gif,svg,mp4|max:2048',
            ]);
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $extension == 'mp4' ? $path = '/videos/' : $path = '/images/';
        }

        $tweet = new Tweet();
        $tweet->name = 'Aaron Alvarez';
        $tweet->handle = '@aaronalvarez';
        $tweet->image = 'https://picsum.photos/id/237/100';
        $tweet->tweet = $request->tweet;
        $tweet->comments = rand(0, 500);
        $tweet->retweets = rand(0, 500);
        $tweet->likes = rand(0, 500);
        $tweet->analytics = rand(0, 500);

        if ($fileName) {
            $tweet->file = $path . $fileName;
            $tweet->isVideo = $extension == 'mp4' ? true : false;
            $file->move(public_path($path), $fileName);
        }

        $tweet->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Tweet $tweet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tweet $tweet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tweet $tweet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($tweetId)
    {
        $tweet = Tweet::find($tweetId);
        if (!is_null($tweet->file) && file_exists(public_path($tweet->file))) {
            unlink(public_path($tweet->file));
        }
        $tweet->delete();

        return redirect('/');
    }
}
