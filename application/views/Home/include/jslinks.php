<!-- JS -->
<!-- Modernizer JS -->
<script src="<?= base_url() ?>public/assets/js/vendor/modernizr-2.8.3.min.js" defer></script>
<!-- jQuery JS -->
<script src="<?= base_url() ?>public/assets/js/vendor/jquery-3.3.1.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?= base_url() ?>public/assets/js/vendor/bootstrap.min.js" defer></script>
<!-- Swiper Slider JS -->
<script src="<?= base_url() ?>public/assets/js/plugins/swiper.min.js" defer></script>
<!-- Light gallery JS -->
<script src="<?= base_url() ?>public/assets/js/plugins/lightgallery.min.js" defer></script>
<!-- Waypoints JS -->
<script src="<?= base_url() ?>public/assets/js/plugins/waypoints.min.js" defer></script>
<!-- Counter down JS -->
<script src="<?= base_url() ?>public/assets/js/plugins/countdown.min.js" defer></script>
<!-- Isotope JS -->
<script src="<?= base_url() ?>public/assets/js/plugins/isotope.min.js" defer></script>
<!-- Masonry JS -->
<script src="<?= base_url() ?>public/assets/js/plugins/masonry.min.js" defer></script>
<!-- ImagesLoaded JS -->
<script src="<?= base_url() ?>public/assets/js/plugins/images-loaded.min.js" defer></script>
<!-- Wavify JS -->
<script src="<?= base_url() ?>public/assets/js/plugins/wavify.js" defer></script>
<!-- jQuery Wavify JS -->
<script src="<?= base_url() ?>public/assets/js/plugins/jquery.wavify.js" defer></script>
<!-- circle progress JS -->
<script src="<?= base_url() ?>public/assets/js/plugins/circle-progress.min.js" defer></script>
<!-- counterup JS -->
<script src="<?= base_url() ?>public/assets/js/plugins/counterup.min.js" defer></script>
<!-- wow JS -->
<script src="<?= base_url() ?>public/assets/js/plugins/wow.min.js" defer></script>
<!-- animation text JS -->
<script src="<?= base_url() ?>public/assets/js/plugins/animation-text.min.js" defer></script>
<!-- Vivus JS -->
<script src="<?= base_url() ?>public/assets/js/plugins/vivus.min.js" defer></script>
<!-- Some plugins JS -->
<script src="<?= base_url() ?>public/assets/js/plugins/some-plugins.js" defer></script>

<!-- Main JS -->
<script src="<?= base_url() ?>public/assets/js/main.js" defer></script>
<script src="<?= base_url() ?>public/assets/js/form.js" defer></script>
<script src="<?= base_url() ?>public/assets/js/CustomScript.js" defer></script>

<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"
  defer></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"
  defer></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
  defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.min.js"
  integrity="sha512-efUTj3HdSPwWJ9gjfGR71X9cvsrthIA78/Fvd/IN+fttQVy7XWkOAXb295j8B3cmm/kFKVxjiNYzKw9IQJHIuQ=="
  crossorigin="anonymous" defer></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.2/dist/jquery.validate.min.js" type="text/javascript"
  defer></script>

<!-- parsley js validation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
  integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
  crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/js/iziToast.min.js"
  integrity="sha512-Zq9o+E00xhhR/7vJ49mxFNJ0KQw1E1TMWkPTxrWcnpfEFDEXgUiwJHIKit93EW/XxE31HSI5GEOW06G6BF1AtA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>





<script>
(function (window) {
  function initDigiLazyLoad() {
    var lazyElements = Array.prototype.slice.call(document.querySelectorAll('img.lazy'));
    if (!lazyElements.length) return;

    function fetchAndSwap(el) {
      var realSrc = el.getAttribute('data-src');
      if (!realSrc || el.getAttribute('data-lazy-status') === 'loaded') return;

      var tempImg = new Image();
      tempImg.onload = function () {
        el.src = realSrc;
        el.setAttribute('data-lazy-status', 'loaded');
        el.classList.remove('lazy');
      };
      tempImg.onerror = function () {
        // Keep placeholder loader image if real image fails to load
        el.setAttribute('data-lazy-status', 'failed');
      };
      tempImg.src = realSrc;
    }

    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function (entries, obs) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting || entry.intersectionRatio > 0) {
            fetchAndSwap(entry.target);
            obs.unobserve(entry.target);
          }
        });
      }, { rootMargin: '300px 0px 300px 0px' });

      lazyElements.forEach(function (el) {
        observer.observe(el);
      });
    } else {
      lazyElements.forEach(function (el) {
        fetchAndSwap(el);
      });
    }
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initDigiLazyLoad);
  } else {
    initDigiLazyLoad();
  }
  window.addEventListener('load', initDigiLazyLoad);
  window.addEventListener('scroll', initDigiLazyLoad);
  window.addEventListener('resize', initDigiLazyLoad);
})(this);
</script>