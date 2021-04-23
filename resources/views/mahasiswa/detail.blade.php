@extends('../layout/master')

@section('title', 'Detail Mahasiswa')

@push('style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@endpush

@section('main-content')

<div class="row mb-5">
    <div class="col-6">
        <h1 class="my-3">Detail Mahasiswa</h1>

        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nama : {{ $mahasiswa->nama}}</h5>
              <h6 class="card-subtitle mb-2 text-muted">Email : {{ $mahasiswa->email}}</h6>
              <p class="card-text">Jurusan : {{ $mahasiswa->jurusan}}</p>
              <p class="card-text">Jenis Kelamin : {{ $mahasiswa->jenis_kelamin}}</p>
              <p class="card-text">Tanggal Masuk : {{ $mahasiswa->tanggal_masuk}}</p>
              <p class="card-text">tanggal lulus : {{ $mahasiswa->tanggal_lulus}}</p>

              <a href="{{ url('mahasiswa', [$mahasiswa->id, 'edit']) }}" class="btn btn-success" >Edit</a>
              <form method="POST" action="{{ url('mahasiswa', [$mahasiswa->id]) }}" class="d-inline">
                  @csrf
                  @method('delete')
                  <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus ini ?')">Delete</button>
                </form>
            <a href="{{ url('mahasiswa', []) }}" class="card-link">Kembali</a>
            </div>
          </div>
          

    </div>
</div>

@endsection
