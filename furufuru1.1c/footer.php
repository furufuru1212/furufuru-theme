	<div id="foot">
	<div class="footmain">
		<p>&copy; <?php echo date("Y"); ?> Furufuru All Rights Reserved.</p>
	</div>
	</div>
</body>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
$(function(){
    var box    = $("#bar");
    var boxTop = box.offset().top;
    $(window).scroll(function () {
        if($(window).scrollTop() >= boxTop) {
            box.addClass("fixed");
			$("body").css("margin-top","40px");
        } else {
            box.removeClass("fixed");
			$("body").css("margin-top","0px");
        }
    });
});
</script>
</html>