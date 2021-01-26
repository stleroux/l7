

<script>
   var titles = [
      "t3-1",
      "t3-2",
      "t3-3",
      "t3-4",
      "t3-5",
      "t3-6",
      "t3-7"
   ];

   var messages = [
      "m3-1",
      "m3-2",
      "m3-3",
      "m3-4",
      "m3-5",
      "m3-6",
      "m3-7"
   ];   

   var dart_success_3 = <?php echo e(Session('dart_success_3') ? 'true' : 'false'); ?>;

   if(dart_success_3){
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
</script><?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/darts/01/inc/messages/success/61-120.blade.php ENDPATH**/ ?>