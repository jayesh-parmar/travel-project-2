@extends('backend/layouts/main-backend')
@section('main-contain')
 @include('admin.head')
<!-- component -->
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
</div>


@endsection