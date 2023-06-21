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
                    {{ __("Progress Add") }}

                    <form method="post" action="{{ route('book.progress-store', $book_id) }}" class="mt-6 space-y-6">
                        @csrf

                        <div>
                            <x-text-input id="book_id" name="book_id" type="hidden" value="{{ $book_id }}" />
                        </div>
                    
                        <div>
                            <x-input-label for="reading_progress" :value="__('Reading Progress')" />
                            <x-text-input id="reading_progress" name="reading_progress" type="number" class="mt-1 block w-full" required autofocus autocomplete="reading_progress" />
                            <x-input-error class="mt-2" :messages="$errors->get('reading_progress')" />
                        </div>
                        <div>
                            <x-input-label for="start_date" :value="__('Start Date')" />
                            <x-text-input id="start_date" name="start_date" type="date" class="mt-1 block w-full" required autocomplete="start_date" />
                            <x-input-error class="mt-2" :messages="$errors->get('start_date')" />
                        </div>
                        <div>
                            <x-input-label for="completion_date" :value="__('Completion Date')" />
                            <x-text-input id="completion_date" name="completion_date" type="date" class="mt-1 block w-full" required autocomplete="completion_date" />
                            <x-input-error class="mt-2" :messages="$errors->get('completion_date')" />
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