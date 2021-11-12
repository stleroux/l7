@php
// use CyrildeWit\EloquentViewable\Support\Period;
@endphp

<div class="card card-outline card-info text-dark mb-2">

   <div class="card-header bg-primary p-1">
      <div class="card-title">
         <i class="{{ config('icons.info') }}"></i>
         Information
      </div>
   </div>

   <div class="card-body p-0">
      <table class="table table-sm table-hover table-striped">
         <tbody class="">
            <tr>
               <th>Category</th>
               <td>{{ $carving->category }}</td>
            </tr>
            <tr>
               <th>Total Views</th>
               <td>
                  {{ views($carving)->count() }}
               </td>
            </tr>
            <tr>
               <th>Views Last Month</th>
               <td>
                  {{ views($carving)->period(CyrildeWit\EloquentViewable\Support\Period::pastMonths(1))->count() }}
               </td>
            </tr>
            <tr>
               <th>Width <small>(inches)</small></th>
               <td>{{ $carving->width ?? "N/A" }}</td>
            </tr>
            <tr>
               <th>Depth <small>(inches)</small></th>
               <td>{{ $carving->depth ?? "N/A" }}</td>
            </tr>
            <tr>
               <th>Height <small>(inches)</small></th>
               <td>{{ $carving->height ?? "N/A" }}</td>
            </tr>
            <tr>
               <th>Weight <small>(pounds)</small></th>
               <td>{{ $carving->weight ?? "N/A" }}</td>
            </tr>

            <tr>
               <th>Price</th>
                  @auth
                     <td>
                        {{-- {{ ($carving->price ? '$ ' . $carving->price . '.00' : 'Contact us for details') }} --}}
                        @if($carving->price)
                           $ {{ $carving->price }}
                        @else
                           <a href="{{ Route('contact') }}">Contact us for details</a>
                        @endif
                     </td>
                  @else
                     <td>Login for details</td>
                  @endauth
            </tr>
            <tr>
               <th>Likes</th>
               <td>{{ $carving->likes()->count() }}</td>
            </tr>
         </tbody>
      </table>
   </div>

</div>
