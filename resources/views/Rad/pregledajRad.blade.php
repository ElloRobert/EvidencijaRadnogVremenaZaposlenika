@extends('layouts.app')

@section('css')
<link href="{{ asset('css/Poduzece/dodajPoduzece.css') }}" rel="stylesheet">
@endsection

@section('content')

<h3>Pregledaj rad</h3>
<br>
<form method="post" action="/home/noviRad" class="editPocetna">
  @csrf
  <div class="container">
    <div class="row">

    <div class="col center">
       <label for="datumRada">Datum rada:</label><br>
       <input type="date" name="datumRada" id="datumRada" class="form-control input" placeholder="Datum rada"value="{{$rad->datumRada}}"  readonly>
    </div>
    <div class="col center">
        <label for="pocetakRada">Početak rada:</label><br>
        <input type="time" name="pocetakRada" id="pocetakRada" class="form-control input" placeholder="Pocetak rada" value="{{$rad->pocetakRada}}" readonly>
     </div>
     <div class="col center">
        <label for="krajRada">Kraj rada:</label><br>
        <input type="time" name="krajRada" id="krajRada" class="form-control input" placeholder="Kraj rada" value="{{$rad->krajRada}}" readonly>
     </div>
    </div>
    <br>
    <div class="row">
      <div class="col">
        <label for="kasnjenje">Kasnjenje:</label><br>
        <input type="time" name="kasnjenje" id="kasnjenje" class="form-control input" placeholder="Kasnjenje" value="{{$rad->kasnjenje}}" readonly>
          </div>
      <div class="col">
        <label for="zastoj">Zastoj:</label><br>
        <input type="time" name="zastoj" id="zastoj" class="form-control input" placeholder="Zastoj" value="{{$rad->zastoj}}" readonly>
      </div>

    </div>
    <br>
    <div class="row">
      <div class="col">
        <p>Terenski rad:</p>
          <input type="radio" id="da" name="terenskiRad" value="Da"   {{ $rad->terenskiRad == 'Da' ? 'checked' : ''}}>
          <label for="html">Da</label><br>
          <input type="radio" id="ne" name="terenskiRad" value="Ne" {{ $rad->terenskiRad == 'Ne' ? 'checked' : ''}}>
          <label for="css">Ne</label><br>
      </div>
      <div class="col">
        <p>Nenazocnost:</p>
          <input type="radio" id="da" name="Nenazocnost" value="Da" {{ $rad->Nenazocnost == 'Da' ? 'checked' : ''}} readonly>
          <label for="html">Da</label><br>
          <input type="radio" id="ne" name="Nenazocnost" value="Ne"  {{ $rad->Nenazocnost == 'Ne' ? 'checked' : ''}} readonly>
          <label for="css">Ne</label><br>
      </div>
    </div>
    <br>
</form>
@endsection