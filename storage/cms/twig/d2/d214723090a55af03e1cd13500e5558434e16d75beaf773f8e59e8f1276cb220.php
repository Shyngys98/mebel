<?php

/* /home/ubuntu/workspace/plugins/rainlab/user/components/resetpassword/restore.htm */
class __TwigTemplate_c5b585c5a005f82f4ec6cdfdcc7418e1892b3993d4a90cadf70413e87a39a666 extends Twig_Template
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
        echo "<p class=\"lead\">
    <strong>Lost your password?</strong> No problem! Enter your email address to verify your account.
</p>

<form
    data-request=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onRestorePassword\"
    data-request-update=\"'";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::reset': '#partialUserResetForm'\">
    <div class=\"form-group\">
        <label for=\"userRestoreEmail\">Email</label>
        <input name=\"email\" type=\"email\" class=\"form-control\" id=\"userRestoreEmail\" placeholder=\"Enter your email\">
    </div>

    <button type=\"submit\" class=\"btn btn-default\">Restore password</button>
</form>
";
    }

    public function getTemplateName()
    {
        return "/home/ubuntu/workspace/plugins/rainlab/user/components/resetpassword/restore.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 7,  26 => 6,  19 => 1,);
    }
}
/* <p class="lead">*/
/*     <strong>Lost your password?</strong> No problem! Enter your email address to verify your account.*/
/* </p>*/
/* */
/* <form*/
/*     data-request="{{ __SELF__ }}::onRestorePassword"*/
/*     data-request-update="'{{ __SELF__ }}::reset': '#partialUserResetForm'">*/
/*     <div class="form-group">*/
/*         <label for="userRestoreEmail">Email</label>*/
/*         <input name="email" type="email" class="form-control" id="userRestoreEmail" placeholder="Enter your email">*/
/*     </div>*/
/* */
/*     <button type="submit" class="btn btn-default">Restore password</button>*/
/* </form>*/
/* */
