<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_5acb4f6df4574b32815158efedb7f4d658121a670f0dc6186a1a34e03ce06523 extends Twig_Template
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
        $__internal_f2fbf98794657f3456d89b59589f3b77d0fba66d026e00f213f8f523a833160d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2fbf98794657f3456d89b59589f3b77d0fba66d026e00f213f8f523a833160d->enter($__internal_f2fbf98794657f3456d89b59589f3b77d0fba66d026e00f213f8f523a833160d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c2b2dde31aeac2453b2769f48712904c790882d6455d2ee9a71d43c5a3f48739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2b2dde31aeac2453b2769f48712904c790882d6455d2ee9a71d43c5a3f48739->enter($__internal_c2b2dde31aeac2453b2769f48712904c790882d6455d2ee9a71d43c5a3f48739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_f2fbf98794657f3456d89b59589f3b77d0fba66d026e00f213f8f523a833160d->leave($__internal_f2fbf98794657f3456d89b59589f3b77d0fba66d026e00f213f8f523a833160d_prof);

        
        $__internal_c2b2dde31aeac2453b2769f48712904c790882d6455d2ee9a71d43c5a3f48739->leave($__internal_c2b2dde31aeac2453b2769f48712904c790882d6455d2ee9a71d43c5a3f48739_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "C:\\xampp\\htdocs\\generalpro\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.txt.twig");
    }
}
