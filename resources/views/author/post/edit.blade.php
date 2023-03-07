@extends('layouts.master')
@section('title','post')
@section('content')
<div class="container-fluid px-4">
                        <div class="card mt-4">
                            <div class="card-header"><h4 class="">edit-post</h4>
                       
</div>
<div class="card-body">

@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <div>{{$error}}</div>
    @endforeach
</div>
@endif

    <form action="{{url('/author/update-post/'.$post->id)}}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('PUT')
     <div class="mb-3">
    <label for="">Category </label>
   <select name="category_id" required class="form-control">
   <option value="">select category</option>
   @foreach ($category as $cateitem)
    <option value="{{$cateitem->id}}"  >
    {{$cateitem->name}}</option>
    @endforeach
</select>
</div>
<div class="mb-3">
    <label for="">post name</label>
    <input type="text" name="name" value="{{$post->name}}" class="form-control">
</div>
<div class="mb-3">
    <label for="">slug</label>
    <input type="text" name="slug"  value="{{$post->slug}}" class="form-control">
</div>
<div class="mb-3">
    <label for="">description</label>
    <textarea name="description" rows="5" id="mySummernote" value="{{$post->description}}" class="form-control">{!! $post->description!!}</textarea>
</div>

<h6>SEO tags</h6>
<div class="mb-3">
    <label>meta title</label>
    <input type="text" name="meta_title"  value="{{$post->meta_title}}" class="form-control">
</div>
<div class="mb-3">
    <label>meta description</label>
    <textarea name="meta_description" rows="3" class="form-control">{!! $post->meta_description!!}</textarea>
</div>
<div class="mb-3">
    <label>meta keywords</label>
    <textarea name="meta_keyword" rows="3" class="form-control">{!! $post->meta_keyword !!}</textarea>
</div>
<h6>Status mode</h6>

<div class="col-md-3 mb-3">
    <label>status</label>
    <input type="checkbox" name="status"/>
</div>
<div class="col-md-6">
    <button type="submit" class="btn btn-primary">update post</button>
</div>

</div>
    </form>

</div>
</div>
</div>
@endsection