@extends('template.MainTemplate')

@section('content')


    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="header-title m-t-0 m-b-20">Kerja Praktek</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Anda Belum Mendaftar Kerja Praktek <span class="fa-pull-right"><a class="btn btn-success" href="{{url('kerjapraktek/create')}}">Daftar Sekarang</a></span></h4>
                    </div>
                </div>

@endsection