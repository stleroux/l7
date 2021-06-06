{{-- Score = 61 to 120 --}}

<script>
   var titles = [
      "Above Average!",
      "Better than the norm.",
      "Great job.",
      "Great effort.",
      "Keep up the good work.",
      "See what a little practice can do.",
      "Paying attention pays off in the end.",
      "Did you step over the line?",
      "Did you just cheat?",
      "I see we will need bigger doors for when you leave!",
      "Have you been practising in secret?"
   ];

   var messages = [
   ];   

   var dart_success_61_120 = {{ Session('dart_success_61_120') ? 'true' : 'false' }};
   // var one = titles[Math.floor(Math.random()*titles.length)];
   // document.write(one);
   // var oneIndex = titles.indexOf(one);
   // document.write(oneIndex);

   if(dart_success_61_120){
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