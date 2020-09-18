<script>
   var dart_error_4 = {{ Session('dart_error_4') ? 'true' : 'false' }};

   if(dart_error_4){
      Swal.fire({
         timer: 7000,
         title: 'Invalid Score!',
         icon: 'error',
         html: 
            'The registered score is higher than the required score to finish.' + 
            '<br />' + 
            'A value of 0 will be added to the scoresheet.',
         showCloseButton: false,
         showConfirmButton: false,
         allowOutsideClick: false
      }).then(function() {
         $("#score").focus();
      });
   }
</script>
