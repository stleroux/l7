
<script>
   var titles = [
      "t5-1",
      "t5-2",
      "t5-3",
      "t5-4",
      "t5-5",
      "t5-6",
      "t5-7"
   ];

   var messages = [
      "m5-1",
      "m5-2",
      "m5-3",
      "m5-4",
      "m5-5",
      "m5-6",
      "m5-7"
   ];   

   var dart_success_5 = <?php echo e(Session('dart_success_5') ? 'true' : 'false'); ?>;

   if(dart_success_5){
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
<?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/darts/01/inc/messages/success/perfect.blade.php ENDPATH**/ ?>