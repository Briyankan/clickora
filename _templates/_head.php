  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta
      name="author"
      content="Mark Otto, Jacob Thornton, and Bootstrap contributors"
    />
    <meta name="generator" content="Astro v7.3.2" />
    <title>Album example · Bootstrap v6.0</title>
    <script type="importmap">
      {
        "imports": { "@bootstrap": "../assets/dist/js/bootstrap.bundle.min.js" }
      }
    </script>
    <link
      rel="canonical"
      href="https://getbootstrap.com/docs/6.0/examples/album/"
    />
    <script src="/clickora/assets/js/color-modes.js"></script>
    <link href="/clickora/assets/dist/css/bootstrap.min.css" rel="stylesheet" />
    <meta name="theme-color" content="#712cf9" />
    <style>
      .bd-placeholder-img {
        text-anchor: middle;
        user-select: none;
        font-size: 1.125rem;
      }
      @media (width>=768px) {
        .bd-placeholder-img-lg {
          font-size: 2.5rem;
        }
      }
      .b-example-divider {
        background-color: #0000001a;
        border: 1px solid #00000026;
        border-width: 1px 0;
        width: 100%;
        height: 3rem;
        box-shadow:
          inset 0 0.5em 1.5em #0000001a,
          inset 0 0.125em 0.5em #00000026;
      }
      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }
      .bi {
        vertical-align: -0.125em;
        fill: currentColor;
      }
      .nav-scroller {
        z-index: 2;
        height: 2.75rem;
        position: relative;
        overflow-y: hidden;
      }
      .nav-scroller .nav {
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
        flex-wrap: nowrap;
        margin-top: -1px;
        padding-bottom: 1rem;
        display: flex;
        overflow-x: auto;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }
      .bd-mode-toggle .bi {
        width: 1em;
        height: 1em;
      }
      .bd-mode-toggle .menu .active .bi {
        display: block !important;
      }
    </style>
  </head>