
    <footer>
      <div class="container upper-footer">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <img src="img/logo-footer.png" class="img-fluid footer-img">
            <p>Govt. Regd No 44785/065/066</p>
            <p>PAN NO. 478451014 </p>
            <p>TOURISM REGD NO. 1589/554</p>
            <p>ADDRESS. 1589/554</p>
          </div>
          <div class="col-lg-4 col-md-4 footerLocation">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="" class=""><i class="fas fa-chevron-right"></i><span>Home</span></a></li>
              <li><a href="" class=""><i class="fas fa-chevron-right"></i><span>About Us</span></a></li>
              <li><a href="" class=""><i class="fas fa-chevron-right"></i><span>Contact us</span></a></li>
              <li><a href="" class=""><i class="fas fa-chevron-right"></i><span>Privacy Policy</span></a></li>
              <li><a href="" class=""><i class="fas fa-chevron-right"></i><span>Gallery</span></a></li>

            </ul>
          </div>
          <div class="col-lg-4 col-md-4 contact-us">
            <h4>Contact Us</h4>
            <ul>
              <li><a href=""> <i class="fas fa-envelope"></i><span>Lorem ipsum dolor sit.</span></a></li>
              <li> <a href=""><i class="fas fa-phone fa-rotate-90"></i><span>Lorem ipsum dolor sit.</span></a></li>
              <li><a href=""><i class="fas fa-map-marker-alt"></i><span>Lorem ipsum dolor sit.</span></a></li>
            </ul>
            <ul class="social-bar">
              <li><a href=""><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href=""><i class="fab fa-instagram"></i></a></li>
              <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <hr>
      <p class="lower-footer text-center">2019 WELCOME HIMALAYAN HERO (P) LTD. ALL RIGHTS RESERVED.</p>

    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>

    <script src='js/lightBox-ba9e08126f.js'></script><script>jQuery(document).ready(function (e) {
        e.DNLightBox({speed: 500})
      });</script>
      <script src="js/script2.js"></script>


    <script type="text/javascript">
      $.fn.extend({
        print: function () {
          var frameName = 'printIframe';
          var doc = window.frames[frameName];
          if (!doc) {
            $('<iframe>').hide().attr('name', frameName).appendTo(document.body);
            doc = window.frames[frameName];
          }
          doc.document.body.innerHTML = this.html();
          doc.window.print();
          return this;
        }
      });

      $(document).ready(function () {

        $("#print").click(function () {
          $("#printable").print();
        })
      })
    </script>

    <script>
      $(".as").hide();
      $(".fff").click(function () {
        $(".as").slideDown("slow");
      });

      $(".ddd").click(function () {
        $(".as").slideUp("slow");
      });

      $(".iti-head").click(function () {
        var cname = $(this).attr('id');
        $('#' + cname + '-details').slideToggle("slow");
      })
    </script>

    <script>
      $(document).ready(function () {
        $("#single-nav").hide();

        if ($(window).scrollTop() > ($("#header").outerHeight() + $(".bannerSlider").outerHeight()+$(".find-trip").outerHeight())) {
          $("#single-nav").show();
        }

        $(window).scroll(function () {
          if ($(this).scrollTop() > ($("#header").outerHeight() + $(".bannerSlider").outerHeight()+$(".find-trip").outerHeight())) {
            $('#single-nav').fadeIn();
          } else {
            $('#single-nav').fadeOut();
          }
        });


        $(document).on("scroll", onScroll);


        $("#single-nav a").click(function (e) {
          e.preventDefault();
          history.pushState({}, "", this.href);
          //$(document).off("scroll");

          /*$('#single-nav a').each(function() {
           $(this).removeClass('active');
           })
           $(this).addClass('active');*/



          var target = this.hash,
                  menu = target;
          $target = $(target);
          var topOffset = 0; //#top should default to 0 so no need to calculate the difference between top and top :)
          if (target != "#top") { //If the 
            var topOffset = $(target).offset().top;
          }
          $('html, body').stop().animate({
            'scrollTop': topOffset
          }, 800, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
          });
        });
        
      });
      
      function onScroll(event) {
        var scrollPos = $(document).scrollTop();
        console.log("Document Offset : " + $(document).scrollTop());
        //console.log("Document Position : " + $("#overview").position().top);
        //console.log("Overview Offset : " + $('#overview').offset().top);
        $('#single-nav a').each(function () {
          var currLink = $(this);
          var refElement = $(currLink.attr("href"));
          
          if (refElement.offset().top-10 <= scrollPos && refElement.offset().top + refElement.height() > scrollPos) {
            $('#single-nav ul li a').removeClass("active");
            currLink.addClass("active");
          } else {
            currLink.removeClass("active");
          }
        });
      }

    </script>

    <script>
      var btn = document.getElementById("single-nav");

      btn.disabled = !(location.hash || location.href.slice(-1) == "#");
      btn.onclick = removeHash;

      window.onhashchange = function () {
        btn.disabled = !(location.hash || location.href.slice(-1) == "#");
      }

      function removeHash() {
        window.history.pushState("", document.title, window.location.pathname);
        btn.disabled = !(location.hash || location.href.slice(-1) == "#");
      }
    </script>