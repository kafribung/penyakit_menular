@extends('layout.dash_master')
@section('title', 'Statistik | Kafri Bung')
@section('content')

 <!-- Content -->
<div class="content">
    
    <!-- Animated -->
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">

                @if (session('msg'))
                    <p class="alert alert-info">{{session('msg')}}</p>
                @endif

                <div class=" card ">
                    <div class="card-header ">
                        <h1>Mantap Bung</h1>
                    <div/>
                    <div class="card-body ">
                        <p>Kafribung</p>
                    <div/>

                </div>
            </div>
        </div>
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->   
@endsection

