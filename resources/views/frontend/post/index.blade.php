@extends ('layouts.app')
@section('title',"$category->meta_title")
@section('meta_description',"$category->meta_description")
@section('meta_keyword',"$category->meta_keyword")
<!-- @section('author',"Auth::user()->name") -->
@section('author',"blog_name")

@section('content')
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="category-heading">
                    <h4>{{$category->name}}</h4>
                </div>
                @forelse($post as $postitem)
                <div class="card card-shadow mt-4">

                <div class="card-body">
                    <a href="{{url('tutorial/'.$category->slug.'/'.$postitem->slug)}}" class="text-decoration-none"> <h2 class="post-heading">{{$postitem->name}}</h2></a>
                   <h6>posted on: {{$postitem->created_at->format('d-m-Y')}}</h6>
                 <h6>  <span class="ms-3">posted by: {{$postitem->user->name}}</span> </h6>
                </div>
                </div>
              
                @empty
                <div class="card card-shadow mt-4">

                <div class="card-body">
                    <h2>no post available</h2>
                </div>
                </div>
                @endforelse
                <div class="your-paginate mt-4">
                    {{$post->links()}}
                </div>
            </div>
            <div class="col-md-3">
                <div class="border p-2">
                <h4>advertise</h4>
                </div>
            
            </div>

        </div>
    </div>
</div>
@endsection