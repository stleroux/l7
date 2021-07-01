@extends('layouts.UI.app-8')

@section('stylesheet')
   <link rel="stylesheet" href="{{ asset('css/UI/woodbarn.css') }}">
@endsection

@section('pageHeader')
   <i class="{{ config('icons.cart') }}"></i>
   Cart
@endsection

@section('breadcrumb')
   <li class="breadcrumb-item">Cart</li>
@endsection

@section('rightColumn')
   {{-- @include('UI.blocks.popularItems') --}}
@endsection

@section('content')
   
   <div class="card">
      <div class="card-body">
         @if(Cart::count())
            <table class="table table-sm table-hover">
               <thead class="thead-dark">
                  <tr>
                     {{-- <th scope="col"></th> --}}
                     {{-- <th scope="col">ID</th> --}}
                     <th scope="col">Product</th>
                     <th scope="col">Qty</th>
                     {{-- <th scope="col">Price</th> --}}
                     {{-- <th scope="col">Subtotal</th> --}}
                  </tr>
               </thead>

               <tbody>
                  @foreach(Cart::content() as $row)
                  <tr>
                     {{-- <td scope="row">{{ $row->rowId }}</td> --}}
                     {{-- <td>{{ $row->id }}</td> --}}
                     <td class="col">
                        <p><strong>{{ $row->name }}</strong></p>
                        <p>{{ ($row->options->has('size') ? $row->options->size : '') }}</p>
                     </td>
                     <td>
                        <div class="form form-inline">
                           <form>
                              <input type="number" value="{{ $row->qty }}" name="quantity" class="form-control form-control-sm col-4">
                              <button type="submit" formaction="{{ route('cart.update', $row->rowId) }}" class="btn btn-xs btn-success">Update</button>
                              <button type="submit" formaction="{{ route('cart.remove', $row->rowId) }}" class="btn btn-xs btn-danger">Delete</button>
                           </form>
                        </div>
                     </td>
                     {{-- <td>$ {{ $row->price }}</td> --}}
                     {{-- <td>$ {{ $row->total }}</td> --}}
                  </tr>
                  @endforeach
               </tbody>

               <tfoot>
                  {{-- <tr>
                     <td colspan="2">&nbsp;</td>
                     <td>Subtotal</td>
                     <td>$ {{ Cart::subtotal() }}</td>
                  </tr>
                  <tr>
                     <td colspan="2">&nbsp;</td>
                     <td>Tax</td>
                     <td>$ {{ Cart::tax() }}</td>
                  </tr>
                  <tr>
                     <td colspan="2">&nbsp;</td>
                     <td>Total</td>
                     <td>$ {{ Cart::total() }}</td>
                  </tr> --}}
               </tfoot>
            </table>

            <a href="{{ route('cart.createQuote') }}" class="btn btn-sm btn-success">Submit Quote Request</a>
            <a href="{{ route('cart.destroy') }}" class="btn btn-sm btn-default">Clear Cart</a>

         @else
            {{ config('settings.noRecordsFound') }}
         @endif

      </div>

      <div class="card-footer">
         @auth
            Once the quote request is received and reviewed, someone will get in touch to discuss the details of your request.
         @else
            Create an account to be able to submit a quote request.
         @endauth
      </div>
   </div>

@endsection