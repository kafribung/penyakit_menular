@extends('layout.dash_master')
@section('title', 'Artikel Edit | Kafri Bung')
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
                                <h4 class="box-title text-center">Edit Artikel</h4>
                            </div>
                            <div class="card-body">
                                <form action="/artikel/{{$artikel->id}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-group">
                                        <label for="title" class="control-label mb-1">Title</label>
                                        <input id="title" name="title" type="text" class="form-control @error('title') is-invalid @enderror"  autofocus autocomplete="off" value="{{old('title') ? old('title') : $artikel->title}}">
    
                                        @error('title')
                                            <p class="alert alert-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="img" class="control-label mb-1">Image</label>
                                        <img src="{{url($artikel->img)}}" alt="Artikel" width="200" height="200">
                                        <input id="img" name="img" type="file" class="form-control @error('img') is-invalid @enderror" accept="image/*" autocomplete="off" value="{{old('img')}}">
    
                                        @error('img')
                                            <p class="alert alert-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label for="content" class="control-label mb-1">Content</label>
                                        <textarea id="content" name="content" class="form-control ckeditor @error('content') is-invalid @enderror" >{{old('content') ? old('content') : $artikel->content}}</textarea>
    
                                        @error('content')
                                            <p class="alert alert-danger">{{$message}}</p>
                                        @enderror
                                    </div>
    
    
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-md btn-info btn-block">Update Artikel</button>
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

