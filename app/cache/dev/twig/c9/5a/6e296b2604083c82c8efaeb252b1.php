<?php

/* AbdsMaincoreBundle:Default:index.html.twig */
class __TwigTemplate_c95a6e296b2604083c82c8efaeb252b1 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
  <body>
    Hello ";
        // line 3
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
  </body>
</html>

";
    }

    public function getTemplateName()
    {
        return "AbdsMaincoreBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
