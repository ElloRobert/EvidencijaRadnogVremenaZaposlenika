@extends('layouts.app')

@section('css')
<link href="{{ asset('css/Poduzece/dodajPoduzece.css') }}" rel="stylesheet">
@endsection

@section('content')

<h3>Novo poduzeće</h3>
<br>
<form method="post" action="/home/novoPoduzece" class="editPocetna">
  @csrf
  <div class="container">
    <div class="row">

    <div class="col-6 center">
       <label for="nazivPoduzeca">Naziv poduzeća:</label><br>
       <input type="text" name="nazivPoduzeca" id="nazivPoduzeca" class="form-control input" placeholder="Naziv poduzeća">
    </div>
    <div class="col-6 center">
        <label for="datumOsnutka">Datum osnutka:</label><br>
        <input type="date" name="datumOsnutka" id="datumOsnutka" class="form-control input" placeholder="Datum osnutka">
     </div>
    </div>
    <br>
    <div class="row">
      <div class="col-6">
        <label for="vlasnik">Vlasnik:</label><br>
        <input type="text" name="vlasnik" id="vlasnik" class="form-control input" placeholder="Vlasnik">
          </div>
      <div class="col-6">
        <label for="OIB">OIB:</label><br>
        <input type="text" name="OIB" id="OIB" class="form-control input" placeholder="OIB">
      </div>

    </div>
    <br>
    <div class="row">
      <div class="col-6">
  <label for="kontakt">Tel:</label><br>
  <input type="text" name="kontakt" id="kontakt" class="form-control input" placeholder="Tel">
      </div>
      <div class="col-6">
  <label for="email">Email:</label><br>
  <input type="text" name="email" id="email" class="form-control input" placeholder="email">
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
  <label for="mjesto">Mjesto:</label><br>
  <input type="text" name="mjesto" id="mjesto" class="form-control input" placeholder="Mjesto">
      </div>
    </div>
    <br>
   <br>
   <input type="submit" name="potvrdi" value="Spremi promjene" class="btn btn-success float-right">

</form>
@endsection