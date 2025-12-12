<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::create([
            'title' => 'Üzleti találkozó',
            'video' => 'assets/videos/uzleti_talalkozo.mp4',
            'excerpt' => 'Nagy örömmel vett részt a Genesis Házak Kft. a tegnapi Juhhé! Üzleti Klub találkozón, amelyet a
                    vállalkozói közösség egyik legértékesebb kezdeményezéseként tartunk számon. A rendezvény remek
                    alkalmat adott arra, hogy bemutatkozzunk...',
            'content' => <<<HTML
                <h3>Nagy örömmel vett részt a Genesis Házak Kft. a tegnapi Juhhé! Üzleti Klub találkozón, amelyet a
                    vállalkozói közösség egyik legértékesebb kezdeményezéseként tartunk számon. A rendezvény remek
                    alkalmat adott arra, hogy bemutatkozzunk, megosszuk tapasztalatainkat és új üzleti kapcsolatokat
                    építsünk. 🤝
                </h3>
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
                HTML,
            'ogtitle' => '',
            'ogdescription' => '',
            'tiktok_link' => 'https://www.tiktok.com/@genesis_hazakkft/video/7582506715464092950',
            'facebook_link' => 'https://www.facebook.com/reel/1479347113155233',
        ]);

        News::create([
            'title' => 'Lorem ipsum dolor sit amet',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'content' => <<<HTML
                <p> Lorem ipsum dolor sit amet</p>
                HTML,
            'ogtitle' => '',
            'ogdescription' => '',
        ]);
        News::create([
            'title' => 'Lorem ipsum dolor sit amet',
            'excerpt' => 'Lorem ipsum dolor sit amet',
            'content' => <<<HTML
                <p> Lorem ipsum dolor sit amet</p>
                HTML,
            'tiktok_link' => 'https://www.tiktok.com/@genesis_hazakkft/video/7582506715464092950',
        ]);
    }
}
