<div>
    <div class="my-6">
        <div
            class="grid sm:grid-cols-2 items-center gap-16 p-8 mx-auto max-w-4xl bg-white shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-md text-[#333] font-[sans-serif]">
            <div>
                <h1 class="text-3xl font-extrabold">REGISTRANDO</h1>
                <p class="text-sm text-gray-400 mt-3">Registro de estudiantes </p>
                <div class="mt-12">
                    <a href="{{ route('students.index') }}" type='button' type="submit"
                        class="text-white bg-[#7993ae] hover:bg-gray-600 font-semibold rounded-md text-sm px-4 py-2.5 w-full">Volver</a>
                </div>
            </div>

            <form action="https://fabform.io/f/xxxxx" method="post" class="ml-auo space-y-4">
                <label for="name"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
                <input wire:model='name' type='text' name ="name" placeholder='Name'
                    class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Correo
                    electrónico</label>
                <input wire:model='email' type='email' name='email' placeholder='Email'
                    class="w-full rounded-md py-2.5 px-4 border text-sm outline-[#007bff]" />
                <label for="class_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccionar
                    clase</label>
                <select wire:model='class_id' id="class_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Elegir clase</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
                <label for="section_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Seleccionar
                    sección</label>
                <select wire:model='section_id' id="section_id"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option selected>Elegir sección</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="FR">France</option>
                    <option value="DE">Germany</option>
                </select>
                <button type='button' type="submit"
                    class="text-white bg-[#007bff] hover:bg-blue-600 font-semibold rounded-md text-sm px-4 py-2.5 w-full">Send</button>
            </form>
        </div>
    </div>
</div>
