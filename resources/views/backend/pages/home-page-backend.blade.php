

@include('admin.head')
<body>
  <div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <form action="{{route('home-page-backend_store')}}"  method="post" class="mt-5 text-primary" enctype="multipart/form-data">
            @csrf
                <h1>For Bennar</h1>
                --------------------
               
                <div class="input-group mb-3">
                    <div class="input-group-append">
                      <span class="input-group-text  bg-light text-dark" id="basic-addon2">Banner Title :</span>
                    </div>
                    <input type="text" value="{{$homedata->banner_title}}" class="form-control  bg-dark text-white" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" name="banner_title">
                  </div>
                  <div class="form-group">
                    <label>Backgroun Image</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none"value="" spellcheck="false" placeholder="Title" type="file" name="image">
                    </div>
                  <br><br>
                  <div class="input-group mb-3">
                    <div class="input-group-append">
                      <span class="input-group-text  bg-light text-dark" id="basic-addon2">Post Page Title :</span>
                    </div>
                    <input type="text" value="{{$homedata->post_title}}" class="form-control  bg-dark text-white " placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" name="post_title">
                  </div>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text  bg-light text-dark">Post Page Description</span>
                    </div>
                    <textarea class="form-control  bg-dark text-white"  name="post_description" aria-label="With textarea">{{$homedata->post_description}}</textarea>
                  </div>
                    <br><br><br>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Testimonial Title :</span>
                        </div>
                        <input type="text" class="form-control  bg-dark text-white" name="testimonial_title" value="{{$homedata->testimonial_title}}"  aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
                    
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text  bg-light text-dark">Testimonial Description :</span>
                        </div>
                        <textarea class="form-control  bg-dark text-white" name="testimonial_description" aria-label="With textarea">{{$homedata->testimonial_description}}"</textarea>
                      </div>
                      <br>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Testimonial 1 Title :</span>
                        </div>
                        <input type="text" class="form-control  bg-dark text-white" value="{{$homedata->test_title1}}" name="test_title1" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text  bg-light text-dark">Testimonial 1 Description :</span>
                        </div>
                        <textarea class="form-control  bg-dark text-white" name="test_description1" aria-label="With textarea">{{$homedata->test_description1}}</textarea>
                      </div>
                      <br>
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Testimonial 2 Title :</span>
                        </div>
                        <input type="text" value="{{$homedata->test_title2}}" class="form-control  bg-dark text-white" name="test_title2" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text  bg-light text-dark">Testimonial 2 Description :</span>
                        </div>
                        <textarea class="form-control  bg-dark text-white" aria-label="With textarea" name="test_description2">{{$homedata->test_description2}}</textarea>
                      </div>
                      <br>
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Testimonial 3 Title :</span>
                        </div>
                        <input type="text" class="form-control  bg-dark text-white" placeholder="" value="{{$homedata->test_title3}}"name="test_title3" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text  bg-light text-dark">Testimonial 3 Description :</span>
                        </div>
                        <textarea class="form-control  bg-dark text-white" aria-label="With textarea" name="test_description3">{{$homedata->test_description3}}</textarea>
                      </div>
                      <br><br><br>
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Central Title</span>
                        </div>
                        <input type="text" value="{{$homedata->center_title}}" class="form-control  bg-dark text-white" placeholder="" name="center_title" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Over Set Title :</span>
                        </div>
                        <input type="text" value="{{$homedata->ov_title}}" class="form-control  bg-dark text-white" placeholder="" name="ov_title" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
                     
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text  bg-light text-dark">Over Set Description :</span>
                        </div>
                        <textarea class="form-control  bg-dark text-white" aria-label="With textarea" name="ov_description">{{$homedata->ov_description}}</textarea>
                      </div>
                      <br><br><br>
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Enter Totle Destinations :</span>
                        </div>
                        <input type="text" class="form-control  bg-dark text-white" value="{{$homedata->ov_destination}}" name="ov_destination" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
                    
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Enter Totle Hotels :</span>
                        </div>
                        <input type="text" value="{{$homedata->ov_hotels}}" class="form-control  bg-dark text-white" placeholder="" name="ov_hotels" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
                      
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Enter Totle Travelars :</span>
                        </div>
                        <input type="text" value="{{$homedata->ov_travelars}}" class="form-control  bg-dark text-white" placeholder="" name="ov_travelars" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Enter Totle Happy Customer :</span>
                        </div>
                        <input type="text" class="form-control  bg-dark text-white" placeholder="" value="{{$homedata->happy_customer}}" name="happy_customer" aria-label="Recipient's username" aria-describedby="basic-addon2">
                      </div>
            
                      
                      <br><br><br>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text  bg-light text-dark">Enter About Of Footer :</span>
                        </div>
                        <textarea class="form-control  bg-dark text-white" aria-label="With textarea" name="about_desciption">{{$homedata->about_desciption}}</textarea>
                      </div>
                      <br><br><br>
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Enter Your Mobile Number :</span>
                        </div>
                        <input type="text" class="form-control  bg-dark text-white" value="{{$homedata->ad_phone_number}}" placeholder="" name="ad_phone_number" aria-label="Recipient's username" aria-describedby="basic-addon2" >
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Enter Your Email :</span>
                        </div>
                        <input type="text" class="form-control  bg-dark text-white" placeholder="" value="{{$homedata->ad_email}}" name="ad_email" aria-label="Recipient's username" aria-describedby="basic-addon2" >
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Enter Yor WhatsApp Number :</span>
                        </div>
                        <input type="text" class="form-control  bg-dark text-white" placeholder="" value="{{$homedata->ad_live_chet}}" aria-label="Recipient's username" aria-describedby="basic-addon2" name="ad_live_chet">
                      </div>
                      <br><br><br>
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Enter Your Twitter Link :</span>
                        </div>
                        <input type="text" class="form-control  bg-dark text-white" value="{{$homedata->sl_twiter}}"   placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" name="sl_twiter">
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Enter Your Facebook :</span>
                        </div>
                        <input type="text" class="form-control  bg-dark text-white" value="{{$homedata->sl_facebook}}"  placeholder=""  aria-label="Recipient's username" aria-describedby="basic-addon2" name="sl_facebook">
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Enter Your Instagram Link :</span>
                        </div>
                        <input type="text" class="form-control  bg-dark text-white" value="{{$homedata->sl_instagram}}"  placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" name="sl_instagram">
                      </div>
                      <div class="input-group mb-3">
                        <div class="input-group-append">
                          <span class="input-group-text  bg-light text-dark" id="basic-addon2">Enter Your Linkedln Link :</span>
                        </div>
                        <input type="text" class="form-control  bg-dark text-white" placeholder="" value="{{$homedata->sl_linkedln}}"  aria-label="Recipient's username" aria-describedby="basic-addon2" name="sl_linkedln">
                      </div>
            
                      <button class="btn btn-primary" >Publish</button>
            </form>
                 

            

          </div></div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('admin.footer')
{{-- --}}

