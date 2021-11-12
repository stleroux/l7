<div class="card mb-2 card-trans-4 bg-primary">
   
   <div class="card-header p-2">
      Other Pages
   </div>
   
   <div class="card-body card-trans-6 p-0 m-0">

      @auth
         @if(Auth::user()->hasAnyRoles(['admin','customOrdering']))
            <a href="{{ route('carvings.customOrder.create') }}" class="card-trans-2 list-group-item list-group-item-action p-1 {{ Request::is('carvings/customOrder/*') ? 'buttonActive' : '' }}">
               Place a Custom Order
            </a>
         @endif
      @endauth

      <a href="{{ route('carvings.faq') }}" class="card-trans-2 list-group-item list-group-item-action p-1 {{ Request::is('carvings/faq') ? 'buttonActive' : '' }}">
         <i class="{{ Config::get('icons.faq') }}"></i>
         Frequently Asked Questions
      </a>

      <a href="{{ route('offerings.index') }}" class="card-trans-2 list-group-item list-group-item-action p-1 {{ Request::is('offerings') ? 'buttonActive' : '' }}">
         <i class="{{ Config::get('icons.carvings') }}"></i>
         Types of Carvings Offered
      </a>

   </div>

</div>
