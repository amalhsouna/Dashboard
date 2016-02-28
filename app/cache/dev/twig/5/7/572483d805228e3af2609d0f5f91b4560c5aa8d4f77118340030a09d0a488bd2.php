<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_572483d805228e3af2609d0f5f91b4560c5aa8d4f77118340030a09d0a488bd2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
    <div class=\"top-content identification\">
        <ul class=\"bxslider\">
            <li><img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/AccueilTemplate/assets/img/1.jpg"), "html", null, true);
        echo "\" /></li>

            <li><img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/AccueilTemplate/assets/img/2.jpg"), "html", null, true);
        echo "\" /> </li>

        </ul>
        <div class=\"inner-bg\">
            <div class=\"container\">

                <div class=\"row\">
                    <div class=\"col-sm-6 col-sm-offset-3 form-box\">
                        <div class=\"form-top\">
                            <div class=\"form-top-left\">
                                <h3>Connectez-vous  </h3>

                            </div>
                            <div class=\"form-top-right\">
                                <i class=\"fa fa-lock\"></i>
                            </div>
                        </div>
                        ";
        // line 28
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 29
            echo "                        <div class=\"erreur-identification\">
                            <i class=\"glyphicon glyphicon-remove\"></i>
                            ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                        </div>
                        ";
        }
        // line 34
        echo "                        <div class=\"form-bottom\">
                        <form action=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\"  class=\"login-form\">
                           <div class=\"form-group\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 37
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                            <label class=\"sr-only\" for=\"form-username\">Username</label>
                            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" class=\"form-username form-control\" />
                             </div>
                             <div class=\"form-group\">
                              <label class=\"sr-only\" for=\"form-password\">Password</label>
                              <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" class=\"form-password form-control\" />
                            </div>

                            <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                            <label for=\"remember_me\" class=\"label-remebre\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                            <div class=\"footer\">
                               <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" class=\"btn\"/>
                                </div>

\t\t\t                    </form>
\t\t                    </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>

";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 49,  97 => 47,  86 => 39,  81 => 37,  76 => 35,  73 => 34,  67 => 31,  63 => 29,  61 => 28,  41 => 11,  36 => 9,  31 => 6,  28 => 5,  11 => 1,);
    }
}
