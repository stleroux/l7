



<?php $__env->startSection('stylesheet'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageHeader'); ?>
   <i class="<?php echo e(config('icons.search')); ?>"></i>
   <?php if($searchResults): ?>
      Advanced Search Results
   <?php else: ?>
      Advanced Search
   <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

   <div class="container">

      <div class="card collapsed-card p-2">
         <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <div class="card-header text-left text-dark">
               <div class="card-title">
                  Searching Instructions            
               </div>
               <div class="card-tools">
                     <i class="fas fa-plus"></i>
               </div>
            </div>
         </button>
         <div class="card-body">
            <p>Searching is a 2 step process.</p>
            <p>First : Select the areas on the site you wish to search in and Save the settings.</p>
            <p>Second : Enter your search term(s) in the search for field.</p>
            <p>Click on the Search button.</p>
         </div>
      </div>

      <form action="<?php echo e(route('admin.advSearchSave')); ?>" method="POST" class="">
         <?php echo csrf_field(); ?>
         
         <div class="card collapsed-card p-2">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
               <div class="card-header text-left text-dark">
                  <div class="card-title">
                     Search Criterias                     
                  </div>
                  <div class="card-tools">
                        <i class="fas fa-plus"></i>
                  </div>
               </div>
            </button>
            
            <div class="card-body">

               <div class="row">

                  <div class="col-1">
                     <label for="bugs">Bugs
                        <input
                           type="checkbox"
                           name="search_bugs"
                           id="search_bugs"
                           <?php echo e(Auth::user()->search_bugs ? 'checked="checked"' : ''); ?>

                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="carvings">Carvings                  
                        <input
                           type="checkbox"
                           name="search_carvings"
                           id="search_carvings"
                           <?php echo e(Auth::user()->search_carvings ? 'checked="checked"' : ''); ?>

                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="faqs">Faqs                  
                        <input
                           type="checkbox"
                           name="search_faqs"
                           id="search_faqs"
                           <?php echo e(Auth::user()->search_faqs ? 'checked="checked"' : ''); ?>

                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="features">Features                  
                        <input
                           type="checkbox"
                           name="search_features"
                           id="search_features"
                           <?php echo e(Auth::user()->search_features ? 'checked="checked"' : ''); ?>

                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="finishes">Finishes                  
                        <input
                           type="checkbox"
                           name="search_finishes"
                           id="search_finishes"
                           <?php echo e(Auth::user()->search_finishes ? 'checked="checked"' : ''); ?>

                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="materials">Materials                  
                        <input
                           type="checkbox"
                           name="search_materials"
                           id="search_materials"
                           <?php echo e(Auth::user()->search_materials ? 'checked="checked"' : ''); ?>

                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="movies">Movies                  
                        <input
                           type="checkbox"
                           name="search_movies"
                           id="search_movies"
                           <?php echo e(Auth::user()->search_movies ? 'checked="checked"' : ''); ?>

                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="posts">Posts                  
                        <input
                           type="checkbox"
                           name="search_posts"
                           id="search_posts"
                           <?php echo e(Auth::user()->search_posts ? 'checked="checked"' : ''); ?>

                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="projects">Projects                  
                        <input
                           type="checkbox"
                           name="search_projects"
                           id="search_projects"
                           <?php echo e(Auth::user()->search_projects ? 'checked="checked"' : ''); ?>

                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="recipes">Recipes                  
                        <input
                           type="checkbox"
                           name="search_recipes"
                           id="search_recipes"
                           <?php echo e(Auth::user()->search_recipes ? 'checked="checked"' : ''); ?>

                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="tags">Tags                  
                        <input
                           type="checkbox"
                           name="search_tags"
                           id="search_tags"
                           <?php echo e(Auth::user()->search_tags ? 'checked="checked"' : ''); ?>

                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

                  <div class="col-1">
                     <label for="users">Users                  
                        <input
                           type="checkbox"
                           name="search_users"
                           id="search_users"
                           <?php echo e(Auth::user()->search_users ? 'checked="checked"' : ''); ?>

                           class="form-control"
                           data-bootstrap-switch
                           data-off-color="danger"
                           data-off-text="No"
                           data-on-color="success"
                           data-on-text="Yes"
                        />
                     </label>
                  </div>

               </div>

            </div>

            <div class="card-footer">
               <button type="submit" class="btn btn-outline-secondary">Save Settings</button>                  
            </div>
         </div>
      </form>


      <form action="<?php echo e(route('admin.advSearch')); ?>" method="POST" class="">
         <?php echo csrf_field(); ?>
         <div class="card">

            <div class="card-body">
               <div class="row">
                  <div class="col-6">
                     <input type="text" name="query" class="form-control  <?php $__errorArgs = ['query'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Search For" aria-label="Search">
                     <?php $__errorArgs = ['query'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                           <strong><?php echo e($message); ?></strong>
                        </span>
                     <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
               </div>

            </div>

            <div class="card-footer">
               <button class="btn btn-primary col-2" type="submit">
                  <i class="fas fa-search pr-2"></i>
                  Search
               </button>
               <a href="<?php echo e(route('admin.advSearch')); ?>" class="btn btn-secondary">Clear Search Results</a>
            </div>
            
         </div>
      </form>


      <?php if($searchResults): ?>
         <div class="card card-trans-6">
            <div class="card-header"><b><?php echo e($searchResults->count()); ?> results found for "<?php echo e(request('query')); ?>"</b></div>

            <div class="card-body card-trans-4">

               <?php $__currentLoopData = $searchResults->groupByType(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type => $modelSearchResults): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <h3><?php echo e(ucfirst($type)); ?></h3>

                  <?php $__currentLoopData = $modelSearchResults; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $searchResult): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <ul class="m-0">
                        <li class=""><a href="<?php echo e($searchResult->url); ?>"><?php echo e(ucwords($searchResult->title)); ?></a></li>
                     </ul>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
         </div>
      <?php endif; ?>
   
   </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\sites\l7\resources\views/admin/search/advancedSearch.blade.php ENDPATH**/ ?>