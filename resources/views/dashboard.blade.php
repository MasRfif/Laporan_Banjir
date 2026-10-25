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
                    {{ __("You're logged in!") }}
                    <div class="mt-4 flex gap-3">
                        <a href="{{ route('laporbanjir.form') }}" class="rounded-md bg-indigo-600 px-4 py-2 text-sm text-white hover:bg-indigo-500">
                            {{ __('Kirim Laporan') }}
                        </a>
                        <a href="{{ route('laporan.index') }}" class="rounded-md border border-gray-300 px-4 py-2 text-sm text-gray-700 hover:bg-gray-50">
                            {{ __('Daftar Laporan') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
