{{-- OTHER INFORMATION --}}
<div class="card">
   <div class="card-header card_header p-1">Other Information</div>
   <div class="card-body section_body p-2">

      <div class="form-row pb-2">

         <div class="col-xs-12 col-sm-6 col-md-3">
            <label for="width">Width <small>(Inches)</small></label>
            <span class="float-right">
               <i class="fa fa-question-circle" title="Dimensions from left to right when facing the item"></i>
            </span>
            <div class="input-group input-group-sm">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon2">
                     <i class="fas fa-ruler-horizontal"></i>
                  </span>
               </div>
               <input type="number" name="width" class="form-control form-control-sm">
            </div>
            <div class="pl-1 bg-danger">{{ $errors->first('width') }}</div>
         </div>

         <div class="col-xs-12 col-sm-6 col-md-3">
            <label for="depth">Depth <small>(Inches)</small></label>
            <span class="float-right">
               <i class="fa fa-question-circle" title="Dimensions from front to back when facing the item"></i>
            </span>
            <div class="input-group input-group-sm">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon2">
                     <i class="fas fa-ruler"></i>
                  </span>
               </div>
               <input type="number" name="depth" class="form-control form-control-sm">
            </div>
            <div class="pl-1 bg-danger">{{ $errors->first('depth') }}</div>
         </div>

         <div class="col-xs-12 col-sm-6 col-md-3">
            <label for="height">Height <small>(Inches)</small></label>
            <span class="float-right">
               <i class="fa fa-question-circle" title="Dimensions from the floor up when facing the item"></i>
            </span>
            <div class="input-group input-group-sm">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon2">
                     <i class="fas fa-ruler-vertical"></i>
                  </span>
               </div>
               <input type="number" name="height" class="form-control form-control-sm">
            </div>
            <div class="pl-1 bg-danger">{{ $errors->first('height') }}</div>
         </div>

         <div class="col-xs-12 col-sm-6 col-md-3">
            <label for="weight">Weight <small>(In Lbs)</small></label>
            <span class="float-right">
               <i class="fa fa-question-circle" title="Total weight of the item"></i>
            </span>
            <div class="input-group input-group-sm">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon2">
                     <i class="fas fa-balance-scale"></i>
                  </span>
               </div>
               <input type="number" name="weight" class="form-control form-control-sm">
            </div>
            <div class="pl-1 bg-danger">{{ $errors->first('weight') }}</div>
         </div>

      </div>
      
      <div class="form-row pb-2">
         <div class="col-xs-12 col-sm-6 col-md-4">
            <label for="completed_at">Completed Date</label>
            <div class="input-group input-group-sm">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon2">
                     <i class="fa fa-calendar" aria-hidden="true"></i>
                  </span>
               </div>
               {{-- {{ Form::text('completed_at', null, ['class'=>'form-control form-control-sm', ]) }} --}}
               <input type="text" name="completed_at" class="form-control form-control-sm" id="datePicker">
            </div>
            <div class="pl-1 bg-danger">{{ $errors->first('completed_at') }}</div>
         </div>

         <div class="col-xs-12 col-sm-6 col-md-3">
            <label for="price">Price</label>
            <div class="input-group input-group-sm">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon2">
                     <i class="fas fa-dollar-sign"></i>
                  </span>
               </div>
               <input type="number" name="price" class="form-control form-control-sm">
            </div>
            <div class="pl-1 bg-danger">{{ $errors->first('price') }}</div>
         </div>

         <div class="col-xs-12 col-sm-6 col-md-3">
            <label for="time_invested">Shop Time <small>(Hrs)</small></label>
            <div class="input-group input-group-sm">
               <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon2">
                     <i class="far fa-clock"></i>
                  </span>
               </div>
               <input type="number" name="time_invested" class="form-control form-control-sm">
            </div>
            <div class="pl-1 bg-danger">{{ $errors->first('time_invested') }}</div>
         </div>
         
      </div>

   </div>
</div>