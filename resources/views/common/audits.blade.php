@can('admin-audits')
   @if(isset($audits))

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
            <div class="card-title">Audits</div>
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
            <table class="table table-sm" style="border-collapse:collapse;">
               <thead>
                  <tr>
                     <th>#</th>
                     <th>Action</th>
                     <th>By</th>
                     <th>Date</th>
                     <th>Url</th>
                     <th>IP Address</th>
                  </tr>
               </thead>
               <tbody>
                  @foreach($audits as $audit)
                     <tr data-toggle="collapse" data-target="#demo{{ $audit->id }}" class="accordion-toggle">
                        <td>{{ $audit->id }}</td>
                        <td>{{ $audit->event }}</td>
                        <td>
                           {{ ($audit->user->username ?? 'Guest') }}
                        </td>
                        <td>{{ $audit->created_at->diffForHumans() }}</td>
                        <td>{{ $audit->url }}</td>
                        <td>{{ $audit->ip_address }}</td>                    
                     </tr>
                     <tr>
                        <td colspan="12" class="hiddenRow">
                           <div class="accordian-body collapse" id="demo{{ $audit->id }}">
                              <div class="row mt-2">
                                 <div class="col-12 mb-0">
                                    <table class="table table-sm table-bordered mb-0">
                                       <tr>
                                          <th>Browser</th>
                                          <td>{{ $audit->user_agent }}</td>
                                       </tr>
                                    </table>
                                 </div>
                                 <div class="col-6">
                                    <table class="table table-sm table-bordered table-hover">
                                       <thead>
                                          <tr>
                                             <th>Name</th>
                                             <th>Old Value</th>
                                          </tr>
                                       </thead>
                                       @foreach($audit->old_values as $attribute => $value)
                                          <tbody>
                                             <tr>
                                                <td><b>{{ $attribute }}</b></td>
                                                <td>{{ $value }}</td>
                                             </tr>
                                          </tbody>
                                       @endforeach
                                    </table>
                                 </div>
                                 <div class="col-6">
                                    <table class="table table-bordered table-hover">
                                       <thead>
                                       <tr>
                                          <th>Name</th>
                                          <th>New Value</th>
                                       </tr>
                                       </thead>
                                       @foreach($audit->new_values as $attribute => $data)
                                          <tr>
                                             <td><b>{{ $attribute }}</b></td>
                                             <td>{{ $data }}</td>
                                          </tr>
                                       @endforeach
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </td>
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
