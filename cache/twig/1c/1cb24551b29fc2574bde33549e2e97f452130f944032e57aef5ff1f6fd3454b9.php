<?php

/* layout.html */
class __TwigTemplate_dcd7c592132caacf09474f29badc02c5ab6507aae9ae16e61722ca0022e4dde6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
\t<title>Document</title>
</head>
<body>
\t<header> Header </header>
\t<content>
\t\t";
        // line 10
        $this->displayBlock('content', $context, $blocks);
        // line 13
        echo "\t<content>
\t<footer> Footer </footer>
</body>
</html>";
    }

    // line 10
    public function block_content($context, array $blocks = array())
    {
        // line 11
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  40 => 10,  33 => 13,  31 => 10,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\">
<head>
\t<meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">
\t<title>Document</title>
</head>
<body>
\t<header> Header </header>
\t<content>
\t\t{% block content %}

\t\t{% endblock %}
\t<content>
\t<footer> Footer </footer>
</body>
</html>", "layout.html", "/Users/Valen/www/Frame/app/views/layout.html");
    }
}
