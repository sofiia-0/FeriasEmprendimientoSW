<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-extrabold text-4xl text-[#485065] dark:text-[#EAE2CF] tracking-tight drop-shadow-lg">
                {{ __('🎪 Crear Nueva Feria') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-16 bg-white dark:bg-gray-900 min-h-screen">
        <div class="max-w-md mx-auto sm:px-6 lg:px-8">
            <div class="bg-[#F5F3EA] dark:bg-[#586078] border border-transparent shadow-2xl rounded-3xl p-8 hover:scale-105 hover:shadow-3xl transition-all duration-300 relative overflow-hidden">
                <!-- Efecto decorativo -->
                <div class="absolute -top-8 -right-8 w-24 h-24 bg-gradient-to-br from-[#588B71] to-[#D24F6B] rounded-full opacity-30 pointer-events-none"></div>
                <!-- Formulario -->
                <form action="{{ route('ferias.store') }}" method="POST" class="space-y-8">
                    @csrf
                    <!-- Nombre -->
                    <div class="mb-4">
                        <label for="nombre" class="block text-sm font-semibold text-[#485065] dark:text-[#EAE2CF] mb-2">Nombre de la Feria</label>
                        <input type="text" name="nombre" id="nombre" class="mt-1 block w-full border-0 rounded-xl shadow focus:ring-2 focus:ring-[#588B71] focus:outline-none bg-white/80 dark:bg-[#EAE2CF]/10 px-4 py-3 text-[#485065] dark:text-[#EAE2CF] placeholder-gray-400" required placeholder="Ej: Feria de Innovación">
                    </div>

                    <!-- Fecha del Evento -->
                    <div class="mb-4">
                        <label for="fecha_evento" class="block text-sm font-semibold text-[#485065] dark:text-[#EAE2CF] mb-2">Fecha del Evento</label>
                        <input type="date" name="fecha_evento" id="fecha_evento" class="mt-1 block w-full border-0 rounded-xl shadow focus:ring-2 focus:ring-[#588B71] focus:outline-none bg-white/80 dark:bg-[#EAE2CF]/10 px-4 py-3 text-[#485065] dark:text-[#EAE2CF]" required>
                    </div>

                    <!-- Hora del Evento -->
                    <div class="mb-4">
                        <label for="hora_evento" class="block text-sm font-semibold text-[#485065] dark:text-[#EAE2CF] mb-2">Hora del Evento</label>
                        <input type="time" name="hora_evento" id="hora_evento" class="mt-1 block w-full border-0 rounded-xl shadow focus:ring-2 focus:ring-[#588B71] focus:outline-none bg-white/80 dark:bg-[#EAE2CF]/10 px-4 py-3 text-[#485065] dark:text-[#EAE2CF]" required>
                    </div>

                    <!-- Lugar -->
                    <div class="mb-4">
                        <label for="lugar" class="block text-sm font-semibold text-[#485065] dark:text-[#EAE2CF] mb-2">Lugar</label>
                        <input type="text" name="lugar" id="lugar" class="mt-1 block w-full border-0 rounded-xl shadow focus:ring-2 focus:ring-[#588B71] focus:outline-none bg-white/80 dark:bg-[#EAE2CF]/10 px-4 py-3 text-[#485065] dark:text-[#EAE2CF]" required placeholder="Ej: Auditorio Principal">
                    </div>

                    <!-- Descripción -->
                    <div class="mb-4">
                        <label for="descripcion" class="block text-sm font-semibold text-[#485065] dark:text-[#EAE2CF] mb-2">Descripción</label>
                        <textarea name="descripcion" id="descripcion" rows="3" class="mt-1 block w-full border-0 rounded-xl shadow focus:ring-2 focus:ring-[#588B71] focus:outline-none bg-white/80 dark:bg-[#EAE2CF]/10 px-4 py-3 text-[#485065] dark:text-[#EAE2CF] placeholder-gray-400" placeholder="Describe brevemente la feria..."></textarea>
                    </div>

                    <!-- Botón -->
                    <div>
                        <button type="submit"
                            class="w-full inline-flex justify-center py-3 px-6 border border-transparent rounded-xl shadow-lg text-lg font-bold text-white bg-[#588B71] hover:bg-[#485065] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#588B71] transition-all duration-200">
                            {{ __('Crear Feria') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
