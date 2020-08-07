<div class="form-row">
   
   {{-- NAME --}}
   <div class="form-group col-md-3">
      {{-- {{ Form::label('name', 'Name', ['class'=>'required']) }} --}}
      <label for="name" class="required">Name</label>
      {{-- {{ Form::text('name', old('name') ?? $finish->name, ['class'=>'form-control form-control-sm', disabled()] ) }} --}}
      <input type="text" name="name" value="{{ old('name') ?? $finish->name }}" class="form-control form-control-sm" />
      <div class="bg-danger">{{ $errors->first('name') }}</div>
   </div>

</div>

<div class="form-row">
   
   {{-- COLOR NAME --}}
   <div class="form-group col-md-3">
      {{-- {{ Form::label('color_name', "Color Name") }} --}}
      <label for="color_name">Color Name</label>
      {{-- {{ Form::text('color_name', old('color_name') ?? $finish->color_name, ['class'=>'form-control form-control-sm', disabled()]) }} --}}
      <input type="text" name="color_name" value="{{ old('color_name') ?? $finish->color_name }}" class="form-control form-control-sm">
      <div class="bg-danger">{{ $errors->first('color_name') }}</div>
   </div>
   
   {{-- COLOR CODE --}}
   <div class="form-group col-md-3">
      {{-- {{ Form::label('color_code', 'Color Code') }} --}}
      <label for="color_code">Color Code</label>
      {{-- {{ Form::text('color_code', old('color_code') ?? $finish->color_code, ['class'=>'form-control form-control-sm', disabled()]) }} --}}
      <input type="text" name="color_code" value="{{ old('color_code') ?? $finish->color_code }}" class="form-control form-control-sm">
      <div class="bg-danger">{{ $errors->first('color_code') }}</div>
   </div>

   {{-- SHEEN --}}
   <div class="form-group col-md-3">
      {{-- {{ Form::label('sheen', 'Sheen') }} --}}
      <label for="sheen">Sheen</label>
      <select name="sheen" id="sheen" class="form-control form-control-sm">
         @foreach($finish->sheenOptions() as $sheenOptionKey => $sheenOptionValue)
            <option value="{{$sheenOptionKey}}" {{ $finish->sheen == $sheenOptionValue ? 'selected' : '' }}>{{ $sheenOptionValue }}</option>
         @endforeach
      </select>
      <div class="bg-danger">{{ $errors->first('sheen') }}</div>
   </div>

</div>

<div class="form-row">
   
   {{-- TYPE --}}
   <div class="form-group col-md-3">
      {{-- {{ Form::label('type', 'Type') }} --}}
      <label for="type">Type</label>
      {{-- {{ Form::text('type', old('type') ?? $finish->type, ['class'=>'form-control form-control-sm', disabled()]) }} --}}
      <input type="text" name="type" value="{{ old('type') ?? $finish->type }}" class="form-control form-control-sm">
      <div class="bg-danger">{{ $errors->first('type') }}</div>
   </div>

   {{-- MANUFACTURER --}}
   <div class="form-group col-md-3">
      {{-- {{ Form::label('manufacturer','Manufacturer') }} --}}
      <label for="manufacturer">Manufacturer</label>
      {{-- {{ Form::text('manufacturer', old('manufacturer') ?? $finish->manufacturer, ['class'=>'form-control form-control-sm', disabled()]) }} --}}
      <input type="text" name="manufacturer" value="{{ old('manufacturer') ?? $finish->manufacturer }}" class="form-control form-control-sm">
      <div class="bg-danger">{{ $errors->first('manufacturer') }}</div>
   </div>
   
   {{-- UPC CODE --}}
   <div class="form-group col-md-3">
      {{-- {{ Form::label('upc', 'UPC Code') }} --}}
      <label for="upc">UPC Code</label>
      {{-- {{ Form::text('upc', old('upc') ?? $finish->upc, ['class'=>'form-control form-control-sm', disabled()]) }} --}}
      <input type="text" name="upc" value="{{ old('upc') ?? $finish->upc }}" class="form-control form-control-sm">
      <div class="bg-danger">{{ $errors->first('upc') }}</div>
   </div>

</div>

<div class="form-row">
   
   {{-- NOTES --}}
   <div class="form-group col-md-6">
      {{-- {{ Form::label('notes', 'Notes') }} --}}
      <label for="notes">Notes</label>
      {{-- {{ Form::textarea('notes', old('notes') ?? $finish->notes, ['class'=>'form-control form-control-sm', disabled()]) }} --}}
      <textarea name="notes" id="notes" class="form-control form-control-sm">{{ old('notes') ?? $finish->notes }}</textarea>
      <div class="bg-danger">{{ $errors->first('notes') }}</div>
   </div>

</div>
