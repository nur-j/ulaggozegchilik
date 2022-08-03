@extends('front.layout')

@section('content')
<main>
  <div class="container mt-4">
    <form method="POST" action="{{ route('permission.create') }}">
      @csrf
      <div class="row">

        <div class="mb-3 col-md-6">
          <label for="razresheniye_no" class="form-label">
            № разрешения <br>
            Rugsatnama №
          </label>
          <input type="text" name="razresheniye_no" class="form-control" id="razresheniye_no">
        </div>
  
        <div class="mb-3 col-md-6">
          <label for="gos_prinad" class="form-label">
            Государственная принадлежность автотранспортного средства <br />
            Awtoulag serişdesiniň döwlet degişliligi
          </label>
          <input type="text" name="gos_prinad" class="form-control" id="gos_prinad">
        </div>

        <div class="mb-3 col-md-6">
          <label for="marka" class="form-label">
            Марка автотранспортного средства <br />
            Awtoulag serişdesiniň markasy
          </label>
          <input type="text" name="marka" class="form-control" id="marka">
        </div>

        <div class="mb-3 col-md-6">
          <label for="gos_nomer" class="form-label">
            Государственный № автотранспортного средства <br />
            Awtoulag serişdesiniň döwlet belgisi
          </label>
          <input type="text" name="gos_nomer" class="form-control" id="gos_nomer">
        </div>

        <div class="mb-3 col-md-6">
          <label for="woditel_fio" class="form-label">
            Фамилия, имя, отчество перевозчика <br />
            Sürüjiniň familiýasy, ady we atasynyň ady
          </label>
          <input type="text" name="woditel_fio" class="form-control" id="woditel_fio">
        </div>

        <div class="mb-3 col-md-6">
          <label for="punkt_pog" class="form-label">
            Пункт погрузки автотранспортного средства <br />
            Awtoulag serişdesiniň ýük ýüklemeli nokady
          </label>
          <input type="text" name="punkt_pog" class="form-control" id="punkt_pog">
        </div>

        <div class="mb-3 col-md-6">
          <label for="punkt_wyg" class="form-label">
            Пункт выгрузки автотранспортного средства <br />
            Awtoulag serişdesiniň ýüki düşürmeli nokady
          </label>
          <input type="text" name="punkt_wyg" class="form-control" id="punkt_wyg">
        </div>

        <div class="mb-3 col-md-6">
          <label for="marshrut" class="form-label">
            Маршрут следования груза <br />
            Ýüküň gitmeli ugry
          </label>
          <input type="text" name="marshrut" class="form-control" id="marshrut">
        </div>

        <div class="mb-3 col-md-6">
          <label for="gruz" class="form-label">
            Наименование и вес груза <br />
            Ýüküň görnüşi we agramy
          </label>
          <input type="text" name="gruz" class="form-control" id="gruz">
        </div>

        <div class="mb-3 col-md-6">
          <label for="prinad" class="form-label">
            Принадлежность груза <br />
            Ýüküň degişliligi
          </label>
          <input type="text" name="prinad" class="form-control" id="prinad">
        </div>

        <div class="mb-3 col-md-6">
          <label for="zayawitel" class="form-label">
            Наименование заявителя <br />
            Arza beriji
          </label>
          <input type="text" name="zayawitel" class="form-control" id="zayawitel">
        </div>

        <div class="mb-3 col-md-6">
          <label for="srok" class="form-label">
            Срок действия разрешения <br />
            Rugsatnamanyň hereket ediş möhleti
          </label>
          <input type="text" name="srok" class="form-control" id="srok">
        </div>

        <div class="mb-3 col-md-6">
          <label for="mesto_wydachi" class="form-label">
            Место выдачи и дата <br />
            Rugsatnamanyň berlen ýeri we wagty
          </label>
          <input type="text" name="mesto_wydachi" class="form-control" id="mesto_wydachi">
        </div>

        <div class="mb-3 col-md-6">
          <label for="cmr_no" class="form-label">
            CMR №
          </label>
          <input type="text" name="cmr_no" class="form-control" id="cmr_no">
        </div>

        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

      </div>
      <input type="submit" class="btn btn-info" value="{{ __('request.submit') }}" />
    </form>
  </div>
</main>
@endsection