<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-6 text-center text-gray-800">Lista de amigos</h1>

    <!-- Campo de búsqueda -->
    <div class="mb-4 flex justify-center">
        <input type="text" wire:model.live.debounce.300ms="search" placeholder="Buscar por nombre o email..."
            class="w-1/2 px-4 py-2 border border-gray-300 rounded-lg shadow-sm focus:ring-2 focus:ring-blue-500 focus:outline-none" />
    </div>

    <!-- Tabla de datos -->
    <div class="overflow-x-auto">
        <table class="table-auto w-full text-sm text-left border-collapse border border-gray-200 shadow-md rounded-lg">
            <thead>
                <tr class="bg-blue-100 text-gray-700 text-center">
                    <th class="px-4 py-2 border border-gray-300">Nombre</th>
                    <th class="px-4 py-2 border border-gray-300">Email</th>
                    <th class="px-4 py-2 border border-gray-300">Teléfono</th>
                    <th class="px-4 py-2 border border-gray-300">Dirección</th>
                    <th class="px-4 py-2 border border-gray-300">Mensajes</th>
                    <th class="px-4 py-2 border border-gray-300">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($friends as $friend)
                    <tr class="hover:bg-gray-100 text-center">
                        <td class="px-4 py-3 border border-gray-300">{{ $friend->name }}</td>
                        <td class="px-4 py-3 border border-gray-300">{{ $friend->email }}</td>
                        <td class="px-4 py-3 border border-gray-300">{{ $friend->profile->phone }}</td>
                        <td class="px-4 py-3 border border-gray-300">{{ $friend->profile->direction }}</td>
                        <td class="px-4 py-3 border border-gray-300">
                            @foreach ($friend->messages as $message)
                                <p class="text-left">- {{ $message->text }}</p>
                            @endforeach
                        </td>
                        <td class="px-4 py-3 border border-gray-300 space-x-2">
                            <button wire:click="edit({{ $friend->id }})"
                                class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                                Editar
                            </button>
                            <button wire:click="delete({{ $friend->id }})"
                                class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600">
                                Eliminar
                            </button>
                            <button @click="Toaster.success('Form submitted!')">
                                Submit
                            </button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-6 text-center text-gray-500">No se encontraron resultados.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Paginación -->
    <div class="mt-6 flex justify-center">
        {{ $friends->links() }}
    </div>
</div>
