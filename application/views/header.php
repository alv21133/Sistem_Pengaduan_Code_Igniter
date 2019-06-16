<!doctype html>
<?php
if ($_SESSION['nim'] != true ) {
    
    redirect(base_url());
    
}

?>
 <html class="no-js" lang="">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard Pengaduan</title>
    <meta name="description" content="sasori admin panel">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="apple-touch-icon" href="<?php echo base_url();?>aset/admin/img/judul.png">
    <link rel="shortcut icon" href="<?php echo base_url();?>aset/admin/img/judul.png"> 
    <link rel="stylesheet" href="<?php echo base_url();?>aset/admin/css1/normalize.css">
    <link rel="stylesheet" href="<?php echo base_url();?>aset/admin/css1/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>aset/admin/css1/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>aset/admin/css1/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url();?>aset/admin/css1/pe-icon-7-filled.css">
    <link href="<?php echo base_url();?>aset/admin/weather/css1/weather-icons.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>aset/admin/calendar/fullcalendar.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url();?>aset/admin/css1/style.css" media="all">
    <link href="<?php echo base_url();?>aset/admin/css1/charts/chartist.min.css" rel="stylesheet"> 
    <link href="<?php echo base_url();?>aset/admin/css1/lib/vector-map/jqvmap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>aset/admin/data_table/datatables.min.css">

    <style>
    #weatherWidget .currentDesc {
        color: #ffffff!important;
    }
        .traffic-chart { 
            min-height: 335px; 
        }
        #flotPie1  {
            height: 150px;
        } 
        #flotPie1 td {
            padding:3px;
        }
        #flotPie1 table {
            top: 20px!important;
            right: -10px!important;
        }
        .chart-container {
            display: table;
            min-width: 270px ;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }
        #flotLine5  {
             height: 105px;
        } 

        #flotBarChart {
            height: 150px;
        }
        #cellPaiChart{
            height: 160px;
        }

    </style>

</head>