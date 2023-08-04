 @extends('layouts/main')

@section('url')
 url('images/{{$ddata->image}}')
@endsection

@section('title2')
{{$ddata->title}}
@endsection

@section('main-content')
<div class="gtco-section">
    <div class="gtco-container">
        {{ $posts->links() }}
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>{{$ddata->post_title}}</h2>
                <p>{{$ddata->post_description}}</p>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post )
            <div class="col-lg-4 col-md-4 col-sm-6">
                <a href="{{url('storage/'.$post->pimage)}}" class="fh5co-card-item image-popup">
                    <figure>
                        <div class="overlay"><i class="ti-plus"></i></div>
                        <img src="{{url('storage/'.$post->pimage)}}" alt="Image" class="img-responsive">
                    </figure>
                    <div class="fh5co-text">
                        <h2>{{$post->title}}</h2>
                        <p>{{$post->description}}</p>
                        <p><span class="btn btn-primary">Schedule a Trip</span></p>
                    </div>
                </a>
            </div>
            
            @endforeach 
        </div>
    </div>
</div>


@endsection
@yield('subscribe') 