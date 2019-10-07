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
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Halaman bayar_cicilan</div>
                <br>
                <center><a href="{{ route('bayar_cicilan.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>kode cicilan</th>
                                <th>kode kredit</th>
                                <th>tanggal cicilan</th>
                                <th>jumlah cicilan</th>
                                <th>cicilan ke</th>
                                <th>cicilan sisa ke</th>
                                <th>cicilan sisa harga</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($bayar_cicilan as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->kode_cicilan }}</td>
                    <td>{{ $data->kode_kredit }}</td>
                    <td>{{ $data->tgl_cicilan }}</td>
                    <td>{{ $data->jumlah_cicilan }}</td>
                    <td>{{ $data->cicilan_ke }}</td>
                    <td>{{ $data->cicilan_sisa_ke }}</td>
                    <td>{{ $data->cicilan_sisa_harga }}</td>
                    <td><a href="{{ route('bayar_cicilan.edit', $data->id) }}" class="btn btn -sm btn-danger">Edit</a></td>
                    <td><a href="{{ route('bayar_cicilan.show', $data->id) }}" class="btn btn -sm btn-danger">Detail</a></td>
                    <td><form action="{{ route('bayar_cicilan.destroy', $data->id) }}" method="post">

                         {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn -sm btn-danger" type="submit">Hapus</button>
                    </form>
                    </td>
                </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
