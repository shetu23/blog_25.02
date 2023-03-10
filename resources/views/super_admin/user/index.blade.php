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
                        <div class="table-responsive">
                        <table id="myDataTable" class="table table-bordered">
                            <thead>
                                <tr>
                            <th>Id</th>
                            <th>username</th>
                            <th>email</th>
                         
                           <th>role</th>
                           <th>edit</th>
                          
                            </tr>

                        </thead>
                       <tbody>
                      @foreach($users as $item)
                      <tr>
                       <td>{{$item->id}}</td>
                       <td>{{$item->name}}</td>
                       <td>{{$item->email}}</td>
                       <td>
                       @if($item->role_as=='1'){{'admin'}}
                       @elseif($item->role_as=='2'){{'super_admin'}} 
                       @else{{'author'}}
                      @endif
                     </td>
                       <td>
                        <a href="{{url('super_admin/user/'.$item->id)}}" class="btn btn-success">edit</a>
                       </td>
                       
                    </tr>
                      @endforeach
                   
                    </tbody>
                        </table></div>
</div>    
</div>
                    
</div>
@endsection