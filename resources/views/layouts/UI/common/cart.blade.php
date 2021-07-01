<li class="nav-item">
   <a class="nav-link" href="{{ route('cart') }}">
      <i class="{{ config('icons.cart') }}"></i>
      Cart
      <span class="badge badge-secondary">
         {{-- Display all items in cart --}}
         {{ Cart::count() }}
         {{-- Display unique items in cart --}}
         {{-- {{ Cart::content()->count() }} --}}
      </span>
   </a>
</li>