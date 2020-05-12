@extends('layout.dash_master')
@section('title', 'Artikel | Kafri Bung')
@section('content')

 <!-- Content -->
<div class="content">
    
    <!-- Animated -->
    <div class="animated fadeIn">

        @if (session('msg'))
            <p class="alert alert-info">{{session('msg')}}</p>
        @endif

        <div class="row">
             @foreach ($artikels as $artikel)
                <div class="col-md-4">
                    <aside class="profile-nav alt">
                        <section class="card">
                            <div class="card-header alt bg-dark">
                                <img class="align-self-center mr-3" style="width:400px; height:200px;" alt="artikel" src="{{url($artikel->img)}}">
                            </div>

                            <div class="card-body">
                                {!! Str::limit($artikel->content, 200) !!}
                            </div>

                            <hr>

                            <div class="card-text text-sm-center">
                                <a href="/artikel/{{$artikel->id}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit"></i></a>

                                <form action="/artikel/{{$artikel->id}}" method="POST" class="d-inline-flex">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="return confirm('Hapus Data ?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>

                        </section>
                    </aside>
                </div>

             @endforeach
                

        </div>
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->   
@endsection

