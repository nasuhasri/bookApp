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
                    {{ __("Books Show Page") }}

                    <table class="mb-5">
                        <tr>
                            <td>ID</td>
                            <td>{{ $book->id }}</td>
                        </tr>
                        <tr>
                            <td>Author</td>
                            <td>{{ $book->author }}</td>
                        </tr>
                        <tr>
                            <td>Title</td>
                            <td>{{ $book->title }}</td>
                        </tr>
                        <tr>
                            <td>Genre</td>
                            <td>{{ $book->genre }}</td>
                        </tr>
                        <tr>
                            <td>Page Count</td>
                            <td>{{ $book->page_count }}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>{{ $book->status }}</td>
                        </tr>
                    </table>

                    <a href="{{ route('book.index') }}" class="rounded-full px-2 py-2 bg-blue-500">Back</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>