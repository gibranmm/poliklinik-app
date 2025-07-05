@extends('layouts.app-dashboard')

@section('title', 'Tambah Dokter')

@section('content')
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Tambah Dokter</h1>
    <a href="{{ route('admin.dokter.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm">
      <i class="fas fa-arrow-left fa-sm text-white-50"></i> Kembali
    </a>
  </div>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Tambah Dokter</h6>
    </div>
    <div class="card-body">
      <form action="{{ route('admin.dokter.store') }}" method="POST">
        @csrf

        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" value="{{ old('username') }}" required>
          @error('username')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="nama">Nama Dokter</label>
          <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" required>
          @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="alamat">Alamat</label>
          <textarea class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" rows="3" required>{{ old('alamat') }}</textarea>
          @error('alamat')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group">
          <label for="no_hp">No. HP</label>
          <input type="text" class="form-control @error('no_hp') is-invalid @enderror" id="no_hp" name="no_hp" value="{{ old('no_hp') }}" required>
          @error('no_hp')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        
        <div class="form-group">
          <label for="id_poli">Poli</label>
          <select class="form-control @error('id_poli') is-invalid @enderror" id="id_poli" name="id_poli" required>
            <option value="" disabled selected>Pilih Poli</option>
            @foreach($polis as $poli)
              <option value="{{ $poli->id }}" {{ old('id_poli') == $poli->id ? 'selected' : '' }}>{{ $poli->nama_poli }}</option>
            @endforeach
          </select>
          @error('id_poli')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.dokter.index') }}" class="btn btn-secondary">Batal</a>
      </form>
    </div>
  </div>
@endsection
