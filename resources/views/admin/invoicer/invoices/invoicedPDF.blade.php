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
               {{ Config::get('invoicer.companyName') }}
            </div>
         </div>
         <div class="row">
            <div class="col-sm-12 text-center">
               {{ Config::get('invoicer.address_1') . ', ' }}
               {{ (Config::get('invoicer.address_2')) ? Config::get('invoicer.address_2') . ', ' : '' }}
               {{ (Config::get('invoicer.city')) ? Config::get('invoicer.city') . ', ' : '' }}
               {{ (Config::get('invoicer.state')) ? Config::get('invoicer.state') . ', ' : '' }}
               {{ (Config::get('invoicer.zip')) ? Config::get('invoicer.zip') : '' }}
               <br />
               @if(Config::get('invoicer.telephone') && (Config::get('invoicer.fax')))
                  <i class='fas fa-phone'></i> {{ Config::get('invoicer.telephone') }} &nbsp;
                  <i class="fas fa-fax"></i> {{ Config::get('invoicer.fax') }}
               @elseif(Config::get('invoicer.telephone'))
                  <i class='fas fa-phone'></i> {{ Config::get('invoicer.telephone') }}
               @elseif (Config::get('invoicer.fax'))
                  <i class="fas fa-fax"></i> {{ Config::get('invoicer.fax') }}
               @endif

               <br />
               @if(Config::get('invoicer.email') && (Config::get('invoicer.website')))
                  <i class="fas fa-at"></i> {{ Config::get('invoicer.email') }} &nbsp;
                  <i class="fas fa-newspaper"></i> {{ Config::get('invoicer.website') }}
               @elseif(Config::get('invoicer.email'))
                  <i class="fas fa-at"></i> {{ Config::get('invoicer.email') }}
               @elseif(Config::get('invoicer.website'))
                  <i class="fas fa-newspaper"></i> {{ Config::get('invoicer.website') }}
               @endif

               <br />
               @if(Config::get('invoicer.wsibNo') && (Config::get('invoicer.hstNo')))
                  WSIB N<sup>o</sup>: {{ Config::get('invoicer.wsibNo') }} &nbsp;
                  HST N<sup>o</sup>: {{ Config::get('invoicer.hstNo') }}
               @elseif(Config::get('invoicer.wsibNo'))
                  WSIB N<sup>o</sup>: {{ Config::get('invoicer.wsibNo') }}
               @elseif(Config::get('invoicer.hstNo'))
                  HST N<sup>o</sup>: {{ Config::get('invoicer.hstNo') }}
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
               <th>Billed To</th>
            </tr>
            <tr>
               <td>
                  {{ $invoice->user->company_name }}<br />
                  {{ $invoice->user->address }}<br />
                  {{ $invoice->user->city }}, {{ $invoice->user->province }}<br />
                  {{ $invoice->user->postal_code }}<br />
                  {{ $invoice->user->telephone }}
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
            <table border="0" width="100%" cellpdding="0" cellspacing="0" border="1">
               <thead>
                  <tr>
                     <th>Product 111</th>
                     <th nowrap="nowrap">Work Date</th>
                     <th>Notes</th>
                     <th align="center">Quantity</th>
                     <th align="right">Price</th>
                     <th align="right">Amount</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($invoice->invoiceItems->sortByDesc('work_date') as $item)
                     <tr>
                        <td>{{ $item->product->details }}</td>
                        <td nowrap="nowrap">{{ $item->work_date }}</td>
                        <td>{!! nl2br(e($item->notes)) !!}</td>
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
               <td colspan="2">&nbsp;</td>
            </tr>
            <tr>
               <th width="80%" align="right">Total</th>
               <td width="20%" align="right">{{ number_format($invoice->sub_total, 2, '.', ' ') }}$</td>
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
