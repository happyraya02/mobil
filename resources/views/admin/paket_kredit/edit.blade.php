
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
                <div class="card-header">Mengubah Data paket_kredit</div>
                <div class="card-body">
                    <form action="{{ route('paket_kredit.update', $paket_kredit->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
    <div class="form-group">
        <label for="">Kode Paket</label>
        <input class="form-control" value="{{ $paket_kredit->kode_paket }}" type="text" name="kode_paket">
    </div>
    <div class="form-group">
        <label for="">Harga Paket</label>
        <input class="form-control" value="{{ $paket_kredit->harga_paket }}" type="text" name="harga_paket">
    </div>
    <div class="form-group">
        <label for="">Uang Muka</label>
        <input class="form-control" value="{{ $paket_kredit->uang_muka }}" type="text" name="uang_muka">
    </div>
    <div class="form-group">
        <label for="">Paket Jumlah Cicilan</label>
        <input class="form-control" value="{{ $paket_kredit->jumlah_cicilan }}" type="text" name="jumlah_cicilan">
    </div>
    <div class="form-group">
        <label for="">Bunga</label>
        <input class="form-control" value="{{ $paket_kredit->bunga }}" type="text" name="bunga">
    </div>
    <div class="form-group">
        <label for="">Nilai Cicilan</label>
        <input class="form-control" value="{{ $paket_kredit->nilai_cicilan }}" type="text" name="nilai_cicilan">
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