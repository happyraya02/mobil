
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
                <div class="card-header">Mengubah Data cash</div>
                <div class="card-body">
                    <form action="{{ route('cash.update', $cash->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
    <div class="form-group">
        <label for="">kode cash</label>
        <input class="form-control" value="{{ $cash->kode_cash }}" type="text" name="kode_cash">
    </div>
    <div class="form-group">
        <label for="">KTP</label>
        <input class="form-control" value="{{ $cash->KTP }}" type="text" name="KTP">
    </div>
    <div class="form-group">
        <label for="">kode mobil</label>
        <input class="form-control" value="{{ $cash->kode_mobil }}" type="text" name="kode_mobil">
    </div>
    <div class="form-group">
        <label for="">cash tanggal</label>
        <input class="form-control" value="{{ $cash->cash_tgl }}" type="text" name="cash_tgl">
    </div>
    <div class="form-group">
        <label for="">cash bayar</label>
        <input class="form-control" value="{{ $cash->cash_bayar }}" type="text" name="cash_bayar">
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