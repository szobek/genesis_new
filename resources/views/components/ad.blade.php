@props([
    'title', 
    'shortDescription'=>'', 
    'description' => '', 
    'button' => true,
    'padding'=>false,
    'id',
    'short'=>false

    ])

<div class="@if($padding) p-5 @endif">

    <h3 class="@if($padding) text-center @endif">{{ $title }}</h3>
    @if($short)
    {!! $shortDescription !!}
    @else
    {!! $description  !!}
    @endif
    <br>
    @if($button)
    <a href="{{ route('pages.simple-ad',[$id]) }}" class="btn btn-light">Tovább</a>
    @endif
</div>

