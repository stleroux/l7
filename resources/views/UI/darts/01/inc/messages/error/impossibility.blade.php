<script>
   var dart_error_2 = {{ Session('dart_error_2') ? 'true' : 'false' }};

   if(dart_error_2){
      Swal.fire({
         timer: 7000,
         title: 'Invalid Score!',
         icon: 'error',
         html: 
            'This score cannot be registered as it would leave an impossibility to finish with a Double Out.' + 
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
