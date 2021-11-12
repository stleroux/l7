{{-- @auth --}}
   <li class="nav-item mb-0">
      <a class="nav-link ml-2 mb-0 {{ Route::is('cart') ? 'bg-steel-light text-light' : '' }}" href="{{ route('cart') }}">
         <i class="{{ config('icons.cart') }}"></i>
         Quote Request
         <span class="badge badge-success">
            {{-- Display all items in cart --}}
            {{ Cart::count() }}
            {{-- Display unique items in cart --}}
            {{-- {{ Cart::content()->count() }} --}}
         </span>
      </a>
   </li>
{{-- @endauth --}}
