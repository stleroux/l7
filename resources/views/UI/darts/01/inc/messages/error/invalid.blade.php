<script>
   var dart_error_1 = {{ Session('dart_error_1') ? 'true' : 'false' }};

   if(dart_error_1){
      Swal.fire({
         timer: 5000,
         title: 'Invalid Score!',
         icon: 'error',
         html: 
            'You need to enter a score above 0.' + 
            '<br />' + 
            'Please try again.',
         showCloseButton: false,
         showConfirmButton: false
      }).then(function() {
         $("#score").focus();
      });
   }
</script>
