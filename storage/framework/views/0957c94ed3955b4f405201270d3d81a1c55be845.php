<script>
   var dart_error_3 = <?php echo e(Session('dart_error_3') ? 'true' : 'false'); ?>;

   if(dart_error_3){
      Swal.fire({
         timer: 3000,
         title: 'Score Added!',
         icon: 'info',
         html: 'A score value of 0 has been added to the scoresheet.',
         showCloseButton: false,
         showConfirmButton: false,
         allowOutsideClick: false
      }).then(function() {
         $("#score").focus();
      });
   }
</script>
<?php /**PATH C:\sites\l7\resources\views/UI/darts/01/inc/messages/error/noScore.blade.php ENDPATH**/ ?>