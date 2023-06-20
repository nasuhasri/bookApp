<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Books') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('Books Index Page') }}
                    
                    <a href="{{ route('book.create') }}" class="rounded-full px-2 bg-blue-500">Add Book</a>

                    <table class="table-auto mt-5">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Genre</th>
                                <th>Page Count</th>
                                <th>Created At</th>
                                <th>Updated At</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->id }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->title}}</td>
                                <td>{{ $book->genre}}</td>
                                <td>{{ $book->page_count}}</td>
                                <td>{{ $book->created_at}}</td>
                                <td>{{ $book->updated_at}}</td>
                                <td>
                                    <a href="{{ route('book.create') }}" class="rounded-full px-2 bg-yellow-500">Edit Book</a>
                                    <a href="{{ route('book.create') }}" class="rounded-full px-2 bg-red-500">Delete Book</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>