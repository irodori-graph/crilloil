<?php

/* __string_template__0f1ee08723b6b93a2f3dbf031d3d551ad615cf55b29dfdcb3a97b3351caeb528 */
class __TwigTemplate_e01dd2d9392a0554526de856ab8df5498a19eae2c551cafe4e6b6a9b811466f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__0f1ee08723b6b93a2f3dbf031d3d551ad615cf55b29dfdcb3a97b3351caeb528", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["menus"] = array(0 => "store", 1 => "template", 2 => "template_list");
        // line 29
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "オーナーズストア";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "テンプレート管理";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "    <div class=\"row\" id=\"aside_wrap\">
        <form name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 33
        echo $this->env->getExtension('eccube')->getUrl("admin_store_template");
        echo "\">
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "_token", array()), 'widget');
        echo "
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "selected", array()), 'widget');
        echo "
        <div class=\"col-md-9\">
            <div class=\"box\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">テンプレート一覧</h3>
                </div><!-- /.box-header -->
                <div class=\"box-body\">
                    <div class=\"table_list\">
                        <div class=\"table-responsive with-border\">
                            <table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <th>選択</th>
                                    <th>名前</th>
                                    <th>保存先</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Templates"]) ? $context["Templates"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["Template"]) {
            // line 55
            echo "                                <tr>
                                    <td>
                                        <input type=\"radio\" name=\"template\" value=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["Template"], "id", array()), "html", null, true);
            echo "\" ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "config", array()), "template_code", array()) == $this->getAttribute($context["Template"], "code", array()))) {
                echo "checked=\"checked\"";
            }
            echo "/>
                                    </td>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["Template"], "name", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <ul>
                                            <li>app/template/";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["Template"], "code", array()), "html", null, true);
            echo "</li>
                                            <li>html/template/";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["Template"], "code", array()), "html", null, true);
            echo "</li>
                                        </ul>
                                    </td>
                                    <td class=\"icon_edit\">
                                        <div class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                            <ul class=\"dropdown-menu dropdown-menu-right\">
                                                <li><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_store_template_download", array("id" => $this->getAttribute($context["Template"], "id", array()))), "html", null, true);
            echo "\" >ダウンロード</a></li>
                                                ";
            // line 71
            if ($this->getAttribute($context["Template"], "default_template", array())) {
                // line 72
                echo "                                                    <li>
                                                        <a>削除</a>
                                                    </li>
                                                ";
            } else {
                // line 76
                echo "                                                        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('eccube')->getUrl("admin_store_template_delete", array("id" => $this->getAttribute($context["Template"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('eccube')->getCsrfTokenForAnchor();
                echo " data-method=\"delete\" data-message=\"このテンプレートを削除してもよろしいですか？\">削除</a></li>
                                                ";
            }
            // line 78
            echo "                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Template'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- /.box -->
        </div>
        <div class=\"col-md-3\" id=\"aside_column\">
            <div class=\"col_inner\">
                <div class=\"box no-header\">
                    <div class=\"box-body\">
                        <div class=\"row text-center\">
                            <div class=\"col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0\">
                                <button class=\"btn btn-primary btn-block btn-lg\"
                                        onclick=\"\$('#form_selected').val(\$('input[name=template]:checked').val());document.form1.submit()\">登録</button>
                            </div>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div>
        </div><!-- /.col -->
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__0f1ee08723b6b93a2f3dbf031d3d551ad615cf55b29dfdcb3a97b3351caeb528";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 83,  140 => 78,  132 => 76,  126 => 72,  124 => 71,  120 => 70,  110 => 63,  106 => 62,  100 => 59,  91 => 57,  87 => 55,  83 => 54,  61 => 35,  57 => 34,  53 => 33,  50 => 32,  47 => 31,  41 => 27,  35 => 26,  31 => 22,  29 => 29,  27 => 24,  11 => 22,);
    }
}
/* {#*/
/* This file is part of EC-CUBE*/
/* */
/* Copyright(c) 2000-2015 LOCKON CO.,LTD. All Rights Reserved.*/
/* */
/* http://www.lockon.co.jp/*/
/* */
/* This program is free software; you can redistribute it and/or*/
/* modify it under the terms of the GNU General Public License*/
/* as published by the Free Software Foundation; either version 2*/
/* of the License, or (at your option) any later version.*/
/* */
/* This program is distributed in the hope that it will be useful,*/
/* but WITHOUT ANY WARRANTY; without even the implied warranty of*/
/* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the*/
/* GNU General Public License for more details.*/
/* */
/* You should have received a copy of the GNU General Public License*/
/* along with this program; if not, write to the Free Software*/
/* Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.*/
/* #}*/
/* {% extends 'default_frame.twig' %}*/
/* */
/* {% set menus = ['store', 'template', 'template_list'] %}*/
/* */
/* {% block title %}オーナーズストア{% endblock %}*/
/* {% block sub_title %}テンプレート管理{% endblock %}*/
/* */
/* {% form_theme form 'Form/bootstrap_3_horizontal_layout.html.twig' %}*/
/* */
/* {% block main %}*/
/*     <div class="row" id="aside_wrap">*/
/*         <form name="form1" id="form1" method="post" action="{{ url('admin_store_template') }}">*/
/*         {{ form_widget(form._token) }}*/
/*         {{ form_widget(form.selected) }}*/
/*         <div class="col-md-9">*/
/*             <div class="box">*/
/*                 <div class="box-header">*/
/*                     <h3 class="box-title">テンプレート一覧</h3>*/
/*                 </div><!-- /.box-header -->*/
/*                 <div class="box-body">*/
/*                     <div class="table_list">*/
/*                         <div class="table-responsive with-border">*/
/*                             <table class="table table-striped">*/
/*                                 <thead>*/
/*                                 <tr>*/
/*                                     <th>選択</th>*/
/*                                     <th>名前</th>*/
/*                                     <th>保存先</th>*/
/*                                     <th></th>*/
/*                                 </tr>*/
/*                                 </thead>*/
/*                                 <tbody>*/
/*                                 {% for Template in Templates %}*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <input type="radio" name="template" value="{{ Template.id }}" {% if app.config.template_code == Template.code %}checked="checked"{% endif %}/>*/
/*                                     </td>*/
/*                                     <td>{{ Template.name }}</td>*/
/*                                     <td>*/
/*                                         <ul>*/
/*                                             <li>app/template/{{Template.code }}</li>*/
/*                                             <li>html/template/{{ Template.code }}</li>*/
/*                                         </ul>*/
/*                                     </td>*/
/*                                     <td class="icon_edit">*/
/*                                         <div class="dropdown">*/
/*                                             <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><svg class="cb cb-ellipsis-h"> <use xlink:href="#cb-ellipsis-h" /></svg></a>*/
/*                                             <ul class="dropdown-menu dropdown-menu-right">*/
/*                                                 <li><a href="{{ url('admin_store_template_download', { 'id' : Template.id }) }}" >ダウンロード</a></li>*/
/*                                                 {% if Template.default_template %}*/
/*                                                     <li>*/
/*                                                         <a>削除</a>*/
/*                                                     </li>*/
/*                                                 {% else %}*/
/*                                                         <li><a href="{{ url('admin_store_template_delete', { 'id': Template.id}) }}" {{ csrf_token_for_anchor() }} data-method="delete" data-message="このテンプレートを削除してもよろしいですか？">削除</a></li>*/
/*                                                 {% endif %}*/
/*                                             </ul>*/
/*                                         </div>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                                 {% endfor %}*/
/*                                 </tbody>*/
/*                             </table>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div><!-- /.box -->*/
/*         </div>*/
/*         <div class="col-md-3" id="aside_column">*/
/*             <div class="col_inner">*/
/*                 <div class="box no-header">*/
/*                     <div class="box-body">*/
/*                         <div class="row text-center">*/
/*                             <div class="col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">*/
/*                                 <button class="btn btn-primary btn-block btn-lg"*/
/*                                         onclick="$('#form_selected').val($('input[name=template]:checked').val());document.form1.submit()">登録</button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div><!-- /.box-body -->*/
/*                 </div><!-- /.box -->*/
/*             </div>*/
/*         </div><!-- /.col -->*/
/*         </form>*/
/*     </div>*/
/* */
/* {% endblock %}*/
