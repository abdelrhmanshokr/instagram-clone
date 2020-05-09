@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Add a new post') }}</div>

                    <div class="card-body">
                        <form method="POST" action="/p" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group row">
                                <label for="caption" class="col-md-4 col-form-label text-md-right">{{ __('post caption') }}</label>

                                <div class="col-md-6">
                                    <input id="caption" name="caption" type="text" class="form-control @error('caption') is-invalid @enderror" value="{{ old('caption') }}" autofocus>

                                    @error('caption')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Post image') }}</label>
                                <div class="col-md-6">
                                    <input type="file" class="form-control-file form-control @error('image') is-invalid @enderror" id="image" name="image">
                            
                                    @error('image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <button class="btn btn-primary form-control">Submit</button>
                                </div>
                            </div>

                            
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection