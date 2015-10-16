# Taiga Boilerplate

Taiga Boilerplate is a small HTML/Sass framework for starting a new web project.
It is mobile-first with a semantic Sass grid and based on the principles of [SMACSS](http://smacss.com/) and [BEM](http://bem.info).

## Download

Use these options to quickly install Taiga Boilerplate.

- [Download the latest release](https://github.com/studiowolf/taiga-boilerplate/archive/master.zip)
- Clone the repository `git clone https://github.com/studiowolf/taiga-boilerplate.git`

## Dependencies

- [Ruby](https://www.ruby-lang.org/en/installation/)
- [Sass](http://sass-lang.com/install)
- [Autoprefixer](https://github.com/postcss/autoprefixer)

## How to start

1. Make sure you've installed the [dependencies](#dependencies).
2. Get the [latest version](#download) of Taiga Boilerplate.
3. Go to the folder via terminal or your application of choice.
4. **Run Sass via `sass --watch stylesheets`.**
5. Edit the `/stylesheets/core/settings.scss` to your wishes.
6. Start building and use `/pattern-library/pattern-library.html` as example and inspiration.

Tip: when deploying to a live environment make sure your CSS is compressed by running `sass --watch stylesheets --style compressed`.

## Modules and shared components

Besides the basic stuff which you can find in `/stylesheets/core` there are two different folders for the stylesheets; `/stylesheets/modules` and `/stylesheets/shared-components`.

**Shared components** don't have anything to do with content. They are components like buttons, labels, tabs and panels which can be used inside multiple modules throughout a website. The HTML of these shared components can be found in `/examples/shared-components.html`.

**Modules** are a different story, they are based on content. A module could contain elements of shared components. As an example: let's say we have a web shop with a product list. The product list will be represented by a module called 'product-lists' with the file `/modules/product-list.scss`. If you want to use the same module for a reseller list you'll have to copy the entire module to `/stylesheets/modules/reseller-list.scss`. Are you a DRY person? Then you can create one shared component for both called `/stylesheets/shared-components/list.scss`.

## SMACSS and BEM

Taiga Boilerplate works with a combination of [SMACSS](http://smacss.com/) and [BEM](http://bem.info/), which are guide lines to create a modular architecture for your CSS.

A module file like `product.scss` exists out of the module `.product`, one or more submodules `.product__submodule` and states `.is-state` (for example `.is-open`).
The order of these elements in combination with states is very important, see an example below.

Tip: Nesting more than 3 levels deep is never good.

```
// Module
.module {

    // 1: Add the direct properties of the element
    property: value;

    // 2: Add media queries or print styles
    @include breakpoint($breakpoint-10) { property: value; }

    // 3: Add selectors of the parent element
    &:hover { property: value; }

    // 4: Add states of the parent element
    &.is-open { property: value; }

    // 5: Add nested elements
    strong { property: value; }
}

// Submodule
.module__submodule { property: value; }
```

### Examples

**Submodules, never nest them in a module**

Wrong:
```
.module {

    .module__submodule { }
}
```

Right:
```
.module { }

.module__submodule { }
```

**States, always nest them in a module or submodule**

Wrong:
```
.module { }

.is-open { }
```

Right:
```
.module {

    &.is-open { }
}
```

## Grid

The grid is based on 48 columns (adjustable in `/stylesheets/core/settings.scss`). That seems like a lot, but the difference is that margins are also expressed in columns. The example below will clear things up.

Let's say we want a module to be half the width of our page. In the variables we set 48 columns for the whole grid, so this container will be 24 columns. The '1' at the end is the gutter in columns on both sides. Note that this gutter is subtracted from the width, so your content within the container will be 22 effective columns. If you want to have different gutters on the left and right side, just separate it with a comma. That's it!

```
.module {

    // 24 columns with on both sides 1 column as gutter
    @include grid(24, 1);

    // 24 columns with on the left side 1 column as gutter and on the right side 5 and a half columns as gutter
    @include grid(24, 1, 5.5);

    // When changing breakpoint, you might want to remove the grid, use the mixin below to reset the grid
    @include grid-reset;
}

.module__container {

    // The grid uses floats so we need a clearfix on the container, use the mixin below to enable this
    @include grid-container;
}
```

When you're starting a web project the example below is a good starting point.

```
// Start with an optional wrapper for full width design
<div class="wrapper">

    // Use the container to center the website
    <div class="l-container">

        // Use layout rules to set up your grid. Adjust and create your own.
        <div class="l-one-third">

            // Set up the modules or shared components here
            <div class="filter">

            </div>

        </div>

        <div class="l-two-third">

            <ul class="products">

            </ul>

        </div>

    </div>

</div>
```

## Mobile-first & breakpoints

By default Taiga Boilerplate is mobile-first, meaning media query breakpoints from small to big. Adjust the breakpoints or change to desktop-first in `/stylesheets/core/settings.scss`.

```
// Media queries
$breakpoint-10: 600px;
$breakpoint-20: 750px;
$breakpoint-30: 1000px;
$breakpoint-30: 1200px;
```

Use and combine breakpoints like this:
```
.module {
    padding: 1rem;

    @media (min-width: $breakpoint-10) and (min-height: $breakpoint-20) {
        padding: 2rem;
    }
}
```

## Variables

Variables are defined in `/stylesheets/core/settings.scss` and are treated a bit differently.
In the example below you'll notice Taiga works with steps of 10, 20, 30 and so on. The trick is simple, 10 is small or light and 100 is large or dark. So we work from nothing to something.

The steps are created this way so you can easily add more in between. This way we will have more consistency in a website, but maintain the creativity and freedom.

```
// Border-radius
$border-radius-10: 0.125rem; // Small
$border-radius-20: 0.313rem; // Larger

// Color brand
$color-primary-30: #29c882; // Lighter
$color-primary-50: #09a25f; // Default
$color-primary-70: #038049; // Darker
```

### Examples

Wrong:
```
.module {
    background: #09a25f;
    font-size: 1.25rem;
}
```

Right:
```
.module {
    background: $color-primary-50;
    font-size: $font-size-40;
}
```

## IE8 Support

If you still want to support IE8 you can use these polyfills.

- HTML5 elements: https://github.com/aFarkas/html5shiv
- Media queries: https://github.com/scottjehl/Respond
- REM units: https://github.com/chuckcarpenter/REM-unit-polyfill

## Bugs, requests and questions

- Found a bug or need a feature? Post an [issue](https://github.com/studiowolf/taiga-boilerplate/issues/new) or do a [pull request](https://github.com/studiowolf/taiga-boilerplate/pulls).
- Questions? Mail me at [aljan@studiowolf.com](mailto:aljan@studiowolf.com) or tweet to [twitter.com/aljanscholtens](http://twitter.com/aljanscholtens).

## Background

As an interface designer I had the problem with most other boilerplates that they are created for developers.
You'll get everything you need to build a prototype rapidly, but adjusting and adding components and design can be difficult. That's why we built our own boilerplate, Taiga Boilerplate.

Taiga is inspired by these awesome people: Miller Medeiros, Paul Irish, Olav Bjørkøy and Jonathan Snook.

## Copyright and license

Copyright 2012-2015 by [Studio Wolf](http://studiowolf.com) under the [MIT License](LICENSE).
