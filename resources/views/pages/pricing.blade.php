@extends('layouts/main')
@section('title')
   Pricing Page 
@endsection
@section('url')
 url('images/{{$traveldata->pimage}}')
@endsection
@section('title1')

@endsection
@section('title2')
{{$traveldata->banner_title}}
@endsection

@section('main-content')
<div class="gtco-section border-bottom">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading">
                <h2>{{$traveldata->pricepage_title}}</h2>
                <p>{{$traveldata->pricepage_description}}</p>
            </div>
        </div>
        <div class="row">
         @foreach ($plans as $pdata ) 
            <div class="col-md-4">
                <div class="price-box">
                    <h2 class="pricing-plan">{{$pdata->p_name}}</h2>
                    <div class="price"><sup class="currency">$</sup>{{$pdata->p_price}}<small>/mo</small></div>
                    <p>{{$pdata->p_description}}</p>
                    <hr>
                    <ul class="pricing-info">
                        <li>{{$pdata->project}}</li>
                        <li>{{$pdata->pages}}</li>
                        <li>{{$pdata->email}}</li>
                        <li>{{$pdata->image}}</li>
                    </ul>
                    <a href="#" class="btn btn-default btn-sm">{{$pdata->link}}</a>
                </div>
            </div>
     @endforeach 
    
        </div>
    </div>
</div>

<div class="gtco-section">
    <div class="gtco-container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center gtco-heading animate-box">
                <h2>{{$traveldata->info_title}}</h2>
                <p>{{$traveldata->info_description}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <ul class="fh5co-faq-list">
                    @foreach ($qdata as $data )
                    <li class="animate-box">
                        <h2>{{$data->title}}</h2>
                        <p>{{$data->description}}</p>
                    </li>
                    @endforeach
                   

                    {{-- <li class="animate-box">
                        <h2>What language are available?</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </li>
                    <li class="animate-box">
                        <h2>I have technical problem, who do I email?</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </li>
                    <li class="animate-box">
                        <h2>Can I have a username that is already taken?</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </li>
                    <li class="animate-box">
                        <h2>How do I use Traveler features?</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </li>
                    <li class="animate-box">
                        <h2>Is Traveler free??</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>    
@endsection

