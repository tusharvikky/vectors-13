@layout('event-template')

@section('name')
	{{ $event->name; }}
@endsection

<?php //dd($event); ?>
@section('manager')
	{{ $event->manager; }}
@endsection

@section('objective')
	{{ $event->objective; }}
@endsection

@section('fee')
	{{ $event->fee; }}
@endsection

@section('date')
	{{ $event->date; }}
@endsection

@section('time')
	{{ $event->time; }}
@endsection

@section('spotentry')
	{{ $event->spotentry; }}
@endsection

@section('reentry')
	{{ $event->reentry; }}
@endsection

@section('prize')
	{{ $event->prize; }}
@endsection

@section('rules')
	{{ $event->rules; }}
@endsection

@section('certificate')
	{{ $event->certificate; }}
@endsection

@section('venue')
	{{ $event->venue; }}
@endsection

@section('tagline')
	{{ $event->tagline; }}
@endsection