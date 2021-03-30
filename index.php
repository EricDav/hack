<?php 
    $subPath = $_SERVER['HTTP_HOST'] == 'localhost:8888' ? '/hack/' : '/hack/';
    $title = 'LegitHack | Home';
    $url = explode('?', $_SERVER['REQUEST_URI'])[0];
    if ($url == '/about') {
		$title = 'About:: LegitHack';
		include 'about.php';
		exit;
	} else if ($url == '/contact') {
		$title = 'Contact:: LegitHack';
		include 'contact.php';
		exit;
	} else if ($url == '/services') {
		$title = 'Services:: LegitHack';
		include 'services.php';
		exit;
	} else if ($url == '/sendContact') {
        include 'sendContact.php';
        exit;
    } else if ('/') {
	// pass
	} else {
		header("Location: /");
	}
?>

<!doctype html>
<html lang="zxx">

<head>
    <?php include 'head.php'; ?>
</head>

<body>
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <?php include 'header.php'; ?>
    <section class="banner-area banner-area-three jarallax">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="banner-text">
                        <span class="wow fadeInDown" data-wow-delay="1s">We are involve in all kind of hacking</span>
                        <h1 class="wow fadeInLeft" data-wow-delay="1s">Welcome to Legithack</h1>
                        <p class="wow fadeInRight" data-wow-delay="1s">We are not limited by distance, language, technological and human barriers/ uncertainties, but rather we uphold the legacy of being successful at what we do.</p>
                        <div class="banner-btn wow fadeInUp" data-wow-delay="1s">
                            <a class="default-btn" href="/contact">
                                Contact Us
                            </a>
                            <a class="default-btn active" href="/about">
                                About Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shape-1">
            <img src="<?=$subPath . 'assets/img/banner-img/home-three/shape-1.png'?>" alt="Image">
        </div>
        <div class="banner-shape-2">
            <img src="<?=$subPath . 'assets/img/banner-img/home-three/shape-2.png'?>" alt="Image">
        </div>
        <div class="banner-shape-3">
            <img src="<?=$subPath . 'assets/img/banner-img/home-three/shape-3.png'?>" alt="Image">
        </div>
    </section>

    <section class="features-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 p-0">
                    <div class="single-features">
                        <h3><i class="bx bx-check-shield"></i> Security</h3>
                        <p>We go the extra mile to ensure that all services rendered are entirely undetected and untraceable, no matter the cost.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 p-0">
                    <div class="single-features">
                        <h3><i class="bx bx-lock"></i> Awesome Support</h3>
                        <p>We work 24 hours and 7 days a week to control world wide traffic, You may reach our customer support whenever you need us.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 offset-sm-3 offset-lg-0 p-0">
                    <div class="single-features mb-0">
                        <h3><i class="bx bx-certification"></i> Industry Certified</h3>
                        <p>We are trusted body. People all over the globe have used our services and are satisfied.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="transform-area pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 pr-0">
                    <div class="transform-img">
                        <img src="<?=$subPath . 'assets/img/transform-img.jpg'?>" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6 pl-0">
                    <div class="transform-content">
                        <h2>Our Hack Rates</h2>
                        <p></p>
                        <div class="skill-bar" data-percentage="80%">
                            <h4 class="progress-title-holder">
                                <span class="progress-title">Paypal Hacking</span>
                                <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                <span class="percent"></span>
                                <span class="down-arrow"></span>
                                </span>
                                </span>
                            </h4>
                            <div class="progress-content-outter">
                                <div class="progress-content"></div>
                            </div>
                        </div>

                        <div class="skill-bar" data-percentage="95%">
                            <h4 class="progress-title-holder clearfix">
                                <span class="progress-title">Bitcoin Hack</span>
                                <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                <span class="percent"></span>
                                <span class="down-arrow"></span>
                                </span>
                                </span>
                            </h4>
                            <div class="progress-content-outter">
                                <div class="progress-content"></div>
                            </div>
                        </div>

                        <div class="skill-bar" data-percentage="75.5%">
                            <h4 class="progress-title-holder clearfix">
                                <span class="progress-title">ZELLE TRANSFER</span>
                                <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                <span class="percent"></span>
                                <span class="down-arrow"></span>
                                </span>
                                </span>
                            </h4>
                            <div class="progress-content-outter">
                                <div class="progress-content"></div>
                            </div>
                        </div>

                        <div class="skill-bar mb-0" data-percentage="95%">
                            <h4 class="progress-title-holder clearfix">
                                <span class="progress-title">Cash App Flip</span>
                                <span class="progress-number-wrapper">
                                <span class="progress-number-mark">
                                <span class="percent"></span>
                                <span class="down-arrow"></span>
                                </span>
                                </span>
                            </h4>
                            <div class="progress-content-outter">
                                <div class="progress-content"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-1">
            <img src="<?=$subPath .  'assets/img/shape/3.png'?>" alt="Image">
        </div>
        <div class="shape-2">
            <img src="<?=$subPath .  'assets/img/shape/4.png'?>" alt="Image">
        </div>
    </section>


    <section class="performance-area ptb-100">
        <div class="container">
            <div class="section-title white-title">
                <h2>What Happy Clients Are Saying</h2>
            </div>
            <div class="row">
                <div class="single-security-wrap owl-carousel owl-theme">
                    <div class="single-security">
                        <i class="flaticon-website"></i>
                        <h3>John Milner</h3>
                        <p>“The team at Legit Hack will forever be in my heart , they are great hackers with good reputation, i made a lot of BITCOINS with them from bitcoin mining, now i just bought a house of my own all thanks to Legit Hack”</p>
                    </div>
                    <div class="single-security">
                        <i class="flaticon-profile"></i>
                        <h3>Sameerah Arnord</h3>
                        <p>“Some weeks ago I contacted Legit Hack regarding getting evidence for a divorce, was fed up of the lies and cheating from my ex Husband. In Dubai you require real evidence for these as you know. So they got the job done for me within 2 hrs after making payment.Thank You Legit Hack.”</p>
                    </div>
                    <div class="single-security">
                        <i class="flaticon-cyber"></i>
                        <h3>Folan Mark</h3>
                        <p>“My son ran away from home last year, we had no where to look for him. A friend introduced me to Legit Hack, I contacted them and they took his phone number and they were able to track him in time before it was too late. Thank you very much, my family is happy because of you guys.”</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="team-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <h2>Our Proofs</h2>
                <p></p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team">
                        <div class="image">
                            <img src="<?=$subPath .  'assets/img/team/1.jpeg'?>" alt="image">
                        </div>
                        <div class="content">
                            <h3>Access Granted</h3>
                            <span>Successful Hack</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team">
                        <div class="image">
                            <img src="<?=$subPath .  'assets/img/team/2.jpeg'?>" alt="image">
                        </div>
                        <div class="content">
                            <h3>Paypal Hack</h3>
                            <span>Successful Hack</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="single-team">
                        <div class="image">
                            <img src="<?=$subPath .  'assets/img/team/3.jpeg'?>" alt="image">
                        </div>
                        <div class="content">
                            <h3>Transactions With Happy Clients</h3>
                            <span>Transactions</span>
                        </div>
                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-sm-6">
                    <div class="single-team">
                        <div class="image">
                            <video controls  width="100%">
                                <source src="<?=$subPath .  'assets/img/team/1.mp4'?>"  type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="content">
                            <h3>Denial James</h3>
                            <span>Happy Client</span>
                        </div>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="single-team">
                        <div class="image">
                            <video controls width="100%">
                                <source src="<?=$subPath .  'assets/img/team/2.mp4'?>"  type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                        <div class="content">
                            <h3>Mary Jhon</h3>
                            <span>Happy Client</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <section class="manual-area bg-color ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="manual-img">
                        <img src="<?=$subPath .  'assets/img/manual-img.png'?>" alt="Image">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="manual-content mr-auto ml-0">
                        <h2>Our Services</h2>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <ul class="cybersecurity-item">
                                    <li>
                                        <i class="bx bx-check"></i>PayPal Hack
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>Western Union Hack
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i> Bitcoin Hack
                                    </li>
                                    <li>
                                        <i class="bx bx-check"></i>Cash App Hack
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <a href="#" class="default-btn mt-30">
Know Details
</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="faq-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h2>Frequently Asked Questions</h2>
                <p>We had spent a lot of time to study, gathered experience and stayed up to date with world hacking technology. This is the right channel to hire and pay for your project anonymously. We work 24 hours and 7 days a week to meet demands from clients, You may reach our customer support whenever you need us. We provide very quick hacking services & satisfactory results with great skills, fast and unique. All you need to do is tell us your concerns and we will provide you with the fastest and most advanced efficient strategy for solving your problem. Privacy and secured communication is guaranteed.</p>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)">
