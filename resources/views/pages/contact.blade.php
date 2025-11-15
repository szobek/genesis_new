<x-main-layout title="Kapcsolat">
    <x-slot name="header">
        <x-header />


    </x-slot>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <h1>Kapcsolat</h1>
                <div id="map"></div>
                @vite(['resources/js/map.js'])
                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIHF0I2LGJSKE13s7pI00Xwip9tENmk9c&loading=async&callback=initMap"></script>
                <script>
                    window.addEventListener('load', () => {
                        if (window.google && window.initMap) {
                            window.initMap();
                        }
                    });
                </script>

            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-6">
                <div class="d-flex flex-column text-center contact-with-icons">
                    <h3 class="title">Elérhetőségeink</h3>
                    <div>
                        <img src="{{ asset('assets/images/contact/phone_icon.png') }}" alt="">
                        <p class="title">Telefonszám</p>
                        <p><a class="link" href="tel:+36204616813">+36 20 461 6813</a></p>
                    </div>
                    <div>

                    </div>
                    <img src="{{ asset('assets/images/contact/email_icon.png') }}" alt="">
                    <p class="title">E-mail cím</p>
                    <p><a class="link" href="mailto:genesishaz1@gmail.com">genesishaz1@gmail.com</a></p>
                </div>
            </div>
            <div class="col-md-6">
                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif
                @if(session('sended'))
                    <div class="alert alert-success" role="alert">
                      Üzenet elküldve
                    </div>
                @endif
                <form action="{{ route('create.contact') }}" method="post">

                    <div class="mb-3">
                        <label for="contact_name">Név</label>
                        <input name="name" id="contact_name" type="text"
                            class="form-control  @error('name') is-invalid @enderror" value="{{ old('name') }}"
                            required>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="contact_mail">Email</label>
                        <input name="email" id="contact_mail" type="email"
                            class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}"
                            required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="contact_phone">Telefonszám</label>
                        <input name="phone" id="contact_phone" type="text"
                            class="form-control  @error('phone') is-invalid @enderror" value="{{ old('phone') }}"
                            required>
                        @error('phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="contact_name">Üzenet</label>
                        <textarea name="msg" id="contact_msg" class="form-control  @error('msg') is-invalid @enderror"
                            value="{{ old('msg') }}" required></textarea>
                        @error('msg')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary">Küldés</button>
                </form>
            </div>
        </div>
    </div>
</x-main-layout>