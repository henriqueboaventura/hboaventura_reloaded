<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Charset" content="utf-8" />
  <meta name="title" content="Henrique Boaventura" />
  <meta name="description" content="Site pessoal do Henrique Boaventura, especializado em PHP, Symfony, marcação semântica e jQuery, Também com conhecimentos de Python, Ruby e Java" />
  <meta name="keywords" content="css, css3, xhtml, html, html5, php, symfony, javascript, jquery, prototype, desenvolvedor, analista, python, ruby, java, tableless, microformats, desenvolvimento web, dom, ajax, html5" />
  <meta name="language" content="pt-br, en-us" />
  <meta name="author" content="Henrique Boaventura" />
  <meta name="viewport" content="width=device-width" />
  <meta name="robots" content="index, follow" />
  <title>Henrique Boaventura</title>
  <link media="all" type="text/css" rel="stylesheet" href="assets/css/style.css">
  <!--[if IE]><link media="all" type="text/css" rel="stylesheet" href="assets/css/ie.css"><![endif]-->
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-12358549-1']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</head>
<body>
  <div class="container">
    <header id="main">

      <nav class="lang <?php echo $lang ?>">
        <?php if ($lang == 'pt'): ?>
        <a href="en">english please</a>
        <?php else: ?>
        <a href="pt">português por favor</a>
        <?php endif; ?>
      </nav>
      <h1>
        <a href="/">Henrique Boaventura</a>
        <small><?php echo Lang::get('webdeveloper'); ?></small>
      </h1>
    </header>
    <div id="content">
      <section id="about">
        <header>
          <h1><?php echo Lang::get('about'); ?></h1>
          <p class="short_desc"><?php echo Lang::get('about_1'); ?></p>
        </header>
        <div class="wrapper">
          <div class="content">
            <p></p>
            <p><?php echo Lang::get('about_2'); ?></p>
            <p><?php echo Lang::get('about_3'); ?></p>
          </div>
          <aside>
            <ul>
              <li><a href="">HTML5</a></li>
              <li><a href="">CSS3</a></li>
              <li><a href="">javascript</a></li>
              <li><a href="">PHP</a></li>
              <li><a href="">ruby</a></li>
              <li><a href="">python</a></li>
              <li><a href="">shell script</a></li>
              <li><a href="">mobile</a></li>
            </ul>
          </aside>
        </div>
      </section>
      <section id="projects">
        <header>
          <h1><?php echo Lang::get('projects'); ?></h1>
          <p class="short_desc"><?php echo Lang::get('last_projects'); ?></p>
        </header>
        <div class="wrapper">
          <div class="content">
            <h1>JQuery Idle</h1>
            <p>A dead simple jQuery plugin that executes a callback function if the user is idle.</p>
            <a href="https://github.com/kidh0/jquery.idle"><?php echo Lang::get('go_to_project'); ?></a>
          </div>
          <aside>
            <dl>
              <dt>jQuery<dt>
              <dd><a href="https://github.com/kidh0/jquery.jflow.reloaded">jFlow Reloaded</a></dd>
              <dt>jQuery<dt>
              <dd><a href="https://github.com/kidh0/jquery.placeholder.fix">Placeholder Fix</a></dd>
            </dl>
            <a href="https://github.com/kidh0"><?php echo Lang::get('view_all'); ?></a>
          </aside>
        </div>
      </section>
      <?php if(count($posts) > 0) : ?>
      <section id="blog">
        <header>
          <h1><?php echo Lang::get('blog'); ?></h1>
          <p class="short_desc">{{ $posts[0]->title }}</p>
        </header>
        <div class="wrapper">
          <div class="content">
            <h1><a href="{{ $posts[0]->link }}">{{ $posts[0]->title }}</a></h1>
            <p>{{ $posts[0]->description }}</p>
            <a href="{{ $posts[0]->link }}"><?php echo Lang::get('full_article'); ?></a>
          </div>
          <aside>
            <ul>
              @for ($i = 1; $i < 5; $i++)
              <li><a href="{{ $posts[$i]->link }}">{{ $posts[$i]->title }}</a></li>
              @endfor
            </ul>
          </aside>
        </div>
      </section>
      <?php endif; ?>
      <section id="findme">
        <header>
          <h1><?php echo Lang::get('findme'); ?></h1>
          <ul>
            <li id="github"><a href="http://www.github.com/kidh0" title="GitHub - http://www.github.com/kidh0">GitHub</a></li>
            <li id="twitter"><a href="http://www.twitter.com/kidh0" title="Twitter - http://www.twitter.com/kidh0">Twitter</a></li>
            <li id="facebook"><a href="http://www.facebook.com/henrique.boaventura" title="Facebook - http://www.facebook.com/henrique.boaventura">Facebook</a></li>
            <li id="google_plus"><a href="https://plus.google.com/109578584262233448547" title="Google+ - https://plus.google.com/109578584262233448547">Google+</a></li>
            <li id="linkedin"><a href="http://br.linkedin.com/in/hboaventura" title="Linkedin - http://br.linkedin.com/in/hboaventura">Linkedin</a></li>
            <!-- <li id="rss"><a href="http://blog.hboaventura.com/" title="RSS - http://blog.hboaventura.com/">RSS</a></li> -->
            <li id="last_fm"><a href="http://www.last.fm/user/kidh0" title="Last.FM - http://www.last.fm/user/kidh0">Last.FM</a></li>
          </ul>
        </header>
        <div class="wrapper">
          <div class="content">
            <h1><?php echo Lang::get('contact'); ?></h1>
            <p>
              <?php echo Lang::get('contact_content'); ?>
            </p>
          </div>
          <aside>
            <ul>
              <li id="twitter"><a href="http://www.twitter.com/kidh0">twitter.com/kidh0</a></li>
              <li id="facebook"><a href="http://www.facebook.com/henrique.boaventura">facebook.com/henrique.boaventura</a></li>
              <li id="google_plus"><a href="https://plus.google.com/109578584262233448547">plus.google.com/109578584262233448547</a></li>
            </ul>
          </aside>
        </div>
      </section>
    </div>
    <footer>
      <q cite="http://en.wikipedia.org/wiki/Paranoid_Android"><?php echo Lang::get('paranoid_quote'); ?></q> - 1984-'03 / design by <a href="http://www.melonmakers.com/">Luciano Fontoura</a>
    </footer>
  </div>
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script src="assets/js/jquery.easter.egg.js"></script>
  <script src="assets/js/konami.pack.js"></script>
  <script src="assets/js/main.js"></script>
</body>
</html>
