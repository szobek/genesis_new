<x-main-layout title="Hirdetések">
    <x-slot name="header">
        <x-header />
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12 p-4">
                @foreach ($ads as $ad)
                    <x-ad
                    id="{{ $ad->id }}" 
                    title="{{ strip_tags($ad->title) }}" 
                    shortDescription="{{ strip_tags($ad->short) }}" 
                    :button="true" :short="true"
                    />
                    @if(!$loop->last)
                        <hr>
                    @endif
                @endforeach

            </div>
        </div>
</x-main-layout>