@extends('layouts.master')
@section('title','category')
@section('content')
<div class="container-fluid px-4">
                        <div class="card mt-4">
                            <div class="card-header"><h4 class="">edit-category</h4>
                       
</div>
<div class="card-body">

@if($errors->any())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
    <div>{{$error}}</div>
    @endforeach
</div>
@endif

    <form action="{{url('admin/update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
     @csrf
     @method('PUT')
<div class="mb-3">
    <label for="">category name</label>
    <input type="text" name="name" value="{{$category->name}}" class="form-control">
</div>
<div class="mb-3">
    <label for="">slug</label>
    <input type="text" name="slug" value="{{$category->slug}}" class="form-control">
</div>
<div class="mb-3">
    <label for="">description</label>
    <textarea name="description" rows="5" id="mySummernote" class="form-control">{{$category->description}}</textarea>
</div>
<div class="mb-3">
    <label>image</label>
    <input type="file" name="image" class="form-control">
</div>
<h6>SEO tags</h6>
<div class="mb-3">
    <label>meta title</label>
    <input type="text" name="meta_title"  value="{{$category->meta_title}}" class="form-control">
</div>
<div class="mb-3">
    <label>meta description</label>
    <textarea name="meta_description" rows="3" class="form-control">{{$category->meta_description}}</textarea>
</div>
<div class="mb-3">
    <label>meta keywords</label>
    <textarea name="meta_keyword" rows="3" class="form-control">{{$category->meta_keyword}}</textarea>
</div>
<div class="row">
    <div class="col-md-3 mb-3">
    <label>is_approved</label>
    <input type="checkbox" name="is_approved"  {{$category->is_approved== '1' ? 'checked':''}}/>
</div>
<h6>Status mode</h6>
<div class="row">
    <div class="col-md-3 mb-3">
    <label>navbar status</label>
    <input type="checkbox" name="navbar_status"  {{$category->navbar_status == '1' ? 'checked':''}}/>
</div>
<div class="col-md-3 mb-3">
    <label>status</label>
    <input type="checkbox" name="status" {{$category->status == '1' ? 'checked':''}}/>
</div>
<div class="col-md-6">
    <button type="submit" class="btn btn-primary">update category</button>
</div>

</div>
    </form>

</div>
</div>
</div>
@endsection