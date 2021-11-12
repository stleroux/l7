<div class="container pt-2">
   <div class="row justify-content-center">
      <div class="col-md-8">
         <div class="card card-trans-2">
            
            <div class="card-header bg-secondary p-1">
               <i class="{{ config('icons.login') }}"></i>
               {{ __('Login with different provider') }}
            </div>
            
            <div class="card-body">
               <div class="form-group row mb-0">
                  <div class="col text-center">
                     <a href="/login/facebook" class="btn btn-sm btn-secondary">
                        <i class="fab fa-fw fa-facebook-square" style="font-size:30px; vertical-align: middle;"></i>
                        Login with Facebook
                     </a>
                     <a href="/login/github" class="btn btn-sm btn-secondary">
                        <i class="fab fa-2x fa-github-square" style="font-size:30px; vertical-align: middle;"></i>
                        Login with GitHub
                     </a>
                     <a href="/login/google" class="btn btn-sm btn-secondary">
                        <i class="fab fa-2x fa-google-plus-square" style="font-size:30px; vertical-align: middle;"></i>
                        Login with Google
                     </a>
                  </div>
               </div>
            </div>
            
         </div>
      </div>
   </div>
</div>
