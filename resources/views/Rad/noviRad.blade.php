@extends('layouts.app')

@section('css')
<link href="{{ asset('css/Poduzece/dodajPoduzece.css') }}" rel="stylesheet">
@endsection

@section('content')

<h3>Novi rad</h3>
<br>
<form method="post" action="/home/noviRad" class="editPocetna">
  @csrf
  <div class="container">
    <div class="row">

    <div class="col center">
       <label for="datumRada">Datum rada:</label><br>
       <input type="date" name="datumRada" id="datumRada" class="form-control input" placeholder="Datum rada">
    </div>
    <div class="col center">
        <label for="pocetakRada">Početak rada:</label><br>
        <input type="time" name="pocetakRada" id="pocetakRada" class="form-control input" placeholder="Pocetak rada">
     </div>
     <div class="col center">
        <label for="krajRada">Kraj rada:</label><br>
        <input type="time" name="krajRada" id="krajRada" class="form-control input" placeholder="Kraj rada">
     </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <label for="kasnjenje">Kasnjenje:</label><br>
        <input type="time" name="kasnjenje" id="kasnjenje" class="form-control input" placeholder="Kasnjenje" value="00:00">
          </div>
      <div class="col">
        <label for="zastoj">Zastoj:</label><br>
        <input type="time" name="zastoj" id="zastoj" class="form-control input" placeholder="Zastoj" value="00:00">
      </div>

    </div>
    <br>
    <div class="row">
      <div class="col">
        <p>Terenski rad:</p>
          <input type="radio" id="da" name="terenskiRad" value="Da">
          <label for="html">Da</label><br>
          <input type="radio" id="ne" name="terenskiRad" value="Ne">
          <label for="css">Ne</label><br>
      </div>
      <div class="col">
        <p>Nenazocnost:</p>
          <input type="radio" id="da" name="Nenazocnost" value="Da">
          <label for="html">Da</label><br>
          <input type="radio" id="ne" name="Nenazocnost" value="Ne">
          <label for="css">Ne</label><br>
      </div>
    </div>
    <br>
    
    <br>
   <br>
   <input type="submit" name="potvrdi" value="Spremi odrađeni rad" class="btn btn-success float-right">

</form>
@endsection