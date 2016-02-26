<?php

  $title = "Objects";
  $theme = "";
  include "header.php";

?>

<h1 class="o-heading--30 u-spacing"><?php echo $title; ?></h1>

<h2 class="c-pattern-library__h2" id="buttons">Object Button</h2>
<h3 class="c-pattern-library__h3">Mixed</h3>
<div class="c-pattern-library__component">
  <button class="o-button" type="submit">Button</button>
  <a class="o-button o-button--neutral" href="">Button Neutral</a>
  <a class="o-button o-button--success" href="">Button Success</a>
  <a class="o-button o-button--alert" href="">Button Alert</a>
  <a class="o-button o-button--disabled" href="">Button Disabled</a>
</div>


<h2 class="c-pattern-library__h2" id="cards">Object Card</h2>
<h3 class="c-pattern-library__h3">Image</h3>
<div class="c-pattern-library__component l-6">
  <div class="o-card o-card--color-white">
    <div class="o-card__content">
      <h2>Card with image</h2>
    </div>

    <div class="o-card__image">
      <img src="https://kisanakbijak.files.wordpress.com/2011/11/amazing-wolf-0291.jpg" />
    </div>

    <div class="o-card__content">
      <p>The release of atom power has changed everything except our way of thinking...the solution to this problem lies in the heart of mankind.</p>
    </div>
  </div>
</div>
<h3 class="c-pattern-library__h3">Background image</h3>
<div class="c-pattern-library__component l-6">
  <div class="o-card o-card--color-white">
    <div class="o-card__content">
      <h2>Card with image</h2>
      <p>The release of atom power has changed everything except our way of thinking...the solution to this problem lies in the heart of mankind.</p>
    </div>

    <div class="o-card__image--background" style="background-image: url('https://kisanakbijak.files.wordpress.com/2011/11/amazing-wolf-0291.jpg')"></div>
  </div>
</div>


<h2 class="c-pattern-library__h2" id="forms">Object Form</h2>
<h3 class="c-pattern-library__h3">Floated</h3>
<div class="c-pattern-library__component">
  <form action="/" method="post">
    <fieldset>
      <legend>Personal details</legend>
      <ul class="o-form">
        <li class="o-form__item">
          <label class="o-form__label" for="#TAG1">Name</label>
          <div class="o-form__fields">
            <input type="text" id="#TAG1" name="#TAG1" />
            <small>Please add your first and last name</small>
          </div>
        </li>
        <li class="o-form__item o-form__item--error">
          <label class="o-form__label" for="#TAG3">E-mail</label>
          <div class="o-form__fields">
            <input type="text" id="#TAG3" name="#TAG3" />
            <ul class="o-form__errors">
              <li>Oh no, that can't be your e-mail address</li>
            </ul>
          </div>
        </li>
        <li class="o-form__item">
          <label class="o-form__label" for="#TAG4">Suggestions</label>
          <div class="o-form__fields">

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
        <li class="o-form__item">
          <label class="o-form__label">Subscription</label>
          <div class="o-form__fields">
            <p class="o-form__description">Premium</p>
          </div>
        </li>
        <li class="o-form__item">
          <label class="o-form__label" for="#TAG6">Extra options</label>
          <div class="o-form__fields">
            <ul class="o-form__checklist">
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
  <h1 class="o-heading--50">Heading 50</h1>
  <h2 class="o-heading--30"><a href="">Heading 30</a></h2>
  <h3 class="o-heading--10">Heading 10</h3>
</div>


<h2 class="c-pattern-library__h2" id="icons">Object Icon</h2>
<h3 class="c-pattern-library__h3">Inline</h3>
<div class="c-pattern-library__component">
  <svg class="o-icon o-icon--inline"><use xlink:href="#icon-printer" /></svg> Let's grab a coffee.
</div>


