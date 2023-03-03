@extends ('layouts.app')
@section('title',"blog_name")
@section('meta_description',"blogging website")
@section('meta_keyword',"blogging website")


@section('content')
<div class="bg-light py-10">
    <div class="container ">
        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel category-carousel owl-theme">
                @foreach($all_categories as $all_cat)    
                <div class="item ">
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


<div class="bg-gray py-5">
    <div class=" bg-light container">
        <div class="border text-center">
            <h3>ad</h3>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>
                    blog_name
                </h4>
                <div class="underline">
                    <p>
                        
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sit amet eros finibus, ultricies est a, accumsan dui. In efficitur est vitae ante vestibulum dictum. Donec ut odio arcu. Mauris ac felis vel lorem ullamcorper lobortis. Proin lacinia ante orci, dapibus tincidunt justo porta sed. Vestibulum fringilla vel justo vel aliquet. Etiam porttitor dapibus odio nec auctor. Nunc libero metus, ultrices ut mi ut, ornare lacinia metus. Fusce vestibulum auctor dui, quis faucibus mauris commodo in. Nunc eu nisi pulvinar, elementum ligula ut, varius dui. Nulla facilisi. Vivamus faucibus libero et blandit maximus. Etiam luctus, lorem ut ornare rhoncus, nunc elit suscipit sapien, at consequat tortor ipsum vitae velit. Sed eget ex a mi volutpat venenatis.

Integer quis ante dignissim nisi venenatis ullamcorper ac et augue. Nulla vel purus vel elit efficitur blandit sed non risus. Pellentesque tempor, justo non molestie efficitur, tellus risus sollicitudin risus, eget dictum lacus arcu eget mauris. Praesent sit amet leo varius, cursus nisi hendrerit, viverra urna. Proin a turpis venenatis, consequat felis quis, feugiat eros. Pellentesque a ultrices lectus. Nulla in metus massa. Curabitur tortor elit, sagittis sed egestas vel, lacinia non augue.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               
                <div class="underline shadow bg-white text-center mb-4">
   <h4>all categories list</h4>
                </div>
                
            </div>
            <div class="col-md-8">
            @foreach($all_categories as $all_cat_i)
            @if($all_cat_i->is_approved == 1)
                <div class="card card-body shadow mb-3">
                    <a href="{{url('tutorial/'.$all_cat_i->slug)}}" class="text-decoration-none text-center text-dark" >
                       <h5>{{$all_cat_i->name}}</h5> 
                    </a>
                </div>
                @endif
                @endforeach
            </div>
            <div class="col-md-4">
            <div class="border text-center shadow">
            <h3>ad</h3>
        </div>
            </div>
        </div>
    </div>
</div>


<div class="py-5 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
               
                <div class="underline shadow bg-white text-center mb-4">
   <h4>latest posts list</h4>
                </div>
                
            </div>
            <div class="col-md-8">
            @foreach($latest_posts as $post_i)
            @if($post_i->is_approved == 1)
                <div class="card card-body shadow mb-3 text-center">
                    <a href="{{url('tutorial/'.$post_i->category->slug.'/'.$post_i->slug)}}" class="text-decoration-none text-center text-dark" >
                      <h5>{{$post_i->name}}</h5>  
                    </a>
                    <p>posted on: {{$post_i->created_at->format('d-m-Y')}}</p>
                </div>
                @endif
                @endforeach
            </div>
            <div class="col-md-4">
            <div class="border  shadow text-center">
            <h3>ad</h3>
        </div>
            </div>
        </div>
    </div>
</div>
@endsection