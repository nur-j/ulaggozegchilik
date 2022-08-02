@extends('admin.layout')


@section('page_title') Rugsatnamalar @endsection

@section('breadcrumb')
<li class="breadcrumb-item active">Rugsatnamalar</li>
@endsection


@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header d-flex justify-content-between">
            <h3 class="card-title">Rugsatnamalar</h3>
            <a href="{{ route('permissions.export') }}" class="btn btn-success">Excel görnüşde ýüklemek</a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="example2_info">
              <thead>
              <tr role="row">
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">Rugsatnama №
                </th>
                <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1">Sürüjiniň FAAa</th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">Arza beriji
                </th>
                <th class="sorting" tabindex="0" rowspan="1" colspan="1">Awtoulag serişdesiniň döwlet degişliligi</th>
              </tr>
              </thead>
              <tbody>
          
              @foreach ($permissions as $p)
                <tr role="row">
                  <td class="" tabindex="0">
                    <a href="{{ route('admin.permission.single', $p->id) }}">{{ $p->razresheniye_no }}</a>
                  </td>
                  <td class="sorting_1">{{ $p->woditel_fio }}</td>
                  <td>{{ $p->zayawitel }}</td>
                  <td>{{ $p->gos_prinad }}</td>
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

    {{ $permissions->links('pagination::bootstrap-4') }}

  </div>
  <!-- /.container-fluid -->
</section>

@endsection