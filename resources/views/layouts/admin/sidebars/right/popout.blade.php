{{-- <div class="list-group">
   <a href="#" class="list-group-item list-group-item-action bg-dark text-light p-1 m-0">
      <i class="{{ config('icons.add') }}"></i>
      Report a Bug
   </a>
   <a href="#" class="list-group-item list-group-item-action bg-dark text-light p-1 m-0">
      <i class="{{ config('icons.add') }}"></i>
      Create Carving
   </a>
   <a href="#" class="list-group-item list-group-item-action bg-dark text-light p-1 m-0">
      <i class="{{ config('icons.add') }}"></i>
      Create FAQ Question
   </a>
   <a href="#" class="list-group-item list-group-item-action bg-dark text-light p-1 m-0">
      <i class="{{ config('icons.add') }}"></i>
      Request a Feature
   </a>
   <a href="#" class="list-group-item list-group-item-action bg-dark text-light p-1 m-0">
      <i class="{{ config('icons.add') }}"></i>
      Create Finish
   </a>
</div> --}}


@can('invoicer-invoice')
   <a href="{{ route('admin.invoicer.invoices.create', ['type'=>'estimate']) }}" class="btn btn-sm btn-block btn-link border mt-2" title="Create Estimate">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Create Estimate
   </a>
@endcan

@can('invoicer-invoice')
   <a href="{{ route('admin.invoicer.invoices.create') }}" class="btn btn-sm btn-block btn-link border mt-2" title="Create Invoice">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Create Invoice
   </a>
@endcan

@can('invoicer-client')
   <a href="{{ route('admin.invoicer.clients.create') }}" class="btn btn-sm btn-block btn-link border" title="Create Client">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Create Client
   </a>
@endcan

@can('invoicer-product')
   <a href="{{ route('admin.invoicer.products.create') }}" class="btn btn-sm btn-block btn-link border" title="Create Product">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Create Product
   </a>
@endcan

<hr class="bg-success">

@can('bug-create')
   <a href="{{ route('admin.bugs.create') }}" class="btn btn-sm btn-block btn-link border" target="_blank" title="Report Bug">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Report a Bug
   </a>
@endcan

@can('carving-create')
   <a href="{{ route('admin.carvings.create') }}" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Tag">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Create Carving
   </a>
@endcan

@can('faq-create')
   <a href="{{ route('admin.faqs.create') }}" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Question">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Create FAQ Question
   </a>
@endcan

@can('feature-create')
   <a href="{{ route('admin.features.create') }}" class="btn btn-sm btn-block btn-link border" target="_blank" title="Request Feature">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Request a Feature
   </a>
@endcan

@can('finish-create')
   <a href="{{ route('admin.finishes.create') }}" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Finish">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Create Finish
   </a>
@endcan

@can('material-create')
   <a href="{{ route('admin.materials.create') }}" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Material">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Create Material
   </a>
@endcan

@can('post-create')
   <a href="{{ route('admin.posts.create') }}" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Post">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Create Post
   </a>
@endcan

@can('project-create')
   <a href="{{ route('admin.projects.create') }}" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Project">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Create Project
   </a>
@endcan

@can('recipe-create')
   <a href="{{ route('admin.recipes.create') }}" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Recipe">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Create Recipe
   </a>
@endcan

@can('role-create')
   <a href="{{ route('admin.roles.create') }}" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Role">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Create Role
   </a>
@endcan

@can('tag-create')
   <a href="{{ route('admin.tags.create') }}" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create Tag">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Create Tag
   </a>
@endcan

@can('user-create')
   <a href="{{ route('admin.users.create') }}" class="btn btn-sm btn-block btn-link border" target="_blank" title="Create User">
      {{-- <i class="{{ config('icons.add') }}"></i> --}}
      Create User
   </a>
@endcan

