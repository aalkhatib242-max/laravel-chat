<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('welcome in ali alkhatib chat') }}
        </h2>
    </x-slot>

    <div class="py-12" style="text-align: center; color: white;">
            <livewire:chat/>
        
    </div>
</x-app-layout>
