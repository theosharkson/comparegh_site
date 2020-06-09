<!-- Le javascript
================================================== -->

<!-- Placed at the end of the document so the pages load faster -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{asset('assets/js/jquery/jquery-3.3.1.min.js')}}">\x3C/script>')</script>
<script src="{{asset('assets/bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('assets/js/vendors.min.js')}}"></script>

<!-- include custom script for site  -->
<script src="{{asset('assets/js/main.min.js')}}"></script>



<!-- include jquery autocomplete plugin  -->

<script type="text/javascript" src="{{asset('assets/plugins/autocomplete/jquery.mockjax.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/autocomplete/jquery.autocomplete.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/plugins/autocomplete/usastates.js')}}"></script>

<script type="text/javascript" src="{{asset('assets/plugins/autocomplete/autocomplete-demo.js')}}"></script>

<script type="text/javascript">
	
	var c = $(".featured-list-slider");
        c.owlCarousel({ navigation: !1, pagination: !1, items: 3, itemsDesktopSmall: [979, 3], itemsTablet: [768, 3], itemsTabletSmall: [660, 2], itemsMobile: [400, 1] }),
            $(".featured-list-row .next").click(function () {
                c.trigger("owl.next");
            }),
            $(".featured-list-row .prev").click(function () {
                c.trigger("owl.prev");
            })
</script>