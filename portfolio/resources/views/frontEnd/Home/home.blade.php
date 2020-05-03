@extends('frontEnd.master')
@section('body')
<div class="w3l-banner-slider">
    <div class="wrapper-container">
        <!-- Container for all sliders, and pagination -->
        <main class="sliders-container">
            <!-- Here will be injected sliders for {{ asset('/') }}/frontEnd/images, numbers, titles and links -->

            <!-- Simple pagination for the slider -->
            <ul class="pagination">
                <li class="pagination__item"><a class="pagination__button"></a></li>
                <li class="pagination__item"><a class="pagination__button"></a></li>
                <li class="pagination__item"><a class="pagination__button"></a></li>
                <li class="pagination__item"><a class="pagination__button"></a></li>
            </ul>
            <div class="social">
                <a class="" href="#facebook"><span class="fa fa-facebook"></span></a>
                <a class="" href="#twitter"><span class="fa fa-twitter"></span></a>
                <a class="" href="#instagram"><span class="fa fa-instagram"></span></a>
            </div>
        </main>
    </div>
</div>
<!-- //banner slider -->

<!-- w3l-content-photo-5 -->
<div class="w3l-content-photo-5 py-5">
	<div class="content-main py-lg-5 py-md-3">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 content-left">
					<h3>I Specialize in Branding and Strategy, and am passionate
						about creating Awesome Portfolio work.</h3>
					<p class="mb-0">Donec luctus rhoncus dignissim. Integer blandit mattis arcu, id viverra orci condimentum a.
						Quisque nibh tortor, mollis placerat semper ac, auctor quis mauris. Praesent dignissim sed
						magna eu urna consectetur, at pretium nisi aliquet. Sed vestibulum malesuada semper. Init
						Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada nibh sed dolorinet
						libero posuere, sed cursus elit congue. Sed vestibulum malesuada semper. Init
						Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec malesuada nibh sed dolorinet
						libero posuere, sed cursus elit congue donec malesuada nibhe</p>
					<a href="#portfolio" class="primary-btn-style btn-primary btn mt-lg-5 mt-4">My live work</a>
				</div>
				<div class="col-lg-4 content-photo mt-lg-0 mt-sm-5 mb-md-0 mb-4">
					<a href="#img"><img src="{{ asset('/') }}/frontEnd/images/myimage.jpg" class="img-fluid" alt="content-photo"></a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- //w3l-content-photo-5 -->

<!-- gallery-7 -->
<section class="w3l-gallery-7 bg-light py-5">
	<div class="gallery-7_sur py-lg-5">
		<div class="container">
			<div id="container">
				<div class="galleryContainer">
					<div class="gallery">
						<input type="radio" name="controls" id="c1" checked><img class="galleryImage img-fluid" id="i1"
							src="{{ asset('/') }}frontEnd/{{ asset('/') }}/frontEnd/images/g1.jpg" class="img" alt="">
						<input type="radio" name="controls" id="c2"><img class="galleryImage img-fluid" id="i2"
							src="{{ asset('/') }}/frontEnd/images/g2.jpg" class="img" alt="">
						<input type="radio" name="controls" id="c3"><img class="galleryImage img-fluid" id="i3"
							src="{{ asset('/') }}/frontEnd/images/g3.jpg" class="img" alt="">
						<input type="radio" name="controls" id="c4"><img class="galleryImage img-fluid" id="i4"
							src="{{ asset('/') }}/frontEnd/images/g4.jpg" class="img" alt="">
						<input type="radio" name="controls" id="c5"><img class="galleryImage img-fluid" id="i5"
							src="{{ asset('/') }}/frontEnd/images/g5.jpg" class="img" alt="">
						<input type="radio" name="controls" id="c6"><img class="galleryImage img-fluid" id="i6"
							src="{{ asset('/') }}/frontEnd/images/g6.jpg" class="img" alt="">
					</div>
					<div class="thumbnails">
						<label class="thumbnailImage" for="c1"><img src="{{ asset('/') }}/frontEnd/images/g1.jpg" class="img img-fluid"
								alt=""></label>
						<label class="thumbnailImage" for="c2"><img src="{{ asset('/') }}/frontEnd/images/g2.jpg" class="img img-fluid"
								alt=""></label>
						<label class="thumbnailImage" for="c3"><img src="{{ asset('/') }}/frontEnd/images/g3.jpg" class="img img-fluid"
								alt=""></label>
						<label class="thumbnailImage" for="c4"><img src="{{ asset('/') }}/frontEnd/images/g4.jpg" class="img img-fluid"
								alt=""></label>
						<label class="thumbnailImage" for="c5"><img src="{{ asset('/') }}/frontEnd/images/g5.jpg" class="img img-fluid"
								alt=""></label>
						<label class="thumbnailImage" for="c6"><img src="{{ asset('/') }}/frontEnd/images/g6.jpg" class="img img-fluid"
								alt=""></label>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //gallery-7 -->

