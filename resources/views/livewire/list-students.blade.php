<div class="w-[70%] mt-7 mx-auto">
    <div class="flex items-center justify-between h-16 px-6 bg-gray-100 shadow-md rounded-lg mb-7">
        <h1 class="text-2xl font-semibold text-gray-800">Listado de Estudiantes</h1>
        <a wire:navigate href="{{ route('students.create') }}"
            class="px-6 py-2 bg-blue-600 text-white font-medium text-sm rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
            Nuevo
        </a>
    </div>
    <div
        class="overflow-hidden w-full overflow-x-auto rounded-md border border-neutral-300 dark:border-neutral-700 shadow-md ">
        <table class="w-full text-left text-sm text-neutral-600 dark:text-neutral-300">
            <thead
                class="border-b border-neutral-300 bg-neutral-50 text-sm text-neutral-900 dark:border-neutral-700 dark:bg-neutral-900 dark:text-white">
                <tr>
                    <th scope="col" class="p-4">ID</th>
                    <th scope="col" class="p-4">Nombre</th>
                    <th scope="col" class="p-4">Correo electrónico</th>
                    <th scope="col" class="p-4">Clase</th>
                    <th scope="col" class="p-4">Sección</th>
                    <th scope="col" class="p-4">Acciones</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                @forelse($students as $student)
                    <tr>
                        <td class="p-4">{{ $student->id }}</td>
                        <td class="p-4">{{ $student->name }}</td>
                        <td class="p-4">{{ $student->email }}</td>
                        <td class="p-4">{{ $student->class->name }}</td>
                        <td class="p-4">{{ $student->section->name }}</td>
                        <td class="p-4 flex justify-center">
                            <a wire:navigate href="{{ route('students.edit', $student->id) }}" type="button"
                                class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Editar</a>
                            <button wire:click="deleteStudent({{ $student->id }})" type="button"
                                wire:confirm="¿Estás seguro de que deseas eliminar este registro?"
                                class="cursor-pointer whitespace-nowrap rounded-md bg-transparent p-0.5 font-semibold text-black outline-black hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 active:opacity-100 active:outline-offset-0 dark:text-white dark:outline-white">Eliminar</button>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td>Sin registros</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="my-7">
        {{ $students->links() }}
    </div>
</div>
