<div class="header-bg border-t-8 border-pink-500">
    <div class="mx-auto container px-4 pt-6 max-w-5xl">
        <div class="flex justify-around items-center max-w-xl text-center mx-auto">
            <div>
                <img src="https://heather.s3.filebase.com/assets/logo.jpg"
                     class="block h-32 w-32 rounded-full border-2 border-pink-500"
                     title=" {{ config('app.name') }}">
            </div>
            <div>
                <h2 class="text-3xl font-semibold text-gray-800">{{ config('app.name') }}</h2>
                <h3 class="font-normal text-pink-500 border-transparent -mt-2">{{__("Dedicated to child actress Heather O'Rourke.")}}</h3>
            </div>
        </div>
    </div>
</div>
<div class="border-b bg-white border-gray-200 mt-2">
    <div class="mx-auto max-w-2xl">
        <nav class="flex justify-evenly items-center">
            <a class="py-3 px-4 text-center text-gray-700 font-semibold font-sans tracking-tight whitespace-no-wrap border-b-2 {{ Request::is('/') ? 'border-pink-500' : 'border-transparent hover:border-gray-300 transition-500 ease-in-out' }}"
               href="{{ route('home') }}" title="{{__("Home")}}">
                <svg class="w-5 h-5 inline -mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                </svg>
                {{__("Home")}}
            </a>
            <a class="py-3 px-4 text-center text-gray-700 font-semibold font-sans tracking-tight whitespace-no-wrap border-b-2 {{ Request::is('gallery') ? 'border-pink-500' : 'border-transparent hover:border-gray-300 transition-500 ease-in-out' }}"
               href="{{ route('gallery') }}" title="{{__("Gallery")}}">
                <svg class="h-5 w-5 inline -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                </svg>
                {{__("Gallery")}}
            </a>
            <a class="py-3 px-4 text-center text-gray-700 font-semibold font-sans tracking-tight whitespace-no-wrap border-b-2 {{ Request::is('links') ? 'border-pink-500' : 'border-transparent hover:border-gray-300 transition-500 ease-in-out' }}"
               href="{{ route('links') }}" title="{{__("Links")}}">
                <svg class="h-5 w-5 inline -mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path>
                </svg>
                {{__("Links")}}
            </a>
        </nav>
    </div>
</div>
<style>
    .header-bg {
        background-color: #ffffff;
        background-image: url("data:image/svg+xml,%3Csvg width='44' height='12' viewBox='0 0 44 12' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M20 12v-2L0 0v10l4 2h16zm18 0l4-2V0L22 10v2h16zM20 0v8L4 0h16zm18 0L22 8V0h16z' fill='%23fff5f7' fill-opacity='0.4' fill-rule='evenodd'/%3E%3C/svg%3E");</style>
