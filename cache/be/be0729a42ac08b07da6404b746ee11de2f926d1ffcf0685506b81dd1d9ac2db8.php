<?php

/* message/jump.php */
class __TwigTemplate_f04879e7acbbef586dbc95755344671547883f7b55ba08c1d80e5d480ad4eae4 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"Refresh\"content=\"2;URL=";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : null), "html", null, true);
        echo "\">
    <title>成功</title>
</head>
<body>
<p>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["msg"]) ? $context["msg"] : null), "html", null, true);
        echo "</p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "message/jump.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  25 => 5,  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"Refresh\"content=\"2;URL={{ url }}\">
    <title>成功</title>
</head>
<body>
<p>{{ msg }}</p>
</body>
</html>";
    }
}
