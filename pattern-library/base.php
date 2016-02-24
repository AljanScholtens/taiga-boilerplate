<?php

  $title = "Base";
  $theme = "";
  include "header.php";

?>

<h1><?php echo $title; ?></h1>
<p>Introduction</p>

<h2 class="c-pattern-library__h2" id="headings">Headings</h2>
<h3 class="c-pattern-library__h3">Standard</h3>
<h1>H1 Taiga Boilerplate</h1>
<h2><a href="">H2 Taiga Boilerplate</a></h2>
<h3>H3 Taiga Boilerplate</h3>
<h4>H4 Taiga Boilerplate</h4>
<h5>H5 Taiga Boilerplate</h5>
<h6>H6 Taiga Boilerplate</h6>

<h2 class="c-pattern-library__h2" id="copy">Copy</h2>
<h3 class="c-pattern-library__h3">Mixed</h3>
<p>As an <strong>interface designer</strong> and <em>engineer</em> I wanted to create an <abbr>HTML5/CSS3</abbr> environment that easily sets up the basics of a <a href="">responsive</a> web application or website. It needed a grid that is <mark>flexible and fluid</mark>. Also some basic types like forms en tables would really speed up my workflow in combination with simple mixins. That's why I created Taiga, an <small>environment</small> to love.</p>

<h2 class="c-pattern-library__h2" id="code">Code</h2>
<h3 class="c-pattern-library__h3">Standard</h3>
<p><code>ul.o-list li { background: gray; }</code></p>

<h2 class="c-pattern-library__h2" id="quote">Quote</h2>
<h3 class="c-pattern-library__h3">Standard</h3>
<blockquote>
  The release of atom power has changed everything except our way of thinking...the solution to this problem lies in the heart of mankind. If only I had known, I should have become a watchmaker.
  <cite>By Albert Einstein</cite>
</blockquote>

<h2 class="c-pattern-library__h2" id="tables">Tables</h2>
<h3 class="c-pattern-library__h3">Standard</h3>
<table>
  <thead>
    <tr>
      <th>Type</th>
      <th>Name</th>
      <th>Download</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><strong>60GDA</strong></td>
      <td>Flying over the world</td>
      <td><a href="">Download sheet</a></td>
    </tr>
    <tr>
      <td><strong>NL050</strong></td>
      <td>Groningen</td>
      <td><a href="">Download sheet</a></td>
    </tr>
  </tbody>
</table>

<?php include "footer.php"; ?>
