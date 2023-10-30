@extends('dashboard.layout.main')

@section('container')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Edit Data komoditas</h2>
            <div class="card shadow mb-4">
                <div class="card-header">
                    <strong class="card-title">Form komoditas</strong>
                </div>
                <div class="card-body">
                    <form class="row" method="POST" action="/dashboard/data-komoditas/{{ $komoditas->id }}">
                        @csrf
                        @method('patch')
                        <input type="text" name="id" id="id" value="{{ $komoditas->id }}" hidden>
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Nama</label>
                                <input type="text" id="nama" name="nama" value="{{ $komoditas->nama }}" class="form-control">
                                @error('nama')
                                <p class="gtn-error" style="color: red; font-size:small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Kedalaman Air</label>
                                <input type="text" id="kedalaman" name="kedalaman" value="{{ old('kedalaman') }}" class="form-control">
                                @error('kedalaman')
                                <p class="gtn-error" style="color: red; font-size:small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Jenis air</label>
                                <input type="text" id="jenisair" name="jenisair" value="{{ $komoditas->jenisair }}" class="form-control">
                                @error('jenisair')
                                <p class="gtn-error" style="color: red; font-size:small">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">suhu air</label>
                                <input type="text" id="suhu" name="suhu" value="{{ $komoditas->suhu }}" class="form-control">
                                @error('suhu')
                                <p class="gtn-error" style="color: red; font-size:small">{{ $message }}</p>
                                @enderror
                            </div>>
                            <div class="form-group mb-3">
                                <label for="foto">Foto</label>
                                
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"
                                            id="foto">Link</span>
                                    </div>
                                    <input type="text" class="form-control" id="foto"
                                        aria-describedby="foto" name="foto" value="{{ $komoditas->foto }}"
                                        @error('foto')
                                            <p class="gtn-error" style="color: red; font-size:small">{{ $message }}</p>
                                        @enderror
                                </div>
                            </div>
                            <div class="form-group mb-3">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea id="deskripsi" class="form-control" name="deskripsi" rows="10" cols="50">{{ $komoditas->deskripsi }}</textarea>
                                @error('deskripsi')
                                <p class="gtn-error" style="color: red; font-size:small">{{ $message }}</p>
                                @enderror
                            </div>

                            <button class="btn btn-primary" type="submit">Edit Data</button>
                        </div> 
                    </form>
                </div> <!-- / .card -->
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
    </div> 
</div>

@endsection