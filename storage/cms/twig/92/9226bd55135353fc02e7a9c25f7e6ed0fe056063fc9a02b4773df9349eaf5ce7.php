<?php

/* /home/ubuntu/workspace/themes/kevin-timber/layouts/default.htm */
class __TwigTemplate_38240ea9e6e05ef15cb7a262eab79e39f578e6d3e6a6f169023625dbf02e064d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"ru\">
  <head>
\t\t<title>Мебель на заказ</title>
\t\t<meta charset=\"utf-8\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t\t<!-- Styles -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/css/bootstrap.css", 1 => "assets/css/font-awesome.css", 2 => "assets/css/camera.css", 3 => "assets/css/slicknav.css", 4 => "assets/css/prettyPhoto.css", 5 => "assets/css/style.css"));
        // line 13
        echo "\">
\t\t                                                 
\t\t<!-- Scripts -->
\t\t<script type=\"text/javascript\" src=\"";
        // line 16
        echo $this->env->getExtension('CMS')->themeFilter(array(0 => "assets/js/jquery-1.8.3.min.js", 1 => "assets/js/jquery.mobile.customized.min.js", 2 => "assets/js/jquery.easing.1.3.js", 3 => "assets/js/camera.min.js", 4 => "assets/js/myscript.js", 5 => "assets/js/sorting.js", 6 => "assets/js/jquery.isotope.js", 7 => "assets/js/jquery.prettyPhoto.js", 8 => "assets/js/bootstrap.min.js", 9 => "assets/js/jquery.slicknav.js"));
        // line 25
        echo "\"></script>
\t\t<script id=\"tinyhippos-injected\">if (window.top.ripple) { window.top.ripple(\"bootstrap\").inject(window, document); }</script><!--<![endif]-->
\t\t<script>
\t\t\tjQuery(function(){
\t\t\t\t\tjQuery('#camera_wrap_1').camera({
\t\t\t\t\ttransPeriod: 500,
\t\t\t\t\ttime: 3000,
\t\t\t\t\theight: '490px',
\t\t\t\t\tthumbnails: false,
\t\t\t\t\tpagination: true,
\t\t\t\t\tplayPause: false,
\t\t\t\t\tloader: false,
\t\t\t\t\tnavigation: false,
\t\t\t\t\thover: false
\t\t\t\t});
\t\t\t});
\t\t</script>
\t\t
\t</head>
\t<body>
    
    <!--home start-->
    <div id=\"home\">
        <div class=\"headerLine\">
