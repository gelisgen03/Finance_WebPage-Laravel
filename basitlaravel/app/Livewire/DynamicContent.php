<?php



namespace App\Http\Livewire;

use Livewire\Component;

class DynamicContent extends Component
{
    public $page = '7g'; // Varsayılan sayfa

    public function changePage($newPage)
    {
        $this->page = $newPage;
    }

    public function render()
    {
        return view('livewire.dynamic-content', ['page' => $this->page]);
    }
}
