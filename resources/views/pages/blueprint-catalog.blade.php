<x-main-layout title="Vázlatterv katalógus">
    <x-slot name="header">
        <x-header />
    </x-slot>
    <div class="container">

        <div class="row">
            <div class="col-12">
                <h2>
                    Lapozza végig katalógusunkat, és fedezze fel a Genesis Házak Kft. könnyűszerkezetes épületelemeiből
                    készült vázlatterveket.
                </h2>
                <div>

                    <x-pdf-viewer pdfUrl="{{ asset('assets/documents/vazlatterv-katalogus.pdf') }}" :title="'Vázlatterv katalógus'" />
                    <p>
                        <a href="{{ asset('assets/documents/vazlatterv-katalogus.pdf') }}" class="btn btn-primary"
                            target="_blank">Letöltés</a>
                    </p>
                </div>
                
                <div>

                    <x-pdf-viewer pdfUrl="{{ asset('assets/documents/alkalmazastechnika.pdf') }}" :title="'Vázlatterv katalógus'" />
                    <p>
                        <a href="{{ asset('assets/documents/alkalmazastechnika.pdf') }}" class="btn btn-primary"
                            target="_blank">Letöltés</a>
                    </p>
                </div>
                
                <div>

                    <x-pdf-viewer pdfUrl="{{ asset('assets/documents/teljesitmenynyilatkozat.pdf') }}" :title="'Vázlatterv katalógus'" />
                    <p>
                        <a href="{{ asset('assets/documents/teljesitmenynyilatkozat.pdf') }}" class="btn btn-primary"
                            target="_blank">Letöltés</a>
                    </p>
                </div>
                
            </div>
        </div>
    </div>


</x-main-layout>