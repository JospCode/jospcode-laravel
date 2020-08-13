<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- web fonts -->
        <link href="//fonts.googleapis.com/css?family=Nunito:400,600,700,800,900&display=swap" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
        <!-- //web fonts -->

        <link rel="shortcut icon" type="image/x-png" href="../images/logo1.png">
        
        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>
    <body>

        <main>
            @yield('content')
        </main>

        <!-- grids block 5 -->
        <section class="footer-29-main" id="footer">
            <div class="footer-29 text-center">
                <div class="container">
                
                <div class="main-social-footer-29">
                    <a href="https://www.facebook.com/jonatas.pereira.355" class="facebook" target="_blank"><span class="fa fa-facebook"></span></a>
                    <a href="https://www.instagram.com/josp.techno/?hl=pt-br" class="instagram" target="_blank"><span class="fa fa-instagram"></span></a>
                    <a href="https://www.linkedin.com/in/jonatas-pereira-79a871180" class="linkedin" target="_blank"><span class="fa fa-linkedin"></span></a>
                </div>
                    <div class="bottom-copies text-center">
                        <p class="copy-footer-29">© 2020 Meu Site. Todos os direitos reservados | Designed by JospCode >.</p>
                        
                    </div>
                </div>
            </div>
            <!-- move top -->
            <button onclick="topFunction()" id="movetop" title="Go to top">
                <span class="fa fa-angle-up"></span>
            </button>
            <script>
                // When the user scrolls down 20px from the top of the document, show the button
                window.onscroll = function () {
                    scrollFunction()
                };
        
                function scrollFunction() {
                    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                        document.getElementById("movetop").style.display = "block";
                    } else {
                        document.getElementById("movetop").style.display = "none";
                    }
                }
        
                // When the user clicks on the button, scroll to the top of the document
                function topFunction() {
                    document.body.scrollTop = 0;
                    document.documentElement.scrollTop = 0;
                }
            </script>
            <!-- /move top -->
        </section>
        <!-- // grids block 5 -->

        <script src="js/jquery-3.3.1.min.js"></script>
        <!-- //footer-28 block -->

        <script>
            $(function () {
            $('.navbar-toggler').click(function () {
                $('body').toggleClass('noscroll');
            })
            });
        </script>

        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
        </script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
        </script>

        <!-- Smooth scrolling -->

    </body>

</html>