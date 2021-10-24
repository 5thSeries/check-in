<x-app-layout>
    <div>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="shadow sm:rounded-md sm:overflow-hidden">
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <h3 class="text-xl font-medium leading-6 text-gray-900 mb-8">Create Student</h3>
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">
                            Name
                        </label>
                        <div class="mt-1">
                            <input
                                type="text"
                                id="name"
                                name="name"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                            />
                        </div>
                    </div>
                </div>
                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                    <div>
                        <label for="group_id" class="block text-sm font-medium text-gray-700">
                            Group
                        </label>
                        <div class="mt-1">
                            <select
                                type="text"
                                id="group_id"
                                name="group_id"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md"
                            >
                                @foreach($groups as $group)
                                    <option
                                        value="{{ $group->id }}"
                                        {{ ($group->id === request('group') ? 'selected="selected"' : '') }}
                                    >{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>
