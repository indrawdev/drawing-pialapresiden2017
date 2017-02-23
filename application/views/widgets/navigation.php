<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand pull-left" href="#"><img src="<?php echo base_url() . 'assets/images/pssi-logo.png'; ?>" alt="<?php echo $title; ?>"></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav">
        <?php foreach($items as $item): ?>
          <li><a href="#"><?php echo $item; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>

