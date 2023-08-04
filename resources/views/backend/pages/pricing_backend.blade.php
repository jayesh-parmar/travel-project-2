
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
                <form action="{{route('pricing_backend_store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">Banner Title</label>
                    <input type="text" value="{{$pricing->banner_title}}" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" name="banner_title">
                  </div>
                  <div class="form-group">
                    <label>Backgroun Image</label>
                    <input type="file" name="img[]" class="file-upload-default">
                    <div class="input-group col-xs-12">
                      <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none"value="{{$pricing->pimage}}" spellcheck="false" placeholder="Title" type="file" name="pimage">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Price Page Title </label>
                    <input type="text" value="{{$pricing->pricepage_title}}" class="form-control" placeholder=""  aria-label="Recipient's username" aria-describedby="basic-addon2" name="pricepage_title">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Price Page Description</label>
                    <textarea class="form-control" name="pricepage_description" id="exampleTextarea1" rows="4">{{$pricing->pricepage_description}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail3">Information Title </label>
                    <input type="text" value="{{$pricing->info_title}}" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" name="info_title">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Information Description</label>
                    <textarea class="form-control" name="info_description" id="exampleTextarea1" rows="4">{{$pricing->info_description}}</textarea>
                  </div>
            
                  <button  class="btn btn-primary mr-2">Publish</button>
                  <button class="btn btn-dark">Cancel</button>
                </form>
              </div>
            </div>


            <br>
<div class="container">
  <div class="row">

        {{-- STARTER --}}
    {{-- ---------------- --}}
    @foreach ($data as $starter )
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
       <h4 class="card-title" style="color:rgb(116, 175, 54);"> {{$starter->p_name}} </h4>
       -------------------------------------------------- 
       <br>
          <br>
          
          <form action="{{route('store_plans',$starter->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Plan Name</label>
              <div class="col-sm-9">
                <input type="text" name="p_name" value="{{$starter->p_name}}" class="form-control " id="exampleInputUsername2" >
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Plan Preice</label>
              <div class="col-sm-9">
                <input type="text" name="p_price" value="{{$starter->p_price}}" class="form-control" id="exampleInputUsername2" >
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Plan Description</label>
              <div class="col-sm-9">
                <textarea class="form-control" name="p_description" id="exampleTextarea1" rows="4">{{$starter->p_description}}</textarea>
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Totla Project</label>
              <div class="col-sm-9">
                <input type="text" name="project" value="{{$starter->project}}" class="form-control" id="exampleInputUsername2" >
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Total Pages</label>
              <div class="col-sm-9">
                <input type="text" name="pages" value="{{$starter->pages}}" class="form-control" id="exampleInputUsername2" >
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Total Email</label>
              <div class="col-sm-9">
                <input type="text" name="email" value="{{$starter->email}}" class="form-control" id="exampleInputUsername2" >
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Total Images</label>
              <div class="col-sm-9">
                <input type="text" name="image" value="{{$starter->image}}" class="form-control" id="exampleInputUsername2" >
              </div>
            </div>
            <div class="form-group row">
              <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Link Name</label>
              <div class="col-sm-9">
                <input type="text" name="link" value="{{$starter->link}}" class="form-control" id="exampleInputUsername2" >
              </div>
            </div>
            
            <div class="form-check form-check-flat form-check-primary">
              <label class="form-check-label">
                <input type="checkbox" class="form-check-input"> Remember me </label>
            </div>
            <button class="btn btn-primary mr-2">Submit</button>
            <button class="btn btn-dark">Cancel</button>
          </form>
        </div>
      </div>
    </div>
    @endforeach
</div>
</div>


<div class="card">
              <div class="card-body">
                <h1 class="card-title">Frequently Ask Questions</h1>
                <hr>
                <br>
                <form action="{{route('questions')}}" method="post" >
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">Questions</label>
                    <input type="text"  class="form-control  bg-light text-dark" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" name="title">
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Answer</label>
                    <textarea class="form-control bg-light text-dark" name="description" id="exampleTextarea1" rows="4"></textarea>
                  </div>
                  <button  class="btn btn-primary mr-2">Publish</button>
                  <button class="btn btn-dark">Cancel</button>
                </form>
              </div>
            </div>


        </div></div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('admin.footer')

  








