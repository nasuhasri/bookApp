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

                    <form method="post" action="{{ route('book.store') }}" class="mt-6 space-y-6">
                        @csrf
                        {{-- @method('patch') --}}
                    
                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus autocomplete="title" />
                            <x-input-error class="mt-2" :messages="$errors->get('title')" />
                        </div>
                        <div>
                            <x-input-label for="author" :value="__('Author')" />
                            <x-text-input id="author" name="author" type="text" class="mt-1 block w-full" required autofocus autocomplete="author" />
                            <x-input-error class="mt-2" :messages="$errors->get('author')" />
                        </div>
                        <div>
                            <x-input-label for="genre" :value="__('Genre')" />
                            <x-text-input id="genre" name="genre" type="text" class="mt-1 block w-full" required autofocus autocomplete="genre" />
                            <x-input-error class="mt-2" :messages="$errors->get('genre')" />
                        </div>
                        <div>
                            <x-input-label for="page_count" :value="__('Page Count')" />
                            <x-text-input id="page_count" name="page_count" type="number" class="mt-1 block w-full" autofocus autocomplete="page_count" />
                            <x-input-error class="mt-2" :messages="$errors->get('page_count')" />
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