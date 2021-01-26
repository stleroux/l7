

<script>
   var titles = [
      "Apples are good for you.",
      "Bananas",
      "Pears",
      "Grapes",
      "Raspberries",
      "Blackberries\n\nBlueberries",
      "Strawberries"
   ];

   var messages = [
      "1",
      "2",
      "3",
      "4",
      "5",
      "6",
      "7"
   ];   

   var dart_success_1 = <?php echo e(Session('dart_success_1') ? 'true' : 'false'); ?>;

   if(dart_success_1){
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
</script><?php /**PATH /home/lerouxs/sites/l7/resources/views/UI/darts/01/inc/messages/success/0-20.blade.php ENDPATH**/ ?>