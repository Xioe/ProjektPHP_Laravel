@extends('main')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
       <div class="card" style="width: 18rem;">
         <img src="/img/passwords.png" class="card-img-top" style="width:50%; margin-left: 25%;">
         <div class="card-body">
           <h5 class="card-title">Hasła</h5>
           <p class="card-text">Miejsce gdzie znajdują się wszystkie Twoje dane dostępowe</p>
           <a href="/passwords" class="btn btn-primary">Sprawdź</a>
         </div>
       </div>

       <div class="card" style="width: 18rem; margin-left:25px;">
            <img src="/img/credit-card.png" class="card-img-top" style="width:50%; margin-left: 25%;">
            <div class="card-body">
                <h5 class="card-title">Karty</h5>
                <p class="card-text">Twoje karty kredytowe</p>
                <a href="/cards" class="btn btn-primary">Sprawdź</a>
            </div>
       </div>

       <div class="card" style="width: 18rem; margin-left:25px;">
            <img src="/img/ID-card.png" class="card-img-top" style="width:50%; margin-left: 25%;">
            <div class="card-body">
                 <h5 class="card-title">Dane osobowe</h5>
                 <p class="card-text">Informacje o Tobie</p>
                 <a href="/personal" class="btn btn-primary">Sprawdź</a>
            </div>
       </div>
    </div>
</div>
@endsection
