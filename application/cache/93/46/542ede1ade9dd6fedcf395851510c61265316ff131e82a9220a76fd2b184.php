<?php

/* backend/dashboard.html */
class __TwigTemplate_9346542ede1ade9dd6fedcf395851510c61265316ff131e82a9220a76fd2b184 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("template/backend.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template/backend.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "        <ul class=\"badges\">
            <li><a class=\"badge\" href=\"#\">产品</a></li>
            <li><a class=\"badge\" href=\"#\">文章</a></li>
            <li><a class=\"badge\" href=\"#\">站点信息</a></li>
            <li><a class=\"badge\" href=\"#\">用户</a></li>
            <li><a class=\"badge\" href=\"#\">图片管理</a></li>
            <li><a class=\"badge\" href=\"#\">留言管理</a></li>
        </ul>
    ";
    }

    public function getTemplateName()
    {
        return "backend/dashboard.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,);
    }
}
