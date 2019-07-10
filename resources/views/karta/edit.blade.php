@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="col-md-8">
     <h1 style="font-size:1.6em;text-align:center">Dodaj kartę zmian</h1>
    <form class="" action="{{route('karta.update',$karta->id)}}" method="post">
      {{csrf_field()}}
      {{method_field('PATCH')}}

      <div class="form-group">
        <label for="letter">Zgłaszający:</label>
      <input type="text" name="letter" value="{{$karta->letter}}">
    </div>
    <div class="form-group">
      <label for="owner">Przyjmujący</label>
      <select class="" name="owner">
        <option value="KBOBER" @if($karta->owner=="KBOBER") selected @endif >KBOBER</option>
        <option value="MLOBOCKI"  @if($karta->owner=="MLOBOCKI") selected @endif >MLOBOCKI</option>
        <option value="RCIROCKI"  @if($karta->owner=="RCIROCKI") selected @endif>RCIROCKI</option>
        <option value="JGRZENIA"  @if($karta->owner=="JGRZENIA") selected @endif>JGRZENIA</option>
        <option value="RKRAMPIKOWSKI"  @if($karta->owner=="RKRAMPIKOWSKI") selected @endif>RKRAMPIKOWSKI</option>
      </select>
    </div>
    <div class="form-group">
      <label>Obszar</label>
      <select class="form-control" name="obszar" style="width:150px">
         <option value="" @if($karta->obszar=="DRZWI") selected @endif>DRZWI</option>
         <option value="" @if($karta->obszar=="PVC") selected @endif>PVC</option>
         <option value="" @if($karta->obszar=="ALU") selected @endif>ALU</option>
         <option value="" @if($karta->obszar=="INNE") selected @endif>INNE</option>
      </select>
    </div>

    <div class="form-group">
      <label>Dział</label>
      <select class="form-control" name="dzial" style="width:200px">
         <option value="Firma zewnętrzna" @if($karta->dzial=="Firma zewnętrzna") selected @endif >Firma zewnętrzna</option>
         <option value="Sprzedaż" @if($karta->dzial=="Sprzedaż") selected @endif>Sprzedaż</option>
         <option value="RKS" @if($karta->dzial=="RKS") selected @endif>RKS</option>
         <option value="Logistyka" @if($karta->dzial=="Logistyka") selected @endif>Logistyka</option>
         <option value="Transport" @if($karta->dzial=="Transport") selected @endif>Transport</option>
         <option value="Planowanie"@if($karta->dzial=="Planowanie") selected @endif>Planowanie</option>
         <option value="Zakupy" @if($karta->dzial=="Zakupy") selected @endif>Zakupy</option>
         <option value="Magazyn komponentów" @if($karta->dzial=="Magazyn komponentów") selected @endif>Magazyn komponentów</option>
         <option value="Magazyn" @if($karta->dzial=="Magazyn") selected @endif>Magazyn</option>
         <option value="Kontrola jakości" @if($karta->dzial=="Kontrola jakości") selected @endif>Kontrola jakości</option>
         <option value="Produkcja" @if($karta->dzial=="Produkcja") selected @endif>Produkcja</option>
         <option value="Technologiczny" @if($karta->dzial=="Technologiczny") selected @endif>Technologiczny</option>
         <option value="Księgowość" @if($karta->dzial=="Księgowość") selected @endif>Księgowość</option>
         <option value="Faktury" @if($karta->dzial=="Faktury") selected @endif>Faktury</option>
      </select>
    </div>
    <div class="form-group">
      <label>Rodzaj zmian</label>
      <select class="form-control" name="rodzaj" style="width:150px">
        <option value="Edycja klientów" @if($karta->rodzaj =="Edycja klientów" )selected @endif>Edycja klientów</option>
        <option value="Edycja raportów" @if($karta->rodzaj =="Edycja raportów" )selected @endif>Edycja raportów</option>
        <option value="Konfiguracja CIM" @if($karta->rodzaj =="Konfiguracja CIM" )selected @endif>Konfiguracja CIM</option>
        <option value="Konfiguracja iQuote" @if($karta->rodzaj =="Konfiguracja iQuote" )selected @endif>Konfiguracja iQuote</option>
        <option value="Zmiana technologiczna" @if($karta->rodzaj == "Zmiana technologiczna" )selected @endif>Zmiana technologiczna</option>
      </select>
    </div>
    <div class="form-group">
      <label>Treść zgłoszenia</label>
      <textarea name="temat" rows="6" class="form-control" cols="80">{{$karta->temat}}</textarea>
    </div>

    <div class="form-group">
      <label>Opis zmian</label>
      <textarea name="opis_zmian" class="form-control" rows="8" cols="80">{{$karta->opis_zmian}}</textarea>
    </div>
    <div class="tester">
      <label>Tester:</label>
      <select class="" name="tester">
        <option value="brak" @if($karta->tester =="brak" )selected @endif>brak</option>
        <option value="KBOBER" @if($karta->tester =="KBOBER" )selected @endif>KBOBER</option>
        <option value="MLOBOCKI" @if($karta->tester =="MLOBOCKI" )selected @endif>MLOBOCKI</option>
        <option value="RCIROCKI" @if($karta->tester =="RCIROCKI" )selected @endif>RCIROCKI</option>
        <option value="JGRZENIA" @if($karta->tester =="JGRZENIA" )selected @endif>JGRZENIA</option>
        <option value="RKRAMPIKOWSKI" @if($karta->tester =="RKRAMPIKOWSKI" )selected @endif>RKRAMPIKOWSKI</option>
        <option value="RKRAMPIKOWSKI" @if($karta->tester =="JGAWLOWSKI" )selected @endif>JGAWLOWSKI</option>

      </select>
    </div>
    <div class="form-group">
      <label for="status">Status:</label>
      <select  name="status" style="width:150px">
        <option value="Rozpoczęte">Rozpoczęte</option>
      </select>
    </div>
    <div class="form-group">

    <button type="submit"  class="btn btn-primary">Zapisz</button>
  </div>

    </form>
  </div>

  </div>
@endsection
