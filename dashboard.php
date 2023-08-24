<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="cleartax">
    <meta name="theme-color" content="#8AC8D6">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
    <title>Login-clearstarttax</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Font-icon css-->
    <!-- favicon -->
    <link href="img/c-favicon.png" rel="icon">
    <link rel="stylesheet" type="text/css"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <header class="app-header"><a class="app-header__logo" href="index.html"><img class="dashboard-brand mt-4" src="img/cleartax-brand-logo.png"></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
        <li class="app-search">
          <input class="app-search__input" type="search" placeholder="Search">
          <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Show notifications"><i class="fa fa-bell-o fa-lg"></i></a>
          <ul class="app-notification dropdown-menu dropdown-menu-right">
            <li class="app-notification__title">You have 4 new notifications.</li>
            <div class="app-notification__content">
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Lisa sent you a mail</p>
                    <p class="app-notification__meta">2 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Mail server not working</p>
                    <p class="app-notification__meta">5 min ago</p>
                  </div></a></li>
              <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                  <div>
                    <p class="app-notification__message">Transaction complete</p>
                    <p class="app-notification__meta">2 days ago</p>
                  </div></a></li>
              <div class="app-notification__content">
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-primary"></i><i class="fa fa-envelope fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Lisa sent you a mail</p>
                      <p class="app-notification__meta">2 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-danger"></i><i class="fa fa-hdd-o fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Mail server not working</p>
                      <p class="app-notification__meta">5 min ago</p>
                    </div></a></li>
                <li><a class="app-notification__item" href="javascript:;"><span class="app-notification__icon"><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x text-success"></i><i class="fa fa-money fa-stack-1x fa-inverse"></i></span></span>
                    <div>
                      <p class="app-notification__message">Transaction complete</p>
                      <p class="app-notification__meta">2 days ago</p>
                    </div></a></li>
              </div>
            </div>
            <li class="app-notification__footer"><a href="#">See all notifications.</a></li>
          </ul>
        </li>
        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
          <ul class="dropdown-menu settings-menu dropdown-menu-right">
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-cog fa-lg"></i> Settings</a></li>
            <li><a class="dropdown-item" href="page-user.html"><i class="fa fa-user fa-lg"></i> Profile</a></li>
            <li><a class="dropdown-item" href="page-login.html"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="img/user-img.png" alt="User Image">
        <div>
          <p class="app-sidebar__user-name"><strong>Christian Ha</strong> </p>
          <p class="app-sidebar__user-designation mt-2">Case ID : <a href="#" class="case-id-data">857881</a></p>
          <p class="app-sidebar__user-designation mt-2">Status : <a href="#" class="case-id-data">More Info</a></p>
        </div>
      </div>
      <ul class="app-menu">
        <li><a class="app-menu__item" href="dashboard.html"><svg class="app-menu__icon mx-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-width="1.5"><path d="M5.5 15.5c0-.943 0-1.414.293-1.707c.293-.293.764-.293 1.707-.293h1c.943 0 1.414 0 1.707.293c.293.293.293.764.293 1.707v1c0 .943 0 1.414-.293 1.707c-.293.293-.764.293-1.707.293c-1.414 0-2.121 0-2.56-.44c-.44-.439-.44-1.146-.44-2.56Zm0-7c0-1.414 0-2.121.44-2.56c.439-.44 1.146-.44 2.56-.44c.943 0 1.414 0 1.707.293c.293.293.293.764.293 1.707v1c0 .943 0 1.414-.293 1.707c-.293.293-.764.293-1.707.293h-1c-.943 0-1.414 0-1.707-.293C5.5 9.914 5.5 9.443 5.5 8.5Zm8 7c0-.943 0-1.414.293-1.707c.293-.293.764-.293 1.707-.293h1c.943 0 1.414 0 1.707.293c.293.293.293.764.293 1.707c0 1.414 0 2.121-.44 2.56c-.439.44-1.146.44-2.56.44c-.943 0-1.414 0-1.707-.293c-.293-.293-.293-.764-.293-1.707v-1Zm0-8c0-.943 0-1.414.293-1.707c.293-.293.764-.293 1.707-.293c1.414 0 2.121 0 2.56.44c.44.439.44 1.146.44 2.56c0 .943 0 1.414-.293 1.707c-.293.293-.764.293-1.707.293h-1c-.943 0-1.414 0-1.707-.293c-.293-.293-.293-.764-.293-1.707v-1Z"/><path stroke-linecap="round" d="M22 14c0 3.771 0 5.657-1.172 6.828C19.657 22 17.771 22 14 22m-4 0c-3.771 0-5.657 0-6.828-1.172C2 19.657 2 17.771 2 14m8-12C6.229 2 4.343 2 3.172 3.172C2 4.343 2 6.229 2 10m12-8c3.771 0 5.657 0 6.828 1.172C22 4.343 22 6.229 22 10"/></g></svg><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="dashboard.html"><svg class="app-menu__icon mx-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-width="1.5"><path stroke-linecap="round" d="M13 5c2.828 0 4.243 0 5.121.879C19 6.757 19 8.172 19 11c0 2.828 0 4.243-.879 5.121C17.243 17 15.828 17 13 17H8c-2.828 0-4.243 0-5.121-.879C2 15.243 2 13.828 2 11c0-2.828 0-4.243.879-5.121C3.757 5 5.172 5 8 5h1m7 15h-5c-2.828 0-4.242 0-5.121-.879c-.49-.49-.707-1.146-.803-2.121m16.046 2.121c.878-.878.878-2.293.878-5.12c0-2.83 0-4.244-.878-5.122c-.49-.49-1.147-.707-2.122-.803"/><path d="M13 11a2.5 2.5 0 1 1-5 0a2.5 2.5 0 0 1 5 0Z"/><path stroke-linecap="round" d="M16 13V9M5 13V9"/></g></svg><span class="app-menu__label">Payments</span></a></li>
        <li><a class="app-menu__item" href="dashboard.html"><svg class="app-menu__icon mx-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-width="1.5"><path d="m18.18 8.04l.463-.464a1.966 1.966 0 1 1 2.781 2.78l-.463.464M18.18 8.04s.058.984.927 1.853s1.854.927 1.854.927M18.18 8.04l-4.26 4.26c-.29.288-.434.433-.558.592c-.146.188-.271.39-.374.606c-.087.182-.151.375-.28.762l-.413 1.24l-.134.401m8.8-5.081l-4.26 4.26c-.29.29-.434.434-.593.558c-.188.146-.39.271-.606.374c-.182.087-.375.151-.762.28l-1.24.413l-.401.134m0 0l-.401.134a.53.53 0 0 1-.67-.67l.133-.402m.938.938l-.938-.938"/><path stroke-linecap="round" d="M8 13h2.5M8 9h6.5M8 17h1.5M3 14v-4c0-3.771 0-5.657 1.172-6.828C5.343 2 7.229 2 11 2h2c3.771 0 5.657 0 6.828 1.172M21 14c0 3.771 0 5.657-1.172 6.828m-15.656 0C5.343 22 7.229 22 11 22h2c3.771 0 5.657 0 6.828-1.172m0 0c.944-.943 1.127-2.348 1.163-4.828"/></g></svg><span class="app-menu__label">Documents</span></a></li>
        <li><a class="app-menu__item" href="dashboard.html"><svg class="app-menu__icon mx-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none"><path stroke="white" stroke-linecap="round" stroke-width="1.5" d="M14 22h-4c-3.771 0-5.657 0-6.828-1.172C2 19.657 2 17.771 2 14v-2c0-3.771 0-5.657 1.172-6.828C4.343 4 6.229 4 10 4h4c3.771 0 5.657 0 6.828 1.172C22 6.343 22 8.229 22 12v2c0 3.771 0 5.657-1.172 6.828c-.653.654-1.528.943-2.828 1.07M7 4V2.5M17 4V2.5M21.5 9H10.75M2 9h3.875"/><path fill="white" d="M18 17a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm-5 4a1 1 0 1 1-2 0a1 1 0 0 1 2 0Zm0-4a1 1 0 1 1-2 0a1 1 0 0 1 2 0Z"/></g></svg><span class="app-menu__label">Appointment</span></a></li>
        <li><a class="app-menu__item" href="dashboard.html"><svg class="app-menu__icon mx-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none"><path stroke="white" stroke-linecap="round" stroke-width="1.5" d="M10.125 8.875a1.875 1.875 0 1 1 2.828 1.615c-.475.281-.953.708-.953 1.26V13"/><circle cx="12" cy="16" r="1" fill="white"/><path stroke="white" stroke-linecap="round" stroke-width="1.5" d="M22 12c0 4.714 0 7.071-1.465 8.535C19.072 22 16.714 22 12 22s-7.071 0-8.536-1.465C2 19.072 2 16.714 2 12s0-7.071 1.464-8.536C4.93 2 7.286 2 12 2c4.714 0 7.071 0 8.535 1.464c.974.974 1.3 2.343 1.41 4.536"/></g></svg><span class="app-menu__label">FAQ</span></a></li>
        <li><a class="app-menu__item" href="dashboard.html"><svg class="app-menu__icon mx-3" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none"><path fill="white" d="m13.087 21.388l.645.382l-.645-.382Zm.542-.916l-.646-.382l.646.382Zm-3.258 0l-.645.382l.645-.382Zm.542.916l.646-.382l-.646.382ZM1.25 10.5a.75.75 0 0 0 1.5 0h-1.5Zm1.824 5.126a.75.75 0 0 0-1.386.574l1.386-.574Zm4.716 3.365l-.013.75l.013-.75Zm-2.703-.372l-.287.693l.287-.693Zm16.532-2.706l.693.287l-.693-.287Zm-5.409 3.078l-.012-.75l.012.75Zm2.703-.372l.287.693l-.287-.693Zm.7-15.882l-.392.64l.392-.64Zm1.65 1.65l.64-.391l-.64.392ZM4.388 2.738l-.392-.64l.392.64Zm-1.651 1.65l-.64-.391l.64.392ZM9.403 19.21l.377-.649l-.377.649Zm4.33 2.56l.541-.916l-1.29-.764l-.543.916l1.291.764Zm-4.007-.916l.542.916l1.29-.764l-.541-.916l-1.291.764Zm2.715.152a.52.52 0 0 1-.882 0l-1.291.764c.773 1.307 2.69 1.307 3.464 0l-1.29-.764ZM10.5 2.75h3v-1.5h-3v1.5Zm10.75 7.75v1h1.5v-1h-1.5ZM7.803 18.242c-1.256-.022-1.914-.102-2.43-.316L4.8 19.313c.805.334 1.721.408 2.977.43l.026-1.5ZM1.688 16.2A5.75 5.75 0 0 0 4.8 19.312l.574-1.386a4.25 4.25 0 0 1-2.3-2.3l-1.386.574Zm19.562-4.7c0 1.175 0 2.019-.046 2.685c-.045.659-.131 1.089-.277 1.441l1.385.574c.235-.566.338-1.178.389-1.913c.05-.729.049-1.632.049-2.787h-1.5Zm-5.027 8.241c1.256-.021 2.172-.095 2.977-.429l-.574-1.386c-.515.214-1.173.294-2.428.316l.025 1.5Zm4.704-4.115a4.25 4.25 0 0 1-2.3 2.3l.573 1.386a5.75 5.75 0 0 0 3.112-3.112l-1.386-.574ZM13.5 2.75c1.651 0 2.837 0 3.762.089c.914.087 1.495.253 1.959.537l.783-1.279c-.739-.452-1.577-.654-2.6-.752c-1.012-.096-2.282-.095-3.904-.095v1.5Zm9.25 7.75c0-1.622 0-2.891-.096-3.904c-.097-1.023-.299-1.862-.751-2.6l-1.28.783c.285.464.451 1.045.538 1.96c.088.924.089 2.11.089 3.761h1.5Zm-3.53-7.124a4.25 4.25 0 0 1 1.404 1.403l1.279-.783a5.75 5.75 0 0 0-1.899-1.899l-.783 1.28ZM10.5 1.25c-1.622 0-2.891 0-3.904.095c-1.023.098-1.862.3-2.6.752l.783 1.28c.464-.285 1.045-.451 1.96-.538c.924-.088 2.11-.089 3.761-.089v-1.5ZM2.75 10.5c0-1.651 0-2.837.089-3.762c.087-.914.253-1.495.537-1.959l-1.279-.783c-.452.738-.654 1.577-.752 2.6C1.25 7.61 1.25 8.878 1.25 10.5h1.5Zm1.246-8.403a5.75 5.75 0 0 0-1.899 1.899l1.28.783a4.25 4.25 0 0 1 1.402-1.403l-.783-1.279Zm7.02 17.993c-.202-.343-.38-.646-.554-.884a2.229 2.229 0 0 0-.682-.645l-.754 1.297c.047.028.112.078.224.232c.121.166.258.396.476.764l1.29-.764Zm-3.24-.349c.44.008.718.014.93.037c.198.022.275.054.32.08l.754-1.297a2.244 2.244 0 0 0-.909-.274c-.298-.033-.657-.038-1.069-.045l-.025 1.5Zm6.498 1.113c.218-.367.355-.598.476-.764c.112-.154.177-.204.224-.232l-.754-1.297c-.29.17-.5.395-.682.645c-.173.238-.352.54-.555.884l1.291.764Zm1.924-2.612c-.412.007-.771.012-1.069.045c-.311.035-.616.104-.909.274l.754 1.297c.045-.026.122-.058.32-.08c.212-.023.49-.03.93-.037l-.026-1.5Z"/><path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 11h.009m3.982 0H12m3.991 0H16"/></g></svg><span class="app-menu__label">Get In Touch</span></a></li>
        <!-- signout btn -->
        <li><a class="app-menu__item mt-4 mx-3" href="dashboard.html"><svg class="app-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="white" stroke-linecap="round" stroke-width="1.5"><path stroke-linejoin="round" d="M15 12H2m0 0l3.5-3M2 12l3.5 3"/><path d="M9.002 7c.012-2.175.109-3.353.877-4.121C10.758 2 12.172 2 15 2h1c2.829 0 4.243 0 5.122.879C22 3.757 22 5.172 22 8v8c0 2.828 0 4.243-.878 5.121c-.769.769-1.947.865-4.122.877M9.002 17c.012 2.175.109 3.353.877 4.121c.641.642 1.568.815 3.121.862"/></g></svg><span class="app-menu__label">Sign Out</span></a></li>

        <!-- <li class="treeview"><a class="app-menu__item" href="#" data-toggle="treeview"><i class="app-menu__icon fa fa-laptop"></i><span class="app-menu__label">UI Elements</span><i class="treeview-indicator fa fa-angle-right"></i></a>
          <ul class="treeview-menu">
            <li><a class="treeview-item" href="bootstrap-components.html"><i class="icon fa fa-circle-o"></i> Bootstrap Elements</a></li>
            <li><a class="treeview-item" href="https://fontawesome.com/v4.7.0/icons/" target="_blank" rel="noopener"><i class="icon fa fa-circle-o"></i> Font Icons</a></li>
            <li><a class="treeview-item" href="ui-cards.html"><i class="icon fa fa-circle-o"></i> Cards</a></li>
            <li><a class="treeview-item" href="widgets.html"><i class="icon fa fa-circle-o"></i> Widgets</a></li>
          </ul>
        </li> -->
      </ul>
    </aside>
   <!-- main content start from here -->
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Blank Page</h1>
          <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="tile-body">Create a beautiful dashboard</div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
  </body>
</html>