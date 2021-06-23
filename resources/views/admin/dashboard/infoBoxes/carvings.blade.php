<!-- CARVINGS -->

@if(Auth::user()->can('carving-manage') || Auth::user()->hasRole('admin'))

   <div class="col col-md-6 col-xl-12">
      <a href="{{ route('admin.carvings.index') }}">
         <div class="info-box mb-3">
            <span class="info-box-icon bg-steel elevation-1">
               <i class="{{ config('icons.carvings') }}"></i>
            </span>

            <div class="info-box-content">
               <span class="info-box-text h4">Carvings</span>
               <span class="info-box-number">
                  Total : 
                  {{ $carvingsCount }}
               </span>
            </div><!-- /.info-box-content -->
         </div><!-- /.info-box -->
      </a>
   </div><!-- /.col -->

@endif