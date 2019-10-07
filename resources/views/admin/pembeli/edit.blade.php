
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
                <div class="card-header">Mengubah Data pembeli</div>
                <div class="card-body">
                    <form action="{{ route('pembeli.update', $pembeli->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
    <div class="form-group">
        <label for="">KTP</label>
        <input class="form-control" value="{{ $pembeli->KTP }}" type="text" name="KTP">
    </div>
    <div class="form-group">
        <label for="">Nama Pembeli</label>
        <input class="form-control" value="{{ $pembeli->nama_pembeli }}" type="text" name="nama_pembeli">
    </div>
    <div class="form-group">
        <label for="">alamat pembeli</label>
        <input class="form-control" value="{{ $pembeli->alamat_pembeli }}" type="text" name="alamat_pembeli">
    </div>
    <div class="form-group">
        <label for="">telp pembeli</label>
        <input class="form-control" value="{{ $pembeli->telp_pembeli }}" type="text" name="telp_pembeli">
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