<?php

namespace App\Http\Controllers;
use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

/*        $tags = Tag::all();
        
        return view("tags.index", ["tags" => $tags]);
*/
        $search = \Request::get('search');
        $tags = Tag::where('name','like','%'.$search.'%')->orderBy('id')->paginate(3);
         return view("tags.index", ["tags" => $tags]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tag= new tag;
        return view ("tags.create", ["tag"=>$tag]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tag = new tag;
        $tag->name = $request->name; 
        
        if($tag->save()){
            return redirect("/tags");
        }
        else{
            return view ("tags.create",["tag" => $tag]);
        }
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
        $tag= tag::find($id);
        return view ("tags.edit", ["tag"=>$tag]);
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
        $tag = tag::find($id);

        $tag->name = $request->name; 

        if($tag->save()){
            return redirect("/tags");
        }
        else{
            return view ("tags.edit",["tag" => $tag]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        tag::destroy($id);

        return redirect('/tags');
    }
}
