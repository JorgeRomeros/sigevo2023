<?php
namespace App\Trait;

use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;

trait TableTrait
{
    use LivewireAlert;
    use WithPagination;
	protected $paginationTheme = 'bootstrap';
    public function sortByColumn($column)
    {
        if ($this->sortColumn == $column) {
            $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
        } else {
            $this->reset('sortDirection');
            $this->sortColumn = $column;
        }
    }
}
