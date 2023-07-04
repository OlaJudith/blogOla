<!-- Summary page to list all Blogs, sneakpeek -->
@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text-center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Catalogue
        </h1>
    </div>
</div>

@if (session()->has('message'))
    <div class="w-4/5 m-auto mt-10 pl-2">
        <p class="w-2/6 mb-4 text-gray-50 bg-green-500 rounded-2xl py-4">
            {{ session()->get('message') }}
        </p>
    </div>
@endif

@if (Auth::check())
    <div class="pt-15 w-4/5 m-auto">

<div class="bg-blue-500 uppercase bg-transparent text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
<h1>
            LOL! Watch out for more exciting content soon
            </h1>
</div>
    </div>
@else
<div>
    <div class="w-4/5 m-auto text-center">
        <h1 class="text-4xl">Relaaaaaaaaaaaaaaax!</h1>
        <div class="sm:grid gap-20 w-2/5 mx-auto py-15 border-b border-gray-200"> <div class="tenor-gif-embed" data-postid="22105187" data-share-method="host" data-aspect-ratio="1" data-width="100%"><a href="https://tenor.com/view/relax-chill-gif-22105187">Relax Chill GIF</a>from <a href="https://tenor.com/search/relax-gifs">Relax GIFs</a></div> <script type="text/javascript" async src="https://tenor.com/embed.js"></script></div>
       
        <h3>Login first to access more content.</h3>
    </div>
</div>
@endif


@endsection