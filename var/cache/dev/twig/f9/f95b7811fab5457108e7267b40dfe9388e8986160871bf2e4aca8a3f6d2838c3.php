<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_bd839a623d41e65c7ad875f8876c26b53612d034a2fd2ba100c18e03a3c8b771 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_12384f0339066948cd9f43956d1c78c26400d46a5a63a29b5eab96752ec20259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12384f0339066948cd9f43956d1c78c26400d46a5a63a29b5eab96752ec20259->enter($__internal_12384f0339066948cd9f43956d1c78c26400d46a5a63a29b5eab96752ec20259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_5f5c164497452abe5a8a23d0ce24cc561e129e4c2efab36a017a960daa4a3dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f5c164497452abe5a8a23d0ce24cc561e129e4c2efab36a017a960daa4a3dad->enter($__internal_5f5c164497452abe5a8a23d0ce24cc561e129e4c2efab36a017a960daa4a3dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12384f0339066948cd9f43956d1c78c26400d46a5a63a29b5eab96752ec20259->leave($__internal_12384f0339066948cd9f43956d1c78c26400d46a5a63a29b5eab96752ec20259_prof);

        
        $__internal_5f5c164497452abe5a8a23d0ce24cc561e129e4c2efab36a017a960daa4a3dad->leave($__internal_5f5c164497452abe5a8a23d0ce24cc561e129e4c2efab36a017a960daa4a3dad_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b8a5b4b9d166d38f56c0ed1c5f4e3c6c8c0527516b94ea570eca9c238ee86eb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8a5b4b9d166d38f56c0ed1c5f4e3c6c8c0527516b94ea570eca9c238ee86eb9->enter($__internal_b8a5b4b9d166d38f56c0ed1c5f4e3c6c8c0527516b94ea570eca9c238ee86eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_174d4486d64393af6d29a017f1cd5ec2a9d94a10006c2051f8335867c664113e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_174d4486d64393af6d29a017f1cd5ec2a9d94a10006c2051f8335867c664113e->enter($__internal_174d4486d64393af6d29a017f1cd5ec2a9d94a10006c2051f8335867c664113e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_174d4486d64393af6d29a017f1cd5ec2a9d94a10006c2051f8335867c664113e->leave($__internal_174d4486d64393af6d29a017f1cd5ec2a9d94a10006c2051f8335867c664113e_prof);

        
        $__internal_b8a5b4b9d166d38f56c0ed1c5f4e3c6c8c0527516b94ea570eca9c238ee86eb9->leave($__internal_b8a5b4b9d166d38f56c0ed1c5f4e3c6c8c0527516b94ea570eca9c238ee86eb9_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8b0d0b16c3a3a74499fd07338409097ea6b641120099f66a32246fb998577ea7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b0d0b16c3a3a74499fd07338409097ea6b641120099f66a32246fb998577ea7->enter($__internal_8b0d0b16c3a3a74499fd07338409097ea6b641120099f66a32246fb998577ea7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_240479d852afe5736a1fae4f6c8d13e8ed8e4859f4792e4a7b111735fa93afe0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240479d852afe5736a1fae4f6c8d13e8ed8e4859f4792e4a7b111735fa93afe0->enter($__internal_240479d852afe5736a1fae4f6c8d13e8ed8e4859f4792e4a7b111735fa93afe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_240479d852afe5736a1fae4f6c8d13e8ed8e4859f4792e4a7b111735fa93afe0->leave($__internal_240479d852afe5736a1fae4f6c8d13e8ed8e4859f4792e4a7b111735fa93afe0_prof);

        
        $__internal_8b0d0b16c3a3a74499fd07338409097ea6b641120099f66a32246fb998577ea7->leave($__internal_8b0d0b16c3a3a74499fd07338409097ea6b641120099f66a32246fb998577ea7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1756a378e8348c74fbf7bd899efe1f9547378cfcd167140ccc7fe8b16fb9f104 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1756a378e8348c74fbf7bd899efe1f9547378cfcd167140ccc7fe8b16fb9f104->enter($__internal_1756a378e8348c74fbf7bd899efe1f9547378cfcd167140ccc7fe8b16fb9f104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_921a83d474a8588970a6e8976705c07e421794d5058fabd56d206b52649d277a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_921a83d474a8588970a6e8976705c07e421794d5058fabd56d206b52649d277a->enter($__internal_921a83d474a8588970a6e8976705c07e421794d5058fabd56d206b52649d277a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_921a83d474a8588970a6e8976705c07e421794d5058fabd56d206b52649d277a->leave($__internal_921a83d474a8588970a6e8976705c07e421794d5058fabd56d206b52649d277a_prof);

        
        $__internal_1756a378e8348c74fbf7bd899efe1f9547378cfcd167140ccc7fe8b16fb9f104->leave($__internal_1756a378e8348c74fbf7bd899efe1f9547378cfcd167140ccc7fe8b16fb9f104_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/Users/dream/www/blindress/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
