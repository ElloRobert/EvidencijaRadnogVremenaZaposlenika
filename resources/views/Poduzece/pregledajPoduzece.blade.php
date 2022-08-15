@extends('layouts.app')

@section('css')
<link href="{{ asset('css/Poduzece/dodajPoduzece.css') }}" rel="stylesheet">
@endsection

@section('content')

<h3>{{$poduzece->nazivPoduzeca}}</h3>
<br>
<form method="post" action="/home/uredenoPoduzece" class="editPocetna">
  @csrf
  <div class="container">
    <div class="row">
        <div class="col-2 center">
            <label for="id">Id:</label><br>
            <input type="text" name="id" id="id" class="form-control input" readonly placeholder="id" value={{$poduzece->id}}>
         </div>
    <div class="col-6 center">
       <label for="nazivPoduzeca">Naziv poduzeća:</label><br>
       <input type="text" name="nazivPoduzeca" id="nazivPoduzeca" class="form-control input" readonly value={{$poduzece->nazivPoduzeca}} placeholder="Naziv poduzeća">
    </div>
    <div class="col-4 center">
        <label for="datumOsnutka">Datum osnutka:</label><br>
        <input type="date" name="datumOsnutka" id="datumOsnutka" class="form-control input" readonly value={{$poduzece->datumOsnutka}} placeholder="Datum osnutka:">
     </div>
    </div>
    <br>
    <div class="row">
      <div class="col-6">
        <label for="vlasnik">Vlasnik:</label><br>
        <input type="text" name="vlasnik" id="vlasnik" class="form-control input" readonly value={{$poduzece->vlasnik}} placeholder="Vlasnik">
          </div>
      <div class="col-6">
        <label for="OIB">OIB:</label><br>
        <input type="text" name="OIB" id="OIB" class="form-control input" readonly value={{$poduzece->OIB}} placeholder="OIB">
      </div>

    </div>
    <br>
    <div class="row">
      <div class="col-6">
  <label for="kontakt">Tel:</label><br>
  <input type="text" name="kontakt" id="kontakt" class="form-control input" readonly value={{$poduzece->kontakt}} placeholder="Tel">
      </div>
      <div class="col-6">
  <label for="email">Email:</label><br>
  <input type="text" name="email" id="email" class="form-control input" readonly value={{$poduzece->email}} placeholder="email">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-4">
  <label for="ulica">Ulica:</label><br>
  <input type="text" name="ulica" id="ulica" class="form-control input" readonly value={{$poduzece->ulica}} placeholder="Ulica">
      </div>
      <div class="col-4">
  <label for="kucniBroj">Kućni broj:</label><br>
  <input type="number" name="kucniBroj" id="kucniBroj" class="form-control input" readonly value={{$poduzece->kucniBroj}} placeholder="Kućni broj">
      </div>
      <div class="col-4">
  <label for="mjesto">Mjesto:</label><br>
  <input type="text" name="mjesto" id="mjesto" class="form-control input" readonly value={{$poduzece->mjesto}} placeholder="Mjesto">
      </div>
    </div>
    <br>


</form>
@endsection