@extends('layouts.app')

@section('content')
    <!-- component -->
    <div class="flex bg-gray-100 w-full">
        <aside class="flex px-16 space-y-16 overflow-hidden flex-col   bg-indigo-800" style="height: 200vh">
            {{-- <div class="flex items-center justify-center p-4 shadow-lg">
                <h1 class="text-white font-bold mr-2 cursor-pointer"> <a href="/home"> Dashboard</a></h1>
            </div> --}}
            <ul>
                        <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" /></svg
                        ><a href="/associations/show">All</a>
                        </li>
                        <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" /></svg
                            ><a href="/users">UTGSU</a>
                            </li>
                        <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg
                        ><a href="/news">ITCA</a>
                        </li>
                        <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg
                        ><a href="/schools">SAS</a>
                        </li>
                        <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" /></svg
                        ><a href="/associations">LAW</a>
                        </li>
                        <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" /></svg
                        ><a href="/register">ECOMANSA</a>
                        </li>
                        <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg
                            ><a href="/news">SOSHSA</a>
                        </li>
                    </ul>
        </aside>
        <main class="flex-col bg-indigo-50 w-full ml-4 pr-6">
            <div class="flex justify-between p-4 bg-white mt-3 rounded-xl shadow-lg">
                <h1 class="text-xl font-bold text-gray-700">News</h1>
                <div class="flex justify-between w-2/5">
                    <div class="flex items-center w-full border-2 p-2 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input type="text" placeholder="Search" class="ml-2 outline-none w-full" />
                    </div>
                    
                </div>
            </div>
            <div class="mt-6 md:flex space-x-6 ">
                <div class="shadow-md bg-white">
                
                  <img src="/images/pose.jpg" alt="" />
                  <div class="px-4">
                    <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">long established</h1>
                    <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
                    <div class="flex justify-between mt-4">
                      <span class="font-thin text-sm">May 20th 2020 | <b class="font-bold">ITCA IPRO</b> </span>
                      <span class="mb-2 text-gray-800 font-bold">Read more</span>
                    </div>
                  </div>
                </div>
                <div class="shadow-md bg-white">
                  <img src="/images/pose.jpg" alt="" />
                  <div class="px-6">
                    <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">long established</h1>
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
                    <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">long established</h1>
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
                    <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">long established</h1>
                    <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
                    <div class="flex justify-between mt-4">
                      <span class="font-thin text-sm">May 20th 2020 | <b class="font-bold">ITCA IPRO</b> </span>
                      <span class="mb-2 text-gray-800 font-bold">Read more</span>
                    </div>
                  </div>
                </div>
                <div class="shadow-md bg-white">
                  <img src="/images/pose.jpg" alt="" />
                  <div class="px-6">
                    <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">long established</h1>
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
                    <h1 class="mt-3 text-gray-800 text-2xl font-bold my-2">long established</h1>
                    <p class="text-gray-700 mb-2">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that....</p>
                    <div class="flex justify-between mt-4">
                      <span class="font-thin text-sm">May 20th 2020 | <b class="font-bold"> LAW IPRO</b></span>
                      <span class="mb-2 text-gray-800 font-bold">Read more</span>
                    </div>
                  </div>
                </div>
            </div>
        </main>
    </div>
       
   
@endsection
