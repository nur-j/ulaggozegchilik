@extends('front.layout')
  
@section('content')
<div class="container mt-5 dashboard">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header fs-3">
                  {{ __('auth.dashboard') }} - {{ Auth::user()->name }}
                </div>
  
                <div class="card-body">
                
                <div class="d-flex justify-content-between align-items-center my-3">
                  <h4 style="color: #555">{{ __('permission.moi_razresheniya') }}</h4>
                  <a href="{{ route('permission.form') }}" class="btn btn-primary">{{ __('permission.new') }}</a>
                </div>
                
                @if (count(Auth::user()->permissions) > 0)
                <div class="accordion" id="accordionExample">
                  @foreach (Auth::user()->permissions as $permission)
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="heading-{{ $permission->id }}">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-{{ $permission->id }}" aria-expanded="false" aria-controls="collapse-{{ $permission->id }}">
                        {{ __('permission.razhresheniye') }} №{{ $permission->razresheniye_no }}
                      </button>
                    </h2>
                    <div id="collapse-{{ $permission->id }}" class="accordion-collapse collapse" aria-labelledby="heading-{{ $permission->id }}" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
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
                      </div>
                    </div>
                  </div>
                  @endforeach
                </div>
                @else
                  Häzirlikçe size degişli rugsatnama ýok
                @endif
               
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection