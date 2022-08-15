@extends('layouts.app')

@section('css')
<link href="{{ asset('css/Poduzece/dodajPoduzece.css') }}" rel="stylesheet">
@endsection

@section('content')

<h3>Uredi zaposlenika:  {{$zaposlenik->ime}} {{$zaposlenik->prezime}}</h3>
<br>
<form method="post" action="/home/uredeniZaposlenik" class="editPocetna">
  @csrf
  <div class="container">
    <div class="row">
    <div class="col-3" id="id">
        <label for="id">Id:</label>
       <input type="text" name="id" id="id" class="form-control input" placeholder="Id" value="{{$zaposlenik->id}} " readonly>
    </div>
    </div>
    <div class="row">
      <div class="col">
        <label for="name">{{ __('Korisničko ime:') }}</label>
        <input id="name" type="text" class="form-control" name="name"  autocomplete="Korisničko ime" value ="{{$zaposlenik->name}}" readonly >
        </div>
  </div>
   
    <br>
    <div class="row">
    <div class="col-4">
       <label for="ime">Ime:</label><br>
       <input type="text" name="ime" id="ime" class="form-control input" placeholder="Ime" value="{{$zaposlenik->ime}}">
    </div>
    <div class="col-4">
        <label for="prezime">Prezime:</label><br>
        <input type="text" name="prezime" id="prezime" class="form-control input" placeholder="Prezime" value="{{$zaposlenik->prezime}}">
     </div>
     <div class="col-4">
        <label for="OIB">OIB:</label><br>
        <input type="text" name="OIB" id="OIB" class="form-control input" placeholder="OIB" value="{{$zaposlenik->OIB}}">
     </div>
    </div>
    <br>
    <div class="row">
      <div class="col-4">
        <label for="spol">Spol:</label><br>
        <input type="text" name="spol" id="spol" class="form-control input" placeholder="Spol" value="{{$zaposlenik->spol}}">
          </div>
      <div class="col-4">
        <label for="datumRodenja">Datum rođenja:</label><br>
        <input type="date" name="datumRodenja" id="datumRodenja" class="form-control input" placeholder="datumRodenja" value="{{$zaposlenik->datumRodenja}}">
      </div>
      <div class="col-4">
        <label for="radnoMjesto">radno mjesto zapolsenika</label>
        <input type="text" name="radnoMjesto" id="radnoMjesto" class="form-control input" placeholder="Radno mjesto" value="{{$zaposlenik->radnoMjesto}}">
    </div>
    </div>
    <br>
    <div class="row">
      <div class="col-6">
        <label for="kontakt">Kontakt:</label><br>
        <input type="text" name="kontakt" id="kontakt" class="form-control input" placeholder="Kontakt" value="{{$zaposlenik->kontakt}}">
      </div>
      <div class="col-6">
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" class="form-control input" placeholder="Email" value="{{$zaposlenik->email}}">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-4">
  <label for="ulica">Ulica:</label><br>
  <input type="text" name="ulica" id="ulica" class="form-control input" placeholder="Ulica" value="{{$zaposlenik->ulica}}">
      </div>
      <div class="col-4">
  <label for="kucniBroj">Kućni broj:</label><br>
  <input type="number" name="kucniBroj" id="kucniBroj" class="form-control input" placeholder="Kućni broj" value="{{$zaposlenik->kucniBroj}}">
      </div>
      <div class="col-4">
  <label for="mjestoStanovanja">Mjesto:</label><br>
  <input type="text" name="mjestoStanovanja" id="mjestoStanovanja" class="form-control input" placeholder="Mjesto" value="{{$zaposlenik->mjestoStanovanja}}">
      </div>
    </div>
    <div class="row">
      <div class="col">
      <label for="password" >{{ __('Lozinka:') }}</label>
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password">
      </div>
      <div class="col">
          <label for="password-confirm">{{ __('Potvrdi lozinku:') }}</label>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
          </div>
      </div>
    <br>
    <br>
   <input type="submit" name="potvrdi" value="Spremi promjene" class="btn btn-success float-right">
</form>
</div>
@endsection