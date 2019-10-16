
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
                    <form action="{{ route('bayar_cicilan.update', $bayar_cicilan->id) }}" method="post">
                        <input name="_method" type="hidden" value="PATCH">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="">Kode Cicilan</label>
                            <input class="form-control" value="{{ $bayar_cicilan->kode_cicilan }}" type="text" name="kode_cicilan" >
                        </div>
                        <div class="form-group">
                            <label for="">Kode Kredit</label>
                            <input class="form-control" value="{{ $bayar_cicilan->kode_kredit }}" type="text" name="kode_kredit" >
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Cicilan</label>
                            <input class="form-control" value="{{ $bayar_cicilan->tgl_cicilan }}" type="text" name="tgl_cicilan" >
                        </div>
                        <div class="form-group">
                            <label for="">Jumlah Cicilan</label>
                            <input class="form-control" value="{{ $bayar_cicilan->jumlah_cicilan }}" type="text" name="jumlah_cicilan" >
                        </div>
                        <div class="form-group">
                            <label for="">Cicilan Ke</label>
                            <input class="form-control" value="{{ $bayar_cicilan->cicilan_ke }}" type="text" name="cicilan_ke" >
                        </div>
                        <div class="form-group">
                            <label for="">Cicilan Sisa Ke</label>
                            <input class="form-control" value="{{ $bayar_cicilan->cicilan_sisa_ke }}" type="text" name="cicilan_sisa_ke" >
                        </div>
                        <div class="form-group">
                            <label for="">Cicilan Sisa Harga</label>
                            <input class="form-control" value="{{ $bayar_cicilan->cicilan_sisa_harga }}" type="text" name="cicilan_sisa_harga" >
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