@extends('layouts.app')

@section('content')
    <!-- component -->
    <div class="flex bg-gray-100 w-full">
        <aside class="flex px-16 space-y-16 overflow-hidden flex-col items-center justify-center  bg-indigo-800" style="height: 100vh">
            <div class="flex items-center justify-center p-4 shadow-lg">
                <h1 class="text-white font-bold mr-2 cursor-pointer"> <a href="/dashboard"> Dashboard</a></h1>
            </div>
            <ul>
                <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" />
                    </svg><a href="/users">Users</a>
                </li>
                <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg><a href="">News</a>
                </li>
                        <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg
                        ><a href="">Schools</a>
                        </li>
                        <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" /></svg
                            ><a href="">Associations</a>
                          </li>
                        <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" /></svg
                        ><a href="/register">Registrations</a>
                        </li>
                        <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg
                        ><a href="">Settings</a>
                        </li>
                    </ul>
        </aside>
        <main class="flex-col bg-indigo-50 w-full ml-4 pr-6">
            <div class="flex justify-between p-4 bg-white mt-3 mb-10 rounded-xl shadow-lg">
                <h1 class="text-xl font-bold text-gray-700">Welcome</h1>
                <div class="flex justify-between w-2/5">
                    <div class="flex items-center border-2 p-2 rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input type="text" placeholder="Search" class="ml-2 outline-none w-full" />
                    </div>
                    <div class="flex items-center space-x-6 pr-8">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 cursor-pointer text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                        </svg>
                            {{-- <img src="/images/pose.jpg" alt="" class="cursor-pointer avatar h-20 w-20 rounded-full" /> --}}
                    </div>
                </div>
            </div>
                    <div class="flex justify-between mt-4 space-x-4 s">
                        <div class="bg-white w-1/3 rounded-xl p-4 shadow-lg flex items-center justify-around">
                            <div class="text-xl font-bold mb-1 text-gray-500">
                                Users
                            </div>
                            <div class="text-4xl font-bold text-gray-800">
                               54
                            </div>
                        </div>
                        <div class="bg-white w-1/3 rounded-xl shadow-lg flex items-center justify-around">
                            <div class="text-xl font-bold mb-1 text-gray-500">
                                Associations
                            </div>
                            <div class="text-4xl font-bold text-gray-800">
                               10
                            </div>
                        </div>
                        <div class="bg-white w-1/3 text-xs rounded-xl shadow-lg flex items-center justify-around">
                            <div class="text-xl font-bold mb-1 text-gray-500">
                                News
                            </div>
                            <div class="text-4xl font-bold text-gray-800">
                               134
                            </div>
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <div class="justify-between rounded-xl mt-4 p-4 bg-white shadow-lg">
                        <h1 class="text-xl font-bold text-gray-800 mt-4">Today’s Status</h1>
                        <div class="flex justify-between space-x-4 text-center mt-6">
                            <div class="bg-indigo-50 rounded-xl p-10">
                            <h3>8</h3>
                            <spnan>Total Users</spnan>
                            </div>
                            <div class="bg-indigo-50 rounded-xl p-10">
                            <h3>99</h3>
                            <spnan>Registrations</spnan>
                            </div>
                            <div class="bg-indigo-50 rounded-xl p-10">
                            <h3>30</h3>
                            <spnan>Totals News Posted</spnan>
                            </div>
                        </div>
                        </div>
                        <div class="justify-between rounded-xl mt-4 p-4 bg-white shadow-lg">
                        <h1 class="text-xl font-bold text-gray-800 mt-4">Monthly Status</h1>
                        <div class="flex justify-between space-x-4 text-center mt-6">
                            <div class="bg-indigo-50 rounded-xl p-10">
                            <h3>8</h3>
                            <spnan>Total Users</spnan>
                            </div>
                            <div class="bg-indigo-50 rounded-xl p-10">
                            <h3>99</h3>
                            <spnan>Registrations</spnan>
                            </div>
                            <div class="bg-indigo-50 rounded-xl p-10">
                            <h3>30</h3>
                            <spnan>Totals News Posted</spnan>
                            </div>
                        </div>
                        </div>
                    </div>
                </main>
    </div>
       
   
@endsection
