@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Event</div>

                <div class="card-body">
                        <form action="{{ route('events.store') }}" method="POST">
                                @csrf
                                <div class="form-group">    
                                <label for="title">Title:</label>
                                <input type="text" class="form-control" name="title"/>
                                </div>

                                <div class="form-group">
                                <label for="description">Description:</label>
                                <input type="text" class="form-control" name="description"/>
                                </div>

                                <div class="form-group">
                                <label for="datetime">Date & Time:</label>
                                <input type="text" class="form-control" name="datetime"/>
                                </div>
                                <div class="form-group">
                                <label for="duration">Duration:</label>
                                <input type="text" class="form-control" name="duration"/>
                                </div>
                                <button type="submit" class="btn btn-primary">
                                Create Event
                                </button>
                        </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
