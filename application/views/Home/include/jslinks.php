    <!-- JS -->
    <!-- Modernizer JS -->
    <script src="<?= base_url()?>public/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    <!-- jQuery JS -->
    <script src="<?= base_url()?>public/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="<?= base_url()?>public/assets/js/vendor/bootstrap.min.js"></script>
    <!-- Swiper Slider JS -->
    <script src="<?= base_url()?>public/assets/js/plugins/swiper.min.js"></script>
    <!-- Light gallery JS -->
    <script src="<?= base_url()?>public/assets/js/plugins/lightgallery.min.js"></script>
    <!-- Waypoints JS -->
    <script src="<?= base_url()?>public/assets/js/plugins/waypoints.min.js"></script>
    <!-- Counter down JS -->
    <script src="<?= base_url()?>public/assets/js/plugins/countdown.min.js"></script>
    <!-- Isotope JS --
    <script src="~/assets/js/plugins/isotope.min.js"></script>
    <!-- Masonry JS --
    <script src="~/assets/js/plugins/masonry.min.js"></script>
    <!-- ImagesLoaded JS -->
    <script src="<?= base_url()?>public/assets/js/plugins/images-loaded.min.js"></script>
    <!-- Wavify JS -->
    <script src="<?= base_url()?>public/assets/js/plugins/wavify.js"></script>
    <!-- jQuery Wavify JS -->
    <script src="<?= base_url()?>public/assets/js/plugins/jquery.wavify.js"></script>
    <!-- circle progress JS -->
    <script src="<?= base_url()?>public/assets/js/plugins/circle-progress.min.js"></script>
    <!-- counterup JS -->
    <script src="<?= base_url()?>public/assets/js/plugins/counterup.min.js"></script>
    <!-- wow JS -->
    <script src="<?= base_url()?>public/assets/js/plugins/wow.min.js"></script>
    <!-- animation text JS -->
    <script src="<?= base_url()?>public/assets/js/plugins/animation-text.min.js"></script>
    <!-- Vivus JS --
    <script src="~/assets/js/plugins/vivus.min.js"></script>
    <!-- Some plugins JS -->
    <script src="<?= base_url()?>public/assets/js/plugins/some-plugins.js"></script>
    <!-- Plugins JS (Please remove the comment from below plugins.min.js for better website load performance and remove plugin js files from avobe) -->
    <!--
    <script src="~/assets/js/plugins/plugins.min.js"></script>
    -->
	
    <!-- Main JS -->
    <script src="<?= base_url()?>public/assets/js/main.js"></script>
    <script src="<?= base_url()?>public/assets/js/form.js"></script>
    <script src="<?= base_url()?>public/assets/js/CustomScript.js"></script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js" integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ==" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!--Jquery form vqalidation-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.js" type="text/javascript"></script>
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js" type="text/javascript"></script> -->
    <!-- parsley js validation -->
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.js" integrity="sha512-Fq/wHuMI7AraoOK+juE5oYILKvSPe6GC5ZWZnvpOO/ZPdtyA29n+a5kVLP4XaLyDy9D1IBPYzdFycO33Ijd0Pg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js" integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	
	
	
	
	
<script>

!function(window){
  var $q = function(q, res){
        if (document.querySelectorAll) {
          res = document.querySelectorAll(q);
        } else {
          var d=document
            , a=d.styleSheets[0] || d.createStyleSheet();
          a.addRule(q,'f:b');
          for(var l=d.all,b=0,c=[],f=l.length;b<f;b++)
            l[b].currentStyle.f && c.push(l[b]);

          a.removeRule(0);
          res = c;
        }
        return res;
      }
    , addEventListener = function(evt, fn){
        window.addEventListener
          ? this.addEventListener(evt, fn, false)
          : (window.attachEvent)
            ? this.attachEvent('on' + evt, fn)
            : this['on' + evt] = fn;
      }
    , _has = function(obj, key) {
        return Object.prototype.hasOwnProperty.call(obj, key);
      }
    ;

  function loadImage (el, fn) {
    var img = new Image()
      , src = el.getAttribute('data-src');
    img.onload = function() {
      if (!! el.parent)
        el.parent.replaceChild(img, el)
      else
        el.src = src;

      fn? fn() : null;
    }
    img.src = src;
  }

  function elementInViewport(el) {
    var rect = el.getBoundingClientRect()

    return (
       rect.top    >= 0
    && rect.left   >= 0
    && rect.top <= (window.innerHeight || document.documentElement.clientHeight)
    )
  }

    var images = new Array()
      , query = $q('img.lazy')
      , processScroll = function(){
          for (var i = 0; i < images.length; i++) {
            if (elementInViewport(images[i])) {
              loadImage(images[i], function () {
                images.splice(i, i);
              });
            }
          };
        }
      ;
    // Array.prototype.slice.call is not callable under our lovely IE8 
    for (var i = 0; i < query.length; i++) {
      images.push(query[i]);
    };

    processScroll();
    addEventListener('scroll',processScroll);

}(this);

</script>
	