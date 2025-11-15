<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ad;

class WelcomeController extends Controller
{
    public function home_view()
    {
        $ads = Ad::select("title", "short")->get()->toArray();
        foreach ($ads as $index => $ad) {
            $adsarray[$index] = ["title" => $ad["title"], "description" => strip_tags($ad["short"])];
        }

        $component_images = [
            ["path"=>asset('assets/images/components/ablak-247x278.jpg'), "title"=>"Beépített ablakos falszerkezet"],
            ["path"=>asset('assets/images/components/Kep28-247x296.png'), "title"=>"Beépített ajtós falszerkezet"],
            ["path"=>asset('assets/images/components/sarok2-1-247x296.png'), "title"=>"Sarokszerkezet + kiegészítő hőszigetelés"],
            ["path"=>asset('assets/images/components/ft2-247x296.png'), "title"=>"Nem beépített ferdetető szerkezet"],
            ["path"=>asset('assets/images/components/nbf2-247x296.png'), "title"=>"Nem beépített ferdetető szerkezet + kiegészítő hőszigetelés"],
            ["path"=>asset('assets/images/components/fp1-247x296.png'), "title"=>"Földszinti padlószerkezet"],
            ["path"=>asset('assets/images/components/nbt2-247x296.png'), "title"=>"Nem beépített tetőtér alatti zárófödém szerkezet"],
            ["path"=>asset('assets/images/components/bnt1-247x296.png'), "title"=>"Belső nem teherhordó válaszfal"],
        ];


        $components = [];
        foreach ($component_images as $index => $image) {
            $components[$index] = ["image" => $image['path'],"title"=>$image['title']];
        }

        $why_genesis = [];
        $images_for_why = [
            asset('assets/images/why-genesis/1756528022750.jpg'),
            asset('assets/images/why-genesis/1756528022772.jpg'),
            asset('assets/images/why-genesis/1756528022793.jpg'),
            asset('assets/images/why-genesis/1756528022837.jpg'),
            asset('assets/images/why-genesis/1756528022879.jpg'),
            asset('assets/images/why-genesis/1756528022898.jpg'),
            asset('assets/images/why-genesis/1756528022916.jpg'),
            asset('assets/images/why-genesis/1756528022956.jpg'),
            asset('assets/images/why-genesis/1756528022973.jpg'),
            asset('assets/images/why-genesis/1756528022990.jpg'),
            asset('assets/images/why-genesis/1756528023008.jpg'),
            asset('assets/images/why-genesis/1756528023025.jpg'),
            asset('assets/images/why-genesis/IMG_20250513_171941.jpg'),
            asset('assets/images/why-genesis/IMG_20250513_181441.jpg'),
            asset('assets/images/why-genesis/IMG_20250514_171435.jpg'),
            asset('assets/images/why-genesis/IMG_20250516_173747.jpg'),
            asset('assets/images/why-genesis/IMG_20250520_140226.jpg'),
            asset('assets/images/why-genesis/IMG_20250520_143509.jpg'),
            asset('assets/images/why-genesis/IMG_20250520_154609.jpg'),
            asset('assets/images/why-genesis/IMG_20250520_154642.jpg'),
            asset('assets/images/why-genesis/IMG_20250521_081229.jpg'),
            asset('assets/images/why-genesis/IMG_20250521_081249.jpg'),
            asset('assets/images/why-genesis/IMG_20250525_072435.jpg'),
            asset('assets/images/why-genesis/IMG_20250525_072724.jpg'),
            asset('assets/images/why-genesis/IMG_20250606_115025.jpg'),
            asset('assets/images/why-genesis/IMG_20250606_115138.jpg'),
            asset('assets/images/why-genesis/IMG_20250703_134210.jpg'),
            asset('assets/images/why-genesis/IMG_20250703_134344.jpg'),
            asset('assets/images/why-genesis/IMG_20250722_120213.jpg'),
            asset('assets/images/why-genesis/IMG_20250722_120356.jpg'),
            asset('assets/images/why-genesis/IMG_20250819_071514.jpg'),
            asset('assets/images/why-genesis/Polish_20250823_063638590.jpg'),
            asset('assets/images/why-genesis/Polish_20250823_064917439.jpg'),
        ];
        foreach ($images_for_why as $index => $val) {
            $why_genesis[$index] = ["image" => $val];
        }

        return view('pages/welcome', compact('adsarray', 'components', 'why_genesis'));
    }
}
