<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Echipamente;

class EchipamenteController extends Controller
{
        public function index()
    {
        $echipamente = Echipamente::all();
        return view('echipamente', compact('echipamente'));
    }



   		public function create()
    {
        return view ('adaugareechipament'); 
    }



        public function store(Request $request)
    {
        $this->validate($request,[
            'cod'=>'required',
            'identificator'=>'required',
            ]);
        Echipamente::create($request->all());
        return redirect()->route('echipamente.index')->with('success','Post created success');
    }


     public function show($id)
    {
        $posts = Echipamente::find($id);
        return view('show',compact('echipamente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Echipamente::find($id);
        return view('edit',compact('echipamente'));
    }


        public function update(Request $request, $id)
    {
            $this->validate($request,[
            'cod'=>'required',
            'identificator'=>'required',
            ]);
        Posts::find($id)->update($request->all());
        return redirect()->route('echipamente.index')->with('success','Post updated success');
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
        return redirect()->route('echipamente.index')->with('success','Post deleted');
    }


}
