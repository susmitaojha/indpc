<!-- Vendor JS Files -->

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="{{ asset('public/assets/front/assets/js/menu.js') }}"></script>
<script src="{{ asset('public/assets/front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('#hdf').addClass('newClass');
        } else {
            $('#hdf').removeClass('newClass');
        }
    });
</script>



</body>

</html>
