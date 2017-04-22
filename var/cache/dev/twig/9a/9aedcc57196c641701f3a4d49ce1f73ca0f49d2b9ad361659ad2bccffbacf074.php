<?php

/* base.html.twig */
class __TwigTemplate_ecb3622156435dcef755b54ddd8e4732d0aa1bb06c91b31273e3d3ad684eea6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_457b108559b45136f6e93474579af0e04c1459ba67403bcf76768d2a0704fd0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_457b108559b45136f6e93474579af0e04c1459ba67403bcf76768d2a0704fd0a->enter($__internal_457b108559b45136f6e93474579af0e04c1459ba67403bcf76768d2a0704fd0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_0c596dde95b1d1858731f706ca361355c95963c5a19b00a3e34f6d3da8550bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c596dde95b1d1858731f706ca361355c95963c5a19b00a3e34f6d3da8550bf0->enter($__internal_0c596dde95b1d1858731f706ca361355c95963c5a19b00a3e34f6d3da8550bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_457b108559b45136f6e93474579af0e04c1459ba67403bcf76768d2a0704fd0a->leave($__internal_457b108559b45136f6e93474579af0e04c1459ba67403bcf76768d2a0704fd0a_prof);

        
        $__internal_0c596dde95b1d1858731f706ca361355c95963c5a19b00a3e34f6d3da8550bf0->leave($__internal_0c596dde95b1d1858731f706ca361355c95963c5a19b00a3e34f6d3da8550bf0_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c1aa7e0812f966250f9cef79fdd056ae03bc0854e77c15bb17a9ed12d78fcfe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c1aa7e0812f966250f9cef79fdd056ae03bc0854e77c15bb17a9ed12d78fcfe->enter($__internal_3c1aa7e0812f966250f9cef79fdd056ae03bc0854e77c15bb17a9ed12d78fcfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9a0bcb096e0b2bb32ab81d0624288b34b300a0b8a0721a44baa3b5b397b936bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a0bcb096e0b2bb32ab81d0624288b34b300a0b8a0721a44baa3b5b397b936bb->enter($__internal_9a0bcb096e0b2bb32ab81d0624288b34b300a0b8a0721a44baa3b5b397b936bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_9a0bcb096e0b2bb32ab81d0624288b34b300a0b8a0721a44baa3b5b397b936bb->leave($__internal_9a0bcb096e0b2bb32ab81d0624288b34b300a0b8a0721a44baa3b5b397b936bb_prof);

        
        $__internal_3c1aa7e0812f966250f9cef79fdd056ae03bc0854e77c15bb17a9ed12d78fcfe->leave($__internal_3c1aa7e0812f966250f9cef79fdd056ae03bc0854e77c15bb17a9ed12d78fcfe_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e258953192130fe3685411102412e22ad3d250bce05113b3d12460c8b4f20b47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e258953192130fe3685411102412e22ad3d250bce05113b3d12460c8b4f20b47->enter($__internal_e258953192130fe3685411102412e22ad3d250bce05113b3d12460c8b4f20b47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_d674b56a9be8d6f9d186588e928565fbe3310b0782662f97afc0b19a96a2f21d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d674b56a9be8d6f9d186588e928565fbe3310b0782662f97afc0b19a96a2f21d->enter($__internal_d674b56a9be8d6f9d186588e928565fbe3310b0782662f97afc0b19a96a2f21d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d674b56a9be8d6f9d186588e928565fbe3310b0782662f97afc0b19a96a2f21d->leave($__internal_d674b56a9be8d6f9d186588e928565fbe3310b0782662f97afc0b19a96a2f21d_prof);

        
        $__internal_e258953192130fe3685411102412e22ad3d250bce05113b3d12460c8b4f20b47->leave($__internal_e258953192130fe3685411102412e22ad3d250bce05113b3d12460c8b4f20b47_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0ec043248a1e93466ae3cf1dd9767efc6715c1c80be6e87509448dfe629984a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0ec043248a1e93466ae3cf1dd9767efc6715c1c80be6e87509448dfe629984a->enter($__internal_d0ec043248a1e93466ae3cf1dd9767efc6715c1c80be6e87509448dfe629984a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ef306d7ec915a520cc97371b6cc3f662f31d28ccdb4c7ae10f36c65ef87bffea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef306d7ec915a520cc97371b6cc3f662f31d28ccdb4c7ae10f36c65ef87bffea->enter($__internal_ef306d7ec915a520cc97371b6cc3f662f31d28ccdb4c7ae10f36c65ef87bffea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ef306d7ec915a520cc97371b6cc3f662f31d28ccdb4c7ae10f36c65ef87bffea->leave($__internal_ef306d7ec915a520cc97371b6cc3f662f31d28ccdb4c7ae10f36c65ef87bffea_prof);

        
        $__internal_d0ec043248a1e93466ae3cf1dd9767efc6715c1c80be6e87509448dfe629984a->leave($__internal_d0ec043248a1e93466ae3cf1dd9767efc6715c1c80be6e87509448dfe629984a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1a674d74b6d49d2e21e480dc5c01ed478afe87c6051190b5bbdee1024245d532 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a674d74b6d49d2e21e480dc5c01ed478afe87c6051190b5bbdee1024245d532->enter($__internal_1a674d74b6d49d2e21e480dc5c01ed478afe87c6051190b5bbdee1024245d532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_729fbc6b8b27495587f0b07b5d037c1fc2f1990092ba7615bb874f47637ed33f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_729fbc6b8b27495587f0b07b5d037c1fc2f1990092ba7615bb874f47637ed33f->enter($__internal_729fbc6b8b27495587f0b07b5d037c1fc2f1990092ba7615bb874f47637ed33f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_729fbc6b8b27495587f0b07b5d037c1fc2f1990092ba7615bb874f47637ed33f->leave($__internal_729fbc6b8b27495587f0b07b5d037c1fc2f1990092ba7615bb874f47637ed33f_prof);

        
        $__internal_1a674d74b6d49d2e21e480dc5c01ed478afe87c6051190b5bbdee1024245d532->leave($__internal_1a674d74b6d49d2e21e480dc5c01ed478afe87c6051190b5bbdee1024245d532_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/Users/dream/www/blindress/app/Resources/views/base.html.twig");
    }
}
