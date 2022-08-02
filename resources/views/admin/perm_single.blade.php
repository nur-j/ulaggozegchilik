@extends('admin.layout')

@section('styles')
  <style>
    .single_permission_page p {
      font-weight: bold;
      margin-bottom: 0px;
      margin-top: 15px;
      background-color: #eee;
    }

    .single_permission_page h5 {
      margin-top: 0px;
    }
  </style>
@endsection

@section('page_title') Rugsatnama №{{ $permission->razresheniye_no }} @endsection

@section('content')
  <div class="container-fluid single_permission_page">
    <div class="card p-3">
      <p>Rugsatnama №:</p>
      <h5>{{ $permission->razresheniye_no }}</h5>
      <p>Awtoulag serişdesiniň döwlet degişliligi:</p>
      <h5>{{ $permission->gos_prinad }}</h5>
      <p>Awtoulag serişdesiniň markasy:</p>
      <h5>{{ $permission->marka }}</h5>
      <p>Awtoulag serişdesiniň döwlet belgisi: </p>
      <h5>{{ $permission->gos_nomer }}</h5>
      <p>Sürüjiniň familiýasy, ady we atasynyň ady:</p>
      <h5>{{ $permission->woditel_fio }}</h5>
      <p>Awtoulag serişdesiniň ýük ýüklemeli nokady:</p>
      <h5>{{ $permission->punkt_pog }}</h5>
      <p>Awtoulag serişdesiniň ýüki düşürmeli nokady:</p>
      <h5>{{ $permission->punkt_wyg }}</h5>
      <p>Ýüküň gitmeli ugry:</p>
      <h5>{{ $permission->marshrut }}</h5>
      <p>Ýüküň görnüşi we agramy: </p>
      <h5>{{ $permission->gruz }}</h5>
      <p>Ýüküň degişliligi: </p>
      <h5>{{ $permission->prinad }}</h5>
      <p>Arza beriji: </p>
      <h5>{{ $permission->zayawitel }}</h5>
      <p>Rugsatnamanyň hereket ediş möhleti:  </p>
      <h5>{{ $permission->srok }}</h5>
      <p>Rugsatnamanyň berlen ýeri we wagty: </p>
      <h5>{{ $permission->mesto_wydachi }}</h5>
    </div>

    <form method="POST" action="{{ route('admin.permission.delete', $permission->id) }}">
      @csrf
      @method('delete')
      <button type="submit" class="btn btn-danger" onclick="confirm('are you sure')">
        Rugsatnamany öçürmek
        <i class="fa fa-trash"></i>
      </button>
    </form>
  </div>
@endsection