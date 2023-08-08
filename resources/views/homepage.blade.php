@extends('layouts.themes')

@section('title')
Home
@endsection

@section('hero')
<section id="hero" class="hero d-flex align-items-center">

<div class="container">
    <div class="row">
    <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up">From Nature to The World</h1>
        <h2 data-aos="fade-up" data-aos-delay="400">To become a leading global spice export company, enriching the world with the authentic flavors and health benefits of natural spices.</h2>
        <div data-aos="fade-up" data-aos-delay="600">
        <div class="text-center text-lg-start">
            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
            <span>Get Started</span>
            <i class="bi bi-arrow-right"></i>
            </a>
        </div>
        </div>
    </div>
    <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <!-- <img src="{{asset('assets/img-5.jpg')}}" class="img-fluid" alt=""> -->
    </div>
    </div>
</div>

</section> 
@endsection

@section('main')
<!-- ======= About Section ======= -->
<section id="about" class="about">

    <div class="container" data-aos="fade-up">
    <div class="row gx-0">

        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="content">
            <h3>Who We Are</h3>
            <h2>In the heart of the vibrant and culturally rich region of Southeast Asia, there lies a pioneering company that has woven together the essence of ancient traditions and modern innovation – the Spice Haven Exporters.</h2>
            <p>
            Founded by a group of passionate entrepreneurs with an insatiable love for the aromatic wonders of nature, Spice Haven Exporters began its journey as a humble trading venture. Driven by their vision to share the authentic flavors of the East with the rest of the world, the company embarked on a daring path, navigating through the intricate network of spice growers, farmers, and artisans.
            </p>
            <div class="text-center text-lg-start">
            <a href="#" class="btn-read-more d-inline-flex align-items-center justify-content-center align-self-center">
                <span>Read More</span>
                <i class="bi bi-arrow-right"></i>
            </a>
            </div>
        </div>
        </div>

        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
        <img src="{{asset('assets/img-12b.png')}}" class="img-fluid" alt="">
        </div>

    </div>
    </div>

</section><!-- End About Section -->

<!-- ======= Values Section ======= -->
<section id="values" class="values">

    <div class="container" data-aos="fade-up">

    <header class="section-header">
        <h2>Our Missions</h2>
        <p>Dedication to the World</p>
    </header>

    <div class="row justify-content-md-center">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="box">
            <img src="{{asset('assets/values-1.png')}}" class="img-fluid" alt="">
            <h3>Quality Sourcing</h3>
            <p>We aim to procure the finest and most diverse range of spices from reputable growers and farmers worldwide, ensuring superior quality and authenticity in our products.</p>
        </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
        <div class="box">
            <img src="{{asset('assets/values-2.png')}}" class="img-fluid" alt="">
            <h3>Global Market Penetration</h3>
            <p>We strive to expand our presencein international markets, establishing strong partnerships with distributors and retailers, and making our spices readily available to customers across the globe.</p>
        </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
        <div class="box">
            <img src="{{asset('assets/values-3.png')}}" class="img-fluid" alt="">
            <h3>Sustainable Practices.</h3>
            <p>We are committed to promoting sustainable agricultural practices and ethical sourcing, empowering local spice growers while safeguarding the environment for future generations.</p>
        </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-4" data-aos="fade-up" data-aos-delay="600">
        <div class="box">
            <img src="{{asset('assets/values-4.jpg')}}" class="img-fluid" alt="">
            <h3>Product Innovation.</h3>
            <p>Our dedicated research and development team continuously explores new spice blends, packaging designs, and processing methods to offer innovative products that meet the evolving tastes of our customers.</p>
        </div>
        </div>

    </div>

    </div>

</section><!-- End Values Section -->

<!-- ======= Counts Section ======= -->
<section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

    <div class="row justify-content-md-center">

        <div class="col-lg-3 col-md-6">
        <div class="count-box justify-content-md-center">
            <i class="bi bi-shop" style="color: #ee6c20;"></i>
            <div>
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Exporters</p>
            </div>
        </div>
        </div>

        <div class="col-lg-3 col-md-6">
        <div class="count-box justify-content-md-center">
            <i class="bi bi-boxes" style="color: #15be56;"></i>
            <div>
            <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
            <p>Products</p>
            </div>
        </div>
        </div>

        <div class="col-lg-3 col-md-6">
        <div class="count-box justify-content-md-center">
            <i class="bi bi-people" style="color: #bb0852;"></i>
            <div>
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Cooperations</p>
            </div>
        </div>
        </div>

    </div>

    </div>
</section><!-- End Counts Section -->

