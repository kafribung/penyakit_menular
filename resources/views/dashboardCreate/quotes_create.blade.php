@extends('layout.dash_master')
@section('title', 'Quote Create | Kafri Bung')
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
                                <h4 class="box-title text-center">Add Quote</h4>
                            </div>
                            <div class="card-body">
                                <form action="/quote" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="title" class="control-label mb-1">Title</label>
                                        <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror"  autofocus autocomplete="off" value="{{old('title')}}">
    
                                        @error('title')
                                            <p class="alert alert-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="description" class="control-label mb-1">description</label>
                                        <textarea id="description" name="description" class="form-control ckeditor @error('description') is-invalid @enderror" >{{old('description')}}</textarea>
    
                                        @error('description')
                                            <p class="alert alert-danger">{{$message}}</p>
                                        @enderror
                                    </div>
    
    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md btn-info btn-block">Tambah Quote</button>
                                    </div>
    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .animated -->
</div>
<!-- /.content -->   

@push('after_script')
    <script src="https://cdn.ckeditor.com/ckeditor5/19.0.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '.ckeditor' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
    </script>
@endpush
@endsection

