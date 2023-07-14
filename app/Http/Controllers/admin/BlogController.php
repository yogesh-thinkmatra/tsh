<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\blogRequest;
use Illuminate\Http\Request;
use App\Repositories\BlogRepository;
use App\Models\Blog;
class BlogController extends Controller
{

    protected $BlogRepository;

    public function __construct(BlogRepository $BlogRepository)
    {
        $this->BlogRepository = $BlogRepository;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = $this->BlogRepository->getPaginated('id', 'desc');


        return view('admin.view-blogs', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.add-blogs');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(blogRequest $request)
    {
        $this->BlogRepository->store($request);
        return redirect()->route('admin.blog.index')->with('success', 'Blog added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);



        return view('admin.edit-blogs', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(blogRequest $request, string $id)
    {
        $this->BlogRepository->update($request, $id);
        return redirect()->route('admin.blog.index')->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::where('id', $id)->delete();
        return redirect()->route('admin.blog.index')->withErrors('Blog deleted successfully');
    }
}
