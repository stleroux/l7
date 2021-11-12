<div class="card mb-2 card-trans-4">

	<div class="card-header card_header text-light p-2 font-weight-normal">
      <i class="fa fa-fw fa-search"></i>
      Search Blog Entries
	</div>
	
   <div class="card-body card-trans-2 p-2 m-0">
      <form action="{{ route('blog.search') }}" method="POST">
         @csrf
         <div class="row px-2">
            <div class="col px-0">
               <div class="form-group mb-2">
                  <input type="text" name="search" class="form-control form-control-sm">
               </div>
               <div class="form-group mb-0">
                  <button type="submit" name="submit" class="btn btn-sm btn-primary btn-block">
                     <i class="fa fa-search"></i>
                     Search
                  </button>
               </div>
            </div>
         </div>
		</form>
   </div>

</div>
