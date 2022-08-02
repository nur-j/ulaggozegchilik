@extends('admin.layout')

@section('content')
  <div class="card mx-3">
    <div class="card-header">
      <h3 class="card-title">Kategoriýalary dolandyrmak</h3>

      {{-- <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

          <div class="input-group-append">
            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </div> --}}
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>Türkmençe ady</th>
            <th>Rusça ady</th>
            <th>Iňlisçe ady</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($categories as $category)
            <tr>
              <td>{{ $category->title_tm }}</td>
              <td>{{ $category->title_ru }}</td>
              <td>{{ $category->title_en }}</td>    
              <td>
                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">
                  <i class="fas fa-edit"></i>
                </a>
                <form method="POST" action="{{ route('category.destroy', $category->id) }}">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger" onclick="confirm('Siz hakykatdanam öçürmekçimi?')">
                  <i class="fa fa-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
          
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection

@section('scripts')
    <script>
      
    </script>
@endsection