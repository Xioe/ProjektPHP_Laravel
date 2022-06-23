@extends('main')

@section('menu')

<div class="container">
    <div class="row">
        <div class="d-flex justify-content-center">
            <a href="/cards/nowe" class="btn btn-outline-success mx-3">Nowy
                <i class="material-icons right">add</i>
            </a>

            <a href="/cards" class="btn btn-outline-info">Wszystkie
                <i class="material-icons right">list</i>
            </a>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class="container">
    <div class="row">

    @foreach($cardsEvents as $cardsEvents)
        <div class="col-12">
            <div class="accordion my-3" >
                 <div class="accordion-item">
                   <h2 class="accordion-header" id="panelsStayOpen-heading{{ $cardsEvents -> ID }}">
                   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapse{{ $cardsEvents -> ID }}" aria-expanded="false" aria-controls="panelsStayOpen-collapse{{ $cardsEvents -> ID }}">
                      {{ $cardsEvents->OwnerName }} / {{ $cardsEvents->PaymentCardIssuer }}
                      <div class="float-right" style="float:right";>
                      </div>
                    </button>
                  </h2>
                 <div id="panelsStayOpen-collapse{{ $cardsEvents -> ID }}" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-heading{{ $cardsEvents -> ID }}">
                    <div class="accordion-body">


                      <ul class="list-group list-group-horizontal-sm">
                          <li class="list-group-item col-3">
                              <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">Numer</h5>
                              </div>
                              <p class="mb-1">{{ $cardsEvents->Number }}</p>
                          </li>
                          <li class="list-group-item col-2">
                              <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">Wydawca</h5>
                              </div>
                              <p class="mb-1" > {{ $cardsEvents->PaymentCardIssuer }}  </p>
                          </li>
                          <li class="list-group-item col-3">
                              <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">Data Wygaśnięcia</h5>
                              </div>
                              <p class="mb-1" > {{ $cardsEvents->Month }} / {{ $cardsEvents->Year }}  </p>
                          </li>

                          <li class="list-group-item col-2">
                              <div class="d-flex w-100 justify-content-between">
                                  <h5 class="mb-1">CVV/CVC</h5>
                              </div>
                              <p class="mb-1" > {{ $cardsEvents->CVV_CVC }} </p>
                          </li>

                          <form method="post" class="btns-icons col-2">
                            <a href="{{ url() -> current() }}/edycja/{{ $cardsEvents -> ID }}" class="btn btn-success btn-accordion mb-1">Edytuj
                                <i class="material-icons edit-ico">edit</i>
                            </a>
                            <a href="{{ url() -> current() }}/usuwanie/{{ $cardsEvents -> ID}}" class="btn btn-danger btn-accordion">Usuń
                                <i class="material-icons trash-ico">delete</i>
                            </a>
                          </form>
                      </ul>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    @endforeach

    </div>
</div>
@endsection

