<x-main-layout title="Genesis házak">
    <x-slot name="header">
        <x-header />
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Genesis Házak – több mint építkezés</h1>
                <p>
                    Molnár András – a Genesis Házak Kft. megálmodója – mindig a fejlődés és a környezettudatosság
                    mellett kötelezte el magát. Gazsó János támogatásával és hosszú építőipari tapasztalataira építve
                    hozta létre a Tetris termékcsaládot, amely forradalmasítja a könnyűszerkezetes építkezést
                    Magyarországon. Csapatával együtt azon dolgozik, hogy a Genesis Házak Kft. értéket teremtsen és a
                    jövő építőiparának meghatározó szereplőjévé váljon.
                </p>
                <p>
                    Mit biztosítunk Önnek: <br>
                    Előregyártott elemeinkből olyan épületek készülhetnek, amelyek teljes mértékben alkalmasak állandó
                    lakhatásra. Természetes anyagok felhasználásával és 15 cm kőzetgyapot hőszigeteléssel biztosítjuk az
                    energiahatékonyságot, amit a homlokzaton további 5 cm szigetelés is fokozhat.

                    Termékeink különlegessége, hogy minden szerkezeti elemet – padlót, falat, födémet és tetőt –
                    teljesen készre gyártunk üzemi körülmények között. Az elemek szélessége 80 cm, így könnyen
                    szállíthatók, míg a hosszúság és magasság már az épület végleges méreteit adja. A panelek
                    összekapcsolásával az építkezés heteket vagy hónapokat helyett csak napokat, sőt akár órákat vesz
                    igénybe. Mivel a gyártás szigorú ellenőrzés mellett történik, minden elem garantált minőségű. Az
                    összeszerelés egyszerű: a panelek csavarokkal illeszkednek, és mindössze egy csavarbehajtóra van
                    szükség.
                </p>
                <x-pdf-viewer pdfUrl="{{ asset('assets/documents/TERMEKISMERTETO-1.pdf') }}" :title="'Genesis házak'" />
                <x-download-pdf-button url="{{ asset('assets/documents/TERMEKISMERTETO-1.pdf') }}" />


            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-6">
                <video src="{{ asset('assets/videos/genesis_video.mp4') }}" autoplay muted width="100%" controls></video>
            </div>
            <div class="col-md-6">
                <x-carousel :slides="$why_genesis" />
            </div>
        </div>
    </div>
</x-main-layout>