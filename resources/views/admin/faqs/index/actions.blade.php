      @if(!$faq->deleted_at)
         @can('faq-edit')
            <a href="{{ route('admin.faqs.edit', $faq) }}" class="btn btn-sm btn-default" title="Edit faq">
               <i class="{{ config('icons.edit') }} text-primary"></i>
               {{-- Edit --}}
            </a>
         @endcan

         @can('faq-manage')
            <button type="button"
               class="resetViews-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#resetViewsModal"
               data-id="{{ $faq->id }}"
               data-url="{{ url('admin/faqs/resetViews', $faq) }}"
               title="Reset Question Views"
               >
               <i class="{{ config('icons.resetViews') }} text-secondary"></i>
               {{-- Reset Views --}}
            </button>
         @endcan

         @can('faq-delete')
            <button type="button"
               class="destroy-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#destroyModal"
               data-id="{{ $faq->id }}"
               data-url="{{ url('admin/faqs', $faq->id) }}"
               title="Trash Question">
               <i class="{{ config('icons.trash') }} text-pink"></i>
               {{-- Trash --}}
            </button>
         @endcan
      @endif

      @if($faq->deleted_at)
         @can('faq-manage')
            <button type="button"
               class="restore-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#restoreModal"
               data-id="{{ $faq->id }}"
               data-url="{{ url('admin/faqs/restore', $faq) }}"
               title="Restore Question">
               <i class="{{ config('icons.restore') }} text-primary"></i>
               {{-- Restore --}}
            </button>

            <!-- CANNOT use a link here, must use a button -->
            <button type="button"
               class="delete-model btn btn-sm btn-default"
               data-toggle="modal"
               data-target="#deleteModal"
               data-id="{{ $faq->id }}"
               data-url="{{ url('admin/faqs/delete', $faq->id) }}"
               title="Permanently Delete Question">
               <i class="{{ config('icons.delete') }} text-danger"></i>
               {{-- Delete Permanently --}}
            </button>
         @endcan
      @endif

   </div>
</div>
