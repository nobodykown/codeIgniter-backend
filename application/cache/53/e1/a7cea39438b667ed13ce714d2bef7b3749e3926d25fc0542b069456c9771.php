<?php

/* template/backend.html */
class __TwigTemplate_53e1a7cea39438b667ed13ce714d2bef7b3749e3926d25fc0542b069456c9771 extends Twig_Template
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
<html lang=\"zh-CN\">
<head>
    <meta charset=\"UTF-8\">
    <title>vinko</title>
    <!-- TODO 更换位置 -->
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resource_url')->getCallable(), array("styles/vendor/font-awesome/css/font-awesome.min.css")), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resource_url')->getCallable(), array("styles/vendor/pure-min.css")), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resource_url')->getCallable(), array("styles/style.css")), "html", null, true);
        echo "\" />
</head>
<body>
    <section class=\"container\">
        <header id=\"head\" class=\"pure-g grid\">
            <section id=\"logo\" class=\"pure-u-1-6\">
                <a href=\"\">
                    <h1>站点名称</h1>
                </a>
            </section>
            <section id=\"sub-nav\" class=\"pure-u-7-12\"></section>
            <nav class=\"pure-u-1-4\" id=\"head-nav\">
                <a class=\"item\" href=\"\"><i class=\"fa fa-user\"></i>管理猿</a>
                <a class=\"item\" href=\"\"><i class=\"fa fa-sign-out\"></i>注销</a>
            </nav>
        </header>
        <section id=\"dashboard\" class=\"pure-g grid\">
            <section id=\"main\" class=\"pure-u-3-4\">
                <!-- 模块名字 -->
                <header id=\"module-name\">
                    <h1>管理猿 的信息</h1>
                </header>
                <!-- 模块内容 -->
                <article id=\"module-content\">
                    ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 36
        echo "                </article>
            </section>
            <!-- 边栏 -->
            <nav id=\"side-nav\" class=\"pure-u-1-4\">
                <!-- 站点信息 -->
                <section id=\"site-infos\">
                    <h3>站点名称</h3>
                </section>
                <ul class=\"items\">
                    <li class=\"item\"><a href=\"site.html\"><i class=\"fa fa-building-o\"></i>站点管理</a></li>
                    <li class=\"item current\"><a href=\"#\"><i class=\"fa fa-gift\"></i>产品管理</a></li>
                    <li class=\"item\"><a href=\"#\"><i class=\"fa fa-file-text-o\"></i>文章管理</a></li>
                    <li class=\"item\"><a href=\"#\"><i class=\"fa fa-table\"></i>添加分类</a></li>
                </ul>
            </nav>
        </section>
        <footer id=\"copyleft\" class=\"grid-clean\">
            <p>&copy; 2013 <a href=\"#\">站点名称</a> • Made by <a href=\"#\">VTM</a> with ♥ </p>
        </footer>
    </section>
</body>
<script src=\"http://code.jquery.com/jquery-2.0.2.min.js\"></script>
<script src=\"";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('resource_url')->getCallable(), array("scripts/vinko.js")), "html", null, true);
        echo "\"></script>
</html>
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "
                    ";
    }

    public function getTemplateName()
    {
        return "template/backend.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 34,  96 => 33,  89 => 58,  65 => 36,  63 => 33,  36 => 9,  32 => 8,  28 => 7,  20 => 1,);
    }
}
