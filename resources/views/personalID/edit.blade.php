@extends('main')

@section('content')
<div class="container">
              <div class="row">
                    <form class="col-12" method="post" action="/personal/aktualizacja/{{ $personalEvents -> ID}}">
                    @csrf

                        <div class="mb-3 col-2">
                            <label for="exampleFormControlInput1" class="form-label">Imię i Nazwisko</label>
                            <div class="d-flex">
                                <input type="text" class="form-control col-2" Name="Name" placeholder="Imię" value="{{ $personalEvents -> Name}}">
                                <input type="text" class="form-control col-2" Name="SecondName" placeholder="Drugie imię" value="{{ $personalEvents -> SecondName}}">
                                <input type="text" class="form-control col-2" Name="LastName" placeholder="Nazwisko" value="{{ $personalEvents -> LastName}}">
                            </div>
                        </div>

                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">PESEL</label>
                            <input type="number" min="0" class="form-control" Name="PESEL" value="{{ $personalEvents -> PESEL}}">
                            @error('PESEL')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                            <input type="email" class="form-control" Name="email" value="{{ $personalEvents -> email}}">
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Numer telefonu</label>
                            <input type="text" class="form-control" Name="PhoneNumber" value="{{ $personalEvents -> PhoneNumber}}">
                            @error('PhoneNumber')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Adres</label>
                            <input type="link" class="form-control" Name="Adress" value="{{ $personalEvents -> Adress}}">
                        </div>

                        <div class="mb-3 col-2">
                            <label for="exampleFormControlInput1" class="form-label">Kod pocztowy</label>
                            <div class="d-flex">
                                <input type="text" class="form-control col-2" Name="Postcode" value="{{ $personalEvents -> Postcode}}">
                                <input type="text" class="form-control col-2" Name="City" value="{{ $personalEvents -> City}}">
                                <input type="text" class="form-control col-2" Name="Country" value="{{ $personalEvents -> Country}}">
                            </div>
                            @error('Postcode')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <div class="submit-field input-field">
                                <button class="btn btn-outline-success" type="submit">Edytuj
                                    <i class="material-icons right">edit</i>
                                </button>
                                <a href="/personal" class="btn btn-outline-danger">Anuluj
                                    <i class="material-icons right">cancel</i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
