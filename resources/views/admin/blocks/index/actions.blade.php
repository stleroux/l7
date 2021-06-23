{{-- @if(!$data->deleted_at) --}}

   {{-- @include('admin.blocks.actions.grid.edit')
   @include('admin.blockss.actions.grid.destroy') --}}
   @include('admin.actions.grid.edit', ['modelName'=>'block', 'model'=>$block])
   {{-- <a href="{{ route('admin.blocks.update', $block) }}"
      class="btn btn-sm btn-default"
      data-toggle="tooltip"
      title="Edit Setting">
      <i class="{{ config('icons.edit') }} text-primary"></i> --}}
      {{-- Edit --}}
   {{-- </a> --}}
   {{-- @include('admin.actions.grid.destroy', ['modelName'=>'block', 'model'=>$block]) --}}
   {{-- @include('admin.actions.grid.destroy', $block) --}}

{{-- @endif --}}

{{-- @if($block->deleted_at) --}}

   @can('blocks-manage')
      @include('admin.actions.grid.restore', ['modelName'=>'blocks', 'model'=>$block])
      @include('admin.actions.grid.delete', ['modelName'=>'blocks', 'model'=>$block])
   @endcan

{{-- @endif --}}
