@extends('layouts.admin')

@section('css')
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/vendor/bootstrap.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/metismenu/dist/metisMenu.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/switchery-npm/index.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
<!-- ======================= LINE AWESOME ICONS ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/icons/line-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/icons/simple-line-icons.css')}}">
<!-- ======================= DRIP ICONS ===================================-->
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/icons/dripicons.min.css')}}">
<!-- ======================= MATERIAL DESIGN ICONIC FONTS =================-->
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/icons/material-design-iconic-font.min.css')}}">
<!-- ======================= PAGE VENDOR STYLES ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
<!-- ======================= GLOBAL COMMON STYLES ============================-->
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/common/main.bundle.css')}}">
<!-- ======================= LAYOUT TYPE ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/layouts/vertical/core/main.css')}}">
<!-- ======================= MENU TYPE ===========================-->
    <link rel="stylesheet" href="{{asset('assets/backend/assets/css/layouts/vertical/menu-type/default.css')}}">
<!-- ======================= THEME COLOR STYLES ===========================-->
<link rel="stylesheet" href="{{asset('assets/backend/assets/css/layouts/vertical/themes/theme-a.css')}}">
@endsection

@section('js')
<script src="{{asset('assets/backend/assets/vendor/modernizr/modernizr.custom.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/js-storage/js.storage.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/js-cookie/src/js.cookie.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/pace/pace.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/metismenu/dist/metisMenu.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/switchery-npm/index.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<!-- ================== PAGE LEVEL VENDOR SCRIPTS ==================-->
<script src="{{asset('assets/backend/assets/vendor/countup.js/dist/countUp.min.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/chart.js/dist/Chart.bundle.min.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/flot/jquery.flot.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/flot/jquery.flot.resize.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/flot/jquery.flot.time.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/flot.curvedlines/curvedLines.js')}}"></script>
<script src="{{asset('assets/backend/assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('akode_cicilan = $request->kode_cicilan;
    $bayar_cicilan->kode_kredit = $request->kode_kredit;
    $bayar_cicilan->tgl_cicilan = $request->tgl_cicilan;
    $bayar_cicilan->jumlah_cicilan = $request->jumlah_cicilan;
    $bayar_cicilan->cicilan_ke = $request->cicilan_ke;
    $bayar_cicilan->cicilan_sisa_ke = $request->cicilan_sisa_ke;
    $bayar_cicilan->cicilan_sisa_harga ssets/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- ================== GLOBAL APP SCRIPTS ==================-->
<script src="{{asset('akode_cicilan = $request->kode_cicilan;
    $bayar_cicilan->kode_kredit = $request->kode_kredit;
    $bayar_cicilan->tgl_cicilan = $request->tgl_cicilan;
    $bayar_cicilan->jumlah_cicilan = $request->jumlah_cicilan;
    $bayar_cicilan->cicilan_ke = $request->cicilan_ke;
    $bayar_cicilan->cicilan_sisa_ke = $request->cicilan_sisa_ke;
    $bayar_cicilan->cicilan_sisa_harga ssets/backend/assets/js/global/app.js')}}"></script>
<!-- ================== PAGE LEVEL SCRIPTS ==================-->
<script src="{{asset('assets/backend/assets/js/components/countUp-init.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/cards/counter-group.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/cards/recent-transactions.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/cards/monthly-budget.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/cards/users-chart.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/cards/bounce-rate-chart.js')}}"></script>
<script src="{{asset('assets/backend/assets/js/cards/session-duration-chart.js')}}"></script>
@endsection

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <center>
                        <div class="card-header">Tambah bayar_cicilan</div>
                    </center>
    
                    <div class="card-body">
                        <form action="{{route('bayar_cicilan.store')}}" method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="">Kode Cicilan</label>
                                <input class="form-control" type="text" name="kode_cicilan" id="" value="{{$bayar_cicilan->kode_cicilan}}"disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Kode Kredit</label>
                                <input class="form-control" type="text" name="kode_kredit" id="" value="{{$bayar_cicilan->kode_kredit}}"disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Tanggal Cicilan</label>
                                <input class="form-control" type="text" name="tgl_cicilan" id="" value="{{$bayar_cicilan->tgl_cicilan}}"disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Jumlah Cicilan</label>
                                <input class="form-control" type="text" name="jumlah_cicilan" id="" value="{{$bayar_cicilan->jumlah_cicilan}}"disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Cicilan Ke</label>
                                <input class="form-control" type="text" name="cicilan_ke" id="" value="{{$bayar_cicilan->cicilan_ke}}"disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Cicilan Sisa Ke</label>
                                <input class="form-control" type="text" name="cicilan_sisa_ke" id="" value="{{$bayar_cicilan->cicilan_sisa_ke}}"disabled>
                            </div>
                            <div class="form-group">
                                <label for="">Cicilan Sisa Harga</label>
                                <input class="form-control" type="text" name="cicilan_sisa_harga" id="" value="{{$bayar_cicilan->cicilan_sisa_harga}}"disabled>
                            </div>
                            <div class="form-group">
                                <a href="{{url('admin/bayar_cicilan')}}" class="btn btn-outline-info">Kembali</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection