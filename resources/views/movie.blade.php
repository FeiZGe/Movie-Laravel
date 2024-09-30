@extends('layout')

@section('desc', 'Watch movies for free at Pandora! Enjoy the latest releases and classic films in HD with no ads or hidden fees. Sign up now to access unlimited streaming on all devices. (This is a mini project for class work)')
@section('titile', 'Movie')

@section('content')
<div class="block text-lg " style="height: 85vh;"> 
    <div class="flex items-center justify-center h-full"> 
        <div class="w-full text-center">
            <div class="flex justify-between items-center">
                <h2 class="text-2xl font-semibold">Movie Name</h2>
                <button class="mt-4 bg-black text-white px-4 py-2 rounded">Play</button>
            </div>
            <h3 class="text-xl font-medium mb-4 mt-32">Also Be Like</h3>
            <div class="flex space-x-10">
                    <div class="bg-gray-200 w-1/6 h-32 rounded"></div>
                    <div class="bg-gray-200 w-1/6 h-32 rounded"></div>
                    <div class="bg-gray-200 w-1/6 h-32 rounded"></div>
                    <div class="bg-gray-200 w-1/6 h-32 rounded"></div>
                    <div class="bg-gray-200 w-1/6 h-32 rounded"></div>
                    <div class="bg-gray-200 w-1/6 h-32 rounded"></div>
            </div>
        </div>
    </div>
</div>
@endsection