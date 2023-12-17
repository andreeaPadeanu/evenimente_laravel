@foreach($events as $event)
    <div>
        <h2>{{ $event->title }}</h2>
        <p>{{ $event->description }}</p>
        <p>Start: {{ $event->start_date }}</p>
        <p>End: {{ $event->end_date }}</p>
    </div>
@endforeach