
@include('admin.head')

      <meta name="csrf-token" content="{{ csrf_token() }}">
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
                    
                    <a href="{{route('contact_deteil')}}"><button class=" btn btn-dark ml-3 mr-3" >back</button></a>
                    </div>
                    
                  </div>

            </div>
            @if ($message = Session::get('success'))
         <div class="alert alert-info">
            <p>{{ $message }}</p>
         </div>
         @endif
            <button class="btn btn-primary btn-xs removeAll mb-3">Remove All Data</button>
            <table class="table  table-hover table-bordered mt-2 table-responsive text-center">
                
                 <thead class="thead-dark">
                    <tr>
                        <th><input type="checkbox" id="checkboxesMain"></th>
                        <th>Id</th>
                        <th  scope="col">Name</th>
                        <th  scope="col">Email</th>
                        <th  >Subject</th>
                        <th  >Messages</th>
                    </tr>
                </thead>
                <tbody>
                    @if($contact->count())
                    @foreach ($contact as $key => $data )
                    <tr id="tr_{{$data->id}}" >
                        <td><input type="checkbox" class="checkbox" data-id="{{$data->id}}"></td>
                        <td>{{ ++$key }}</td>
                        <td scope="row">{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->subject}}</td>
                         <td class="text-left" >{{$data->description}}</td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
       </div>
    </div>     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('admin.footer')

  
  <script type = "text/javascript" >
    $(document).ready(function() {
        $('#checkboxesMain').on('click', function(e) {
            if ($(this).is(':checked', true)) {
                $(".checkbox").prop('checked', true);
            } else {
                $(".checkbox").prop('checked', false);
            }
        });
        $('.checkbox').on('click', function() {
            if ($('.checkbox:checked').length == $('.checkbox').length) {
                $('#checkboxesMain').prop('checked', true);
            } else {
                $('#checkboxesMain').prop('checked', false);
            }
        });
        $('.removeAll').on('click', function(e) {
            var studentIdArr = [];
            $(".checkbox:checked").each(function() {
                studentIdArr.push($(this).attr('data-id'));
            });
            if (studentIdArr.length <= 0) {
                alert("Choose min one item to remove.");
            } else {
                if (confirm("{{ Auth::user()->name }} Are you sure?")) {
                    var stuId = studentIdArr.join(",");
                    $.ajax({
                        url: "{{route('delete-all')}}",
                        type: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: 'ids=' + stuId,
                        success: function(data) {
                            if (data['status'] == true) {
                                $(".checkbox:checked").each(function() {
                                    $(this).parents("tr").remove();
                                });
                                alert(data['message']);
                            } else {
                                alert('Error occured.');
                            }
                        },
                        error: function(data) {
                            alert(data.responseText);
                        }
                    });
                }
            }
        });
    }); 
 </script>