
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
                <div class="card-header">Mengubah Data kredit</div>
                <div class="card-body">
                    <form action="{{ route('kredit.update', $kredit->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
    <div class="form-group">
        <label for="">kode_kredit</label>
        <input class="form-control" value="{{ $kredit->kode_kredit }}" type="text" name="kode_kredit">
    </div>
    <div class="form-group">
        <label for="">KTP</label>
        <input class="form-control" value="{{ $kredit->KTP }}" type="text" name="KTP">
    </div>
    <div class="form-group">
        <label for="">kode paket</label>
        <input class="form-control" value="{{ $kredit->kode_paket }}" type="text" name="kode_paket">
    </div>
    <div class="form-group">
        <label for="">kode mobil</label>
        <input class="form-control" value="{{ $kredit->kode_mobil }}" type="text" name="kode_mobil">
    </div>
    <div class="form-group">
        <label for="">Tanggal Kredit</label>
        <input class="form-control" value="{{ $kredit->tgl_kredit }}" type="text" name="tgl_kredit">
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