\t        ";
        // line 49
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("menu"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 50
        echo "\t        
\t    </div>
\t
    </div>
    
 
  ";
        // line 56
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 57
        echo "  
    
 
    
    <!--contact start
    <div id=\"contact\">
    \t";
        // line 63
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contact-form-details"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "\t\t<div class=\"line6\">
\t\t    Google Maps
\t\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d48386.401887313725!2d-73.9407136!3d40.7147117!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1402409149092\" width=\"100%\" height=\"750\" frameborder=\"0\" style=\"border:0\"></iframe>\t
\t\t</div>-->
\t\t<div class=\"container\">
\t\t\t";
        // line 69
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("contact-text"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 70
        echo "\t\t</div>
\t\t<div class=\"line7\">
\t\t\t<!-- Subscribe -->
\t\t\t";
        // line 73
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("subscribe"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 74
        echo "\t\t</div>
\t\t<div class=\"lineBlack\">
\t\t\t";
        // line 76
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 77
        echo "\t\t</div>
    </div>\t\t
\t\t
\t<script>
\t\t\t\$(document).ready(function(){
\t\t\t\$(\".bhide\").click(function(){
\t\t\t\t\$(\".hideObj\").slideDown();
\t\t\t\t\$(this).hide(); //.attr()
\t\t\t\treturn false;
\t\t\t});
\t\t\t\$(\".bhide2\").click(function(){
\t\t\t\t\$(\".container.hideObj2\").slideDown();
\t\t\t\t\$(this).hide(); // .attr()
\t\t\t\treturn false;
\t\t\t});
\t\t\t\t
\t\t\t\$('.heart').mouseover(function(){
\t\t\t\t\t\$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');
\t\t\t\t}).mouseout(function(){
\t\t\t\t\t\$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');
\t\t\t\t});
\t\t\t\t
\t\t\t\tfunction sdf_FTS(_number,_decimal,_separator)
\t\t\t\t{
\t\t\t\tvar decimal=(typeof(_decimal)!='undefined')?_decimal:2;
\t\t\t\tvar separator=(typeof(_separator)!='undefined')?_separator:'';
\t\t\t\tvar r=parseFloat(_number)
\t\t\t\tvar exp10=Math.pow(10,decimal);
\t\t\t\tr=Math.round(r*exp10)/exp10;
\t\t\t\trr=Number(r).toFixed(decimal).toString().split('.');
\t\t\t\tb=rr[0].replace(/(\\d{1,3}(?=(\\d{3})+(?:\\.\\d|\\b)))/g,\"\\\$1\"+separator);
\t\t\t\tr=(rr[1]?b+'.'+rr[1]:b);

\t\t\t\treturn r;
}
\t\t\t\t
\t\t\tsetTimeout(function(){
\t\t\t\t\t\$('#counter').text('0');
\t\t\t\t\t\$('#counter1').text('0');
\t\t\t\t\t\$('#counter2').text('0');
\t\t\t\t\tsetInterval(function(){
\t\t\t\t\t\t
\t\t\t\t\t\tvar curval=parseInt(\$('#counter').text());
\t\t\t\t\t\tvar curval1=parseInt(\$('#counter1').text().replace(' ',''));
\t\t\t\t\t\tvar curval2=parseInt(\$('#counter2').text());
\t\t\t\t\t\tif(curval<=707){
\t\t\t\t\t\t\t\$('#counter').text(curval+1);
\t\t\t\t\t\t}
\t\t\t\t\t\tif(curval1<=12280){
\t\t\t\t\t\t\t\$('#counter1').text(sdf_FTS((curval1+20),0,' '));
\t\t\t\t\t\t}
\t\t\t\t\t\tif(curval2<=245){
\t\t\t\t\t\t\t\$('#counter2').text(curval2+1);
\t\t\t\t\t\t}
\t\t\t\t\t}, 2);
\t\t\t\t\t
\t\t\t\t}, 500);
\t\t\t});
\t</script>
\t<script type=\"text/javascript\">
\tjQuery(document).ready(function(){
\t\tjQuery('#menu').slicknav();
\t\t
\t});
\t</script>
\t
\t<script type=\"text/javascript\">
    \$(document).ready(function(){
       
        var \$menu = \$(\"#menuF\");
            
        \$(window).scroll(function(){
            if ( \$(this).scrollTop() > 100 && \$menu.hasClass(\"default\") ){
                \$menu.fadeOut('fast',function(){
                    \$(this).removeClass(\"default\")
                           .addClass(\"fixed transbg\")
                           .fadeIn('fast');
                });
            } else if(\$(this).scrollTop() <= 100 && \$menu.hasClass(\"fixed\")) {
                \$menu.fadeOut('fast',function(){
                    \$(this).removeClass(\"fixed transbg\")
                           .addClass(\"default\")
                           .fadeIn('fast');
                });
            }
        });
\t});
    //jQuery
\t</script>
\t<script>
\t\t/*menu*/
\t\tfunction calculateScroll() {
\t\t\tvar contentTop      =   [];
\t\t\tvar contentBottom   =   [];
\t\t\tvar winTop      =   \$(window).scrollTop();
\t\t\tvar rangeTop    =   200;
\t\t\tvar rangeBottom =   500;
\t\t\t\$('.navmenu').find('a').each(function(){
\t\t\t\tcontentTop.push( \$( \$(this).attr('href') ).offset().top );
\t\t\t\tcontentBottom.push( \$( \$(this).attr('href') ).offset().top + \$( \$(this).attr('href') ).height() );
\t\t\t})
\t\t\t\$.each( contentTop, function(i){
\t\t\t\tif ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){
\t\t\t\t\t\$('.navmenu li')
\t\t\t\t\t.removeClass('active')
\t\t\t\t\t.eq(i).addClass('active');\t\t\t\t
\t\t\t\t}
\t\t\t})
\t\t};
\t\t
\t\t\$(document).ready(function(){
\t\t\tcalculateScroll();
\t\t\t\$(window).scroll(function(event) {
\t\t\t\tcalculateScroll();
\t\t\t});
\t\t\t\$('.navmenu ul li a').click(function() {  
\t\t\t\t\$('html, body').animate({scrollTop: \$(this.hash).offset().top - 80}, 800);
\t\t\t\treturn false;
\t\t\t});
\t\t});\t\t
\t</script>\t
\t<script>

\t\tjQuery(document).ready(function(){
\t\t\tjQuery(\".pretty a[rel^='prettyPhoto']\").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});
\t\t\t
\t\t});
\t</script>
\t";
        // line 205
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 206
        echo "\t</body>
\t<script type=\"text/javascript\">
\t\$(document).ready(function() {
\t\t\$(\".fancybox\").fancybox();
\t});
</script>
\t
</html>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/kevin-timber/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 206,  247 => 205,  117 => 77,  113 => 76,  109 => 74,  105 => 73,  100 => 70,  96 => 69,  89 => 64,  85 => 63,  77 => 57,  75 => 56,  67 => 50,  63 => 49,  37 => 25,  35 => 16,  30 => 13,  28 => 8,  19 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="ru">*/
/*   <head>*/
/* 		<title>Мебель на заказ</title>*/
/* 		<meta charset="utf-8" />*/
/* 		<meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* 		<!-- Styles -->*/
/* 		<link rel="stylesheet" type="text/css" href="{{ ['assets/css/bootstrap.css', */
/* 		                                                 'assets/css/font-awesome.css', */
/* 		                                                 'assets/css/camera.css', */
/* 		                                                 'assets/css/slicknav.css', */
/* 		                                                 'assets/css/prettyPhoto.css', */
/* 		                                                 'assets/css/style.css']|theme }}">*/
/* 		                                                 */
/* 		<!-- Scripts -->*/
/* 		<script type="text/javascript" src="{{ ['assets/js/jquery-1.8.3.min.js', */
/* 		                                        'assets/js/jquery.mobile.customized.min.js', */
/* 		                                        'assets/js/jquery.easing.1.3.js', */
/* 		                                        'assets/js/camera.min.js', */
/* 		                                        'assets/js/myscript.js', */
/* 		                                        'assets/js/sorting.js', */
/* 		                                        'assets/js/jquery.isotope.js', */
/* 		                                        'assets/js/jquery.prettyPhoto.js', */
/* 		                                        'assets/js/bootstrap.min.js', */
/* 		                                        'assets/js/jquery.slicknav.js']|theme }}"></script>*/
/* 		<script id="tinyhippos-injected">if (window.top.ripple) { window.top.ripple("bootstrap").inject(window, document); }</script><!--<![endif]-->*/
/* 		<script>*/
/* 			jQuery(function(){*/
/* 					jQuery('#camera_wrap_1').camera({*/
/* 					transPeriod: 500,*/
/* 					time: 3000,*/
/* 					height: '490px',*/
/* 					thumbnails: false,*/
/* 					pagination: true,*/
/* 					playPause: false,*/
/* 					loader: false,*/
/* 					navigation: false,*/
/* 					hover: false*/
/* 				});*/
/* 			});*/
/* 		</script>*/
/* 		*/
/* 	</head>*/
/* 	<body>*/
/*     */
/*     <!--home start-->*/
/*     <div id="home">*/
/*         <div class="headerLine">*/
/* 	        {% partial 'menu' %}*/
/* 	        */
/* 	    </div>*/
/* 	*/
/*     </div>*/
/*     */
/*  */
/*   {%page%}*/
/*   */
/*     */
/*  */
/*     */
/*     <!--contact start*/
/*     <div id="contact">*/
/*     	{% partial 'contact-form-details' %}*/
/* 		<div class="line6">*/
/* 		    Google Maps*/
/* 			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d48386.401887313725!2d-73.9407136!3d40.7147117!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sru!2sua!4v1402409149092" width="100%" height="750" frameborder="0" style="border:0"></iframe>	*/
/* 		</div>-->*/
/* 		<div class="container">*/
/* 			{% partial 'contact-text' %}*/
/* 		</div>*/
/* 		<div class="line7">*/
/* 			<!-- Subscribe -->*/
/* 			{% partial 'subscribe' %}*/
/* 		</div>*/
/* 		<div class="lineBlack">*/
/* 			{% partial 'footer' %}*/
/* 		</div>*/
/*     </div>		*/
/* 		*/
/* 	<script>*/
/* 			$(document).ready(function(){*/
/* 			$(".bhide").click(function(){*/
/* 				$(".hideObj").slideDown();*/
/* 				$(this).hide(); //.attr()*/
/* 				return false;*/
/* 			});*/
/* 			$(".bhide2").click(function(){*/
/* 				$(".container.hideObj2").slideDown();*/
/* 				$(this).hide(); // .attr()*/
/* 				return false;*/
/* 			});*/
/* 				*/
/* 			$('.heart').mouseover(function(){*/
/* 					$(this).find('i').removeClass('fa-heart-o').addClass('fa-heart');*/
/* 				}).mouseout(function(){*/
/* 					$(this).find('i').removeClass('fa-heart').addClass('fa-heart-o');*/
/* 				});*/
/* 				*/
/* 				function sdf_FTS(_number,_decimal,_separator)*/
/* 				{*/
/* 				var decimal=(typeof(_decimal)!='undefined')?_decimal:2;*/
/* 				var separator=(typeof(_separator)!='undefined')?_separator:'';*/
/* 				var r=parseFloat(_number)*/
/* 				var exp10=Math.pow(10,decimal);*/
/* 				r=Math.round(r*exp10)/exp10;*/
/* 				rr=Number(r).toFixed(decimal).toString().split('.');*/
/* 				b=rr[0].replace(/(\d{1,3}(?=(\d{3})+(?:\.\d|\b)))/g,"\$1"+separator);*/
/* 				r=(rr[1]?b+'.'+rr[1]:b);*/
/* */
/* 				return r;*/
/* }*/
/* 				*/
/* 			setTimeout(function(){*/
/* 					$('#counter').text('0');*/
/* 					$('#counter1').text('0');*/
/* 					$('#counter2').text('0');*/
/* 					setInterval(function(){*/
/* 						*/
/* 						var curval=parseInt($('#counter').text());*/
/* 						var curval1=parseInt($('#counter1').text().replace(' ',''));*/
/* 						var curval2=parseInt($('#counter2').text());*/
/* 						if(curval<=707){*/
/* 							$('#counter').text(curval+1);*/
/* 						}*/
/* 						if(curval1<=12280){*/
/* 							$('#counter1').text(sdf_FTS((curval1+20),0,' '));*/
/* 						}*/
/* 						if(curval2<=245){*/
/* 							$('#counter2').text(curval2+1);*/
/* 						}*/
/* 					}, 2);*/
/* 					*/
/* 				}, 500);*/
/* 			});*/
/* 	</script>*/
/* 	<script type="text/javascript">*/
/* 	jQuery(document).ready(function(){*/
/* 		jQuery('#menu').slicknav();*/
/* 		*/
/* 	});*/
/* 	</script>*/
/* 	*/
/* 	<script type="text/javascript">*/
/*     $(document).ready(function(){*/
/*        */
/*         var $menu = $("#menuF");*/
/*             */
/*         $(window).scroll(function(){*/
/*             if ( $(this).scrollTop() > 100 && $menu.hasClass("default") ){*/
/*                 $menu.fadeOut('fast',function(){*/
/*                     $(this).removeClass("default")*/
/*                            .addClass("fixed transbg")*/
/*                            .fadeIn('fast');*/
/*                 });*/
/*             } else if($(this).scrollTop() <= 100 && $menu.hasClass("fixed")) {*/
/*                 $menu.fadeOut('fast',function(){*/
/*                     $(this).removeClass("fixed transbg")*/
/*                            .addClass("default")*/
/*                            .fadeIn('fast');*/
/*                 });*/
/*             }*/
/*         });*/
/* 	});*/
/*     //jQuery*/
/* 	</script>*/
/* 	<script>*/
/* 		/*menu*//* */
/* 		function calculateScroll() {*/
/* 			var contentTop      =   [];*/
/* 			var contentBottom   =   [];*/
/* 			var winTop      =   $(window).scrollTop();*/
/* 			var rangeTop    =   200;*/
/* 			var rangeBottom =   500;*/
/* 			$('.navmenu').find('a').each(function(){*/
/* 				contentTop.push( $( $(this).attr('href') ).offset().top );*/
/* 				contentBottom.push( $( $(this).attr('href') ).offset().top + $( $(this).attr('href') ).height() );*/
/* 			})*/
/* 			$.each( contentTop, function(i){*/
/* 				if ( winTop > contentTop[i] - rangeTop && winTop < contentBottom[i] - rangeBottom ){*/
/* 					$('.navmenu li')*/
/* 					.removeClass('active')*/
/* 					.eq(i).addClass('active');				*/
/* 				}*/
/* 			})*/
/* 		};*/
/* 		*/
/* 		$(document).ready(function(){*/
/* 			calculateScroll();*/
/* 			$(window).scroll(function(event) {*/
/* 				calculateScroll();*/
/* 			});*/
/* 			$('.navmenu ul li a').click(function() {  */
/* 				$('html, body').animate({scrollTop: $(this.hash).offset().top - 80}, 800);*/
/* 				return false;*/
/* 			});*/
/* 		});		*/
/* 	</script>	*/
/* 	<script>*/
/* */
/* 		jQuery(document).ready(function(){*/
/* 			jQuery(".pretty a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true, social_tools: ''});*/
/* 			*/
/* 		});*/
/* 	</script>*/
/* 	{%framework extras%}*/
/* 	</body>*/
/* 	<script type="text/javascript">*/
/* 	$(document).ready(function() {*/
/* 		$(".fancybox").fancybox();*/
/* 	});*/
/* </script>*/
/* 	*/
/* </html>*/
