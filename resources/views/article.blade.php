<x-layout>
    <div class="bg-gradient-to-r from-blue-300 to-purple-500 h-screen flex justify-center items-center">
        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
                    <h2 class="text-gray-900 font-extrabold title-font tracking-wider text-2xl">{{$article->summary}}</h2>
                    <p class="text-gray-500 text-xl">{{$article->short_description}}</p>
                    <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
                    <p class="leading-relaxed text-lg">{{$article->full_text}}</p>
                    <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>

                </div>
            </div>
        </section>
    </div>

</x-layout>
