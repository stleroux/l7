@can('invoicer-invoice')
   @if($invoices)

      <style>
      .table tr {
         cursor: pointer;
      }
      .hiddenRow {
         padding: 0 4px !important;
         /*background-color: #F4F4F4;*/
         background-color: #C0C0C0;
         font-size: 13px;
      }
      </style>

      {{-- <div class="card card-default collapsed-card" id="auditTrail"> --}}
      <div class="card card-default collapsed-card no-print">
         
         <div class="card-header">
            <div class="card-title">Invoices</div>
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-plus"></i>
               </button>
               <button type="button" class="btn btn-tool" data-card-widget="maximize">
                  <i class="fas fa-expand"></i>
               </button>
            </div>
         </div>

         <div class="card-body">
            <table class="table table-sm table-striped table-hover">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Status</th>
                     <th>Amount</th>
                     <th>HST</th>
                     <th>SubTotal</th>
                     <th>Deposits</th>
                     <th>Discounts</th>
                     <th>Payments</th>
                     <th>Total</th>
                     <th></th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($invoices as $invoice)
                     <tr data-toggle="collapse" data-target="#demo{{ $invoice->id }}" class="accordion-toggle">
                        <td>{{ $invoice->id }}</td>
                        <td>{{ $invoice->status }}</td>
                        <td>${{ number_format($invoice->total, 2) }}</td>
                        <td>{{ $invoice->hst }}</td>
                        <td>{{ $invoice->sub_total }}</td>
                        <td>{{ $invoice->deposits }}</td>
                        <td>{{ $invoice->discounts }}</td>
                        <td>{{ $invoice->payments }}</td>
                        <td>{{ $invoice->total }}</td>
                        <td><a href="{{ route('admin.invoicer.invoices.show', $invoice) }}" target="_blank">Show</a></td>
                     </tr>
                  @endforeach
               </tbody>
            </table>
         </div>

      </div>


      <script type="text/javascript">
         // $('.accordian-body').on('show.bs.collapse', function () {
         // $(this).closest("row.col")
            // .find(".collapse.in")
            // .not(this)
            // .collapse('toggle')
      // })

         $('.accordion-toggle').click(function(){
         $('.hiddenRow').hide();
         $(this).next('tr').find('.hiddenRow').show();
      });
      </script>

   @endif

@endcan
