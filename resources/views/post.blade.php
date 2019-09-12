@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Post') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('create_post') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="post_text" class="col-md-4 col-form-label text-md-right">{{ __('Content Here') }}</label>

                                <div class="col-md-6">
                                    <input id="post_text" type="text" class="form-control @error('post_text') is-invalid @enderror" name="post_text" value="{{ old('post_text') }}" required autocomplete="post_text" autofocus>

                                    @error('post_text')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Save') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                @foreach($posts as $post)
                    <h2>
                        {{ Auth::user($post->user_id)->name }}
                    </h2>
                    <p>
                        {{ $post->text }}
                    </p>
                @endforeach
            </div>
        </div>
    </div>

@endsection
