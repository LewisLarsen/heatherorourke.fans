<div class="gallery flex-grow relative mx-auto" x-data="gallery()" x-init="init()">
    {{-- First Carousel Item --}}
    <div class="gallery__item sm:rounded-lg overflow-hidden" x-ref="size">
        <img src="https://heather.s3.filebase.com/gallery/1315592550.jpg" alt="{{__("Heather O'Rourke")}}" class="gallery__image object-cover object-center" title="{{__("Heather O'Rourke")}}">
    </div>
    {{-- First Carousel Item --}}

    {{--  Carousel Items --}}
    <x-carousel-item image="https://heather.s3.filebase.com/gallery/2395985929.jpg"></x-carousel-item>
    <x-carousel-item image="https://heather.s3.filebase.com/gallery/3150433295.jpg"></x-carousel-item>
    <x-carousel-item image="https://heather.s3.filebase.com/gallery/3240916424.jpg"></x-carousel-item>
    <x-carousel-item image="https://heather.s3.filebase.com/gallery/4110797794.jpg"></x-carousel-item>
    <x-carousel-item image="https://heather.s3.filebase.com/gallery/5731d06ce812ahd728.png"></x-carousel-item>
    <x-carousel-item image="https://heather.s3.filebase.com/gallery/6023659288.jpg"></x-carousel-item>
    {{-- Carousel Items --}}
    <a class="gallery__nav gallery__nav--right text-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer" x-on:click="next()">
        <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
            <path
                d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z">
            </path>
        </svg>
    </a>
    <a class="gallery__nav gallery__nav--left text-white rounded-full w-10 h-10 flex items-center justify-center cursor-pointer" x-on:click="previous()">
        <svg class="fill-current w-6 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512">
            <path
                d="M31.7 239l136-136c9.4-9.4 24.6-9.4 33.9 0l22.6 22.6c9.4 9.4 9.4 24.6 0 33.9L127.9 256l96.4 96.4c9.4 9.4 9.4 24.6 0 33.9L201.7 409c-9.4 9.4-24.6 9.4-33.9 0l-136-136c-9.5-9.4-9.5-24.6-.1-34z">
            </path>
        </svg>
    </a>
</div>
<link href="https://heather.s3.filebase.com/assets/carousel/dist/css/gallery.css" rel="stylesheet">
<link href="https://heather.s3.filebase.com/assets/carousel/dist/css/gallery-keyframes-swipe.css" rel="stylesheet">
<script src="https://heather.s3.filebase.com/assets/carousel/dist/js/gallery.js'"></script>
<style>
    .gallery {
        --gallery_width: 640px;
        --gallery_height: 480px;
    }
</style>
