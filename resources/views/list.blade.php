@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User Favorite List</div>

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
							<?php //echo '<pre>'; print_r($favoritelist[1]['items']); '<pre>'; die;?>
							@foreach($favoritelist as $md)
							<tr>
								<td><img src="{{ $md->poster_path }}" height="50" width="50"/></td>
								<td>{{ $md->popularity }}</td>
								<td>{{ $md->vote_count }}</td>
								<td>{{ $md->video }}</td>
								<td>{{ $md->media_type }}</td>
								<td>{{ $md->movie_id }}</td>
								<td>{{ $md->adult }}</td>
								<td><img src="{{ $md->backdrop_path }}" height="50" width="50" /></td>
								<td>{{ $md->original_language }}</td>
								<td>{{ $md->original_title }}</td>
								<td>{{ $md->genre_ids }}</td>
								<td>{{ $md->title }}</td>
								<td>{{ $md->vote_average }}</td>
								<td>{!! substr($md->overview,0,50) !!}</td>
								<td>{{ $md->release_date }}</td>
								<td>
									<a class="btn btn-primary" href="{{url('/')}}/view_favorite/{{ $md->id }}"> view</a>
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
