<app-layout>
    <h1>{{ $student->name }}</h1>
    <p>{{ $student->group->name }} <a href="{{ route('groups.show', ['group' => $student->group]) }}">View</a></p>
    <ul>
        @foreach ($student->checkins as $checkin)
            <li>
                {{ $checkin->created_at }}
                {{ $checkin->emotional_status }}
            </li>
        @endforeach
    </ul>
</app-layout>
