@extends('admin.layout.master')

@section('title', 'Notifications')

@section('content')
    <div class="container">
        <h2>Notifications</h2>
        <ul class="list-group">
            @foreach($notifications as $notification)
                <li class="list-group-item">
                    {{ $notification->message }}
                    <span class="badge badge-secondary">
                        {{ $notification->created_at->diffForHumans() }}
                    </span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
