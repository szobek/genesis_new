<style>
    .single-news ul {
        list-style-type: circle;
        padding-left: 20px;
    }

    .single-news li {
        margin-bottom: 10px;
    }

    .single-news a {
        text-decoration: none
    }
</style>

<x-main-layout title="{!! $news->title !!}">
    <div class="content">
        <x-slot name="header">

        </x-slot>
        <div class="single-news mt-4">

            <x-slot name="title">{{ $news->title }}</x-slot>

            <div class="container mx-auto px-4 py-8">
                <div class="row">
                    <h1 class="text-3xl font-bold mb-4">{{ $news->title }}</h1>
                    @if($news->video)
                        <div class="col-md-4 mb-4">
                            <video width="100%" height="auto" controls>
                                <source src="{{ asset($news->video) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif
                    <div class="@if($news->video) col-md-8 @else col-md-12 @endif ">
                        <div class="">
                            {!! $news->content !!}
                        </div>
                        <p>
                            @if($news->tiktok_link)
                                <a href="{{ $news->tiktok_link }}" target="_blank">
                                    <img width="30" src="{{ asset("assets/images/icons/tiktok_icon.png") }}"
                                        alt="tiktok icon">
                                </a>
                            @endif
                            @if($news->facebook_link)
                                <a href="$news->facebook_link" target="_blank">
                                    <img width="30" src="{{ asset("assets/images/icons/fb_icon.png") }}"
                                        alt="facebook icon">
                                </a>

                            @endif
                        </p>
                    </div>
                </div>

                <p>
                    <a href="{{ route('pages.news') }}" class="text-blue-600 hover:underline">
                        ← Vissza a hírekhez
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-main-layout>