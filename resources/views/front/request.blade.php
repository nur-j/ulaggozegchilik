@extends('front.layout')

@section('styles')
  <!-- default icons used in the plugin are from Bootstrap 5.x icon library (which can be enabled by loading CSS below) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
  <!-- the fileinput plugin styling CSS file -->
  <link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
  <style>
    video.request {
      height: 70vh;
      width: auto;
    }

    @media only screen and (max-width: 768px) {
      video.request {
        width: 90%;
        height: auto;
      }
    }

  </style>
@endsection

@section('content')

  @include('front.inc.error')

  <!-- Modal -->
  <div class="modal  fade" id="requestModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Onlaýn ýüz tutma sahypasyna geçmezden öň</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="alert alert-danger" role="alert">
            <p>«Türkmenulaggözegçilik» döwlet kärhanasynyň şu web saýty arkaly Halkara daşalýan ýüküň ýanhatyny (CMR) we Ýüki Türkmenistanyň çäginde awtoulag serişdesine ýüklemek üçin rugsatnamany almak üçin onlaýn ýüz tutmany amala aşyryp bolar.
            <br />Onlaýn sargyt edilenden soň, elektron poçtaňyza töleg tabşyrygy barar. Töleg tabşyrygy esasynda degişli tölegi amala aşyryp, tölegiň tölenendigini tassyklaýan resminamany getireniňizden soň, sargyt eden rugsatnamalaryňyzy alyp bilersiňiz.</p>
          
          </div>
          <h3 class="text-primary">Onlaýn ýüztutmany nädip ugratmalygy bilen tanyşmak üçin aşakdaky wideony görüň</h3>
          <div>
          <video class="request" controls>
            <source src="{{ asset('assets/front/ulaggozegchilik.mp4') }}" type="video/mp4">
          </video>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Tanyşdym</button>
          {{-- <button type="button" class="btn btn-primary">Tanyşdym</button> --}}
        </div>
      </div>
    </div>
  </div>

  <main>
    <div class="container mt-4">
      <form method="POST" action="{{ route('save.request') }}" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="corpname" class="form-label">{{ __('request.corpname') }}</label>
          <input type="text" name="corpname" class="@if ($errors->has('corpname')) is-invalid @endif form-control"  id="corpname" value="{{ old('corpname') }}">
        </div>
        <div class="mb-3">
          <label for="permission_number" class="form-label">{{ __('request.allowance_number') }}</label>
          <input type="text" name="permission_number" 
          class="@if($errors->has('permission_number')) is-invalid @endif form-control" id="permission_number" value="{{ old('permission_number') }}">
        </div>
        <div class="mb-3">
          <label for="cmr_number" class="form-label">{{ __('request.cmr_number') }}</label>
          <input type="text" name="cmr_number" class="@if ($errors->has('cmr_number')) is-invalid @endif form-control" id="cmr_number" value="{{ old('cmr_number') }}">
        </div>
        <hr class="mt-5">
        <div style="font-weight: bold" >Jogapkär işgär</div>
        <div class="mb-3">
          <label for="fullname" class="form-label">{{__('request.surname_name') }}</label>
          <input type="text" name="fullname" class="@if ($errors->has('fullname')) is-invalid @endif form-control" id="fullname" value="{{ old('fullname') }}">
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">{{ __('request.phone') }}</label>
          <input type="text" name="phone" class="@if ($errors->has('phone')) is-invalid @endif form-control" id="phone" value="{{ old('phone') }}">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email</label>
          <input type="text" name="email" class="form-control" id="email" value="{{ old('email') }}">
        </div>
        <hr  class="mt-5">
        <div style="font-weight: bold">Edaranyň direktory</div>
        <div class="mb-3">
          <label for="director_firstname" class="form-label">Ady</label>
          <input type="text" name="director_firstname" class="@if ($errors->has('director_firstname')) is-invalid @endif form-control" id="director_firstname" value="{{ old('director_firstname') }}">
        </div>
        <div class="mb-3">
          <label for="director_lastname" class="form-label">Familiýasy</label>
          <input type="text" name="director_lastname" class="@if ($errors->has('director_lastname')) is-invalid @endif form-control" id="director_lastname" value="{{ old('director_lastname') }}">
        </div>
        <button type="submit" name="action" class="btn btn-info" value="generate_pdf">PDF görnüşde ýükle</button>
        <div class="form2part">
          <div class="mb-3">
            <label for="yuztutma" class="form-label">Ýüz tutma hatynyň göçürmesini ýükläň</label>
            <input type="file" name="yuztutma" class="form-control" id="yuztutma">
          </div>
          <div class="mb-3">
            <label for="ygtyyarnama" class="form-label">Ulag – ekspedisiýa işiniň» - 52.29.22 kiçi görnüşi esasynda «Awtomobil ulaglary arkaly ýük daşamagy guramak, ýükleri ekspedisiýa etmek (ýany bilen gitmek) işi» üçin hereket edýän ygtyýarnamanyň nusgasyny ýükläň</label>
            <input type="file" name="ygtyyarnama" class="form-control" id="ygtyyarnama">
          </div>
          <div class="mb-3">
            <label for="dowlet_sanaw" class="form-label">Türkmenistanyň ýuridik şahslarynyň ýeke-täk döwlet sanawy</label>
            <input id="dowlet_sanaw" name="dowlet_sanaw" type="file" class="form-control" id="dowlet_sanaw">
          </div>
          <button type="submit" name="action" class="btn btn-info" value="submit">Tassyklamak</button>
        </div>
      </form>
    </div>
</main>

@endsection

@section('scripts')
  <!-- the main fileinput plugin script JS file -->
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>
  <script>
    $(document).ready(function() {
      var myModal = new bootstrap.Modal(document.getElementById('requestModal'), {});
      myModal.show();
      console.log(myModal);

        // initialize plugin with defaults
      $("#yuztutma").fileinput({
        dropZoneTitle: 'Ýüz tutma hatynyň göçürmesini ýükläň',
        removeLabel: "{{ __('request.remove') }}",
        uploadLabel: 'Ýüklemek',
        showUpload: false,
        browseLabel: 'Faýly saýlamak',
        maxFileSize: 2024,
        msgSizeTooLarge: 'Faýlyň ölçegi (<b>{size}</b>), Maksimum <b>{maxSize}</b> bolmaly. Haýyş edýäs, täzeden synanyşyň!',
        allowedFileExtensions: ['pdf', 'png', 'jpg', 'jpeg'],
        msgInvalidFileExtension: 'Bu formatdaky faýly ýükläp bilmeýärsiňiz. Diňe "{extensions}" formatlara rugsat berilýar'
      });
      $("#ygtyyarnama").fileinput({
        dropZoneTitle: 'Ulag – ekspedisiýa işiniň» - 52.29.22 kiçi görnüşi esasynda «Awtomobil ulaglary arkaly ýük daşamagy guramak, ýükleri ekspedisiýa etmek (ýany bilen gitmek) işi» üçin hereket edýän ygtyýarnamanyň nusgasyny ýükläň',
        removeLabel: "{{ __('request.remove') }}",
        uploadLabel: 'Ýüklemek',
        showUpload: false,
        browseLabel: 'Faýly saýlamak',
        maxFileSize: 2024,
        msgSizeTooLarge: 'Faýlyň ölçegi (<b>{size}</b>), Maksimum <b>{maxSize}</b> bolmaly. Haýyş edýäs, täzeden synanyşyň!',
        allowedFileExtensions: ['pdf', 'png', 'jpg', 'jpeg'],
        msgInvalidFileExtension: 'Bu formatdaky faýly ýükläp bilmeýärsiňiz. Diňe "{extensions}" formatlara rugsat berilýar'
      });
      $("#dowlet_sanaw").fileinput({
        dropZoneTitle: 'Türkmenistanyň ýuridik şahslarynyň ýeke-täk döwlet sanawy',
        remove: "{{ __('request.remove') }}",
        uploadLabel: 'Ýüklemek',
        showUpload: false,
        browseLabel: 'Faýly saýlamak',
        maxFileSize: 2024,
        msgSizeTooLarge: 'File "Faýlyň ölçegi (<b>{size}</b>), Maksimum <b>{maxSize}</b> bolmaly. Haýyş edýäs, täzeden synanyşyň!',
        allowedFileExtensions: ['pdf', 'png', 'jpg', 'jpeg'],
        msgInvalidFileExtension: 'Bu formatdaky faýly ýükläp bilmeýärsiňiz. Diňe "{extensions}" formatlara rugsat berilýar'
      });

      $('.form2part').hide();
      @if (session('form') === 'open')
      $('.form2part').show(); 
      @endif
    });

    $('button[value="generate_pdf"]').click(function() {
      $('.form2part').show();
    });
  
  </script>
@endsection