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
                    {{ __("Books Add Page") }}

                    <form method="post" action="{{ route('book.update', $book->id) }}" class="mt-6 space-y-6">
                        @csrf
                        {{-- @method('patch') --}}
                    
                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" :value="old('title', $book->title)" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div>
                            <x-input-label for="author" :value="__('Author')" />
                            <x-text-input id="author" name="author" type="text" class="mt-1 block w-full" :value="old('author', $book->author)" required autocomplete="author" />
                            <x-input-error class="mt-2" :messages="$errors->get('author')" />
                        </div>
                        <div>
                            <x-input-label for="genre" :value="__('Genre')" />
                            <x-text-input id="genre" name="genre" type="text" class="mt-1 block w-full" :value="old('genre', $book->genre)" required autocomplete="genre" />
                            <x-input-error class="mt-2" :messages="$errors->get('genre')" />
                        </div>
                        <div>
                            <x-input-label for="page_count" :value="__('Page Count')" />
                            <x-text-input id="page_count" name="page_count" type="number" class="mt-1 block w-full" :value="old('page_count', $book->page_count)" autocomplete="page_count" required />
                            <x-input-error class="mt-2" :messages="$errors->get('page_count')" />
                        </div>
                        <div>
                            <x-input-label for="status" :value="__('Status')" />
                            <select id="status" name="status" autocomplete="status"
                                class="mt-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                <option value="">Please Select</option>
                                <option value="reading" <?= ($book->status === 'reading') ? 'selected' : '' ?>>Reading</option>
                                <option value="read" <?= ($book->status === 'read') ? 'selected' : '' ?>>Read</option>
                                <option value="to read" <?= ($book->status === 'to read') ? 'selected' : '' ?>>To Read</option>
                            </select>
                            <x-input-error class="mt-2" :messages="$errors->get('status')" />
                        </div>
                    
                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Save') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>