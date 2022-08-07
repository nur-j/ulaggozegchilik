@extends('admin.layout')

@section('page_title') Ýüz tutmalar @endsection

@section('breadcrumb')
<li class="breadcrumb-item active">Ýüz tutmalar</li>
@endsection

@section('content')

{{-- <section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Ýüz tutmalar</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="/">Baş sahypa</a></li>
          <li class="breadcrumb-item active">Ýüz tutmalar</li>
        </ol>
      </div>
    </div>
  </div><!-- /.container-fluid -->
</section> --}}

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h3 class="card-title">Ýüz tutmalaryň sanawy</h3>
            <a href="{{ route('requests.export') }}" class="btn btn-success">Excel görnüşde ýüklemek</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
              <thead>
              <tr role="row">
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">
                  Edaranyň ady
                </th>
                <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1">Jogapkär işgär</th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">Telefon belgisi
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">Email</th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">Status</th>
              </tr>
              </thead>
              <tbody>
          
              @foreach ($reqs as $req)
                <tr role="row">
                  <td class="" tabindex="0">
                    <a href="{{ route('requests_single', $req->id) }}">{{ $req->corpname }}</a>
                  </td>
                  <td class="sorting_1">{{ $req->fullname }}</td>
                  <td>{{ $req->phone }}</td>
                  <td>{{ $req->email }}</td>
                  <td>
                    @if ($req->status === 1)
                      <i class=" text-success fas fa-check p-3  rounded-circle border border-success"></i>
                    @endif
                    
                    @if ($req->status === 2)
                      <i class="text-danger fas fa-times p-3 rounded-circle border border-danger" data-toggle="tooltip" data-placement="top" title="{{ $req->cause_of_reject }}"></i>
                    @endif
                  </td>
                </tr>
              @endforeach
            </tbody>
              {{-- <tfoot>
              <tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
              </tfoot> --}}
            </table>
          </div>
        </div>
          </div>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    {{ $reqs->links('pagination::bootstrap-4') }}

  </div>
  <!-- /.container-fluid -->
</section>

@endsection

@section('scripts')

  <script>
    $(function() {
      $('[data-toggle="tooltip"]').tooltip();
    });
  </script>

@endsection