<?php
/**
 * Page template
 */
?>

<div class="wrapper">

  <header>
    <?php print render($page['header']); ?>
  </header>

  <!-- Header -->
  <header>
      <div class="container">
          <h1><?php echo l(t('Tuesday Dot Com'), '<front>'); ?></h1>
          <p>Free to use, time logging web application</p>
          <div class="info">
              <p><?php echo l('Account', 'user'); ?></p>
          </div>
      </div>
  </header>

  <!-- Content -->
  <div class="container content">

    <h1><?php echo $title; ?></h1>

    <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>

    <?php print render($page['content']); ?>

  </div>

  <footer>
    <?php print render($page['footer']); ?>
  </footer>

</div>
