@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Sapa go catch if you too dey squeeze face
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Read More
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
        <div class="tenor-gif-embed" data-postid="20959544" data-share-method="host" data-aspect-ratio="0.90625" data-width="80%"><a href="https://tenor.com/view/reiagz-a-mcrying-reiagzcrying-crying-am-cryingreiagz-gif-20959544">Reiagz A Mcrying GIF</a>from <a href="https://tenor.com/search/reiagz-gifs">Reiagz GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
            
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
            Why you too dey vex? Are you not tired of squeezing face?
            </h2>
            
            <p class="py-8 text-gray-600 text-s">
            Whether you're having a tough time at work, school or with life generally, Jollific.com has got your back! We've packed our digital shelves with an array of goodies to tickle your funny bone and lift your spirits.
            
            <p class="text-gray-600 text-s pb-9">
            Grab a seat, relax, and let us be your guide to a world of endless smiles. With just a few clicks, you'll discover a treasure trove of captivating content that will make your day sparkle like a disco ball at a dance party.</p>
        </p>


        <br>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                Find Out More
            </a>
        </div>
    </div>

    <!-- <div class="text-center p-15 bg-black text-white">
         <h2 class="text-2xl pb-5 text-l"> 
            I'm an expert in...
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Ux Design
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Project Management
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Digital Strategy
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Backend Development
        </span>
    </div> -->

    <div class="text-center py-15">
 

        <h2 class="text-4xl font-bold py-10">
        Catalogue
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
        Are you ready to giggle your way to happiness? Our fun videos section is bursting at the seams with side-splitting humor. 
But that's not all, folks! Our motivational videos are here to inject some fuel into your motivational engine. Need an extra dose of inspiration to conquer that Monday slump? We've got your back! Brace yourself for a shower of uplifting messages and life-changing stories that will make you want to conquer mountains. You've got this!

Comic lovers, rejoice! We've gathered a collection of comics that will transport you to a world of whimsical wonders. Whether you're a fan of superheroes, talking animals, or sarcastic punchlines, we've got the perfect comic strip to tickle your fancy. Prepare to have your funny bone tickled until it can't take it anymore!
        </p>
    </div>

    <div  class="sm:grid grid-cols-3 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div><video width="320" height="240" controls><source src="https://www.youtube.com/watch?v=Ym0_W-wK9wU"></video></div>
        <div><video width="320" height="240" controls> <source src="https://www.youtube.com/watch?v=HRz6ROJRMXs"></video></div>
        <div><video width="320" height="240" controls> <source src="https://www.youtube.com/watch?v=HRz6ROJRMXs"></video></div>        
    </div>

    <h2 class="text-4xl font-bold py-10 text-center py-15">
        Blog
        </h2>

    <div  class="sm:grid grid-cols-3 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    @foreach ($posts as $post)
    <div>
        <div>
            <img width="320" height="240" src="{{ asset('images/' . $post->image_path) }}" alt="">
        </div>
        <div class="line-clamp-3">
            <h2 class="text-gray-700 font-bold text-2xl pb-4">
                {{ $post->title }}
            </h2>

            <span class="text-gray-500">
                By <span class="font-bold italic text-gray-800">{{ $post->user->name }}</span>, Created on {{ date('jS M Y', strtotime($post->updated_at->diffForHumans())) }}
            </span>
            <br><br>

            <a href="/blog/{{ $post->slug }}" class="uppercase bg-blue-500 text-gray-100 text-lg font-extrabold py-4 px-8 rounded-3xl">
                Read
            </a>
        </div>
    </div>    
@endforeach
    </div>
@endsection