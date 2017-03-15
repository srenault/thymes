<?php
  $prismic = $WPGLOBAL['prismic'];
  $page = $WPGLOBAL['page'];
?>

<? include 'header.php' ?>

<div>
  <?= $page->getStructuredText('page.content')->asHtml($prismic->linkResolver) ?>
</div>

<? include 'footer.php' ?>
