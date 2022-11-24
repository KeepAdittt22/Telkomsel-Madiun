<!-- Google Font: Source Sans Pro -->
{{-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"> --}}
<link rel="stylesheet" href="{{ asset('font/SourceSansPro-Black.tft') }}">
<link rel="stylesheet" href="{{ asset('font/SourceSansPro-BlackItalic.tft') }}">
<link rel="stylesheet" href="{{ asset('font/SourceSansPro-Bold.tft') }}">
<link rel="stylesheet" href="{{ asset('font/SourceSansPro-BoldItalic.tft') }}">
<link rel="stylesheet" href="{{ asset('font/SourceSansPro-ExtraLight.tft') }}">
<link rel="stylesheet" href="{{ asset('font/SourceSansPro-ExtraLightItalic.tft') }}">
<link rel="stylesheet" href="{{ asset('font/SourceSansPro-Italic.tft') }}">
<link rel="stylesheet" href="{{ asset('font/SourceSansPro-Light.tft') }}">
<link rel="stylesheet" href="{{ asset('font/SourceSansPro-LightItalic.tft') }}">
<link rel="stylesheet" href="{{ asset('font/SourceSansPro-Regular.tft') }}">
<link rel="stylesheet" href="{{ asset('font/SourceSansPro-SemiBold.tft') }}">
<link rel="stylesheet" href="{{ asset('font/SourceSansPro-SemiBoldItalic.tft') }}">
<!-- Font Awesome Icons -->
<link rel="stylesheet" href="{{ asset ('plugins/fontawesome-free/css/all.min.css') }}">
<link rel="stylesheet" href="{{ asset ('plugins/fontawesome-free-6/css/all.min.css') }}">
 <!-- Theme style -->
<link rel="stylesheet" href="{{ asset ('dist/css/adminlte.min.css') }}">
<!-- overlayScrollbars -->
<link rel="stylesheet" href="{{ asset ('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset ('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset ('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset ('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
<!-- Toastr -->
<link rel="stylesheet" href="{{ asset ('plugins/toastr/toastr.min.css') }}">
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset ('dist/css/custom.css') }}">
<!-- Bootstrap -->
<link rel="stylesheet" href="{{ asset ('plugins/bootstrap3/bootstrap.min.css')}}">
 <!-- Select2 -->
 <link rel="stylesheet" href="{{ asset ('plugins/select2/css/select2.min.css')}}">
 <link rel="stylesheet" href="{{ asset ('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
{{-- Logo --}}
<link rel="shortcut icon" type="image/x-icon" href="{{ asset ('dist/img/Telkomsel-logo.png') }}">

<style>
    .main-header{
        background: #ff6600;
        background: -moz-linear-gradient(-45deg,  #ff6600 8%, #ea2803 25%, #ea2803 52%, #ff6600 75%, #c72200 100%);
        background: -webkit-linear-gradient(-45deg,  #ff6600 8%,#ea2803 25%,#ea2803 52%,#ff6600 75%,#c72200 100%);
        background: linear-gradient(135deg,  #ff6600 8%,#ea2803 25%,#ea2803 52%,#ff6600 75%,#c72200 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ff6600', endColorstr='#c72200',GradientType=1 );
    }

    .main-footer{
        background: #ea2803;
        background: -moz-linear-gradient(-45deg,  #c72200 8%, #ff6600 25%, #ea2803 52%, #ea2803 75%, #ff6600 100%);
        background: -webkit-linear-gradient(-45deg,  #c72200 8%,#ff6600 25%,#ea2803 52%,#ea2803 75%,#ff6600 100%);
        background: linear-gradient(135deg,  #c72200 8%,#ff6600 25%,#ea2803 52%,#ea2803 75%,#ff6600 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#c72200', endColorstr='#ff6600',GradientType=1 );
    }

.pagination>li>a,
.pagination>li>span {
    /* border:1px solid red !important; */
    background-color: #fff !important;
    color: rgb(0, 0, 0) !important;
}

.pagination>li>a:active,
.pagination>li>span:active,
.pagination>li>a:hover,
.pagination>li>span:hover {
    color: black !important;
    border: 1px solid #ea2803 !important
}
</style>