<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Progress Index") }}

                    <a href="{{ route('book.progress-add', [ 'id' => $book_id ]) }}" class="rounded-full px-2 py-1 bg-blue-500">Add Progress</a>

                    @if (count($progress) > 0)
                        <table class="table-auto mt-5 mb-5">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Reading Progress</th>
                                    <th>Start Date</th>
                                    <th>Completion Date</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Book ID</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($progress as $single_progress)
                                <tr>
                                    <td>{{ $single_progress->id }}</td>
                                    <td>{{ $single_progress->reading_progress }}</td>
                                    <td>{{ $single_progress->start_date }}</td>
                                    <td>{{ $single_progress->completion_date }}</td>
                                    <td>{{ $single_progress->created_at}}</td>
                                    <td>{{ $single_progress->updated_at }}</td>
                                    <td>{{ $single_progress->book_id }}</td>
                                </tr>                                
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="mt-2">
                            <a href="{{ route('book.progress-add', [ 'id' => $book_id ]) }}" class="rounded-full px-2 py-2 bg-blue-500">Add Progress</a>
                        </div>
                    @endif

                    <div class="mt-4">
                        <a href="{{ route('book.index') }}" class="mt-2 rounded-full px-2 py-2 bg-slate-300">Book Index</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>