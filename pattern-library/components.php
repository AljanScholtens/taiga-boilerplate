<?php

  $title = "Components";
  $theme = "";
  include "header.php";

?>

<h1 class="c-heading c-heading--30 u-spacing"><?php echo $title; ?></h1>





<h2 class="c-pattern-library__h2" id="buttons">Object Button</h2>
<h3 class="c-pattern-library__h3">Standard</h3>
<div class="c-pattern-library__component">
  <button class="c-button" type="submit">Button</button>
  <a class="c-button c-button--neutral" href="">Button Neutral</a>
  <a class="c-button c-button--success" href="">Button Success</a>
  <a class="c-button c-button--alert" href="">Button Alert</a>
  <a class="c-button c-button--disabled" href="">Button Disabled</a>
</div>

<h3 class="c-pattern-library__h3">Button with icon</h3>
<div class="c-pattern-library__component">
  <a class="c-button" href=""><svg class="c-icon c-icon--white"><use xlink:href="#icon-printer" /></svg></a>
  <a class="c-button c-button--neutral" href=""><svg class="c-icon c-icon--inline"><use xlink:href="#icon-printer" /></svg> Button Neutral</a>
</div>

<h3 class="c-pattern-library__h3">Button large</h3>
<div class="c-pattern-library__component">
  <a class="c-button c-button--large" href="">Button</a>
</div>

<h3 class="c-pattern-library__h3">Button small</h3>
<div class="c-pattern-library__component">
  <a class="c-button c-button--small" href="">Button</a>
</div>





<h2 class="c-pattern-library__h2" id="cards">Object Card</h2>
<h3 class="c-pattern-library__h3">Image</h3>
<div class="c-pattern-library__component l-6">
  <div class="c-card c-card--color-white">
    <div class="c-card__content">
      <h2>Card with image</h2>
    </div>

    <div class="c-card__image">
      <img src="https://kisanakbijak.files.wordpress.com/2011/11/amazing-wolf-0291.jpg" />
    </div>

    <div class="c-card__content">
      <p>The release of atom power has changed everything except our way of thinking...the solution to this problem lies in the heart of mankind.</p>
    </div>
  </div>
</div>

<h3 class="c-pattern-library__h3">Background image</h3>
<div class="c-pattern-library__component l-6">
  <div class="c-card c-card--color-white">
    <div class="c-card__content">
      <h2>Card with image</h2>
      <p>The release of atom power has changed everything except our way of thinking...the solution to this problem lies in the heart of mankind.</p>
    </div>

    <div class="c-card__image--background" style="background-image: url('https://kisanakbijak.files.wordpress.com/2011/11/amazing-wolf-0291.jpg')"></div>
  </div>
</div>





<h2 class="c-pattern-library__h2" id="forms">Object Form</h2>
<h3 class="c-pattern-library__h3">Floated</h3>
<div class="c-pattern-library__component">
  <form action="/" method="post">
    <fieldset>
      <legend>Personal details</legend>
      <ul class="c-form">
        <li class="c-form__item">
          <label class="c-form__label" for="#TAG1">Name</label>
          <div class="c-form__fields">
            <input type="text" id="#TAG1" name="#TAG1" />
            <small>Please add your first and last name</small>
          </div>
        </li>
        <li class="c-form__item c-form__item--error">
          <label class="c-form__label" for="#TAG3">E-mail</label>
          <div class="c-form__fields">
            <input type="text" id="#TAG3" name="#TAG3" />
            <ul class="c-form__errors">
              <li>Oh no, that can't be your e-mail address</li>
            </ul>
          </div>
        </li>
        <li class="c-form__item">
          <label class="c-form__label" for="#TAG4">Suggestions</label>
          <div class="c-form__fields">

            <select>
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="opel">Opel</option>
              <option value="audi">Audi</option>
            </select>

            <br />

            <select multiple>
              <option value="volvo">Volvo</option>
              <option value="saab">Saab</option>
              <option value="opel">Opel</option>
              <option value="audi">Audi</option>
            </select>

            <br />

            <textarea cols="50" rows="6" id="#TAG4" name="#TAG4"></textarea>
            <small>Your suggestions and feedback would be really helpful to us</small>
          </div>
        </li>
        <li class="c-form__item">
          <label class="c-form__label">Subscription</label>
          <div class="c-form__fields">
            <p class="c-form__description">Premium</p>
          </div>
        </li>
        <li class="c-form__item">
          <label class="c-form__label" for="#TAG6">Extra options</label>
          <div class="c-form__fields">
            <ul class="c-form__checklist">
              <li><label for="#TAG6"><input type="checkbox" id="#TAG6" name="#TAG6" />I want to receive awesome newsletters</label></li>
              <li><label for="#TAG7"><input type="checkbox" id="#TAG7" name="#TAG7" />Send me a wolf doll</label></li>
            </ul>
          </div>
        </li>
      </ul>
    </fieldset>
  </form>
