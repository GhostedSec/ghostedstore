<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Host Tor Hidden Services On Heroku">
	  <meta name="keywords" content="Tor,Hidden Service,Heroku,Nodejs,Php,Host Hidden Servics on heroku">
  	<meta name="author" content="sumithemmadi">
    <title>Tor Hidden Service On Heroku</title>
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="img/favicon.png">
  </head>
  <body>
    <header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">Tor Hidden Service On</span>  Heroku</h1>
        </div>
        </nav>
      </div>
    </header>

    <section id="boxes">
      <div class="container">
        <h2><b>Welcome To The Landing Page</b></h2>
        <p> <b>This is a example page of the GitHub Repository <a href="https://github.com/sumithemmadi/tor-hidden-service-on-heroku">https://github.com/sumithemmadi/tor-hidden-service-on-heroku<b></a></p>
      </div>
    </section>
    <section id="boxes">
      <div class="container">
          <h2><b>Onion Link</b></h2>
          <?php
          if (file_exists(__DIR__.'/../temp/var/lib/tor/hidden_service/hostname')) {
              $output = file_get_contents(__DIR__.'/../temp/var/lib/tor/hidden_service/hostname');
              echo "Congratulation's 🥳🥳<br>Your application is over tor <br>Here is your Onion Link <a href=http://$output>$output</a>";
          } else {
              $output = "No domain";
              echo '<p>Something went wrong<br>Refer to  Github Repository <br><a href="https://github.com/sumithemmadi/tor-hidden-service-on-heroku#readme">https://github.com/sumithemmadi/tor-hidden-service-on-heroku#readme</a></p>';
              echo '<p>Or raise a issue at <br> <a href="https://github.com/sumithemmadi/tor-hidden-service-on-heroku#readme">https://github.com/sumithemmadi/tor-hidden-service-on-heroku/issues</a></p></br>';
          }
          ?>
      </div>
    </section>
    <section id="boxes">
      <div class="container">
        <h2><b>Another Repo Build with Nodejs</b></h2>
        <p> <b>Try my another  GitHub Repository built with nodejs <a href=https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku>https://github.com/sumithemmadi/Tor-Onion-Service-On-Heroku</a>
      </div>
    </section>
    <footer>
      <p>Tor Hidden Service On Heroku, Copyright &copy; 2021</p>
    </footer>
  </body>
</html>
