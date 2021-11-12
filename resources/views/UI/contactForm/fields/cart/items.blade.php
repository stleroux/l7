<div class="form-group">
   <label for="subject" class="">Cart Items</label>
   @foreach(Cart::content() as $row)
      <div>
         {{ $row->qty }} x {{ $row->name }}         
      </div>
   @endforeach
</div>
