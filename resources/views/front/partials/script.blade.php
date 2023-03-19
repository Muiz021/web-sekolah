<!-- JS here -->

<script src="{{ asset('front/js/vendor/modernizr-3.5.0.min.js') }}"></script>
<!-- Jquery, Popper, Bootstrap -->
{{--<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>--}}
<script src="{{ asset('front/js/vendor/jquery-1.12.4.min.js') }}"></script>
<script src="{{ asset('front/js/popper.min.js') }}"></script>
<script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
<!-- Jquery Mobile Menu -->
<script src="{{ asset('front/js/jquery.slicknav.min.js') }}"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('front/js/slick.min.js') }}"></script>
<!-- One Page, Animated-HeadLin -->
<script src="{{ asset('front/js/wow.min.js') }}"></script>
<script src="{{ asset('front/js/animated.headline.js') }}"></script>
<script src="{{ asset('front/js/jquery.magnific-popup.js') }}"></script>

<!-- Date Picker -->
<script src="{{ asset('front/js/gijgo.min.js') }}"></script>
<!-- Nice-select, sticky -->
<script src="{{ asset('front/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('front/js/jquery.sticky.js') }}"></script>

<!-- counter , waypoint -->
<script src="{{ asset('front/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('front/js/waypoints.min.js') }}"></script>

<!-- contact js -->
<script src="{{ asset('front/js/contact.js') }}"></script>
<script src="{{ asset('front/js/jquery.form.js') }}"></script>
<script src="{{ asset('front/js/jquery.validate.min.js') }}"></script>
<script src="{{ asset('front/js/mail-script.js') }}"></script>
<script src="{{ asset('front/js/jquery.ajaxchimp.min.js') }}"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="{{ asset('front/js/plugins.js') }}"></script>
<script src="{{ asset('front/js/main.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous"></script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 15,
        nav: false,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    })
</script>
