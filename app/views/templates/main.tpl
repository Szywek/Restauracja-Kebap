<!DOCTYPE html>
<html lang="pl">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>{$page_title}</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{$conf->app_root}/assets/css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="{$conf->app_root}/assets/css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="{$conf->app_root}/assets/css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="{$conf->app_root}/assets/css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>

    <div class="wrapper">
    <!-- end loader -->
 {block name=menu} Domyślna zawartość menu... {/block}
  
 {block name=content} Domyślna zawartość strony... {/block}

 {block name=footer} 
    <!-- footer -->
    <footer>
        <div class="footer">
           
            <div class="copyright">
                <div class="container">
                    <p>© 2019 All Rights Reserved. Design by<a href="https://html.design/"> Free Html Templates</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    </div>
    </div>
    {/block}
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
    <script src="{$conf->app_url}/assets/js/popper.min.js"></script>
    <script src="{$conf->app_url}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{$conf->app_url}/assets/js/owl.carousel.min.js"></script>
    <script src="{$conf->app_url}/assets/js/custom.js"></script>
     <script src="{$conf->app_url}/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    
     <script src="{$conf->app_url}/assets/js/jquery-3.0.0.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>

     
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 5
               }
             }
           })
         })
      </script>

</body>
</html>