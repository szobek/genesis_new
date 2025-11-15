<x-main-layout title="{{ strip_tags($ad->title) }}">
    <x-slot name="header">
        <x-header />
    </x-slot>
    <x-ad id="{{ $ad->id }}" title="{{ strip_tags($ad->title) }}" description="{!!  $compiled !!}" :button="false" :short="false" :padding="true" />
</x-main-layout>