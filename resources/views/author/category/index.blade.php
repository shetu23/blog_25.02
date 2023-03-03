@extends('layouts.master')
@section('title','category')
@section('content')

<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{url('author/delete-category/')}}" method="POST">
        @csrf 
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">delete category with its posts?</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" name="category_delete_id" id="category_id">
        <h5>are u sure u want to delete?</h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">delete</button>
      </div>
</form> 
    </div>
  </div>
</div>
<div class="container-fluid px-4">
                      
                        <div class="card mt-4">
                            <div class="card-header">
                                <h4>view category
                                    <a href="{{url('author/add-category')}}"
                                    class="btn btn-primary btn-sm float-end">
                                    add category</a></h4>
</div>
<div class="card-body">
    
@if(session('message'))
                        <div class="alert alert-success">{{session('message')}}</div>
                        @endif

                        <table  id="myDataTable" class="table table-bordered">
                            <thead>
                                <tr>
                            <th>Id</th>
                            <th>category name</th>
                            <th>image</th>
                            <th>is_approved</th>
                            <th>status</th>
                            <th>edit</th>
                            <th>delete</th>
                            </tr>

                        </thead>
                       <tbody>
                      @foreach($category as $item)
                      @if($item->created_by == Auth::user()->id)
                      <tr>
                       <td>{{$item->id}}</td>
                       <td>{{$item->name}}</td>
                       <td>
                        <img src="{{asset('uploads/category/'.$item->image)}}" width="50px" height="50px" alt="img">
                       </td>
                       <td>{{$item->is_approved == '1' ? 'approved':'pending'}}</td>
                       <td>{{$item->status == '1' ? 'hidden':'shown'}}</td>
                       <td>
                        <a href="{{url('author/edit-category/'.$item->id)}}" class="btn btn-success">edit</a>
                       </td>
                       <td>
                        <button type="button" class="btn btn-danger deleteCategoryBtn" value="{{$item->id}}">delete</button>
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
@section('scripts')
<script>
    $(document).ready(function(){
  
            $(document).on('click','.deleteCateghoryBtn',(function(e)){
            e.preventDefault();
            var category_id=$(this).val();
            $('#category_id').val(category_id);
            $('#deleteModal').modal('show');
        });
    });
</script>


@endsection