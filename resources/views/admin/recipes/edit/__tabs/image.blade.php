{{-- IMAGE --}}
<div class="tab-pane fade" id="recipe-image" role="tabpanel" aria-labelledby="recipe-image-tab">

	<div class="col-xs-6 col-sm-2">

      <table width="100%">
         <tr>
            <th>Current Image</th>
         </tr>
         <tr>
            <td>
               @if ($recipe->image)
                  <img src="/_recipes/{{ $recipe->image }}" height="125" width="125" alt="">
               @else
                  <i class="fa fa-5x fa-ban" aria-hidden="true"></i>
               @endif
            </td>
         </tr>
      </table>

   </div>

   <div class="col-xs-6 col-sm-4">
      @include('admin.recipes.form.fields.image')
   </div>
   
</div>
