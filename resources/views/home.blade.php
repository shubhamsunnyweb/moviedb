@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

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
					Created By :: {{ $moviedata['created_by'] }}
					Description :: {{ $moviedata['description'] }}
					Favorite Count :: {{ $moviedata['favorite_count'] }}
					Id :: {{ $moviedata['id'] }}
					<table id="example" class="table table-striped table-bordered" style="width:50%">
						<thead>
							<tr>
								<th>Poster Path</th>
								<th>Popularity</th>
								<th>Vote Count</th>
								<th>Video</th>
								<th>Media Type</th>
								<th>Id</th>
								<th>Adult</th>
								<th>Backdrop path</th>
								<th>original language</th>
								<th>original title</th>
								<th>genre ids</th>
								<th>title</th>
								<th>vote average</th>
								<th>overview</th>
								<th>release date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($moviedata['items'] as $md)
							<tr>
								<td><img src="https://image.tmdb.org/t/p/w500/{{ $md['poster_path'] }}" height="50" width="50"/></td>
								<td>{{ $md['popularity'] }}</td>
								<td>{{ $md['vote_count'] }}</td>
								<td>{{ $md['video'] }}</td>
								<td>{{ $md['media_type'] }}</td>
								<td>{{ $md['id'] }}</td>
								<td>{{ $md['adult'] }}</td>
								<td><img src="https://image.tmdb.org/t/p/w500/{{ $md['backdrop_path'] }}" height="50" width="50" /></td>
								<td>{{ $md['original_language'] }}</td>
								<td>{{ $md['original_title'] }}</td>
								<td>{{ implode(',',$md['genre_ids']) }}</td>
								<td>{{ $md['title'] }}</td>
								<td>{{ $md['vote_average'] }}</td>
								<td>{!! substr($md['overview'],0,50) !!}</td>
								<td>{{ $md['release_date'] }}</td>
								<td>
									<form action="{{url('add_favorite')}}" method="post">
									@csrf
										<input type="hidden" name="poster_path" value="https://image.tmdb.org/t/p/w500/{{ $md['poster_path'] }}" >
										<input type="hidden" name="popularity" value="{{ $md['popularity'] }}" >
										<input type="hidden" name="vote_count" value="{{ $md['vote_count'] }}" >
										<input type="hidden" name="video" value="{{ $md['video'] }}" >
										<input type="hidden" name="media_type" value="{{ $md['media_type'] }}" >
										<input type="hidden" name="movie_id" value="{{ $md['id'] }}" >
										<input type="hidden" name="adult" value="{{ $md['adult'] }}" >
										<input type="hidden" name="backdrop_path" value="https://image.tmdb.org/t/p/w500/{{ $md['backdrop_path'] }}" >
										<input type="hidden" name="original_language" value="{{ $md['original_language'] }}" >
										<input type="hidden" name="original_title" value="{{ $md['original_title'] }}" >
										<input type="hidden" name="genre_ids" value="{{ implode(',',$md['genre_ids']) }}" >
										<input type="hidden" name="title" value="{{ $md['title'] }}" >
										<input type="hidden" name="vote_average" value="{{ $md['vote_average'] }}" >
										<input type="hidden" name="overview" value="{!! $md['overview'] !!}" >
										<input type="hidden" name="release_date" value="{{ $md['release_date'] }}" >
										<input type="hidden" name="user_id" value="{{ $userid }}" >
										<button type="submit" class="btn btn-primary"> Add Favorite</button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
						<tfoot>
							<tr>
								<th>Poster Path</th>
								<th>Popularity</th>
								<th>Vote Count</th>
								<th>Video</th>
								<th>Media Type</th>
								<th>Id</th>
								<th>Adult</th>
								<th>Backdrop Path</th>
								<th>Original Language</th>
								<th>Original Title</th>
								<th>Genre Ids</th>
								<th>Title</th>
								<th>Vote Average</th>
								<th>Overview</th>
								<th>Release Date</th>
								<th>Action</th>
							</tr>
						</tfoot>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
