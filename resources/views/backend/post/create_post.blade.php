{{-- 

@extends('backend/layouts/main-backend')

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

            <div>
                <!-- component -->
            <div class="heading text-center font-bold text-2xl m-5 text-white-800">Create New Post</div>
            <style>
              body {background:white !important;}
            </style>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <form action="{{route('insert-post')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="editor mx-auto w-10/12 flex flex-col text-gray-800 border border-gray-300 p-5 shadow-lg max-w-2xl">
                   
                <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none" spellcheck="false" value="{{ old('title') }}" placeholder="Title" type="text" name="title">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <input class="title bg-gray-100 border border-gray-300 p-2 mb-4 outline-none"value="{{ old('pimage') }}" spellcheck="false" placeholder="Title" type="file" name="pimage">
                     @error('pimage')
                         <div class="alert alert-danger">{{ $message }}</div>
                     @enderror
                <textarea class="description bg-gray-100 sec p-3 h-60 border border-gray-300 outline-none" value="{{ old('description') }}" spellcheck="false" placeholder="Describe everything about this post here" name="description"></textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <!-- icons -->
                <div class="icons flex text-gray-500 m-2">
                   <div class="count ml-auto text-gray-400 text-xs font-semibold">0/300</div>
                </div>
                <!-- buttons -->
                <div class="buttons flex">
                  <div class="btn border border-gray-300 p-1 px-4 font-semibold cursor-pointer text-gray-500 ml-auto">Cancel</div>
                  <div class="btn border border-indigo-500 p-1 px-4 font-semibold cursor-pointer text-gray-200 ml-2 bg-indigo-500"><button>Post</button></div>
                </div>
              </div>
            </div>
            </form> 
       </div> </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  @include('admin.footer')