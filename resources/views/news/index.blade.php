@extends('layouts.app')

@section('content')
    <!-- component -->
    <main class="py-12 md:px-20 bg-indigo-50 sm:px-14 px-6">
      <div class="flex justify-between p-4 bg-white mt-3 mb-10 rounded-xl shadow-lg">
        {{-- <h1 class="text-xl font-bold text-gray-700">News</h1> --}}
        <div class="flex justify-between w-full">
            <div class="flex items-center w-full border-2 p-2 rounded-xl">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input type="text" placeholder="Search" class="ml-2 outline-none w-full" />
            </div>
            
        </div>
    </div>
      <div class="md:flex space-x-6">
        
          {{-- <div class="sm:flex items-center shadow-md bg-white">
            <div class="md:px-10 sm:px-5">
              <h1 class="text-gray-800 font-bold text-2xl my-2">Tutorial Classes</h1>
              <p class="text-gray-700 mb-2 md:mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
              <div class="flex justify-between mb-2">
                <span class="font-thin text-sm">May 20th 2020 | <b class="font-bold"> UTGSU IPRO</b></span>
                <span class="sm:block hidden mb-2 text-gray-800 font-bold"> <a href="/news/show">Read more</a> </span>
              </div>
            </div>
            <div>
              <img class="bg-cover" src="/images/pose.jpg" alt="" />
            </div>
          </div> --}}
        {{-- <div class="sm:flex items-center shadow-md bg-white">
          <div class="md:px-10 sm:px-5">
            <h1 class="text-gray-800 font-bold text-2xl my-2">Students' Week</h1>
            <p class="text-gray-700 mb-2 md:mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
            <div class="flex justify-between mb-2">
              <span class="font-thin text-sm">May 20th 2020 | <b class="font-bold"> UTGSU IPRO</b></span>
              <span class="sm:block hidden mb-2 text-gray-800 font-bold"><a href="/news/show">Read more</a></span>
            </div>
          </div>
          <div>
            <img class="bg-cover" src="/images/pose.jpg" alt="" />
          </div>
        </div> --}}
      </div>
    
      <div class="mt-6 md:flex space-x-6 ">
          <div class="shadow-md bg-white">
          
            <img src="/images/pose.jpg" alt="" />
            <div class="px-4">
              <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">Tutorial Classes</h1>
              <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
              <div class="flex justify-between mt-4">
                <span class="font-thin text-sm">May 20th 2020 | <b class="font-bold">ITCA IPRO</b> </span>
                <span class="mb-2 text-gray-800 font-bold"><a href="/news/show">Read more</a></span>
              </div>
            </div>
          </div>
        <div class="shadow-md bg-white">
          <img src="/images/pose.jpg" alt="" />
          <div class="px-6">
            <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">Tutorial Classes</h1>
            <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
            <div class="flex justify-between mt-4">
              <span class="font-thin text-sm">May 20th 2020 | <b class="font-bold">SSA IPRO</b> </span>
              <span class="mb-2 text-gray-800 font-bold"><a href="/news/show">Read more</a></span>
            </div>
          </div>
        </div>
        <div class="shadow-md bg-white">
          <img src="/images/pose.jpg" alt="" />
          <div class="px-4">
            <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">Tutorial Classes</h1>
            <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
            <div class="flex justify-between mt-4">
              <span class="font-thin text-sm">May 20th 2020 | <b class="font-bold"> LAW IPRO</b></span>
              <span class="mb-2 text-gray-800 font-bold">Read more</span>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-6 md:flex space-x-6 ">
          <div class="shadow-md bg-white">
            
            <img src="/images/pose.jpg" alt="" />
            <div class="px-4">
              <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">Tutorial Classes</h1>
              <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
              <div class="flex justify-between mt-4">
                <span class="font-thin text-sm">May 20th 2020 | <b class="font-bold">ITCA IPRO</b> </span>
                <span class="mb-2 text-gray-800 font-bold"><a href="/news/show">Read more</a></span>
              </div>
            </div>
          </div>
          <div class="shadow-md bg-white">
            <img src="/images/pose.jpg" alt="" />
            <div class="px-6">
              <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">Tutorial Classes</h1>
              <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
              <div class="flex justify-between mt-4">
                <span class="font-thin text-sm">May 20th 2020 | <b class="font-bold">SSA IPRO</b> </span>
                <span class="mb-2 text-gray-800 font-bold">Read more</span>
              </div>
            </div>
          </div>
          <div class="shadow-md bg-white">
            <img src="/images/pose.jpg" alt="" />
            <div class="px-4">
              <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">Tutorial Classes</h1>
              <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
              <div class="flex justify-between mt-4">
                <span class="font-thin text-sm">May 20th 2020 | <b class="font-bold"> LAW IPRO</b></span>
                <span class="mb-2 text-gray-800 font-bold">Read more</span>
              </div>
            </div>
          </div>
        </div>
      {{-- <div class="sm:flex items-center shadow-md mt-10 bg-white">
        <div>
          <img class="bg-cover" src="/images/pose.jpg" alt="" />
        </div>
        <div class="md:px-10 sh sm:px-5">
          <h1 class="text-gray-800 font-bold text-2xl my-2">Tutorial Classes</h1>
          <p class="text-gray-700 mb-2 md:mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
          <div class="flex justify-between mb-2">
            <span class="font-thin text-sm">May 20th 2020 | <span class="font-bold">ECOMANSA IPRO </span> </span>
            <span class="sm:block hidden mb-2 text-gray-800 font-bold">Read more</span>
          </div>
        </div>
      </div> --}}
  </main>
@endsection
