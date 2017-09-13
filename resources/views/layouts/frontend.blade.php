<!DOCTYPE html>
<html lang="en">

@include('pages.header')

<body >
<div id="loader"></div>


<div style="display:none;" id="myWholeDiv" class="animate-bottom">
@include('pages.topline')      	
@include('pages.navBar')

@yield('content')

<footer>
	@include('pages.copyright')
</footer>
@include('pages.script')


</div> 	
<script>
// (function($) {
//     "use strict";
// 	$(window).load(function() {
//     document.getElementById("loader").style.display = "none";
//   	document.getElementById("myWholeDiv").style.display = "block";
//   }
// });

jQuery(window).load(function() { 
		jQuery("#loaderInner").fadeOut(); 
		jQuery("#loader").delay(200).fadeOut("slow"); 
		document.getElementById("myWholeDiv").style.display = "block";
		//document.getElementById("copyright1").style.display = "block";

 		
 });


</script>




</body>
</html>