@extends('main') @section('menu')
<div class="container">
	<div class="row">
		<div class="d-flex justify-content-center"> <a href="/personal/nowe" class="btn btn-outline-success mx-3">Nowy
                <i class="material-icons right">add</i>
            </a> <a href="/personal" class="btn btn-outline-info">Wszystkie
                <i class="material-icons right">list</i>
            </a> </div>
	</div>
</div> @endsection

@section('content')
<div class="container">
	<div class="row">
	@foreach($personalEvents as $personalEvents)
		<div class="col-12">
			<div class="accordion my-3">
				<div class="accordion-item">
					<h2 class="accordion-header" id="panelsStayOpen-heading{{ $personalEvents -> ID }}">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{ $personalEvents -> ID }}" aria-expanded="false" aria-controls="panelsStayOpen-collapse{{ $personalEvents -> ID }}">
                      {{ $personalEvents->Name }}&nbsp;{{ $personalEvents->SecondName }}&nbsp;{{ $personalEvents->LastName }}
                      <div class="float-right" style="float:right";>
                      </div>
                    </button>
                  </h2>
					<div id="panelsStayOpen-collapse{{ $personalEvents -> ID }}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading{{ $personalEvents -> ID }}">
						<div class="accordion-body">
							<ul class="list-group list-group-horizontal-sm">
								<li class="list-group-item col-3">
									<div class="d-flex w-100 justify-content-between">
										<h5 class="mb-1">PESEL</h5> </div>
									<p class="mb-1">{{ $personalEvents->PESEL }}</p>
								</li>
								<li class="list-group-item col-3">
									<div class="d-flex w-100 justify-content-between">
										<h5 class="mb-1">E-mail</h5> </div>
									<p class="mb-1"> {{ $personalEvents->email }} </p>
								</li>
								<li class="list-group-item col-3">
									<div class="d-flex w-100 justify-content-between">
										<h5 class="mb-1">Numer telefonu</h5> </div>
									<p class="mb-1"> {{ $personalEvents->PhoneNumber }} </p>
								</li>
								</ul>
								<ul class="list-group list-group-horizontal-sm">
								<li class="list-group-item col-3">
									<div class="d-flex w-100 justify-content-between">
										<h5 class="mb-1">Adres</h5> </div>
									<p class="mb-1"> {{ $personalEvents->Adress }} </p>
								</li>
								<li class="list-group-item col-2">
									<div class="d-flex w-100 justify-content-between">
										<h5 class="mb-1">Miasto</h5> </div>
									<p class="mb-1"> {{ $personalEvents->City }} </p>
								</li>
                                <li class="list-group-item col-2">
									<div class="d-flex w-100 justify-content-between">
										<h5 class="mb-1">Kod pocztowy</h5> </div>
									<p class="mb-1"> {{ $personalEvents->Postcode }} </p>
								</li>
                                <li class="list-group-item col-2">
									<div class="d-flex w-100 justify-content-between">
										<h5 class="mb-1">Kraj</h5> </div>
									<p class="mb-1"> {{ $personalEvents->Country }} </p>
								</li>

								<form method="post" class="btns-icons col-2"> <a href="{{ url() -> current() }}/edycja/{{ $personalEvents -> ID }}" class="btn btn-success btn-accordion mb-1">Edytuj
                                <i class="material-icons edit-ico">edit</i>
                            </a> <a href="{{ url() -> current() }}/usuwanie/{{ $personalEvents -> ID}}" class="btn btn-danger btn-accordion">Usuń
                                <i class="material-icons trash-ico">delete</i>
                            </a> </form>
							</ul>
						</div>
					</div>
				</div>
				<div class="card-action"> </div>
			</div>
		</div>
		@endforeach
		</div>
</div>
@endsection
