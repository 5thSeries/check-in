<x-app-layout>
    @foreach ($groups as $group)
        <div>
            {{ $group->name }}
            <a href="{{ route('groups.show', ['group' => $group]) }}">View</a>
            <a href="{{ route('groups.edit', ['group' => $group]) }}">Edit</a>
            {{-- <a href="{{ route('checkin-group', ['group' => $group]) }}">Check-in</a> --}}
        </div>
        @endforeach
        <a href="{{ route('groups.create') }}">Create a group</a>
</x-app-layout>
