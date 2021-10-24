<div class="grid grid-cols-3 gap-4">
    @foreach($group->students as $student)
        <button class="bg-white shadow sm:rounded-lg aspect-w-3 aspect-h-1" wire:click="selectStudent({{ $student }})">
            <div class="flex items-center justify-center">
                {{ $student->name }}
            </div>
        </button>
    @endforeach
</div>
