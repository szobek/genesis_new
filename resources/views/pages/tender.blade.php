<x-main-layout title="Árajánlat">
    <x-slot name="header">
        <x-header />
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-12 p-4">
                @if(session('sended'))
                    <div class="alert alert-success" role="alert">
                        árajánlat kérés elküldve
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                <h2 class="text-center">Árajánlat</h2>
            </div>
            <div class="col-md-6">
                <form method="post" action="{{ route('tender.create') }}" class="m-4 p-2">
                    @csrf
                    <h3>Az árajánlat kérő adatai</h3>
                    <div class="mb-3">
                        <label for="tender_name">Név</label>
                        <input type="text" class="form-control @error('tender.name') is-invalid @enderror"
                            id="tender_name" name="tender[name]" value="{{ old('tender.name') }}" required>

                        @error('tender.name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tender_email">E-mail cím</label>
                        <input type="email" class="form-control @error('tender.email') is-invalid @enderror"
                            id="tender_email" name="tender[email]" value="{{ old('tender.email') }}" required>

                        @error('tender.email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tender_phone">Telefonszám</label>
                        <input type="text" class="form-control @error('tender.phone') is-invalid @enderror"
                            name="tender[phone]" id="tender_phone" value="{{ old('tender.phone') }}" required>

                        @error('tender.phone')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <h3>Ajánlatkérés részletei</h3>

                    <div class="mb-3">
                        <label for="tender_address">Hol található a kivitelezés helyszíne?</label>
                        <input type="text" class="form-control @error('tender.address') is-invalid @enderror"
                            name="tender[address]" id="tender_address" value="{{ old('tender.address') }}" required>

                        @error('tender.address')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tender_hasGround">Van már építési telek?</label>
                        <select name="tender[hasGround]" id="tender_hasGround"
                            class="form-control  @error('tender.hasGround') is-invalid @enderror">
                            <option value="yes" {{ old('tender.hasGround') == 'yes' ? 'selected' : '' }}>Igen</option>
                            <option value="no" {{ old('tender.hasGround') == 'no' ? 'selected' : '' }}>Nem</option>
                        </select>
                        @error('tender.hasGround')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tender_ideaType">Mi az elképzelt épület jellege?</label>
                        <select name="tender[ideaType]" id="tender_ideaType"
                            class="form-control  @error('tender.ideaType') is-invalid @enderror">
                            <option value="house" {{ old('tender.ideaType') == 'house' ? 'selected' : '' }}>Lakóház
                            </option>
                            <option value="office" {{ old('tender.ideaType') == 'office' ? 'selected' : '' }}>Iroda
                            </option>
                            <option value="weekendHouse" {{ old('tender.ideaType') == 'weekendHouse' ? 'selected' : '' }}>
                                Nyaraló</option>
                            <option value="economicBuilding" {{ old('tender.ideaType') == 'economicBuilding' ? 'selected' : '' }}>Gazdasági épület</option>
                            <option value="garage" {{ old('tender.ideaType') == 'garage' ? 'selected' : '' }}>Garázs
                            </option>
                            <option value="other" {{ old('tender.ideaType') == 'other' ? 'selected' : '' }}>Egyéb
                            </option>
                        </select>

                        @error('tender.ideaType')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tender_area">Hozzávetőlegesen hány nm2-es ingatlant szeretne?</label>
                        <input type="text" class="form-control  @error('tender.area') is-invalid @enderror"
                            name="tender[area]" id="tender_area" value="{{ old('tender.area') }}" required>

                        @error('tender.area')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tender_hasBlueprint">Készült már tervrajz az épületről?</label>
                        <select name="tender[hasBlueprint]" id="tender_hasBlueprint"
                            class="form-control  @error('tender.hasBlueprint') is-invalid @enderror">
                            <option value="yes" {{ old('tender.hasBlueprint') == 'yes' ? 'selected' : '' }}>Igen</option>
                            <option value="no" {{ old('tender.hasBlueprint') == 'no' ? 'selected' : '' }}>Nem</option>
                        </select>

                        @error('tender.hasBlueprint')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tender_hasFoundation">Az építkezéshez van már alap?</label>
                        <select name="tender[hasFoundation]" id="tender_hasFoundation"
                            class="form-control  @error('tender.hasFoundation') is-invalid @enderror">
                            <option value="yes" {{ old('tender.hasFoundation') == 'yes' ? 'selected' : '' }}>Igen
                            </option>
                            <option value="no" {{ old('tender.hasFoundation') == 'no' ? 'selected' : '' }}>Nem</option>
                        </select>

                        @error('tender.hasFoundation')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-primary">Küdés</button>
                </form>
            </div>
            <div class="col-md-6">
                <div class="d-flex flex-column text-center tender-contact">
                    <div>
                        <img src="{{ asset('assets/images/contact/phone_icon.png') }}" alt="">
                        <p class="subtitle">Telefonszám</p>
                        <p>+36 20 461 6813</p>
                    </div>
                    <div>
                        
                    </div>
                    <img src="{{ asset('assets/images/contact/email_icon.png') }}" alt="">
                    <p class="subtitle">E-mail cím</p>
                    <p>genesishaz1@gmail.com</p>
                </div>
            </div>
        </div>

    </div>
</x-main-layout>