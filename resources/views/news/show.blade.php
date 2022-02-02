@extends('layouts.app')

@section('content')
<main class="py-12 md:px-20 bg-indigo-50 sm:px-14 px-6" class="flex-col bg-indigo-50 w-full ml-4 pr-6">
    <div class="sm:flex items-center shadow-md mt-10 bg-white">
        <div style="width: 45%">
        <img class="bg-cover" src="/images/pose.jpg" alt="" />
        </div>
        <div class="md:px-10 sh sm:px-5" style="width: 50%">
            <h1 class="text-gray-800 font-bold text-2xl my-2">Tutorial Classes</h1>
            <p class="text-gray-700 mb-2 md:mb-6">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
            <span class="mb-2">
                <input type="text" placeholder="Add comment" class="bg-gray-100 px-4 py-2 rounded-lg focus:outline-none"> 
            </span>
            <div class="flex justify-between mb-2 mt-5">
                <span class="font-thin text-sm">May 20th 2020 | <span class="font-bold">ECOMANSA IPRO </span> </span>
            </div>
        </div>
    </div>
</main>
@endsection