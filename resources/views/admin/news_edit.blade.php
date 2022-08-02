@extends('admin.layout')

@section('styles')
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/dropzonejs/min/dropzone.min.css') }}">
  <!-- default icons used in the plugin are from Bootstrap 5.x icon library (which can be enabled by loading CSS below) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">
  <!-- the fileinput plugin styling CSS file -->
<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.0/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
@endsection

@section('content')

  <h1>Täzeligi üýtgetmek</h1>

  {{-- FORMA CARD --}}
  <div class="card card-primary mx-3">
    <div class="card-header">
      <h3 class="card-title">Üýtgetmek</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form role="form" method="POST" action="{{ route('update_post', $post->id) }}" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="card-body">

        <div class="card card-primary card-tabs">
          <div class="card-header p-0 pt-1">
            <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Türkmençe</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Rusça</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Iňlisçe</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content" id="custom-tabs-one-tabContent">
              <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                <div class="form-group">
                  <label for="title_tm">Türkmençe Sözbaşysy</label>
                  <input type="text" class="form-control" name="title_tm" id="title_tm" placeholder="Täzeligiň sözbaşysy" value="{{ $post->title_tm }}">
                </div>
        
                <div class="form-group">
                  <label for="description_tm">Habaryň türkmençesi</label>
                  <textarea name="description_tm" class="form-control summernote" id="description_tm">{{ $post->description_tm }}</textarea>
                </div>
              </div>
              <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                <div class="form-group">
                  <label for="title_ru">Rusça sözbaşy</label>
                  <input type="text" class="form-control" name="title_ru" id="title_ru" placeholder="Täzeligiň sözbaşysy" value="{{ $post->title_ru }}">
                </div>
        
                <div class="form-group">
                  <label for="description_ru">Habaryň rusçasy</label>
                  <textarea name="description_ru" class="form-control summernote" id="description_ru">{{ $post->description_ru }}</textarea>
                </div>
              </div>
              <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                <div class="form-group">
                  <label for="title_en">Iňlisçe sözbaşysy</label>
                  <input type="text" class="form-control" name="title_en" id="title_en" placeholder="Täzeligiň sözbaşysy" value="{{ $post->title_en }}">
                </div>
        
                <div class="form-group">
                  <label for="description_en">Habaryň iňlisçesi</label>
                  <textarea name="description_en" class="form-control summernote" id="description_en">{{ $post->description_en }}</textarea>
                </div>
              </div>
            </div>
          </div>
          
        </div>

        <div class="form-group">
          <label>Kategoriýa</label>
          <select name="category_id" class="form-control">
            @foreach ($categories as $category)
            <option 
              @if ($post->category->id === $category->id) selected @endif value="{{ $category->id }}">
              {{ $category->title_tm }}
            </option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label>Kategoriýa</label>
          <input type="date" name="created_at" value="{{ $post->date }}">
        </div>


        <div class="form-group">
          <label for="exampleInputEmail1" class="form-label">Habaryň suraty</label>
          <input id="input-id" type="file" name="poster" class="form-control" id="exampleInputEmail1">
          {{-- <label for="exampleInputFile">Habaryň suraty</label>
          <div class="input-group">
            <div class="custom-file">
              <input type="file" name="poster" class="custom-file-input" id="exampleInputFile">
              <label class="custom-file-label" for="exampleInputFile">Faýly saýlaň</label>
            </div>
            <div class="input-group-append">
              <span class="input-group-text" id="">Ýüklemek</span>
            </div>
          </div> --}}
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