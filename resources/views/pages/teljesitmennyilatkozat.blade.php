<x-main-layout title="Előre gyártott elemek">
    <x-slot name="header">
        <x-header />
    </x-slot>

    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <x-pdf-viewer pdfUrl="{{ asset('assets/documents/teljesitmenynyilatkozat.pdf') }}" />
            </div>

            <div class="col-md-12">
                <x-download-pdf-button url="{{ asset('assets/documents/teljesitmenynyilatkozat.pdf') }}" />
            </div>

        </div>
</x-main-layout>