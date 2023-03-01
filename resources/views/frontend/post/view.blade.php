@extends ('layouts.app')
@section('title',"$post->meta_title")
@section('meta_description',"$post->meta_description")
@section('meta_keyword',"$post->meta_keyword")

@section('author',"blog_name")
@section('content')
<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
            <div class="category-heading">
                    <h4>{{ $post->name }}</h4>
                </div>
                <div class="mt-3">
                    <h7>{{ $post->category->name .'/'. $post->name}}</h7>
                </div>
                <div class="card card-shadow mt-4">

                <div class="card-body">
                <p>{{ $post->description }}</p>
              
            </div>
          
        </div>
        
</div>
<div class="col-md-4">
                <div class="border p-2 my-2">
                <h4>advertise</h4>
                </div>
                <div class="card mt-3">
        <div class="card-body">
            <h5>latest posts:</h5>
     @foreach($latest_post as $i)
     <a href="{{url('/tutorial/'.$i->category->slug.'/'.$i->slug)}}" class="text-decoration-none">
     <h6>>{{$i->name}}</h6>
     </a>
  
     @endforeach
     </div>
    </div>        
    </div>
    
</div>
</div>
</div>
@endsection