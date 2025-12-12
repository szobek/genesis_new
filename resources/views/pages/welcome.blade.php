<x-main-layout title="Kezdőlap">
    <div class="hero mt-5 p-0">
        <img src="{{ asset('assets/images/hero.jpg') }}" alt="">
        <p>készre gyártott panelek</p>
        <h2>Az építkezés egyszerűbb, mint valaha</h2>
    </div>
    <div class="about-genesis m-5">
        <div class="row">
            <div class="col-md-6">
                <x-carousel :slides="$why_genesis" />
            </div>
            <div class="col-md-6">
                <h2>Miért pont a Genesis Házak?</h2>
                <p>Az építkezés minden problémás lépését kiküszöböljük azzal, hogy a paneleket már a telephelyen készre
                    gyártjuk.</p>
                <p>Sem speciális eszközökre, sem állványzatra, sem plusz munkaerőre nincs szükség, így elkerülhetőek a
                    magas járulékos költségek.</p>
                <a href="{{ route('pages.genesis-houses') }}" class="btn btn-light">Ismerd meg!</a>
            </div>
        </div>

    </div>
    <div class="ads-by-genesis">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Most futó hirdetéseink</h2>
            </div>
            <div class="col-12">
                <x-carousel :slides="$adsarray" autoplayInterval="2000" />
            </div>
        </div>
    </div>

    <div class="components mt-3">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Rendelhető előre gyártott elemek
                </h2>
            </div>
            <div class="col-12">
                <x-carousel :slides="$components" autoplayInterval="2000" backgroundSize="contain" />
            </div>
            <div class="col-12 mt-5 text-center mb-4">
                <a href="{{ route('pages.components') }}" class="btn btn-primary">
                    Tovább az összes rendelhető elemhez
                </a>
            </div>
        </div>
    </div>

    <div class="about-tender mb-3 p-5">
        <div class="row">
            <div class="col-md-6 ">
                <h2 class="text-center">
                    Nálunk az ajánlatkérés mindig ingyenes!
                </h2>
                <p>
                    Most van itt az idő! Kérj ingyenes ajánlatot, és mi segítünk felépíteni azt az otthont vagy
                    nyaralót, amire mindig is vágytál.
                </p>
                <p>
                    Olyan ajánlatot állítunk össze neked, ami pontosan a Te igényeidhez és elképzeléseidhez igazodik.
                </p>
                <a href="{{ route('pages.tender') }}" class="btn btn-primary">Ajánlatot kérek</a>
            </div>
            <div class="col-md-6 ">
                <img src="{{ asset('assets/images/haz1.png') }}" alt="" style="width: 100%">
            </div>
        </div>
    </div>
    <style>
        .conversation_dec ul {
            list-style-type: circle;
            padding-left: 20px;
        }

        .conversation_dec li {
            margin-bottom: 10px;
        }
        .conversation_dec a {
            text-decoration: none
        }
    </style>

    <div class="conversation_dec">
        <hr>
        <div class="row">
            <div class="col-md-4">

            </div>
            <div class="col-md-8">
                <h3>Nagy örömmel vett részt a Genesis Házak Kft. a tegnapi Juhhé! Üzleti Klub találkozón, amelyet a
                    vállalkozói közösség egyik legértékesebb kezdeményezéseként tartunk számon. A rendezvény remek
                    alkalmat adott arra, hogy bemutatkozzunk, megosszuk tapasztalatainkat és új üzleti kapcsolatokat
                    építsünk. 🤝</h3>
                <p> Cégünket három kolléga képviselte:</p>
                <ul>
                    <li>András Molnár , ügyvezető – a Tetris típusú termékcsalád megálmodója, amely több évtizedes
                        szakmai tapasztalatra épül,</li>
                    <li>Krisztina Molnár , ügyvezető asszisztens – aki bemutatta a csapatot és cégfilozófiánkat,</li>
                    <li>Dávid Kiss, műszaki felelős, mérnök – aki a gyártott elemek műszaki hátterébe adott betekintést.
                    </li>
                </ul>
                <p>
                    A találkozó központi gondolata számunkra is nagyon fontos: együttműködés, fejlődés és társadalmi
                    felelősségvállalás. Hiszünk abban, hogy közös erővel olyan innovatív és hatékony megoldásokat tudunk
                    létrehozni, amelyek megfelelnek a kor és a piac elvárásainak.
                </p>
                <p>
                    Ezúton is szeretnénk köszönetet mondani a meghívásért a szervezőknek, Judit Nutiu-nak és Bognár
                    Józsefnek – öröm volt részt venni egy ilyen jól szervezett, inspiráló eseményen! 👏
                </p>
                <p>
                    <a href="https://www.tiktok.com/@genesis_hazakkft/video/7582506715464092950" target="_blank">
                        <img width="30" src="{{ asset("assets/images/icons/tiktok_icon.png") }}" alt="tiktok icon">
                    </a>
                    <a href="https://www.facebook.com/reel/1479347113155233" target="_blank">
                        <img width="30" src="{{ asset("assets/images/icons/fb_icon.png") }}" alt="facebook icon">
                    </a>
                </p>
            </div>
        </div>
    </div>
</x-main-layout>