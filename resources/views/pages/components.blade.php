<x-main-layout title="Előre gyártott elemek">
    <x-slot name="header">
        <x-header />
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Rendelhető előre gyártott elemek</h1>
                <h5>Előre gyártott elemeink teljes körű építési megoldást jelenthetnek,
                    akár egy családi ház építéséhez is.</h5>
            </div>
            <div class="col-md-12">
                <x-pdf-viewer pdfUrl="{{ asset('assets/documents/arlistas-termekismerteto.pdf') }}" />
            </div>

            <div class="col-md-12">
                <p>
                    <a href="{{ asset('assets/documents/arlistas-termekismerteto.pdf') }}" class="btn btn-primary"
                        target="_blank">Letöltés</a>
                </p>
            </div>



        </div>
</x-main-layout>