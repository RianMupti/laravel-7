@extends('../layout/master')

@section('title', 'Home')

@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@endpush

@section('main-content')

<div class="row mb-5">
    <div class="col-12">
        <h1 class="my-3">Data Mahasiswa</h1>

        <a href="{{ url('mahasiswa/create', []) }}" class="btn btn-primary mb-3">Tambah Data</a>

        @if (session('status'))
        <div class="alert alert-success my-2">
            {{ session('status') }}
        </div>
        @endif

        <table class="table" id="example">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Email</th>
                <th scope="col">Npm</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($mahasiswa as $mhs)
                <tr>
                  <th scope="row">{{$loop->iteration}}</th>
                  <td>{{$mhs->nama}}</td>
                  <td>{{ $mhs->email }}</td>
                  <td>{{ $mhs->npm }}</td>
                  <td>{{ $mhs->jurusan }}</td>
                  <td>
                      <a href="{{ url('mahasiswa', [$mhs->id]) }}" class="btn btn-primary">Detail</a>
                  </td>
                </tr>
                @endforeach
              
              
            </tbody>
          </table>
          
          

    </div>
</div>

@endsection

@push('script-after')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>
@endpush