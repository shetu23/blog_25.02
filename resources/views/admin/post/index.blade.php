@extends('layouts.master')
@section('title','blog dashboard')
@section('content')
<div class="container-fluid px-4">  
        <div class="card mt-4">
                            <div class="card-header">
                                <h4>view posts
                                    <a href="{{url('admin/add-post')}}"
                                    class="btn btn-primary btn-sm float-end">
                                    add posts</a>
</h4>
</div>
<div class="card-body">
                        @if(session('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                            <th>Id</th>
                            <th>category</th>
                            <th>post name</th>
                         
                           <th>status</th>
                          
                            </tr>

                        </thead>
                       <tbody>
                      @foreach($post as $item)
                      <tr>
                       <td>{{$item->id}}</td>
                       <td>{{$item->category->name}}</td>
                       <td>{{$item->name}}</td>
                       <td>{{$item->status == '1' ? 'hidden':'shown'}}</td>
                      
                    </tr>
                      @endforeach
                   
                    </tbody>
                        </table>
</div>    
</div>
                    
</div>
@endsection