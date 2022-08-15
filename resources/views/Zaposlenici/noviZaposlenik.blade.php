@extends('layouts.app')

@section('css')
<link href="{{ asset('css/Poduzece/dodajPoduzece.css') }}" rel="stylesheet">
@endsection

@section('content')

<h3>Novi zaposlenik</h3>
<br>
<form method="post" action="/home/noviZaposlenik" class="editPocetna">
  @csrf
  <div class="container">
    <div class="row">

    <div class="col-4">
       <label for="ime">Ime:</label><br>
       <input type="text" name="ime" id="ime" class="form-control input" placeholder="Ime">
    </div>
    <div class="col-4">
        <label for="prezime">Prezime:</label><br>
        <input type="text" name="prezime" id="prezime" class="form-control input" placeholder="Prezime">
     </div>
     <div class="col-4">
        <label for="OIB">OIB:</label><br>
        <input type="text" name="OIB" id="OIB" class="form-control input" placeholder="OIB">
     </div>
    </div>
    <br>
    <div class="row">
      <div class="col-4">
        <label for="spol">Spol:</label><br>
        <input type="text" name="spol" id="spol" class="form-control input" placeholder="Spol">
          </div>
      <div class="col-4">
        <label for="datumRodenja">Datum rođenja:</label><br>
        <input type="date" name="datumRodenja" id="datumRodenja" class="form-control input" placeholder="datumRodenja">
      </div>
      <div class="col-4">
        <label for="radnoMjesto">radno mjesto zapolsenika</label>
        <input type="text" name="radnoMjesto" id="radnoMjesto" class="form-control input" placeholder="Radno mjesto">
    </div>
    </div>
    <br>
    <div class="row">
      <div class="col-6">
        <label for="kontakt">Kontakt:</label><br>
        <input type="text" name="kontakt" id="kontakt" class="form-control input" placeholder="Kontakt">
      </div>
      <div class="col-6">
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" class="form-control input" placeholder="Email">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-4">
  <label for="ulica">Ulica:</label><br>
  <input type="text" name="ulica" id="ulica" class="form-control input" placeholder="Ulica">
      </div>
      <div class="col-4">
  <label for="kucniBroj">Kućni broj:</label><br>
  <input type="number" name="kucniBroj" id="kucniBroj" class="form-control input" placeholder="Kućni broj">
      </div>
      <div class="col-4">
  <label for="mjestoStanovanja">Mjesto:</label><br>
  <input type="text" name="mjestoStanovanja" id="mjestoStanovanja" class="form-control input" placeholder="Mjesto">
      </div>
    </div>
    <div class="row">
      <div class="col">
      <label for="password" >{{ __('Lozinka:') }}</label>
      <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="Nova lozinka">
      </div>
      <div class="col">
          <label for="password-confirm">{{ __('Potvrdi lozinku:') }}</label>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="Nova lozinka">
          </div>
          <div class="col">
            <label for="name">{{ __('Korisničko ime:') }}</label>
            <input id="name" type="text" class="form-control" name="name" required autocomplete="Korisničko ime">
            </div>
      </div>
  <br>
    <br>
    <br>
   <input type="submit" name="potvrdi" value="Spremi promjene" class="btn btn-success float-right">
</form>
</div>
@endsection