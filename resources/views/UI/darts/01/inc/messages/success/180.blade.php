{{-- Score = 180 --}}
<script>
   var titles = [
      "WOW! 180 points! A PERFECT score!",
      "That is just truly amazing. Well done!",
      "You are my hero!"
   ];

   var messages = [
   ];   

   var dart_success_180 = {{ Session('dart_success_180') ? 'true' : 'false' }};

   if(dart_success_180){
      Swal.fire({
         timer: 4000,
         title: titles[Math.floor(Math.random()*titles.length)],
         icon: 'warning',
         // html: messages[Math.floor(Math.random()*messages.length)],       
         showCloseButton: false,
         showConfirmButton: false
      }).then(function() {
         $("#score").focus();
      });
   }
</script>
