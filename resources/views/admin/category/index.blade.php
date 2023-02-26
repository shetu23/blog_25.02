@extends('layouts.master')
@section('title','category')
@section('content')
<div class="container-fluid px-4">
                      
                        <div class="card mt-4">
                            <div class="card-header">
                                <h4>view category
                                    <a href="{{url('admin/add-category')}}"
                                    class="btn btn-primary btn-sm float-end">
                                    add category</a></h4>
</div>
<div class="card-body">
    
@if(session('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                        @endif

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                            <th>Id</th>
                            <th>category name</th>
                            <th>image</th>
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                            </tr>

                        </thead>
                       <tbody>
                      @foreach($category as $item)
                      <tr>
                       <td>{{$item->id}}</td>
                       <td>{{$item->name}}</td>
                       <td>
                        <img src="{{asset('uploads/category/'.$item->image)}}" width="50px" height="50px" alt="img">
                       </td>
                       <td>{{$item->status == '1' ? 'hidden':'shown'}}</td>
                       <td>
                        <a href="{{url('admin/edit-category/'.$item->id)}}" class="btn btn-success">edit</a>
                       </td>
                       <td>
                        <a href="{{url('admin/delete-category/'.$item->id)}}" class="btn btn-danger">delete</a>
                       </td>
                    </tr>
                      @endforeach
                   
                    </tbody>
                        </table>

</div>
</div>
                    
</div>
@endsection