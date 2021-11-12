

<script>
   var titles = [
      "Below Average!",
      "Good job... for a rookie.",
      "That was slightly better than pathetic.",
      "Even a drunk could score higher than this.",
      "Maybe if you closed an eye or two?",
      "Decent enough, I suppose.",
      "Is that the best you can do?",
      "Have you tried aiming at the board?",
      "Can you maybe try a little harder?",
      "Can you put a little effort into this?"
   ];

   var messages = [
   ];   

   var dart_success_21_40 = <?php echo e(Session('dart_success_21_40') ? 'true' : 'false'); ?>;
   // var one = titles[Math.floor(Math.random()*titles.length)];
   // document.write(one);
   // var oneIndex = titles.indexOf(one);
   // document.write(oneIndex);

   if(dart_success_21_40){
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
</script><?php /**PATH C:\sites\l7\resources\views/UI/darts/01/inc/messages/success/21-40.blade.php ENDPATH**/ ?>