@extends('layouts.app')

@section('content')
  <div class="container" style="max-width:1300px">

<h1 style="text-align:center">Archiwum kart zmian</h1>

<table style="width:100%">
  <thead style="font-weight:bold;border-bottom:1px black solid">
    <td>Numer</td>
    <td>Zlecający</td>
    <td>Przyjmujący</td>
    <td>Obszar</td>
    <td>Dział</td>
    <td>Rodzaj</td>
    <td>Temat</td>
    <td>Opis zmian</td>
    <td>Tester</td>
    <td>Status</td>
    <td>Data zakończenia</td>
  </thead>

  @foreach($karty as $karta)
    <tr>
      <td>{{$karta->id}}</td>
      <td>{{$karta->letter}}</td>
      <td>{{$karta->owner}}</td>
      <td>{{$karta->obszar}}</td>
      <td>{{$karta->dzial}}</td>
      <td>{{$karta->rodzaj}}</td>
      <td>{{$karta->temat}}</td>
      <td>{{$karta->opis_zmian}}</td>
      <td>{{$karta->tester}}</td>
      <td>{{$karta->status}}</td>
      <td>{{$karta->data_end}}</td>
      <td><a href="{{route('karta.edit', $karta->id)}}"><button class="btn btn-xs ">Edytuj</button></a>  </td>
      <td> <form  action="{{route('karta.destroy',$karta->id)}}" method="post">
        {{csrf_field()}}{{method_field('DELETE')}}
        <button class="btn btn-xs btn-danger" type="submit">Usuń</button>
      </form> </td>
    </tr>
  @endforeach
</table>
</div>

@endsection
