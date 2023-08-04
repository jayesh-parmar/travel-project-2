
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


            <div class="card">
                <div class="card-body">
                  <h1 class="card-title">Pricing Page Backgound</h1>
                  <hr>
                  <br>
                  <form action="{{route('contact_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputName1">Banner Title</label>
                      <input type="text" name="title" value="{{$data->title}}" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" >
                    </div>
                    <div class="form-group">
                      <label>Backgroun Image</label>
                    
                      <div class="input-group col-xs-12">
                        <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none"value="{{$data->image}}" spellcheck="false" placeholder="Title" type="file" name="image">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Phone Numaber </label>
                      <input type="text" name="phone_pumber" value="{{$data->phone_pumber}}" class="form-control" placeholder=""  aria-label="Recipient's username" aria-describedby="basic-addon2" >
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1">Address</label>
                      <textarea class="form-control" name="address" id="exampleTextarea1" rows="4">{{$data->address}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail3">Email </label>
                      <input type="text" name="email" value="{{$data->email}}" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Website Link </label>
                        <input type="text" name="website" value="{{$data->website}}" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" >
                    </div>
                    <button  class="btn btn-primary mr-2">Publish</button>
                    <button class="btn btn-dark">Cancel</button>
                  </form>
                </div>
              </div>

          </div>
        </div>  
    
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('admin.footer')