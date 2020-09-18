{{-- Score = 121 to 179 --}}
<script>
   var titles = [
      "t4-1",
      "t4-2",
      "t4-3",
      "t4-4",
      "t4-5",
      "t4-6",
      "t4-7"
   ];

   var messages = [
      "m4-1",
      "m4-2",
      "m4-3",
      "m4-4",
      "m4-5",
      "m4-6",
      "m4-7"
   ];   

   var dart_success_4 = {{ Session('dart_success_4') ? 'true' : 'false' }};

   if(dart_success_4){
      Swal.fire({
         timer: 4000,
         title: titles[Math.floor(Math.random()*titles.length)],
         icon: 'warning',
         html: messages[Math.floor(Math.random()*messages.length)],       
         showCloseButton: false,
         showConfirmButton: false
      }).then(function() {
         $("#score").focus();
      });
   }
</script>
