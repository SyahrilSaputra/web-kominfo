<footer class="footer bg-white">
  <div class="container">
    <div class=" row">
      <div class="col-12">
        <div class="text-center">
          <p class="text-dark my-4 text-sm font-weight-normal">
            @<script>document.write(new Date().getFullYear())</script> <br>
            Kementrian Komunikasi Informatika dan Persandian Kabupaten Bone | Informatika 18 Universitas Hasanuddin <br>
            Ceated By: <a href="/">Synchronous 18 </a>
          </p>
        </div>
      </div>
    </div>
  </div>
</footer>
</div>
<script src="{{ asset('') }}assets/user/js/core/popper.min.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/user/js/core/bootstrap.min.js" type="text/javascript"></script>
<script src="{{ asset('') }}assets/user/js/plugins/perfect-scrollbar.min.js"></script>




<!--  Plugin for TypedJS, full documentation here: https://github.com/inorganik/CountUp.js -->
<script src="{{ asset('') }}assets/user/js/plugins/countup.min.js"></script>





<script src="{{ asset('') }}assets/user/js/plugins/choices.min.js"></script>



<script src="{{ asset('') }}assets/user/js/plugins/prism.min.js"></script>
<script src="{{ asset('') }}assets/user/js/plugins/highlight.min.js"></script>



<!--  Plugin for Parallax, full documentation here: https://github.com/dixonandmoe/rellax -->
<script src="{{ asset('') }}assets/user/js/plugins/rellax.min.js"></script>
<!--  Plugin for TiltJS, full documentation here: https://gijsroge.github.io/tilt.js/ -->
<script src="{{ asset('') }}assets/user/js/plugins/tilt.min.js"></script>
<!--  Plugin for Selectpicker - ChoicesJS, full documentation here: https://github.com/jshjohnson/Choices -->
<script src="{{ asset('') }}assets/user/js/plugins/choices.min.js"></script>


<!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
<script src="{{ asset('') }}assets/user/js/plugins/parallax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>










<!-- Control Center for Material UI Kit: parallax effects, scripts for the example pages etc -->
<!--  Google Maps Plugin    -->

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
<script src="{{ asset('') }}assets/user/js/material-kit.min.js?v=3.0.0" type="text/javascript"></script>


<script type="text/javascript">

  if (document.getElementById('state1')) {
    const countUp = new CountUp('state1', document.getElementById("state1").getAttribute("countTo"));
    if (!countUp.error) {
      countUp.start();
    } else {
      console.error(countUp.error);
    }
  }
  if (document.getElementById('state2')) {
    const countUp1 = new CountUp('state2', document.getElementById("state2").getAttribute("countTo"));
    if (!countUp1.error) {
      countUp1.start();
    } else {
      console.error(countUp1.error);
    }
  }
  if (document.getElementById('state3')) {
    const countUp2 = new CountUp('state3', document.getElementById("state3").getAttribute("countTo"));
    if (!countUp2.error) {
      countUp2.start();
    } else {
      console.error(countUp2.error);
    };
  }
</script>
<script type="text/javascript">
  $(document).ready(function() {
   $(".fancyLink").fancybox({
    helpers: {
     title : {
      type : 'over'
     }
    },
    afterShow : function() {
     $(".fancybox-title").hide();
     $(".fancybox-wrap").hover(function() {
       $(".fancybox-title").stop(true,true).slideDown(200);
      }, function() {
       $(".fancybox-title").stop(true,true).slideUp(200);
     });
    }
   });
  }); // ready
  </script>



























</body>

</html>
