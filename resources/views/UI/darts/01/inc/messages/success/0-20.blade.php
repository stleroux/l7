{{-- Score = 0 to 20 --}}

<script>
   var titles = [
      "Pathetic!",
      "Do you know how to play this game?",
      "Have another drink!<br /> It might help.",
      "Having another drink might help your aim.<br /> Then again, it might not!",
      "Ease up on the drinks!",
      "That was absolutely horrid!",
      "Your aim could be better.",
      "Doh!",
      "And here I was....thinking you knew how to play this game!",
      "Are you aiming at the board? <br /> If so, you could have fooled me!",
      "Aim for the board.",
      "Your grandmother can do better than that.",
      "Hang your head in shame.",
      "Maybe you should go practice and come back some other time.",
      "That was pathetic!"
   ];

   var messages = [
   ];

   var dart_success_0_20 = {{ Session('dart_success_0_20') ? 'true' : 'false' }};
   // var one = titles[Math.floor(Math.random()*titles.length)];
   // document.write(one);
   // var oneIndex = titles.indexOf(one);
   // document.write(oneIndex);

   if(dart_success_0_20){
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