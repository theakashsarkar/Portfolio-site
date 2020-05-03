<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Eccentric portfolio - personal website template | Home : W3layouts</title>

  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:400,700&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('/') }}/frontEnd/css/style-starter.css">

</head>

<body>
<!-- header -->
<div class="w3l-header" id="home">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark pl-0 pr-0">
            <a class="navbar-brand m-0 text-primary" href="index.html"><span class="fa fa-gamepad"></span> Eccentric </a> 
                <!-- <span class="logo">portfolio</span>-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mr-lg-4">
                        <a class="nav-link pl-0 pr-0 font-weight-bold" href="{{ route('/') }}">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item mr-lg-4">
                        <a class="nav-link pl-0 pr-0 font-weight-bold" href="{{ route('about') }}">About</a>
                    </li>
                    <li class="nav-item mr-lg-4">
                        <a class="nav-link pl-0 pr-0 font-weight-bold" href="{{ route('service') }}">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-0 pr-0 font-weight-bold" href="{{ route('contact') }}">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- //header -->

@yield('body')

<!-- Footer -->
<section class="w3l-footers-1">
	<div class="footer bg-secondary">
		<div class="container">
			<div class="footer-content">
				<div class="row">
					<div class="col-lg-8 footer-left">
						<p class="m-0">© Copyright 2020 Eccentric Portfolio. Design by <a
								href="https://w3layouts.com">W3layouts</a></p>
					</div>
					<div class="col-lg-4 footer-right text-lg-right text-center mt-lg-0 mt-3">
						<ul class="social m-0 p-0">
							<li><a href="#facebook"><span class="fa fa-facebook"></span></a></li>
							<li><a href="#linkedin"><span class="fa fa-linkedin"></span></a></li>
							<li><a href="#instagram"><span class="fa fa-instagram"></span></a></li>
							<li><a href="#twitter"><span class="fa fa-twitter"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Footer -->

<!-- move top -->
<button onclick="topFunction()" id="movetop" class="bg-primary" title="Go to top">
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

<!-- common jquery -->
<script src="{{ route('/') }}/frontEnd/js/jquery-3.3.1.min.js"></script>
<!-- //common jquery -->

<!-- // for banner slider -->
<script src="{{ route('/') }}/frontEnd/js/momentum-slider.min.js"></script>
<script>
  (function () {

    var slidersContainer = document.querySelector('.sliders-container');

    // Initializing the numbers slider
    var msNumbers = new MomentumSlider({
      el: slidersContainer,
      cssClass: 'ms--numbers',
      range: [1, 4],
      rangeContent: function (i) {
        return '0' + i;
      },
      style: {
        transform: [{
          scale: [0.4, 1]
        }],
        opacity: [0, 1]
      },

      interactive: false
    });


    // Initializing the titles slider
    var titles = [
      'Branding ',
      'Awesome',
      'Creative',
      'Portfolio'
    ];

    var msTitles = new MomentumSlider({
      el: slidersContainer,
      cssClass: 'ms--titles',
      range: [0, 3],
      rangeContent: function (i) {
        return '<h3>' + titles[i] + '</h3>';
      },
      vertical: true,
      reverse: true,
      style: {
        opacity: [0, 1]
      },

      interactive: false
    });


    // Initializing the links slider
    var msLinks = new MomentumSlider({
      el: slidersContainer,
      cssClass: 'ms--links',
      range: [0, 3],
      rangeContent: function () {
        return '<a href="about.html" class="ms-slide__link btn">View More</a>';
      },
      vertical: true,
      interactive: false
    });


    // Get pagination items
    var pagination = document.querySelector('.pagination');
    var paginationItems = [].slice.call(pagination.children);

    // Initializing the images slider
    var msImages = new MomentumSlider({
      // Element to append the slider
      el: slidersContainer,
      // CSS class to reference the slider
      cssClass: 'ms--images',
      // Generate the 4 slides required
      range: [0, 3],
      rangeContent: function () {
        return '<div class="ms-slide__image-container"><div class="ms-slide__image"></div></div>';
      },
      // Syncronize the other sliders
      sync: [msNumbers, msTitles, msLinks],
      // Styles to interpolate as we move the slider
      style: {
        '.ms-slide__image': {
          transform: [{
            scale: [1.5, 1]
          }]
        }
      },


      // Update pagination if slider change
      change: function (newIndex, oldIndex) {
        if (typeof oldIndex !== 'undefined') {
          paginationItems[oldIndex].classList.remove('pagination__item--active');
        }
        paginationItems[newIndex].classList.add('pagination__item--active');
      }
    });


    // Select corresponding slider item when a pagination button is clicked
    pagination.addEventListener('click', function (e) {
      if (e.target.matches('.pagination__button')) {
        var index = paginationItems.indexOf(e.target.parentNode);
        msImages.select(index);
      }
    });

  })();
</script>
<!-- // for banner slider -->

<!--  bootstrap js -->
<script src="{{ route('/') }}/frontEnd/js/bootstrap.min.js"></script>
<!--  //bootstrap js -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

</body>
</html>