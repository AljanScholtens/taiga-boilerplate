# Taiga Boilerplate

Taiga Boilerplate is a small HTML/PostCSS framework for starting a new web project.
It's mobile-first based on the principles of [BEM](http://bem.info) and ITCSS.

## Download

Use these options to quickly install Taiga Boilerplate.

- [Download the latest release](https://github.com/studiowolf/taiga-boilerplate/archive/master.zip)
- Clone the repository `git clone https://github.com/studiowolf/taiga-boilerplate.git`

## Dependencies

- [NPM](#)
- [Gulp](#)

## How to start

1. Make sure you've installed the [dependencies](#dependencies).
2. Get the [latest version](#download) of Taiga Boilerplate.
3. Go to the folder via terminal or your application of choice.
4. **Install via `npm install`.**
5. **Run via `gulp`.**
6. Start building and use `/pattern-library/pattern-library.html` as example and inspiration.

## ITCSS

Soon

## BEM and namespaces

Soon

```
/*
 * Block
 */
.c-example {

  /* 1: Add the direct properties of the element */
  property: value;

  /* 2: Add media queries or print styles */
  @media (--breakpoint-10) { property: value; }

  /* 3: Add selectors of the parent element */
  &:hover { property: value; }

  /* 4: Add temporary states of the parent element */
  &.is-open { property: value; }

  /* 5: Add nested elements */
  & strong { property: value; }
}

/*
 * Modifier
 */
.c-example--modifier {
  property: value;
}

/*
 * Element
 */
.c-example__subcomponent {
  property: value;
}
```

## Grid

The grid we are using is Lost-grid.

## Settings and variables

Variables are defined in `assets/stylesheets/settings.global.css` and are treated a bit differently.
In the example below you'll notice Taiga works with steps of 10, 20, 30 and so on. The trick is simple, 10 is small or light and 100 is large or dark. So we work from nothing to something.

The steps are created this way so you can easily add more in between. This way we will have more consistency in a website, but maintain the creativity and freedom.

```
// Border-radius
--border-radius-10: 0.125rem; // Small
--border-radius-20: 0.313rem; // Larger

// Color brand
--color-primary-30: #29c882; // Lighter
--color-primary-50: #09a25f; // Default
--color-primary-70: #038049; // Darker
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
    background: var(--color-primary-50);
    font-size: var(--font-size-40);
}
```

## Bugs, requests and questions

- Found a bug or need a feature? Post an [issue](https://github.com/studiowolf/taiga-boilerplate/issues/new) or do a [pull request](https://github.com/studiowolf/taiga-boilerplate/pulls).
- Questions? Mail me at [aljan@studiowolf.com](mailto:aljan@studiowolf.com) or tweet to [twitter.com/aljanscholtens](http://twitter.com/aljanscholtens).

## Background

As an interface designer I had the problem with most other boilerplates that they are created for developers.
You'll get everything you need to build a prototype rapidly, but adjusting and adding components and design can be difficult. That's why we built our own boilerplate, Taiga Boilerplate.

Taiga is inspired by these awesome people: Harry Roberts, Miller Medeiros, Paul Irish, Olav Bjørkøy and Jonathan Snook.

## Copyright and license

Copyright 2012-2016 by [Studio Wolf](http://studiowolf.com) under the [MIT License](LICENSE).
