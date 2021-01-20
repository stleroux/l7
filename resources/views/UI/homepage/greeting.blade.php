{{-- GREETING --}}
<div class="card card-trans-0 mb-2 border-red-2">

   <div class="card-header section_header p-2">
      <i class="{{ config('icons.tree') }}"></i>
      {{ $greeting->title }}
   </div>

   <div class="card-body card-trans-4 p-2">
      {{-- <p>Welcome to the newly redesigned TheWoodBarn.ca site.</p>
      <p>Note that the site now features a left hand side menu that will update based on your access privileges to the different sections of the site that you are currently visiting.</p>
      <p>Also, please note that the site is currently optimized for mobile and desktop browsing. We are working hard to fix the issues with the looks and feels of the different screen sizes.</p> --}}
      {!! $greeting->body !!}
   </div>

</div>
