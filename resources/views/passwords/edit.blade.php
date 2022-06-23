@extends('main')

@section('content')
<div class="container">
              <div class="row">
                    <form class="col-12" method="post" action="/passwords/aktualizacja/{{ $passwordsEvents -> ID}}">
                    @csrf

                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Nazwa</label>
                            <input type="text" class="form-control" Name="Name" value="{{ $passwordsEvents -> Name}}">
                        </div>

                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Nick</label>
                            <input type="text" class="form-control" Name="Nick" value="{{ $passwordsEvents -> Nick}}">
                        </div>

                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                            <input type="email" class="form-control" Name="email" value="{{ $passwordsEvents -> email}}">
                            @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label for="exampleFormControlInput1" class="form-label">Hasło</label>
                            <input type="text" class="form-control" Name="Password" value="{{ $passwordsEvents -> Password}}">
                        </div>

                        <div class="mb-3 col-12">
                            <label for="exampleFormControlInput1" class="form-label">Link</label>
                            <input type="link" class="form-control" Name="URL" value="{{ $passwordsEvents -> URL}}">
                        </div>

                        <div class="col-12">
                            <div class="submit-field input-field">
                                <button class="btn btn-outline-success" type="submit">Edytuj
                                    <i class="material-icons right">edit</i>
                                </button>
                                <a href="/passwords" class="btn btn-outline-danger">Anuluj
                                    <i class="material-icons right">cancel</i>
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
@endsection
