{{-- Profile Info --}}
<div class="card card-trans-2 mb-2">
   <div class="card-header bg-primary p-2">Profile Info</div>
   <div class="card-body p-2">
      <div class="form-row" disabled>
         <div class="col-md-3">
            @include('admin.users.form.fields.first_name', ['disabled'=>'disabled'])
         </div>
         <div class="col-md-3">
            <div class="form-group">
               @include('admin.users.form.fields.last_name', ['disabled'=>'disabled'])
            </div>
         </div>
         <div class="col-md-4">
            <div class="form-group">
               @include('admin.users.form.fields.email', ['disabled'=>'disabled'])
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               @include('admin.users.form.fields.public_email', ['disabled'=>'disabled'])
            </div>
         </div>
      </div>

      <div class="form-row">
         <div class="col-md-2">
            <div class="form-group">
               @include('admin.users.form.fields.telephone', ['disabled'=>'disabled'])
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               @include('admin.users.form.fields.cell', ['disabled'=>'disabled'])
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               @include('admin.users.form.fields.fax', ['disabled'=>'disabled'])
            </div>
         </div>
         <div class="col-md-3">
            <div class="form-group">
               @include('admin.users.form.fields.website', ['disabled'=>'disabled'])
            </div>
         </div>
      </div>

      <div class="form-row">
         <div class="col-md-6">
            <div class="form-group">
               <label for="company_name">Company Name</label>
               <input name="company_name" type="text" class="form-control" value="{{ $user->company_name }}" disabled>
               <span><small>Required if user is a client member of the Invoicer module</small></span>
            </div>
         </div>
         <div class="col-md-2">
            <div class="form-group">
               <label for="dart_doubleOut">Dart Double Out</label>
               <select name="dart_doubleOut" class="form-control" disabled>
                  <option value="{{ $user->dart_doubleOut }}" selected="selected">{{ $user->dart_doubleOut }}</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
               </select>
               <span><small>Preferred double out for Dart games</small></span>
            </div>
         </div>
      </div>
      
   </div>
</div>
