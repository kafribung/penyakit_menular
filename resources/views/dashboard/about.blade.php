@extends('layout.dash_master')
@section('title', 'About | Kafri Bung')
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
                    <div class="card-body ">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="box-title text-center">About</h4>
                                <a href="/about/create" class="btn btn-info btn-sm float-right ml-2"><i class="menu-icon fa fa-plus"></i></a>
                            </div>
                            <div class="table-bordered">
                                <table class="table w-100">
                                    <tbody>
                                        @php
                                            $angkaAwal =  1
                                        @endphp
                                        @foreach ($abouts as $about )
                                        <tr>
                                            <th>No</th>
                                            <td>{{$angkaAwal}}</td>
                                        </tr>
                                        
                                        <tr>

                                            <th>Description</th>
                                            <td>{!! $about->description !!}</td>
                                        </tr>

                                        <tr>

                                            <th>Action</th>
                                            <td>
                                                <a href="/about/{{$about->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                                                <form action="/about/{{$about->id}}" method="POST" class="d-inline-flex">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button type="submit" onclick="return confirm('Hapus Data ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                                </form>

                                            </td>
                                        </tr>
                                        @php
                                            $angkaAwal++
                                        @endphp
                                        @endforeach 
                                    </tbody>
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->   
@endsection

