@extends('layouts.app')

@section('content')

  <div class="container">
    <div class="col-md-8">
     <h1 style="font-size:1.6em;text-align:center">Dodaj kartę zmian</h1>
    <form class="" action="{{route('karta.store')}}" method="post">
      {{csrf_field()}}

      <div class="form-group">
        <label for="letter">Zgłaszający:</label>
      <input type="text" name="letter" value="">
    </div>
    <div class="form-group">
      <label for="owner">Przyjmujący</label>
      <select class="" name="owner">
        <option value="KBOBER">KBOBER</option>
        <option value="MLOBOCKI">MLOBOCKI</option>
        <option value="RCIROCKI">RCIROCKI</option>
        <option value="JGRZENIA">JGRZENIA</option>
        <option value="RKRAMPIKOWSKI">RKRAMPIKOWSKI</option>
      </select>
    </div>
    <div class="form-group">
      <label>Obszar</label>
      <select class="form-control" name="obszar" style="width:150px">
         <option value="">DRZWI</option>
         <option value="">PVC</option>
         <option value="">ALU</option>
         <option value="">INNE</option>
      </select>
    </div>

    <div class="form-group">
      <label>Dział</label>
      <select class="form-control" name="dzial" style="width:200px">
         <option value="Firma zewnętrzna">Firma zewnętrzna</option>
         <option value="Sprzedaż">Sprzedaż</option>
         <option value="RKS">RKS</option>
         <option value="Logistyka">Logistyka</option>
         <option value="Transport">Transport</option>
         <option value="Planowanie">Planowanie</option>
         <option value="Zakupy">Zakupy</option>
         <option value="Magazyn komponentów">Magazyn komponentów</option>
         <option value="Magazyn">Magazyn</option>
         <option value="Kontrola jakości">Kontrola jakości</option>
         <option value="Produkcja">Produkcja</option>
         <option value="Technologiczny">Technologiczny</option>
         <option value="Księgowość">Księgowość</option>
         <option value="Faktury">Faktury</option>
      </select>
    </div>
    <div class="form-group">
      <label>Rodzaj zmian</label>
      <select class="form-control" name="rodzaj" style="width:150px">
        <option value="Edycja klientów">Edycja klientów</option>
        <option value="Edycja raportów">Edycja raportów</option>
        <option value="Konfiguracja CIM">Konfiguracja CIM</option>
        <option value="Konfiguracja iQuote">Konfiguracja iQuote</option>
        <option value="Zmiana technologiczna">Zmiana technologiczna</option>
      </select>
    </div>
    <div class="form-group">
      <label>Treść zgłoszenia</label>
      <textarea name="temat" rows="6" class="form-control" cols="80"></textarea>
    </div>

    <div class="form-group">
      <label>Opis zmian</label>
      <textarea name="opis_zmian" class="form-control" rows="8" cols="80"></textarea>
    </div>
    <div class="tester">
      <label>Tester:</label>
      <select class="" name="">
        <option value="KBOBER">brak</option>
        <option value="KBOBER">KBOBER</option>
        <option value="MLOBOCKI">MLOBOCKI</option>
        <option value="RCIROCKI">RCIROCKI</option>
        <option value="JGRZENIA">JGRZENIA</option>
        <option value="RKRAMPIKOWSKI">RKRAMPIKOWSKI</option>
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