<h2 class="c-pattern-library__h2" id="labels">Object Label</h2>
<h3 class="c-pattern-library__h3">Mixed</h3>
<div class="c-pattern-library__component">
  <span class="o-label">Label</span>
  <span class="o-label o-label--neutral">Label Neutral</span>
  <span class="o-label o-label--success">Label Success</span>
  <span class="o-label o-label--alert">Label Alert</span>
</div>


<h2 class="c-pattern-library__h2" id="lists">Object List</h2>
<h3 class="c-pattern-library__h3">Unordered</h3>
<div class="c-pattern-library__component">
  <ul class="o-list">
    <li class="o-list__item">Nice warm brown bread from the big oven</li>
    <li class="o-list__item">Some candy</li>
    <li class="o-list__item">Dinner with salmon and spinach</li>
    <li class="o-list__item">And I love ice cream</li>
  </ul>
</div>
<h3 class="c-pattern-library__h3">Ordered</h3>
<div class="c-pattern-library__component">
  <ol class="o-list">
    <li class="o-list__item">I need chocolate</li>
    <li class="o-list__item">Chewing gum</li>
    <li class="o-list__item">Nice lollypop</li>
  </ol>
</div>


<h2 class="c-pattern-library__h2" id="media">Object Media</h2>
<h3 class="c-pattern-library__h3">Image</h3>
<div class="c-pattern-library__component">
  <figure class="o-media o-media--image">
    <img class="o-media__image" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/07/Canis_lupus_laying.jpg/266px-Canis_lupus_laying.jpg"/>
    <figcaption class="o-media__caption">A Wolf</figcaption>
  </figure>
</div>

<h3 class="c-pattern-library__h3">Video</h3>
<div class="c-pattern-library__component">
  <figure class="o-media o-media--video">
    <iframe src="https://player.vimeo.com/video/155640569?title=0&byline=0&portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </figure>
</div>


<h2 class="c-pattern-library__h2" id="messages">Object Messages</h2>
<h3 class="c-pattern-library__h3">Mixed</h3>
<div class="c-pattern-library__component">
  <ul class="o-messages">
    <li class="o-messages__item">Don't forget to check your tasks</li>
    <li class="o-messages__item o-messages__item--neutral">Did you know about our recent changes?</li>
    <li class="o-messages__item o-messages__item--success">Wow, that's great, you finished your tasks</li>
    <li class="o-messages__item o-messages__item--alert">Hmm, it's not possible to delete your task</li>
  </ul>
</div>


<h2 class="c-pattern-library__h2" id="pagination">Object Pagination</h2>
<h3 class="c-pattern-library__h3">Standard</h3>
<div class="c-pattern-library__component">
  <ul class="o-pagination">
    <li class="o-pagination__item"><a href="">Previous</a></li>
    <li class="o-pagination__item o-pagination__item--selected"><a href="">3</a></li>
    <li class="o-pagination__item"><a href="">4</a></li>
    <li class="o-pagination__item o-pagination__item--gap">...</li>
    <li class="o-pagination__item"><a href="">11</a></li>
    <li class="o-pagination__item"><a href="">12</a></li>
    <li class="o-pagination__item"><a href="">Next</a></li>
  </ul>
</div>


<h2 class="c-pattern-library__h2" id="panel">Object Panel</h2>
<h3 class="c-pattern-library__h3">Neutral</h3>
<div class="c-pattern-library__component">
  <div class="o-panel">
    <p>Panel neutral</p>
  </div>
</div>
<h3 class="c-pattern-library__h3">Primary</h3>
<div class="c-pattern-library__component">
  <div class="o-panel o-panel--primary">
    <p>Panel primary</p>
  </div>
</div>


<h2 class="c-pattern-library__h2" id="paragraph">Paragraph</h2>
<h3 class="c-pattern-library__h3">Lead</h3>
<div class="c-pattern-library__component">
  <p class="o-paragraph o-paragraph--lead">The release of atom power has changed everything except our way of thinking...the solution to this problem lies in the heart of mankind.</p>
</div>

<?php include "footer.php"; ?>
