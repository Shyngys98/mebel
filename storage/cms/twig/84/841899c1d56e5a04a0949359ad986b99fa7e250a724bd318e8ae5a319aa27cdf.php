<?php

/* /home/ubuntu/workspace/themes/kevin-timber/partials/menu.htm */
class __TwigTemplate_fcf07a45360ed7ba5576b1fc34f718958fefabfe8da8a4188515bfd99c6fff31 extends Twig_Template
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
        echo "<div id=\"menuF\" class=\"default\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"navmenu\" style=\"text-align: center;\">
\t\t\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t\t\t<li class=\"active\" ><a href=\"/\">Главная</a></li>
\t\t\t\t\t\t
\t\t\t\t\t\t\t<li><!-- Single button -->
<div class=\"btn-group\">
\t<div >
  <button type=\"button\" class=\"btn btn-default  dropdown-toggle .dropdown-backdrop\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
    Столярные изделия <span class=\"caret\"></span>
  </button>
  <ul class=\"dropdown-menu\">
    <li><a href=\"/kuhnya\">Кухня</a></li>
    <li><a href=\"/gost\">Гостиная</a></li>
    <li><a href=\"/spal\">Спальня</a></li>
   
  </ul>
</div></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 23
        echo $this->env->getExtension('CMS')->pageFilter("dostavka");
        echo "\">Доставка</a></li>
\t\t\t\t\t\t\t<li><a href=\"/contact\">Контакты</a></li>
\t\t\t\t\t\t\t<li><a href=\"/zakaz\">Мебель на заказ</a></li>
\t\t\t\t\t\t\t";
        // line 26
        if ((isset($context["user"]) ? $context["user"] : null)) {
            // line 27
            echo "\t\t\t\t\t\t\t<li> <a href=\"#\" data-request=\"onLogout\">Выход</a></li>
\t\t\t\t\t\t\t";
        } else {
            // line 29
            echo "\t\t\t\t\t\t\t<li role=\"menuitem\"> <a href=\"/login\">Вход / Регистрация</a></li>
\t\t\t\t\t\t\t";
        }
        // line 31
        echo "\t\t\t\t\t\t\t<li> 8(727)2-46-58-77</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/kevin-timber/partials/menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 31,  55 => 29,  51 => 27,  49 => 26,  43 => 23,  19 => 1,);
    }
}
/* <div id="menuF" class="default">*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* 				*/
/* 				<div class="col-md-12">*/
/* 					<div class="navmenu" style="text-align: center;">*/
/* 						<ul id="menu">*/
/* 							<li class="active" ><a href="/">Главная</a></li>*/
/* 						*/
/* 							<li><!-- Single button -->*/
/* <div class="btn-group">*/
/* 	<div >*/
/*   <button type="button" class="btn btn-default  dropdown-toggle .dropdown-backdrop" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">*/
/*     Столярные изделия <span class="caret"></span>*/
/*   </button>*/
/*   <ul class="dropdown-menu">*/
/*     <li><a href="/kuhnya">Кухня</a></li>*/
/*     <li><a href="/gost">Гостиная</a></li>*/
/*     <li><a href="/spal">Спальня</a></li>*/
/*    */
/*   </ul>*/
/* </div></li>*/
/* 							<li><a href="{{'dostavka'|page}}">Доставка</a></li>*/
/* 							<li><a href="/contact">Контакты</a></li>*/
/* 							<li><a href="/zakaz">Мебель на заказ</a></li>*/
/* 							{% if user %}*/
/* 							<li> <a href="#" data-request="onLogout">Выход</a></li>*/
/* 							{% else %}*/
/* 							<li role="menuitem"> <a href="/login">Вход / Регистрация</a></li>*/
/* 							{% endif %}*/
/* 							<li> 8(727)2-46-58-77</li>*/
/* 						</ul>*/
/* 					</div>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
