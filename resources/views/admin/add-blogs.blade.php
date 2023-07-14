@extends('admin.layouts.app')
@section('body')
    <div class="page-wrapper section-space--inner--120">
        <div class="blog-section">
            <div class="container">
                <div class="row">

                    <form action="{{route('admin.blog.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <label for="">Title</label>
                            <input type="test" name="title" class="form-control" id="title" required
                                value="{{ old('title') }}">
                            <label for="">Thumbnail</label>
                            <input type="file" name="blog_thumbnail" class="form-control" id="blog_thumbnail" required accept="image/*">
                            <label for="">Banner</label>
                            <input type="file" name="blog_banner" class="form-control" id="blog_banner" required accept="image/*">

                            <label for="">Description</label>
                            <textarea name="description" id="description" cols="5" rows="5" class="form-control">{{ old('description') }}</textarea>
                        </div>
                        <center><button class="btn btn-sm btn-success mt-1" type="submit">Submit</button></center>
                    
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
