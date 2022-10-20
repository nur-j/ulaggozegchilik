@extends('front.layout')

@section('content')
<main>
  <div class="container mt-4">
    <form method="POST" id="permission-form" action="{{ route('permission.create') }}">
      @csrf
      <div class="row">

        <div class="mb-3 col-md-6">
          <label for="razresheniye_no" class="form-label">
            № разрешения <br>
            Rugsatnama №
          </label>
          <input value="{{ old('razresheniye_no') }}" type="text" name="razresheniye_no" class="form-control common-validated" id="razresheniye_no">
          <div class="invalid-feedback">alsdkjkldf</div>
        </div>
  
        <div class="mb-3 col-md-6">
          <label for="gos_prinad" class="form-label">
            Государственная принадлежность автотранспортного средства <br />
            Awtoulag serişdesiniň döwlet degişliligi 
          </label>
          <!-- <input type="text" name="gos_prinad" class="form-control" list="countries" id="gos_prinad">
          <datalist id="countries">
            @foreach ($countries as $country)
            <option value="{{!! $country->title !!}}">
            @endforeach 
          </datalist> -->
          <select name="gos_prinad" id="gos_prinad" class="form-control common-validated">
            <option value="">------</option>
            <option value="Türkmenistan">TM - Türkmenistan</option>
            <option value="Russiýa Federasiýasy">RU - Russiýa Federasiýasy</option>
            <option value="Özbegistan">UZ - Özbegistan</option>
            <option value="">________________</option>
            @foreach ($countries as $country)
              <option  
                value="{{ $country->title }}"
                 @if ($country->title === old('gos_prinad')) 
                  selected 
                @endif 
              >{{ $country->code . " - " . $country->title }}</option>
            @endforeach
          </select>
          <div class="invalid-feedback">error</div>
        </div>

        <div class="mb-3 col-md-6">
          <label for="marka" class="form-label">
            Марка автотранспортного средства <br />
            Awtoulag serişdesiniň markasy
          </label>
          <!-- <input type="text" name="marka" class="form-control" list="brands">
          <datalist id="brands">
            @foreach ($brands as $brand)
              <option value="{{ $brand->title }}">    
            @endforeach
          </datalist> -->
          <select name="marka" id="marka" class="form-control common-validated">
            <option value="">Markany saýlaň</option>
            @foreach ($brands as $brand)
              <option 
                value="{{ $brand->title }}"
                @if($brand->title === old('marka')) selected @endif
              >{{ $brand->title }}</option>
            @endforeach
          </select>
          <div class="invalid-feedback">alsdkjkldf</div>
        </div>

        <div class="mb-3 col-md-6">
          <label for="gos_nomer" class="form-label common-validated">
            Государственный № автотранспортного средства <br />
            Awtoulag serişdesiniň döwlet belgisi
          </label>
          <input value="{{ old('gos_nomer') }}" type="text" name="gos_nomer" class="form-control common-validated" id="gos_nomer">
          <div class="invalid-feedback">error</div>
        </div>

        <div class="mb-3 col-md-6">
          <label for="woditel_fio" class="form-label">
            Фамилия, имя, отчество перевозчика <br />
            Sürüjiniň familiýasy, ady we atasynyň ady
          </label>
          <input value="{{ old('woditel_fio') }}" type="text" name="woditel_fio" class="form-control common-validated" id="woditel_fio">
          <div class="invalid-feedback">error</div>
        </div>

        <div class="mb-3 col-md-6">
          <label for="punkt_pog" class="form-label">
            Пункт погрузки автотранспортного средства <br />
            Awtoulag serişdesiniň ýük ýüklemeli nokady
          </label>
          <input value="{{ old('punkt_pog') }}" type="text" name="punkt_pog" class="form-control common-validated" id="punkt_pog">
          <div class="invalid-feedback">error</div>
        </div>

        <div class="mb-3 col-md-6">
          <label for="punkt_wyg" class="form-label">
            Пункт выгрузки автотранспортного средства <br />
            Awtoulag serişdesiniň ýüki düşürmeli nokady
          </label>
          <input value="{{ old('punkt_wyg') }}" type="text" name="punkt_wyg" class="form-control common-validated" id="punkt_wyg">
          <div class="invalid-feedback">error</div>
        </div>

        <div class="mb-3 col-md-6">
          <label for="marshrut" class="form-label">
            Маршрут следования груза <br />
            Ýüküň gitmeli ugry
          </label>
          <input value="{{ old('marshrut') }}" type="text" name="marshrut" class="form-control common-validated" id="marshrut">
          <div class="invalid-feedback">error</div>
        </div>

        <div class="mb-3 col-md-6">
          <label for="gruz" class="form-label">
            Наименование и вес груза <br />
            Ýüküň görnüşi we agramy
          </label>
          <input value="{{ old('gruz') }}" type="text" name="gruz" class="form-control common-validated" id="gruz">
          <div class="invalid-feedback">error</div>
        </div>

        <div class="mb-3 col-md-6">
          <label for="prinad" class="form-label">
            Принадлежность груза <br />
            Ýüküň degişliligi
          </label>
          <input value="{{ old('prinad') }}" type="text" name="prinad" class="form-control common-validated" id="prinad">
          <div class="invalid-feedback">error</div>
        </div>

        <div class="mb-3 col-md-6">
          <label for="zayawitel" class="form-label">
            Наименование заявителя <br />
            Arza beriji
          </label>
          <input value="{{ old('zayawitel') }}" type="text" name="zayawitel" class="form-control common-validated" id="zayawitel">
          <div class="invalid-feedback">error</div>
        </div>

        <div class="mb-3 col-md-6">
          <label for="srok" class="form-label">
            Срок действия разрешения <br />
            Rugsatnamanyň hereket ediş möhleti
          </label>
          <input value="{{ old('srok') }}" type="text" name="srok" class="form-control common-validated" id="srok">
          <div class="invalid-feedback">error</div>
        </div>

        <div class="mb-3 col-md-6">
          <label for="mesto_wydachi" class="form-label">
            Место выдачи и дата <br />
            Rugsatnamanyň berlen ýeri we wagty
          </label>
          <input value="{{ old('mesto_wydachi') }}" type="text" name="mesto_wydachi" class="form-control common-validated" id="mesto_wydachi">
          <div class="invalid-feedback">error</div>
        </div>

        <div class="mb-3 col-md-6">
          <label for="cmr_no" class="form-label">
            CMR №
          </label>
          <input value="{{ old('cmr_no') }}" type="text" name="cmr_no" class="form-control common-validated" id="cmr_no">
          <div class="invalid-feedback">error</div>
        </div>

        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

      </div>
      <input type="submit" class="btn btn-info" value="{{ __('request.submit') }}" />
      <div class="invalid-feedback">error</div>
    </form>
  </div>
