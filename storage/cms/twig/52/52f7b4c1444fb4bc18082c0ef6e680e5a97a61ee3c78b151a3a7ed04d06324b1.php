<?php

/* /home/ubuntu/workspace/themes/kevin-timber/pages/stranica-vhoda.htm */
class __TwigTemplate_936adc3dffee2e6bffd96e2c486c26ad8f5fcaca9c92546593845f0a7c87a744 extends Twig_Template
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
        echo "<header class=\"site-header\" role=\"banner\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-12\">
        <h1 class=\"page-title\">Страница входа</h1>
      </div>
    </div>
  </div>
</header>

<div class=\"row\">
    <div class=\"col-sm-8 col-sm-offset-2\"
";
        // line 13
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("account"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 14
        echo "

        </div>
      </div>";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/themes/kevin-timber/pages/stranica-vhoda.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 14,  33 => 13,  19 => 1,);
    }
}
/* <header class="site-header" role="banner">*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-12">*/
/*         <h1 class="page-title">Страница входа</h1>*/
/*       </div>*/
/*     </div>*/
/*   </div>*/
/* </header>*/
/* */
/* <div class="row">*/
/*     <div class="col-sm-8 col-sm-offset-2"*/
/* {% component 'account' %}*/
/* */
/* */
/*         </div>*/
/*       </div>*/
