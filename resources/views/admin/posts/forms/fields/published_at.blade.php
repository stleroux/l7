<!-- PUBLISH DATE -->

<div class="form-group {{ $errors->has('published_at') ? 'has-error' : '' }}">

   <label for="published_at">Publish(ed) On</label>

   @if(Route::currentRouteName('') == 'admin.posts.show')

      <div class="p-1 m-0 bg-gray-light">
         {!! $post->published_at ?? 'N/A' !!}
      </div>

   @else

      <div class="input-group input-group-sm">
         <input type="text" name="published_at" value="{{ old('published_at') ?? $post->published_at }}" class="form-control form-control-sm" id="datePicker" />
         <div class="input-group-append">
            <span class="input-group-text input-group-text-sm"><i class="far fa-calendar-alt"></i></span>
         </div>
      </div>
      <div class="pl-1 bg-danger">{{ $errors->first('published_at') }}</div>

   @endif

</div>
   