
@extends('layouts.admin')
@section('css')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/select2.min.js')}}"></script>
    <script src="{{ asset('backend/assets/js/components/select2-init.js')}}"></script>
    <script src="{{ asset('backend/assets/vendor/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('editorl');
    $(document).ready(function () {
        $('#select2').select2();
    })
</script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Mengubah Data mobil</div>
                <div class="card-body">
                    <form action="{{ route('mobil.update', $mobil->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
    <div class="form-group">
        <label for="">kode_mobil</label>
        <input class="form-control" value="{{ $mobil->kode_mobil }}" type="text" name="kode_mobil">
    </div>
    <div class="form-group">
        <label for="">Merk</label>
        <input class="form-control" value="{{ $mobil->merk }}" type="text" name="merk">
    </div>
    <div class="form-group">
        <label for="">Type</label>
        <input class="form-control" value="{{ $mobil->type }}" type="text" name="type">
    </div>
    <div class="form-group">
        <label for="">Warna</label>
        <input class="form-control" value="{{ $mobil->warna }}" type="text" name="warna">
    </div>
    <div class="form-group">
        <label for="">Harga mobil</label>
        <input class="form-control" value="{{ $mobil->harga_mobil }}" type="text" name="harga_mobil">
    </div>
    <div class="form-group">
        <label for="">gambar</label><br>
        <img src="{{ asset('assets/img/mobil/'.$mobil->gambar) }}" alt="" height="250px" width="250px">
        <input type="file" class="form-control" name="gambar">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-info">
        Simpan Data
        </button>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
@endsection