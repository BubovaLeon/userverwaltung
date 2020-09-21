@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Upcoming Events') }}</div>

                <div class="card-body">
                <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th scope="col">Title</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Date & Time</th>
                                    <th scope="col">Duration (mins)</th>
                                    <th scope="col">Creator</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            @foreach($events as $event)
                            <tbody>
                                <tr>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ $event->description }}</td>
                                    <td>{{ $event->datetime }}</td>
                                    <td>{{ $event->duration }}</td>
                                    <td>{{ $event->creator }}</td>
                                    <td>
                                        @can('edit-users')
                                        <a href=" {{ route('events.edit', $event->id) }}"><button type="button" class="btn btn-primary btn-sm float-right">Edit</button></a>
                                        @endcan

                                        @can('delete-users')
                                        <form action="{{ route('events.destroy', $event) }}" method="POST" class="float-right">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-warning btn-sm">Delete</button>
                                        </form>
                                        @endcan
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                </div>
            </div>
            <a href=" {{ route('events.create') }}"><button type="button" class="btn btn-primary float-left">Create New Event</button></a>
        </div>
    </div>
</div>
@endsection
