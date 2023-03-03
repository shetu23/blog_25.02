@extends('layouts.master')
@section('title','new_post')
@section('content')
<div class="container-fluid px-4">
                        <div class="card mt-4">
                            <div class="card-header"><h4 class="">admin approval</h4>
                       
</div>
<div class="card-body">


     <div class="mb-3">
    <label >category name </label>
    <p class="form-control">{{$category->name}}</p>
</div>
<div class="mb-3">
    <label for="">description</label>
    <p class="form-control">{{$category->description}}</p>
</div>
<div class="mb-3">
    <label >created_at</label>
    <p class="form-control">{{$category->created_at->format('d/m/y')}}</p>
</div>
<div class="mb-3">
    <label >created_by</label>
    <p class="form-control">{{$category->created_by}}</p>
</div>
<form action="{{url('admin/update-newcategory/'.$category->id)}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
    <label >is_approved</label>
    <select name="is_approved" class="form-control">
        <option value="1" {{$category->is_approved=='1' ? 'selected':''}}>approved</option>
        <option value="0" {{$category->is_approved=='0' ? 'selected':''}}>pending</option>

    </select>
    
</div>
<div class="col-md-6">
    <button type="submit" class="btn btn-primary">update approval</button>
</div>
</form>
</div>
   

</div>
</div>
</div>
@endsection