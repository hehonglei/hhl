<?php

/* layout.html */
class __TwigTemplate_98af71385260ad87193b502ccdd97d738362653ec968a4444a82a630fe3d7184 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>模板</title>
</head>
<body>
\t<div class=\"header\">
\t\t这里是头部
\t</div>
\t<div class=\"content\">
\t\t";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 15
        echo "\t</div>
\t<div class=\"footer\">
\t\t这里是尾部
\t</div>
</body>
</html>";
    }

    // line 12
    public function block_content($context, array $blocks = array())
    {
        // line 13
        echo "
\t\t";
    }

    public function getTemplateName()
    {
        return "layout.html";
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  44 => 12,  35 => 15,  33 => 12,  20 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>模板</title>
</head>
<body>
\t<div class=\"header\">
\t\t这里是头部
\t</div>
\t<div class=\"content\">
\t\t{% block content %}

\t\t{% endblock %}
\t</div>
\t<div class=\"footer\">
\t\t这里是尾部
\t</div>
</body>
</html>";
    }
}