</div>





<h2 class="c-pattern-library__h2" id="headings">Object Heading</h2>
<h3 class="c-pattern-library__h3">Standard</h3>
<div class="c-pattern-library__component">
  <h1 class="c-heading--50">Heading 50</h1>
  <h2 class="c-heading--30"><a href="">Heading 30</a></h2>
  <h3 class="c-heading--10">Heading 10</h3>
</div>





<h2 class="c-pattern-library__h2" id="icons">Object Icon</h2>
<h3 class="c-pattern-library__h3">Inline</h3>
<div class="c-pattern-library__component">
  <svg class="c-icon c-icon--inline"><use xlink:href="#icon-printer" /></svg> Let's grab a coffee.
</div>





<h2 class="c-pattern-library__h2" id="labels">Object Label</h2>
<h3 class="c-pattern-library__h3">Mixed</h3>
<div class="c-pattern-library__component">
  <span class="c-label">Label</span>
  <span class="c-label c-label--neutral">Label Neutral</span>
  <span class="c-label c-label--success">Label Success</span>
  <span class="c-label c-label--alert">Label Alert</span>
</div>





<h2 class="c-pattern-library__h2" id="lists">Object List</h2>
<h3 class="c-pattern-library__h3">Unordered</h3>
<div class="c-pattern-library__component">
  <ul class="c-list">
    <li class="c-list__item">Nice warm brown bread from the big oven</li>
    <li class="c-list__item">Some candy</li>
    <li class="c-list__item">Dinner with salmon and spinach</li>
    <li class="c-list__item">And I love ice cream</li>
  </ul>
</div>

<h3 class="c-pattern-library__h3">Ordered</h3>
<div class="c-pattern-library__component">
  <ol class="c-list">
    <li class="c-list__item">I need chocolate</li>
    <li class="c-list__item">Chewing gum</li>
    <li class="c-list__item">Nice lollypop</li>
  </ol>
</div>





<h2 class="c-pattern-library__h2" id="media">Object Media</h2>
<h3 class="c-pattern-library__h3">Image</h3>
<div class="c-pattern-library__component">
  <figure class="c-media c-media--image">
    <img class="c-media__image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/07/Canis_lupus_laying.jpg/266px-Canis_lupus_laying.jpg"/>
    <figcaption class="c-media__caption">A Wolf</figcaption>
  </figure>
</div>





<h3 class="c-pattern-library__h3">Video</h3>
<div class="c-pattern-library__component">
  <figure class="c-media c-media--video">
    <iframe src="https://player.vimeo.com/video/155640569?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </figure>
</div>





<h2 class="c-pattern-library__h2" id="messages">Object Messages</h2>
<h3 class="c-pattern-library__h3">Mixed</h3>
<div class="c-pattern-library__component">
  <ul class="c-messages">
    <li class="c-messages__item">Don't forget to check your tasks</li>
    <li class="c-messages__item c-messages__item--neutral">Did you know about our recent changes?</li>
    <li class="c-messages__item c-messages__item--success">Wow, that's great, you finished your tasks</li>
    <li class="c-messages__item c-messages__item--alert">Hmm, it's not possible to delete your task</li>
  </ul>
</div>





<h2 class="c-pattern-library__h2" id="pagination">Object Pagination</h2>
<h3 class="c-pattern-library__h3">Standard</h3>
<div class="c-pattern-library__component">
  <ul class="c-pagination">
    <li class="c-pagination__item"><a href="">Previous</a></li>
    <li class="c-pagination__item c-pagination__item--selected"><a href="">3</a></li>
    <li class="c-pagination__item"><a href="">4</a></li>
    <li class="c-pagination__item c-pagination__item--gap">...</li>
    <li class="c-pagination__item"><a href="">11</a></li>
    <li class="c-pagination__item"><a href="">12</a></li>
    <li class="c-pagination__item"><a href="">Next</a></li>
  </ul>
</div>





<h2 class="c-pattern-library__h2" id="panel">Object Panel</h2>
<h3 class="c-pattern-library__h3">Neutral</h3>
<div class="c-pattern-library__component">
  <div class="c-panel">
    <p>Panel neutral</p>
  </div>
</div>

<h3 class="c-pattern-library__h3">Primary</h3>
<div class="c-pattern-library__component">
  <div class="c-panel c-panel--primary">
    <p>Panel primary</p>
  </div>
</div>





<h2 class="c-pattern-library__h2" id="paragraph">Object Paragraph</h2>
<h3 class="c-pattern-library__h3">Lead</h3>
<div class="c-pattern-library__component">
  <p class="c-paragraph c-paragraph--lead">The release of atom power has changed everything except our way of thinking...the solution to this problem lies in the heart of mankind.</p>
</div>





<?php include "footer.php"; ?>
