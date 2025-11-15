<div class="container-fluid">
    <div class="row">
        <div class="col-12">

            <div class="container">
                
                <div class="row footer-ad p-3">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-3 col-sm-2">
                                <img src="{{ asset('assets/images/footer/ajanlat-100x100.png') }}" alt="">
                            </div>
                            <div class="col-md-9 col-sm-10">
                                <h6>Kérd ingyenes ajánlatunkat még ma!</h6>
                                <p>Ne várj tovább, vedd fel velünk a kapcsolatot most, és kérd ingyenes ajánlatunkat!</p>
                                <a href="{{ route('pages.tender') }}" class="btn btn-sm btn-light">Árajánlat kérés</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            
                            <div class="col-md-3 col-sm-2">
                                <img src="{{ asset('assets/images/footer/map-100x100.png') }}" alt="">
                            </div>
                            <div class="col-md-9 col-sm-10">
                                <h6>Látogass el hozzánk személyesen!</h6>
                                <p>Látogass el telephelyünkre, és nézd meg személyesen is a Genesis házak lenyűgöző termékeit!</p>
                                <a href="{{ route('pages.contact') }}" class="btn btn-sm btn-light">Kapcsolat</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 inc">
                        <p>genesishazakkft.hu © {{ date('Y') }}</p>
                    </div>
                    <div class="col-md-6 footer-nav">
                        <nav>
                            <ul>
                                <li>
                                    <a href="{{ route('pages.welcome') }}">Kezdőlap</a>
                                </li>
                                <li>
                                    <a href="{{ route('pages.adatvedelem') }}">Adatvédelmi irányelvek</a>
                                </li>
                                <li><a href="{{ route('pages.contact') }}">Kapcsolat</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-3">
                        <ul class="social-icon-list">
                            <li>
                                <a href="">
                                    <img src="{{ asset('assets/images/icons/fb_icon.png') }}" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    <img src="{{ asset('assets/images/icons/insta_icon.png') }}" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 footer-logo-container">
                        <img src="{{ asset('assets/images/genesis-w-970x1024.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-12">
            <p class="text-center me mt-5">
                Powered by <a href="">szobek</a>
            </p>
        </div>
    </div>


</div>