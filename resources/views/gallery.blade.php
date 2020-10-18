@extends('layouts.app')
@section('title', 'Gallery')

@section('content')
    <div class="mx-auto container px-10 py-8">
        <p class="mt-3 text-lg leading-7 text-gray-700">
            Below is a carousel of various images of Heather O'Rourke, all images are owned by their respective parties and this
            website
            claim no rights to them, they are being used to highlight the unique life and equally wonderful life
            that Heather had.
        </p>
        <div class="py-3">
            <div class="rounded-md border border-pink-200 bg-pink-100 px-6 py-3 text-pink-500">
                <svg class="inline h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                     class="photograph w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                <span>If you are interested in viewing more images of Heather, consider joining Heather's official memorial forum.</span>
                <a href="https://heatherorourke.com/forum2" target="_blank"
                   title="Visit Heather's Memorial Forum"
                   class="ml-3 px-3 py-2 rounded bg-pink-700 hover:bg-pink-600 text-white focus:outline-none focus:border-pink-600 focus:shadow-outline-pink transition duration-150 ease-in-out">
                    <svg viewBox="0 0 20 20" fill="currentColor" class="external-link w-6 h-6 inline -mt-1">
                        <path d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path>
                        <path d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
                    </svg>
                    Visit Forum</a>
            </div>
        </div>
    </div>
    </div>
    <div class="bg-gray-50 w-full">
        <div class="mx-auto container px-10 py-2">
            @include('partials.gallery')

        </div>
    </div>
@endsection
