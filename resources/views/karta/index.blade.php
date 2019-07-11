@extends('layouts.app')

@section('content')
  <div class="container" style="max-width:1300px">

<h1 style="text-align:center">Archiwum kart zmian</h1>

<table>
  <thead style="font-weight:bold;border-bottom:1px black solid">
    <td>Numer</td>
    <td>Przyjmujący</td>
    <td>Zlecający</td>
    {{-- <td>Obszar</td> --}}
    <td>Dział</td>
    <td>Rodzaj</td>
    {{-- <td style="width: 20%">Temat</td>
    <td style="width: 20%">Opis zmian</td> --}}
    {{-- <td>Tester</td> --}}
    <td>Status</td>
    <td>Data zakończenia</td>
    <td>Akcje</td>

  </thead>

  @foreach($karty as $karta)
    <tr>
      <td>{{$karta->id}}</td>
      <td>{{$karta->owner}}</td>
      <td>{{$karta->letter}}</td>
      {{-- <td>{{$karta->obszar}}</td> --}}
      <td>{{$karta->dzial}}</td>
      <td>{{$karta->rodzaj}}</td>
      {{-- <td style="width: 15%">{{substr($karta->temat,0,20)}}</td> --}}
      {{-- <td>{{substr($karta->opis_zmian,0,20)}}</td> --}}
      {{-- <td>{{$karta->tester}}</td> --}}

      {{-- status --}}
      <td>
        <span style="font-weight:bold" class="@if($karta->status=="Rozpoczęte" || $karta->status=="W trakcie" ) red @endif @if($karta->status=="Gotowe") green @endif">{{$karta->status}}</span>
      </td>
      {{-- data-end --}}
      <td style="text-align:center">@if($karta->status == "Gotowe") {{$karta->data_end}} @else <b>-</b> @endif </td>
        {{-- przyciski --}}
        @guest @else
      <td><a href="{{route('karta.edit', $karta->id)}}"><button class="btn btn-sm ">Edytuj</button></a>  </td>
      <td> <form  action="{{route('karta.destroy',$karta->id)}}" method="post">
        {{csrf_field()}}{{method_field('DELETE')}}
        <button class="btn btn-sm btn-danger" type="submit">Usuń</button>
      </form> </td>
      @if(!strcasecmp(Auth::user()->email,$karta->letter) || Auth::user()->email=='kbober'),
      <td><form class="" action="{{route('karta.update',$karta->id)}}" method="post">
        <input type="hidden" name="status" value="Gotowe">
        {{csrf_field()}}{{method_field('PATCH')}}<button type="submit" class="btn-sm btn-success">Zatwierdź</button>
      </form> </td>
    @endif
  @endguest
    </tr>
  @endforeach
</table>
</div>

@endsection
