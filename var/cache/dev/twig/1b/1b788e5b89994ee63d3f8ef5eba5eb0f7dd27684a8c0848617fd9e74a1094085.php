<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e32fe7bbc587592d7d02b52fb0d248e7f6247282752466e0f9c5031b2c7e618c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb779ce3ae9c0ce53fe5b320308d2ed76c055dc76c2a67ec091ace5c237e7567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb779ce3ae9c0ce53fe5b320308d2ed76c055dc76c2a67ec091ace5c237e7567->enter($__internal_bb779ce3ae9c0ce53fe5b320308d2ed76c055dc76c2a67ec091ace5c237e7567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_a52455301bb626a77caf4c326bc51082f9b7e63fc93a295349a169dee70ac590 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a52455301bb626a77caf4c326bc51082f9b7e63fc93a295349a169dee70ac590->enter($__internal_a52455301bb626a77caf4c326bc51082f9b7e63fc93a295349a169dee70ac590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb779ce3ae9c0ce53fe5b320308d2ed76c055dc76c2a67ec091ace5c237e7567->leave($__internal_bb779ce3ae9c0ce53fe5b320308d2ed76c055dc76c2a67ec091ace5c237e7567_prof);

        
        $__internal_a52455301bb626a77caf4c326bc51082f9b7e63fc93a295349a169dee70ac590->leave($__internal_a52455301bb626a77caf4c326bc51082f9b7e63fc93a295349a169dee70ac590_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f3ac8caa132a2226e6400e6f2971b49b5066602cee9719fdfd11e4758809bdd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3ac8caa132a2226e6400e6f2971b49b5066602cee9719fdfd11e4758809bdd7->enter($__internal_f3ac8caa132a2226e6400e6f2971b49b5066602cee9719fdfd11e4758809bdd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2b9965a564212316427195fcad9b912c42fcb5fcd8f65febde1bf9a4cc8b5b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b9965a564212316427195fcad9b912c42fcb5fcd8f65febde1bf9a4cc8b5b7b->enter($__internal_2b9965a564212316427195fcad9b912c42fcb5fcd8f65febde1bf9a4cc8b5b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_2b9965a564212316427195fcad9b912c42fcb5fcd8f65febde1bf9a4cc8b5b7b->leave($__internal_2b9965a564212316427195fcad9b912c42fcb5fcd8f65febde1bf9a4cc8b5b7b_prof);

        
        $__internal_f3ac8caa132a2226e6400e6f2971b49b5066602cee9719fdfd11e4758809bdd7->leave($__internal_f3ac8caa132a2226e6400e6f2971b49b5066602cee9719fdfd11e4758809bdd7_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8f5bb9c78b0ab168e4c551e28aef6523ac5f3fd5df93d2775f39ab622e80c856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f5bb9c78b0ab168e4c551e28aef6523ac5f3fd5df93d2775f39ab622e80c856->enter($__internal_8f5bb9c78b0ab168e4c551e28aef6523ac5f3fd5df93d2775f39ab622e80c856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dd49b312e55877e8fe6d313dca635b362df6d72a1f97bde052b41eee1a603b50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd49b312e55877e8fe6d313dca635b362df6d72a1f97bde052b41eee1a603b50->enter($__internal_dd49b312e55877e8fe6d313dca635b362df6d72a1f97bde052b41eee1a603b50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dd49b312e55877e8fe6d313dca635b362df6d72a1f97bde052b41eee1a603b50->leave($__internal_dd49b312e55877e8fe6d313dca635b362df6d72a1f97bde052b41eee1a603b50_prof);

        
        $__internal_8f5bb9c78b0ab168e4c551e28aef6523ac5f3fd5df93d2775f39ab622e80c856->leave($__internal_8f5bb9c78b0ab168e4c551e28aef6523ac5f3fd5df93d2775f39ab622e80c856_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c5a4dc9df73af5e3254988575b9d8bddeadde528b4343da6de23ed6185fada35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5a4dc9df73af5e3254988575b9d8bddeadde528b4343da6de23ed6185fada35->enter($__internal_c5a4dc9df73af5e3254988575b9d8bddeadde528b4343da6de23ed6185fada35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ef28da40890f8ea4c92740ff426ac9ea0a1e6966918b6d286f97ef3627b3aa83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef28da40890f8ea4c92740ff426ac9ea0a1e6966918b6d286f97ef3627b3aa83->enter($__internal_ef28da40890f8ea4c92740ff426ac9ea0a1e6966918b6d286f97ef3627b3aa83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ef28da40890f8ea4c92740ff426ac9ea0a1e6966918b6d286f97ef3627b3aa83->leave($__internal_ef28da40890f8ea4c92740ff426ac9ea0a1e6966918b6d286f97ef3627b3aa83_prof);

        
        $__internal_c5a4dc9df73af5e3254988575b9d8bddeadde528b4343da6de23ed6185fada35->leave($__internal_c5a4dc9df73af5e3254988575b9d8bddeadde528b4343da6de23ed6185fada35_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/Users/dream/www/blindress/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
