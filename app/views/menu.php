<?php
?>

<nav>
  <?php foreach ($menu as $link): ?>
  <a href="<?= $link->getLink("link")->getUrl($prismic->linkResolver) ?>">
    <?= $link->getText("label") ?>
  </a>
  <?php endforeach; ?>            
</nav>
