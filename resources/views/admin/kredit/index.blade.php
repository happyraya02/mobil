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
                <div class="card-header">Halaman kredit</div>
                <br>
                <center><a href="{{ route('kredit.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>kode kredit</th>
                                <th>KTP</th>
                                <th>kode mobil</th>
                                <th>kode paket</th>
                                <th>kode cicilan</th>
                                <th>tanggal kredit</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($kredit as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->kode_kredit }}</td>
                    <td>{{ $data->KTP }}</td>
                    <td>{{ $data->kode_mobil }}</td>
                    <td>{{ $data->kode_paket }}</td>
                    <td>{{ $data->kode_mobil }}</td>
                    <th>{{ $data->tgl_kredit }}</th>
                    <td><a href="{{ route('kredit.edit', $data->id) }}" class="btn btn -sm btn-danger">Edit</a></td>
                    <td><a href="{{ route('kredit.show', $data->id) }}" class="btn btn -sm btn-danger">Detail</a></td>
                    <td><form action="{{ route('kredit.destroy', $data->id) }}" method="post">

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
