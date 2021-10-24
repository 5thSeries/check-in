<x-app-layout>
    <h1>{{ $group->name }}</h1>
    <ul>
    @foreach ($group->students as $student)
        <li>
            {{ $student->name }}
            <a href="{{ route('students.show', ['student' => $student]) }}">View</a>
            <a href="{{ route('students.edit', ['student' => $student]) }}">Edit</a>
        </li>
    @endforeach
        <li><a href="{{ route('students.create', ['group' => $group->id]) }}">Create a student</a></li>
    </ul>
</x-app-layout>
