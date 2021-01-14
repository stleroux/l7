<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Config;
use Livewire\Component;
use Livewire\WithPagination;

class MoviesTable extends Component
{
	use WithPagination;
	protected $paginationTheme = 'bootstrap';

	public $perPage;
	public $search = '';
	public $sortField = 'title';
	public $sortAsc = true;

	public function clear()
	{
		$this->search = '';
	}

	public function sortBy($field)
	{
		// if field is currently active
		if($this->sortField === $field)
		{
			// reverse the sort direction
			$this->sortAsc = ! $this->sortAsc;
		} else {
			// set the direction to true if new field is clicked on
			$this->sortAsc = true;
		}

		$this->sortField = $field;
	}

	public function render()
	{
		return view('livewire.movies-table', [
			'movies' => \App\Models\Movie::query()
				->search($this->search)
				->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc')
				->paginate($this->perPage),
		]);
	}

}
