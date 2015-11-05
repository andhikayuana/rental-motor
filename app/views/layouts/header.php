<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?=$this->configMain['name'];?></title>
    
    <link rel="shortcut icon" href="<?=$this->uri->baseUri;?>assets/images/motor.ico">

    <!-- Bootstrap Core CSS -->
    <link href="<?=$this->uri->baseUri;?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?=$this->uri->baseUri;?>assets/css/jquery.dataTables.css">

    <link rel="stylesheet" type="text/css" href="<?=$this->uri->baseUri;?>assets/css/bootstrap-datepicker.min.css">

    <!-- Custom CSS -->
    <link href="<?=$this->uri->baseUri;?>assets/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?=$this->uri->baseUri;?>assets/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?=$this->uri->baseUri;?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    

    <!-- jQuery -->
    <script src="<?=$this->uri->baseUri;?>assets/js/jquery.js"></script>

    <script type="text/javascript" src="<?=$this->uri->baseUri;?>assets/js/jquery.dataTables.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?=$this->uri->baseUri;?>assets/js/bootstrap.min.js"></script>

    <script src="<?=$this->uri->baseUri;?>assets/js/bootstrap-datepicker.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?=$this->uri->baseUri;?>assets/js/plugins/morris/raphael.min.js"></script>
    <script src="<?=$this->uri->baseUri;?>assets/js/plugins/morris/morris.min.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
            $("#dataTable").DataTable();

            $('#tgl_mulai').datepicker({
                format: "yyyy-mm-dd",
                todayBtn: "linked"
            });

            $('#tgl_akhir').datepicker({
                format: "yyyy-mm-dd",
                todayBtn: "linked"
            });

            $('#tgl_kembali').datepicker({
                format: "yyyy-mm-dd",
                todayBtn: "linked"
            });

        } );

        function getPelanggan (id) {
            var alamat = $('#frm_peminjaman #alamat');
            $.ajax({
                url:'<?=$this->location("peminjaman/getpelanggan/");?>'+id,
                type:'post',
                data:'id_pelanggan='+id,
                dataType:'json',
                success:function(d){
                    if (d.msg=='failed') {
                        alamat.val('');
                    }
                    else{
                        alamat.val(d.pelanggan[0].alamat);
                    }
                }
            })
        }

        function getInventaris (id) {
            var hrg_sewa = $('#frm_peminjaman #hrg_sewa');
            var no_polisi = $('#frm_peminjaman #no_polisi');
            var no_mesin = $('#frm_peminjaman #no_mesin');

            $.ajax({
                url:'<?=$this->location("peminjaman/getinventaris/");?>'+id,
                type:'post',
                data:'id_inventaris='+id,
                dataType:'json',
                success:function(d){
                    if (d.msg=='failed') {
                        hrg_sewa.val('');
                        no_polisi.val('');
                        no_mesin.val('');
                    }
                    else{
                        hrg_sewa.val(d.inventaris.hrg_sewa);
                        no_polisi.val(d.inventaris.no_polisi);
                        no_mesin.val(d.inventaris.no_mesin);
                    }
                }
            })
        }

        function getPeminjaman (id) {
            var pelanggan = $('#frm_pengembalian #pelanggan');
            var alamat = $('#frm_pengembalian #alamat');
            var jaminan = $('#frm_pengembalian #jaminan');
            var tgl_mulai = $('#frm_pengembalian #tgl_mulai');
            var tgl_akhir = $('#frm_pengembalian #tgl_akhir');
            var inventaris = $('#frm_pengembalian #inventaris');
            var no_polisi = $('#frm_pengembalian #no_polisi');
            var no_mesin = $('#frm_pengembalian #no_mesin');
            var hrg_sewa = $('#frm_pengembalian #hrg_sewa');

            $.ajax({
                url:'<?=$this->location("pengembalian/getpeminjaman/");?>'+id,
                type:'post',
                data:'id_peminjaman='+id,
                dataType:'json',
                success:function (d) {
                    if (d.msg=='failed') {
                        pelanggan.val('');
                        alamat.val('');
                        jaminan.val('');
                        tgl_mulai.val('');
                        tgl_akhir.val('');
                        inventaris.val('');
                        no_polisi.val('');
                        no_mesin.val('');
                        hrg_sewa.val('');
                    }
                    else{
                        pelanggan.val(d.peminjaman.pelanggan);
                        alamat.val(d.peminjaman.alamat);
                        jaminan.val(d.peminjaman.jaminan);
                        tgl_mulai.val(d.peminjaman.tgl_mulai);
                        tgl_akhir.val(d.peminjaman.tgl_akhir);
                        inventaris.val(d.peminjaman.inventaris);
                        no_polisi.val(d.peminjaman.no_polisi);
                        no_mesin.val(d.peminjaman.no_mesin);
                        hrg_sewa.val(d.peminjaman.hrg_sewa);
                    }
                }
            });
        }
    </script>

</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
