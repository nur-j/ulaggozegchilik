@extends('admin.layout')

@section('styles')
  <style>
    .single_request_page p {
      font-weight: bold;
      margin-bottom: 0px;
      margin-top: 15px;
    }

    .single_request_page h5 {
      margin-top: 0px;
    }
  </style>
@endsection

@section('page_title') Ýüz tutma #{{ $req->id }} @endsection

@section('content')
  <div class="container-fluid single_request_page">
    <div class="card p-3">
      <p>Edaranyň ady</p>
      <h5>{{ $req->corpname }}</h5>
      <p>Türkmenistanyň çäginde ýük ýüklemek rugsatnamasynyň sany</p>
      <h5>{{ $req->permission_number }}</h5>
      <p>Halkara daşaljak ýüküň ýanhatynyň (CMR) sany</p>
      <h5>{{ $req->cmr_number }}</h5>
      <p>Familiýasy we ady:</p>
      <h5>{{ $req->fullname }}</h5>
      <p>Telefon belgisi:</p>
      <h5>{{ $req->phone }}</h5>
      <p>Email</p>
      <h5>{{ $req->email }}</h5>
      <p>Ýüz tutma hatynyň göçürmesi: </p>
      <h5>
        @if (isset($req->yuztutma))
          <a target="_blank" href="{{ asset('storage/' . $req->yuztutma) }}">Ýükle</a>
        @else
          <span style="color: red">Bu faýl ýok</span>
        @endif
      </h5>
      <p>Ulag – ekspedisiýa işiniň» - 52.29.22 kiçi görnüşi esasynda «Awtomobil ulaglary arkaly ýük daşamagy guramak, ýükleri ekspedisiýa etmek (ýany bilen gitmek) işi» üçin hereket edýän ygtyýarnamanyň nusgasy: </p>
      <h5>
        @if (isset($req->ygtyyarnama))
          <a target="_blank" href="{{ asset('storage/' . $req->ygtyyarnama) }}">Ýükle</a>
        @else
          <span style="color: red">Bu faýl ýok</span>
        @endif   
      </h5>
      <p>Türkmenistanyň ýuridik şahslarynyň ýeke-täk döwlet sanawy: </p>
      <h5>
        @if (isset($req->dowlet_sanaw))
          <a target="_blank" href="{{ asset('storage/' . $req->dowlet_sanaw) }}">Ýükle</a>
        @else
          <span style="color: red">Bu faýl ýok</span>
        @endif
      </h5>
    </div>
  </div>
@endsection