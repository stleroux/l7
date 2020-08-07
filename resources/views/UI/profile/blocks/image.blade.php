<div class="card card-trans mb-2">
   <div class="card-header p-2">Profile Image</div>
   <div class="card-body p-2">
      <div class="form-row">
         <div class="col text-center">
            @if ($user->image)
               <img src="_profiles/{{ $user->image }}" height="125px" width="125px" alt="" />
            @else
               <img src="/_profiles/no_photo.jpg" height="125px" width="125px" alt="" />
            @endif
         </div>
      </div>
   </div>
</div>
