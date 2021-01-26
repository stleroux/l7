

<script>
   var titles = [
      "t2-1",
      "t2-2",
      "t2-3",
      "t2-4",
      "t2-5",
      "t2-6",
      "t2-7"
   ];

   var messages = [
      "m2-1",
      "m2-2",
      "m2-3",
      "m2-4",
      "m2-5",
      "m2-6",
      "m2-7"
   ];   

   var dart_success_2 = <?php echo e(Session('dart_success_2') ? 'true' : 'false'); ?>;

   if(dart_success_2){
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
</script><?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/darts/01/inc/messages/success/21-60.blade.php ENDPATH**/ ?>