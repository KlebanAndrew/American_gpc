<!DOCTYPE html>
<html class="js" lang="en" dir="ltr">
<head>
<meta name="format-detection" content="telephone=no">
	<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<title>American Green Power Corporation</title>

<script src="//code.jquery.com/jquery-latest.min.js"></script>
<script src="//unslider.com/unslider.min.js"></script>


 
</head>

<body>
<script type="text/javascript">

	//new function for cookie
	function getCookie(name) {
		var matches = document.cookie.match(new RegExp(
			"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
		));
		return matches ? decodeURIComponent(matches[1]) : undefined;
	}

	function setCookie(name, value, props) {
		props = props || {};
		var exp = props.expires;
		if (typeof exp == "number" && exp) {
			var d = new Date();
			d.setTime(d.getTime() + exp*1000);
			exp = props.expires = d;
		}
		if(exp && exp.toUTCString) { props.expires = exp.toUTCString(); }

		value = encodeURIComponent(value);
		var updatedCookie = name + "=" + value;
		for(var propName in props){
			updatedCookie += "; " + propName;
			var propValue = props[propName];
			if(propValue !== true){ updatedCookie += "=" + propValue; }
		}
		document.cookie = updatedCookie + ';path=/american-gpc';//todo get info about props args
	}

	$(document).ready(function() {
		$(".dropdown img.flag").addClass("flagvisibility");

		$(".dropdown dt a").click(function() {
			$(".dropdown dd ul").toggle();
		});

		$(".dropdown dd ul li a").click(function() {
			var text = $(this).html();
			$(".dropdown dt a span").html(text);
			$(".dropdown dd ul").hide();
			$("#result").html("Selected value is: " + getSelectedValue("sample"));
		});

		function getSelectedValue(id) {
			return $("#" + id).find("dt a span.value").html();
		}

		$(document).bind('click', function(e) {
			var $clicked = $(e.target);
			if (! $clicked.parents().hasClass("dropdown"))
				$(".dropdown dd ul").hide();
		});
		$('.lang_href').click(function(){
			var langname = $(this).prop('lang');console.log(langname);
			setCookie('lang',langname);
		});


	});

	/*jQuery time*/
	$(document).ready(function(){
		$("#accordian h3").click(function(){
			//slide up all the link lists
			$("#accordian ul ul").slideUp();
			//slide down the link list below the h3 clicked - only if its closed
			if(!$(this).next().is(":visible"))
			{
				$(this).next().slideDown();
			}
		})
	})
</script>
 <script>
$(function() {
    $('.banner').unslider({
	speed: 1000,               //  The speed to animate each slide (in milliseconds)
	delay: 6000,              //  The delay between slide animations (in milliseconds)
	complete: function() {},  //  A function that gets called after every slide animation
	keys: true,               //  Enable keyboard (left, right) arrow shortcuts
	dots: true,               //  Display dot navigation
	fluid: false              //  Support responsive design. May break non-responsive designs
	    
    });
    
});
 </script>
 
	<div id="page" class="page clearfix">
		
			<div id="zone-content">
			<header>
				<div class="header">
					<div class="mainflg">
						<img class="logoadg" src="../images/usa_made.png" />
						<img class="logoadgowl" src="../images/png_owl.png" />
					<div class="mainslogan">
						<a href="/"><span class="logofrmt">American Green Power </span><span class="logofrmt resz2">&reg;</span><br /><span class="logofrmt resz">Corporation</span></a>
					</div>
						<div class="languagedrpdwm">
							<dl id="sample" class="dropdown">
								<dt><a href="#"><span>Please select your language</span></a></dt>
								<dd>
									<ul>
										<li><a class="lang_href" lang="eng" href="../eng">United States<img class="flag" src="../css/flagimg/us.png" alt="" /><span class="value">US</span></a></li>
										<li><a class="lang_href" lang="ua" href="../ua">Ukraine<img class="flag" src="../css/flagimg/ue.png" alt="" /><span class="value">UE</span></a></li>
										<li><a class="lang_href" lang="bl" href="../bl">Belarus<img class="flag" src="../css/flagimg/by.png" alt="" /><span class="value">BY</span></a></li>
										<li><a class="lang_href" lang="cz" href="#">Chezch<img class="flag" src="../css/flagimg/ch.png" alt="" /><span class="value">CH</span></a></li>
									</ul>
								</dd>
							</dl>
							<span id="result"></span>
						</div>
					</div>
				</div>
				<div class="menumain">
					<div>
						<ul>
						
						<li class="menuli"><a href="./" class="menulink">ДОМІВКА</a></li>
						<li class="menuli"><a href="./" class="menulink">ПРОДУКТИ</a></li>
						<li class="menuli"><a href="./" class="menulink">ФІЛІЇ</a></li>
						<li class="menuli"><a href="about.php" class="menulink">ПРО НАС</a></li>
						</ul>
					</div>
				</div>
			</header>
		
		
						
		<div class="pagecont">

