@extends('ui_developer.index')
@section('title','Dashboard')

@section('content')
    <!-- component -->
                <div class=" flex flex-col items-center md:flex-row justify-center flex-wrap gap-7 my-5">
                    <div class="w-64">
                        <div class="bg-white max-w-xs shadow-lg mx-auto border-b-4 border-gray-400 rounded-2xl overflow-hidden  hover:shadow-2xl transition duration-500 transform hover:scale-105 cursor-pointer" >
                            <div class="bg-gray-400 flex justify-center h-20 items-center">
                                <p class="text-white text-base font-bold uppercase">Template</p>
                            </div>
                            <p class="py-6 px-6 text-lg tracking-wide text-center">100</p>
                            <!-- <hr > -->
                            <div class="flex justify-center px-5 mb-2 text-sm ">
                                <button type="button" class="border border-gray-400 text-black rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-400 focus:outline-none focus:shadow-outline">
                                    Show
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="w-64">
                        <div class="bg-white max-w-xs mx-auto rounded-2xl border-b-4 border-gray-400 overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-105 cursor-pointer">
                            <div class="h-20 bg-gray-400 flex justify-center items-center ">
                                <p class="text-white text-base font-bold uppercase"> 
                                    Transaction
                                </p>
                            </div>
                            <p class="py-6 px-6 text-lg tracking-wide text-center">200</p>
                            <!-- <hr > -->
                            <div class="flex justify-center px-5 mb-2 text-sm ">
                                <button type="button"
                                    class="border border-gray-400 text-black rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-400 focus:outline-none focus:shadow-outline">
                                    Show
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="w-64">
                        <div class="bg-white max-w-xs mx-auto rounded-2xl border-b-4 border-gray-400 overflow-hidden shadow-lg hover:shadow-2xl transition duration-500 transform hover:scale-105 cursor-pointer">
                            <div class="h-20 bg-gray-400 flex justify-center items-center">
                                <p class="text-white text-base font-bold uppercase">
                                    Log
                                </p>
                            </div>
                            <p class="py-6  px-6 text-lg tracking-wide text-center">300</p>
                            <!-- <hr > -->
                            <div class="flex justify-center px-5 mb-2 text-sm ">
                                <button type="button"class="border border-gray-400 text-black rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-gray-400 focus:outline-none focus:shadow-outline">
                                    Show
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
@endsection