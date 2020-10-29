<?php

namespace App\Http\Controllers;

use App\Emoji;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class EmojiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emoji = Emoji::all();
        //dd($emoji);
        return view('emoji.index', compact('emoji'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("emoji.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            "slug"=>"required|unique:emoji",
            "character"=>"required",
            "unicodeName"=>"required|unique:emoji|max:100",
            "codePoint"=>"required|unique:emoji|max:15",
            "group"=>"required|max:100",
            "subGroup"=>"required|max:100",
        ]);

        $newItem = new Emoji;

        $newItem->fill($data);

        $newItem->save();

        return redirect()->route("emoji.show", $newItem);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Emoji  $emoji
     * @return \Illuminate\Http\Response
     */
    public function show(Emoji $emoji)
    {
        
        return view('emoji.show', compact('emoji'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Emoji  $emoji
     * @return \Illuminate\Http\Response
     */
    public function edit(Emoji $emoji)
    {
        return view('emoji.edit', compact('emoji'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Emoji  $emoji
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emoji $emoji)
    {
        $data = $request->all();

        $request->validate([
            "slug"=> [
                "required",
                Rule::unique('emoji')->ignore($emoji),
            ],
            "character"=>"required",
            "unicodeName"=> [
                "required",
                "max:100",
                Rule::unique('emoji')->ignore($emoji),
            ],
            "codePoint"=> [
                "required",
                "max:15",
                Rule::unique('emoji')->ignore($emoji),
            ],
            "group"=>"required|max:100",
            "subGroup"=>"required|max:100",
        ]);

        $emoji->update($data);
        return redirect()->route("emoji.show", $emoji);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Emoji  $emoji
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emoji $emoji)
    {
        //
    }
}
