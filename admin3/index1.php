
<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Falcon | Dashboard &amp; Web App Templat</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="assets/js/config.js"></script>

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <script>
          var isFluid = JSON.parse(localStorage.getItem('isFluid'));
          if (isFluid) {
            var container = document.querySelector('[data-layout]');
            container.classList.remove('container');
            container.classList.add('container-fluid');
          }
        </script>
        <nav class="navbar navbar-light navbar-vertical navbar-expand-xl" style="display: none;">
          <script>
            var navbarStyle = localStorage.getItem("navbarStyle");
            if (navbarStyle && navbarStyle !== 'transparent') {
              document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
            }
          </script>
          <div class="d-flex align-items-center">
            <div class="toggle-icon-wrapper">
              <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip" data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            </div><a class="navbar-brand" href="index.html">
              <div class="d-flex align-items-center py-3"><img class="me-2" src="assets/img/illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
            <div class="navbar-vertical-content scrollbar">
              <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item">
                  <!-- label-->
                  <div class="row mb-2">
                    <div class="col-auto navbar-vertical-label">Dashboard</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link active" href="index.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Default</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="dashboard/dashboard-alt.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-area"></span></span><span class="nav-link-text ps-1">Alternate</span></div>
                  </a>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <div class="row mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">App</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="app/calendar.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Calendar</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="app/chat.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-comments"></span></span><span class="nav-link-text ps-1">Chat</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="email">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-envelope-open"></span></span><span class="nav-link-text ps-1">Email</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="email">
                    <li class="nav-item"><a class="nav-link" href="email/inbox.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Inbox</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="email/email-detail.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Email detail</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="email/compose.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Compose</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#events" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="events">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-day"></span></span><span class="nav-link-text ps-1">Events</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="events">
                    <li class="nav-item"><a class="nav-link" href="events/create-an-event.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Create an event</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="events/event-detail.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event detail</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="events/event-list.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Event list</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shopping-cart"></span></span><span class="nav-link-text ps-1">E commerce</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="e-commerce">
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#product" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product</span></div>
                      </a><!-- more inner pages-->
                      <!-- inner pages-->
                      <ul class="nav collapse" id="product">
                        <li class="nav-item"><a class="nav-link" href="e-commerce/product-list.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product list</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="e-commerce/product-grid.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product grid</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="e-commerce/product-details.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Product details</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#orders" data-bs-toggle="collapse" aria-expanded="false" aria-controls="e-commerce">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Orders</span></div>
                      </a><!-- more inner pages-->
                      <!-- inner pages-->
                      <ul class="nav collapse" id="orders">
                        <li class="nav-item"><a class="nav-link" href="e-commerce/order-list.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order list</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="e-commerce/order-details.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Order details</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customers</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/customer-details.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Customer details</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/shopping-cart.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Shopping cart</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="e-commerce/checkout.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checkout</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link" href="app/kanban.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-trello"></span></span><span class="nav-link-text ps-1">Kanban</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#social" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="social">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-share-alt"></span></span><span class="nav-link-text ps-1">Social</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="social">
                    <li class="nav-item"><a class="nav-link" href="social/feed.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Feed</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="social/profile.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Profile</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="social/activity.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Activity log</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="social/notifications.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Notifications</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="social/associations.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Associations</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="social/people.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Followers</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="social/settings.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Settings</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/privacy-policy.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Privacy policy</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <div class="row mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Pages</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="pages/landing.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-globe"></span></span><span class="nav-link-text ps-1">Landing</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#pricing" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="pricing">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-tags"></span></span><span class="nav-link-text ps-1">Pricing</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="pricing">
                    <li class="nav-item"><a class="nav-link" href="pages/pricing-default.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing default</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/pricing-alt.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pricing alt</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/billing.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Billing</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/invoice.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Invoice</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link" href="pages/invite-people.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-user-plus"></span></span><span class="nav-link-text ps-1">Invite people</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#faq" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="faq">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-question-circle"></span></span><span class="nav-link-text ps-1">Faq</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="faq">
                    <li class="nav-item"><a class="nav-link" href="pages/faq/faq-basic.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq basic</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/faq/faq-alt.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq alt</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/faq/faq-accordion.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Faq accordion</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#errors" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="errors">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-exclamation-triangle"></span></span><span class="nav-link-text ps-1">Errors</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="errors">
                    <li class="nav-item"><a class="nav-link" href="pages/errors/404.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">404</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="pages/errors/500.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">500</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link" href="pages/starter.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-flag"></span></span><span class="nav-link-text ps-1">Starter</span></div>
                  </a>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <div class="row mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Authentication</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link dropdown-indicator" href="#simple" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="simple">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-circle"></span></span><span class="nav-link-text ps-1">Simple</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="simple">
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/login.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/logout.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/register.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/forgot-password.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/confirm-mail.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/basic/lock-screen.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#card" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="card">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-clone"></span></span><span class="nav-link-text ps-1">Card</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="card">
                    <li class="nav-item"><a class="nav-link" href="authentication/card/login.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/card/logout.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/card/register.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/card/forgot-password.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/card/confirm-mail.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/card/lock-screen.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#split" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="split">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-adjust"></span></span><span class="nav-link-text ps-1">Split</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="split">
                    <li class="nav-item"><a class="nav-link" href="authentication/split/login.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Login</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/logout.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Logout</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/register.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Register</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/forgot-password.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Forgot password</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/confirm-mail.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Confirm mail</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="authentication/split/lock-screen.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lock screen</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link" href="authentication/wizard.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-layer-group"></span></span><span class="nav-link-text ps-1">Wizard</span></div>
                  </a><!-- parent pages--><a class="nav-link" role="button" data-bs-toggle="modal" data-bs-target="#authentication-modal">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-window-maximize"></span></span><span class="nav-link-text ps-1">Modal</span></div>
                  </a>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <div class="row mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Modules</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link dropdown-indicator" href="#components" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-puzzle-piece"></span></span><span class="nav-link-text ps-1">Components</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="components">
                    <li class="nav-item"><a class="nav-link" href="components/accordion.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Accordion</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/alerts.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Alerts</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/avatar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Avatar</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/background.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Background</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/badges.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Badges</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/breadcrumb.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Breadcrumbs</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/buttons.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Button</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/cards.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Card</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/carousel.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Carousel</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/collapse.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Collapse</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/countup.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Countup</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/dropdowns.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dropdowns</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link nav-link-disable" href="components/fancytab.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Fancytabs</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/fancyscroll.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Fancyscroll</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/hoverbox.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Hoverbox</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/list-group.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">List group</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/modals.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Modals</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/navs.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navs</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link dropdown-indicator" href="#navbar" data-bs-toggle="collapse" aria-expanded="false" aria-controls="components">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Navbar</span></div>
                      </a><!-- more inner pages-->
                      <!-- inner pages-->
                      <ul class="nav collapse" id="navbar">
                        <li class="nav-item"><a class="nav-link active" href="components/navbar/default.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Default</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="components/navbar/vertical.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="components/navbar/top.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Top</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="components/navbar/combo.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Combo</span></div>
                          </a><!-- more inner pages-->
                        </li>
                        <li class="nav-item"><a class="nav-link" href="components/navbar/darken-on-scroll.html">
                            <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Darken on scroll</span></div>
                          </a><!-- more inner pages-->
                        </li>
                      </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/cookie-notice.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Cookie notice</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/page-headers.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Page headers</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/pagination.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pagination</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/popovers.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Popovers</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/progress.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Progress</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/scrollspy.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Scrollspy</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/sidepanel.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sidepanel</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/spinners.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Spinners</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/tabs.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tabs</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/toasts.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Toasts</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="components/tooltips.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tooltips</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#forms" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="forms">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-file-alt"></span></span><span class="nav-link-text ps-1">Forms</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="forms">
                    <li class="nav-item"><a class="nav-link" href="forms/checks.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Checks</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="forms/file.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">File</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="forms/form-control.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Form control</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="forms/input-group.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Input group</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="forms/layout.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Layout</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="forms/overview.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Overview</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="forms/range.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Range</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="forms/select.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Select</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="forms/validation.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Validation</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#tables" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="tables">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-table"></span></span><span class="nav-link-text ps-1">Tables</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="tables">
                    <li class="nav-item"><a class="nav-link" href="components/tables.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Table</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/list.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">List</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#charts" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="charts">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-chart-line"></span></span><span class="nav-link-text ps-1">Charts</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="charts">
                    <li class="nav-item"><a class="nav-link nav-link-disable" href="plugins/chartjs.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Chartjs</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/echarts.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">ECharts</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#maps" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="maps">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-map"></span></span><span class="nav-link-text ps-1">Maps</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="maps">
                    <li class="nav-item"><a class="nav-link" href="plugins/map/google-map.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Google map</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/map/leaflet-map.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Leaflet map</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link" href="plugins/icons.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-shapes"></span></span><span class="nav-link-text ps-1">Icons</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#plugins" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="plugins">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-plug"></span></span><span class="nav-link-text ps-1">Plugins</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="plugins">
                    <li class="nav-item"><a class="nav-link" href="plugins/anchor.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Anchor</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/countup.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Countup</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/choices.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Choices</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/date-picker.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Date picker</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/draggable.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Draggable</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/dropzone.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dropzone</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/emoji-button.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Emoji button</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/fullcalendar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Fullcalendar</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/glightbox.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Glightbox</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/progressbar.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Progressbar</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/inline-player.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Inline player</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/lottie.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lottie</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/typed-text.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Typed text</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/tinymce.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Tinymce</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/swiper.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Swiper</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="plugins/rater.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Rater</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link dropdown-indicator" href="#utilities" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="utilities">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-fire"></span></span><span class="nav-link-text ps-1">Utilities</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="utilities">
                    <li class="nav-item"><a class="nav-link" href="utilities/borders.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Borders</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="utilities/clearfix.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Clearfix</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="utilities/colors.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Colors</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="utilities/display.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Display</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="utilities/embed.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Embed</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="utilities/flex.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Flex</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="utilities/float.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Float</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="utilities/grid.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Grid</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="utilities/position.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Position</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="utilities/sizing.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sizing</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="utilities/stretched-link.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Stretched link</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="utilities/text-truncation.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Text truncation</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="utilities/typography.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Typography</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="utilities/vertical-align.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Vertical align</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="utilities/visibility.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Visibility</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link" href="widgets.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-poll"></span></span><span class="nav-link-text ps-1">Widgets</span></div>
                  </a>
                </li>
                <li class="nav-item">
                  <!-- label-->
                  <div class="row mt-3 mb-2">
                    <div class="col-auto navbar-vertical-label">Docs</div>
                    <div class="col ps-0">
                      <hr class="mb-0 navbar-vertical-divider" />
                    </div>
                  </div><!-- parent pages--><a class="nav-link" href="documentation/getting-started.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-rocket"></span></span><span class="nav-link-text ps-1">Getting started</span></div>
                  </a><!-- parent pages--><a class="nav-link dropdown-indicator" href="#customization" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="customization">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-wrench"></span></span><span class="nav-link-text ps-1">Customization</span></div>
                  </a><!-- inner pages-->
                  <ul class="nav collapse" id="customization">
                    <li class="nav-item"><a class="nav-link" href="documentation/configuration.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Configuration</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="documentation/styling.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Styling</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="documentation/dark-mode.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Dark mode</span><span class="badge rounded-pill ms-2 badge-soft-success">New</span></div>
                      </a><!-- more inner pages-->
                    </li>
                    <li class="nav-item"><a class="nav-link" href="documentation/plugin.html">
                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Plugin</span></div>
                      </a><!-- more inner pages-->
                    </li>
                  </ul><!-- parent pages--><a class="nav-link" href="documentation/gulp.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fab fa-gulp"></span></span><span class="nav-link-text ps-1">Gulp</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="documentation/design-file.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-palette"></span></span><span class="nav-link-text ps-1">Design file</span></div>
                  </a><!-- parent pages--><a class="nav-link" href="changelog.html" role="button">
                    <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-code-branch"></span></span><span class="nav-link-text ps-1">Changelog</span></div>
                  </a>
                </li>
              </ul>
              <div class="settings mb-3">
                <div class="card alert p-0" role="alert"><button class="btn-close btn-sm end-0 position-absolute fs--2 fw-bold p-2" aria-label="Close" data-bs-dismiss="alert" type="button"></button>
                  <div class="card-body text-center"><img src="assets/img/illustrations/navbar-vertical.png" alt="" width="80" />
                    <p class="fs--2 mt-2">Loving what you see? <br />Get your copy of <a href="#!">Falcon</a></p>
                    <div class="d-grid"><a class="btn btn-sm btn-purchase" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </nav>
        <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-xl" style="display: none;">
          <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarStandard" aria-controls="navbarStandard" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
          <a class="navbar-brand me-1 me-sm-3" href="index.html">
            <div class="d-flex align-items-center"><img class="me-2" src="assets/img/illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
          </a>
          <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
            <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboard">Dashboard</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboard">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="index.html">Default</a><a class="dropdown-item link-600 fw-medium" href="dashboard/dashboard-alt.html">Alternate</a></div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="app">App</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="app">
                  <div class="card navbar-card-app shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-md-5">
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="app/kanban.html">Kanban</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="social/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="social/activity.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="social/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="social/people.html">Followers</a><a class="nav-link py-1 link-600 fw-medium" href="social/settings.html">Settings</a><a class="nav-link py-1 link-600 fw-medium" href="pages/privacy-policy.html">Privacy policy</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="events/event-list.html">Event list</a>
                          </div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="email/compose.html">Compose</a>
                            <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/checkout.html">Checkout</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pages">Pages</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="pages">
                  <div class="card navbar-card-pages shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-md-5">
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="pages/landing.html">Landing</a><a class="nav-link py-1 link-600 fw-medium" href="pages/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="pages/pricing-alt.html">Pricing alt</a><a class="nav-link py-1 link-600 fw-medium" href="pages/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="pages/invoice.html">Invoice</a><a class="nav-link py-1 link-600 fw-medium" href="pages/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-basic.html">Faq basic</a><a class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-alt.html">Faq alt</a><a class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-accordion.html">Faq accordion</a></div>
                        </div>
                        <div class="col-6 col-md-4">
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="pages/errors/500.html">500</a><a class="nav-link py-1 link-600 fw-medium" href="pages/starter.html">Starter</a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="authentication">Authentication</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="authentication">
                  <div class="card navbar-card-auth shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Simple</p><a class="nav-link py-1 link-600 fw-medium" href="authentication/basic/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/basic/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/basic/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/basic/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/basic/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/basic/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Card</p><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Split</p><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/lock-screen.html">Lock screen</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="undefined.html">Modal</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="modules">Modules</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="modules">
                  <div class="card navbar-card-components shadow-none dark__bg-1000">
                    <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                      <div class="row">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="components/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="components/breadcrumb.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="components/buttons.html">Button</a><a class="nav-link py-1 link-600 fw-medium" href="components/cards.html">Card</a><a class="nav-link py-1 link-600 fw-medium" href="components/carousel.html">Carousel</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="components/fancytab.html">Fancytabs</a><a class="nav-link py-1 link-600 fw-medium" href="components/fancyscroll.html">Fancyscroll</a><a class="nav-link py-1 link-600 fw-medium" href="components/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="components/navs.html">Navs</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="components/navbar/default.html">Default</a><a class="nav-link py-1 link-600 fw-medium" href="components/navbar/vertical.html">Vertical</a><a class="nav-link py-1 link-600 fw-medium" href="components/navbar/top.html">Top</a><a class="nav-link py-1 link-600 fw-medium" href="components/navbar/combo.html">Combo</a><a class="nav-link py-1 link-600 fw-medium" href="components/navbar/darken-on-scroll.html">Darken on scroll</a><a class="nav-link py-1 link-600 fw-medium" href="components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="components/page-headers.html">Page headers</a><a class="nav-link py-1 link-600 fw-medium" href="components/pagination.html">Pagination</a><a class="nav-link py-1 link-600 fw-medium" href="components/popovers.html">Popovers</a></div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="components/progress.html">Progress</a><a class="nav-link py-1 link-600 fw-medium" href="components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="components/sidepanel.html">Sidepanel</a><a class="nav-link py-1 link-600 fw-medium" href="components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="components/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="components/tooltips.html">Tooltips</a></div>
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="forms/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="forms/file.html">File</a><a class="nav-link py-1 link-600 fw-medium" href="forms/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="forms/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="forms/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="forms/overview.html">Overview</a><a class="nav-link py-1 link-600 fw-medium" href="forms/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="forms/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="forms/validation.html">Validation</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">plugins</p><a class="nav-link py-1 link-600 fw-medium" href="plugins/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/choices.html">Choices</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/draggable.html">Draggable</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/dropzone.html">Dropzone</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/fullcalendar.html">Fullcalendar</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/glightbox.html">Glightbox</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="plugins/progressbar.html">Progressbar</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/inline-player.html">Inline player</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/lottie.html">Lottie</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/tinymce.html">Tinymce</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/rater.html">Rater</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="components/tables.html">Table</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/list.html">List</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="plugins/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/echarts.html">ECharts</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="plugins/map/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/map/leaflet-map.html">Leaflet map</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="plugins/icons.html">Icons</a>
                          </div>
                        </div>
                      </div>
                      <div class="row mt-2">
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column">
                            <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/grid.html">Grid</a>
                          </div>
                        </div>
                        <div class="col-6 col-xxl-3">
                          <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/visibility.html">Visibility</a>
                            <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="widgets.html">Widgets</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="docs">Docs</a>
                <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="docs">
                  <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="documentation/getting-started.html">Getting started</a><a class="dropdown-item link-600 fw-medium" href="documentation/configuration.html">Configuration</a><a class="dropdown-item link-600 fw-medium" href="documentation/styling.html">Styling</a><a class="dropdown-item link-600 fw-medium" href="documentation/dark-mode.html">Dark mode<span class="badge rounded-pill ms-2 badge-soft-success">New</span></a><a class="dropdown-item link-600 fw-medium" href="documentation/plugin.html">Plugin</a><a class="dropdown-item link-600 fw-medium" href="documentation/gulp.html">Gulp</a><a class="dropdown-item link-600 fw-medium" href="documentation/design-file.html">Design file</a><a class="dropdown-item link-600 fw-medium" href="changelog.html">Changelog</a></div>
                </div>
              </li>
            </ul>
          </div>
          <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
            <li class="nav-item"><a class="nav-link settings-popover" href="#settings-modal" data-bs-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></a></li>
            <li class="nav-item">
              <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
              <div class="dropdown-menu dropdown-menu-end dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                <div class="card card-notification shadow-none">
                  <div class="card-header">
                    <div class="row justify-content-between align-items-center">
                      <div class="col-auto">
                        <h6 class="card-header-title mb-0">Notifications</h6>
                      </div>
                      <div class="col-auto"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                    </div>
                  </div>
                  <div class="list-group list-group-flush fw-normal fs--1">
                    <div class="list-group-title border-bottom">NEW</div>
                    <div class="list-group-item">
                      <a class="notification notification-flush notification-unread" href="#!">
                        <div class="notification-avatar">
                          <div class="avatar avatar-2xl me-3">
                            <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />
                          </div>
                        </div>
                        <div class="notification-body">
                          <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                          <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                        </div>
                      </a>
                    </div>
                    <div class="list-group-item">
                      <a class="notification notification-flush notification-unread" href="#!">
                        <div class="notification-avatar">
                          <div class="avatar avatar-2xl me-3">
                            <div class="avatar-name rounded-circle"><span>AB</span></div>
                          </div>
                        </div>
                        <div class="notification-body">
                          <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                          <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                        </div>
                      </a>
                    </div>
                    <div class="list-group-title border-bottom">EARLIER</div>
                    <div class="list-group-item">
                      <a class="notification notification-flush" href="#!">
                        <div class="notification-avatar">
                          <div class="avatar avatar-2xl me-3">
                            <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="" />
                          </div>
                        </div>
                        <div class="notification-body">
                          <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                          <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                        </div>
                      </a>
                    </div>
                  </div>
                  <div class="card-footer text-center border-top"><a class="card-link d-block" href="pages/notifications.html">View all</a></div>
                </div>
              </div>
            </li>
            <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="avatar avatar-xl">
                  <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                <div class="bg-white dark__bg-1000 rounded-2 py-2">
                  <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#!">Set status</a>
                  <a class="dropdown-item" href="pages/profile.html">Profile &amp; account</a>
                  <a class="dropdown-item" href="#!">Feedback</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="pages/settings.html">Settings</a>
                  <a class="dropdown-item" href="authentication/card/logout.html">Logout</a>
                </div>
              </div>
            </li>
          </ul>
        </nav>
        <div class="content">
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand" style="display: none;">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center"><img class="me-2" src="assets/img/illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
            </a>
            <ul class="navbar-nav align-items-center d-none d-lg-block">
              <li class="nav-item">
                <div class="search-box" data-list='{"valueNames":["title"]}'>
                  <form class="position-relative" data-bs-toggle="search" data-display="static"><input class="form-control search-input fuzzy-search" type="search" placeholder="Search..." aria-label="Search" />
                    <span class="fas fa-search search-box-icon"></span>
                  </form><button class="btn-close position-absolute end-0 top-50 translate-middle shadow-none p-1 me-1 fs--2" type="button" data-dismiss="search"></button>
                  <div class="dropdown-menu border font-base start-0 mt-2 py-0 overflow-hidden w-100">
                    <div class="scrollbar list py-3" style="max-height: 24rem;">
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Recently Browsed</h6><a class="dropdown-item fs--1 px-card py-1 hover-primary" href="pages/events.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>
                          <div class="fw-normal title">Pages <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Events</div>
                        </div>
                      </a>
                      <a class="dropdown-item fs--1 px-card py-1 hover-primary" href="e-commerce/customers.html">
                        <div class="d-flex align-items-center">
                          <span class="fas fa-circle me-2 text-300 fs--2"></span>
                          <div class="fw-normal title">E-commerce <span class="fas fa-chevron-right mx-1 text-500 fs--2" data-fa-transform="shrink-2"></span> Customers</div>
                        </div>
                      </a>
                      <hr class="bg-200" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Suggested Filter</h6><a class="dropdown-item px-card py-1 fs-0" href="e-commerce/customers.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-warning">customers:</span>
                          <div class="flex-1 fs--1 title">All customers list</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="pages/events.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-success">events:</span>
                          <div class="flex-1 fs--1 title">Latest events in current month</div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-1 fs-0" href="e-commerce/product-grid.html">
                        <div class="d-flex align-items-center"><span class="badge fw-medium text-decoration-none me-2 badge-soft-info">products:</span>
                          <div class="flex-1 fs--1 title">Most popular products</div>
                        </div>
                      </a>
                      <hr class="bg-200" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Files</h6><a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="border h-100 w-100 fit-cover rounded-3" src="assets/img/products/3-thumb.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">iPhone</h6>
                            <p class="fs--2 mb-0"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="#!">
                        <div class="d-flex align-items-center">
                          <div class="file-thumbnail me-2"><img class="img-fluid" src="assets/img/icons/zip.png" alt="" /></div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Falcon v1.8.2</h6>
                            <p class="fs--2 mb-0"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">30 Sep at 12:30 PM</span></p>
                          </div>
                        </div>
                      </a>
                      <hr class="bg-200" />
                      <h6 class="dropdown-header fw-medium text-uppercase px-card fs--2 pt-0 pb-2">Members</h6><a class="dropdown-item px-card py-2" href="pages/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l status-online me-2">
                            <img class="rounded-circle" src="assets/img/team/1.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Anna Karinina</h6>
                            <p class="fs--2 mb-0">Technext Limited</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="pages/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="assets/img/team/2.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Antony Hopkins</h6>
                            <p class="fs--2 mb-0">Brain Trust</p>
                          </div>
                        </div>
                      </a>
                      <a class="dropdown-item px-card py-2" href="pages/profile.html">
                        <div class="d-flex align-items-center">
                          <div class="avatar avatar-l me-2">
                            <img class="rounded-circle" src="assets/img/team/3.jpg" alt="" />
                          </div>
                          <div class="flex-1">
                            <h6 class="mb-0 title">Emma Watson</h6>
                            <p class="fs--2 mb-0">Google</p>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item"><a class="nav-link settings-popover" href="#settings-modal" data-bs-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></a></li>
              <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="list-group list-group-flush fw-normal fs--1">
                      <div class="list-group-title border-bottom">NEW</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <div class="avatar-name rounded-circle"><span>AB</span></div>
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                            <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-title border-bottom">EARLIER</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="pages/notifications.html">View all</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="pages/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages/settings.html">Settings</a>
                    <a class="dropdown-item" href="authentication/card/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <nav class="navbar navbar-light navbar-glass navbar-top navbar-expand-lg" style="display: none;" data-move-target="#navbarVerticalNav" data-navbar-top="combo">
            <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse" aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation"><span class="navbar-toggle-icon"><span class="toggle-line"></span></span></button>
            <a class="navbar-brand me-1 me-sm-3" href="index.html">
              <div class="d-flex align-items-center"><img class="me-2" src="assets/img/illustrations/falcon.png" alt="" width="40" /><span class="font-sans-serif">falcon</span></div>
            </a>
            <div class="collapse navbar-collapse scrollbar" id="navbarStandard">
              <ul class="navbar-nav" data-top-nav-dropdowns="data-top-nav-dropdowns">
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dashboard">Dashboard</a>
                  <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="dashboard">
                    <div class="bg-white dark__bg-1000 rounded-3 py-2"><a class="dropdown-item link-600 fw-medium" href="index.html">Default</a><a class="dropdown-item link-600 fw-medium" href="dashboard/dashboard-alt.html">Alternate</a></div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="app">App</a>
                  <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="app">
                    <div class="card navbar-card-app shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-md-5">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="app/calendar.html">Calendar</a><a class="nav-link py-1 link-600 fw-medium" href="app/chat.html">Chat</a><a class="nav-link py-1 link-600 fw-medium" href="app/kanban.html">Kanban</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Social</p><a class="nav-link py-1 link-600 fw-medium" href="social/feed.html">Feed</a><a class="nav-link py-1 link-600 fw-medium" href="social/profile.html">Profile</a><a class="nav-link py-1 link-600 fw-medium" href="social/activity.html">Activity log</a><a class="nav-link py-1 link-600 fw-medium" href="social/notifications.html">Notifications</a><a class="nav-link py-1 link-600 fw-medium" href="social/associations.html">Associations</a><a class="nav-link py-1 link-600 fw-medium" href="social/people.html">Followers</a><a class="nav-link py-1 link-600 fw-medium" href="social/settings.html">Settings</a><a class="nav-link py-1 link-600 fw-medium" href="pages/privacy-policy.html">Privacy policy</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Events</p><a class="nav-link py-1 link-600 fw-medium" href="events/create-an-event.html">Create an event</a><a class="nav-link py-1 link-600 fw-medium" href="events/event-detail.html">Event detail</a><a class="nav-link py-1 link-600 fw-medium" href="events/event-list.html">Event list</a>
                            </div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Email</p><a class="nav-link py-1 link-600 fw-medium" href="email/inbox.html">Inbox</a><a class="nav-link py-1 link-600 fw-medium" href="email/email-detail.html">Email detail</a><a class="nav-link py-1 link-600 fw-medium" href="email/compose.html">Compose</a>
                              <p class="nav-link text-700 mb-0 fw-bold">E-Commerce</p><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/product-list.html">Product list</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/product-grid.html">Product grid</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/product-details.html">Product details</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/order-list.html">Order list</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/order-details.html">Order details</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/customers.html">Customers</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/customer-details.html">Customer details</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/shopping-cart.html">Shopping cart</a><a class="nav-link py-1 link-600 fw-medium" href="e-commerce/checkout.html">Checkout</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="pages">Pages</a>
                  <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="pages">
                    <div class="card navbar-card-pages shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-md-5">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="pages/landing.html">Landing</a><a class="nav-link py-1 link-600 fw-medium" href="pages/pricing-default.html">Pricing default</a><a class="nav-link py-1 link-600 fw-medium" href="pages/pricing-alt.html">Pricing alt</a><a class="nav-link py-1 link-600 fw-medium" href="pages/billing.html">Billing</a><a class="nav-link py-1 link-600 fw-medium" href="pages/invoice.html">Invoice</a><a class="nav-link py-1 link-600 fw-medium" href="pages/invite-people.html">Invite people</a><a class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-basic.html">Faq basic</a><a class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-alt.html">Faq alt</a><a class="nav-link py-1 link-600 fw-medium" href="pages/faq/faq-accordion.html">Faq accordion</a></div>
                          </div>
                          <div class="col-6 col-md-4">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="pages/errors/404.html">404</a><a class="nav-link py-1 link-600 fw-medium" href="pages/errors/500.html">500</a><a class="nav-link py-1 link-600 fw-medium" href="pages/starter.html">Starter</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="authentication">Authentication</a>
                  <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="authentication">
                    <div class="card navbar-card-auth shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Simple</p><a class="nav-link py-1 link-600 fw-medium" href="authentication/basic/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/basic/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/basic/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/basic/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/basic/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/basic/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Card</p><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/card/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Split</p><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/login.html">Login</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/logout.html">Logout</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/register.html">Register</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/forgot-password.html">Forgot password</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/confirm-mail.html">Confirm mail</a><a class="nav-link py-1 link-600 fw-medium" href="authentication/split/lock-screen.html">Lock screen</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="authentication/wizard.html">Wizard</a><a class="nav-link py-1 link-600 fw-medium" href="undefined.html">Modal</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="modules">Modules</a>
                  <div class="dropdown-menu dropdown-menu-card border-0 mt-0" aria-labelledby="modules">
                    <div class="card navbar-card-components shadow-none dark__bg-1000">
                      <div class="card-body scrollbar max-h-dropdown"><img class="img-dropdown" src="assets/img/illustrations/authentication-corner.png" width="130" alt="" />
                        <div class="row">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="components/accordion.html">Accordion</a><a class="nav-link py-1 link-600 fw-medium" href="components/alerts.html">Alerts</a><a class="nav-link py-1 link-600 fw-medium" href="components/avatar.html">Avatar</a><a class="nav-link py-1 link-600 fw-medium" href="components/background.html">Background</a><a class="nav-link py-1 link-600 fw-medium" href="components/badges.html">Badges</a><a class="nav-link py-1 link-600 fw-medium" href="components/breadcrumb.html">Breadcrumbs</a><a class="nav-link py-1 link-600 fw-medium" href="components/buttons.html">Button</a><a class="nav-link py-1 link-600 fw-medium" href="components/cards.html">Card</a><a class="nav-link py-1 link-600 fw-medium" href="components/carousel.html">Carousel</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="components/collapse.html">Collapse</a><a class="nav-link py-1 link-600 fw-medium" href="components/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="components/dropdowns.html">Dropdowns</a><a class="nav-link py-1 link-600 fw-medium" href="components/fancytab.html">Fancytabs</a><a class="nav-link py-1 link-600 fw-medium" href="components/fancyscroll.html">Fancyscroll</a><a class="nav-link py-1 link-600 fw-medium" href="components/hoverbox.html">Hoverbox</a><a class="nav-link py-1 link-600 fw-medium" href="components/list-group.html">List group</a><a class="nav-link py-1 link-600 fw-medium" href="components/modals.html">Modals</a><a class="nav-link py-1 link-600 fw-medium" href="components/navs.html">Navs</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="components/navbar/default.html">Default</a><a class="nav-link py-1 link-600 fw-medium" href="components/navbar/vertical.html">Vertical</a><a class="nav-link py-1 link-600 fw-medium" href="components/navbar/top.html">Top</a><a class="nav-link py-1 link-600 fw-medium" href="components/navbar/combo.html">Combo</a><a class="nav-link py-1 link-600 fw-medium" href="components/navbar/darken-on-scroll.html">Darken on scroll</a><a class="nav-link py-1 link-600 fw-medium" href="components/cookie-notice.html">Cookie notice</a><a class="nav-link py-1 link-600 fw-medium" href="components/page-headers.html">Page headers</a><a class="nav-link py-1 link-600 fw-medium" href="components/pagination.html">Pagination</a><a class="nav-link py-1 link-600 fw-medium" href="components/popovers.html">Popovers</a></div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="components/progress.html">Progress</a><a class="nav-link py-1 link-600 fw-medium" href="components/scrollspy.html">Scrollspy</a><a class="nav-link py-1 link-600 fw-medium" href="components/sidepanel.html">Sidepanel</a><a class="nav-link py-1 link-600 fw-medium" href="components/spinners.html">Spinners</a><a class="nav-link py-1 link-600 fw-medium" href="components/tabs.html">Tabs</a><a class="nav-link py-1 link-600 fw-medium" href="components/toasts.html">Toasts</a><a class="nav-link py-1 link-600 fw-medium" href="components/tooltips.html">Tooltips</a></div>
                          </div>
                        </div>
                        <div class="row mt-2">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Forms</p><a class="nav-link py-1 link-600 fw-medium" href="forms/checks.html">Checks</a><a class="nav-link py-1 link-600 fw-medium" href="forms/file.html">File</a><a class="nav-link py-1 link-600 fw-medium" href="forms/form-control.html">Form control</a><a class="nav-link py-1 link-600 fw-medium" href="forms/input-group.html">Input group</a><a class="nav-link py-1 link-600 fw-medium" href="forms/layout.html">Layout</a><a class="nav-link py-1 link-600 fw-medium" href="forms/overview.html">Overview</a><a class="nav-link py-1 link-600 fw-medium" href="forms/range.html">Range</a><a class="nav-link py-1 link-600 fw-medium" href="forms/select.html">Select</a><a class="nav-link py-1 link-600 fw-medium" href="forms/validation.html">Validation</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">plugins</p><a class="nav-link py-1 link-600 fw-medium" href="plugins/anchor.html">Anchor</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/countup.html">Countup</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/choices.html">Choices</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/date-picker.html">Date picker</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/draggable.html">Draggable</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/dropzone.html">Dropzone</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/emoji-button.html">Emoji button</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/fullcalendar.html">Fullcalendar</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/glightbox.html">Glightbox</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="plugins/progressbar.html">Progressbar</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/inline-player.html">Inline player</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/lottie.html">Lottie</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/typed-text.html">Typed text</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/tinymce.html">Tinymce</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/swiper.html">Swiper</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/rater.html">Rater</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Tables</p><a class="nav-link py-1 link-600 fw-medium" href="components/tables.html">Table</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/list.html">List</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Charts</p><a class="nav-link py-1 link-600 fw-medium" href="plugins/chartjs.html">Chartjs</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/echarts.html">ECharts</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Maps</p><a class="nav-link py-1 link-600 fw-medium" href="plugins/map/google-map.html">Google map</a><a class="nav-link py-1 link-600 fw-medium" href="plugins/map/leaflet-map.html">Leaflet map</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Icons</p><a class="nav-link py-1 link-600 fw-medium" href="plugins/icons.html">Icons</a>
                            </div>
                          </div>
                        </div>
                        <div class="row mt-2">
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column">
                              <p class="nav-link text-700 mb-0 fw-bold">Utilities</p><a class="nav-link py-1 link-600 fw-medium" href="utilities/borders.html">Borders</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/clearfix.html">Clearfix</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/colors.html">Colors</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/display.html">Display</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/embed.html">Embed</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/flex.html">Flex</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/float.html">Float</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/grid.html">Grid</a>
                            </div>
                          </div>
                          <div class="col-6 col-xxl-3">
                            <div class="nav flex-column"><a class="nav-link py-1 link-600 fw-medium" href="utilities/position.html">Position</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/sizing.html">Sizing</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/stretched-link.html">Stretched link</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/text-truncation.html">Text truncation</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/typography.html">Typography</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/vertical-align.html">Vertical align</a><a class="nav-link py-1 link-600 fw-medium" href="utilities/visibility.html">Visibility</a>
                              <p class="nav-link text-700 mb-0 fw-bold">Others</p><a class="nav-link py-1 link-600 fw-medium" href="widgets.html">Widgets</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
            <ul class="navbar-nav navbar-nav-icons ms-auto flex-row align-items-center">
              <li class="nav-item"><a class="nav-link settings-popover" href="#settings-modal" data-bs-toggle="modal"><span class="ripple"></span><span class="fa-spin position-absolute all-0 d-flex flex-center"><span class="icon-spin position-absolute all-0 d-flex flex-center"><svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7369 12.3941L19.1989 12.1065C18.4459 11.7041 18.0843 10.8487 18.0843 9.99495C18.0843 9.14118 18.4459 8.28582 19.1989 7.88336L19.7369 7.59581C19.9474 7.47484 20.0316 7.23291 19.9474 7.03131C19.4842 5.57973 18.6843 4.28943 17.6738 3.20075C17.5053 3.03946 17.2527 2.99914 17.0422 3.12011L16.393 3.46714C15.6883 3.84379 14.8377 3.74529 14.1476 3.3427C14.0988 3.31422 14.0496 3.28621 14.0002 3.25868C13.2568 2.84453 12.7055 2.10629 12.7055 1.25525V0.70081C12.7055 0.499202 12.5371 0.297594 12.2845 0.257272C10.7266 -0.105622 9.16879 -0.0653007 7.69516 0.257272C7.44254 0.297594 7.31623 0.499202 7.31623 0.70081V1.23474C7.31623 2.09575 6.74999 2.8362 5.99824 3.25599C5.95774 3.27861 5.91747 3.30159 5.87744 3.32493C5.15643 3.74527 4.26453 3.85902 3.53534 3.45302L2.93743 3.12011C2.72691 2.99914 2.47429 3.03946 2.30587 3.20075C1.29538 4.28943 0.495411 5.57973 0.0322686 7.03131C-0.051939 7.23291 0.0322686 7.47484 0.242788 7.59581L0.784376 7.8853C1.54166 8.29007 1.92694 9.13627 1.92694 9.99495C1.92694 10.8536 1.54166 11.6998 0.784375 12.1046L0.242788 12.3941C0.0322686 12.515 -0.051939 12.757 0.0322686 12.9586C0.495411 14.4102 1.29538 15.7005 2.30587 16.7891C2.47429 16.9504 2.72691 16.9907 2.93743 16.8698L3.58669 16.5227C4.29133 16.1461 5.14131 16.2457 5.8331 16.6455C5.88713 16.6767 5.94159 16.7074 5.99648 16.7375C6.75162 17.1511 7.31623 17.8941 7.31623 18.7552V19.2891C7.31623 19.4425 7.41373 19.5959 7.55309 19.696C7.64066 19.7589 7.74815 19.7843 7.85406 19.8046C9.35884 20.0925 10.8609 20.0456 12.2845 19.7729C12.5371 19.6923 12.7055 19.4907 12.7055 19.2891V18.7346C12.7055 17.8836 13.2568 17.1454 14.0002 16.7312C14.0496 16.7037 14.0988 16.6757 14.1476 16.6472C14.8377 16.2446 15.6883 16.1461 16.393 16.5227L17.0422 16.8698C17.2527 16.9907 17.5053 16.9504 17.6738 16.7891C18.7264 15.7005 19.4842 14.4102 19.9895 12.9586C20.0316 12.757 19.9474 12.515 19.7369 12.3941ZM10.0109 13.2005C8.1162 13.2005 6.64257 11.7893 6.64257 9.97478C6.64257 8.20063 8.1162 6.74905 10.0109 6.74905C11.8634 6.74905 13.3792 8.20063 13.3792 9.97478C13.3792 11.7893 11.8634 13.2005 10.0109 13.2005Z" fill="#2A7BE4"></path></svg></span></span></a></li>
              <li class="nav-item">
                <a class="nav-link px-0 notification-indicator notification-indicator-warning notification-indicator-fill icon-indicator" href="e-commerce/shopping-cart.html"><span class="fas fa-shopping-cart" data-fa-transform="shrink-7" style="font-size: 33px;"></span><span class="notification-indicator-number">1</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link notification-indicator notification-indicator-primary px-0 icon-indicator" id="navbarDropdownNotification" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-bell" data-fa-transform="shrink-6" style="font-size: 33px;"></span></a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-card" aria-labelledby="navbarDropdownNotification">
                  <div class="card card-notification shadow-none">
                    <div class="card-header">
                      <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                          <h6 class="card-header-title mb-0">Notifications</h6>
                        </div>
                        <div class="col-auto"><a class="card-link fw-normal" href="#">Mark all as read</a></div>
                      </div>
                    </div>
                    <div class="list-group list-group-flush fw-normal fs--1">
                      <div class="list-group-title border-bottom">NEW</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Emma Watson</strong> replied to your comment : "Hello world 😍"</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">💬</span>Just now</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-item">
                        <a class="notification notification-flush notification-unread" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <div class="avatar-name rounded-circle"><span>AB</span></div>
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1"><strong>Albert Brooks</strong> reacted to <strong>Mia Khalifa's</strong> status</p>
                            <span class="notification-time"><span class="me-2 fab fa-gratipay text-danger"></span>9hr</span>
                          </div>
                        </a>
                      </div>
                      <div class="list-group-title border-bottom">EARLIER</div>
                      <div class="list-group-item">
                        <a class="notification notification-flush" href="#!">
                          <div class="notification-avatar">
                            <div class="avatar avatar-2xl me-3">
                              <img class="rounded-circle" src="assets/img/icons/weather-sm.jpg" alt="" />
                            </div>
                          </div>
                          <div class="notification-body">
                            <p class="mb-1">The forecast today shows a low of 20&#8451; in California. See today's weather.</p>
                            <span class="notification-time"><span class="me-2" role="img" aria-label="Emoji">🌤️</span>1d</span>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="card-footer text-center border-top"><a class="card-link d-block" href="pages/notifications.html">View all</a></div>
                  </div>
                </div>
              </li>
              <li class="nav-item dropdown"><a class="nav-link pe-0" id="navbarDropdownUser" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <div class="avatar avatar-xl">
                    <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end py-0" aria-labelledby="navbarDropdownUser">
                  <div class="bg-white dark__bg-1000 rounded-2 py-2">
                    <a class="dropdown-item fw-bold text-warning" href="#!"><span class="fas fa-crown me-1"></span><span>Go Pro</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#!">Set status</a>
                    <a class="dropdown-item" href="pages/profile.html">Profile &amp; account</a>
                    <a class="dropdown-item" href="#!">Feedback</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages/settings.html">Settings</a>
                    <a class="dropdown-item" href="authentication/card/logout.html">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </nav>
          <script>
            var navbarPosition = localStorage.getItem('navbarPosition');
            var navbarVertical = document.querySelector('.navbar-vertical');
            var navbarTopVertical = document.querySelector('.content .navbar-top');
            var navbarTop = document.querySelector('[data-layout] .navbar-top');
            var navbarTopCombo = document.querySelector('.content [data-navbar-top="combo"]');
            if (navbarPosition === 'top') {
              navbarTop.removeAttribute('style');
              navbarTopVertical.remove(navbarTopVertical);
              navbarVertical.remove(navbarVertical);
              navbarTopCombo.remove(navbarTopCombo);
            } else if (navbarPosition === 'combo') {
              navbarVertical.removeAttribute('style');
              navbarTopCombo.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopVertical.remove(navbarTopVertical);
            } else {
              navbarVertical.removeAttribute('style');
              navbarTopVertical.removeAttribute('style');
              navbarTop.remove(navbarTop);
              navbarTopCombo.remove(navbarTopCombo);
            }
          </script>
          <div class="row g-0">
            <div class="col-md-6 col-xxl-3 mb-3 pe-md-2">
              <div class="card h-md-100">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2 d-flex align-items-center">Weekly Sales<span class="ms-1 text-400" data-bs-toggle="tooltip" data-bs-placement="top" title="Calculated according to last week's sales"><span class="far fa-question-circle" data-fa-transform="shrink-1"></span></span></h6>
                </div>
                <div class="card-body d-flex align-items-end">
                  <div class="row flex-grow-1">
                    <div class="col">
                      <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1">$47K</div><span class="badge badge-soft-success rounded-pill fs--2">+3.5%</span>
                    </div>
                    <div class="col-auto ps-0">
                      <div class="echart-bar-weekly-sales h-100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3 mb-3 ps-md-2 pe-xxl-2">
              <div class="card h-md-100">
                <div class="card-header pb-0">
                  <h6 class="mb-0 mt-2">Total Order</h6>
                </div>
                <div class="card-body pt-0">
                  <div class="row h-100">
                    <div class="col align-self-end">
                      <div class="fs-4 fw-normal font-sans-serif text-700 lh-1 mb-1">58.4K</div><span class="badge rounded-pill fs--2 bg-200 text-primary"><span class="fas fa-caret-up me-1"></span>13.6%</span>
                    </div>
                    <div class="col-auto ps-0">
                      <div class="echart-line-total-order h-100"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3 mb-3 pe-md-2 ps-xxl-2">
              <div class="card h-md-100">
                <div class="card-body">
                  <div class="row h-100 justify-content-between g-0">
                    <div class="col-5 col-sm-6 col-xxl pe-2">
                      <h6 class="mt-1">Market Share</h6>
                      <div class="fs--2 mt-3">
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-primary"></span><span class="fw-semi-bold">Samsung</span></div>
                          <div class="d-xxl-none">33%</div>
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-info"></span><span class="fw-semi-bold">Huawei</span></div>
                          <div class="d-xxl-none"> 29%</div>
                        </div>
                        <div class="d-flex flex-between-center mb-1">
                          <div class="d-flex align-items-center"><span class="dot bg-300"></span><span class="fw-semi-bold">Apple</span></div>
                          <div class="d-xxl-none"> 20%</div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto position-relative">
                      <div class="echart-market-share"></div>
                      <div class="position-absolute top-50 start-50 translate-middle text-dark fs-2">26M</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xxl-3 mb-3 ps-md-2">
              <div class="card h-md-100">
                <div class="card-header d-flex flex-between-center pb-0">
                  <h6 class="mb-0">Weather</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-weather-update" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-weather-update"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body pt-2">
                  <div class="row g-0 h-100 align-items-center">
                    <div class="col">
                      <div class="d-flex align-items-center"><img class="me-3" src="assets/img/icons/weather-icon.png" alt="" height="60" />
                        <div>
                          <h6 class="mb-2">New York City</h6>
                          <div class="fs--2 fw-semi-bold">
                            <div class="text-warning">Sunny</div>Precipitation: 50%
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-auto text-center ps-2">
                      <div class="fs-4 fw-normal font-sans-serif text-primary mb-1 lh-1">31&deg;</div>
                      <div class="fs--1 text-800">32&deg; / 25&deg;</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-6 pe-lg-2 mb-3">
              <div class="card h-lg-100 overflow-hidden">
                <div class="card-header bg-light">
                  <div class="row align-items-center">
                    <div class="col">
                      <h6 class="mb-0">Running Projects</h6>
                    </div>
                    <div class="col-auto text-center pe-card"><select class="form-select form-select-sm">
                        <option>Working Time</option>
                        <option>Estimated Time</option>
                        <option>Billable Time</option>
                      </select></div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col ps-card py-1 position-static">
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl me-3">
                          <div class="avatar-name rounded-circle bg-soft-primary text-dark"><span class="fs-0 text-primary">F</span></div>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Falcon</a><span class="badge rounded-pill ms-2 bg-200 text-primary">38%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col py-1">
                      <div class="row flex-end-center g-0">
                        <div class="col-auto pe-2">
                          <div class="fs--1 fw-semi-bold">12:50:00</div>
                        </div>
                        <div class="col-5 pe-card ps-2">
                          <div class="progress bg-200 me-2" style="height: 5px;">
                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 38%" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col ps-card py-1 position-static">
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl me-3">
                          <div class="avatar-name rounded-circle bg-soft-success text-dark"><span class="fs-0 text-success">R</span></div>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Reign</a><span class="badge rounded-pill ms-2 bg-200 text-primary">79%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col py-1">
                      <div class="row flex-end-center g-0">
                        <div class="col-auto pe-2">
                          <div class="fs--1 fw-semi-bold">25:20:00</div>
                        </div>
                        <div class="col-5 pe-card ps-2">
                          <div class="progress bg-200 me-2" style="height: 5px;">
                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 79%" aria-valuenow="79" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col ps-card py-1 position-static">
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl me-3">
                          <div class="avatar-name rounded-circle bg-soft-info text-dark"><span class="fs-0 text-info">B</span></div>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Boots4</a><span class="badge rounded-pill ms-2 bg-200 text-primary">90%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col py-1">
                      <div class="row flex-end-center g-0">
                        <div class="col-auto pe-2">
                          <div class="fs--1 fw-semi-bold">58:20:00</div>
                        </div>
                        <div class="col-5 pe-card ps-2">
                          <div class="progress bg-200 me-2" style="height: 5px;">
                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-0 align-items-center py-2 position-relative border-bottom border-200">
                    <div class="col ps-card py-1 position-static">
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl me-3">
                          <div class="avatar-name rounded-circle bg-soft-warning text-dark"><span class="fs-0 text-warning">R</span></div>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Raven</a><span class="badge rounded-pill ms-2 bg-200 text-primary">40%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col py-1">
                      <div class="row flex-end-center g-0">
                        <div class="col-auto pe-2">
                          <div class="fs--1 fw-semi-bold">21:20:00</div>
                        </div>
                        <div class="col-5 pe-card ps-2">
                          <div class="progress bg-200 me-2" style="height: 5px;">
                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row g-0 align-items-center py-2 position-relative">
                    <div class="col ps-card py-1 position-static">
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-xl me-3">
                          <div class="avatar-name rounded-circle bg-soft-danger text-dark"><span class="fs-0 text-danger">S</span></div>
                        </div>
                        <div class="flex-1">
                          <h6 class="mb-0 d-flex align-items-center"><a class="text-800 stretched-link" href="#!">Slick</a><span class="badge rounded-pill ms-2 bg-200 text-primary">70%</span></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col py-1">
                      <div class="row flex-end-center g-0">
                        <div class="col-auto pe-2">
                          <div class="fs--1 fw-semi-bold">31:20:00</div>
                        </div>
                        <div class="col-5 pe-card ps-2">
                          <div class="progress bg-200 me-2" style="height: 5px;">
                            <div class="progress-bar rounded-pill" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="#!">Show all projects<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
              </div>
            </div>
            <div class="col-lg-6 ps-lg-2 mb-3">
              <div class="card h-lg-100">
                <div class="card-header">
                  <div class="row flex-between-center">
                    <div class="col-auto">
                      <h6 class="mb-0">Total Sales</h6>
                    </div>
                    <div class="col-auto d-flex"><select class="form-select form-select-sm select-month me-2">
                        <option value="0">January</option>
                        <option value="1">February</option>
                        <option value="2">March</option>
                        <option value="3">April</option>
                        <option value="4">May</option>
                        <option value="5">Jun</option>
                        <option value="6">July</option>
                        <option value="7">August</option>
                        <option value="8">September</option>
                        <option value="9">October</option>
                        <option value="10">November</option>
                        <option value="11">December</option>
                      </select>
                      <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-total-saldes" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-total-saldes"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body h-100 pe-0">
                  <div class="echart-line-total-sales h-100" data-echart-responsive="true"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-6 col-xl-7 col-xxl-8 mb-3 pe-lg-2 mb-3">
              <div class="card h-lg-100">
                <div class="card-body d-flex align-items-center">
                  <div class="w-100">
                    <h6 class="mb-3 text-800">Using Storage <strong class="text-dark">1775.06 MB </strong>of 2 GB</h6>
                    <div class="progress mb-3 rounded-3" style="height: 10px;">
                      <div class="progress-bar bg-progress-gradient border-end border-white border-2" role="progressbar" style="width: 43.72%" aria-valuenow="43.72" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-info border-end border-white border-2" role="progressbar" style="width: 18.76%" aria-valuenow="18.76" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-success border-end border-white border-2" role="progressbar" style="width: 9.38%" aria-valuenow="9.38" aria-valuemin="0" aria-valuemax="100"></div>
                      <div class="progress-bar bg-200" role="progressbar" style="width: 28.14%" aria-valuenow="28.14" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                    <div class="row fs--1 fw-semi-bold text-500">
                      <div class="col-auto d-flex align-items-center pe-2"><span class="dot bg-primary"></span><span>Regular</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block ms-1">(895MB)</span></div>
                      <div class="col-auto d-flex align-items-center px-2"><span class="dot bg-info"></span><span>System</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block ms-1">(379MB)</span></div>
                      <div class="col-auto d-flex align-items-center px-2"><span class="dot bg-success"></span><span>Shared</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block ms-1">(192MB)</span></div>
                      <div class="col-auto d-flex align-items-center ps-2"><span class="dot bg-200"></span><span>Free</span><span class="d-none d-md-inline-block d-lg-none d-xxl-inline-block ms-1">(576MB)</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-5 col-xxl-4 mb-3 ps-lg-2">
              <div class="card h-lg-100">
                <div class="bg-holder bg-card" style="background-image:url(assets/img/illustrations/corner-1.png);"></div>
                <!--/.bg-holder-->
                <div class="card-body position-relative">
                  <h5 class="text-warning">Running out of your space?</h5>
                  <p class="fs--1 mb-0">Your storage will be running out soon. Get more<br /> space and powerful productivity features.</p><a class="btn btn-link fs--1 text-warning mt-4 mt-lg-3 ps-0" href="#!">Upgrade storage<span class="fas fa-chevron-right ms-1" data-fa-transform="shrink-4 down-1"></span></a>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-lg-7 col-xl-8 pe-lg-2 mb-3">
              <div class="card h-lg-100 overflow-hidden">
                <div class="card-body p-0">
                  <table class="table table-dashboard mb-0 table-borderless fs--1 border-200">
                    <thead class="bg-light">
                      <tr class="text-900">
                        <th>Best Selling Products</th>
                        <th class="text-end">Revenue ($3189)</th>
                        <th class="pe-card text-end" style="width: 8rem">Revenue (%)</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="border-bottom border-200">
                        <td>
                          <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/12.png" width="60" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link" href="#!">Raven Pro</a></h6>
                              <p class="fw-semi-bold mb-0 text-500">Landing</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end fw-semi-bold">$1311</td>
                        <td class="align-middle pe-card">
                          <div class="d-flex align-items-center">
                            <div class="progress w-100 me-2 rounded-3 bg-200" style="height: 5px;">
                              <div class="progress-bar rounded-pill" role="progressbar" style="width: 41%;" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="fw-semi-bold ms-2">41%</div>
                          </div>
                        </td>
                      </tr>
                      <tr class="border-bottom border-200">
                        <td>
                          <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/10.png" width="60" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link" href="#!">Boots4</a></h6>
                              <p class="fw-semi-bold mb-0 text-500">Portfolio</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end fw-semi-bold">$860</td>
                        <td class="align-middle pe-card">
                          <div class="d-flex align-items-center">
                            <div class="progress w-100 me-2 rounded-3 bg-200" style="height: 5px;">
                              <div class="progress-bar rounded-pill" role="progressbar" style="width: 27%;" aria-valuenow="27" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="fw-semi-bold ms-2">27%</div>
                          </div>
                        </td>
                      </tr>
                      <tr class="border-bottom border-200">
                        <td>
                          <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/11.png" width="60" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link" href="#!">Falcon</a></h6>
                              <p class="fw-semi-bold mb-0 text-500">Admin</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end fw-semi-bold">$539</td>
                        <td class="align-middle pe-card">
                          <div class="d-flex align-items-center">
                            <div class="progress w-100 me-2 rounded-3 bg-200" style="height: 5px;">
                              <div class="progress-bar rounded-pill" role="progressbar" style="width: 17%;" aria-valuenow="17" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="fw-semi-bold ms-2">17%</div>
                          </div>
                        </td>
                      </tr>
                      <tr class="border-bottom border-200">
                        <td>
                          <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/14.png" width="60" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link" href="#!">Slick</a></h6>
                              <p class="fw-semi-bold mb-0 text-500">Builder</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end fw-semi-bold">$245</td>
                        <td class="align-middle pe-card">
                          <div class="d-flex align-items-center">
                            <div class="progress w-100 me-2 rounded-3 bg-200" style="height: 5px;">
                              <div class="progress-bar rounded-pill" role="progressbar" style="width: 8%;" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="fw-semi-bold ms-2">8%</div>
                          </div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center position-relative"><img class="rounded-1 border border-200" src="assets/img/products/13.png" width="60" alt="" />
                            <div class="flex-1 ms-3">
                              <h6 class="mb-1 fw-semi-bold"><a class="text-dark stretched-link" href="#!">Reign Pro</a></h6>
                              <p class="fw-semi-bold mb-0 text-500">Agency</p>
                            </div>
                          </div>
                        </td>
                        <td class="align-middle text-end fw-semi-bold">$234</td>
                        <td class="align-middle pe-card">
                          <div class="d-flex align-items-center">
                            <div class="progress w-100 me-2 rounded-3 bg-200" style="height: 5px;">
                              <div class="progress-bar rounded-pill" role="progressbar" style="width: 7%;" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="fw-semi-bold ms-2">7%</div>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="card-footer bg-light py-2">
                  <div class="row flex-between-center">
                    <div class="col-auto"><select class="form-select form-select-sm">
                        <option>Last 7 days</option>
                        <option>Last Month</option>
                        <option>Last Year</option>
                      </select></div>
                    <div class="col-auto"><a class="btn btn-sm btn-falcon-default" href="#!">View All</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5 col-xl-4 ps-lg-2 mb-3">
              <div class="card h-lg-100">
                <div class="card-header d-flex flex-between-center bg-light py-2">
                  <h6 class="mb-0">Shared Files</h6><a class="py-1 fs--1 font-sans-serif" href="#!">View All</a>
                </div>
                <div class="card-body pb-0">
                  <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-2" src="assets/img/products/5-thumb.png" alt="" /></div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                      <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">apple-smart-watch.png</a></h6>
                      <div class="fs--1"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">Just Now</span></div>
                      <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="assets/img/icons/cloud-download.svg" download="download"><img src="assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                    </div>
                  </div>
                  <hr class="bg-200" />
                  <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-2" src="assets/img/products/3-thumb.png" alt="" /></div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                      <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">iphone.jpg</a></h6>
                      <div class="fs--1"><span class="fw-semi-bold">Antony</span><span class="fw-medium text-600 ms-2">Yesterday at 1:30 PM</span></div>
                      <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="assets/img/icons/cloud-download.svg" download="download"><img src="assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                    </div>
                  </div>
                  <hr class="bg-200" />
                  <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="img-fluid" src="assets/img/icons/zip.png" alt="" /></div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                      <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">Falcon v1.8.2</a></h6>
                      <div class="fs--1"><span class="fw-semi-bold">Jane</span><span class="fw-medium text-600 ms-2">27 Sep at 10:30 AM</span></div>
                      <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="assets/img/icons/cloud-download.svg" download="download"><img src="assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                    </div>
                  </div>
                  <hr class="bg-200" />
                  <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="border h-100 w-100 fit-cover rounded-2" src="assets/img/products/2-thumb.png" alt="" /></div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                      <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">iMac.jpg</a></h6>
                      <div class="fs--1"><span class="fw-semi-bold">Rowen</span><span class="fw-medium text-600 ms-2">23 Sep at 6:10 PM</span></div>
                      <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="assets/img/icons/cloud-download.svg" download="download"><img src="assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                    </div>
                  </div>
                  <hr class="bg-200" />
                  <div class="d-flex mb-3 hover-actions-trigger align-items-center">
                    <div class="file-thumbnail"><img class="img-fluid" src="assets/img/icons/docs.png" alt="" /></div>
                    <div class="ms-3 flex-shrink-1 flex-grow-1">
                      <h6 class="mb-1"><a class="stretched-link text-900 fw-semi-bold" href="#!">functions.php</a></h6>
                      <div class="fs--1"><span class="fw-semi-bold">John</span><span class="fw-medium text-600 ms-2">1 Oct at 4:30 PM</span></div>
                      <div class="hover-actions end-0 top-50 translate-middle-y"><a class="btn btn-light border-300 btn-sm me-1 text-600" data-bs-toggle="tooltip" data-bs-placement="top" title="Download" href="assets/img/icons/cloud-download.svg" download="download"><img src="assets/img/icons/cloud-download.svg" alt="" width="15" /></a><button class="btn btn-light border-300 btn-sm me-1 text-600 shadow-none" type="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><img src="assets/img/icons/edit-alt.svg" alt="" width="15" /></button></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row g-0">
            <div class="col-sm-6 col-xxl-3 pe-sm-2 mb-3 mb-xxl-0">
              <div class="card">
                <div class="card-header d-flex flex-between-center bg-light py-2">
                  <h6 class="mb-0">Active Users</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-active-user" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-active-user"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body py-2">
                  <div class="d-flex align-items-center mb-3">
                    <div class="avatar avatar-2xl status-online">
                      <img class="rounded-circle" src="assets/img/team/1-thumb.png" alt="" />
                    </div>
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="text-900" href="pages/profile.html">Emma Watson</a></h6>
                      <p class="text-500 fs--2 mb-0">Admin</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-3">
                    <div class="avatar avatar-2xl status-online">
                      <img class="rounded-circle" src="assets/img/team/2-thumb.png" alt="" />
                    </div>
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="text-900" href="pages/profile.html">Antony Hopkins</a></h6>
                      <p class="text-500 fs--2 mb-0">Moderator</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-3">
                    <div class="avatar avatar-2xl status-away">
                      <img class="rounded-circle" src="assets/img/team/3-thumb.png" alt="" />
                    </div>
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="text-900" href="pages/profile.html">Anna Karinina</a></h6>
                      <p class="text-500 fs--2 mb-0">Editor</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-3">
                    <div class="avatar avatar-2xl status-offline">
                      <img class="rounded-circle" src="assets/img/team/4-thumb.png" alt="" />
                    </div>
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="text-900" href="pages/profile.html">John Lee</a></h6>
                      <p class="text-500 fs--2 mb-0">Admin</p>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-3">
                    <div class="avatar avatar-2xl status-offline">
                      <img class="rounded-circle" src="assets/img/team/5-thumb.png" alt="" />
                    </div>
                    <div class="flex-1 ms-3">
                      <h6 class="mb-0 fw-semi-bold"><a class="text-900" href="pages/profile.html">Rowen Atkinson</a></h6>
                      <p class="text-500 fs--2 mb-0">Editor</p>
                    </div>
                  </div>
                </div>
                <div class="card-footer bg-light p-0"><a class="btn btn-sm btn-link d-block w-100 py-2" href="pages/people.html">All active users<span class="fas fa-chevron-right ms-1 fs--2"></span></a></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3 ps-sm-2 order-xxl-1 mb-3 mb-xxl-0">
              <div class="card h-100">
                <div class="card-header bg-light d-flex flex-between-center py-2">
                  <h6 class="mb-0">Bandwidth Saved</h6>
                  <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-bandwidth-saved" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                    <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-bandwidth-saved"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                      <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                    </div>
                  </div>
                </div>
                <div class="card-body d-flex flex-center flex-column">
                  <div class="progress-circle progress-circle-dashboard" data-options='{"color":"url(#gradient)","progress":93,"strokeWidth":5,"trailWidth":5}'></div>
                  <div class="text-center mt-4">
                    <h6 class="fs-0 mb-1"><span class="fas fa-check text-success me-1" data-fa-transform="shrink-2"></span>35.75 GB saved</h6>
                    <p class="fs--1 mb-0">38.44 GB total bandwidth</p>
                  </div>
                </div>
                <div class="card-footer bg-light py-2">
                  <div class="row flex-between-center">
                    <div class="col-auto"><select class="form-select form-select-sm">
                        <option>Last 6 Months</option>
                        <option>Last Year</option>
                        <option>Last 2 Year</option>
                      </select></div>
                    <div class="col-auto"><a class="fs--1" href="#!">Help</a></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-6 px-xxl-2">
              <div class="card h-100">
                <div class="card-header bg-light py-2">
                  <div class="row flex-between-center">
                    <div class="col-auto">
                      <h6 class="mb-0">Top Products</h6>
                    </div>
                    <div class="col-auto d-flex"><a class="btn btn-link btn-sm me-2" href="#!">View Details</a>
                      <div class="dropdown font-sans-serif btn-reveal-trigger"><button class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none" type="button" id="dropdown-top-products" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                        <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="dropdown-top-products"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                          <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body h-100">
                  <div class="echart-bar-top-products h-100" data-echart-responsive="true"></div>
                </div>
              </div>
            </div>
          </div>
          <footer>
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2021 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.0.0-beta1</p>
              </div>
            </div>
          </footer>
        </div>
        <div class="modal fade modal-fixed-right modal-theme overflow-hidden" id="settings-modal" tabindex="-1" role="dialog" aria-labelledby="settings-modal-label" aria-hidden="true" data-options='{"autoShow":true,"autoShowDelay":3000,"showOnce":true}'>
          <div class="modal-dialog modal-dialog-vertical" role="document">
            <div class="modal-content border-0 vh-100 scrollbar">
              <div class="modal-header modal-header-settings bg-shape">
                <div class="z-index-1 py-1 light">
                  <h5 class="text-white" id="settings-modal-label"> <span class="fas fa-palette me-2 fs-0"></span>Settings</h5>
                  <p class="mb-0 fs--1 text-white opacity-75"> Set your own customized style</p>
                </div><button class="btn-close btn-close-white z-index-1 mt-0" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body px-card" id="themeController">
                <h5 class="fs-0">Color Scheme</h5>
                <p class="fs--1">Choose the perfect color mode for your app. </p>
                <div class="btn-group d-block w-100 btn-group-navbar-style">
                  <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="themeSwitcherLight" name="theme-color" type="radio" value="light" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherLight"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/falcon-mode-default.jpg" alt=""/></span><span class="label-text">Light</span></label></div>
                    <div class="col-6"><input class="btn-check" id="themeSwitcherDark" name="theme-color" type="radio" value="dark" data-theme-control="theme" /><label class="btn d-inline-block btn-navbar-style fs--1" for="themeSwitcherDark"> <span class="hover-overlay mb-2 rounded d-block"><img class="img-fluid img-prototype mb-0" src="assets/img/generic/falcon-mode-dark.jpg" alt=""/></span><span class="label-text"> Dark</span></label></div>
                  </div>
                </div>
                <hr />
                <div class="d-flex justify-content-between">
                  <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/left-arrow-from-left.svg" width="20" alt="" />
                    <div class="flex-1">
                      <h5 class="fs-0">RTL Mode</h5>
                      <p class="fs--1 mb-0">Switch your language direction </p><a class="fs--1" href="documentation/RTL.html">RTL Documentation</a>
                    </div>
                  </div>
                  <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-rtl" type="checkbox" data-theme-control="isRTL" /></div>
                </div>
                <hr />
                <div class="d-flex justify-content-between">
                  <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/arrows-h.svg" width="20" alt="" />
                    <div class="flex-1">
                      <h5 class="fs-0">Fluid Layout</h5>
                      <p class="fs--1 mb-0">Toggle container layout system </p><a class="fs--1" href="documentation/fluid-layout.html">Fluid Documentation</a>
                    </div>
                  </div>
                  <div class="form-check form-switch"><input class="form-check-input ms-0" id="mode-fluid" type="checkbox" data-theme-control="isFluid" /></div>
                </div>
                <hr />
                <div class="d-flex align-items-start"><img class="me-2" src="assets/img/icons/paragraph.svg" width="20" alt="" />
                  <div class="flex-1">
                    <h5 class="fs-0 d-flex align-items-center">Navigation Position </h5>
                    <p class="fs--1 mb-2">Select a suitable navigation system for your web application </p>
                    <div>
                      <div class="form-check form-check-inline"><input class="form-check-input" id="option-navbar-vertical" type="radio" name="navbar" value="vertical" data-theme-control="navbarPosition" /><label class="form-check-label" for="option-navbar-vertical">Vertical</label></div>
                      <div class="form-check form-check-inline"><input class="form-check-input" id="option-navbar-top" type="radio" name="navbar" value="top" data-theme-control="navbarPosition" /><label class="form-check-label" for="option-navbar-top">Top</label></div>
                      <div class="form-check form-check-inline me-0"><input class="form-check-input" id="option-navbar-combo" type="radio" name="navbar" value="combo" data-theme-control="navbarPosition" /><label class="form-check-label" for="option-navbar-combo">Combo</label></div>
                    </div>
                  </div>
                </div>
                <hr />
                <h5 class="fs-0 d-flex align-items-center">Vertical Navbar Style</h5>
                <p class="fs--1 mb-0">Switch between styles for your vertical navbar </p>
                <p> <a class="fs--1" href="components/navbar/vertical.html#navbar-styles">See Documentation</a></p>
                <div class="btn-group d-block w-100 btn-group-navbar-style">
                  <div class="row gx-2">
                    <div class="col-6"><input class="btn-check" id="navbar-style-transparent" type="radio" name="navbarStyle" value="transparent" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-transparent"> <img class="img-fluid img-prototype" src="assets/img/generic/default.png" alt="" /><span class="label-text"> Transparent</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbar-style-inverted" type="radio" name="navbarStyle" value="inverted" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-inverted"> <img class="img-fluid img-prototype" src="assets/img/generic/inverted.png" alt="" /><span class="label-text"> Inverted</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbar-style-card" type="radio" name="navbarStyle" value="card" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-card"> <img class="img-fluid img-prototype" src="assets/img/generic/card.png" alt="" /><span class="label-text"> Card</span></label></div>
                    <div class="col-6"><input class="btn-check" id="navbar-style-vibrant" type="radio" name="navbarStyle" value="vibrant" data-theme-control="navbarStyle" /><label class="btn d-block w-100 btn-navbar-style fs--1" for="navbar-style-vibrant"> <img class="img-fluid img-prototype" src="assets/img/generic/vibrant.png" alt="" /><span class="label-text"> Vibrant</span></label></div>
                  </div>
                </div>
                <div class="text-center mt-5"><img class="mb-4" src="assets/img/illustrations/settings.png" alt="" width="120" />
                  <h5>Like What You See?</h5>
                  <p class="fs--1">Get Falcon now and create beautiful dashboards with hundreds of widgets.</p><a class="btn btn-primary" href="https://themes.getbootstrap.com/product/falcon-admin-dashboard-webapp-template/" target="_blank">Purchase</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-index-1 light">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                  <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                </div><button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="mb-3"><label class="form-label" for="modal-auth-name">Name</label><input class="form-control" type="text" id="modal-auth-name" /></div>
                  <div class="mb-3"><label class="form-label" for="modal-auth-email">Email address</label><input class="form-control" type="email" id="modal-auth-email" /></div>
                  <div class="row gx-3">
                    <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-password">Password</label><input class="form-control" type="password" id="modal-auth-password" /></div>
                    <div class="mb-3 col-sm-6"><label class="form-label" for="modal-auth-confirm-password">Confirm Password</label><input class="form-control" type="password" id="modal-auth-confirm-password" /></div>
                  </div>
                  <div class="form-check"><input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" /><label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label></div>
                  <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button></div>
                </form>
                <div class="position-relative mt-5">
                  <hr class="bg-300" />
                  <div class="divider-content-center">or register with</div>
                </div>
                <div class="row g-2 mt-2">
                  <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/echarts/echarts.min.js"></script>
    <script src="vendors/progressbar/progressbar.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
  </body>

</html>