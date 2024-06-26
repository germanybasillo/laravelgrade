<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(auth()->user()->user_type == 'teacher')
                        Welcome, Teacher!
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                    @elseif(auth()->user()->user_type == 'student')
                        Welcome, Student!
                    @else
                        Welcome!
                    @endif
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

