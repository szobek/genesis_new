<x-main-layout title="Hírek">
      <x-slot name="header">
        <x-header />
    </x-slot>
    <div class="container p-4 ">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($newsList as $news)
                <div class="">
                    <h2 class="">{!!  $news->title !!}</h2>
                    @if($news->excerpt) 
                    <p>{!! $news->excerpt !!}</p>
                    @else
                    <p class="">{!!  Str::limit($news->content, 100) !!}</p>
                    @endif
                    <a href="{{ route('pages.news.details', $news->id) }}" class="text-blue-600 hover:underline">Tovább olvasom</a>
                </div>
            @endforeach
        </div>
</x-main-layout>