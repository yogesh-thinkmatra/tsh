@extends('admin.layouts.app')
@section('body')
    <div class="page-wrapper section-space--inner--120">
        <div class="blog-section">
            <div class="container">
                <div class="row">

                    <a href="{{ route('admin.blog.create') }}" class="btn btn-sm btn-success" style="width:auto">Add Post</a>

                    <table id="example" class="display table" style="width:100%;">
                        <thead style="">
                            <tr>
                                <th>Title</th>
                                <th>Thumbnail</th>
                                <th>Details</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                
                        
                            <tr>
                                <td>{{$blog->title}}</td>
                                <td><img src="{{ asset('uploads/content'.'/'.$blog->thumbnail) }}"
                                        style="width: 130px;height: 130px;
                            " alt=""
                                        class="img-thumbnail"></td>
                                <td>Id : {{$blog->id}} <br>
                                    slug : {{$blog->slug}}
                                </td>
                                <td>
                                    <a class="btn btn-sm btn-danger mt-1" href="{{route('admin.blog.destroy',$blog->id)}}">Delete</a> <br>
                                    <a class="btn btn-sm btn-info mt-1" href="{{route('admin.blog.edit',$blog->id)}}">Update</a> <br>

                                </td>

                            </tr>
                            @endforeach
                            

                        </tbody>

                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection
