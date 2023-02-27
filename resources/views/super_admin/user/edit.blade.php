@extends('layouts.master')
@section('title','user')
@section('content')
<div class="container-fluid px-4">
                        <div class="card mt-4">
                            <div class="card-header"><h4 class="">edit-user</h4>
                       
</div>
<div class="card-body">


     <div class="mb-3">
    <label >user name </label>
    <p class="form-control">{{$user->name}}</p>
</div>
<div class="mb-3">
    <label for="">email</label>
    <p class="form-control">{{$user->email}}</p>
</div>
<div class="mb-3">
    <label >created_at</label>
    <p class="form-control">{{$user->created_at->format('d/m/y')}}</p>
</div>
<form action="{{url('super_admin/update-user/'.$user->id)}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
    <label >role_as</label>
    <select name="role_as" class="form-control">
        <option value="1" {{$user->role_as=='1' ? 'selected':''}}>admin</option>
        <option value="0" {{$user->role_as=='0' ? 'selected':''}}>author</option>

    </select>
    
</div>
<div class="col-md-6">
    <button type="submit" class="btn btn-primary">update user_role</button>
</div>
</form>
</div>
   

</div>
</div>
</div>
@endsection