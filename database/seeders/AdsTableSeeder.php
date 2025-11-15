<?php

namespace Database\Seeders;

use App\Models\Ad;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AdsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ad::truncate();
        DB::table('ads')->insert([
            [
                'title' => 'Viszonteladókat keresünk!',
                'description' => '<strong>Legyen Ön is részese a jövő építkezéseinek!</strong><p>    A Genesis Házak Kft. új viszonteladó partnereket keres, akik részt vennének innovatív megoldásaink forgalmazásában,    valamint kivitelezőket az építőelemek összeszerelésére és a szakági munkák elvégzésére. Fedezze fel az    együttműködésben rejlő lehetőségeket az alábbi tájékoztatóból, amelyet viszonteladóink számára állítottunk össze.</p><p>    Termékcsalád révén a Tetris típusú építési készlet alkalmas számos épület és építmény létesítéséhez, ami lehetővé    teszi a különböző piaci igények kiszolgálását. Törekszünk a színvonal folyamatos növelésére így a termékein    eladhatósága is fejlődik. Nyitottak vagyunk különböző kölcsönösen hasznos ötletek és innovációk kiterjesztésére a    termékcsaládra. Biztosítunk megfelelő minőségű és mennyiségű reklámanyagot. Az érdeklődés fokozása érdekében szükség    esetén díjmentesen biztosítunk kiállítási darabokat.</p><x-pdf-viewer pdfUrl="/assets/documents/arlistas_termekismerteto_14.pdf" /><x-download-pdf-button url="/assets/documents/arlistas_termekismerteto_14.pdf" />',
                'short' => '<p>    A Genesis Házak Kft. új viszonteladó partnereket keres, akik részt vennének innovatív megoldásaink forgalmazásában,    valamint kivitelezőket az építőelemek összeszerelésére és a szakági munkák elvégzésére. Fedezze fel az    együttműködésben rejlő lehetőségeket az alábbi tájékoztatóból, amelyet viszonteladóink számára állítottunk össze.</p>',                
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Kivitelezőket keresünk!',
                'description' => '<strong>Építsünk együtt – gyorsabban, egyszerűbben, hatékonyabban!</strong>
<p>
    A Genesis Házak Kft. megbízható kivitelező partnereket keres az elemek összeszerelésére, a szakági munkák
    elvégzésére, valamint együttműködő partnereket forgalmazásra. Tekintse meg rövid tájékoztatónkat, amelyet
    kivitelezőknek készítettünk – és fedezze fel, milyen lehetőségeket kínál az együttműködés!
</p>
<p>
    A termékeinket úgy fejlesztettük ki, hogy a helyszínen a lehető legkevesebb munkával lehessen kivitelezni az
    építkezést. Az összeszerelés nem igényel nagy gépeket, darukat így a helyszín adottságai kevésbé befolyásolják az
    elemek helyszínre szállítását és az építést. Az elemek méretének köszönhetően két ember könnyedén tudja mozgatni és
    a kiviteli terveknek megfelelően elhelyezni az elemeket. Az összeszereléshez szükség esetén személyes oktatást,
    illetve építésvezetőt biztosítunk. A szakszerű összeszerelésben és az elemek sértetlen felhasználásában segítséget
    nyújt a Kivitelezői Kézikönyv. Egyéb műszaki adatok és segédletek a kivitelezéshez megtalálhatóak a Gyártói
    Alkalmazástechnikában. További hasznos információkért állunk rendelkezésükre az alábbi elérhetőségeken.
</p>

<x-pdf-viewer pdfUrl="/assets/documents/tervezoi-alkalmazastechnika.pdf" />
<x-download-pdf-button url="/assets/documents/tervezoi-alkalmazastechnika.pdf" />',
                'short' => '<p>
    A Genesis Házak Kft. megbízható kivitelező partnereket keres az elemek összeszerelésére, a szakági munkák
    elvégzésére, valamint együttműködő partnereket forgalmazásra. Tekintse meg rövid tájékoztatónkat, amelyet
    kivitelezőknek készítettünk – és fedezze fel, milyen lehetőségeket kínál az együttműködés!
</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Vállalkozókat keresünk!',
                'description' => '<p>
    Legyen részese a jövő építésének!
    A Genesis Házak Kft. olyan vállalkozókat keres, akik szeretnének csatlakozni hozzánk innovatív házaink
    forgalmazásában, az elemek összeszerelésében és a szakági feladatokban. Fedezze fel részletes bemutatónkat!
</p>
<p>
    A helyszíni munkálatok a manapság épülő könnyűszerkezetes épületeknél jelentősen gyorsabbak, ezáltal egy építési
    engedélyezési folyamat időintervalluma lehet befolyásoló. Egyedülálló termékként fontosnak tartjuk a megfelelő
    kommunikációt és információ áramlását a termékcsaládról és annak felhasználhatóságáról. Termékeink az ÉMI Nonprofit
    Kft. által bevizsgált és Nemzeti Műszaki Értékelléssel (NMÉ) minősítettek. Az elemek betervezéséhez szükséges
    alapadatok a Gyártói Teljesítménynyilatkozatban megtalálhatóak. Egyéb műszaki adatok és segédletek a tervezéshez
    megtalálhatóak a Gyártói Alkalmazástechnikában.
</p>

<x-pdf-viewer pdfUrl="/assets/documents/tervezoi-alkalmazastechnika.pdf" />
<x-download-pdf-button url="/assets/documents/tervezoi-alkalmazastechnika.pdf" />
<x-pdf-viewer pdfUrl="/assets/documents/teljesitmenynyilatkozat.pdf" />
<x-download-pdf-button url="/assets/documents/teljesitmenynyilatkozat.pdf" />',
                'short' => '<p>
    Legyen részese a jövő építésének!
    A Genesis Házak Kft. olyan vállalkozókat keres, akik szeretnének csatlakozni hozzánk innovatív házaink
    forgalmazásában, az elemek összeszerelésében és a szakági feladatokban. Fedezze fel részletes bemutatónkat!
</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Építkezőket keresünk!',
                'description' => '<strong>„Az otthon az álmokból születik.”</strong>
<p>
    A Genesis Házak Kft. azon dolgozik, hogy az építkezők számára elérhetővé tegye a modern, gyorsan kivitelezhető és
    megbízható megoldásokat. Partnereket keresünk a forgalmazáshoz, valamint kivitelezőket az elemek összeszereléséhez
    és a szakági munkákhoz. Fedezze fel az alábbi ismertetőt, amelyet az építkezők számára állítottunk össze – mert a
    jövő otthona ma kezdődik.
</p>
<p>
    A tetris típusú építési készlet a legideálisabb választás a gyors, egyszerű és környezettudatos építkezéshez. Gyors
    építést tesz lehetővé az üzemi körülmények között készülő épületszerkezeti elemek, hiszen gyárunkban emelt
    szerkezetkész elemeket készítünk. Az emelt szerkezetkész magába foglalja az alap 15 centiméteres hőszigetelésen
    kívül a homlokzati oldalon 5 centiméter kiegészítő hőszigetelést és alapvakolatot is és a belső oldalon gipszkarton
    táblás felületképzést. Az elemek magassági és hosszúsági méretei megegyeznek a beépítési mérettel, azaz a fal elemek
    magassága 250 centiméter, a padló, födém hosszméretei 320 centiméter. Az összes elem szélességi méretét 80
    centiméterben korlátoztuk, ami lehetővé teszi a könnyű szállítást, rakodást, tárolást, amely összességében egyszerű
    kivitelezést eredményez. Mivel a tervezett épület jelentős része üzemben készülnek így a szakági munkálatok is
    lecsökkenek, továbbá a helyszínen minimális az építési hulladék így könnyítve az építkezéssel járó szervezést és
    tisztán tartva a építési helyszínt.
</p>

<x-pdf-viewer pdfUrl="/assets/documents/arlistas_termekismerteto_14.pdf" />
<x-download-pdf-button url="/assets/documents/arlistas_termekismerteto_14.pdf" />',
                'short' => '<p>
    A Genesis Házak Kft. azon dolgozik, hogy az építkezők számára elérhetővé tegye a modern, gyorsan kivitelezhető és
    megbízható megoldásokat. Partnereket keresünk a forgalmazáshoz, valamint kivitelezőket az elemek összeszereléséhez
    és a szakági munkákhoz. Fedezze fel az alábbi ismertetőt, amelyet az építkezők számára állítottunk össze – mert a
    jövő otthona ma kezdődik.
</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
