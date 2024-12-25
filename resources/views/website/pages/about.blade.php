@extends('website.layout.websitemain')
@section('title', 'About Us | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>

    <section id="aboutfirstsection" class="py-5">
        <div class="container py-5" style="position: relative;">
            <div class="row">
                <div class="text-center globaltxtcolor">
                    The Digital Agency that's with you <br> 
                    <span class="">every step of the way.</span>
                </div>
                <div class="text-center">
                    <p class="text-wrap aboutsecondhead">
                        Yuvmedia is a premier digital marketing agency In India. Our mission is to deliver the most
                        effective digital marketing solutions, focusing on a personalized customer experience that ensures
                        results. We use our profits to help our clients, our team, and our community succeed.
                    </p>
                </div>
                <div class="text-center">
                    <p class="text-wrap aboutsecondhead">
                        You can expect to receive clear and transparent communication throughout your project and beyond.
                        Our consistent maintenance services are designed to ensure the continuity of your online success.
                    </p>
                </div>
                <div class="d-flex justify-content-center flex-wrap buttonsdiv">
                    <div class="me-3">
                        <a href="#" class="btn btn-primary btn-lg">Contact Us<i
                                class="bi bi-arrow-right ms-3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-black p-3 p-md-3 position-relative">
        <div class="d-flex align-items-center justify-content-center">
            <p class="text-wrap  text-white">
                Yuvmedia is a premier digital marketing agency In India. Our mission is to deliver the most effective
                digital
                marketing solutions, focusing on a personalized customer experience that ensures results.
            </p>
        </div>
    </section>

    <section id="aboutmainsection" class="py-4">
        <div class="container py-3 py-md-4">
            <div class="row align-items-center">
                <div class="col-md-6 col-12">
                    <div class="text-start globaltxtcolor">
                        Our <span class="aboutheadingsubsecthree">Story</span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap aboutsecondheadsecthree">
                            Born in the difficult time of the pandemic, Our Journey began as a digital marketer during the
                            COVID-19 pandemic. The world was on hold, we saw an opportunity. Businesses were rushing to move
                            online, and we knew we could help them navigate the digital landscape.
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap aboutsecondheadsecthree">
                            Yuvmedia is the trusted partner of choice for hundreds of top companies, ranging from hot
                            start-ups to established organizations. Our track record of delivering over <strong>5,000
                                projects</strong> and onboarding <strong>600 MSMEs</strong>, we boast a clientele of over
                            <strong>600 happy clients.</strong>
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap fw-bold">
                            With 10 years of industry experience, we’ve navigated the evolving landscape, staying ahead of
                            trends and delivering consistent value.
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="#" class="btn btn-outline-primary btn-lg">Contact Us<i
                                    class="bi bi-arrow-right ms-3"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    {{-- <div class="row h-100 imagesonmob">
                        <div class="col-5 h-100 px-0 mt-1 mt-lg-0">
                            <div class="h-50  pb-2">
                                <img class="aboutiamgesecthree"
                                    src="{{ asset('assets/websiteAssets/images/abouttwo.webp') }}"
                                    style="border-radius: 12px; border: 5px solid var(--website-blue-color);">
                            </div>
                            <div class="h-50 pt-2">
                                <img class="aboutiamgesecthree"
                                    src="{{ asset('assets/websiteAssets/images/abouthree.webp') }}"
                                    style="border-radius: 12px;">
                            </div>
                        </div>
                        <div class="col-5 h-100 px-0 mt-1 mt-lg-0">
                            <div class="h-50  pb-2">
                                <img class="aboutiamgesecthree"
                                    src="{{ asset('assets/websiteAssets/images/abouttwo.webp') }}"
                                    style="border-radius: 12px;">
                            </div>
                            <div class="h-50 pt-2">
                                <img class="aboutiamgesecthree"
                                    src="{{ asset('assets/websiteAssets/images/abouthree.webp') }}"
                                    style="border-radius: 12px; border: 5px solid var(--website-blue-color);">
                            </div>
                        </div>
                    </div> --}}

                    <iframe class="rounded-3" width="560" height="315" src="https://www.youtube.com/embed/qcYip_RMzfI?si=g5P_vthvgF97op0z" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>

    <section class="py-3 py-md-3" style="background-color:rgba(255, 255, 255, 0);">
        <div class="container py-3 py-md-4">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="globaltxtcolor">
                        Our Core <span class="contactheadingsub text-decoration-underline">Values</span>
                    </div>
                    <div class="">
                        <p class="text-wrap contactsecondhead">
                            Helping businesses to grow. Empowering businesses to shine by delivering effective marketing
                            solutions for small and medium enterprises. We take care of the marketing so that companies can
                            concentrate on their customers.
                        </p>
                    </div>
                    <div class="row gy-4 gx-4 justify-content-center">
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">Y</p>
                                    <p class="text-center fw-bold">Youthful</p>
                                    <p class="card-text text-center text-wrap">Young strategies to engage and inspire modern
                                        audiences in the digital world.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">U</p>
                                    <p class="text-center fw-bold">Unique</p>
                                    <p class="card-text text-center text-wrap">Suggesting innovative and unique marketing
                                        strategies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">V</p>
                                    <p class="text-center fw-bold">Visionary</p>
                                    <p class="card-text text-center text-wrap">Visionary creators of digital success.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">M</p>
                                    <p class="text-center fw-bold">Motivated</p>
                                    <p class="card-text text-center text-wrap">Motivated to drive digital success.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">E</p>
                                    <p class="text-center fw-bold">Engaging</p>
                                    <p class="card-text text-center text-wrap">Engaging audiences through immersive digital
                                        experiences.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">D</p>
                                    <p class="text-center fw-bold">Dynamic</p>
                                    <p class="card-text text-center text-wrap">Dynamically Adapting to the ever-changing
                                        digital environment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">I</p>
                                    <p class="text-center fw-bold">Innovative</p>
                                    <p class="card-text text-center text-wrap">Young strategies to engage and inspire
                                        modern
                                        audiences in the digital world.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="aboutcards">
                                <div class="card-body">
                                    <p class="fw-bold text-center letterpara">A</p>
                                    <p class="text-center fw-bold">Ambitious</p>
                                    <p class="card-text text-center text-wrap">Ambitiously driving digital growth and
                                        exceeding expectations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container pt-5 justify-content-center">
            <div class="row">
                <div class="text-start globaltxtcolor">
                    Key <span class="websubheading3">Clientele</span>
                </div>
                <div class="text-start fs-5">
                    <p class="text-wrap webcontent3">
                        By choosing Yuvmedia, you’re not just selecting a partner; you’re investing in a future of
                        accelerated growth, substantial cost savings, and complete peace of mind. Let’s turn your digital
                        vision into reality
                    </p>
                </div>
            </div>
        </div>
        <div class="container-fluid pb-3 pb-md-5">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="logo-slider">
                        <div class="logos-slide">
                            <img src="{{ asset('assets/websiteAssets/images/clients/1.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/2.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/3.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/4.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/5.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/6.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/7.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/8.jpg') }}">
                        </div>
                    </div>
                    <div class="logo-slider2 mt-3">
                        <div class="logos-slide2">
                            <img src="{{ asset('assets/websiteAssets/images/clients/5.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/6.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/7.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/8.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/1.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/2.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/3.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/4.jpg') }}">
                        </div>
                    </div>
                    <div class="logo-slider3">
                        <div class="logos-slide3">
                            <img src="{{ asset('assets/websiteAssets/images/clients/1.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/2.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/3.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/4.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/5.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/6.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/7.jpg') }}">
                            <img src="{{ asset('assets/websiteAssets/images/clients/8.jpg') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <section class="py-4">
        <div class="container py-3 py-md-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="text-start globaltxtcolor">
                        Our <span class="aboutheadingsubsecthree">Purpose</span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap aboutsecondheadsecthree">
                            We go beyond the clicks and metrics. We take the time to understand your brand, your target
                            audience, and your unique challenges.
                        </p>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap aboutsecondheadsecthree">
                            We believe in building strong partnerships with our clients, ensuring open communication and a
                            collaborative approach throughout the entire process.
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="#" class="btn btn-primary btn-lg">Contact Us<i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-3 mt-md-0">
                    <iframe class="rounded-3" src="https://www.youtube.com/embed/DKfYhgaYeD8" frameborder="0"
                        width="100%" height="315"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>

            </div>
        </div>
    </section>

    <!-- core-team -->
    <section class="core-team py-5">
        <div class="container">
            <div class="row">
                <div class="globaltxtcolor text-start ">
                    Core Team
                </div>
                <div class=" text-start fs-3 fw-bold">
                    Empowering every vertical in the country.
                </div>
                <p class=" text-start">
                    We seek our thrill from making brands and businesses in diversified domains reach their right audience.
                    With every conversion and each sale, we strive to set new standards for your business as well as
                    ourselves.
                </p>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-sm-12">
                    <div id="core-team" class="owl-carousel">

                        {{-- khivraj sir --}}
                        {{-- <div class="item">
                            <div class="flip">
                                <div class="corecard border-0">
                                    <div class="face front">
                                        <div class="inner">
                                            <div class="shadow-effect corebox flip rounded-3">
                                                <div class=" ">
                                                    <img class="img-circle rounded-3" width="50px"
                                                        src="{{ asset('assets/websiteAssets/images/Team/Mr.-Khivraj-Sain-300x300.webp') }}"
                                                        alt="client">
                                                </div>
                                                <div class="authorbox rounded-3">
                                                    <div class="testimonial-name d-flex  text-white">
                                                        <div>
                                                            <div class="author">Mr. Khivraj Sain</div>
                                                            <div class="fs-6 ">CEO & Founder</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>“Business has only two functions- marketing and innovation.”</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="author">Mr. Khivraj Sain</div>
                                                    <div class="fs-6 ">CEO & Founder</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div> --}}

                        {{-- Kishan gopal --}}
                        <div class="item">
                            <div class="flip">
                                <div class="corecard border-0">

                                    <div class="face front">
                                        <div class="inner">
                                            <div class="shadow-effect corebox flip rounded-3">
                                                <div class=" ">
                                                    <img class="img-circle rounded-3" width="50px"
                                                        src="{{ asset('assets/websiteAssets/images/team/new/kishangopal.webp') }}"
                                                        alt="client">
                                                </div>
                                                <div class="authorbox rounded-3">
                                                    <div class="testimonial-name d-flex  text-white">
                                                        <div>
                                                            <div class="author">Kishan Gopal</div>
                                                            <div class="fs-6 ">Operations Manager</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>“Business has only two functions- marketing and innovation.”</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="author">Kishan Gopal</div>
                                                    <div class="fs-6 ">Operations Manager</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Nilesh gupta --}}
                        <div class="item">
                            <div class="flip">
                                <div class="corecard border-0">

                                    <div class="face front">
                                        <div class="inner">
                                            <div class="shadow-effect corebox flip rounded-3">
                                                <div class=" ">
                                                    <img class="img-circle rounded-3" width="50px"
                                                        src="{{ asset('assets/websiteAssets/images/team/new/Nilesh-Sir.webp') }}"
                                                        alt="client">
                                                </div>
                                                <div class="authorbox rounded-3">
                                                    <div class="testimonial-name d-flex  text-white">
                                                        <div>
                                                            <div class="author">Mr. Nilesh Gupta</div>
                                                            <div class="fs-6 ">Office Admin</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>“Business has only two functions- marketing and innovation.”</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="author">Mr. Nilesh Gupta</div>
                                                    <div class="fs-6 ">Office Admin</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Manohar sir --}}
                        <div class="item">
                            <div class="flip">
                                <div class="corecard border-0">
                                    <div class="face front">
                                        <div class="inner">
                                            <div class="shadow-effect corebox flip rounded-3">
                                                <div class=" ">
                                                    <img class="img-circle rounded-3" width="50px"
                                                        src="{{ asset('assets/websiteAssets/images/team/new/Manohar-sir.webp') }}"
                                                        alt="client">
                                                </div>
                                                <div class="authorbox rounded-3">
                                                    <div class="testimonial-name d-flex  text-white">
                                                        <div>
                                                            <div class="author">Mr. Manohar Singhh</div>
                                                            <div class="fs-6 ">Paid Marketing Manager</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>“Business has only two functions- marketing and innovation.”</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="author">Mr. Manohar Singh</div>
                                                    <div class="fs-6 ">Paid Marketing Manager</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- Rudraksh sir --}}
                        <div class="item">
                            <div class="flip">
                                <div class="corecard border-0">

                                    <div class="face front">
                                        <div class="inner">
                                            <div class="shadow-effect corebox flip rounded-3">
                                                <div class=" ">
                                                    <img class="img-circle rounded-3" width="50px"
                                                        src="{{ asset('assets/websiteAssets/images/team/new/Rudraksh.webp') }}"
                                                        alt="client">
                                                </div>
                                                <div class="authorbox rounded-3">
                                                    <div class="testimonial-name d-flex  text-white">
                                                        <div>
                                                            <div class="author">Mr. Rudraksh Singh</div>
                                                            <div class="fs-6 ">Creative Design Manager</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>“Business has only two functions- marketing and innovation.”</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="author">Mr. Rudraksh Singh</div>
                                                    <div class="fs-6 ">Creative Design Manager</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        {{-- Leera ma'am --}}
                        <div class="item">
                            <div class="flip">
                                <div class="corecard border-0">
                                    <div class="face front">
                                        <div class="inner">
                                            <div class="shadow-effect corebox flip rounded-3">
                                                <div class=" ">
                                                    <img class="img-circle rounded-3" width="50px"
                                                        src="{{ asset('assets/websiteAssets/images/team/new/Leera.webp') }}"
                                                        alt="client">
                                                </div>
                                                <div class="authorbox rounded-3">
                                                    <div class="testimonial-name d-flex  text-white">
                                                        <div>
                                                            <div class="author">Ms. Leera Ramesh</div>
                                                            <div class="fs-6 ">Seller Manager</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="face back">
                                        <div class="inner p-3">
                                            <div>
                                                <p>“Business has only two functions- marketing and innovation.”</p>
                                            </div>
                                            <div class="testimonial-name d-flex mt-auto text-black">
                                                <div>
                                                    <div class="author">Ms. Leera Ramesh</div>
                                                    <div class="fs-6 ">Seller Manager</div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END OF core-team -->


    <script>
        var copy = document.querySelector(".logos-slide").cloneNode(true);
        document.querySelector(".logo-slider").appendChild(copy);

        var copy2 = document.querySelector(".logos-slide2").cloneNode(true);
        document.querySelector(".logo-slider2").appendChild(copy2);

        var copy3 = document.querySelector(".logos-slide3").cloneNode(true);
        document.querySelector(".logo-slider3").appendChild(copy3);
    </script>
@endsection
