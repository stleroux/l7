<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Document</title>
</head>
<body>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
   <tr>
      <td colspan="6" width="50%"><h1>INVOICE</h1></td>
      <td colspan="6">
         <div class="col-sm-12">
            <div class="text-center" style="font-size: 16pt">
               {{ config('invoicer.companyName') }}
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 text-center">
               {{ config('invoicer.address_1') . ', ' }}
               {{ (Config::get('invoicer.address_2')) ? Config::get('invoicer.address_2') . ', ' : '' }}
               {{ (Config::get('invoicer.city')) ? Config::get('invoicer.city') . ', ' : '' }}
               {{ (Config::get('invoicer.state')) ? Config::get('invoicer.state') . ', ' : '' }}
               {{ (Config::get('invoicer.zip')) ? Config::get('invoicer.zip') : '' }}
               <br />
               @if(Config::get('invoicer.telephone') && (Config::get('invoicer.fax')))
                  <i class='fas fa-phone'></i> {{ config('invoicer.telephone') }} &nbsp;
                  <i class="fas fa-fax"></i> {{ config('invoicer.fax') }}
               @elseif(Config::get('invoicer.telephone'))
                  <i class='fas fa-phone'></i> {{ config('invoicer.telephone') }}
               @elseif (Config::get('invoicer.fax'))
                  <i class="fas fa-fax"></i> {{ config('invoicer.fax') }}
               @endif

               <br />
               @if(Config::get('invoicer.email') && (Config::get('invoicer.website')))
                  <i class="fas fa-at"></i> {{ config('invoicer.email') }} &nbsp;
                  <i class="fas fa-newspaper"></i> {{ config('invoicer.website') }}
               @elseif(Config::get('invoicer.email'))
                  <i class="fas fa-at"></i> {{ config('invoicer.email') }}
               @elseif(Config::get('invoicer.website'))
                  <i class="fas fa-newspaper"></i> {{ config('invoicer.website') }}
               @endif

               <br />
               @if(Config::get('invoicer.wsibNo') && (Config::get('invoicer.hstNo')))
                  WSIB N<sup>o</sup>: {{ config('invoicer.wsibNo') }} &nbsp;
                  HST N<sup>o</sup>: {{ config('invoicer.hstNo') }}
               @elseif(Config::get('invoicer.wsibNo'))
                  WSIB N<sup>o</sup>: {{ config('invoicer.wsibNo') }}
               @elseif(Config::get('invoicer.hstNo'))
                  HST N<sup>o</sup>: {{ config('invoicer.hstNo') }}
               @endif
            </div>
         </div>
      </td>
   </tr>
   <tr>
      <td colspan="12">&nbsp;</td>
   </tr>
   <tr>
      <th colspan="12">
         <h3 style="margin-top: 0px;margin-bottom: 0px; background-color: #c0c0c0">Invoice Information</h3>
      </th>
   </tr>
   <tr>
      <td colspan="6">
         <table cellspacing="0" cellpadding="0" border="0">
            <tr>
               <th align="left">Billed To</th>
            </tr>
            <tr>
               <td>
                  <table>
                     @if($invoice->client->company_name)
                        <tr>
                           <td>{{ $invoice->client->company_name }}</td>
                        </tr>
                     @endif
                     
                     <tr>
                        <td>
                           @if($invoice->client->last_name && $invoice->client->first_name)
                           {{ $invoice->client->last_name }}, {{ $invoice->client->first_name }}
                           @elseif($invoice->client->last_name && !$invoice->client->first_name)
                              {{ $invoice->client->last_name }}
                           @elseif(!$invoice->client->last_name && $invoice->client->first_name)
                              {{ $invoice->client->first_name }}
                           @endif
                        </td>
                     </tr>
                     
                     @if($invoice->client->address_1)
                        <tr>
                           <td>{{ $invoice->client->address_1 }}</td>
                        </tr>
                     @endif
                     @if($invoice->client->address_2)
                        <tr>
                           <td>{{ $invoice->client->address_2 }}</td>
                        </tr>
                     @endif
                     <tr>
                        <td>
                           @if($invoice->client->city && $invoice->client->province)
                              {{ $invoice->client->city }}, {{ $invoice->client->province }}
                           @elseif($invoice->client->city && !$invoice->client->province)
                              {{ $invoice->client->city }}
                           @elseif(!$invoice->client->city && $invoice->client->province)
                              {{ $invoice->client->province }}
                           @endif
                        </td>
                     </tr>
                     @if($invoice->client->postal_code)
                        <tr>
                           <td>{{ $invoice->client->postal_code }}</td>
                        </tr>
                     @endif
                     @if($invoice->client->telephone)
                        <tr>
                           <td>{{ $invoice->client->telephone }}</td>
                        </tr>
                     @endif
                  </table>

                  {{-- {{ ($invoice->client->company_name ?? $invoice->client->company_name) }}<br />
                  {{ ($invoice->client->last_name ?? $invoice->client->last_name) }} {{ ($invoice->client->first_name ?? ', ' . $invoice->client->first_name) }}<br />
                  {{ ($invoice->client->address_1 ?? $invoice->client->address_1) }}<br />
                  {{ ($invoice->client->address_2 ?? $invoice->client->address_2) }}<br />
                  {{ ($invoice->client->city ?? $invoice->client->city) }} {{ ($invoice->client->province ?? ', ' . $invoice->client->province) }}<br />
                  {{ ($invoice->client->postal_code ?? $invoice->client->postal_code) }}<br />
                  {{ ($invoice->client->telephone ?? $invoice->client->telephone) }} --}}
               </td>
            </tr>
         </table>
      </td>
      <td colspan="6" valign="top">
         <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
               <th width="50%" align="right">Invoice N<sup>o</sup></th>
               <td width="50%" align="right">{{ $invoice->id }}</td>
            </tr>
            <tr>
               <th width="50%" align="right">Invoice Date</th>
               <td width="50%" align="right">{{ $invoice->invoiced_at }}</td>
            </tr>
            <tr>
               <th width="50%" align="right">Paid Date</th>
               <td width="50%" align="right">{{ $invoice->paid_at }}</td>
            </tr>
         </table>
      </td>
   </tr>
   <tr>
      <td colspan="12">&nbsp;</td>
   </tr>
   <tr>
      <th colspan="12" style="background-color: #c0c0c0">Work Description</th>
   </tr>
   <tr>
      <td colspan="12">{{ $invoice->work_description ?? 'N/A' }}</td>
   </tr>
   <tr>
      <td colspan="12">&nbsp;</td>
   </tr>
   <tr>
      <th colspan="12" style="background-color: #c0c0c0;">Billable Items</th>
   </tr>
   <tr>
      <td colspan="12">
         @if($invoice->invoiceItems->count() > 0)
            <table width="100%" cellpdding="0" cellspacing="0" border="0">
            {{-- <table class=""> --}}
               <thead>
                  <tr>
                     <th align="left" width="55%">Product</th>
                     {{-- <th nowrap="nowrap">Work Date</th> --}}
                     {{-- <th>Notes</th> --}}
                     <th align="center" width="15%">Quantity</th>
                     <th align="right" width="15%">Price</th>
                     <th align="right" width="15%">Amount</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($invoice->invoiceItems->sortByDesc('work_date') as $item)
                     <tr>
                        <td>{{ $item->product }}</td>
                        {{-- <td nowrap="nowrap">{{ $item->work_date }}</td> --}}
                        {{-- <td>{!! nl2br(e($item->notes)) !!}</td> --}}
                        <td align="center" nowrap="nowrap">{{ $item->quantity }}</td>
                        <td align="right" nowrap="nowrap">{{ number_format($item->price, 2, '.', ' ') }}$</td>
                        <td align="right" nowrap="nowrap">{{ number_format($item->total, 2, '.', ' ') }}$</td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         @else
            <table cellspacing="0" cellpadding="0" border="0">
               <tr>
                  <td colspan="12">No related billable items found.</td>
               </tr>
            </table>
         @endif
      </td>
   </tr>
   <tr>
      <td colspan="12">&nbsp;</td>
   </tr>
   <tr>
      <td colspan="12">
         <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <tr>
               <th width="80%" align="right">SubTotal</th>
               <td width="20%" align="right">{{ ($invoice->amount_charged ? number_format($invoice->amount_charged, 2, '.', ' ') : '0.00') }}$</td>
            </tr>
            <tr>
               <th width="80%" align="right">HST</th>
               <td width="20%" align="right">{{ number_format($invoice->hst, 2, '.', ' ') }}$</td>
            </tr>
            <tr>
               <th width="80%" align="right">Discount</th>
               <td width="20%" align="right">{{ number_format($invoice->discounts, 2, '.', ' ') }}$</td>
            </tr>
            <tr>
               <th width="80%" align="right">Deposit</th>
               <td width="20%" align="right">{{ number_format($invoice->deposits, 2, '.', ' ') }}$</td>
            </tr>
            <tr>
               <th width="80%" align="right">Payments</th>
               <td width="20%" align="right">{{ number_format($invoice->payments, 2, '.', ' ') }}$</td>
            </tr>
{{--             <tr>
               <th width="80%" align="right">Total</th>
               <td width="20%" align="right">{{ number_format($invoice->total, 2, '.', ' ') }}$</td>
            </tr> --}}
            <tr>
               <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
               <th width="80%" align="right">Total Owing</th>
               <td width="20%" align="right">{{ number_format($invoice->total, 2, '.', ' ') }}$</td>
            </tr>
         </table>
      </td>
   </tr>


<tr>
      <td colspan="12">&nbsp;</td>
   </tr>
   <tr>
      <th colspan="12" style="background-color: #c0c0c0">Terms and Conditions</th>
   </tr>
   <tr>
      <td colspan="12">
         {{-- {!! Config::get('invoicer.termsAndConditions') !!} --}}
         @include('admin.invoicer.termsAndConditionsPDF')
      </td>
   </tr>


</table>

</body>
</html>
