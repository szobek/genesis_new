<x-main-layout title="Árlistás termékismertető">
    <x-slot name="header">
        <x-header />
    </x-slot>

    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <x-pdf-viewer pdfUrl="{{ asset('assets/documents/arlistas-termekismerteto.pdf') }}" />
            </div>

            <div class="col-md-12">
                <x-download-pdf-button url="{{ asset('assets/documents/arlistas-termekismerteto.pdf') }}" />
            </div>

        </div>
</x-main-layout>