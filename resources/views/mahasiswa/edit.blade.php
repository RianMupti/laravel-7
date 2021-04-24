@extends('layout/master')

@section('title', 'Tambah data')

@section('main-content')
<div class="row mb-5">
  <div class="col-10">

    <h1 class="my-3">Edit Data</h1>

    <form method="POST" action="{{ url('mahasiswa', [$mahasiswa->id]) }}">
      @csrf
      @method('PATCH')
      <div class="form-group row">
        <label for="nama" class="col-sm-2 col-form-label" >Nama</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('nama') is-invalid @enderror"" name="nama" id="nama" placeholder="Masukan Nama" value="{{ $mahasiswa->nama }}">
          @error('nama') 
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="email" class="col-sm-2 col-form-label">Email</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Masukan Email" value="{{ $mahasiswa->email }}">
          @error('email') 
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="npm" class="col-sm-2 col-form-label">NPM</label>
        <div class="col-sm-10">
          <input type="text" class="form-control @error('npm') is-invalid @enderror" name="npm" id="npm" placeholder="Masukan NPM" value="{{ $mahasiswa->npm }}">
          @error('npm') 
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="tanggal_masuk" class="col-sm-2 col-form-label">Tanggal Masuk</label>
        <div class="col-sm-10">
          <input type="date" class="form-control @error('tanggal_masuk') is-invalid @enderror" name="tanggal_masuk" id="npm" placeholder="Masukan Tanggal Masuk" value="{{ $mahasiswa->tanggal_masuk }}">
          @error('tanggal_masuk') 
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label for="tanggal_lulus" class="col-sm-2 col-form-label">Tanggal Lulus</label>
        <div class="col-sm-10">
          <input type="date" class="form-control @error('tanggal_lulus') is-invalid @enderror" name="tanggal_lulus" id="npm" placeholder="Masukan Tanggal Lulus" value="{{ $mahasiswa->tanggal_lulus }}">
          @error('tanggal_lulus') 
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col-form-label col-sm-2 pt-0 ">Jenis Kelamin</div>
          <div class="col-sm-10">
            <div class="form-check">
              <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" id="exampleRadios1" value="pria" @if ($mahasiswa->jenis_kelamin == 'pria') checked @endif>
              <label class="form-check-label" for="exampleRadios1">
                Pria
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input @error('jenis_kelamin') is-invalid @enderror" type="radio" name="jenis_kelamin" id="exampleRadios2" value="wanita" @if ($mahasiswa->jenis_kelamin == 'wanita') checked @endif>
              <label class="form-check-label" for="exampleRadios2">
                Wanita
              </label>
              @error('jenis_kelamin') 
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
          </div>
        </div>
      </div>

      <div class="form-group row">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Jurusan</label>
          <div class="col-sm-10">
              <select class="custom-select @error('jurusan') is-invalid @enderror" name="jurusan">
                  <option value="{{old('jurusan')}}" >Pilih Jurusan...</option>
                  <option @if ($mahasiswa->jurusan == 'Teknik Informatika') selected @endif value="Teknik Informatika">Teknik Informatika</option>
                  <option @if ($mahasiswa->jurusan == 'Teknik Mesin') selected @endif value="Teknik Mesin">Teknik Mesin</option>
                  <option @if ($mahasiswa->jurusan == 'Teknik Elektro') selected @endif value="Teknik Elektro">Teknik Elektro</option>
                </select>
                @error('jurusan') 
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
          </div>
      </div>

      
      <div class="form-group row justify-content-end">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{ url('mahasiswa', [$mahasiswa->id]) }}" class="btn btn-warning">Kembali</a>
        </div>
      </div>
    </form>

  </div>
</div>

@endsection