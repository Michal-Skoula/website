<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
</head>

<body>
  <nav id="main-menu" class="section">
    <input type="checkbox" id="btn-menu-hero">
    <ul class="column">
      <li><a class="js-close-menu" href="#">O mně</a></li>
      <li><a class="js-close-menu" href="#projects-showcase">Projekty</a></li>
      <li><a class="js-close-menu" href="#">O spolupráci</a></li>
      <li><a class="js-close-menu" href="#contact">Kontakt</a></li>
      <li class="menu">
        <label class="btn-menu-hero" for="btn-menu-hero" aria-controls="main-menu" aria-expanded="false">
          <img src="<? echo image('ico-close.svg') ?>" alt="X Close icon">
        </label>
      </li>
    </ul>
  </nav>
  <div id="nav" class="section">
    <div class="max-content-width">
      <header class="row space-between align-center">
        <a class="nav-logo" href="/"><img class="" src="<? echo image('logo-light.svg') ?>"
            alt="Logo Michal Škoula"></a>
        <nav class="">
          <ul class="row">
            <li><a href="#">O mně</a></li>
            <li><a href="#projects-showcase">Projekty</a></li>
            <li><a href="#">O spolupráci</a></li>
            <li><a href="#contact">Kontakt</a></li>
            <!-- <li><a class="button-primary" href="#">Rezervovat schůzku</a></li> -->
            <li class="menu">
              <label class="btn-menu-hero" for="btn-menu-hero" aria-controls="main-menu" aria-expanded="false">
                <img src=" <? echo image('ico-hamburger.svg') ?>" alt="Open menu">
              </label>
            </li>
          </ul>
        </nav>
      </header>
    </div>
  </div>