<!-- ======= Features Section ======= -->
<section id="features" class="features">

    <!-- Feature Icons -->
    <div class="row feature-icons" data-aos="fade-up">
        <h3>WHY CHOOSE US?</h3>

        <div class="row">

        <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
            <img src="{{asset('assets/img-12.jpg')}}" class="img-fluid p-4" alt="">
        </div>

        <div class="col-xl-8 d-flex content">
            <div class="row align-self-center gy-4">

            <div class="col-md-6 icon-box" data-aos="fade-up">
                <i class="ri-magic-line"></i>
                <div>
                <h4>Commitment</h4>
                <p>our company have a big commitment to create high quality product. we achieve this by providing products that come from the best raw materials.</p>
                </div>
            </div>

            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="ri-command-line"></i>
                <div>
                <h4>Contributing</h4>
                <p>we also have a strong commitment to contributing to improving the living standars of farmers through the products we produce.</p>
                </div>
            </div>

            <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="ri-radar-line"></i>
                <div>
                <h4>Participate</h4>
                <p>by becoming a customer, you will also participate in the sosial work we do for farmers in west java. </p>
                </div>
            </div>

            </div>
        </div>

        </div>

    </div><!-- End Feature Icons -->

    </div>

</section><!-- End Features Section -->

<!-- ======= Services Section ======= -->
<section id="services" class="services">

    <div class="container" data-aos="fade-up">

    <header class="section-header">
        <p>Our Product</p>
    </header>

    <div class="row align-items-center gy-4">

        <div class="col-lg-4 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="200">
        <div class="service-box orange card card-cover shadow-lg" style="background-image: url('../../assets/img-3.JPG');">
            <h3>Ginger</h3>
            <p>Ginger is a tropical plant known for its medicinal properties properties and culinary uses derived from farmers across Java Island.</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
        <div class="service-box orange card card-cover shadow-lg" style="background-image: url('../../assets/img-13.JPG');">
            <h3>Cardamon</h3>
            <p>Cardamo, also known as "kapulaga" in Indonesian, is a highly aromatic spice widely used in various cuisines around the world. </p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
        </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
        <div class="service-box orange card card-cover shadow-lg" style="background-image: url('../../assets/img-7.JPG');">
            <h3>Clove</h3>
            <p>Clove, or "cengkeh" in Indonesian, is a well-known and versatile spice with a rich history that stretches back thousands of years.</p>
            <a href="#" class="read-more"><span>Read More</span> <i class="bi bi-arrow-right"></i></a>
        </div>
        </div>

    </div>

    </div>

</section><!-- End Services Section -->

<!-- ======= product Section ======= -->
<section id="product" class="product">

    <div class="container" data-aos="fade-up">

    <header class="section-header">
        <h2>Galery</h2>
        <p>Check our latest product & Work</p>
    </header>

    <div class="row" data-aos="fade-up" data-aos-delay="100">
        <div class="col-lg-12 d-flex justify-content-center">
        <ul id="product-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Ginger</li>
            <li data-filter=".filter-card">Cardamon</li>
            <li data-filter=".filter-web">Clove</li>
        </ul>
        </div>
    </div>

    <div class="row gy-4 product-container" data-aos="fade-up" data-aos-delay="200">

        <div class="col-lg-4 col-md-6 product-item filter-app">
        <div class="product-wrap">
            <img src="{{asset('assets/img-1.jpg')}}" class="img-fluid" alt="">
            <div class="product-info">
            <h4>App 1</h4>
            <p>App</p>
            <div class="product-links">
                <a href="{{asset('assets/img-1.jpg')}}" data-gallery="productGallery" class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                <a href="product-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
            </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-web">
        <div class="product-wrap">
            <img src="{{asset('assets/img-2.jpg')}}" class="img-fluid" alt="">
            <div class="product-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <div class="product-links">
                <a href="{{asset('assets/img-2.jpg')}}" data-gallery="productGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                <a href="product-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
            </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-app">
        <div class="product-wrap">
            <img src="{{asset('assets/img-1.jpg')}}" class="img-fluid" alt="">
            <div class="product-info">
            <h4>App 2</h4>
            <p>App</p>
            <div class="product-links">
                <a href="{{asset('assets/img-3.jpg')}}" data-gallery="productGallery" class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                <a href="product-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
            </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-card">
        <div class="product-wrap">
            <img src="{{asset('assets/img-4.jpg')}}" class="img-fluid" alt="">
            <div class="product-info">
            <h4>Card 2</h4>
            <p>Card</p>
            <div class="product-links">
                <a href="{{asset('assets/img-4.jpg')}}" data-gallery="productGallery" class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                <a href="product-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
            </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-web">
        <div class="product-wrap">
            <img src="{{asset('assets/img-5.jpg')}}" class="img-fluid" alt="">
            <div class="product-info">
            <h4>Web 2</h4>
            <p>Web</p>
            <div class="product-links">
                <a href="{{asset('assets/img-5.jpg')}}" data-gallery="productGallery" class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                <a href="product-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
            </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-app">
        <div class="product-wrap">
            <img src="{{asset('assets/img-6.jpg')}}" class="img-fluid" alt="">
            <div class="product-info">
            <h4>App 3</h4>
            <p>App</p>
            <div class="product-links">
                <a href="{{asset('assets/img-6.jpg')}}" data-gallery="productGallery" class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                <a href="product-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
            </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-card">
        <div class="product-wrap">
            <img src="{{asset('assets/img-7.jpg')}}" class="img-fluid" alt="">
            <div class="product-info">
            <h4>Card 1</h4>
            <p>Card</p>
            <div class="product-links">
                <a href="{{asset('assets/img-7.jpg')}}" data-gallery="productGallery" class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                <a href="product-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
            </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-card">
        <div class="product-wrap">
            <img src="{{asset('assets/img-8.jpg')}}" class="img-fluid" alt="">
            <div class="product-info">
            <h4>Card 3</h4>
            <p>Card</p>
            <div class="product-links">
                <a href="{{asset('assets/img-8.jpg')}}" data-gallery="productGallery" class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                <a href="product-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
            </div>
        </div>
        </div>

        <div class="col-lg-4 col-md-6 product-item filter-web">
        <div class="product-wrap">
            <img src="{{asset('assets/img-9.jpg')}}" class="img-fluid" alt="">
            <div class="product-info">
            <h4>Web 3</h4>
            <p>Web</p>
            <div class="product-links">
                <a href="{{asset('assets/img-9.jpg')}}" data-gallery="productGallery" class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                <a href="product-details.html" title="More Details"><i class="bi bi-link"></i></a>
            </div>
            </div>
        </div>
        </div>

    </div>

    </div>

