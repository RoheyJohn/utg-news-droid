@extends('layouts.app')

@section('content')
    <!-- component -->
    <div class="flex bg-gray-100 w-full">
        <aside class="flex px-16 space-y-16 overflow-hidden flex-col items-center justify-center  bg-indigo-800" style="height: 100vh">
            <div class="flex items-center justify-center p-4 shadow-lg">
                <h1 class="text-white font-bold mr-2 cursor-pointer"> <a href="/home"> Dashboard</a></h1>
            </div>
            <ul>
                        <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4" /></svg
                        ><a href="/users">Users</a>
                        </li>
                        <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg
                        ><a href="/news">News</a>
                        </li>
                        <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg
                        ><a href="/schools">Schools</a>
                        </li>
                        <li class="flex space-x-2 mt-4 px-6 py-4 text-white hover:bg-white hover:text-indigo-800 font-bold hover:rounded-br-3xl transition duration-100 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" /></svg
                        ><a href="/associations">Associations</a>
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
            <div class="flex justify-between mt-4 space-x-4 s">
                <a href="/news/create" class="bg-indigo-800 hover:bg-indigo-600 text-white font-bold py-5 px-6 rounded">
                    Add News
                </a>                 
            </div>
   
            <div class="flex space-x-4">
                <div class="justify-between w-full rounded-xl mt-4 p-4 bg-white shadow-lg">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                          <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="overflow-hidden">
                              <table class="min-w-full">
                                <thead class="bg-white border-b">
                                  <tr>
                                    <th scope="col" class="text-xl font-medium text-gray-900 px-6 py-4 text-left">
                                      #
                                    </th>
                                    <th scope="col" class="text-xl font-medium text-gray-900 px-6 py-4 text-left">
                                      Supervisor
                                    </th>
                                    <th scope="col" class="text-xl font-medium text-gray-900 px-6 py-4 text-left">
                                      Title
                                    </th>
                                    <th scope="col" class="text-xl font-medium text-gray-900 px-6 py-4 text-left">
                                      Description
                                    </th>
                                    <th scope="col" class="text-xl font-medium text-center text-gray-900 px-6 py-4 ">
                                      Comments
                                    </th>
                                    <th scope="col" class="text-xl font-medium text-center text-gray-900 px-6 py-4 ">
                                        Action
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                    <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">
                                      ITCA PRO
                                    </td>
                                    <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">
                                      Sports Day
                                    </td>
                                    <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">
                                        Sports Day Sports Day Sports Day
                                    </td>
                                    <td class="text-sm text-gray-900 text-center px-6 py-4 whitespace-nowrap">
                                      5
                                    </td>
                                    <td class="text-xl text-gray-900 font-bold text-center px-6 py-4 whitespace-nowrap">
                                        ...
                                    </td>
                                  </tr>
                                  <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">2</td>
                                    <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">
                                      LAW PRO
                                    </td>
                                    <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">
                                      Sports Day
                                    </td>
                                    <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">
                                        Sports Day Sports Day Sports Day
                                    </td>
                                    <td class="text-sm text-gray-900 text-center px-6 py-4 whitespace-nowrap">
                                      3
                                  </td>
                                    <td class="text-xl text-gray-900 font-bold text-center px-6 py-4 whitespace-nowrap">
                                        ...
                                    </td>
                                  </tr>
                                  <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">3</td>
                                    <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">
                                      SSA PRO
                                    </td>
                                    <td class="text-sm text-gray-900  px-6 py-4 whitespace-nowrap">
                                      Sports Day
                                    </td>
                                    <td class="text-sm text-gray-900 px-6 py-4 whitespace-nowrap">
                                        Sports Day Sports Day Sports Day
                                    </td>
                                    <td class="text-sm text-gray-900 text-center px-6 py-4 whitespace-nowrap">
                                      2
                                    </td>
                                    <td class="text-xl text-gray-900 text-center font-bold px-6 py-4 whitespace-nowrap">
                                        ...
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                              
                </div>
            </div>
        </main>
    </div>
       
   
@endsection