</main>
@endsection

@section('scripts')

  <script>
    /* const countries = JSON.parse({{ $countries }}); */
    const fields = document.querySelectorAll('.common-validated');
    const patterns = {
      razresheniye_no: /^\d{8}$/,
      gos_prinad: /\w+/,
      marka: /\w+/,
      gos_nomer: /\w+/,
      woditel_fio: /\w+/,
      punkt_pog: /\w+/,
      punkt_wyg: /[a-zA-Z]+/,
      marshrut: /[a-zA-Z]+/,
      gruz: /[a-zA-Z]+/,
      prinad: /[a-zA-Z]+/,
      zayawitel: /[a-zA-Z]+/,
      mesto_wydachi: /[a-zA-Z]+/,
      cmr_no: /[a-zA-Z]+/,
    }


    const validate = function(pattern, field) {
      if (pattern.test(field.value)) {
        field.parentNode.lastElementChild.style.display = 'none'
        field.classList.remove('is-invalid');
        field.classList.add('is-valid');
      } else {
        field.classList.remove('is-valid')
        field.classList.add('is-invalid')
        field.parentNode.lastElementChild.style.display = 'block'
      }
    }

    fields.forEach(function(field) {
      field.addEventListener('blur', function(e) {
        e.target.value
        validate(patterns[e.target.attributes.name.value], e.target)
      })
    })

    
  </script>

@endsection