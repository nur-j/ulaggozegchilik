@extends('admin.layout')

@section('content')
  <div class="card mx-3">
    <div class="card-header">
      <h3 class="card-title">Saýta girýänleriň sany</h3>

      {{-- <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

          <div class="input-group-append">
            <button type="submit"   class="btn btn-default"><i class="fas fa-search"></i></button>
          </div>
        </div>
      </div> --}}
    </div>
    <!-- /.card-header -->
    <div class="card-body table-responsive p-0" style="height: 300px;">
      <table class="table table-head-fixed text-nowrap">
        <thead>
          <tr>
            <th>Sene</th>
            {{-- <th>Habar</th> --}}
            <th>Sany</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($visitors as $visitor)
            <tr>
              <td>{{ \Carbon\Carbon::parse($visitor->date)->format('d.m.Y') }}</td>
              <td>{{  $visitor->total }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection