<!DOCTYPE html>
<html lang="en">
<?
    extract($_GET);
    extract($_POST);
    error_reporting(0);

    define('include', "true" );
    include_once("ajaxload/conection.php");
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta property="og:title" content="International Conference on ICT for Rural Development 2018" />
    <meta property="og:description" content="International Conference on ICT for Rural Development 2018" />
    <meta property="og:url" content="https://conference.kominfo.go.id/ictrudev2018/" />

    <meta property="og:image" content="https://conference.kominfo.go.id/ictrudev2018/static/img/RUDEVIEEEICO.png">
    <meta property="og:image:secure_url" content="https://conference.kominfo.go.id/ictrudev2018/static/img/RUDEVIEEEICO.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="254" />
    <meta property="og:image:height" content="254" />

    <title>International Conference ICT Rural Development 2021 - MCI RI</title>
    <!-- / -->

    <!---Font Icon-->
    <link href="static/plugin/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
    <link href="static/plugin/et-line/style.css" rel="stylesheet">
    <link href="static/plugin/themify-icons/themify-icons.css" rel="stylesheet">
    <!-- / -->

    <!-- Plugin CSS -->
    <link href="static/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
    <!-- / -->

    <!-- Theme Style -->
    <link href="static/css/styles.css" rel="stylesheet">
    <link href="static/css/color/color-5.css" rel="stylesheet" id="color_theme">
    <!-- / -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon.ico">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="images/favicon.ico">

    <!-- / -->
    <script async src="https://static.addtoany.com/menu/page.js"></script>

    <style>
        /* Fading animation */
        .mySlides {display: none;}

        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 4.5s;
            animation-name: fade;
            animation-duration: 4.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .8}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .8}
            to {opacity: 1}
        }

    </style>
</head>


<!-- Body Start -->
<body data-spy="scroll" data-target="#navbarHeader" data-offset="100">

<!-- Loading -->
<div id="loading" class="loader-wrapper theme-g-bg">
    <div class="center">
        <div class="d d1"></div>
        <div class="d d2"></div>
        <div class="d d3"></div>
        <div class="d d4"></div>
        <div class="d d5"></div>
    </div>
</div>


<!-- / -->

<!-- Header -->
<header class="header header-01">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <!-- Brand -->
            <a class="navbar-brand" href="#"><img src="static/img/RUDEVIEEE.png" title="" alt=""></a>
            <!-- / -->

            <!-- Mobile Toggle -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <!-- / -->

            <!-- Top Menu -->
            <div class="collapse navbar-collapse justify-content-end" id="navbarHeader">
                <ul class="navbar-nav ml-auto">
					<li><a class="nav-link" href="#about">About</a></li>
                    <li><a class="nav-link" href="#speakers">Speakers</a></li>
					<li><a class="nav-link" href="#cfp">Call For Paper</a></li>
                    <!-- <li><a class="nav-link" href="https://k-cloud.kominfo.go.id/s/ictrudev2018">Download</a></li> -->
                    <li><a class="nav-link" href="#guide">Guidelines</a></li>
                    <li><a class="nav-link" href="#importantdate">Date</a></li>
                    <li><a class="nav-link" href="#venue">Events</a></li>
                    <li><a class="nav-link" href="#organizer">Committees</a></li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Registration</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#registration1">Presenter Registration</a>
                            <a class="dropdown-item" href="#registration2">Participant Registration</a>
                        </div>
                    </li>
                    <!-- <li><a class="nav-link" href="login.php">Login</a></li> -->
                </ul>
            </div>
            <!-- / -->
        </nav> <!-- Navbar -->
    </div>
</header>
<!-- Header End -->

<!-- Main Start -->
<main>

    <!-- Home Banner -->
    <section id="home-box" class="home-banner-01 theme-after-bg grey-bg">
        <div class="container">
            <div class="row full-screen align-items-center p-100px-tb">
                <div class="col-md-6 ">
                    <div class="home-left">
                        <span>&nbsp;</span>
                        <h1 class="font-alt">ICT for Rural Development: Digital Economy and Human Resource Development </h1>
                        <p style="font-weight: 500;">2021 2<sup>nd</sup> ICT RuDev is the second international conference on ICT Rural for Development organized by ICT Research and Human Resource Development Agency, Ministry of Communications and Informatics (<a href="https://www.kominfo.go.id/" target="_blank" style="font-weight: bold; color: #003c76;">Kemkominfo</a>), Republic of Indonesia. IC-ICTRuDev is intended to gather researchers, academics, engineers, scholars and practitioners to present and exchange recent ideas, innovations and developments regarding the use and implications of ICT in rural development. The conference is technically co-sponsored by IEEE Indonesia Section.</p>
                        <p style="font-weight: bold">IEEE Conference ID: <a href="https://conferences.ieee.org/conferences_events/conferences/conferencedetails/50538" style="color: #003c76" target="_blank">#50538</a></p>
                        <a href="http://ieee.id/"><img src="static/img/IEEE%20indo%20sponsor.png"/></a>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mySlides fade">
                        <img src="static/img/1.png" style="width:120%; max-width: 150%;">
                    </div>

                    <div class="mySlides fade">
                        <img src="static/img/2.png" style="width:120%; max-width: 150%;">
                    </div>

                    <div class="mySlides fade">
                        <img src="static/img/3.png" style="width:120%; max-width: 150%;">
                    </div>

                    <div class="mySlides fade">
                        <img src="static/img/4.png" style="width:120%; max-width: 150%;">
                    </div>

                    <script>
                        var slideIndex = 0;
                        showSlides();

                        function showSlides() {
                            var i;
                            var slides = document.getElementsByClassName("mySlides");
                            for (i = 0; i < slides.length; i++) {
                                slides[i].style.display = "none";
                            }
                            slideIndex++;
                            if (slideIndex > slides.length) {slideIndex = 1}
                            slides[slideIndex-1].style.display = "block";
                            setTimeout(showSlides, 4321); // Change image every 2 seconds
                        }
                    </script>
                    <!--
                    <img src="static/img/balicolage.png" title="" alt="">
                    -->
                </div>
            </div>
        </div> <!-- container -->
    </section>

    <!-- About -->
    <section id="about" class="section-clients section grey-bg border-top-grey">
        <div class="container">
            <div class="row justify-content-center title-section m-60px-b sm-m-40px-b">
                <div class="col-md-8 col-lg-5 text-center">
                    <h2 class="font-alt">About the conference</h2>
                    <p></p>
                </div> <!-- col -->
            </div>

            <div class="row align-items-center">

                <div class="col-md-8 sm-m-30px-t">
                    <div class="std-box p-50px-l md-p-0px-l">
                        2021 2nd ICT RuDev is the second international conference on ICT Rural for Development organized by ICT Research and Human Resource Development Agency, Ministry of Communications and Informatics (Kemkominfo), Republic of Indonesia. This conference is technically sponsored by IEEE Indonesia section. The initial conference was held in 2018 in Bali, Indonesia. This conference was attended by high reputable speakers in government, industry, and academics. Many good ideas, knowledge, experiences have been shared and learned during the conference, both in plenary sessions and parallel sessions. Main issues addressed at the conference are related to ICT infrastructure and application for rural development, ICT ecosystem, and also social implications of ICT in rural development. These of course will be beneficial for MCIT Indonesia as well as for each of us in efforts to develop rural areas through the use of ICT corresponding to respective roles and competences 
                    </div> <!-- / -->
                </div> <!-- col -->

                <div class="col-md-4 text-center effect-main">
                    <img src="static/img/ICTRudev 2.png" style="width:80%;">
                </div> <!-- col -->
            </div>

        </div> <!-- container -->
    </section>
    <!-- / -->
    
    <!-- Speaker -->
    <section id="speakers"  class="section grey-bg border-top-grey">
        <div class="container ">
            <br/><br/>
            <div class="row justify-content-center title-section m-60px-b sm-m-40px-b">
                <div class="col-md-8 col-lg-8 text-center">
                    <h2 class="font-alt">Keynote Speakers</h2>
                    <img src="static/img/lecture.png"/>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-11 col-xs-12">
                    <div class="testimonial-col theme-after">
                        <div class="avtar-box">
                                <span class="avtar">
                                    <img src="static/img/joni.jpg" alt="Johnny Gerard Plate" title="Johnny Gerard Plate" />
                                </span>
                            <h6><label>Johnny Gerard Plate (TBC)</label><span>Minister of Communications and Informatics of Indonesia</span></h6>
                        </div>
                        <div class="speac">
                            <p>Johnny Gerard Plate, born in Ruteng, East Nusa Tenggara in 1956. He graduated from Catholic University Atmajaya Jakarta on 1986 on Economics. He was formerly House of Representatives of The Republic of Indonesia before apointed as Minister of Communication and Informatics Indonesia.</p>
                        </div>
                    </div> <!-- col -->
                </div>

                <div class="col-12 col-md-11 col-xs-12">
                    <div class="testimonial-col theme-after">
                        <div class="avtar-box">
                                <span class="avtar">
                                    <img src="static/img/hary.jpeg" alt="Hary Budiarto" title="Hary Budiarto" />
                                </span>
                            <h6><label>Dr. Hary Budiarto M.Kom (TBC)</label><span> Kepala Badan Penelitian dan Pengembangan Sumber Daya Manusia</span></h6>
                        </div>
                        <div class="speac">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit . Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-11 col-xs-12">
                    <div class="testimonial-col theme-after">
                        <div class="avtar-box">
                                <span class="avtar">
                                    <img src="static/img/wahyudi.jpeg" alt="Wahyudi Hasbi" title="Wahyudi Hasbi" />
                                </span>
                            <h6><label>Wahyudi Hasbi (TBC)</label><span>Indonesian National Institute of Aeronautics and Space | LAPAN · Satellite Technology Center</span></h6>
                        </div>
                        <div class="speac">
                            <p>He was a member of the principal engineer in the LAPAN-TUBSAT satellite. He was appointed as System Engineer and Chief Engineer respectively in the development of LAPAN-A2/LAPAN-ORARI (2010-2013) and LAPAN-A3/IPB (2013-2016) satellites in Indonesia, which are in orbit since 2015. He is a Senior Member of IEEE in Aerospace & Electronics Systems & Computer Society. He is currently Chair of IEEE Indonesia Section Elect 2021. His main research interests in microsatellite system engineering.</p>
                        </div>
                    </div>
                </div> 

                <div class="col-12 col-md-11 col-xs-12">
                    <div class="testimonial-col theme-after">
                        <div class="avtar-box">
                                <span class="avtar">
                                    <img src="static/img/Anang_Achmad_Latif_-_BP3TI.jpg" alt="Anang Latif" title="Anang Latif" />
                                </span>
                            <h6><label>Anang Latif (TBC)</label><span>Executive Director, BAKTI</span></h6>
                        </div>
                        <div class="speac">
                            <p>Anang Achmad Latif is a civil servant who specialized in communications and informatics fields. He started his career as Radio Spectrum Frequency planner at the Ministry of Communications and Informatics of the Republic of Indonesia. He was trusted to manage ICT infrastructure development in the Ministry. He, who was born in Bandung (West Java), graduated in Electronic Engineering at Institut Teknologi Bandung and completed his Master of Science degree in Operational Telecommunications major at Coventry University (London). He also known internationally as he served as Chairman of Special Task Force on digital TV Implementation between Indonesia, Malaysia, and Singapore in 2009-2011. He also is a member of the ASEAN Digital Broadcasting from 2009 until present. In June 2016, he was promoted as Director of Balai Penyedia and Pengelola Pembiayaan Telekomunikasi dan Informatika (BP3TI) or known as BAKTI, a unit under the Ministry of Communication and Informatics which manage Universal Service Obligation or USO.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-11 col-xs-12">
                    <div class="testimonial-col theme-after">
                        <div class="avtar-box">
                                <span class="avtar">
                                    <img src="static/img/bohlin.jpg" alt="Erik Bohlin" title="Erik Bohlin" />
                                </span>
                            <h6><label>Erik Bohlin (TBC)</label><span>Chalmers University of Technology, Sweden </span></h6>
                        </div>
                        <div class="speac">
                            <p>Erik Bohlin is Professor at the Department of Technology Management & Economics at Chalmers University of Technology. He has published in a number of areas relating to the information society - policy, strategy, and management. He is Editor-in-Chief of The Journal of Telecommunications Policy. He obtained his graduate degree in Business Administration and Economics at the Stockholm School of Economics (1987) and his Ph.D. at Chalmers University of Technology (1995).</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-11 col-xs-12">
                    <div class="testimonial-col theme-after">
                        <div class="avtar-box">
                                <span class="avtar">
                                    <img src="static/img/alexander.png" alt="Alexander J.A.M. van Deursen" title="Alexander J.A.M. van Deursen" />
                                </span>
                            <h6><label>Alexander J.A.M. van Deursen (TBC)</label><span>University of Twente, Netherlands</span></h6>
                        </div>
                        <div class="speac">
                            <p>As a professor of communication science at the technical University of Twente, Alexander van Deursen is interested in the role of technology in the processes of human communication and in ensuring that technology development is at the service of people. He is especially known for evaluating the contribution of technological developments within debates on inclusive societies. In a scientific manner, Alexander maps barriers of technology engagement – for example using his widely acknowledged framework of digital skills – and explains differences in the positive and negative outcomes that people receive from engagement with (emerging) Internet technology. He is interested in how different people appropriate technology into daily life, and under what conditions technology actually can be used to improve wellbeing. Alexander has published widely in communication science journals that critically discuss key issues arising from the scale and speed of technology development. His publications on digital skills and digital inequality have won awards as best dissertation worldwide on technology and communication from the International Communication Association, best dissertation in communication science in the Benelux from the Netherlands School of Communication Research, best paper award from the International Communication Association, and the UT in the Media award from the University of Twente.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-11 col-xs-12">
                    <div class="testimonial-col theme-after">
                        <div class="avtar-box">
                                <span class="avtar">
                                    <img src="static/img/sara.jpg" alt="Sara Bice" title="Sara Bice" />
                                </span>
                            <h6><label>Sara Bice (TBC)</label><span>The Australian National University, Canberra</span></h6>
                        </div>
                        <div class="speac">
                            <p>Sara Bice is Professor at the Crawford School of Public Policy, The Australian National University.  She is Vice Chancellor’s Futures Scheme Senior Fellow for her work on The Next Generation Engagement program, Australia’s largest study into community engagement in infrastructure, to date. She is President of the International Association for Impact Assessment, the world’s leading organisation for impact assessment practitioners, researchers and clients, representing almost 7,000 members in 120 different countries. Sara is Associate Professor (Special International Guest) at the School of Public Policy and Management, Tsinghua University, Beijing. Sara is an award-winning author and her latest co-edited book, Public Policy in the Asian Century is available from Palgrave Macmillan.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->


    </section>
    <!-- / -->

    <!-- Call for Paper Start -->
    <section id="cfp" class="section grey-bg border-top-grey">
        <div class="container">
            <div class="row justify-content-center title-section m-60px-b sm-m-40px-b">
                <div class="col-md-8 col-lg-8 text-center">
                    <h2 class="font-alt">Call for Paper</h2>
                    <strong>Paper submission deadline: <!-- August
                        <del style="text-decoration: line-through blue; text-decoration-style: double">1<sup>st</sup></del>
                        <del style="text-decoration: line-through blue; text-decoration-style: double">17<sup>th</sup></del>
                        27<sup>th</sup> (extended)--> July 18<sup>th</sup>, 2021</strong>
                </div> <!-- col -->
            </div>


            <div class="row">
                <div class="col-md-12">
                    <div class="feature-box m-30px-b">
                        <div class="f-icon" style="text-align: center;"><i class="icon-genius"></i></div>
                        <h4 class="font-alt" style="text-align: center;">Accepted Topics</h4>
                        <p>
                            Prospective authors are invited to submit full-length papers, with up to six pages for technical content including figures and possible references. Topics of interest include, but are not limited to the following areas:
                        </p>
                        <strong>ICT for empowering Human Resources in Rural development (HR)</strong>
                        <ul>
                            <li>ICT Innovation ecosystem for rural development,</li>
                            <li>ICT competencies for Making Indonesia 4.0,</li>
                            <li>The use of ICT to develop smart village,</li>
                            <li>Technology adoption for human resources management,</li>
                            <li>Digital learning system for rural communities,</li>
                            <li>ICT for educational support,</li>
                            <li>Mobile learning,</li>
                            <li>Pentahelix collaboration tools for rural human resource development (actor networks, ICT talent),</li>
                            <li>ICT for community productivity</li>
                        </ul>
                        <strong>Digital Economy and Ecosystem for Rural Development (DE)</strong>
                        <ul>
                            <li>ICT Policies for Rural development,</li>
                            <li>ICT framework for digital economy,</li>
                            <li>Smart governance,</li>
                            <li>E-government,</li>
                            <li>E-Commerce ( services, logistics, market place),</li>  
                            <li>Digital Inclusion and Convergence Technology,</li>
                            <li>ICT Technologies and Financial Innovations (Peer to peer lending system application, crowd funding, financial inclusions, etc),</li>
                            <li>ICT Collaboration tools,</li>
                            <li>Emerging technologies (IoT, Artificial Intelligence, Block chain Technology, Machine Learning, etc),</li>
                            <li>Next Generation Telecommunication (5G, OpenRan),</li>
                            <li>Digital Broadcasting for Rural Development,</li> 
                            <li>Knowledge Management,</li> 
                            <li>Telecommunication and informatics application,</li>
                            <li>ICT for Agricultural technology,</li>
                        </ul>
                        <strong>Social and Cultural Implications of ICT for Rural Development (SC)</strong>
                        <ul>
                            <li>Humanitarian technology,</li> 
                            <li>Privacy and security,</li>
                            <li>Economic, health, and safety implications of technology,</li>
                            <li>Healthcare technologies and impact,</li>
                            <li>Social issues of ICT (social media evaluation, social technology, social informatics),</li>
                            <li>Digital transformation (society 5.0, cultural shifting),</li>
                            <li>Other implication of ICT (specific ICT implementation in rural areas),</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>
    <!-- / -->

    <!-- Author Guidelines Start -->
    <section id="guide" class="section grey-bg border-top-grey">
        <div class="container">
            <div class="row justify-content-center title-section m-60px-b sm-m-40px-b">
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="feature-box m-0px-b">
                        <div class="f-icon" style="text-align: center"><i class="icon-documents"></i></div>
                        <h4 class="font-alt" style="text-align: center">Author Guidelines</h4>
                        <p>
                            <strong>Paper Format</strong> - Papers submitted for IC-ICTRuDev 2021 should be up to 6 pages of text including figures and possible references. The authors are responsible to ensure that the submitted papers are in the correct styles, fonts, etc. The submitted papers must be in the PDF format.</p>
                        <p>
                            <strong>Template</strong> - The Style Manual and Conference Paper templates in various formats are available <a href="http://www.ieee.org/conferences_events/conferences/publishing/templates.html" target="_blank">here</a>. <br />
                            <br />
                            <strong>Use PDF eXpress Format</strong> - Before submitting your papers, please use IEEE PDF eXpress to comply with IEEE requirements: (<a href="https://www.pdf-express.org/" target="_blank">PDF eXpress</a>) Conference ID: <b>50538X</b>
                            <br/>Below, we provide information to create your PDF eXpress documents.
                            <br/>
                            <br/>
                            <strong>Step by Step Creating Your PDF eXpress Account</strong>:
                        <ul>
                            <li>Go to IEEE - PDF eXpress site: <a href="https://www.pdf-express.org/" target="_blank">PDF eXpress</a></li>
                            <li>Select the New Users - Click Here link.</li>
                            <li>Enter the following: </li>
                            <ul>
                                <li><b>50538X</b> for the Conference ID</li>
                                <li>your email address</li>
                                <li>a password</li>
                            </ul>
                            <li>Continue to enter information as prompted.</li>
                            <li>An Online confirmation will be displayed and an email confirmation will be sent verifying your account setup.</li>
                            <li>Log in to your PDF eXpress account and follow the instructions.</li>
                        </ul>
                        <br/>
                        <strong>Paper Submission Procedure</strong> - Submit your papers in pdf format through EDAS system (<a href="https://edas.info/N28327" target="_blank">https://edas.info/N28327</a>)
                        </p>
                        <p>
                            <strong>Non-presented Paper Policy </strong>
                            IEEE reserves the right to exclude a paper from distribution after the conference, including IEEE Xplore Digital Library, if the paper is not presented by the author at the conference.
                        </p>
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>
    <!-- / -->

    <!-- Important Date & Programme -->
    <section id="importantdate" class="section grey-bg border-top-grey">
        <div class="container">
            <div class="row justify-content-center title-section m-60px-b sm-m-40px-b">
                <div class="col-md-8 col-lg-8 text-center">
                    <h2 class="font-alt">Important Date & Programme</h2>
                </div> <!-- col -->
            </div>
            <div class="tab-style-1">
                <ul class="nav nav-fill" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="active" id="importantdatetab-tab" data-toggle="tab" href="#importantdatetab" role="tab" aria-controls="importantdatetab" aria-selected="true">
                            Important Date
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a id="profile-tab" data-toggle="tab" href="#profilea" role="tab" aria-controls="profilea" aria-selected="false">
                            Programme
                        </a>
                    </li> -->
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane p-80px-t fade show active" id="importantdatetab" role="tabpanel" aria-labelledby="importantdatetab-tab">
                        <div class="row justify-content-center title-section m-60px-b sm-m-40px-b">
                            <div class="col-md-4 col-lg text-center">
                                <div class="clients-list clients-border clients-col-1">
                                    <br>
                                    <h5 style="text-align: center"><b>Important Date</b></h5><br>
                                    <ul>
                                        <!-- <li style="background: #808080;"> -->
                                        <li>
                                            <!-- <strong style="font-size: 14px"> -->
                                            <strong >
                                            <!--August
                                                <del style="text-decoration: line-through blue; text-decoration-style: double">1<sup>st</sup></del>
                                                <del style="text-decoration: line-through blue; text-decoration-style: double">17<sup>th</sup></del>
                                                27<sup>th</sup> (extended)--> July 18<sup>th</sup>, 2021</strong>
                                            <br>
                                            <!-- <span style="font-size: 12px">Deadline for paper submission</span> -->
                                            Deadline for paper submission
                                            <br>
                                            <div class="fas fa-angle-down fa-2x"></div><br/>
                                            <!--
                                            <div class="fas fa-angle-down fa-4x"></div><br/>
                                            <a href="https://www.pdf-express.org/" target="_blank">
                                                <button class="m-btn-theme" disabled>Convert PDF here</button>
                                            </a>
                                            &nbsp;&nbsp;&nbsp;
                                            <a href="https://edas.info/N24660" target="_blank">
                                                <button class="m-btn-theme" style="background-color: #868e96;" disabled>Submit here</button>
                                            </a>
                                            -->
                                        </li>
                                        <!-- <li style="background: #808080;"> -->
                                        <li>
                                            <!-- <strong style="font-size: 14px; font-weight: bold;">September 27<sup>th</sup>, 2021</strong> -->
                                            <strong >September 27<sup>th</sup>, 2021</strong>
                                            <br>
                                            <!-- <span style="font-size: 12px">Notification of accepted paper</span> -->
                                            Notification of accepted paper
                                            <br>
                                            <div class="fas fa-angle-down fa-2x"></div>
                                        </li>
                                        <li>
                                            <!-- <strong style="font-size: 26px; font-weight: bold;">October 15<sup>th</sup>, 2021</strong> -->
                                            <strong>October 15<sup>th</sup>, 2021</strong>
                                            <br>
                                            <!-- <span style="font-size: 22px">Deadline for final manuscript submission</span> -->
                                            Notification of accepted paper
                                            <br>
                                            <div class="fas fa-angle-down fa-2x"></div>
                                        </li>
                                        <li>
                                            <strong>October 20<sup>th</sup>, 2021</strong>
                                            <br>
                                            Deadline for author registration
                                            <br>
                                            <div class="fas fa-angle-down fa-2x"></div>
                                        </li>
                                        <li>
                                            <strong>October 27<sup>th</sup>-28<sup>th</sup>, 2021</strong>
                                            <br>
                                            Conference event
                                            <br>
                                            <img src="static/img/conferencestar64.png"/>
                                        </li>
                                    </ul>
                                </div>
                            </div> <!-- col -->
                        </div> <!-- row -->
                    </div>
                    <div class="tab-pane p-80px-t fade" id="profilea" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="col-md-12 col-lg-12">
                            <div class="clients-list clients-border clients-col-1">
                                <br>

                                <h5 style="text-align: center">Programme (tentative)</h5><br>
                                <table border="0" width="100%" style="vertical-align: top;">
                                    <tr>
                                        <td width="25%" align="center">&nbsp;

                                        </td>
                                        <td width="75%">
                                            <b>Day 1: Wednesday, October 17<sup>th</sup>, 2018</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center">
                                            08.00–09.00
                                        </td>
                                        <td>
                                            <b>Registration</b>
                                        </td>
                                    </tr>
                                    <tr >
                                        <td align="center" rowspan="6" style="vertical-align: top;">
                                            09.00–09.30
                                        </td>
                                        <td>
                                            <b>Opening Ceremony</b><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>National anthem “Indonesia Raya”</b><br>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Report Speech from General Chair of IC-ICTRuDev 2018</b><br>
                                            <i>Dr. Wiryanta, MA.</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Welcome speech from IEEE Indonesia Section</b><br>
                                            <i>Prof.Dr.Fitri Yuli Zulkifli, M.Sc</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Opening Remarks from Head of ICT Research and Human Resource Agency</b><br>
                                            <i>Dr. Basuki Yusuf Iskandar, MA.</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <b>Traditional dance</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="vertical-align: top;">
                                            09.30–10.00
                                        </td>
                                        <td>
                                            <b>Keynote Speech 1: "ICT Rural Development in Indonesia"</b><br>
                                            <i>Rudiantara (Minister of Communications and Informatics, Republic of Indonesia)</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="vertical-align: top;">
                                            10.00–10.30
                                        </td>
                                        <td>
                                            <b>Keynote Speech 2: "Global Best Practices in ICT Rural Development"</b><br>
                                            <i>Helani Galpaya (CEO LIRNEasia, Sri Lanka)</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="vertical-align: top;">
                                            10.30–11.30
                                        </td>
                                        <td>
                                            <b>Keynote Speech 3: "Challenges and Solutions to ICT Deployment in Rural Area"</b><br>
                                            <i>Prof. Wataru Imajuku  (Kindai University, Japan)</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="vertical-align: top;">
                                            11.30–12.00
                                        </td>
                                        <td>
                                            <b>Questions and Answers Session</b><br>
                                            <i>Dr. Sigit / Prof. Kalamullah Ramli (Universitas Indonesia, Indonesia)</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="vertical-align: top;">
                                            12.00–13.00
                                        </td>
                                        <td>
                                            <b>Break</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="vertical-align: top;">
                                            13.00–16.30
                                        </td>
                                        <td>
                                            <b>Parallel Session Presentation of Selected Papers (Day 1-3 Tracks)<br>
                                                Track 1: "ICT Infrastructure and Application for Rural Development"</b><br>
                                            <i>Moderator: Dr. Didi Rosyiadi (LIPI)</i>
                                            <br><br>
                                            <b>Track 2: "ICT Ecosystem for Rural Development"</b><br>
                                            <i>Moderator: Edi Kurniawan (LIPI)</i>
                                            <br><br>
                                            <b>Track 3: "Social Economic Implications of ICT in Rural Development"</b><br>
                                            <i>Moderator: Dr. Suryanegara (Universitas Indonesia)</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="vertical-align: top;">
                                            16.30–18.30
                                        </td>
                                        <td>
                                            <b>Free Programe </b></td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="vertical-align: top;">
                                            18.30–21.00
                                        </td>
                                        <td>
                                            <b>Gala Dinner</b>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <hr>
                                <br>
                                <table width="100%">
                                    <tr>
                                        <td width="25%" align="center">&nbsp;

                                        </td>
                                        <td width="75%">
                                            <b>Day 2: Thursday, October 18<sup>th</sup>, 2018</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="vertical-align: top;">
                                            09.00–11.00
                                        </td>
                                        <td>
                                            <b>Plenary Session <br>
                                                "Addressing the ICT Sustainable Ecosystem and Maximizing Its Impact in Rural"
                                            </b><br>
                                            <br>
                                            Speakers:<br>
                                            <i>
                                                1. Prof. Wolfgang Dechsler (Tallinn University of Technology, Estonia)<br>
                                                2. Dr. Roger W. Harris (Universiti Malaysia Sarawak, Malaysia)<br>
                                                3. Agus Witjaksono Sulistya R. (Vice President Network Deployment and Services, Telkomsel)<br>
                                                4. Anang Latif, Direktur Utama BAKTI<br>
                                                5. Dr. Masugi Inoue (NICT, Japan)<br>
                                            </i>
                                            <br>
                                            <i>Moderator: Prof. Ris. Gati Gayatri (Kominfo)</i>
                                        </td>
                                    </tr>
                                    <tr >
                                        <td align="center" style="vertical-align: top;">
                                            11.00–12.00
                                        </td>
                                        <td>
                                            <b>Discussion</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="vertical-align: top;">
                                            12.00–13.00
                                        </td>
                                        <td>
                                            <b>Break</b>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="vertical-align: top;">
                                            13.00–16.30
                                        </td>
                                        <td>
                                            <b>Parallel Session Presentation of Selected Papers (Day 2-3 Tracks)<br>
                                                Track 1: "ICT Infrastructure and Application for Rural Development"</b><br>
                                            <i>Moderator: Satrio Darmanto (IEEE Indonesia)</i>
                                            <br>
                                            <br>
                                            <b>Track 2: "ICT Ecosystem for Rural Development"</b><br>
                                            <i>Moderator: Dr. Dedi Permadi  (MCI/UGM)</i>
                                            <br><br>
                                            <b>Track 3: "Social Economic Implications of ICT in Rural Development"</b><br>
                                            <i>Moderator: Dr. Ashwin Sasongko, M.Sc.(LIPI)</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="vertical-align: top;">
                                            16.30–17.00
                                        </td>
                                        <td>
                                            <b>Closing Remarks & Announcement of Best Paper</b><br>
                                            <i>Dr. Wiryanta, MA.</i>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td align="center" style="vertical-align: top;">
                                            17.00
                                        </td>
                                        <td>
                                            <b>Free Program</b>
                                        </td>
                                    </tr>
                                </table>
                                <br>
                                <hr>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The time table above is tentative and subject to change. Please keep yourself updated by visiting this page periodically
                                <br>
                                <br>
                            </div> <!-- col -->
                        </div> <!-- row -->
                    </div>

                    <div class="tab-pane p-80px-t fade" id="contacta" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="row align-items-center">
                            <div class="col-md-6 text-center">
                                <img class="img-shadow" src="static/img/550x500.jpg" title="" alt="">
                            </div> <!-- col -->

                            <div class="col-md-6 sm-m-40px-t">
                                <div class="std-box p-50px-l md-p-0px-l">
                                    <div class="title-section  m-20px-b">
                                        <h2 class="font-alt left">Micor Overview</h2>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>

                                    <p class="m-30px-b">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                                    <a href="#" class="m-btn-theme">More Feature</a>
                                </div> <!-- / -->
                            </div> <!-- col -->
                        </div> <!-- row -->
                    </div>
                </div> <!-- Tab Content -->
            </div> <!-- Tab style -->
        </div>
    </section>
    <!--  -->

    <!-- Venue -->
    <section id="venue" class="section-clients section grey-bg border-top-grey">
        <div class="container">
            <div class="row justify-content-center title-section m-60px-b sm-m-40px-b">
                <div class="col-md-8 col-lg-5 text-center">
                    <h2 class="font-alt">Event</h2>
                    <p></p>
                </div> <!-- col -->
            </div>

            <div class="row align-items-center">

                <div class="col-md-6 sm-m-30px-t">
                    <div class="std-box p-50px-l md-p-0px-l">
                        <div class="title-section  m-20px-b">
                            <h5 class="font-alt left">PRESENTERS (ORAL PRESENTATION) – LIVE ZOOM PRESENTATION</h5>
                            <p>Opportunity to do a Live Zoom Presentation at the Conference. Each Presenter will get 15 Minutes for their Presentation and 05 Minutes for Q&A Session. Once a session has concluded, the video will be available on-demand for one month.</p>
                            <hr/>
                            <h5 class="font-alt left">PRESENTERS (ORAL PRESENTATION) – PRE RECORDED VIDEO OPTION</h5    >
                            <p>This Option is for the Participants who would like to Record the Presentation and play it than Presenting Live at the Conference. The Presenter can record the 15 Minutes Video Presentation and send it to us. (The Video should be 15 minutes or lesser.) The Organizing Committee will play the Video in your Presentation Slot. You should be present during your slot, especially for the Q&A Session.</p>
                        </div>
                        
                    </div> <!-- / -->
                </div> <!-- col -->

                <div class="col-md-6 text-center effect-main">
                    <img src="static/img/final zoom.jpg">'
                </div> <!-- col -->
            </div>

        </div> <!-- container -->
    </section>
    <!-- / -->

    <!-- Organizer -->
    <section id="organizer" class="section testimonial-section grey-bg border-top-grey">
        <div class="container">
            <div class="row justify-content-center title-section m-60px-b sm-m-40px-b">
                <div class="col-md-8 col-lg-8 text-center">
                    <h2 class="font-alt">Commitees</h2>
                    <!-- Organizer -->
                    <div class="clients-list clients-border clients-col-1">
                        <ul>
                            <li>
                                <strong><span style="text-align: center; font-size: 21px;">Advisory Board</span></strong>
                                <div style="text-align: left; font-size: 14px;">
                                    <br/>Prof. Kallamulah Ramli, Universitas Indonesia (Indonesia)
                                    <br/>Prof. Fitri Yuli Zulkifli, Universitas Indonesia (Indonesia)
                                    <br/>Prof. Ang Peng Hwa, Nanyang Technological University (Singapore)
                                    <br/>Prof. Hanafi Husin, Universiti of Malaya (Malaysia)
                                    <br/>Prof. Nabil Al Munawar, Universiti of Brunei Darussalam (Brunei Darussalam)
                                </div>
                            </li>
                            <li>
                                <strong><span style="text-align: center; font-size: 21px;">Technical Program Committee</span></strong>
                                <div style="text-align: left; font-size: 14px;">
                                    <br/>Dr. Ashwin Sasongko, M.Sc, Indonesian Institute of Sciences (Indonesia) 
                                    <br/>Prof. Gati Gayatri, MA, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Satrio Darmanto, M.Sc
                                    <br/>Dr.  Agus Fanar Syukri, PhD.
                                    <br/>Prof. Riri Fitri Sari, Universitas Indonesia (Indonesia)

                                </div>
                            </li>
                            <li>
                                <strong><span style="text-align: center; font-size: 21px;"> Scientific Committee </span></strong>
                                <div style="text-align: left; font-size: 14px;">
                                    <br/>Dr. William Tibben, University of Wollongong (Australia)
                                    <br/>Dr. Dhany Saputra (Denmark)
                                    <br/>Dr. Ibrahim Kholilul Rohman, United Nations University (Portugal)
                                    <br/>Dr. Wibowo Hardjawana, University of Sydney (Australia)
                                    <br/>Dr. Khoirul Anwar (Telkom University)
                                    <br/>Dr. Denny Setiawan, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Dr. Hasyim Gautama, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Dr. Dedy Permadi, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Dr. Fadhilah Mathar, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Dr. Agung Harimukti, Ministry of Communications and Informatics RI (Indonesia)
                                </div>
                            </li>
                            <li>
                                <strong><span style="text-align: center; font-size: 21px;">Organizing Committee</span></strong>
                                <div style="text-align: left; font-size: 14px;">
                                    <br/>
                                    <b>General Chair:</b>
                                    <br/>Prof. Gati Gayatri, MA, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/><br/>
                                    <b>Organizing Chair:</b>
                                    <br/>Eyla Alivia Maranny, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Sujarwo, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Somo Arifianto, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Djoko Waluyo, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Bambang Mudjiyanto, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Amri Dunan, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Ahmad Budi Setiawan, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Yan Andriariza, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Lidya Agustina, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Cut Medika Z, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Vience Mutiara, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Dita Kusumasari, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Onny Rafizan, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Karman, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/><br/>
                                    <b>Technical Support Chair:</b>
                                    <br/>Badar Agung Nugroho, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Willy Wize Ananda Zen, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Rieka Mustika, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Iwan Setyawan, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Feki Pangestu Wijaya, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Bayu Yudo Numboro, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/><br/>
                                    <b>Publication Chair:</b>
                                    <br/>Emyana Ruth Eritha S., Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Aldhino Anggorosesar, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Kasmad, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Olivia Nelar, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Faiq Wildana, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Riza Azmi, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/><br/>
                                    <b>Financial Team:</b>
                                    <br/>Fitri Widyaningsih, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Argasi Susenna, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Indah Maharani, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Echi Pramitasari, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Annisa Muthia Yana, Ministry of Communications and Informatics RI (Indonesia)
                                </div>
                            </li>
                        </ul>
                    </div>

                </div> <!-- col -->
            </div>
        </div>
    </section>

    <!-- Registration 1 -->
    <!-- <section id="registration1" class="section-registration section grey-bg border-top-grey">
        <div class="container">
            <div class="row justify-content-center title-section m-60px-b sm-m-40px-b">
                <div class="col-md-8 col-lg-5 text-center">
                    <h2 class="font-alt">Presenter Registration</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="feature-box m-0px-b">
                        <h4 class="font-alt" style="text-align: center;">Registration Fee</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th> </th>
                                    <th>Foreign Participant</th>
                                    <th>Local Participant</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Professional</th>
                                        <td>USD 325/ USD 300*</td>
                                        <td>IDR 3,000,000/ IDR 2,500,000*</td>
                                    </tr>
                                    <tr>
                                        <th>Student</th>
                                        <td>USD 275/ USD 250*</td>
                                        <td>IDR 2,500,000/ IDR 2,250,000*</td>
                                    </tr>
                                    <tr>
                                        <th>Non-Presenter</th>
                                        <td>USD 100</td>
                                        <td>IDR 1,000,000</td>
                                    </tr>
                                </tbody>
                            </table>
                            *) For IEEE member
                        </div>
                        <br/><br/>
                        <form action="/" method="post">
                            {{ csrf_field() }}
                            
                            <h4 class="font-alt" style="text-align: center;">New Registration</h4>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="institution">Institution</label>
                                <input class="form-control" type="text" name="institution" value="{{ old('institution') }}">
                            </div>
                            <div class="form-group">
                                <label for="occupation">Occupation</label>
                                <input class="form-control" type="text" name="occupation" value="{{ old('occupation') }}">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" name="address" rows="3"></textarea>
                            </div>
                            <br><hr><br>
                            <h4 class="font-alt" style="text-align: center;">Login</h4>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password">
                            </div>
                            <br><hr><br>
                            <h4 class="font-alt" style="text-align: center;">ATTENTION ! Complete the items below ONLY if you wish to present a paper !</h4>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input class="form-control" type="text" name="title" value="{{ old('title') }}">
                            </div>
                            <div class="form-group">
                                <label for="abstract">Abstract</label>
                                <textarea class="form-control" name="abstract" rows="7" value="{{ old('title') }}"></textarea>
                            </div>

                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Registration 2 -->
    <!-- <section id="registration2" class="section-registration section grey-bg border-top-grey">
        <div class="container">
            <div class="row justify-content-center title-section m-60px-b sm-m-40px-b">
                <div class="col-md-8 col-lg-5 text-center">
                    <h2 class="font-alt">Participant (Non Presenter) Registration</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="feature-box m-0px-b">
                        <h4 class="font-alt" style="text-align: center;">Registration Fee</h4>
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <th> </th>
                                    <th>Foreign Participant</th>
                                    <th>Local Participant</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Professional</th>
                                        <td>USD 325/ USD 300*</td>
                                        <td>IDR 3,000,000/ IDR 2,500,000*</td>
                                    </tr>
                                    <tr>
                                        <th>Student</th>
                                        <td>USD 275/ USD 250*</td>
                                        <td>IDR 2,500,000/ IDR 2,250,000*</td>
                                    </tr>
                                    <tr>
                                        <th>Non-Presenter</th>
                                        <td>USD 100</td>
                                        <td>IDR 1,000,000</td>
                                    </tr>
                                </tbody>
                            </table>
                            *) For IEEE member
                        </div>
                        <br/><br/>
                        <form action="/" method="post">
                            {{ csrf_field() }}
                            
                            <h4 class="font-alt" style="text-align: center;">New Registration</h4>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" type="text" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="institution">Institution</label>
                                <input class="form-control" type="text" name="institution" value="{{ old('institution') }}">
                            </div>
                            <div class="form-group">
                                <label for="occupation">Occupation</label>
                                <input class="form-control" type="text" name="occupation" value="{{ old('occupation') }}">
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <textarea class="form-control" name="address" rows="3"></textarea>
                            </div>
                            <br><hr><br>
                            <h4 class="font-alt" style="text-align: center;">Login</h4>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" type="password" name="password">
                            </div>

                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Send">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>    -->
    
</main>
<!-- Main End -->



<!-- Footer -->
<footer class="footer theme-g-bg">
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-6 sm-m-15px-tb">
                    <h4 class="font-alt">Contact us</h4>
                    <p><strong>International Conference on ICT for Rural Development 2021</strong></p>
                    <p><strong>E-Mail: <a style="color: #082859" href="mailto:ictrudev@kominfo.go.id?Subject=ICTRudev2018" target="_blank">conference@kominfo.go.id</a></strong></span></p>
                    <p><strong>Phone: <a style="color: #082859" href="tel:+62213800418">+62 21 3800418</a></strong></span></p>
                </div> <!-- col -->

            </div>

            <div class="footer-copy">
                <div class="row">
                    <div class="col-12">
                        <p>All © Copyright by ICT RuDev - Technical Support Team. All Rights Reserved.</p>
                    </div><!-- col -->
                </div> <!-- row -->
            </div> <!-- footer-copy -->

        </div> <!-- container -->
    </section>
</footer>
<!-- / -->

<!-- jQuery -->
<script src="static/js/jquery-3.2.1.min.js"></script>
<script src="static/js/jquery-migrate-3.0.0.min.js"></script>

<!-- Plugins -->
<script src="static/plugin/bootstrap/js/popper.min.js"></script>
<script src="static/plugin/bootstrap/js/bootstrap.min.js"></script>
<script src="static/plugin/owl-carousel/js/owl.carousel.min.js"></script>
<!-- custom -->
<script src="static/js/custom.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-110824936-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-110824936-4');
</script>


</body>
<!-- Body End -->

</html>