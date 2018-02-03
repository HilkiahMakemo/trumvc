<?php

/* index.html */
class __TwigTemplate_edfcca22fd553bab7eaa336f64ec97e7c539e36ab96702d9a70ff8833d5231cd extends Twig_Template
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
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Page Title</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"main.css\" />
    <script src=\"main.js\"></script>
</head>
<body>
    <h1>WELCOME TO HELLO WORLD!</h1>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>Page Title</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" type=\"text/css\" media=\"screen\" href=\"main.css\" />
    <script src=\"main.js\"></script>
</head>
<body>
    <h1>WELCOME TO HELLO WORLD!</h1>
</body>
</html>", "index.html", "C:\\wamp64\\www\\wampsites\\TruMVC\\client\\views\\content\\index.html");
    }
}
