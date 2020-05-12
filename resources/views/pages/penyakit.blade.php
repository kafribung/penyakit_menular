@extends('layouts.master')
@section('title', 'Penyakit')
@section('content')


<!--  Contenr -->
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                  <h2>Penyakit Menular</h2>
                </div>

                @foreach ($artikels as $artikel)
                    
                <div class="post-entry-2 d-flex">
                  <div class="thumbnail order-md-2" style="background-image: url({{url($artikel->img)}})"></div>
                  <div class="contents order-md-1 pl-0">
                    <h2><a href="/penyakit/show/{{$artikel->title}}">{{$artikel->title}}</a></h2>
                    <div class="mb-3">
                      {!! Str::limit($artikel->content, 300) !!}
                    </div>
                    <div class="post-meta">
                      <span class="d-block"><a href="#">Author : {{$artikel->user->name}}</a>
                      <span class="date-read">Dibuat : <span class="mx-1">&bullet;</span> {{$artikel->created_at->format('d M Y - H:i:s')}} </span></span>
                    </div>
                  </div>
                </div>
                @endforeach

                {{$artikels->links()}}

            </div>
        </div>
    </div>
</div>
<!-- END Content -->

@endsection


