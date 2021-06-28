
    <script src="{{URL::asset('userpanel/js/jquery.js')}}"></script>
    <script src="{{URL::asset('userpanel/js/all.min.js')}}"></script>
    <script src="{{URL::asset('userpanel/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{URL::asset('userpanel/js/swiper.js')}}"></script>
    <script src="{{URL::asset('userpanel/js/custom.js')}}"></script>
    <script>
    $(document).ready(function(){
    var swiper = new Swiper(".banner .mySwiper", {
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
      var swiper = new Swiper(".mySwiper", {
          navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
          },
        
      });
});
    </script>