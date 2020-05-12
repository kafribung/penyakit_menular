@extends('layouts.master')
@section('title', 'Tentang')
@section('content')


<!--  Contenr -->
<div class="site-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <p>
            <img src="{{asset('assets/images/kafri.jpg')}}" alt="Image" class="img-fluid">
          </p>
        </div>
        <div class="col-lg-6 pl-md-5">
          {!!$about->description!!}
        </div>
      </div>
    </div>
</div>
<!-- END Content -->

@endsection


