
<script>
   var titles = [
      "Really Good!",
      "Is someone else playing for you?",
      "You are becoming a pro.",
      "Was that just luck?",
      "Practice makes perfect.",
      "On your way to perfection.",
      "Did you just cheat?",
      "Don't let this score go to your head."
   ];

   var messages = [
   ];   

   var dart_success_121_179 = <?php echo e(Session('dart_success_121_179') ? 'true' : 'false'); ?>;
   // var one = titles[Math.floor(Math.random()*titles.length)];
   // document.write(one);
   // var oneIndex = titles.indexOf(one);
   // document.write(oneIndex);

   if(dart_success_121_179){
      Swal.fire({
         timer: 4000,
         title: titles[Math.floor(Math.random()*titles.length)],
         // title: titles[oneIndex],
         icon: 'warning',
         // html: messages[Math.floor(Math.random()*messages.length)],
         // html: messages[oneIndex],
         showCloseButton: false,
         showConfirmButton: false
      }).then(function() {
         $("#score").focus();
      });
   }
</script>
<?php /**PATH C:\sites\l7\resources\views/UI/darts/01/inc/messages/success/121-179.blade.php ENDPATH**/ ?>