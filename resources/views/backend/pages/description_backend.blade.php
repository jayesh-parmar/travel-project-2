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
                      <h1 class="card-title">Descriptio Page Backgound</h1>
                      <hr>
                      <br>
                      <form action="{{route('description_update')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputName1">Banner Title</label>
                          <input type="text" name="title" value="{{$descrription->title}}" class="form-control" placeholder="" aria-label="Recipient's username" aria-describedby="basic-addon2" >
                        </div>
                        <div class="form-group">
                          <label>Backgroun Image</label>
                        
                          <div class="input-group col-xs-12">
                            <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none"value="" spellcheck="false" placeholder="Title" type="file" name="image">
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail3">Post Title </label>
                          <input type="text" name="post_title" value="{{$descrription->post_title}}" class="form-control" placeholder=""  aria-label="Recipient's username" aria-describedby="basic-addon2" >
                        </div>
                        <div class="form-group">
                          <label for="exampleTextarea1">Post Description</label>
                          <textarea class="form-control" name="post_description" id="exampleTextarea1" rows="4">{{$descrription->post_description}}</textarea>
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