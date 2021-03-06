@extends('layouts.app')
@section('title', 'Links')

@section('content')
    <div class="bg-white w-full">
        <div class="mx-auto container px-10 py-8">
            <p class="mt-3 text-lg leading-7 text-gray-700">
                Heather has a lot of fans who are dedicated and produce the most amazing websites, fan pages and
                video content about her. This is not an exhaustive list but all that I could find are listed
                below. If you see something that is missing, please contact <a
                    href="mailto:lewis.larsen@heatherorourke.fans" class="text-pink-400 opacity-75 font-semibold">lewis.larsen@heatherorourke.fans</a>.
            </p>

            <div class="py-3">
                <div class="rounded-md border border-pink-200 bg-pink-100 px-6 py-3 text-pink-600">
                    <svg class="inline h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                         class="user-group w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                    <span>I highly recommend joining the Heather O'Rourke Memorial Forum if you are a fan of Heather.</span>
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
    <div class="bg-gray-50 w-full my-4">
        <div class="mx-auto container px-4">
            <div class="relative lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
                <div class="relative">
                    <ul class="mt-10">
                        <li>
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center w-12 h-12 text-white bg-pink-600 rounded-md">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                             class="external-link w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg font-medium leading-6 text-gray-800 font-semibold">Heather
                                        O'Rourke Official Website</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-700">
                                        Make sure to check out the official website dedicated to Heather, which includes
                                        a discussion forum as well. <a
                                            href="https://heatherorourke.com" target="_blank"
                                            class="text-pink-600 font-semibold hover:opacity-75">Visit
                                            Website</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="mt-10">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center w-12 h-12 text-white bg-pink-600 rounded-md">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                             class="external-link w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg font-medium leading-6 text-gray-800 font-semibold">Heather
                                        O'Rourke Forest Conservation</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-700">
                                        The Heather O'Rourke forest conservation is dedicated to helping the forests of
                                        the world, all while paying tribute to Heather. <a
                                            href="https://heatherorourkefc.org" target="_blank"
                                            class="text-pink-600 font-semibold hover:opacity-75">Visit Website</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="mt-10">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center w-12 h-12 text-white bg-pink-600 rounded-md">
                                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                             class="external-link w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg font-medium leading-6 text-gray-800 font-semibold">Heather
                                        O'Rourke: She Was Here</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-700">
                                        Heather O'Rourke: She Was Here is an upcoming documentary film exploring the wonderful life of Heather. <a
                                            href="http://www.shewasherefilm.com/" target="_blank"
                                            class="text-pink-600 font-semibold hover:opacity-75">Visit Website</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="mt-10">
                            <div class="flex">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center w-12 h-12 text-white bg-youtube rounded-md">
                                        <svg class="w-6 h-6 text-white" stroke="none" fill="currentColor"
                                             width="24" height="24" viewBox="0 0 24 24">
                                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h5 class="text-lg font-medium leading-6 text-gray-800 font-semibold">YouTube
                                        Channel - Kayleigh 1999</h5>
                                    <p class="mt-2 text-base leading-6 text-gray-700">
                                        Kayleigh 1999 regularly uploads videos of Heather, which include news reports,
                                        interviews, tribute videos and short clips with never before seen photos. <a
                                            href="https://youtube.com/channel/UC_G811gX8JPkheeeH_2zNQQ"
                                            target="_blank" class="text-pink-600 font-semibold hover:opacity-75">Visit
                                            Channel</a>
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>

                <div class="relative mt-10 lg:mt-0">
                    <div class="relative">
                        <ul class="mt-10">
                            <li>
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center w-12 h-12 text-white bg-youtube rounded-md">
                                            <svg class="w-6 h-6 text-white" stroke="none" fill="currentColor"
                                                 width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h5 class="text-lg font-medium leading-6 text-gray-800 font-semibold">YouTube
                                            Channel - arantes07</h5>
                                        <p class="mt-2 text-base leading-6 text-gray-700">
                                            arantes07 is an older YouTube Channel which has numerous short clips of
                                            Heather, most notably commerical appearances. <a
                                                href="https://youtube.com/user/arantes07" target="_blank"
                                                class="text-pink-600 font-semibold hover:opacity-75">Visit
                                                Channel</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-10">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center w-12 h-12 text-white bg-instagram rounded-md">
                                            <svg class="w-6 h-6 text-white" stroke="none" fill="currentColor"
                                                 width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h5 class="text-lg font-medium leading-6 text-gray-800 font-semibold">Instagram
                                            Account - heatherorourkefanx</h5>
                                        <p class="mt-2 text-base leading-6 text-gray-700">
                                            heatherorourkefanx is an Instagram Account who regularly uploads pictures of
                                            Heather. <a
                                                href="https://instagram.com/heatherorourkefanx" target="_blank"
                                                class="text-pink-600 font-semibold hover:opacity-75">Visit
                                                Page</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                            <li class="mt-10">
                                <div class="flex">
                                    <div class="flex-shrink-0">
                                        <div class="flex items-center justify-center w-12 h-12 text-white bg-instagram rounded-md">
                                            <svg class="w-6 h-6 text-white" stroke="none" fill="currentColor"
                                                 width="24" height="24" viewBox="0 0 24 24">
                                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="ml-4">
                                        <h5 class="text-lg font-medium leading-6 text-gray-800 font-semibold">Instagram
                                            Account - heatherorourke_memories_</h5>
                                        <p class="mt-2 text-base leading-6 text-gray-700">
                                            heatherorourke_memories_ is an Instagram Account with pictures of Heather
                                            and memorabilia, such as her homework. <a
                                                href="https:///instagram.com/heatherorourke_memories"
                                                target="_blank"
                                                class="text-pink-600 font-semibold hover:opacity-75">Visit
                                                Page</a>
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .bg-instagram {
            background: #f09433;
            background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            background: -webkit-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f09433', endColorstr='#bc1888', GradientType=1);
        }
    </style>
@endsection
