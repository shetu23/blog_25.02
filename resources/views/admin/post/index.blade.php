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
                        <table id="myDataTable" class="table table-bordered">
                            <thead>
                                <tr>
                            <th>Id</th>
                            <th>category</th>
                            <th>post name</th>
                            <th>is_approved</th>
                           <th>status</th>
                           <th>edit</th>
                            <th>delete</th>
                            </tr>

                        </thead>
                       <tbody>
                      @foreach($post as $item)
                      <tr>
                       <td>{{$item->id}}</td>
                       <td>{{$item->category->name}}</td>
                       <td>{{$item->name}}</td>
                       <td>{{$item->is_approved == '1' ? 'approved':'pending'}}</td>
                       <td>{{$item->status == '1' ? 'hidden':'shown'}}</td>
                       <td>
                       @if($item->created_by == Auth::user()->id && Auth::user()->role_as==1)
                        <a href="{{url('admin/post/'.$item->id)}}" class="btn btn-success">edit</a>
                        @endif
                        @if($item->created_by != Auth::user()->id && Auth::user()->role_as==1)
                        <a href="{{url('admin/newpost/'.$item->id)}}" class="btn btn-success">edit</a>
                        @endif
                       </td>
                       <td>
                        <a href="{{url('admin/delete-post/'.$item->id)}}" class="btn btn-success">delete</a>
                       </td>
                      
                    </tr>
                      @endforeach
                   
                    </tbody>
                        </table>
</div>    
</div>
                    
</div>
@endsection