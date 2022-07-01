<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $post = Post::all();
        return response()->json([  
            "success" => true,
            "message" => "Product List",
            "data" => $post
        ]);
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
    public function store(Request $request){
        $validateData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|file|max:1024',
            'category_id' => 'required'
        ]);

        $validateData['user_id']=auth()->user->id;

        Post::create($validateData);
        return response()->json([
            "success" => true,
            "message" => "Artikel berhasil dibuat!",
            "data" => $validateData
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post){
        //menampilkan data artikel
        $post = Post::find($post);
        if (is_null($post)) {
        return $this->sendError('pos$post not found.');
        }
        return response()->json([
        "success" => true,
        "message" => "retrieved successfully.",
        "data" => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post){
        //mengupdate data artikel
        $rules =[
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'image|file|max:1024',
            'category_id' => 'required'
        ];

        $validateData = $request->validate($rules);

        // cek image baru
        if($request->file('image')){
            // hapus image lama
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validateData['image'] = $request->file('image')->store('post-images');
        }

        $validateData['user_id']=auth()->user()->id;
        Post::where('id', $post->id)
            ->update($validateData);
        return response()->json([
            "success" => true,
            "message" => "Artikel berhasil diupdate !.",
            "data" => $post
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post){
        //menghapus post artikel
        Post::destroy($post->id);
        return response()->json([
            "success" => true,
            "message" => "Artikel berhasil dihapus !.",
            "data" => $post
            ]);
    }
}
