{{-- IMAGES APPLIED --}}
<div class="card card-primary mb-2">

   <div class="card-header p-1 {{ (($errors->first('image')) || $errors->first('image_description')) ? 'bg-danger' : 'card_header' }}" id="showAddImage">
      Images Information
      <a class="btn btn-xs float-right">
         <i id="icon" class="fas fa-sort-down"></i>
      </a>
   </div>
   
   <div class="card-body p-0">
   
      <div class="form-row">
   
         <div id="addImage" class="col-10 offset-1 pt-2" style="display: none;">
            <div class="card card-outline card-primary mb-2">
               <div class="card-header p-2">Add Image</div>
               <div class="card-body p-2">
                  {{-- <form action="{{ route('projects.addImage', $project->id) }}" method="post" enctype="multipart/form-data" > --}}
                  <form action="{{ route('projects.image.store', $project->id) }}" method="post" enctype="multipart/form-data" >
                     <input name="_token" type="hidden" value="{{ csrf_token() }}"/>

                     {{-- <div class="col-sm-12"> --}}
                        <div class="form-group pb-2 mb-0">
                           <label for="image" class="required">Image</label>
                           {{-- {{ Form::file('image', ['class'=>'form-control form-control-sm p-0']) }} --}}
                           <input type="file" name="image" class="form-control form-control-sm p-0">
                           <div class="pl-1 bg-danger">{{ $errors->first('image') }}</div>
                        </div>
                     {{-- </div> --}}

                     {{-- <div class="col-sm-12"> --}}
                        <div class="form-group pb-2 mb-0">
                           <label for="image_description" class="required">Description</label>
                           {{-- {{ Form::textarea('image_description', null, ['id' => 'image_description', 'rows' => 4, 'cols' => 20, 'class'=>'form-control form-control-sm p-0']) }} --}}
                           <textarea name="image_description" id="image_description" cols="20" rows="4" class="form-control form-control-sm p-0"></textarea>
                           <div class="pl-1 bg-danger">{{ $errors->first('image_description') }}</div>
                        </div>
                     {{-- </div> --}}

                     {{-- <div class="col-sm-12"> --}}
                        <div class="form-group pb-0 mb-0">
                           <button type="submit" class="btn btn-sm btn-secondary btn-block">Add</button>
                        </div>
                     {{-- </div> --}}

                  </form>
               </div>
            </div>
         </div>

         <div id="addImage" class="col-xs-12 col-md-12">
            @if(count($project->images) > 0)
               <table class="table table-sm table-hover table-striped mb-0">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Image</th>
                        {{-- <th>Main</th> --}}
                        <th></th>
                     </tr>
                  </thead>
                  <tbody>
                     @foreach($project->images as $key => $image)
                        <tr>
                           <td>{{$key+1}}</td>
                           <td>{{ $image->name }}</td>
                           <td>
                              <form action="{{ route('projects.image.delete', $image->id) }}" method="POST" class="float-right m-0 p-0">
                                 {{csrf_field()}}
                                 {{ method_field('DELETE') }}
                                 <div class="btn-group">
                                    <a href="javascript:;"
                                       data-href="/_projects/{{ $image->project_id }}/{{ $image->name }}"
                                       data-name="{{ $image->name }}"
                                       data-description="{{ $image->description }}"
                                       class="openmodal btn btn-xs btn-primary text-light">
                                       <i class="far fa-eye"></i>
                                    </a>
                                    <input type="hidden" value="{{ $project->id }}" name="project_id">
                                    <button type="submit" class="btn btn-xs btn-danger text-light">
                                       <i class="fa fa-trash"></i>
                                    </button>
                                 </div>
                              </form>
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


<!-- Modal -->
<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <div class="modal-content">
         <div class="modal-header">
            <h5 id="title"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body text-center">
            <img src="" class="mx-auto mw-100" />
            <p id="description"></p>
         </div>
         <div class="modal-footer p-1">
            <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
