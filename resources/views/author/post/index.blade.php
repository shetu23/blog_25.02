@extends('layouts.master')
@section('title','blog dashboard')
@section('content')
<div class="container-fluid px-4">  
        <div class="card mt-4">
                            <div class="card-header">
                                <h4>view posts
                                    <a href="{{url('author/add-post')}}"
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
                      @if($item->created_by == Auth::user()->id)
                      <tr>
                       <td>{{$item->id}}</td>
                       <td>{{$item->category->name}}</td>
                       <td>{{$item->name}}</td>
                       <td>{{$item->is_approved == '1' ? 'approved':'pending'}}</td>
                       <td>{{$item->status == '1' ? 'hidden':'visible'}}</td>
                       <td>
                        <a href="{{url('author/post/'.$item->id)}}" class="btn btn-success">edit</a>
                       </td>
                       <td>
                        <a href="{{url('author/delete-post/'.$item->id)}}" class="btn btn-success">delete</a>
                       </td>
                      
                    </tr>
                    @endif
                      @endforeach
                   
                    </tbody>
                        </table>
</div>    
</div>
                    
</div>
@endsection