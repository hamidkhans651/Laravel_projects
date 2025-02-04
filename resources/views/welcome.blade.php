<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <title>Your Laravel App</title>
  <title>Villa Agency - Real Estate HTML5 Template</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href="assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-villa-agency.css">
  <link rel="stylesheet" href="assets/css/owl.css">
  <link rel="stylesheet" href="assets/css/animate.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />


  <!-- Styles / Scripts -->
  @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @else
  <style>
    /* ! tailwindcss v3.4.1 | MIT License | https://tailwindcss.com */
    *,
    ::after,
    ::before {
      box-sizing: border-box;
      border-width: 0;
      border-style: solid;
      border-color: #e5e7eb
    }

    ::after,
    ::before {
      --tw-content: ''
    }

    :host,
    html {
      line-height: 1.5;
      -webkit-text-size-adjust: 100%;
      -moz-tab-size: 4;
      tab-size: 4;
      font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
      font-feature-settings: normal;
      font-variation-settings: normal;
      -webkit-tap-highlight-color: transparent
    }

    body {
      margin: 0;
      line-height: inherit
    }

    hr {
      height: 0;
      color: inherit;
      border-top-width: 1px
    }

    abbr:where([title]) {
      -webkit-text-decoration: underline dotted;
      text-decoration: underline dotted
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-size: inherit;
      font-weight: inherit
    }

    a {
      color: inherit;
      text-decoration: inherit
    }

    b,
    strong {
      font-weight: bolder
    }

    code,
    kbd,
    pre,
    samp {
      font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
      font-feature-settings: normal;
      font-variation-settings: normal;
      font-size: 1em
    }

    small {
      font-size: 80%
    }

    sub,
    sup {
      font-size: 75%;
      line-height: 0;
      position: relative;
      vertical-align: baseline
    }

    sub {
      bottom: -.25em
    }

    sup {
      top: -.5em
    }

    table {
      text-indent: 0;
      border-color: inherit;
      border-collapse: collapse
    }

    button,
    input,
    optgroup,
    select,
    textarea {
      font-family: inherit;
      font-feature-settings: inherit;
      font-variation-settings: inherit;
      font-size: 100%;
      font-weight: inherit;
      line-height: inherit;
      color: inherit;
      margin: 0;
      padding: 0
    }

    button,
    select {
      text-transform: none
    }

    [type=button],
    [type=reset],
    [type=submit],
    button {
      -webkit-appearance: button;
      background-color: transparent;
      background-image: none
    }

    :-moz-focusring {
      outline: auto
    }

    :-moz-ui-invalid {
      box-shadow: none
    }

    progress {
      vertical-align: baseline
    }

    ::-webkit-inner-spin-button,
    ::-webkit-outer-spin-button {
      height: auto
    }

    [type=search] {
      -webkit-appearance: textfield;
      outline-offset: -2px
    }

    ::-webkit-search-decoration {
      -webkit-appearance: none
    }

    ::-webkit-file-upload-button {
      -webkit-appearance: button;
      font: inherit
    }

    summary {
      display: list-item
    }

    blockquote,
    dd,
    dl,
    figure,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    hr,
    p,
    pre {
      margin: 0
    }

    fieldset {
      margin: 0;
      padding: 0
    }

    legend {
      padding: 0
    }

    menu,
    ol,
    ul {
      list-style: none;
      margin: 0;
      padding: 0
    }

    dialog {
      padding: 0
    }

    textarea {
      resize: vertical
    }

    input::placeholder,
    textarea::placeholder {
      opacity: 1;
      color: #9ca3af
    }

    [role=button],
    button {
      cursor: pointer
    }

    :disabled {
      cursor: default
    }

    audio,
    canvas,
    embed,
    iframe,
    img,
    object,
    svg,
    video {
      display: block;
      vertical-align: middle
    }

    img,
    video {
      max-width: 100%;
      height: auto
    }

    [hidden] {
      display: none
    }

    *,
    ::before,
    ::after {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-gradient-from-position: ;
      --tw-gradient-via-position: ;
      --tw-gradient-to-position: ;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia:
    }

    ::backdrop {
      --tw-border-spacing-x: 0;
      --tw-border-spacing-y: 0;
      --tw-translate-x: 0;
      --tw-translate-y: 0;
      --tw-rotate: 0;
      --tw-skew-x: 0;
      --tw-skew-y: 0;
      --tw-scale-x: 1;
      --tw-scale-y: 1;
      --tw-pan-x: ;
      --tw-pan-y: ;
      --tw-pinch-zoom: ;
      --tw-scroll-snap-strictness: proximity;
      --tw-gradient-from-position: ;
      --tw-gradient-via-position: ;
      --tw-gradient-to-position: ;
      --tw-ordinal: ;
      --tw-slashed-zero: ;
      --tw-numeric-figure: ;
      --tw-numeric-spacing: ;
      --tw-numeric-fraction: ;
      --tw-ring-inset: ;
      --tw-ring-offset-width: 0px;
      --tw-ring-offset-color: #fff;
      --tw-ring-color: rgb(59 130 246 / 0.5);
      --tw-ring-offset-shadow: 0 0 #0000;
      --tw-ring-shadow: 0 0 #0000;
      --tw-shadow: 0 0 #0000;
      --tw-shadow-colored: 0 0 #0000;
      --tw-blur: ;
      --tw-brightness: ;
      --tw-contrast: ;
      --tw-grayscale: ;
      --tw-hue-rotate: ;
      --tw-invert: ;
      --tw-saturate: ;
      --tw-sepia: ;
      --tw-drop-shadow: ;
      --tw-backdrop-blur: ;
      --tw-backdrop-brightness: ;
      --tw-backdrop-contrast: ;
      --tw-backdrop-grayscale: ;
      --tw-backdrop-hue-rotate: ;
      --tw-backdrop-invert: ;
      --tw-backdrop-opacity: ;
      --tw-backdrop-saturate: ;
      --tw-backdrop-sepia:
    }

    .absolute {
      position: absolute
    }

    .relative {
      position: relative
    }

    .-left-20 {
      left: -5rem
    }

    .top-0 {
      top: 0px
    }

    .-bottom-16 {
      bottom: -4rem
    }

    .-left-16 {
      left: -4rem
    }

    .-mx-3 {
      margin-left: -0.75rem;
      margin-right: -0.75rem
    }

    .mt-4 {
      margin-top: 1rem
    }

    .mt-6 {
      margin-top: 1.5rem
    }

    .flex {
      display: flex
    }

    .grid {
      display: grid
    }

    .hidden {
      display: none
    }

    .aspect-video {
      aspect-ratio: 16 / 9
    }

    .size-12 {
      width: 3rem;
      height: 3rem
    }

    .size-5 {
      width: 1.25rem;
      height: 1.25rem
    }

    .size-6 {
      width: 1.5rem;
      height: 1.5rem
    }

    .h-12 {
      height: 3rem
    }

    .h-40 {
      height: 10rem
    }

    .h-full {
      height: 100%
    }

    .min-h-screen {
      min-height: 100vh
    }

    .w-full {
      width: 100%
    }

    .w-\[calc\(100\%\+8rem\)\] {
      width: calc(100% + 8rem)
    }

    .w-auto {
      width: auto
    }

    .max-w-\[877px\] {
      max-width: 877px
    }

    .max-w-2xl {
      max-width: 42rem
    }

    .flex-1 {
      flex: 1 1 0%
    }

    .shrink-0 {
      flex-shrink: 0
    }

    .grid-cols-2 {
      grid-template-columns: repeat(2, minmax(0, 1fr))
    }

    .flex-col {
      flex-direction: column
    }

    .items-start {
      align-items: flex-start
    }

    .items-center {
      align-items: center
    }

    .items-stretch {
      align-items: stretch
    }

    .justify-end {
      justify-content: flex-end
    }

    .justify-center {
      justify-content: center
    }

    .gap-2 {
      gap: 0.5rem
    }

    .gap-4 {
      gap: 1rem
    }

    .gap-6 {
      gap: 1.5rem
    }

    .self-center {
      align-self: center
    }

    .overflow-hidden {
      overflow: hidden
    }

    .rounded-\[10px\] {
      border-radius: 10px
    }

    .rounded-full {
      border-radius: 9999px
    }

    .rounded-lg {
      border-radius: 0.5rem
    }

    .rounded-md {
      border-radius: 0.375rem
    }

    .rounded-sm {
      border-radius: 0.125rem
    }

    .bg-\[\#FF2D20\]\/10 {
      background-color: rgb(255 45 32 / 0.1)
    }

    .bg-white {
      --tw-bg-opacity: 1;
      background-color: rgb(255 255 255 / var(--tw-bg-opacity))
    }

    .bg-gradient-to-b {
      background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
    }

    .from-transparent {
      --tw-gradient-from: transparent var(--tw-gradient-from-position);
      --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
      --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
    }

    .via-white {
      --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
      --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
    }

    .to-white {
      --tw-gradient-to: #fff var(--tw-gradient-to-position)
    }

    .stroke-\[\#FF2D20\] {
      stroke: #FF2D20
    }

    .object-cover {
      object-fit: cover
    }

    .object-top {
      object-position: top
    }

    .p-6 {
      padding: 1.5rem
    }

    .px-6 {
      padding-left: 1.5rem;
      padding-right: 1.5rem
    }

    .py-10 {
      padding-top: 2.5rem;
      padding-bottom: 2.5rem
    }

    .px-3 {
      padding-left: 0.75rem;
      padding-right: 0.75rem
    }

    .py-16 {
      padding-top: 4rem;
      padding-bottom: 4rem
    }

    .py-2 {
      padding-top: 0.5rem;
      padding-bottom: 0.5rem
    }

    .pt-3 {
      padding-top: 0.75rem
    }

    .text-center {
      text-align: center
    }

    .font-sans {
      font-family: Figtree, ui-sans-serif, system-ui, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji
    }

    .text-sm {
      font-size: 0.875rem;
      line-height: 1.25rem
    }

    .text-sm\/relaxed {
      font-size: 0.875rem;
      line-height: 1.625
    }

    .text-xl {
      font-size: 1.25rem;
      line-height: 1.75rem
    }

    .font-semibold {
      font-weight: 600
    }

    .text-black {
      --tw-text-opacity: 1;
      color: rgb(0 0 0 / var(--tw-text-opacity))
    }

    .text-white {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .underline {
      -webkit-text-decoration-line: underline;
      text-decoration-line: underline
    }

    .antialiased {
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale
    }

    .shadow-\[0px_14px_34px_0px_rgba\(0\2c 0\2c 0\2c 0\.08\)\] {
      --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, 0.08);
      --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
      box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
    }

    .ring-1 {
      --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
      --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
    }

    .ring-transparent {
      --tw-ring-color: transparent
    }

    .ring-white\/\[0\.05\] {
      --tw-ring-color: rgb(255 255 255 / 0.05)
    }

    .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.06\)\] {
      --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.06));
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
    }

    .drop-shadow-\[0px_4px_34px_rgba\(0\2c 0\2c 0\2c 0\.25\)\] {
      --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, 0.25));
      filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
    }

    .transition {
      transition-property: color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
      transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
      transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;
      transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
      transition-duration: 150ms
    }

    .duration-300 {
      transition-duration: 300ms
    }

    .selection\:bg-\[\#FF2D20\] *::selection {
      --tw-bg-opacity: 1;
      background-color: rgb(255 45 32 / var(--tw-bg-opacity))
    }

    .selection\:text-white *::selection {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .selection\:bg-\[\#FF2D20\]::selection {
      --tw-bg-opacity: 1;
      background-color: rgb(255 45 32 / var(--tw-bg-opacity))
    }

    .selection\:text-white::selection {
      --tw-text-opacity: 1;
      color: rgb(255 255 255 / var(--tw-text-opacity))
    }

    .hover\:text-black:hover {
      --tw-text-opacity: 1;
      color: rgb(0 0 0 / var(--tw-text-opacity))
    }

    .hover\:text-black\/70:hover {
      color: rgb(0 0 0 / 0.7)
    }

    .hover\:ring-black\/20:hover {
      --tw-ring-color: rgb(0 0 0 / 0.2)
    }

    .focus\:outline-none:focus {
      outline: 2px solid transparent;
      outline-offset: 2px
    }

    .focus-visible\:ring-1:focus-visible {
      --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
      --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
      box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
    }

    .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
      --tw-ring-opacity: 1;
      --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
    }

    @media (min-width: 640px) {
      .sm\:size-16 {
        width: 4rem;
        height: 4rem
      }

      .sm\:size-6 {
        width: 1.5rem;
        height: 1.5rem
      }

      .sm\:pt-5 {
        padding-top: 1.25rem
      }
    }

    @media (min-width: 768px) {
      .md\:row-span-3 {
        grid-row: span 3 / span 3
      }
    }

    @media (min-width: 1024px) {
      .lg\:col-start-2 {
        grid-column-start: 2
      }

      .lg\:h-16 {
        height: 4rem
      }

      .lg\:max-w-7xl {
        max-width: 80rem
      }

      .lg\:grid-cols-3 {
        grid-template-columns: repeat(3, minmax(0, 1fr))
      }

      .lg\:grid-cols-2 {
        grid-template-columns: repeat(2, minmax(0, 1fr))
      }

      .lg\:flex-col {
        flex-direction: column
      }

      .lg\:items-end {
        align-items: flex-end
      }

      .lg\:justify-center {
        justify-content: center
      }

      .lg\:gap-8 {
        gap: 2rem
      }

      .lg\:p-10 {
        padding: 2.5rem
      }

      .lg\:pb-10 {
        padding-bottom: 2.5rem
      }

      .lg\:pt-0 {
        padding-top: 0px
      }

      .lg\:text-\[\#FF2D20\] {
        --tw-text-opacity: 1;
        color: rgb(255 45 32 / var(--tw-text-opacity))
      }
    }

    @media (prefers-color-scheme: dark) {
      .dark\:block {
        display: block
      }

      .dark\:hidden {
        display: none
      }

      .dark\:bg-black {
        --tw-bg-opacity: 1;
        background-color: rgb(0 0 0 / var(--tw-bg-opacity))
      }

      .dark\:bg-zinc-900 {
        --tw-bg-opacity: 1;
        background-color: rgb(24 24 27 / var(--tw-bg-opacity))
      }

      .dark\:via-zinc-900 {
        --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
        --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
      }

      .dark\:to-zinc-900 {
        --tw-gradient-to: #18181b var(--tw-gradient-to-position)
      }

      .dark\:text-white\/50 {
        color: rgb(255 255 255 / 0.5)
      }

      .dark\:text-white {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
      }

      .dark\:text-white\/70 {
        color: rgb(255 255 255 / 0.7)
      }

      .dark\:ring-zinc-800 {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity))
      }

      .dark\:hover\:text-white:hover {
        --tw-text-opacity: 1;
        color: rgb(255 255 255 / var(--tw-text-opacity))
      }

      .dark\:hover\:text-white\/70:hover {
        color: rgb(255 255 255 / 0.7)
      }

      .dark\:hover\:text-white\/80:hover {
        color: rgb(255 255 255 / 0.8)
      }

      .dark\:hover\:ring-zinc-700:hover {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity))
      }

      .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity))
      }

      .dark\:focus-visible\:ring-white:focus-visible {
        --tw-ring-opacity: 1;
        --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity))
      }
    }
  </style>
  @endif
