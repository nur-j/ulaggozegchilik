@extends('admin.layout')

@section('styles')
  <style>
    .single_user_page p {
      font-weight: bold;
      margin-bottom: 0px;
      margin-top: 15px;
    }

    .single_user_page p span {
      font-weight: normal;
      border: 1px solid #555;
      border-radius: 5px;
      padding: 3px;
    }

    .single_user_page h5 {
      margin-top: 0px;
    }
  </style>
@endsection

@section('page_title') Ulanyjy #{{ $user->id }} @endsection

@section('content')
  <div class="container-fluid single_user_page">
    <div class="card p-3">
      <p>ULanyjynyň ady: </p>
      <h5>{{ $user->name }}</h5>
      <p>Degişli edarasy: </p>
      <h5>{{ $user->corpname }}</h5>
      <p>Email: </p>
      <h5>{{ $user->email }}</h5>
      <p>Telefon: </p>
      <h5>{{ $user->phone }}</h5>
      <p>Telefon belgisi:</p>
      <h5>{{ $user->phone }}</h5>
      <p>Email</p>
      <h5>{{ $user->email }}</h5>
      <p>Rugsatnamalary: </p>

      
      @if ($user->permissions->count() > 0)
        @foreach ($user->permissions as $permission)
          <div id="accordion">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Rugsatnama №{{ $permission->razresheniye_no }}
                  </button>
                </h5>
              </div>
          
              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body">
                  <p>
                    {{ __('permission.razresheniye_no') }}: <span>{{ $permission->razresheniye_no }}</span>
                  </p>
                  <p>
                    {{ __('permission.gos_prinad') }}: <span>{{ $permission->gos_prinad }}</span>
                  </p>
                  <p>
                    {{ __('permission.marka') }}: <span>{{ $permission->marka }}</span>
                  </p>
                  <p>
                    {{ __('permission.gos_nomer') }}: <span>{{ $permission->gos_nomer }}</span>
                  </p>
                  <p>
                    {{ __('permission.woditel_fio') }}: <span>{{ $permission->woditel_fio }}</span>
                  </p>
                  <p>
                    {{ __('permission.punkt_pog') }}: <span>{{ $permission->punkt_pog }}</span>
                  </p>
                  <p>
                    {{ __('permission.punkt_wyg') }}: <span>{{ $permission->punkt_wyg }}</span>
                  </p>
                  <p>
                    {{ __('permission.marshrut') }}: <span>{{ $permission->marshrut }}</span>
                  </p>
                  <p>
                    {{ __('permission.gruz') }}: <span>{{ $permission->gruz }}</span>
                  </p>
                  <p>
                    {{ __('permission.prinad') }}: <span>{{ $permission->prinad }}</span>
                  </p>
                  <p>
                    {{ __('permission.zayawitel') }}: <span>{{ $permission->zayawitel }}</span>
                  </p>
                  <p>
                    {{ __('permission.srok') }}: <span>{{ $permission->srok }}</span>
                  </p>
                  <p>
                    {{ __('permission.mesto_wydachi') }}: <span>{{ $permission->mesto_wydachi }}</span>
                  </p>
                  <p>
                    CMR №: <span>{{ $permission->cmr_no }}</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      @else
        <h5 class="text-danger">Bu ulanyja degişli rugsatnama ýok</h5>
      @endif
    </div>
  </div>
@endsection