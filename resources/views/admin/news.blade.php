@extends('admin.layout')

@section('content')
  <div class="card mx-3">
    <div class="card-header">
      <h3 class="card-title">Habarlary dolandyrmak</h3>

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
            <th>Sözbaşy</th>
            {{-- <th>Habar</th> --}}
            <th>Wagty</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
              <td>{{ $post->title_tm }}</td>
              {{-- <td>{!! substr($post->description, 0, 20) . '...' !!}</td> --}}
              <td>{{ $post->created_at }}</td>    
              <td>
                <a href="{{ route('edit_post', $post->id) }}" class="btn btn-primary">
                  <i class="fas fa-edit"></i>
                </a>
                <form method="POST" action="{{ route('delete_post', $post->id) }}">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger" onclick="confirm('are you sure')">
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