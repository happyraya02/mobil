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
                <div class="card-header">Halaman pembeli</div>
                <br>
                <center><a href="{{ route('pembeli.create') }}" class="btn btn-primary">Tambah</a></center>
                    <br>
                    <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>KTP</th>
                                <th>nama pembeli</th>
                                <th>alamat pembeli</th>
                                <th>telp pembeli</th>
                                <th clospan="3" style="text-align: center;">Aksi</th>
                            </tr>
                @php $no =1; @endphp
                @foreach($pembeli as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->KTP }}</td>
                    <td>{{ $data->nama_pembeli }}</td>
                    <td>{{ $data->alamat_pembeli }}</td>
                    <td>{{ $data->telp_pembeli }}</td>
                    <td><a href="{{ route('pembeli.edit', $data->id) }}" class="btn btn -sm btn-danger">Edit</a></td>
                    <td><a href="{{ route('pembeli.show', $data->id) }}" class="btn btn -sm btn-danger">Detail</a></td>
                    <td><form action="{{ route('pembeli.destroy', $data->id) }}" method="post">

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
