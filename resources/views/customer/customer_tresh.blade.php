{{-- @extends('backend/layouts/main-backend')
@section('main-contain')





@endsection --}}
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

            <a  id="" class="btn btn-primary mt-3" href="{{route('export_pdf')}}" role="button">Export To PDF</a>
            <a href="{{route('show_booktriep_data')}}"><button class=" btn btn-dark mt-3" >back</button></a>    
            <br>
                
            <div>
                <div class="mt-3">
                    <form action="">
                     <div class="relative mb-4 flex w-full flex-wrap items-stretch">
                      <input
                        type="search"
                        name="search"
                        class="relative m-0 -mr-0.5 block w-[1px] min-w-0 flex-auto rounded-l border border-solid border-neutral-300 bg-transparent bg-clip-padding px-3 py-[0.25rem] text-base font-normal leading-[1.6] text-neutral-700 outline-none transition duration-200 ease-in-out focus:z-[3] focus:border-primary focus:text-neutral-700 focus:shadow-[inset_0_0_0_1px_rgb(59,113,202)] focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:placeholder:text-neutral-200 dark:focus:border-primary"
                        placeholder="Search"
                        aria-label="Search"
                        aria-describedby="button-addon3" />
                  
                      <!--Search button-->
                      <button
                        class="relative z-[2] rounded-r border-2 border-primary px-6 py-2 text-xs font-medium uppercase text-primary transition duration-150 ease-in-out hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0"
                        type="submit"
                        id="button-addon3"
                        data-te-ripple-init>
                        Search
                      </button>
                    </form>
                   
                    </div>
                    
                  </div>
            </div>
            
            <table class="table table-hover table-bordered mt-2 text-center">
                
                 <thead class="thead-dark">
                    <tr>
                        <th  scope="col">Name</th>
                        <th  scope="col">Activities</th>
                        <th  scope="col">Destination</th>
                        <th  scope="col">Date</th>
                        <th  scope="col">Edit</th>
                        <th  scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($book_data as $data )
                    <tr >
                        <td scope="row">{{$data->name}}</td>
                        <td>{{$data->activities}}</td>
                        <td>{{$data->destination}}</td>
                        <td>{{$data->date}}</td>
                        <td><a  class="btn btn-primary" href="{{route('restore_customer',$data->id)}}" role="button">Restore</a></td>
                        <td><a  class="btn btn-danger" href="{{route('force_customer',$data->id)}}" role="button">Delete</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{$book_data->links()}}
            
          </div>
        </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.footer')