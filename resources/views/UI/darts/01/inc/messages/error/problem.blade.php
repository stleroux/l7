<script>
   var has_errors = {{ $errors->count() > 0 ? 'true' : 'false' }};

   if(has_errors){
      Swal.fire({
         timer: 7000,
         title: 'One of the following problems was detected!',
         icon: 'error',
         html:
            'A score was not entered.' +
            '<br />' +
            'The score entered was not a number.' +
            '<br />' +
            'The score entered was greater than 180.',
         showCloseButton: false,
         showConfirmButton: false,
      }).then(function() {
         $("#score").focus();
      });
   }
</script>
