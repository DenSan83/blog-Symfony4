<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* blog/index.html.twig */
class __TwigTemplate_1ca2c93104d4e71f4aa87ef662f5273b0d9a5856c99b2bd43efb6a7f4969ad41 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "blog/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "blog/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello BlogController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
<section class=\"articles\">
  <article>
    <h2>Titre de l'article</h2>
    <div class=\"metadata\">Ecrit le *date* à *heure* dans la catégorie Politique</div>
    <div class=\"content\">
      <img src=\"http://placehold.it/350x150\" alt=\"\" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione architecto tempora nobis dolore totam praesentium.</p>
      <p>Esse molestias aut voluptates ad architecto ullam est quidem alias facere, maxime, tenetur. Quae, quasi!</p>
      <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("blog_show");
        echo "\" class=\"btn btn-primary\">Lire la suite</a>
    </div>
  </article>

  <article>
    <h2>Titre de l'article</h2>
    <div class=\"metadata\">Ecrit le *date* à *heure* dans la catégorie Politique</div>
    <div class=\"content\">
      <img src=\"http://placehold.it/350x150\" alt=\"\" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad delectus, unde pariatur, odit provident deleniti?</p>
      <p>Laborum, eveniet molestias consectetur, quod, magni, iusto explicabo in commodi libero numquam eligendi architecto atque!</p>
      <a href=\"\" class=\"btn btn-primary\">Lire la suite</a>
    </div>
  </article>
  <article>
    <h2>Titre de l'article</h2>
    <div class=\"metadata\">Ecrit le *date* à *heure* dans la catégorie Politique</div>
    <div class=\"content\">
      <img src=\"http://placehold.it/350x150\" alt=\"\" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex atque tenetur a impedit, placeat officia?</p>
      <p>Vel cumque nemo molestias, minus laborum ipsam rerum, dolores ut consequuntur numquam deserunt odit repellat.</p>
      <a href=\"\" class=\"btn btn-primary\">Lire la suite</a>
    </div>
  </article>
</section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "blog/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 15,  84 => 6,  75 => 5,  57 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello BlogController!{% endblock %}

{% block body %}

<section class=\"articles\">
  <article>
    <h2>Titre de l'article</h2>
    <div class=\"metadata\">Ecrit le *date* à *heure* dans la catégorie Politique</div>
    <div class=\"content\">
      <img src=\"http://placehold.it/350x150\" alt=\"\" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione architecto tempora nobis dolore totam praesentium.</p>
      <p>Esse molestias aut voluptates ad architecto ullam est quidem alias facere, maxime, tenetur. Quae, quasi!</p>
      <a href=\"{{path('blog_show')}}\" class=\"btn btn-primary\">Lire la suite</a>
    </div>
  </article>

  <article>
    <h2>Titre de l'article</h2>
    <div class=\"metadata\">Ecrit le *date* à *heure* dans la catégorie Politique</div>
    <div class=\"content\">
      <img src=\"http://placehold.it/350x150\" alt=\"\" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad delectus, unde pariatur, odit provident deleniti?</p>
      <p>Laborum, eveniet molestias consectetur, quod, magni, iusto explicabo in commodi libero numquam eligendi architecto atque!</p>
      <a href=\"\" class=\"btn btn-primary\">Lire la suite</a>
    </div>
  </article>
  <article>
    <h2>Titre de l'article</h2>
    <div class=\"metadata\">Ecrit le *date* à *heure* dans la catégorie Politique</div>
    <div class=\"content\">
      <img src=\"http://placehold.it/350x150\" alt=\"\" />
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex atque tenetur a impedit, placeat officia?</p>
      <p>Vel cumque nemo molestias, minus laborum ipsam rerum, dolores ut consequuntur numquam deserunt odit repellat.</p>
      <a href=\"\" class=\"btn btn-primary\">Lire la suite</a>
    </div>
  </article>
</section>

{% endblock %}
", "blog/index.html.twig", "D:\\Projets pro\\museos caroline\\www\\templates\\blog\\index.html.twig");
    }
}
