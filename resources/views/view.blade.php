@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">View</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
					@if(session()->has('message'))
						<div class="alert alert-success">
							{{ session()->get('message') }}
						</div>
					@endif
                    You are logged in!
					<br/>
					<label>Poster</label> :: <img src="{{ $favoritedata->poster_path }}" height="100" width="100"> <br/>
					<label>Popularity</label> :: {{ $favoritedata->popularity }} <br/>
					<label>Vote count</label> :: {{ $favoritedata->vote_count }} <br/>
					<label>Video</label> :: {{ $favoritedata->video }} <br/>
					<label>Media type</label> :: {{ $favoritedata->media_type }} <br/>
					<label>Movie id</label> :: {{ $favoritedata->movie_id }} <br/>
					<label>Adult</label> :: {{ $favoritedata->adult }} <br/>
					<label>Backdrop</label> :: <img src="{{ $favoritedata->backdrop_path }}" height="100" width="100"> <br/>
					<label>Original language</label> :: {{ $favoritedata->original_language }} <br/>
					<label>Original title</label> :: {{ $favoritedata->original_title }} <br/>
					<label>Genre ids</label> :: {{ $favoritedata->genre_ids }} <br/>
					<label>Title</label> :: {{ $favoritedata->title }} <br/>
					<label>Vote average</label> :: {{ $favoritedata->vote_average }} <br/>
					<label>Overview</label> :: {!! $favoritedata->overview !!} <br/>
					<label>Release date</label> :: {{ $favoritedata->release_date }} <br/>
					<label>Your Favorite Since</label> :: {{ $favoritedata->created_at }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
