@extends ('layouts.app')
@section('title',"blog_name")
@section('meta_description',"blogging website")
@section('meta_keyword',"blogging website")


@section('content')
<div class="bg-danger">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel category-carousel owl-theme">
                @foreach($all_categories as $all_cat)    
                <div class="item">
                      <a href="{{url('tutorial/'.$all_cat->slug)}}" class="text-decoration-none">
                        <div class="card">
                            <img src="{{asset('uploads/category/'.$all_cat->image)}}" alt="image">
                            <div class="card-body text-dark text-center">
                                <h4>
                                    {{$all_cat->name}}
                                </h4>
                            </div>
                        </div>
                       </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection