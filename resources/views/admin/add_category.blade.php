@extends('admin.layout')

@section('styles')
@endsection

@section('content')

  <h1>Täze kategoriýa goşmak</h1>

  {{-- FORMA CARD --}}
  <div class="card card-primary mx-3">
    <div class="card-header">
      <h3 class="card-title">Täze kategoriýa</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{ route('category.store') }}">
      @csrf
      <div class="card-body">

        <div class="form-group">
          <label for="title_tm">Türkmençe ady</label>
          <input type="text" class="form-control" name="title_tm" id="title_tm" placeholder="Türkmençe ady...">
        </div>

        <div class="form-group">
          <label for="title_ru">Rusça ady</label>
          <input type="text" class="form-control" name="title_ru" id="title_ru" placeholder="Rusça ady...">
        </div>

        <div class="form-group">
          <label for="title_en">Iňlisçe ady</label>
          <input type="text" class="form-control" name="title_en" id="title_en" placeholder="Iňlisçe ady...">
        </div>
      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Tassyklamak</button>
      </div>
    </form>
  </div>

  
@endsection


@section('scripts')
  <script src="{{ asset('plugins/summernote/summernote.min.js') }}"></script>
  <script src="{{ asset('plugins/dropzonejs/min/dropzone.min.js') }}"></script>
  <script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.js') }}"></script>
  <script type="text/javascript">
  
    $(document).ready(function() {
      $('.summernote').summernote({
        height: 400
      });

      bsCustomFileInput.init();
    });
    
  </script>
  <!-- the main fileinput plugin script JS file -->
  <script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/js/fileinput.min.js"></script>
  <script>
    // initialize plugin with defaults
    $("#input-id").fileinput({
      dropZoneTitle: 'Yuklemek ucin shu yere basyn',
      removeTitle: "{{ __('request.remove') }}"
    });
  
    // with plugin options
    // $("#input-id").fileinput({'showUpload':false, 'previewFileType':'any'});
  </script>
@endsection

