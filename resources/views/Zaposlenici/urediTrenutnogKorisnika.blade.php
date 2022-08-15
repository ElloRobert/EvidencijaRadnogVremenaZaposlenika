@extends('layouts.app')

@section('css')
<link href="{{ asset('css/Poduzece/dodajPoduzece.css') }}" rel="stylesheet">
@endsection

@section('content')

<h3>Uredi podatke:  {{Auth::User()->name}}</h3>
<br>
<form method="post" action="/home/uredeniTrenutniKorisnik" class="editPocetna">
  @csrf
  <div class="container">
    <div class="row" id="id">
    <div class="col-3">
        <label for="id">Id:</label>
       <input type="text" name="id" id="id" class="form-control input" placeholder="Id" value="{{Auth::User()->id}}" readonly>
    </div>
    </div>
    <br>
    <div class="row">
    <div class="col-4">
       <label for="ime">Ime:</label><br>
       <input type="text" name="ime" id="ime" class="form-control input" placeholder="Ime" value="{{Auth::User()->ime}}">
    </div>
    <div class="col-4">
        <label for="prezime">Prezime:</label><br>
        <input type="text" name="prezime" id="prezime" class="form-control input" placeholder="Prezime" value="{{Auth::User()->prezime}}">
     </div>
     <div class="col-4">
        <label for="OIB">OIB:</label><br>
        <input type="text" name="OIB" id="OIB" class="form-control input" placeholder="OIB" value="{{Auth::User()->OIB}}">
     </div>
    </div>
    <br>
    <div class="row">
      <div class="col-4">
        <label for="spol">Spol:</label><br>
        <input type="text" name="spol" id="spol" class="form-control input" placeholder="Spol" value="{{Auth::User()->spol}}">
          </div>
      <div class="col-4">
        <label for="datumRodenja">Datum rođenja:</label><br>
        <input type="date" name="datumRodenja" id="datumRodenja" class="form-control input" placeholder="datumRodenja" value="{{Auth::User()->datumRodenja}}">
      </div>
      <div class="col-4">
        <label for="radnoMjesto">radno mjesto zapolsenika</label>
        <input type="text" name="radnoMjesto" id="radnoMjesto" class="form-control input" placeholder="Radno mjesto" value="{{Auth::User()->RadnoMjesto}}">
    </div>
    </div>
    <br>
    <div class="row">
      <div class="col-6">
        <label for="kontakt">Kontakt:</label><br>
        <input type="text" name="kontakt" id="kontakt" class="form-control input" placeholder="Kontakt" value="{{Auth::User()->kontakt}}">
      </div>
      <div class="col-6">
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" class="form-control input" placeholder="Email" value="{{Auth::User()->email}}" readonly>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-4">
  <label for="ulica">Ulica:</label><br>
  <input type="text" name="ulica" id="ulica" class="form-control input" placeholder="Ulica" value="{{Auth::User()->ulica}}">
      </div>
      <div class="col-4">
  <label for="kucniBroj">Kućni broj:</label><br>
  <input type="number" name="kucniBroj" id="kucniBroj" class="form-control input" placeholder="Kućni broj" value="{{Auth::User()->kucniBroj}}">
      </div>
      <div class="col-4">
  <label for="mjestoStanovanja">Mjesto:</label><br>
  <input type="text" name="mjestoStanovanja" id="mjestoStanovanja" class="form-control input" placeholder="Mjesto" value="{{Auth::User()->mjesto}}">
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col">
        <label for="password" >{{ __('Lozinka:') }}</label>
        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
        </div>
        <div class="col">
            <label for="password-confirm">{{ __('Potvrdi lozinku:') }}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>
    <br>
   <input type="submit" name="potvrdi" value="Spremi promjene" class="btn btn-success float-right">
</form>
</div>
@endsection