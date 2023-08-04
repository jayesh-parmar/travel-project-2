@section('title')
Home Page    
@endsection
 
 @include('layouts/header')

<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/{{$homedata->image}})">
    <div class="overlay"></div>
    
        
    
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-12 col-md-offset-0 text-left">
                

                <div class="row row-mt-15em">
                    <div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
                        <h1>{{$homedata->banner_title}}</h1>	
                        
                    </div>
                    <div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
                        
                            <div class="form-wrap">
                             <div class="tab">

                                @if(session()->has('status'))
                                <div class="alert alert-success">
                                    {{ session()->get('status') }}
                                </div>
                            @endif
                                <div class="tab-content">
                                    <div class="tab-content-inner active" data-content="signup">
                                        <h3>Book Your Trip</h3>
                                        <form action="{{route('book_tripe')}}" method="post">
                                            @csrf
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label for="fullname">Your Name</label>
                                                    <input type="text" id="fullname" class="form-control" name="name">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label for="activities">Activities</label>
                                                    <select name="activities" id="activities" class="form-control">
                                                        <option value="Activities">Activities</option>
                                                        <option value="Hiking">Hiking</option>
                                                        <option value="Caving">Caving</option>
                                                        <option value="Swimming">Swimming</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label for="destination">Destination</label>
                                                    <select name="destination" id="destination" class="form-control">
                                                        <option value="Philippines">Philippines</option>
                                                        <option value="USA">USA</option>
                                                        <option value="Australia">Australia</option>
                                                        <option value="Singapore">Singapore</option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <label for="date-start">Date Travel</label>
                                                    <input type="text" id="date-start" class="form-control" name="date">
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col-md-12">
                                                    <button class="btn btn-primary">save</button>
                                                
                                                 </div>
                                            </div>
                                        </form>	
                                    </div>
                                </div>      
                                
                                
                            </div>
                        </div>
                       
                    </div>
                </div>
                        
                
            </div>
        </div>
    </div>
</header>


<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>{{$homedata->post_title}}</h2>
                <p>{{$homedata->post_description}}</p>
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post )
            <div class="col-lg-4 col-md-4 col-sm-6">
                <a href="{{ url('storage/'.$post->pimage) }}" class="fh5co-card-item image-popup">
                    <figure>
                        <div class="overlay"><i class="ti-plus"></i></div>
                        <img src="{{ url('storage/'.$post->pimage) }}" alt="Image" class="img-responsive">
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
{{ $posts->links() }}
<div id="gtco-features">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                <h2>{{$homedata->testimonial_title}}</h2>
                <p>{{$homedata->testimonial_description}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i> 1</i>
                    </span>
                    <h3>{{$homedata->test_title1}}</h3>
                    <p>{{$homedata->test_description1}}</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i>2</i>
                    </span>
                    <h3>{{$homedata->test_title2}}</h3>
                    <p>{{$homedata->test_description2}}</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="feature-center animate-box" data-animate-effect="fadeIn">
                    <span class="icon">
                        <i>3</i>
                    </span>
                    <h3>{{$homedata->test_title3}}</h3>
                    <p>{{$homedata->test_description3}}</p>
                </div>
            </div>
            

        </div>
    </div>
</div>


<div class="gtco-cover gtco-cover-sm" style="background-image: url(images/img_bg_1.jpg)"  data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="gtco-container text-center">
        <div class="display-t">
            <div class="display-tc">
                <h1>{{$homedata->center_title}}</h1>
            </div>	
        </div>
    </div>
</div>

<div id="gtco-counter" class="gtco-section">
    <div class="gtco-container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                <h2>{{$homedata->ov_title}}</h2>
                <p>{{$homedata->ov_description}}</p>
            </div>
        </div>

        <div class="row">
            
            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                <div class="feature-center">
                    <span class="counter js-counter" data-from="0" data-to="{{$homedata->ov_destination}}" data-speed="5000" data-refresh-interval="50">1</span>
                    <span class="counter-label">Destination</span>

                </div>
            </div>
            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                <div class="feature-center">
                    <span class="counter js-counter" data-from="0" data-to="{{$homedata->ov_hotels}}" data-speed="5000" data-refresh-interval="50">1</span>
                    <span class="counter-label">Hotels</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                <div class="feature-center">
                    <span class="counter js-counter" data-from="0" data-to="{{$homedata->ov_travelars}}" data-speed="5000" data-refresh-interval="50">1</span>
                    <span class="counter-label">Travelers</span>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 animate-box" data-animate-effect="fadeInUp">
                <div class="feature-center">
                    <span class="counter js-counter" data-from="0" data-to="{{$homedata->happy_customer}}" data-speed="5000" data-refresh-interval="50">1</span>
                    <span class="counter-label">Happy Customer</span>

                </div>
            </div>
                
        </div>
    </div>
</div>


@include('layouts/subscribe')
@include('layouts/footer')

   
