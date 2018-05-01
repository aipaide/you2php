 <footer class="p-2">
        <p  class="text-white p-1 m-1 h6">
            Copyright © 2015-<?php echo date('Y');?> All Rights Reserved </br>
        </p>
        <p  class="text-white  m-1 p-1 h6">
			<a href="http:/truth.atspace.eu/" target="_blank" class="text-white ml-2">我的博客</a> 
            <a href="https://github.com/gfw-breaker/nogfw/blob/master/README.md" target="_blank" class="text-white ml-2">翻墙软件</a>
            <a href="https://github.com/Alvin9999/new-pac/wiki" target="_blank" class="text-white ml-2">自由上网</a>
            <a href="https://github.com/oGate2/oGate/blob/master/README.md" target="_blank" class="text-white ml-2">网门</a>
        </p>
    </footer>
  
  
  <script src="https://cdn.bootcss.com/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
  <script src="https://cdn.bootcss.com/Swiper/4.0.6/js/swiper.min.js"></script>  
  <script>
    $(".carousel").on("touchstart", function(event){
        var xClick = event.originalEvent.touches[0].pageX;
    $(this).one("touchmove", function(event){
        var xMove = event.originalEvent.touches[0].pageX;
        if( Math.floor(xClick - xMove) > 5 ){
            $(this).carousel('next');
        }
        else if( Math.floor(xClick - xMove) < -5 ){
            $(this).carousel('prev');
        }
    });
    $(".carousel").on("touchend", function(){
            $(this).off("touchmove");
    });
});

 $(function () {  
        var swiper = new Swiper('.swiper-container', {  
            spaceBetween: 20,  
            slidesPerView:'auto',  
            freeMode: true  
        });  
    })  
</script>
</body></html>