</head>

<body>
 <!-- ***** Preloader Start ***** -->
 <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->


  <x-navigation />

  <!-- ***** Header Area End ***** -->

  <div class="main-banner">
    <div class="owl-carousel owl-banner">
      <div class="item item-1">
        <div class="header-text">
          <span class="category">Karachi, <em>Pakistan</em></span>
          <h2>Hurry!<br>Get the Best Villa for you</h2>
        </div>
      </div>
      <div class="item item-2">
        <div class="header-text">
          <span class="category">islamabad, <em>Pakistan</em></span>
          <h2>Be Quick!<br>Get the best villa in town</h2>
        </div>
      </div>
      <div class="item item-3">
        <div class="header-text">
          <span class="category">Lahore, <em>Pakistan</em></span>
          <h2>Act Now!<br>Get the highest level penthouse</h2>
        </div>
      </div>
    </div>
  </div>

  <div class="featured section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="left-image">
            <img src="assets/images/featured.jpg" alt="">
            <a href=#><img src="assets/images/featured-icon.png" alt="" style="max-width: 60px; padding: 0px;"></a>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="section-heading">
            <h6>| Featured</h6>
            <h2>Best Appartment &amp; Sea view</h2>
          </div>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne">
                  Best useful links ?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Get <strong>the best villa</strong> website template in HTML CSS and Bootstrap for your business.
                  TemplateMo provides you the <a href="https://www.google.com/search?q=best+free+css+templates"
                    target="_blank">best free CSS templates</a> in the world. Please tell your friends about it.</div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  How does this work ?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor
                  incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Why is Villa Agency the best ?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn't eiusmod tempor
                  incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="info-table">
            <ul>
              <li>
                <img src="assets/images/info-icon-01.png" alt="" style="max-width: 52px;">
                <h4>250 m2<br><span>Total Flat Space</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-02.png" alt="" style="max-width: 52px;">
                <h4>Contract<br><span>Contract Ready</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-03.png" alt="" style="max-width: 52px;">
                <h4>Payment<br><span>Payment Process</span></h4>
              </li>
              <li>
                <img src="assets/images/info-icon-04.png" alt="" style="max-width: 52px;">
                <h4>Safety<br><span>24/7 Under Control</span></h4>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="video section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="section-heading text-center">
            <h6>| Video View</h6>
            <h2>Get Closer View & Different Feeling</h2>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="video-content">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 offset-lg-1">
          <div class="video-frame">
            <img src="assets/images/video-frame.jpg" alt="">
            <a href="https://youtube.com" target="_blank"><i class="fa fa-play"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="fun-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="wrapper">
            <div class="row">
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="34" data-speed="1000"></h2>
                  <p class="count-text ">Buildings<br>Finished Now</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="12" data-speed="1000"></h2>
                  <p class="count-text ">Years<br>Experience</p>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="counter">
                  <h2 class="timer count-title count-number" data-to="24" data-speed="1000"></h2>
                  <p class="count-text ">Awwards<br>Won 2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="section best-deal">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="section-heading">
            <h6>| Best Deal</h6>
            <h2>Find Your Best Deal Right Now!</h2>
          </div>
        </div>

        <div class="col-lg-12">
          <div class="tabs-content">
            <div class="row">
              <div class="nav-wrapper ">
                <ul class="nav nav-tabs" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="appartment-tab" data-bs-toggle="tab"
                      data-bs-target="#appartment" type="button" role="tab" aria-controls="appartment"
                      aria-selected="true">Appartment</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa" type="button"
                      role="tab" aria-controls="villa" aria-selected="false">Villa House</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="penthouse-tab" data-bs-toggle="tab" data-bs-target="#penthouse"
                      type="button" role="tab" aria-controls="penthouse" aria-selected="false">Penthouse</button>
                  </li>
                </ul>
              </div>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="appartment" role="tabpanel" aria-labelledby="appartment-tab">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="info-table">
                        <ul>
                          <li>Total Flat Space <span>185 m2</span></li>
                          <li>Floor number <span>26th</span></li>
                          <li>Number of rooms <span>4</span></li>
                          <li>Parking Available <span>Yes</span></li>
                          <li>Payment Process <span>Bank</span></li>
                        </ul>
                      </div>
                    </div>

                    <div class="col-lg-6">
                    </div>
                    <div class="col-lg-3">
                      <h4>Extra Info About Property</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, do eiusmod tempor pack incididunt ut
                        labore et dolore magna aliqua quised ipsum suspendisse.
                        <br><br>When you need free CSS templates, you can simply type TemplateMo in any search engine
                        website. In addition, you can type TemplateMo Portfolio, TemplateMo One Page Layouts, etc.
                      </p>
                      <div class="icon-button">
                      </div>
                    </div>
                  </div>
                </div>




                <!-- Scripts -->
                <!-- Bootstrap core JavaScript -->
                <script src="vendor/jquery/jquery.min.js"></script>
                <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
                <script src="assets/js/isotope.min.js"></script>
                <script src="assets/js/owl-carousel.js"></script>
                <script src="assets/js/counter.js"></script>
                <script src="assets/js/custom.js"></script>
                <script>
                  // Hamburger Menu Toggle for small devices
                  document.getElementById('menu-toggle').addEventListener('click', function() {
                    const menu = document.getElementById('menu');
                    menu.classList.toggle('hidden');
                  });
                </script>





</body>

</html>