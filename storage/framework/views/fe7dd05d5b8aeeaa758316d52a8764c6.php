

<?php $__env->startSection('section'); ?>
<link rel="stylesheet" href="<?php echo e(asset('css/newheader.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
<!-- Header start  -->
<header id="main-header">
    <div class="header-container service-page-header">
        <div class="logo">
            <a href="/"><img src="assest/logos/logo-blue.png" alt="Logo"></a>
        </div>
        <div class="menu-toggle">☰</div>

        <ul class="nav-menu">
            <li><a href="/">Home</a></li>

            <li class="dropdown services">
                <a id="tb" href="service" style="color: black;">Services <i
                        class="fa-solid fa-caret-down"></i></a>
                <div class="mega-menu">
                    <div class="mega-column">
                        <h3>Digital Marketing</h3>
                        <a href="/seo-services">SEO</a>
                        <a href="/pay-per-click-services">PPC Advertising</a>
                        <a href="/social-media-marketing-services">Social Media Marketing</a>
                        <a href="/content-marketing-services">Content Marketing</a>
                    </div>
                    <div class="mega-column">
                        <h3>Web Development</h3>
                        <a href="/website-development-services">Custom Website Development</a>
                        <a href="/e-commerce-solutions-services">E-commerce Solutions</a>
                        <a href="/custom-software-solutions-services">CMS Development</a>
                    </div>
                    <div class="mega-column">
                        <h3>App Development</h3>
                        <a href="/ios-android-app-development-services">iOS & Android App Development</a>
                        <a href="/hybrid-app-solutions-services">Hybrid App Solutions</a>
                    </div>
                    <div class="mega-column">
                        <h3>Software Development</h3>
                        <a href="/custom-software-solutions-services">Custom Software Solutions</a>
                        <a href="/enterprice-Software-Integration">Enterprise Software Integration</a>
                    </div>
                    <div class="mega-column">
                        <h3>Automation Services</h3>
                        <a href="/marketing-automation-services">Marketing Automation</a>
                        <a href="/workflow-automation-services">Workflow Automation</a>
                        <a href="/crm-solutions-services">CRM Solutions</a>
                    </div>
                </div>
            </li>

            <li class="dropdown">
                <a href="/#">Industries We Serve <i class="fa-solid fa-caret-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/healthcare">Healthcare</a></li>
                    <li><a href="/education">Education</a></li>
                    <li><a href="/retail-e-commerce">Retail & E-commerce</a></li>
                    <!-- <li><a href="/finance-banking">Finance & Banking</a></li> -->
                    <li><a href="/realestate">Real Estate</a></li>
                    <li><a href="/startups-small-buisnesses">Startups & Small Businesses</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="/">Case Studies <i class="fa-solid fa-caret-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/sucess-stories">Success Stories</a></li>
                    <li><a href="/#">Client Testimonials</a></li>
                    <li><a href="/#">Portfolio</a></li>
                </ul>
            </li>

            <li><a href="/blog">Blog</a></li>

            <li class="dropdown">
                <a href="/#">About Us <i class="fa-solid fa-caret-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/#">Company Overview</a></li>
                    <li><a href="/#">Mission & Vision</a></li>
                    <li><a href="/#">Team</a></li>
                    <li><a href="/#">Careers</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a href="/#">Contact Us <i class="fa-solid fa-caret-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="/contact-form">Contact Form</a></li>
                    <li><a href="/#">Office Locations</a></li>
                    <li><a href="/faq">FAQs</a></li>

                </ul>
            </li>
        </ul>
        <button class="get-in-touch"> Get in touch
        </button>
    </div>
</header>

<div class=" banner-section-serc-page">
    <div class="cta-section-service-page">
        <h1 class="cta-heading">
            Fuel Your Startup’s Growth with Tailored Business Solutions
        </h1>
        <p class="v3s-parag0apg">All the tools, guidance, and support you need to scale your business, delivered
            with a focus on growth and sustainability.</p>
        <div class="btn-service-banner">
            <a href="/#" class="cta-button">GET YOUR FREE BUSINESS PLAN</a>
        </div>
        <p class="v3s-parag0apg">See how we can help you build, grow, and thrive in today’s competitive market.

        </p>
    </div>
</div>
<div id="s1-img-container">
    <div id="image-left">
        <img src="assest/funnel-img/cms development/28.png" alt="">
    </div>
    <div id="image-right">
        <img src="assest/funnel-img/cms development/36.png" alt="">
    </div>
