<?php

/* message/add.php */
class __TwigTemplate_02e877deaabbf0fc94094d156457b4a8573f30239c20f622151a7b4e8167402f extends Twig_Template
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
 
\t<meta charset=\"UTF-8\">
\t<title>留言添加</title>
\t<link href=\"public/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
</head>
<body>
\t<form class=\"form-horizontal\" role=\"form\" action=\"index.php?c=message&a=save\" method=\"post\">
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">标题</label>
    <div class=\"col-sm-6\">
      <input type=\"text\" class=\"form-control\" id=\"inputtitle\" required name=\"title\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">内容</label>
    <div class=\"col-sm-6\">
      <textarea class=\"form-control\" rows=\"3\" required name=\"content\"></textarea>
  \t</div>
  </div>
      <button type=\"submit\" class=\"btn btn-success btn-lg\" style=\"margin-left:285px;\">提交</button>
</form>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "message/add.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"en\">
<head>
 
\t<meta charset=\"UTF-8\">
\t<title>留言添加</title>
\t<link href=\"public/bootstrap/dist/css/bootstrap.min.css\" rel=\"stylesheet\">
</head>
<body>
\t<form class=\"form-horizontal\" role=\"form\" action=\"index.php?c=message&a=save\" method=\"post\">
  <div class=\"form-group\">
    <label for=\"inputEmail3\" class=\"col-sm-2 control-label\">标题</label>
    <div class=\"col-sm-6\">
      <input type=\"text\" class=\"form-control\" id=\"inputtitle\" required name=\"title\">
    </div>
  </div>
  <div class=\"form-group\">
    <label for=\"inputPassword3\" class=\"col-sm-2 control-label\">内容</label>
    <div class=\"col-sm-6\">
      <textarea class=\"form-control\" rows=\"3\" required name=\"content\"></textarea>
  \t</div>
  </div>
      <button type=\"submit\" class=\"btn btn-success btn-lg\" style=\"margin-left:285px;\">提交</button>
</form>
</body>
</html>";
    }
}
