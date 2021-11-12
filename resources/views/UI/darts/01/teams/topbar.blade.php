<div class="row-col mb-2 text text-right">

	{{-- <div class="col"> --}}

	   <a href="{{ route('darts.index') }}" class="btn btn-primary p-1 {{ Route::is('darts') ? 'active' : '' }}">
	      <i class="fa fa-bullseye"></i>
	      Leader Board
	   </a>

	   <a href="{{ route('darts.games.board') }}"
	      class="btn btn-primary p-1 {{ Route::is('darts.games.board') ? 'active' : '' }}">
	      <i class="fa fa-industry"></i>
	      Games Board
	   </a>

	{{-- </div> --}}

   {{-- <div class="col text-right"> --}}

      <a href="#" class="btn btn-sm btn-light border" data-toggle="modal" data-target="#helpModal">
         <i class="{{ config('icons.help') }}"></i>
         Help
      </a>

   {{-- </div> --}}

</div>
