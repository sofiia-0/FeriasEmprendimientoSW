<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-extrabold text-4xl text-[#485065] dark:text-[#EAE2CF] tracking-tight drop-shadow-lg">
                {{ __('Dashboard') }}
            </h2>
        </div>
    </x-slot>

   <div class="py-16 bg-white dark:bg-gray-900 min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#F5F3EA] dark:bg-[#586078] border border-transparent shadow-2xl rounded-3xl p-8 hover:scale-105 hover:shadow-3xl transition-all duration-300 relative overflow-hidden">
                <!-- Efecto decorativo -->
                <div class="absolute -top-8 -right-8 w-24 h-24 bg-gradient-to-br from-[#588B71] to-[#D24F6B] rounded-full opacity-30 pointer-events-none"></div>
                <!-- Perfil de usuario -->
                <h2 class="text-4xl font-bold mb-10 text-gray-900 dark:text-gray-100 text-center">Perfil de usuario</h2>
                
                <div class="space-y-6 text-gray-700 dark:text-gray-300 text-lg">
                    <div class="flex gap-4 text-left">
                        <span class="font-semibold w-48">Nombre:</span>
                        <span>{{ auth()->user()->name }}</span>
                    </div>
                    <div class="flex gap-4 text-left">
                        <span class="font-semibold w-48">Email:</span>
                        <span>{{ auth()->user()->email }}</span>
                    </div>
                    <div class="flex gap-4 text-left">
                        <span class="font-semibold w-48">Teléfono:</span>
                        <span>{{ auth()->user()->phone }}</span>
                    </div>
                    <div class="flex gap-4 text-left">
                        <span class="font-semibold w-48">Tipo de producto:</span>
                        <span>{{ auth()->user()->product_type }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
