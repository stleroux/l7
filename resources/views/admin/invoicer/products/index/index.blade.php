@extends('layouts.admin.admin')

@section('stylesheet')
@endsection

@section('pageHeader')
<i class="{{ config('icons.invoicer-products') }}"></i>
Invoicer :: Products
@if(strpos($_SERVER['REQUEST_URI'], 'search?') !== false)
[Filtered]
@endif
@endsection

@section('breadcrumb')
<li class="breadcrumb-item"><a href="{{ route('admin.invoicer') }}">Invoicer</a></li>
<li class="breadcrumb-item">Products</li>
@endsection

@section('rightSidebar')
@endsection

@section('rightColumn')
@endsection

@section('content')

@include('admin.invoicer.products.index.topbar')

<div class="row">
   <div class="col-sm-9">
      <div class="card">
               {{-- <div class="card-header">
                  <span class="h3">Products</span>
                  @if(strpos($_SERVER['REQUEST_URI'], 'search?') !== false)
                     [Filtered]
                  @endif
                  @if(checkPerm('invoicer_product_create'))
                     <span class="float-right">
                        <a href="{{ route('admin.invoicer.products.create') }}" class="btn btn-sm btn-secondary">
                           <i class="far fa-plus-square"></i>
                           Add New Product
                        </a>
                     </span>
                  @endif
               </div> --}}
               {{-- <div class="panel-body"> --}}
                  @if($products->count() > 0)
                  <table class="table table-hover table-sm">
                     <thead>
                        <tr>
                           {{-- <th>@sortablelink('id','ID')</th> --}}
                           <th>@sortablelink('code','Code')</th>
                           <th>@sortablelink('details','Details')</th>
                           @can('invoicer-product')
                           <th></th>
                           @endcan
                        </tr>
                     </thead>
                     <tbody>
                        @foreach($products as $product)
                        <tr>
                           <td>{{ $product->code }}</td>
                           <td>{{ $product->details }}</td>
                           @can('invoicer-product')
                           <td>
                              <form action="{{ route('admin.invoicer.products.destroy', [$product->id]) }}" method="POST" onsubmit="return confirm('Do you really want to delete this product?');" class="float-right">
                                 @csrf

                                 <a href="{{ route('admin.invoicer.products.show', $product->id) }}"
                                    class="btn btn-sm btn-outline-primary"
                                    data-toggle="tooltip"
                                    title="View Product">
                                    <i class="fa fa-eye"></i>
                                    {{-- View --}}
                                 </a>

                                 <a href="{{ route('admin.invoicer.products.edit', $product->id) }}"
                                    class="btn btn-sm btn-primary"
                                    data-toggle="tooltip"
                                    title="Edit Product">
                                    <i class="fa fa-edit"></i>
                                    {{-- Edit --}}
                                 </a>

                                 <input type="hidden" name="_method" value="DELETE" />

                                 <button type="submit"
                                 class="btn btn-sm btn-danger"
                                 data-toggle="tooltip"
                                 title="Trash Product"
                                 {{-- {{ $products->invoices->count() > 0 ? 'disabled' : ''}} --}}
                                 @if(DB::select('select product from invoicer__invoice_items where product = ?', [$product->details]))
                                 disabled
                                 @endif
                                 >
                                 <i class="fa fa-trash-alt"></i>
                                 {{-- {{ $product->items }} --}}
                                 {{-- Delete --}}
                              </button>
                           </form>
                        </td>
                        @endcan
                     </tr>
                     @endforeach
                  </tbody>
               </table>
               @else
               <div class="card-body">
                  No products found in the system.
               </div>
               @endif
            {{-- </div> --}}

            @if($products->count() > 0)
            <div class="card-footer">
               <div class="row">
                  <div class="col-sm-6 text-left">
                     Showing records {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }}
                  </div>
                  <div class="col-sm-6 text-right">
                     {!! $products->appends(request()->except('page'))->render() !!}
                  </div>
               </div>
            </div>
            @endif
         </div>
         
         <div>
            <small class="text-danger"><b>Note: </b>You are not able to delete a product if it belongs to an invoice.</small>
         </div>
      </div>

      <div class="col-sm-3">
         <div class="card">
            <div class="card-header">
               Filter
            </div>
            <div class="card-body pb-0">
               <form action="{{ route('admin.invoicer.products.search') }}" class="">
                  <div class="form-group">
                     <select class="form-control" name="selection">
                        <option value="code">Code</option>
                        <option value="details">Details</option>
                     </select>
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" name="searchWord">
                  </div>
                  <div class="form-group text-center">
                     <button type="submit" value="Search" class="btn btn-sm btn-primary">
                        <i class="fa fa-binoculars"></i>
                        Filter
                     </button>
                     <a href="{{ route('admin.invoicer.products') }}" class="btn btn-sm btn-outline-secondary">
                        <i class="far fa-square"></i>
                        Reset
                     </a>
                  </div>
               </form>
            </div>
            <div class="card-footer">
               Click the Reset button to clear search parameters and display all products
            </div>
         </div>
      </div>

   </div>

   @endsection
