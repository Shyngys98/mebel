<?php

/* /home/ubuntu/workspace/themes/kevin-timber/pages/kontakty.htm */
class __TwigTemplate_9d504eb22fba035264ef45039d7d3ae835f0dc123e0b48c4bb9fac84dbba9fe9 extends Twig_Template
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
        echo "<div class=\"line5\">\t\t\t\t\t
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row Ama\">
\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<h3>КЫ</h3>
\t\t\t\t\t<p>Get in touch with us</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-9 col-xs-12 forma\">
\t\t\t\t\t<form data-request=\"onSend\" data-request-redirect=\"/\">
\t\t\t\t\t\t<input type=\"text\" class=\"col-md-6 col-xs-12 name\" name='Name' placeholder='Имя '/>
\t\t\t\t\t\t<input type=\"text\" class=\"col-md-6 col-xs-12 Email\" name='Email' placeholder='Email '/>
\t\t\t\t\t\t<input type=\"text\" class=\"col-md-12 col-xs-12 Subject\" name='Number' placeholder='Номер телефона '/>
\t\t\t\t\t\t<textarea class=\"col-md-12 col-xs-12 Message\" placeholder=\"Сообщения \"></textarea>
\t\t\t\t\t\t<div class=\"cBtn col-xs-12\">
\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=submit>Отправить</button>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 col-xs-12 cont\">
\t\t\t\t\t<ul>
\t\t\t\t\t

      \t<li>";
        // line 31
        if ((isset($context["facebook"]) ? $context["facebook"] : null)) {
            // line 32
            echo "        <a target=\"_blank\" title=\"On Facebook\" href=\"http://www.facebook.com/sharer.php?u=";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">
           <i class=\"fa fa-facebook-square\"></i>facebook
        </a>
        ";
        }
        // line 35
        echo "</li>

        <li>";
        // line 37
        if ((isset($context["twitter"]) ? $context["twitter"] : null)) {
            // line 38
            echo "        <a  target=\"_blank\" title=\"On Twitter\" href=\"http://twitter.com/share?url=";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">
           <i class=\"fa fa-twitter\"></i>Twitter
        </a>
        ";
        }
        // line 41
        echo "</li>

        ";
        // line 43
        if ((isset($context["googleplus"]) ? $context["googleplus"] : null)) {
            // line 44
            echo "        <li><a  target=\"_blank\" title=\"On Vk\" href=\"http://vk.com/share.php?url=";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">
            <i class=\"fa fa-vk\"></i>vk
        </a>
        ";
        }
        // line 47
        echo "</li>
        
 
\t\t\t\t\t\t<li><i class=\"fa fa-home\"></i>г. Алматы, Шанырак-1, Есентай-35</li>
\t\t\t\t\t\t<li><i class=\"fa fa-whatsapp\"></i> 8 707 823 24 82 (Whatsapp)</li>
\t\t\t\t\t\t<li><i class=\"fa fa-phone\"></i>8(727)2 46 58 77, 8 777 172 21 26</li>
\t\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-envelope\"></i>chingis_98@mail.ru</a></li>
\t\t\t\t\t

\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/kevin-timber/pages/kontakty.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 47,  81 => 44,  79 => 43,  75 => 41,  67 => 38,  65 => 37,  61 => 35,  53 => 32,  51 => 31,  19 => 1,);
    }
}
/* <div class="line5">					*/
/* 			<div class="container">*/
/* 				<div class="row Ama">*/
/* 					<div class="col-md-12">*/
/* 					<h3>КЫ</h3>*/
/* 					<p>Get in touch with us</p>*/
/* 					</div>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	<div class="container">*/
/* 			<div class="row">*/
/* 				<div class="col-md-9 col-xs-12 forma">*/
/* 					<form data-request="onSend" data-request-redirect="/">*/
/* 						<input type="text" class="col-md-6 col-xs-12 name" name='Name' placeholder='Имя '/>*/
/* 						<input type="text" class="col-md-6 col-xs-12 Email" name='Email' placeholder='Email '/>*/
/* 						<input type="text" class="col-md-12 col-xs-12 Subject" name='Number' placeholder='Номер телефона '/>*/
/* 						<textarea class="col-md-12 col-xs-12 Message" placeholder="Сообщения "></textarea>*/
/* 						<div class="cBtn col-xs-12">*/
/* 							<ul>*/
/* 								*/
/* 								<button class="btn btn-primary" type=submit>Отправить</button>*/
/* 							</ul>*/
/* 						</div>*/
/* 					</form>*/
/* 				</div>*/
/* 				<div class="col-md-3 col-xs-12 cont">*/
/* 					<ul>*/
/* 					*/
/* */
/*       	<li>{% if facebook %}*/
/*         <a target="_blank" title="On Facebook" href="http://www.facebook.com/sharer.php?u={{url}}">*/
/*            <i class="fa fa-facebook-square"></i>facebook*/
/*         </a>*/
/*         {% endif %}</li>*/
/* */
/*         <li>{% if twitter %}*/
/*         <a  target="_blank" title="On Twitter" href="http://twitter.com/share?url={{url}}">*/
/*            <i class="fa fa-twitter"></i>Twitter*/
/*         </a>*/
/*         {% endif %}</li>*/
/* */
/*         {% if googleplus %}*/
/*         <li><a  target="_blank" title="On Vk" href="http://vk.com/share.php?url={{url}}">*/
/*             <i class="fa fa-vk"></i>vk*/
/*         </a>*/
/*         {% endif %}</li>*/
/*         */
/*  */
/* 						<li><i class="fa fa-home"></i>г. Алматы, Шанырак-1, Есентай-35</li>*/
/* 						<li><i class="fa fa-whatsapp"></i> 8 707 823 24 82 (Whatsapp)</li>*/
/* 						<li><i class="fa fa-phone"></i>8(727)2 46 58 77, 8 777 172 21 26</li>*/
/* 						<li><a href="#"><i class="fa fa-envelope"></i>chingis_98@mail.ru</a></li>*/
/* 					*/
/* */
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
