<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
#ani
        // dd($posts); 
        return view('ideas', compact('posts'));
        // return view('ideas', compact('ideas'));

            //return view('posts', array('posts_pentru_view' => $posts));
            // return view('posts')->with($post);
         // return view('posts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title'=>'required|string|max:255',
            'body'=>'required',
            ]);
        Posts::create($request->all());
        return redirect()->route('ideas.index')->with('success','Post created success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Posts::find($id);
        return view('show',compact('posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Posts::find($id);
        return view('edit',compact('posts'));
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
            $this->validate($request,[
            'title'=>'required',
            'body'=>'required',
            ]);
        Posts::find($id)->update($request->all());
        return redirect()->route('ideas.index')->with('success','Post updated success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Posts::find($id)->delete();
        return redirect()->route('ideas.index')->with('success','Post deleted');
    }
}