</div>

<div class="services-page-cards">
    <div class="views3-section">
        <h2 class="v3s-heading">Frequently Answered <span style="color: #03a4e3;">Questions</span>
        </h2>
        <!-- <p class="v3s-parag0apg">Hybrid App Demystified</p> -->
        <br><br><br>
    </div>
    <div id="stats-conainer">
        <div id="stats-item">
            <h2>90%</h2>
            <h3>Client Satisfaction Rating</h3>
        </div>
        <div id="stats-item">
            <h2>1 million+</h2>
            <h3>Leads Driven for Clients</h3>
        </div>
        <div id="stats-item">
            <h2>1 million+</h2>
            <h3>Leads Driven for Clients</h3>
        </div>
        <div id="stats-item">
            <h2>1 million+</h2>
            <h3>Leads Driven for Clients</h3>
        </div>
    </div>
    <br><br><br>
    <div #swiperRef="" class="swiper mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div id="cart-top-cont">
                    <img src="assest/funnel-img/sucess stories/1.png" alt="">
                    <h2>CHALLENGE</h2>
                    <p>Client spent £3000 on Shopify but failed to add a custom webhook, hurting efficiency and
                        sales.</p>
                </div>
                <br>
                <div id="cart-mid-cont">
                    <h2>APPROACH</h2>
                    <ul>
                        <li>Custom webhook integration</li>
                        <li>Accurate car model display</li>
                        <li>Improved user experience</li>
                    </ul>
                </div>
                <br>
                <div id="cart-bot-cont">
                    <h2>Rating ★★★★★</h2>
                    <p><br></p>
                </div>
                <div id="least">
                    <p id="percentage">100%</p>
                    <p id="justification">increase in lead</p><br>
                    <a href="/case-studys">Check out<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div id="cart-top-cont">
                    <h2>hemlo domst</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <br>
                <div id="cart-mid-cont">
                    <h2>hemlo domst</h2>
                    <ul>
                        <li>Just a Flex</li>
                        <li>Just a Flex</li>
                        <li>Just a Flex</li>
                    </ul>
                </div>
                <br>
                <div id="cart-bot-cont">
                    <h2>Rating ★★★★★</h2>
                    <p><br></p>
                </div>
                <div id="least">
                    <p id="percentage">100%</p>
                    <p id="justification">increase in lead</p><br>
                    <a href="/brisbane-cup">Check out<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div id="cart-top-cont">
                    <h2>SnapSend</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <br>
                <div id="cart-mid-cont">
                    <h2>hemlo domst</h2>
                    <ul>
                        <li>Just a Flex</li>
                        <li>Just a Flex</li>
                        <li>Just a Flex</li>
                    </ul>
                </div>
                <br>
                <div id="cart-bot-cont">
                    <h2>Rating ★★★★★</h2>
                    <p><br></p>
                </div>
                <div id="least">
                    <p id="percentage">100%</p>
                    <p id="justification">increase in lead</p><br>
                    <a href="/Snapsend">Check out<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="swiper-slide">
                <div id="cart-top-cont">
                    <h2>hemlo domst</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <br>
                <div id="cart-mid-cont">
                    <h2>hemlo domst</h2>
                    <ul>
                        <li>Just a Flex</li>
                        <li>Just a Flex</li>
                        <li>Just a Flex</li>
                    </ul>
                </div>
                <br>
                <div id="cart-bot-cont">
                    <h2>Rating ★★★★★</h2>
                    <p><br></p>
                </div>
                <div id="least">
                    <p id="percentage">100%</p>
                    <p id="justification">increase in lead</p><br>
                    <a href="/">Check out<i class="fa-solid fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div> -->


</div>


<!-- end  -->

<div class="CTA_page_section">
    <div class="cta-section">
        <h1 class="cta-heading">
            Ready to Build a High-Impact Hybrid App?

        </h1>
        <a href="/#" class="cta-button">Let’s build something amazing together. Get in touch today!
        </a>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 2,
        spaceBetween: 60,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

    const accordionBtns = document.querySelectorAll(".accordion-title");

    accordionBtns.forEach((accordion) => {
        accordion.onclick = function() {
            this.classList.toggle("active");

            let content = this.nextElementSibling;

            if (content.style.maxHeight) {
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        };
    });
</script>
<script src="<?php echo e(asset('js/newheader.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/structure', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH F:\xampp\htdocs\itsoftexpert\resources\views/sucess-stories.blade.php ENDPATH**/ ?>