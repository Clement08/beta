
<footer>
    <div class="container">
        <div class="row">
            <div class="text-center">
                <small>Copyright : Clément Marie | All rights reserved</small>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/grid.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/cbpFixedScrollLayout.min.js"></script>
<script src="js/project.js"></script>
<script src="js/contact.min.js"></script>
<script src="js/nav.min.js"></script>
<script src="js/backtotop.min.js"></script>
<script src="js/portfolio.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script>
    $(function() {
        cbpFixedScrollLayout.init();
    });
</script>
<script>
    $(function() {
        Grid.init();
    });
</script>

<script>
    new WOW().init();
</script>
<script>
    (function($){
        $('.carousel').owlCarousel({
           items: 3,
            autoPlay: 3000, //Set AutoPlay to 3 seconds
            dots: true,
            margin:30,
            responsive:{
                0:{
                    items:1
                },
                768:{
                    items:2,
                    margin:30
                },
                992:{
                    items:3,
                    margin:40
                }
            }
        });
    })(jQuery);
</script>
</body>
</html>