<!-- iphone home block -->
<section class="w3l-blog py-5">
    <div class="container py-lg-5">
        <div class="row">
            <div class="col-lg-3 col-6 pr-md-3 pr-2">
                <div class="img-block">
                    <a href="#img">
                        <img src="{{ asset('/') }}/frontEnd/images/iphone1.png" class="img-fluid" alt="image" />
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-6 pl-md-3 pl-2">
                <div class="img-block">
                    <a href="#img">
                        <img src="{{ asset('/') }}/frontEnd/images/iphone2.png" class="img-fluid" alt="image" />
                    </a>
                </div>
            </div>
            <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4">
                <h3>Sed volutpat eget dui ut tempus init bibendum nunc.</h3>
                <h5 class="mt-3">Fusce fringilla tincidunt laoreet volutpat cras varius sit suscipit.</h5>
                <p class="mt-4 mb-0"> Sed in metus libero. Sed volutpat eget dui ut tempus. Fusce fringilla tincidunt laoreet
                    Morbi ac metus vitae diam scelerisque malesuada eget eu mauris. Cras varius lorem ac velit pharetra,
                    non scelerisque mi vulputate. Phasellus bibendum suscipit nunc, non semper erat iaculis in. Nulla
                    volutpat porttitor magna vel euismod. Aenean sit amet diam nec sem
                    amet metus.</p>
                <a href="#blog.html" class="primary-btn-style btn-primary btn mt-lg-5 mt-4">View my project</a>
            </div>
        </div>
    </div>
</section>
<!-- //iphone home block -->

<!-- testimonial -->
<section class="w3l-quote-main">
    <div class="quote py-5">
        <div class="container py-lg-5">
            <div class="row">
                <div class="col-lg-9">
                    <h4>" I've worked with some X company for several years and that is the best company in the Market.
                        Mauris elementum tortor a nisl
                        aliquet fringilla. Donec et risus augue. Proin sit amet maximus dui Vivamus lacinia nisi tempor
                        ligula sagittis vehicula."</h4>
                </div>
                <div class="col-lg-3 mt-lg-0 mt-3 text-lg-center tablet-grid">
                    <img src="{{ asset('/') }}/frontEnd/images/client2.jpg" alt="" class="img-fluid" />
                    <div>
                        <h6 class="mb-0 mt-lg-3">Johnson smith</h6>
                        <h5 class="mt-1">- UI/UX Designer </h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //testimonial -->

<!-- home page blog-->
<section class="w3l-blog py-5 bg-light">
    <div class="container py-lg-5 py-md-3">
        <div class="row">
            <div class="col-lg-5">
                <h3>Sed volutpat eget dui ut tempus init.</h3>
                <h5 class="mt-3">Fusce fringilla tincidunt laoreet volutpat cras varius sit </h5>
                <p class="mt-4"> Sed in metus libero. Sed volutpat eget dui ut tempus. Fusce fringilla tincidunt laoreet
                    Morbi ac metus vitae diam scelerisque malesuada eget eu mauris. Cras varius lorem ac velit pharetra,
                    non scelerisque mi vulputate. Phasellus bibendum suscipit nunc, non semper erat iaculis in. Nulla
                    volutpat porttitor magna vel euismod. Aenean sit amet diam nec sem
                    amet metus.</p>
            </div>
            <div class="col-lg-7 mt-lg-0 mt-4">
                <div class="img-block">
                    <a href="#single">
                        <img src="{{ asset('/') }}/frontEnd/images/g1.jpg" class="img-fluid" alt="image" />
                        <span>Modern Ecommerce Website Design</span>
                    </a>
                </div>
                <div class="img-block mt-3">
                    <a href="#single"> <img src="{{ asset('/') }}/frontEnd/images/g2.jpg" class="img-fluid" alt="image" />
                        <span>Personalized Portfolio work</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //home page blog-->

<!-- freelance hire me -->
<section class="w3l-grid-quote py-5">
    <div class="container py-lg-3">
        <h6>I'am available for freelance projects.</h6>
        <h3>Let's work together indeed!</h3>
        <a href="contact.html" class="secondary-btn-style btn-secondary btn">Get quotes</a>
        <a href="contact.html" class="btn btn-style text-primary ml-2">Hire me</a>
    </div>
</section>
@endSection