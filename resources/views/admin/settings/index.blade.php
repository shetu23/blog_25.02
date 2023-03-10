@extends('layouts.master')
@section('title','blog dashboard')
@section('content')
<div class="container-fluid px-4">  



@if(session('message'))
<h4 class="alert alert-warning">{{session('message')}}</h4>
@endif
        <div class="card mt-4">
                            <div class="card-header">
                                <h4>website_settings
                                   </h4>
</div>
<div class="card-body">


    
     
    <form action="{{url('admin/settings')}}" method="POST" >
     @csrf
<div class="mb-3">
    <label for="">website_name </label>
    <input type="text" name="website_name" class="form-control">
</div>
<div class="mb-3">
    <label>logo</label>
    <input type="file" name="logo" class="form-control">
</div>
<div class="mb-3">
    <label>favicon</label>
    <input type="file" name="favicon" class="form-control">
</div>

<div class="mb-3">
    <label for="">description</label>
    <textarea name="description" rows="5"  id="mySummernote" class="form-control"></textarea>
</div>

<h6>SEO tags</h6>
<div class="mb-3">
    <label>meta title</label>
    <input type="text" name="meta_title" class="form-control">
</div>

<div class="mb-3">
    <label>meta keywords</label>
    <textarea name="meta_keyword" rows="3" class="form-control"></textarea>
</div>
<div class="mb-3">
    <label>meta description</label>
    <textarea name="meta_description" rows="3" class="form-control"></textarea>
</div>


<div class="col-md-6">
    <button type="submit" class="btn btn-primary">save data</button>
</div>

</div>
    </form>
</div>    
</div>
                    
</div>
@endsection