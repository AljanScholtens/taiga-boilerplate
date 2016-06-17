<?php

  $title = "Settings";
  $theme = "";
  include "header.php";

?>

<h1 class="c-heading c-heading--30 u-spacing"><?php echo $title; ?></h1>

<h2 class="c-pattern-library__h2" id="colors">Colors</h2>
<h3 class="c-pattern-library__h3">Primary</h3>
<div class="colors is-color-primary">
  <ul class="colors__element">
    <li>var(--color-primary-30)</li>
    <li>var(--color-primary-50)</li>
    <li>var(--color-primary-70)</li>
  </ul>
  <ul class="colors__text">
    <li>var(--color-primary-30)</li>
    <li>var(--color-primary-50)</li>
    <li>var(--color-primary-70)</li>
  </ul>
</div>

<h3 class="c-pattern-library__h3">Secondary</h3>
<div class="colors is-color-secondary">
  <ul class="colors__element">
    <li>var(--color-secondary-50)</li>
  </ul>
  <ul class="colors__text">
    <li>var(--color-secondary-50)</li>
  </ul>
</div>

<h3 class="c-pattern-library__h3">Neutral</h3>
<div class="colors is-color-neutral">
  <ul class="colors__element">
    <li>var(--color-neutral-10)</li>
    <li>var(--color-neutral-30)</li>
    <li>var(--color-neutral-50)</li>
    <li>var(--color-neutral-70)</li>
    <li>var(--color-neutral-90)</li>
  </ul>
  <ul class="colors__text">
    <li>var(--color-neutral-10)</li>
    <li>var(--color-neutral-30)</li>
    <li>var(--color-neutral-50)</li>
    <li>var(--color-neutral-70)</li>
    <li>var(--color-neutral-90)</li>
  </ul>
</div>

<h3 class="c-pattern-library__h3">Success</h3>
<div class="colors is-color-success">
  <ul class="colors__element">
    <li>var(--color-success-50)</li>
    <li>var(--color-success-70)</li>
  </ul>
  <ul class="colors__text">
    <li>var(--color-success-50)</li>
    <li>var(--color-success-70)</li>
  </ul>
</div>

<h3 class="c-pattern-library__h3">Alert</h3>
<div class="colors is-color-alert">
  <ul class="colors__element">
    <li>var(--color-alert-50)</li>
    <li>var(--color-alert-70)</li>
  </ul>
  <ul class="colors__text">
    <li>var(--color-alert-50)</li>
    <li>var(--color-alert-70)</li>
  </ul>
</div>

<?php include "footer.php"; ?>
