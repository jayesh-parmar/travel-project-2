
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


 <a  id="" class="btn btn-primary mt-2" href="{{route('export_pdf')}}" role="button">Export To PDF</a>
<a  id="" class="btn btn-primary mt-2" href="{{route('tresh_customer')}}" role="button">Tresh Customers</a>
    <br>
<div>
    <div class="mt-3">
        <form >
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
        
        <a href="{{route('show_booktriep_data')}}"><button class=" btn btn-dark ml-3 mr-3" >back</button></a>
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
            <td><a  class="btn btn-primary" href="{{route('edit_customer',$data->id)}}" role="button">Edit</a></td>
            <td><a  class="btn btn-danger" href="{{route('delete_customer',$data->id)}}" role="button">Tresh</a></td>
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


  {{-- <!-- component -->
<!-- Create by joker banny -->
<div class="h-screen bg-indigo-100 flex justify-center items-center">
	<div class="lg:w-2/5 md:w-1/2 w-2/3">
		<form class="bg-white p-10 rounded-lg shadow-lg min-w-full" action="{{route('update_customer',$customers_data->id)}}" method="post">
            @csrf
			<h1 class="text-center text-2xl mb-6 text-gray-600 font-bold font-sans">Update Customer</h1>
			<div>
				<label class="text-gray-800 font-semibold block my-3 text-md" for="username" >Name</label>
				<input class="w-full bg-gray-100 px-4 py-2 rounded-lg focus:outline-none" value="{{$customers_data->name}}" type="text" name="name" id="username"  />
      </div>
				<div>
					<div class="row form-group text-gray-800 font-semibold block my-3 text-md">
                        <div class="col-md-12">
                            <label for="activities">Activities</label>
                            <select name="activities"  {{"$customers_data->activities"}} id="activities" class="form-control">
                                <option value="Activities">Activities</option>
                                <option value="Hiking">Hiking</option>
                                <option value="Caving">Caving</option>
                                <option value="Swimming">Swimming</option>
                            </select>
                        </div>
      </div>
					<div>
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
      </div>
						<div>
                            <div class="row form-group">
                                <div class="col-md-12">
                                    <label for="date-start">Date Travel</label>
                                    <input type="text" id="date-start" value="{{$customers_data->date}}" class="form-control" name="date">
                                </div>
                            </div>
      </div>
							<button type="submit" class="w-full mt-6 bg-indigo-600 rounded-lg px-4 py-2 text-lg text-white tracking-wide font-semibold font-sans">Update</button>
							
		</form>
	</div>
</div> --}}

