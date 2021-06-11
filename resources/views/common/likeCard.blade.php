{{-- {{ trans_choice('{0} no like|{1} :count like|[2,*] :count likes', count($model->likes), ['count' => count($model->likes)]) }} --}}

{{-- <div class="form-inline p-0 m-0"> --}}

@can('like', $model)
    <form class="" action="{{ route('like') }}" method="POST">
        @csrf
        <input type="hidden" name="likeable_type" value="{{ get_class($model) }}"/>
        <input type="hidden" name="id" value="{{ $model->id }}"/>
        <button class="btn btn-block btn-xs btn-outline-success text-dark font-weight-bold">@lang('Like')</button>
    </form>
@endcan

@can('unlike', $model)
    <form class="" action="{{ route('unlike') }}" method="POST">
        @csrf
        @method('DELETE')
        <input type="hidden" name="likeable_type" value="{{ get_class($model) }}"/>
        <input type="hidden" name="id" value="{{ $model->id }}"/>
        <button class="btn btn-block btn-xs btn-outline-danger text-dark"><strong>@lang('Unlike')</strong></button>
    </form>
@endcan

{{-- </div> --}}