<i class="fa fa-plus"></i>
HOW CAN I HIRE A HACKER FROM US?
</a>
                                <div class="accordion-content show">
                                    <p>You can hire a hacker from us by submitting a simple form with your requirements or contact us.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
                                <i class="fa fa-plus"></i>
HOW MUCH DOES THIS COST?
</a>
                                <div class="accordion-content">
                                    <p>It completely depends on hacker or service you selected.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
<i class="fa fa-plus"></i>
WHAT DETAILS DO I NEED TO PROVIDE FOR HACKING?
</a>
                                <div class="accordion-content">
                                    <p>Anything related to target will be helpful and makes the process faster, However we need data based on the request you submitted, for an example if you want to a bank transfer we will ask for your account number.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)">
<i class="fa fa-plus"></i>
HOW CAN I TRUST YOU?
</a>
                                <div class="accordion-content">
                                    <p>Our services are 100% guaranteed, carried out with utmost discretion and lethal accuracy. With over 2,000 satisfied long-term clients and years of hacking and programming experience, you can be sure of getting effective results on time, hassle free. Services can also be adapted to more effectively suit your needs. However, if the results don’t meet your expectations, you can easily request a refund.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-img">
                        <img src="<?=$subPath .  'assets/img/faq-img.jpg'?>" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.php'; ?>
    <?php include 'js.php'; ?>
</body>
</html>