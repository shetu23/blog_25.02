@extends('layouts.master')
@section('title','blog dashboard')
@section('content')
<div class="container-fluid px-4">  
        <div class="card mt-4">
                            <div class="card-header">
                                <h4>add posts
                                    <a href="{{url('admin/add-post')}}"
                                    class="btn btn-primary btn-sm float-end">
                                    add posts</a>
</h4>
</div>
<div class="card-body">

@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <div>{{$error}}</div>
    @endforeach
</div>
@endif

    <form action="{{url('admin/add-post')}}" method="POST" >
     @csrf
<div class="mb-3">
    <label for="">Category </label>
   <select name="category_id" class="form-control">
    @foreach ($category as $cateitem)
    <option value="{{$cateitem->id}}">{{$cateitem->name}}</option>
    @endforeach
</select>
</div>
<div class="mb-3">
    <label for="">post name</label>
    <input type="text" name="name" class="form-control">
</div>
<div class="mb-3">
    <label for="">slug</label>
    <input type="text" name="slug" class="form-control">
</div>
<div class="mb-3">
    <label for="">description</label>
    <textarea name="description" rows="5" class="form-control"></textarea>
</div>
<div class="mb-3">
    <label>yt_iframe link</label>
    <input type="text" name="yt_iframe" class="form-control">
</div>
<h6>SEO tags</h6>
<div class="mb-3">
    <label>meta title</label>
    <input type="text" name="meta_title" class="form-control">
</div>
<div class="mb-3">
    <label>meta description</label>
    <textarea name="meta_description" rows="3" class="form-control"></textarea>
</div>
<div class="mb-3">
    <label>meta keywords</label>
    <textarea name="meta_keyword" rows="3" class="form-control"></textarea>
</div>
<h6>Status mode</h6>

<div class="col-md-3 mb-3">
    <label>status</label>
    <input type="checkbox" name="status"/>
</div>
<div class="col-md-6">
    <button type="submit" class="btn btn-primary">save post</button>
</div>

</div>
    </form>
</div>    
</div>
                    
</div>
@endsection