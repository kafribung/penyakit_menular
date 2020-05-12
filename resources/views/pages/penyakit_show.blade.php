@extends('layouts.master')
@section('title', 'Penyakit')
@section('content')


<!--  Contenr -->
<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 single-content">

                <p class="mb-5">
                    <img src="{{url($artikel->img)}}" alt="Image" class="img-fluid">
                </p>
                <h1 class="mb-4">
                    {{$artikel->title}}
                </h1>
                <div class="post-meta d-flex mb-5">
                    <div class="vcard">
                        <span class="d-block"><a href="#">Author : {{$artikel->user->name}}</a>
                        <span class="date-read">Dibuat : {{$artikel->created_at->format('d M Y - H:i:s')}} </span></span>
                    </div>
                </div>

                <div>
                    {!! $artikel->content !!}
                </div>

            </div>

        </div>
    </div>
</div>
<!-- END Content -->

@endsection


