<?php

/* /home/ubuntu/workspace/plugins/hariadi/share/components/share/default.htm */
class __TwigTemplate_d1f034e1bfe8fa8d17293a47c2d8cf19f9beb7ed4bd86e1f319c82d9c68a1e12 extends Twig_Template
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
        echo "<div class=\"oc-share\">
    <div class=\"btn-group\">
      <button class=\"btn btn-default btn-xs disabled\">Share:</button> 

      \t";
        // line 5
        if ((isset($context["facebook"]) ? $context["facebook"] : null)) {
            // line 6
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Facebook\" href=\"http://www.facebook.com/sharer.php?u=";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">
            <i class=\"icon-facebook\"></i>
        </a>
        ";
        }
        // line 10
        echo "
        ";
        // line 11
        if ((isset($context["twitter"]) ? $context["twitter"] : null)) {
            // line 12
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Twitter\" href=\"http://twitter.com/share?url=";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">
            <i class=\"icon-twitter\"></i>
        </a>
        ";
        }
        // line 16
        echo "
        ";
        // line 17
        if ((isset($context["googleplus"]) ? $context["googleplus"] : null)) {
            // line 18
            echo "        <a class=\"btn btn-default btn-xs\" target=\"_blank\" title=\"On Google Plus\" href=\"https://plus.google.com/share?url=";
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
            echo "\">
            <i class=\"icon-google-plus\"></i>
        </a>
        ";
        }
        // line 22
        echo "        
    </div>
</div>
 ";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/plugins/hariadi/share/components/share/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 22,  53 => 18,  51 => 17,  48 => 16,  40 => 12,  38 => 11,  35 => 10,  27 => 6,  25 => 5,  19 => 1,);
    }
}
/* <div class="oc-share">*/
/*     <div class="btn-group">*/
/*       <button class="btn btn-default btn-xs disabled">Share:</button> */
/* */
/*       	{% if facebook %}*/
/*         <a class="btn btn-default btn-xs" target="_blank" title="On Facebook" href="http://www.facebook.com/sharer.php?u={{url}}">*/
/*             <i class="icon-facebook"></i>*/
/*         </a>*/
/*         {% endif %}*/
/* */
/*         {% if twitter %}*/
/*         <a class="btn btn-default btn-xs" target="_blank" title="On Twitter" href="http://twitter.com/share?url={{url}}">*/
/*             <i class="icon-twitter"></i>*/
/*         </a>*/
/*         {% endif %}*/
/* */
/*         {% if googleplus %}*/
/*         <a class="btn btn-default btn-xs" target="_blank" title="On Google Plus" href="https://plus.google.com/share?url={{url}}">*/
/*             <i class="icon-google-plus"></i>*/
/*         </a>*/
/*         {% endif %}*/
/*         */
/*     </div>*/
/* </div>*/
/*  */
