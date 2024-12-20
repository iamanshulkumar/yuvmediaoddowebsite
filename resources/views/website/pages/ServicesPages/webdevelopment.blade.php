@extends('website.layout.websitemain')
@section('title', 'Web Development | ' . config('app.name'))
@section('content')
    <canvas id="gradient-canvas"></canvas>
    <section class="py-5 py-md-3 position-relative">
        <div class="container py-3 py-md-5">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="text-start webheadingsectiontwo">
                        Website Development Services : <span
                            class=" webheadingsubsectiontwo text-decoration-underline">Enhance Your Brand's
                            Visibility</span>
                    </div>
                    <div class="text-start py-2">
                        <p class="text-wrap websecondhead">
                            Choosing us for your web development needs means selecting a service that combines technical
                            expertise with creative flair. Whether you need an engaging corporate website, a dynamic
                            e-commerce platform, or a complex web application, our approach is always customized to meet
                            your specific business objectives. A website is not merely an online brochure; it is an
                            essential extension of your brand and a powerful tool for engaging with your audience.
                        </p>
                    </div>
                    <div class="d-flex justify-content-start flex-wrap buttonsdiv">
                        <div class="me-3">
                            <a href="{{ route('contact') }}" class="btn btn-lg  webbbtn">Contact Us <i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <img class="webimage" src="{{ asset('assets/websiteAssets/images/services/webdev1.webp') }}"
                        alt="webdev">
                        
                </div> --}}

                <div
                    class="col-lg-6 col-md-12 pt-lg-5 mt-lg-3 pt-0 pe-lg-5  animate-right position-relative jaydeskpa dding">

                    <div class="container1">
                        <img src="https://crmlanding.in/assets/images/hero/bg/manufactbgline.png" class="position-absolute"
                            id="img_bg">
                        <img src="https://crmlanding.in/assets/images/hero/bg/manufactbgeff.png"
                            class="position-absolute img-fluid" id="img_bgeff">
                        <div class="herocircle-container position-relative z-5">
                            <div class="herorcg-circle mx-lg-0 mx-2 flex-column" style="order: 3;">
                                <img src="https://crmlanding.in/assets/images/hero/bg/finwhiteicon.png" class="img-fluid">
                                <div class="sliderhead">Finance</div>
                            </div>
                            <div class="herorcg-circle mx-lg-0 mx-2 flex-column" style="order: 4;">
                                <img src="https://crmlanding.in/assets/images/hero/bg/realwhiteicon.png" class="img-fluid">
                                <div class="sliderhead">Real Estate</div>
                            </div>
                            <div class="herorcg-circle mx-lg-0 mx-2 flex-column" style="order: 0;">
                                <img src="https://crmlanding.in/assets/images/hero/bg/autowhiteicon.png" class="img-fluid">
                                <div class="sliderhead">Automotive</div>
                            </div>
                            <div class="herorcg-circle mx-lg-0 mx-2 flex-column" style="order: 1;">
                                <img src="https://crmlanding.in/assets/images/hero/bg/rcgwhiteicon.png" class="img-fluid">
                                <div class="sliderhead">RCG</div>
                            </div>
                            <div class="herorcg-circle mx-lg-0 mx-2 flex-column active" style="order: 2;">
                                <img src="https://crmlanding.in/assets/images/hero/bg/manufactureicon.png"
                                    class="img-fluid">
                                <div class="sliderhead">Manufacturing</div>
                            </div>
                        </div>

                        <div class="herocard herocard-outjay herocard1 active" id="jayho1">
                            <img id="herocard1-img" src="https://crmlanding.in/assets/images/hero/bg/manufacturing1.jpg"
                                class="img-fluid" alt="Image 1">
                        </div>
                        <div class="herocard herocard-outjay herocard2 active" id="jayho2">
                            <img id="herocard2-img" src="https://crmlanding.in/assets/images/hero/bg/manufacturing2.jpg"
                                class="img-fluid" alt="Image 2">
                        </div>
                        <div class="herocard herocard-outjay herocard3 active" id="jayho3">
                            <img id="herocard3-img" src="https://crmlanding.in/assets/images/hero/bg/manufacturing3.jpg"
                                class="img-fluid" alt="Image 3">
                        </div>
                        <div class="herocard herocard-outjay herocard4 active" id="jayho4">
                            <img id="herocard4-img" src="https://crmlanding.in/assets/images/hero/bg/manufacturing4.jpg"
                                class="img-fluid" alt="Image 4">
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </section>
    <section class="position-relative">
        <div class="container py-5">
            <div class="row">
                <div class="text-center webheading">
                    Complete Web Solutions <span class="webheadingsub">for Your Business</span>
                </div>
                <div class="text-center">
                    <p class="text-wrap webcontentsecond">
                        Our range of web services is designed to help your business thrive online. From building responsive
                        and e-commerce websites to handling hosting and domain registration, we’ve got you covered.
                    </p>
                </div>
            </div>
            <div class="row mt-3">
                <div class="">
                    <div class="d-md-flex flex-wrap customtablink align-items-start">
                        <div class="col-lg-4 col-12">
                            <div class="nav flex-column nav-pills me-3 d-flex justify-content-center" id="v-pills-tab"
                                role="tablist" aria-orientation="vertical">
                                <button class="nav-link active my-2 text-nowrap" id="v-pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-home" type="button" role="tab"
                                    aria-controls="v-pills-home" aria-selected="true">Responsive Websites</button>
                                <button class="nav-link my-2 text-nowrap" id="v-pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-profile" type="button" role="tab"
                                    aria-controls="v-pills-profile" aria-selected="false">E-commerce Websites</button>
                                <button class="nav-link my-2 text-nowrap" id="v-pills-messages-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-messages" type="button" role="tab"
                                    aria-controls="v-pills-messages" aria-selected="false">Web-Hosting & Domain</button>
                                <button class="nav-link my-2 text-nowrap" id="v-pills-settings-tab" data-bs-toggle="pill"
                                    data-bs-target="#v-pills-settings" type="button" role="tab"
                                    aria-controls="v-pills-settings" aria-selected="false">Website Maintenance</button>
                            </div>
                        </div>
                        <div class="col-lg-8 col-12">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                    aria-labelledby="v-pills-home-tab" tabindex="0">
                                    <div class="customtabcard">
                                        <div class="card-body text-start">
                                            <p class="fw-bold text-start customcardheading">Responsive Websites</p>
                                            <p class="card-text text-start text-wrap customcardcontent">
                                                At Yuvmedia, we specialize in creating responsive websites that seamlessly
                                                adapt to any device, ensuring an optimal user experience. Our responsive
                                                design approach helps businesses reach a wider audience and provides a
                                                consistent experience for every visitor. Partner with us to elevate your
                                                online presence with a website that looks great and performs flawlessly, no
                                                matter how it's accessed.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab" tabindex="0">
                                    <div class="customtabcardtwo">
                                        <div class="card-body text-start">
                                            <p class="fw-bold text-start customcardheading">E-commerce Websites</p>
                                            <p class="card-text text-start text-wrap customcardcontent">
                                                E-commerce websites are digital platforms for businesses to sell products
                                                and services directly to consumers over the Internet. They offer a
                                                convenient shopping experience with user-friendly interfaces, secure payment
                                                gateways, and features like product descriptions and customer reviews.
                                                Businesses can expand their reach, boost sales, and establish a strong
                                                online presence through an e-commerce website.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                    aria-labelledby="v-pills-messages-tab" tabindex="0">
                                    <div class="customtabcardthree">
                                        <div class="card-body text-start">
                                            <p class="fw-bold text-start customcardheading">Web-Hosting & Domain
                                                Registration</p>
                                            <p class="card-text text-start text-wrap customcardcontent">
                                                Our web hosting services guarantee that your website is consistently online
                                                and running smoothly, ensuring a smooth experience for your visitors. With a
                                                variety of hosting plans designed to fit different requirements, we cater to
                                                businesses of all sizes, ensuring excellent performance and security.
                                                Registering a domain with Yuv Media is quick and hassle-free. Our process
                                                helps you secure the perfect domain name for your brand, whether you're
                                                launching a new website or transferring an existing one. Our dedicated
                                                support team is here to assist you every step of the way.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                    aria-labelledby="v-pills-settings-tab" tabindex="0">
                                    <div class="customtabcardfour">
                                        <div class="card-body text-start">
                                            <p class="fw-bold text-start customcardheading">Website Maintenance & Overhaul
                                            </p>
                                            <p class="card-text text-start text-wrap customcardcontent">
                                                At Yuv Media, we offer comprehensive website maintenance and overhaul
                                                services to ensure your digital platform runs smoothly. Our team performs
                                                regular updates, security checks, and optimizations to enhance user
                                                experience and drive engagement. Trust us to keep your website a powerful
                                                tool for business success.
                                            </p>
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
    <section class="position-relative bannerbg">
        <div class="container py-5 justify-content-center">
            <div class="row">
                <div class="text-center webheading3">
                    Work With the <span class="websubheading3">Latest Technology</span>
                </div>
                <div class="text-center fs-5">
                    <p class="text-wrap webcontent3">
                        We are a world-class Web Development Services provider that incorporates versatile, customized, and
                        aesthetic attributes to meet the business objectives of our customers.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/rjs-150x150.webp') }}" alt="service bg"
                                class="mb-3 reactimg" style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">React</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/js-150x150.webp') }}" alt="service bg"
                                class="mb-3 jsimg" style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">Javascript</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/html-5-150x150.webp') }}"
                                alt="service bg" class="mb-3 htmlimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">HTML</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/css3-150x150.webp') }}" alt="service bg"
                                class="mb-3 cssimg" style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">CSS</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/bootstarp-150x150.webp') }}"
                                alt="service bg" class="mb-3 bootstrapimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">Bootstrap</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/angular-150x150.webp') }}"
                                alt="service bg" class="mb-3 angularimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">Angular</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/python-150x150.webp') }}"
                                alt="service bg" class="mb-3 pythonimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">Python</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/dotnet-core-150x150.webp') }}"
                                alt="service bg" class="mb-3 dotnetcoreimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">.NET Core</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/csharp-150x150.webp') }}"
                                alt="service bg" class="mb-3 chashimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">C#</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/dotnet-mvc-150x150.webp') }}"
                                alt="service bg" class="mb-3 dotnetmvcimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">.NET MVC</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/dotnet-mvc-150x150.webp') }}"
                                alt="service bg" class="mb-3 dotnetimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">.NET</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/php-150x150.webp') }}" alt="service bg"
                                class="mb-3 phpimg" style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">PHP</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/java-150x150.webp') }}"
                                alt="service bg" class="mb-3 javaimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">JAVA</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/shopify-150x150.webp') }}"
                                alt="service bg" class="mb-3 shopifyimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">Shopify</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/wordpress-150x150.webp') }}"
                                alt="service bg" class="mb-3 wordpressimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">Wordpress</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/mysql-150x150.webp') }}"
                                alt="service bg" class="mb-3 mysqlimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">MY SQL</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/sql-server-150x150.webp') }}"
                                alt="service bg" class="mb-3 sqlserverimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">SQL Server</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-6">
                    <div class="webcards">
                        <div class="card-body">
                            <img src="{{ asset('assets/websiteAssets/images/techs/1_doAg1_fMQKWFoub-6gwUiQ-150x150.png') }}"
                                alt="service bg" class="mb-3 mongodbimg"
                                style="width: 100px; height: 100px; object-fit: contain;">
                            <p class="text-center techheading">Mongo DB</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <script>
        const circles = document.querySelectorAll('.herorcg-circle');
        let currentIndex = 0; // Tracks the logical active index in the dataset

        const images = [
            ["https://crmlanding.in/assets/images/hero/bg/auto1.jpg",
                "https://crmlanding.in/assets/images/hero/bg/auto2.jpg",
                "https://crmlanding.in/assets/images/hero/bg/auto3.jpg",
                "https://crmlanding.in/assets/images/hero/bg/auto4.jpg"
            ],
            ["https://crmlanding.in/assets/images/hero/bg/rcg1.jpg",
                "https://crmlanding.in/assets/images/hero/bg/rcg2.jpg",
                "https://crmlanding.in/assets/images/hero/bg/rcg3.jpg",
                "https://crmlanding.in/assets/images/hero/bg/rcg4.jpg"
            ],
            ["https://crmlanding.in/assets/images/hero/bg/manufacturing1.jpg",
                "https://crmlanding.in/assets/images/hero/bg/manufacturing2.jpg",
                "https://crmlanding.in/assets/images/hero/bg/manufacturing3.jpg",
                "https://crmlanding.in/assets/images/hero/bg/manufacturing4.jpg"
            ],
            ["https://crmlanding.in/assets/images/hero/bg/finance1.jpg",
                "https://crmlanding.in/assets/images/hero/bg/finance2.jpg",
                "https://crmlanding.in/assets/images/hero/bg/finance3.jpg",
                "https://crmlanding.in/assets/images/hero/bg/finance4.jpg"
            ],
            ["https://crmlanding.in/assets/images/hero/bg/real1.jpg",
                "https://crmlanding.in/assets/images/hero/bg/real2.jpg",
                "https://crmlanding.in/assets/images/hero/bg/real3.jpg",
                "https://crmlanding.in/assets/images/hero/bg/real4.jpg"
            ]
        ];

        const circleactiveimg = [
            "https://crmlanding.in/assets/images/hero/bg/autoicon.png",
            "https://crmlanding.in/assets/images/hero/bg/financeicon.png",
            "https://crmlanding.in/assets/images/hero/bg/manufactureicon.png",
            "https://crmlanding.in/assets/images/hero/bg/financeicon.png",
            "https://crmlanding.in/assets/images/hero/bg/realicon.png"
        ];

        const inactiveImages = [
            "https://crmlanding.in/assets/images/hero/bg/autowhiteicon.png",
            "https://crmlanding.in/assets/images/hero/bg/rcgwhiteicon.png",
            "https://crmlanding.in/assets/images/hero/bg/manuwhiteicon.png",
            "https://crmlanding.in/assets/images/hero/bg/finwhiteicon.png",
            "https://crmlanding.in/assets/images/hero/bg/realwhiteicon.png"
        ];

        const bgimageline = [
            "https://crmlanding.in/assets/images/hero/bg/autobgline.png",
            "https://crmlanding.in/assets/images/hero/bg/rcgbglinenew.png",
            "https://crmlanding.in/assets/images/hero/bg/manufactbgline.png",
            "https://crmlanding.in/assets/images/hero/bg/finbglinenew.png",
            "https://crmlanding.in/assets/images/hero/bg/realbgline.png"
        ];

        const bgeffect = [
            "https://crmlanding.in/assets/images/hero/bg/autobgeff.png",
            "https://crmlanding.in/assets/images/hero/bg/rcgbgeff.png",
            "https://crmlanding.in/assets/images/hero/bg/manufactbgeff.png",
            "https://crmlanding.in/assets/images/hero/bg/finbgeff.png",
            "https://crmlanding.in/assets/images/hero/bg/realbgeff.png"
        ];

        function updateSlider() {
            circles.forEach((circle, index) => {
                const positionIndex = (index - currentIndex + circles.length) % circles.length;

                const isActive = positionIndex === 2;

                circle.classList.toggle('active', isActive);
                const circleImage = circle.querySelector('img');
                circleImage.src = isActive ? circleactiveimg[currentIndex] : inactiveImages[(currentIndex +
                    positionIndex - 2 + circles.length) % circles.length];

                circle.style.order = positionIndex;
            });

            const activeImages = images[currentIndex];
            document.getElementById('herocard1-img').src = activeImages[0];
            document.getElementById('herocard2-img').src = activeImages[1];
            document.getElementById('herocard3-img').src = activeImages[2];
            document.getElementById('herocard4-img').src = activeImages[3];
            document.getElementById('img_bg').src = bgimageline[currentIndex];
            document.getElementById('img_bgeff').src = bgeffect[currentIndex];

            document.querySelectorAll('.herocard').forEach(card => {
                card.classList.remove('active');
                void card.offsetWidth;
                card.classList.add('active');
            });
        }

        function adjustCurrentIndexForPosition3(clickedIndex) {
            const targetPosition = 2;
            currentIndex = (clickedIndex - targetPosition + circles.length) % circles.length;
            updateSlider();
        }

        circles.forEach((circle, index) => {
            circle.addEventListener('click', () => {
                adjustCurrentIndexForPosition3(index);
                resetAutoRotation();
            });
        });

        let autoRotationInterval = setInterval(() => {
            currentIndex = (currentIndex + 1) % images.length;
            updateSlider();
        }, 3000);

        function resetAutoRotation() {
            clearInterval(autoRotationInterval);
            autoRotationInterval = setInterval(() => {
                currentIndex = (currentIndex + 1) % images.length;
                updateSlider();
            }, 3000);
        }

        const container1 = document.querySelector('.container1');

        container1.addEventListener('mouseenter', () => {
            clearInterval(autoRotationInterval);
        });

        container1.addEventListener('mouseleave', () => {
            resetAutoRotation();
        });

        updateSlider();
    </script>
@endsection
