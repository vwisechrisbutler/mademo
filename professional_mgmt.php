<article
  id="professional_mgmt"
  class="animate fade-out"
  data-time-in="123"
  data-time-out="9999"
  data-incoming-remove="fade-out"
  data-outgoing-add="fade-out"
  >

  <h1>I want my portfolio to be professionally managed</h1>

  <p>Take the guesswork out of investing and benefit from the expert guidance of a professionally managed account.</p>

  <div class="inputs">
    <div class="accept-buttons center">
      <button id="sign-me-up-button" type="button" class="color-primary">Yes, sign me up!</button>
    </div>
    <div class="fee-disclosure bg-primary">[Detailed fee disclosure] Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc mollis, nisi sed aliquet eleifend, mi magna dignissim tellus, et tempus dui purus ut nibh.</div>
  </div>

  <script>

    $(document).ready(function(){
      $('#sign-me-up-button').click(function() {
        $('#professional_mgmt').addClass('fade-out');
        setTimeout(function(){
          $('#congrats').removeClass('fade-out');
        },3000);
      });
    });

  </script>

</article>