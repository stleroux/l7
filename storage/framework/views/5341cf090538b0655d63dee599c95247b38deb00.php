<?php echo $__env->make('admin.projects.edit.sections.stylesheet', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.projects.edit.sections.pageHeader', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.projects.edit.sections.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.projects.edit.sections.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.projects.edit.sections.functions', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.projects.edit.sections.formBegin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.projects.edit.sections.formEnd', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->startSection('content'); ?>

   <div class="form-row">
      <div class="col-md-6">
         <?php echo $__env->make('admin.projects.fields.general', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <div class="col-md-6">
         <?php echo $__env->make('admin.projects.fields.others', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
   </div>

   <div class="card-footer pt-1 pb-1 pl-2">
      Fields marked with an <span class="required"></span> are required
   </div>

   <?php echo $__env->make('admin.projects.help', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('secondary'); ?>
   <div class="form-row">
      <div class="col-md-4">
         <?php echo $__env->make('admin.projects.fields.finishes.finishes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <div class="col-md-4">
         <?php echo $__env->make('admin.projects.fields.materials.materials', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
      <div class="col-md-4">
         <?php echo $__env->make('admin.projects.fields.images.images', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      </div>
   </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

   <script>
      $(document).ready(function(){
         $("div#showAddMaterial").click(function(){
            $("div#addMaterial").toggle();
            $("i#icon", this).toggleClass("fas fa-caret-up fas fa-sort-down");
         });
         $('div#showAddMaterial').css('cursor', 'pointer');
      });
   </script>

   <script>
      $(document).ready(function(){
         $("div#showAddFinish").click(function(){
            $("div#addFinish").toggle();
            $("i#icon", this).toggleClass("fas fa-caret-up fas fa-sort-down");
         });
         $('div#showAddFinish').css('cursor', 'pointer');
      });
   </script>

   <script>
      $(document).ready(function(){
         $("div#showAddImage").click(function(){
            $("div#addImage").toggle();
            $("i#icon", this).toggleClass("fas fa-caret-up fas fa-sort-down");
         });
         $('div#showAddImage').css('cursor', 'pointer');
      });
   </script>

   <script>
      $(".openmodal").click(function(){
         var href = $(this).data("href");
         var name = $(this).data('name');
         var description = $(this).data('description');
         $("#imagemodal img").attr("src",href);
         $(".modal-header #title").text(name);
         $(".modal-body #description").text(description);
         $("#imagemodal").modal("show");
      });
   </script>



   <script>
      $(document).ready(function(){
         $("div#showEditImage").click(function(){
            $("div#editImage").toggle();
            $("i#icon", this).toggleClass("fas fa-caret-up fas fa-sort-down");
         });
         $('div#showEditImage').css('cursor', 'pointer');
      });
   </script>

   <script>
      $(document).ready(function() {
         $("#tags").select2();
      });
   </script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.admin-10-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lerouxs/sites/l7/resources/views/admin/projects/edit.blade.php ENDPATH**/ ?>