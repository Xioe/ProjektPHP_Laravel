@extends('main')

@section('content')
<div class="container">
    <div class="row">
                    <form class="col-12" method="post" action="/cards/dodaj">
                    @csrf

                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Właściciel karty</label>
                            <input type="text" class="form-control" Name="OwnerName">
                        </div>

                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Numer</label>
                            <input type="text" class="form-control" Name="Number">
                            @error('Number')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Wydawca karty</label>
                            <input type="text" class="form-control" Name="PaymentCardIssuer">
                        </div>
                        <div class="mb-3 col-3">
                            <label for="exampleFormControlInput1" class="form-label">Data Wygaśnięcia</label>
                            <div class="d-flex">
                                <input type="text" class="form-control col-2" Name="Month" placeholder="Miesiąc">
                                @error('Month')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                <input type="text" class="form-control col-2" Name="Year" placeholder="Rok">
                                @error('Year')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">CVV/CVC</label>
                            <input type="text" class="form-control" Name="CVV_CVC">
                        </div>

                        <div class="col-12">
                            <div class="submit-field input-field">
                                <button class="btn btn-outline-success" type="submit">Dodaj
                                    <i class="material-icons right">add</i>
                                </button>
                                <a href="/cards" class="btn btn-outline-danger">Anuluj
                                    <i class="material-icons right">cancel</i>
                                </a>
                            </div>
                        </div>
                    </form>
    </div>
</div>
@endsection
