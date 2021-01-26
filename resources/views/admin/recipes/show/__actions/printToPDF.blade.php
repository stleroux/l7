<a href="{{ route('recipes.printPDF', $recipe->id) }}"
   class="btn btn-block btn-default"
   title="Print Recipe to PDF">
   <i class="{{ config('icons.pdf') }}"></i>
   <div class="d-none d-lg-inline">
      Print to PDF
   </div>
</a>
