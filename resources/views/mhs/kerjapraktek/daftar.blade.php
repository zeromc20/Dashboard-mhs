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
                        <h5>Daftar Kerja Praktek</h5>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-12 card-body">
                        <form method="POST" action="{{url('kerjapraktek')}}">
                            @csrf
                            <div class="form-group row">
                                <label for="nama_perusahaan" class="col-sm-4 col-form-label-lg text-md-right" >{{__('Nama Perusahaan')}}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" value="{{ old('nama_perusahaan') }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="alamat_perusahaan" class="col-sm-4 col-form-label-lg text-md-right">{{__('Alamat Perusahaan')}}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="alamat_perusahaan" name="alamat_perusahaan" value="{{old('alamat_perusahaan')}}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="nomor_surat" class="col-sm-4 col-form-label-lg text-md-right">{{__('Nomor Surat')}}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="nomor_surat" name="nomor_surat" value="{{old('nomor_surat')}}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="periode" class="col-sm-4 col-form-label-lg text-md-right">{{__('Periode ')}}</label>
                                <div>
                                    <input type="date" class="form-control col-md-1" id="periode" name="periode" value="{{old('periode')}}" required autofocus>
                                    <span class="col-form-label-lg">Sampai &ensp;</span>
                                    <input type="date" class="form-control col-md-1" id="akhir_periode" value="{{old('akhir_periode')}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="ipk" class="col-sm-4 col-form-label-lg text-md-right">{{__('IPK')}}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="ipk" name="ipk" value="{{old('ipk')}}" required autofocus>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="jumlah_sks" class="col-sm-4 col-form-label-lg text-md-right">{{__('Jumlah SKS')}}</label>
                                <div class="col-md-6">
                                    <input type="text" class="form-control" id="jumlah_sks" name="jumlah_sks" value="{{old('jumlah_sks')}}" required autofocus>
                                </div>
                            </div>
                        </form>
                    </div>                    
                </div>

@endsection