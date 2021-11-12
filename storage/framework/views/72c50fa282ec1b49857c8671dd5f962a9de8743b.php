

<script>
   var titles = [
      "All I am going to say is... Average!",
      "Good enough, I suppose.",
      "Good job.",
      "That is within the norm for beginners.",
      "Paying attention pays off in the end.",
      "Keep up the good work.",
      "Pretty good aim."
   ];

   var messages = [
   ];   

   var dart_success_41_60 = <?php echo e(Session('dart_success_41_60') ? 'true' : 'false'); ?>;
   // var one = titles[Math.floor(Math.random()*titles.length)];
   // document.write(one);
   // var oneIndex = titles.indexOf(one);
   // document.write(oneIndex);

   if(dart_success_41_60){
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
</script><?php /**PATH C:\sites\l7\resources\views/UI/darts/01/inc/messages/success/41-60.blade.php ENDPATH**/ ?>