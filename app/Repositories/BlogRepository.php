<?php

namespace App\Repositories;

use App\Models\Blog;
use Illuminate\Support\Str;

use App\Repositories\BaseRepository;



class BlogRepository extends BaseRepository
{
    public function store($request)
    {
        try {
            $this->handleFiles($request);

            $request->request->add(['slug' => Str::slug($request->title, '-')]);
            // dd($request->except('_token', 'blog_thumbnail', 'blog_banner'));
            $blog = Blog::create($request->except('_token', 'blog_thumbnail', 'blog_banner'));
        } catch (\Throwable $th) {
            dd($th);
        }

        return true;
    }

    public function update($request, $id)
    {
        try {
            $this->handleFiles($request, Blog::find($id));

            $request->request->add(['slug' => Str::slug($request->title, '-')]);


            Blog::find($id)->update($request->except('_method', '_token', 'blog_thumbnail', 'blog_banner'));
        } catch (\Throwable $th) {
            dd($th);
        }

        return true;
    }



    public function handleFiles($request, $blog = null)
    {

        if ($request->hasfile('blog_thumbnail')) {
            $request->request->add(['thumbnail' => $this->handleSingleFileUpload($request->blog_thumbnail, 'uploads/content/')]);
        }
        if (isset($blog)) {

            $this->handleDeleteFile($blog->thumbnail, '/content/');
        }
        if ($request->hasfile('blog_banner')) {
            $request->request->add(['banner' => $this->handleSingleFileUpload($request->blog_banner, 'uploads/content/')]);
        }
        if (isset($blog)) {

            $this->handleDeleteFile($blog->banner, '/content/');
        }

      
    }


    public function toggleStatus($id, $status)
    {
        return Blog::find($id)->update(['status' => $status]);
    }

    public function getPaginated(string $orderByColumn, string $orderBy)
    {
        $meditates = Blog::orderBy($orderByColumn, $orderBy);



        return $meditates->get();
    }
}
