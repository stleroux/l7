<!-- PROJECTS -->

@if(Auth::user()->can('project-manage') || Auth::user()->hasRole('admin'))

   <div class="col col-md-6 col-xl-12">
      <a href="{{ route('admin.projects.index') }}">
         <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1">
               <i class="{{ config('icons.projects') }}"></i>
            </span>

            <div class="info-box-content">
               <span class="info-box-text h4">Projects</span>
               <span class="info-box-number">
                  {{-- {{ DB::table("projects")->count() }} --}}
                  Total : {{ $projectsCount }}
               </span>
            </div><!-- /.info-box-content -->
         </div><!-- /.info-box -->
      </a>
   </div><!-- /.col -->

@endif