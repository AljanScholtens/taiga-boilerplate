<?php

  $title = "Base";
  $theme = "";
  include "header.php";

?>

<h1 class="c-heading c-heading--30 u-spacing"><?php echo $title; ?></h1>

<h2 class="c-pattern-library__h2" id="form">Form</h2>
<h3 class="c-pattern-library__h3">Input</h3>
<div class="c-pattern-library__component">
  <input type="text" placeholder="Input" />
</div>
<h3 class="c-pattern-library__h3">Textarea</h3>
<div class="c-pattern-library__component">
  <textarea></textarea>
</div>


<h2 class="c-pattern-library__h2" id="quote">Quote</h2>
<h3 class="c-pattern-library__h3">Standard</h3>
<div class="c-pattern-library__component">
  <blockquote>
    The release of atom power has changed everything except our way of thinking...the solution to this problem lies in the heart of mankind. If only I had known, I should have become a watchmaker.
    <cite>By Albert Einstein</cite>
  </blockquote>
</div>

<h2 class="c-pattern-library__h2" id="tables">Tables</h2>
<h3 class="c-pattern-library__h3">Standard</h3>
<div class="c-pattern-library__component">
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
</div>


<h2 class="c-pattern-library__h2" id="headings">Type</h2>
<h3 class="c-pattern-library__h3">Headings</h3>
<div class="c-pattern-library__component">
  <h1>H1 Taiga Boilerplate</h1>
  <h2><a href="">H2 Taiga Boilerplate</a></h2>
  <h3>H3 Taiga Boilerplate</h3>
  <h4>H4 Taiga Boilerplate</h4>
  <h5>H5 Taiga Boilerplate</h5>
  <h6>H6 Taiga Boilerplate</h6>
</div>
<h3 class="c-pattern-library__h3">Copy</h3>
<div class="c-pattern-library__component">
  <p>As an <strong>interface designer</strong> and <em>engineer</em> I wanted to create an <abbr>HTML5/CSS3</abbr> environment that easily sets up the basics of a <a href="">responsive</a> web application or website. It needed a grid that is <mark>flexible and fluid</mark>. Also some basic types like forms en tables would really speed up my workflow in combination with simple mixins. That's why I created Taiga, an <small>environment</small> to love.</p>
</div>
<h3 class="c-pattern-library__h3">Code</h3>
<div class="c-pattern-library__component">
  <p><code>ul.o-list li { background: gray; }</code></p>
</div>

<?php include "footer.php"; ?>
