{{-- IMAGES APPLIED --}}
<div class="card card-primary mb-2">

   <div class="card-header p-1 {{ (($errors->first('image')) || $errors->first('display_name') || $errors->first('image_description')) ? 'bg-danger' : 'card_header' }}" id="showAddImage">
      Images Information
      <a class="btn btn-xs float-right">
         <i id="icon" class="fas fa-sort-down"></i>
      </a>
   </div>
   
   <div class="card-body p-0">
   
      <div class="form-row">
   
         @include('admin.projects.forms.fields.images.addImage')

         <div id="addImage" class="col-xs-12 col-md-12">
            @if(count($project->images) > 0)
               <table class="table table-sm table-hover table-striped mb-0">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Image Name</th>
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($project->images as $key => $image)
                        <tr>
                           <td>{{$key+1}}</td>
                           <td>{{ $image->display_name }}</td>
                           <td>
                              
                              <form action="{{ route('projects.image.delete', $image->id) }}" method="POST" class="float-right m-0 p-0">
                                 {{csrf_field()}}
                                 {{ method_field('DELETE') }}
                                 <input type="hidden" value="{{ $project->id }}" name="project_id">
                                 <div class="btn-group">
                                    <a href="javascript:;"
                                       data-href="/_projects/{{ $image->project_id }}/{{ $image->name }}"
                                       data-name="{{ $image->display_name }}"
                                       data-description="{{ $image->description }}"
                                       class="openmodal btn btn-xs btn-info">
                                       <i class="{{ config('icons.view') }}"></i>
                                    </a>

                                    <a class="btn btn-xs btn-primary"  data-toggle="modal" data-target="#editImageModal{{$image->id}}">
                                      <i class="{{ config('icons.edit') }}"></i>
                                    </a>


                                    <button type="submit" class="btn btn-xs btn-danger text-light">
                                       <i class="fa fa-trash"></i>
                                    </button>
                                 </div>
                              </form>
                              
                              @include('admin.projects.forms.fields.images.editImageModal')

                           </td>
                        </tr>
                     @endforeach
                  </tbody>
               </table>
            @else
               <div class="p-2">
                  No entries found
               </div>
            @endif
         </div>

      </div>

   </div>

</div>

@include('admin.projects.forms.fields.images.displayImageModal')

