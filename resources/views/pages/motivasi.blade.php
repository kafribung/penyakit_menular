@extends('layouts.master')
@section('title', 'Motivasi')
@section('content')


<!-- Info -->

<div class="site-section subscribe bg-light">
    <div class="container">
    <h3>"Random Motivasi"</h3>


@foreach ($quotes as $quote)

        <form action="#" class="row align-items-center">
            <div class="col-md-12 mr-auto">
                <h2>{{$quote->title}}</h2>
                {!! $quote->description !!}
            </div>
        </form>

@endforeach
</div>


</div>

<!-- End Info -->

@endsection


