@extends('layouts.app')
@section('title', 'Home')

@section('content')
    <!-- Starred in block -->
    <div class="py-4">
        <h5 class="text-gray-800 text-center font-opensans font-semibold text-2xl my-3 tracking-tight">Heather's Notable
            Appearances</h5>
        <div class="mx-auto container py-2 px-6">
            <div class="flex flex-wrap">
                <div class="w-full sm:w-1/2 md:w-1/3 mb-4  py-3 px-2">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12">
                                <img src="https://heather.s3.filebase.com/assets/poltergeist-min.jpg" class="rounded-full h-12 w-auto"
                                     title="Poltergeist Image"/>
                            </div>
                        </div>
                        <div class="ml-4">
                            <a class="text-lg leading-6 font-semibold text-pink-500 hover:opacity-75 font-opensans"
                               data-tippy-content="Visit Poltergeist on IMDB"
                               href="https://imdb.com/title/tt0084516/">Poltergeist</a>
                            <p class="mt-2 text-base leading-6 text-gray-800">
                                Heather is best known for her role as Carol Anne Freeling in the Poltergeist trilogy,
                                she
                                started playing the character when she was just five years old.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 mb-4 py-3 px-2">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12">
                                <img src="https://heather.s3.filebase.com/assets/webster-min.jpg" class="rounded-full h-12 w-auto"
                                     title="Webster Image"/>
                            </div>
                        </div>
                        <div class="ml-4">
                            <a class="text-lg leading-6 font-semibold text-pink-500 hover:opacity-75 font-opensans"
                               data-tippy-content="Visit Webster on IMDB" href="https://imdb.com/title/tt0085109/">Webster</a>
                            <p class="mt-2 text-base leading-6 text-gray-800">
                                Heather additionally appeared in Webster, playing the character of Melanie in three
                                episodes.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="w-full sm:w-1/2 md:w-1/3 mb-4 py-3 px-2">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12">
                                <img src="https://heather.s3.filebase.com/assets/happy-days-min.jpg" class="h-12 w-auto"
                                     title="Happy Days Image"/>
                            </div>
                        </div>
                        <div class="ml-4">
                            <a class="text-lg leading-6 font-semibold text-pink-500 hover:opacity-75 font-opensans"
                               data-tippy-content="Visit Happy Days on IMDB"
                               href="https://imdb.com/title/tt0070992/">Happy
                                Days</a>
                            <p class="mt-2 text-base leading-6 text-gray-800">
                                Heather was also a re-occurring character on Happy Days, playing the character of
                                Heather
                                Pfister for twelve episodes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Starred in block -->
    <!-- Brief About block -->
    <div class="bg-gray-50 px-6 py-3">
        <div class="mx-auto container overflow-hidden">

            <div class="flex flex-wrap mb-4">
                <div class="w-full md:w-2/3 py-3 px-8">
                    <h5 class="text-gray-800 text-center font-opensans font-semibold text-2xl py-2 tracking-tight">About
                        Heather</h5>
                    <div class="text-gray-700 text-sm md:text-base">
                        <p class="mb-3">Heather Michele O’Rourke was a child actress, born to Kathleen and Michael
                            O’Rourke on 27th
                            December 1975 in San Diego, California. Life was normal for her and her older
                            sister Tammy, however her life would change forever when she was at the MGM Cafeteria with
                            her mother and
                            sister, as sister Tammy was filming ‘Pennies From Heaven’ at the time.</p>

                        <p class="mb-3">Director Steven Spielberg noticed Heather and thought that she may be a good fit
                            in a movie that
                            he was in the stages of planning, Poltergeist. Spielberg had Heather come in for an audition
                            and
                            was told to scream, as Spielberg needed to make sure she could scream convincingly for the
                            camera.</p>

                        <p class="mb-3">Scream she did - Heather followed all of his instructions, however Spielberg
                            wanted Heather to
                            scream longer and louder, so she complied and did just that; after a while of this she
                            eventually got tired as she was only five at the time and politely told Spielberg she would
                            like to go home, which Spielberg understood and informed Heather’s mother, Kathleen.</p>

                        <p class="mb-3">The very next day, Steven Spielberg saw the O’Rourke’s at their familiar table
                            in the MGM
                            Cafeteria and offered Heather the part of Carol Anne Freeling, which Heather accepted after
                            discussing it with her mom. Thanks to Spielberg's decision, the world was soon introduced to
                            the angelic Heather O'Rourke.</p>

                        <p class="font-semibold text-center md:text-left my-2">If you would like to read more about
                            Heather, please click the button below to be directed to Heather's biography on her official
                            website.</p>
                    </div>

                    <div class="rounded-md shadow my-1">
                        <a href="https://heatherorourke.com/biography/" target="_blank"
                           data-tippy-content="Visit the Heather O'Rourke official site"
                           class="w-full flex items-center text-sm text-center md:text-left justify-center px-4 py-1 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-pink-600 hover:bg-pink-500 focus:outline-none focus:border-pink-500 focus:shadow-outline-pink transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                            <svg viewBox="0 0 20 20" fill="currentColor" class="external-link w-6 h-6 inline">
                                <path
                                    d="M11 3a1 1 0 100 2h2.586l-6.293 6.293a1 1 0 101.414 1.414L15 6.414V9a1 1 0 102 0V4a1 1 0 00-1-1h-5z"></path>
                                <path
                                    d="M5 5a2 2 0 00-2 2v8a2 2 0 002 2h8a2 2 0 002-2v-3a1 1 0 10-2 0v3H5V7h3a1 1 0 000-2H5z"></path>
                            </svg>
                            Read more about Heather O'Rourke
                        </a>
                    </div>
                </div>
                <div class="w-full md:w-1/3 h-48 py-12 text-center my-2 hidden md:block">
                    <img class="h-auto w-auto rounded-full inline" src="https://heather.s3.filebase.com/assets/about-block.jpg"
                         title="Heather O'Rourke"/>
                </div>
            </div>
        </div>
    </div>
    <!-- Brief About block -->

    <!-- FAQ block -->
    <div class="bg-white px-6 py-4 w-full border-b border-t border-gray-100">
        <div class="mx-auto container">
            <h5 class="text-gray-800 text-center font-semibold text-2xl my-3 tracking-tight font-opensans">Frequently
                Asked Questions</h5>
            <div class="flex flex-wrap mb-4 w-full justify-center items-center">
                <div class="container mx-auto px-2 py-2" x-data="{
            faqs: [
            {
                    question: 'What is She Was Here?',
                    answer: 'She Was Here is an historical film exploring the life of Heather with the aim to preserve her legacy, it will include stories and never before seen images of Heather, as well as interviews with her family and her co-stars. The historical film is expected to release in 2022, for a link to the films official website please check the Links page.',
                    isOpen: false,
                },
                {
                    question: 'How old was Heather when she passed?',
                    answer: 'Heather passed away when she was twelve years old, her birthday was December 27th and passed the following February.',
                    isOpen: false,
                },
                {
                    question: 'Does Heather have any siblings?',
                    answer: 'Heather has a surviving sister, Tammy who is three years older than her. Heather was a twin but her mom Kathleen tragically suffered a miscarriage and lost him.',
                    isOpen: false,
                },
                {
                    question: 'What else did Heather appear in?',
                    answer: 'Heather appeared in several television commercials and TV show movies, such as Surviving in addition to playing her best-known character in Carol Anne. (Poltergeist) For a full break down, visit the official sites filmography page.',
                    isOpen: false,
                },
            ]
        }">
                    <div class="leading-loose text-lg mt-6">
                        <template x-for="faq in faqs" :key="faq.question">
                            <div>
                                <button
                                    class="w-full font-bold border-b border-gray-400 py-3 flex justify-between items-center mt-4 focus:outline-none"
                                    @click="faqs = faqs.map(f => ({ ...f, isOpen: f.question !== faq.question ? false : !f.isOpen}))">
                                    <!-- Specs has it that only one component can be open at a time and also you should be able to toggle the open state of the active component too -->
                                    <div x-text="faq.question" class="text-gray-800 font-semibold tracking-tight"></div>
                                    <svg x-show="!faq.isOpen" class="fill-current text-gray-800 hover:opacity-75"
                                         viewBox="0 0 24 24" width="24" height="24">
                                        <path class="heroicon-ui"
                                              d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z"/>
                                    </svg>
                                    <svg x-show="faq.isOpen" class="fill-current text-gray-800 hover:opacity-75"
                                         viewBox="0 0 24 24" width="24" height="24">
                                        <path class="heroicon-ui"
                                              d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z"/>
                                    </svg>
                                </button>

                                <div class="text-gray-700 text-base mt-2 text-center md:text-left" x-text="faq.answer"
                                     x-show="faq.isOpen"></div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ block -->
@endsection