</section><!-- End product Section -->

<!-- ======= Recent Blog Posts Section ======= -->
<section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

    <header class="section-header">
        <h2>Blog</h2>
        <p>Recent posts form our Blog</p>
    </header>

    <div class="row">

        <div class="col-lg-4">
        <div class="post-box">
            <div class="post-img"><img src="{{asset('assets/blog/blog-1.jpg')}}" class="img-fluid" alt=""></div>
            <span class="post-date">Tue, September 15</span>
            <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis voluptatem consequuntur sit</h3>
            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="post-box">
            <div class="post-img"><img src="{{asset('assets/blog/blog-2.jpg')}}" class="img-fluid" alt=""></div>
            <span class="post-date">Fri, August 28</span>
            <h3 class="post-title">Et repellendus molestiae qui est sed omnis voluptates magnam</h3>
            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>
        </div>

        <div class="col-lg-4">
        <div class="post-box">
            <div class="post-img"><img src="{{asset('assets/blog/blog-3.jpg')}}" class="img-fluid" alt=""></div>
            <span class="post-date">Mon, July 11</span>
            <h3 class="post-title">Quia assumenda est et veritatis aut quae</h3>
            <a href="blog-single.html" class="readmore stretched-link mt-auto"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
        </div>
        </div>

    </div>

    </div>

</section><!-- End Recent Blog Posts Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

    <div class="container" data-aos="fade-up">

    <header class="section-header">
        <h2>Contact</h2>
        <p>Contact Us</p>
    </header>

    <div class="row gy-4">

        <div class="col-lg-6">

        <div class="row gy-4">
            <div class="col-md-6">
            <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>Address</h3>
                <p>A108 Adam Street,<br>New York, NY 535022</p>
            </div>
            </div>
            <div class="col-md-6">
            <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>Call Us</h3>
                <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
            </div>
            </div>
            <div class="col-md-6">
            <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email Us</h3>
                <p>info@example.com<br>contact@example.com</p>
            </div>
            </div>
            <div class="col-md-6">
            <div class="info-box">
                <i class="bi bi-clock"></i>
                <h3>Open Hours</h3>
                <p>Monday - Friday<br>9:00AM - 05:00PM</p>
            </div>
            </div>
        </div>

        </div>

        <div class="col-lg-6">
        <form action="forms/contact.php" method="post" class="php-email-form">
            <div class="row gy-4">

            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
            </div>

            <div class="col-md-6 ">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
            </div>

            <div class="col-md-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject" required>
            </div>

            <div class="col-md-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
            </div>

            <div class="col-md-12 text-center">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>

                <button type="submit">Send Message</button>
            </div>

            </div>
        </form>

        </div>

    </div>

    </div>

</section><!-- End Contact Section -->
@endsection