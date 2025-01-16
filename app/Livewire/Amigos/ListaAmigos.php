<?php

namespace App\Livewire\Amigos;

use App\Models\Friend;
use Livewire\Component;
use Livewire\WithPagination;
use Masmerise\Toaster\Toaster;

class ListaAmigos extends Component
{
    use WithPagination;
    public $friendId;
    public $search = ''; // Campo de búsqueda
    protected $paginationTheme = 'tailwind'; // Configurar estilo de Tailwind para la paginación

    public function updatingSearch()
    {
        $this->resetPage(); // Reinicia la página al buscar
    }

    public function render()
    {
        $friends = Friend::with([
            'profile',
            'messages' => function ($query) {
                $query->latest()->take(2);
            }
        ])
            ->where('name', 'like', '%' . $this->search . '%')
            ->orWhere('email', 'like', '%' . $this->search . '%')
            ->paginate(5); // Paginación de 5 registros por página
        return view('livewire.amigos.lista-amigos', compact('friends'));
    }
    public function edit($id)
    {
        $this->friendId = Friend::findOrFail($id);

        // dd($this->friendId);
    }
    public function delete($id)
    {
        $friend = Friend::findOrFail($id);
        $friend->delete();
        Toaster::success('✅​ Usuario eliminado con éxito');
    }
}
