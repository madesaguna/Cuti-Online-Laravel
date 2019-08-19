@extends('hrd.app')

@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">

        </div>

        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="x_content">
                        <div class="row">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @if(session('Berhasil'))
        <div class="alert alert-success" id="peringatan">
            {{ session('Berhasil') }}
        </div>
        @endif

        @if(session('Gagal'))
        <div class="alert alert-danger" id="peringatan">
            {{ session('Gagal') }}
        </div>
        @endif

        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Daftar Hari Libur</h2>

                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div>
                        <button type="button"  class="btn btn-md btn-warning" data-toggle="modal" data-target=".modal-tambah-alternatif">Tambah Karyawan</button>
                    </div>
                    <table id="" class="datatable-fixed-header table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th nowrap align="center">No</th>
                            <th nowrap>Tanggal Libur</th>
                            <th nowrap>Keterangan</th>
                            <th nowrap></th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                        $iter=1;
                        @endphp
                        @foreach ($data_pengajuan as $k => $v)
                        <tr>
                            <td align="right">{{$iter}}</td>
                            <td nowrap>{{bulan_indo($v->event_date)}}</td>
                            <td nowrap>{{$v->description}}</td>
                            <td nowrap>@if($v->status==1)
                                <button data-toggle="modal"
                                        data-target=".modal-tambah-alternatif"
                                        data-id="{{$v->id}}"
                                        class="btn-info btn-penyetuju"> Belum Diputuskan @elseif($v->status==2)
                                    <button class="btn-danger"> Cuti Ditolak @else
                                        <button class="btn-success">Cuti Diterima @endif</button>
                            </td>
                        </tr>
                        @php
                        $iter++;
                        @endphp
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /page content -->

<!-- modals -->
<!-- Large modal -->


<div class="modal fade modal-tambah-alternatif" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Data Permohonan Cuti</h4>
            </div>
            <div class="modal-body">
                <form action="" method="post" data-parsley-validate class="form-horizontal form-label-left">
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Tanggal Libur
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="modal_dari" type="text" required="required"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Keterangan
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <input id="modal_keterangan" type="text" name="keterangan" required="required"
                                   class="form-control col-md-7 col-xs-12">
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- footer content -->
<footer>
    <div class="pull-right">
        By Admin Andreas <a href="{{asset('https://colorlib.com')}}">SMA President</a>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>

<!-- jQuery -->
<script src="{{asset('/template/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('/template/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('/template/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('/template/nprogress/nprogress.js')}}"></script>
<!-- iCheck -->
<script src="{{asset('/template/iCheck/icheck.min.js')}}"></script>
<!-- Datatables -->
<script src="{{asset('/template/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('/template/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

<script src="{{asset('/template/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>

<script src="{{asset('/template/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('/template/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('https://cdn.datatables.net/scroller/1.4.2/js/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('/template/jszip/dist/jszip.min.js')}}"></script>

<script src="{{asset('/template/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{asset('/template/nprogress/nprogress.js')}}"></script>
<!-- bootstrap-daterangepicker -->
<script src="{{asset('/template/moment/min/moment.min.js')}}"></script>
<script src="{{asset('/template/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap-datetimepicker -->
<script src="{{asset('/template/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}"></script>


<!-- Custom Theme Scripts -->
<script src="{{asset('/template/js/custom.min.js')}}"></script>
<script>

    $('.myDatepicker').datetimepicker({
        format: 'YYYY-MM-DD'
    });


    $(document).ready(function () {
        $('#dataTables-example').DataTable({
            responsive: true
        });


//waktu mundur
        var detik = 5;
        var menit = 0;

        function hitung() {
            setTimeout(hitung, 1000);
            detik--;

            if (detik < 0) {
                detik = 59;
                menit--;
                if (menit < 0) {
                    menit = 0;
                    detik = 0;
                }
                $('#peringatan').hide();
            }
        }

        hitung();
    });

    $(document).on('click', 'button.btn-penyetuju', function () {
        var nama = $(this).attr('data-nama');
        var jabatan = $(this).attr('data-jabatan');
        var dari = $(this).attr('data-dari');
        var sampai = $(this).attr('data-sampai');
        var lama = $(this).attr('data-lama');
        var keterangan = $(this).attr('data-keterangan');


        var action = '/hrd/' + $(this).attr('data-id');

        $('#modal_nama').val(nama);
        $('#modal_jabatan').val(jabatan);
        $('#modal_dari').val(dari);
        $('#modal_sampai').val(sampai);
        $('#modal_lama').val(lama + " hari");
        $('#modal_keterangan').val(keterangan);
        $(".edit_form").attr("action", action);

    });


</script>

</body>
</html>
@endsection
