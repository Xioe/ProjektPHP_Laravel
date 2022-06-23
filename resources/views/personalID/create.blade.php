@extends('main') @section('content')
<div class="container">
	<div class="row">
		<form class="col-12" method="post" action="/personal/dodaj"> @csrf
			<div class="mb-3 col-2">
				<label for="exampleFormControlInput1" class="form-label">Imię i Nazwisko</label>
				<div class="d-flex">
					<input type="text" class="form-control col-2" Name="Name" placeholder="Imię">
					<input type="text" class="form-control col-2" Name="SecondName" placeholder="Drugie imię">
					<input type="text" class="form-control col-2" Name="LastName" placeholder="Nazwisko"> </div>
			</div>
			<div class="mb-3 col-6">
				<label for="exampleFormControlInput1" class="form-label">PESEL</label>
				<input type="number" min="0" class="form-control" Name="PESEL" > </div>
                @error('PESEL')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
			<div class="mb-3 col-6">
				<label for="exampleFormControlInput1" class="form-label">E-mail</label>
				<input type="email" class="form-control" Name="email"> </div>
			<div class="mb-3 col-6">
				<label for="exampleFormControlInput1" class="form-label">Numer telefonu</label>
				<input type="text" class="form-control" Name="PhoneNumber" > </div>
                @error('PhoneNumber')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
			<div class="mb-3 col-6">
				<label for="exampleFormControlInput1" class="form-label">Adres</label>
				<input type="link" class="form-control" Name="Adress"> </div>
			<div class="mb-3 col-2">
				<label for="exampleFormControlInput1" class="form-label">Kod pocztowy</label>
				<div class="d-flex">
					<input type="text" class="form-control col-2" Name="Postcode" placeholder="Kod pocztowy">

					<input type="text" class="form-control col-2" Name="City" placeholder="Miasto">
					<input type="text" class="form-control col-2" Name="Country" placeholder="Kraj">
					</div>
                @error('Postcode')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
			</div>
			<div class="col-12">
				<div class="submit-field input-field">
					<button class="btn btn-outline-success" type="submit">Dodaj <i class="material-icons right">add</i> </button>
					<a href="/passwords" class="btn btn-outline-danger">Anuluj<i class="material-icons right">cancel</i></a> </div>
			</div>
		</form>
	</div>
</div> @endsection
