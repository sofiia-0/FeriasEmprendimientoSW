<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

   <div class="pt-20 max-w-4xl mx-auto px-6">
    <div class="bg-white dark:bg-gray-800 shadow-lg rounded-2xl p-12">
        <h2 class="text-4xl font-bold mb-10 text-gray-900 dark:text-gray-100 text-center">Perfil de usuario</h2>

        <div class="space-y-6 text-gray-700 dark:text-gray-300 text-lg">
            <div class="flex gap-4">
                <span class="font-semibold w-48">Nombre:</span>
                <span>{{ auth()->user()->name }}</span>
            </div>
            <div class="flex gap-4">
                <span class="font-semibold w-48">Email:</span>
                <span>{{ auth()->user()->email }}</span>
            </div>
            <div class="flex gap-4">
                <span class="font-semibold w-48">Teléfono:</span>
                <span>{{ auth()->user()->phone }}</span>
            </div>
            <div class="flex gap-4">
                <span class="font-semibold w-48">Tipo de producto:</span>
                <span>{{ auth()->user()->product_type }}</span>
            </div>
        </div>
    </div>
</div>

</x-app-layout>
