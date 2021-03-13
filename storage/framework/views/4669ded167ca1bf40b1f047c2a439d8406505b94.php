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

    <title>International Conference ICT Rural Development 2018 - MCI RI</title>
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
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="shortcut icon" type="image/png" sizes="16x16" href="favicon-16x16.png">

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

        @keyframes  fade {
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
                    <li><a class="nav-link" href="#speakers">Speakers</a></li>
					<li><a class="nav-link" href="#Participants">Participants</a></li>
                    <li><a class="nav-link" href="https://k-cloud.kominfo.go.id/s/ictrudev2018">Download</a></li>
                    <li><a class="nav-link" href="#guide">Guidelines</a></li>
                    <li><a class="nav-link" href="#importantdate">Date</a></li>
                    <li><a class="nav-link" href="#venue">Venue</a></li>
                    <li><a class="nav-link" href="#organizer">Committees</a></li>
                    <li><a class="nav-link" href="#registration">Registration</a></li>
                    <li><a class="nav-link" href="login.php">Login</a></li>

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
                        <h1 class="font-alt">International Conference on ICT for Rural Development</h1>
                        <p style="font-weight: 500;">ICT RuDev is the 1<sup>st</sup> annual conference organized by ICT Research and Human Resource Development Agency, Ministry of Communications and Informatics (<a href="https://www.kominfo.go.id/" target="_blank" style="font-weight: bold; color: #003c76;">Kemkominfo</a>), Republic of Indonesia. IC-ICTRuDev is intended to gather researchers, academics, engineers, scholars and practitioners to present and exchange recent ideas, innovations and developments regarding the use and implications of ICT in rural development. The conference is technically co-sponsored by IEEE Indonesia Section, and the accepted papers would be considered to be published in IEEEXplore.</p>
                        <p style="font-weight: bold">IEEE Conference ID: <a href="https://conferences.ieee.org/conferences_events/conferences/conferencedetails/44842" style="color: #003c76" target="_blank">#44842</a></p>
                        <a href="http://ieee.id/"><img src="static/img/IEEE%20indo%20sponsor.png"/></a>

                    </div>
                </div>
                <div class="col-md-6">

                    <div class="mySlides fade">
                        <img src="static/img/balicolage.png" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="static/img/balicolage2A.png" style="width:100%">
                    </div>

                    <div class="mySlides fade">
                        <img src="static/img/balicolage3A.png" style="width:100%">
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
                                    <img src="static/img/rudiantara.png" alt="Rudiantara" title="Rudiantara" />
                                </span>
                            <h6><label>Rudiantara</label><span>Minister of Communications and Informatics of Indonesia</span></h6>
                        </div>
                        <div class="speac">
                            <p>1984, BSc in Statistics, University of Padjadjaran; 1988, MBA, IPPM. 1986-95, General Manager, Business Development, Indosat. 1995-96, Director, Commercial, Telkomsel. 1996-2002, Chief Operating Officer, Telekomindo Primabhakti. 1997-2006, Director, Sales and Marketing and Director, Corporate Affairs, XL Axiata. 2008-09, Vice-President Director, PLN (Persero). 2006-08, Vice-President Director, Semen Indonesia (Persero). 2010-14, Chief Executive Officer, Bukit Asam Transpacific Railways. 2010-14, Chief Executive Officer, Rajawali Asia Resources. 2011-12, Independent Commissioner and Chief of Audit Committee, Telekomunikasi Indonesia (Persero). 2012-15, Independent Commissioner, Indosat. Since 2014, Minister of Communications and Informatics (MCI), Republic of Indonesia.</p>
                        </div>
                    </div> <!-- col -->
                </div>

                <div class="col-12 col-md-11 col-xs-12">
                    <div class="testimonial-col theme-after">
                        <div class="avtar-box">
                                <span class="avtar">
                                    <img src="static/img/Helani-Galpaya.png" alt="Helani Galpaya" title="Helani Galpaya" />
                                </span>
                            <h6><label>Helani Galpaya</label><span> Chief Executive Officer Lirne Asia</span></h6>
                        </div>
                        <div class="speac">
                            <p>Helani Galpaya researches and engages in public discourse on issues related to net neutrality, policy and regulatory barriers in Internet access, e-Government and broadband quality of service. She also studies and speaks on how knowledge and information disseminated via ICTs can improve inclusiveness of SMMEs (small, medium and micro enterprises) in global agriculture value chains, and how labor is changing due to digitization and entry of digital platforms that reduce transaction costs. She is currently leading nationally representative surveys of Internet use by households and individuals in India, Pakistan, Bangladesh, Indonesia, Cambodia, Myanmar and Nepal. She is also currently researching how experiences and perceptions of harassment, surveillance and privacy impact the way men and women differentially experience the Internet, and how online identity helps or hinders their digital and political participation.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-11 col-xs-12">
                    <div class="testimonial-col theme-after">
                        <div class="avtar-box">
                                <span class="avtar">
                                    <img src="static/img/wataruimajuku.png" alt="Wataru Imajuku" title="Wataru Imajuku" />
                                </span>
                            <h6><label>Wataru Imajuku</label><span>Kindai University</span></h6>
                        </div>
                        <div class="speac">
                            <b>Department</b>: Department of Electrical and Communication Engineering / Graduate School of Industry
                            <p><b>Research areas:</b>
                            <ul>
                                <li>Electrical and electronic engineering, Communication/Network engineering</li>
                                <li>Informatics, Information network</li>
                            </ul>
                            </p>
                            <p>Has written about 92 published papers, more detailed profile: <a href="http://research.kindai.ac.jp/profile/en.d3b55318b9b6b290.html">Wataru Imajuku - Kindai University</a> </p>
                        </div>
                    </div>
                </div> <!-- col -->



                <div class="col-md-8 col-lg-8 text-center"><br/>
                    <h2 class="font-alt">Other Speakers</h2><br/>
                </div>
                <br/>



                <div class="col-12 col-md-11 col-xs-12">
                    <div class="testimonial-col theme-after">
                        <div class="avtar-box">
                                <span class="avtar">
                                    <img src="static/img/Prof.Wolfgang.jpg" alt="Wolfgang Drechsler" title="Wolfgang Drechsler" />
                                </span>
                            <h6><label>Prof. Wolfgang Drechsler </label><span>Tallinn University of Technology, Estonia</span></h6>
                        </div>
                        <div class="speac">
                            <p>Wolfgang Drechsler is professor of Governance at Tallinn University of Technology’s Ragnar Nurkse Department of Innovation and Governance and associate and member of the advisory board at the Davis Center at Harvard University. He has a Ph.D. from the University of Marburg and an Honorary Doctorate from Corvinus University Budapest. In civil service, he has been Advisor to the President of Estonia, Executive Secretary with the German Wissenschaftsrat during German Reunification, and, as an APSA Congressional Fellow, Senior Legislative Analyst in the United States Congress. He has been a visiting professor, i.e., in Singapore, Bangkok, Yogyakarta, Zhejiang, Kuala Lumpur and Beijing, as well as in Louvain-la-neuve, where he held the Chaire Andre Molitor. Recognitions include the German Federal Merit Cross, the Estonian Order of St. Mary’s Land, and most recently, the 2017 Senator Boorsma Award from SECoPA.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-11 col-xs-12">
                    <div class="testimonial-col theme-after">
                        <div class="avtar-box">
                                <span class="avtar">
                                    <img src="static/img/roger-harris.jpg" alt="Roger W. Harris" title="Roger W. Harris" />
                                </span>
                            <h6><label>Dr. Roger W. Harris </label><span>Universiti Malaysia Sarawak, Malaysia</span></h6>
                        </div>
                        <div class="speac">
                            <p>Dr. Roger W. Harris has a PhD in Information Systems from the City University of Hong Kong. He has been advancing the use of Information and Communication Technologies for poverty reduction and rural development in Asia since 1997. Dr. Harris is the founder of Roger Harris Associates, a consulting and social entrepreneurial firm that provides services to Asian governments and aid agencies, including the United Nations, the World Bank, International Telecommunications Union, USAID and the Asian Development Bank. He has worked on assignments for project design and implementation, evaluation, policy and strategy development, knowledge sharing and research in Bangladesh, Cambodia, China, India, Indonesia, Laos, Malaysia, Mongolia, Nepal, Papua New Guinea, Philippines, Sri Lanka, Thailand and Vietnam. Mostly, this comprises setting up village telecentres with computers and internet and assisting the community to make use of them for local development. He has a long association with a remote indigenous community in Borneo where he has recently set up Malaysia's first community radio station. Dr. Harris is Visiting Professor at the Institute of Social Informatics and Technological Innovation at Universiti Malaysia Sarawak.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-11 col-xs-12">
                    <div class="testimonial-col theme-after">
                        <div class="avtar-box">
                                <span class="avtar">
                                    <img src="static/img/aguswitjaksono.png" alt="Agus Witjaksono" title="Agus Witjaksono" />
                                </span>
                            <h6><label>Agus Witjaksono Sulistya R. </label><span>Vice President Network Deployment and Services, Telkomsel</span></h6>
                        </div>
                        <div class="speac">
                            <p>Agus Witjaksono graduated from Institut Teknologi Sepuluh Nopember (ITS Surabaya) with Bachelor of Electrical Engineering degree, and holds a Master of Finance Management from University of Indonesia. He was appointed as Vice President Network Deployment and Services since 2014, he is responsible for network deployment project rollout Telkomsel and USO program. He is also currently as special pilot agile project smart attacker since January 2018.<br>
                                Previous Positions:<br>
                            <ul>
                                <li>
                                    VP Area Jawa Bali at Telkomsel
                                </li>
                                <li>
                                    GM Sales Headquarter at Telkomsel
                                </li>
                                <li>
                                    GM Regional Bali Nusra at Telkomsel
                                </li>
                                <li>
                                    GM Regional Jawa Tengah at Telkomsel
                                </li>
                                <li>
                                    Project Manager Jawa Timur at Telkomsel
                                </li>
                            </ul>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-11 col-xs-12">
                    <div class="testimonial-col theme-after">
                        <div class="avtar-box">
                                <span class="avtar">
                                    <img src="static/img/Anang_Achmad_Latif_-_BP3TI.jpg" alt="Anang Latif" title="Anang Latif" />
                                </span>
                            <h6><label>Anang Latif </label><span>Executive Director, BAKTI</span></h6>
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
                                    <img src="static/img/Inoue.jpg" alt="Masugi Inoue" title="Masugi Inoue" />
                                </span>
                            <h6><label>Dr. Masugi Inoue </label><span>NICT, Japan</span></h6>
                        </div>
                        <div class="speac">
                            <p>Dr. Inoue graduated from Kyoto University in 1992 and received a doctorate of engineering from The University of Tokyo in 1997. Since he joined Communications Research Laboratory (CRL) in 1997, which was reorganized as NICT in 2004, he has been engaged in the research and development of ultra-high-speed WLANs, wireless and mobile networks, ubiquitous computing, future-generation networks, and resilient networks. He has been in the current position since April 2016. He was a visiting researcher at Polytechnic University (now the Polytechnic Institute of New York University), New York, in 2000. He served as Director of General Affairs, Director of Finance, and Associate Editor of Transactions on Communications for the IEICE Communications Society. He also served as Chairman of the Technical Committee on MoNA and as a member of ten Technical Committees of IEICE and MBL of IPSJ. He received the IEICE Young Researcher’s Award in 2003, the Best Paper Award from IPSJ in 2006 and 2007, and the Young Scientists’ Prize of the Commendation for Science and Technology by the Minister of Education, Culture, Sports, Science, and Technology in 2007.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-11 col-xs-12">
                    <div class="testimonial-col theme-after">
                        <div class="avtar-box">
                                <span class="avtar">
                                    <img src="static/img/PaulMichael.jpg" alt="Paul Michael Scanlan" title="Paul Michael Scanlan" />
                                </span>
                            <h6><label>Paul Michael Scanlan</label><span>&nbsp;CTO Of CNBG Huawei</span></h6>
                        </div>
                        <div class="speac">

                            <p>With more than 30 years’ experience in the Telecom and IT industries, he possesses broad experience across most technologies having worked in a variety of senior capacities across Technical, Commercial, Company and Business Management, Operations, Sales, Marketing, Program Management and R&D disciplines.  He is an expert in  the Business of Telecommunications - managing of all aspects (concept to operations) of Telecommunications Carrier / Service Provider businesses. <br/>In the course of his career, he has worked with numerous Fixed and Mobile Operators, vendors, SI and Consulting companies in Asia-Pacific, Africa, North America and Europe.
                            </p>
                        </div>
                    </div>
                </div> <!-- col -->


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
                        27<sup>th</sup> (extended)--> September 3<sup>th</sup> (Last Call), 2018</strong>
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
                        <strong>ICT Infrastructure and Application for Rural Development Track</strong>
                        <ul>
                            <li>Rural informatics,</li>
                            <li>Telecommunication and informatics application, </li>
                            <li>Mobile learning, </li>
                            <li>Sustainable design, </li>
                            <li>Smart governance,</li>
                            <li>E-government, </li>
                        </ul>
                        <strong>ICT Ecosystem for Rural Development Track</strong>
                        <ul>
                            <li>New technologies and their role in economic system and financial scheme, </li>
                            <li>Education support, </li>
                            <li>Culture shifting, </li>
                            <li>Digital literacy, </li>
                            <li>Rural policy </li>
                        </ul>
                        <strong>Social Implications of ICT in Rural Development Track</strong>
                        <ul>
                            <li>Humanitarian engineering,</li>
                            <li>Environmental issues,</li>
                            <li>Privacy and security,</li>
                            <li>Other economic, health, and safety implications of technology,</li>
                            <li>History of technology,</li>
                            <li>Health and healthcare technologies and impact,</li>
                            <li>Reliable energy and social issues related to energy,</li>
                            <li>Other social issues of ICT</li>
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
                            <strong>Paper Format</strong> - Papers submitted for IC-ICTRuDev 2018 should be up to 6 pages of text including figures and possible references. The authors are responsible to ensure that the submitted papers are in the correct styles, fonts, etc. The submitted papers must be in the PDF format.</p>
                        <p>
                            <strong>Template</strong> - The Style Manual and Conference Paper templates in various formats are available <a href="http://www.ieee.org/conferences_events/conferences/publishing/templates.html" target="_blank">here</a>. <br />
                            <br />
                            <strong>Use PDF eXpress Format</strong> - Before submitting your papers, please use IEEE PDF eXpress to comply with IEEE requirements: (<a href="https://www.pdf-express.org/">PDF eXpress</a>) Conference ID: <b>44842X</b>
                            <br/>Below, we provide information to create your PDF eXpress documents.
                            <br/>
                            <br/>
                            <strong>Step by Step Creating Your PDF eXpress Account</strong>:
                        <ul>
                            <li>Go to IEEE - PDF eXpress site: <a href="https://www.pdf-express.org/">PDF eXpress</a></li>
                            <li>Select the New Users - Click Here link.</li>
                            <li>Enter the following: </li>
                            <ul>
                                <li><b>44842X</b> for the Conference ID</li>
                                <li>your email address</li>
                                <li>a password</li>
                            </ul>
                            <li>Continue to enter information as prompted.</li>
                            <li>An Online confirmation will be displayed and an email confirmation will be sent verifying your account setup.</li>
                            <li>Log in to your PDF eXpress account and follow the instructions.</li>
                        </ul>
                        <br/>
                        <strong>Paper Submission Procedure</strong> - Submit your papers in pdf format through EDAS system (<a href="https://edas.info/N24660">https://edas.info/N24660</a>)
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
                    <li class="nav-item">
                        <a id="profile-tab" data-toggle="tab" href="#profilea" role="tab" aria-controls="profilea" aria-selected="false">
                            Programme
                        </a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane p-80px-t fade show active" id="importantdatetab" role="tabpanel" aria-labelledby="importantdatetab-tab">
                        <div class="row justify-content-center title-section m-60px-b sm-m-40px-b">
                            <div class="col-md-4 col-lg text-center">
                                <div class="clients-list clients-border clients-col-1">
                                    <br>
                                    <h5 style="text-align: center"><b>Important Date</b></h5><br>
                                    <ul>
                                        <li style="background: #808080;">
                                            <strong style="font-size: 14px"><!--August
                                                <del style="text-decoration: line-through blue; text-decoration-style: double">1<sup>st</sup></del>
                                                <del style="text-decoration: line-through blue; text-decoration-style: double">17<sup>th</sup></del>
                                                27<sup>th</sup> (extended)--> September 3<sup>rd</sup> (Last Call), 2018</strong>
                                            <br>
                                            <span style="font-size: 12px">Deadline for paper submission</span>
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
                                        <li style="background: #808080;">
                                            <strong style="font-size: 14px; font-weight: bold;">September 10<sup>th</sup> (phase #1) and September 20<sup>th</sup> (phase #2), 2018 </strong>
                                            <br>
                                            <span style="font-size: 12px">Notification of accepted paper</span>
                                            <br>
                                            <div class="fas fa-angle-down fa-2x"></div>
                                        </li>
                                        <li>
                                            <strong style="font-size: 26px; font-weight: bold;">October 10<sup>th</sup>, 2018</strong>
                                            <br>
                                            <span style="font-size: 22px">Deadline for final manuscript submission</span>
                                            <br>
                                            <div class="fas fa-angle-down fa-2x"></div>
                                        </li>
                                        <li>
                                            <strong>October 10<sup>th</sup>, 2018</strong>
                                            <br>
                                            Deadline for author registration
                                            <br>
                                            <div class="fas fa-angle-down fa-2x"></div>
                                        </li>
                                        <li>
                                            <strong>October 17<sup>th</sup>-18<sup>th</sup>, 2018</strong>
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
                    <h2 class="font-alt">Venue</h2>
                    <p></p>
                </div> <!-- col -->
            </div>

            <div class="row align-items-center">

                <div class="col-md-6 sm-m-30px-t">
                    <div class="std-box p-50px-l md-p-0px-l">
                        <div class="title-section  m-20px-b">
                            <h3 class="font-alt left">Pullman Bali Legian Beach Hotel, Indonesia</h3>
                        </div>
                        <ul>
                            <li>Address: Jalan Melasti No.1, Legian, Kuta, Kabupaten Badung, Bali 80361</li>
                            <li>Phone: <a href="tel:+62361762500">+62 361 762500</a></li>
                            <li>Site : <a href="https://www.accorhotels.com/gb/hotel-6556-pullman-bali-legian-beach/index.shtml">Pullman Bali Legian Beach Hotel</a></li>
                        </ul>
                    </div> <!-- / -->
                </div> <!-- col -->

                <div class="col-md-6 text-center effect-main">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.8081545357118!2d115.1655110501992!3d-8.709760393711987!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246c22bdfabd1%3A0x4e6a33082e3e73aa!2sPullman+Bali+Legian+Beach+Hotel+and+Resorts!5e0!3m2!1sid!2sid!4v1528349006774" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                    <h2 class="font-alt">Commitees
                    </h2>
                    <!-- Organizer -->
                    <div class="clients-list clients-border clients-col-1">
                        <ul>
                            <li>
                                <strong><span style="text-align: center; font-size: 21px;">Advisory Board</span></strong>
                                <div style="text-align: left; font-size: 14px;">
                    <br/><a href="http://www.fuk.kindai.ac.jp/eng/graduate/pdf/resercher_prof.pdf" target="_blank">Prof. Toru Ihara</a>, Kindai University (Japan)
				    <br><a href="http://research.kindai.ac.jp/profile/en.d3b55318b9b6b290.html" target="_blank" >Prof. Wataru Imajuku</a>, Kindai University (Japan)   
					<br/><a href="https://www.uow.edu.au/~wsusilo/" target="_blank" >Prof. Willy Susilo</a>, University of Wollongong (Australia)
					<br/><a href="https://www.ttu.ee/institutes/ragnar-nurkse-department-of-innovation-and-governance/department-11/academic-staff-5/academic-staff-6/" target="_blank" >Prof. Wolfgang Drechsler</a>, Tallinn University of Technology (Estonia)   
					<br/><a href="http://staff.ui.ac.id/kalamullah.ramli" target="_blank" >Prof. Kalamullah Ramli</a>, Universitas Indonesia (Indonesia)
					<br/><a href="http://research.eng.ui.ac.id/researcher/yuliftui/" target="_blank" >Prof. Fitri Yuli</a>, Universitas Indonesia (Indonesia)    
                    <br/><a href="http://staff.iium.edu.my/mira/" target="_blank" >Associate Prof. Mira Kartiwi</a>, International Islamic University Malaysia (Malaysia)   
                    <br/><a href="https://ukm.pure.elsevier.com/en/persons/rosdiadee-nordin" target="_blank" >Assoc. Prof. Ir. Dr. Rosdiadee Nordin</a>, National University of Malaysia (Malaysia)    
                    <br/>Dr. Basuki Yusuf Iskandar, Ministry of Communications and Informatics RI (Indonesia)   
                                      
                                    
                                    
                                </div>
                            </li>
                          <li>
                                <strong><span style="text-align: center; font-size: 21px;"> Scientific Committee </span></strong>
                                <div style="text-align: left; font-size: 14px;">
                                    <br/><a href="https://scholars.uow.edu.au/display/william_tibben" target="_blank">Dr. William Tibben</a>, University of Wollongong (Australia)
                                    <br/><a href="https://unu.edu/experts/ibrahim-rohman.html" target="_blank">Dr. Ibrahim Kholilul Rohman</a>, United Nations University (Portugal)
                                    <br/><a href="https://sydney.edu.au/engineering/people/wibowo.hardjawana.php" target="_blank">Dr. Wibowo Hardjawana</a>, University of Sydney (Australia)
                                    <br/><a href="http://www.cbs.dtu.dk/~dhany/cv.pdf" target="_blank">Dhany Saputra, Ph.D.</a>, Brüel & Kjær Vibro (Denmark)
                                    <br/><a href="https://www.ifr.kit.edu/english/mitarbeiter_3612.php" target="_blank">Dr. rer. nat. Ari Rahadini</a>, Karlsruhe Institute of Technology (Germany)
                                    <br/><a href="http://uwa.academia.edu/EdiTrionoNuryatno" target="_blank">Dr. Edi Triono Nuryatno</a>, The University of Western Australia (Australia)
									<br/><a href="https://people.utwente.nl/m.daneva?tab=about-me" target="_blank">Dr. Maya Daneva</a>, University of Twente (Netherlands)
                                    <br/><a href="https://www.researchgate.net/profile/Sim_Lau" target="_blank">Dr. Sim Kim Lau</a>, University of Wollongong (Australia)
                                    <br/>Dr. Hasyim Gautama, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>
                                    <a href="https://scholar.google.co.id/citations?user=BIwAIFoAAAAJ&hl=en">Dr. Titon Dutono</a>, Electronic Engineering Polytechnic Institute of Surabaya(Indonesia)
                                    <br/>
                                    <a href="https://id.linkedin.com/in/denny-setiawan-5b607688" target="_blank">Dr. Denny Setiawan</a>, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/><a href="https://id.linkedin.com/in/agung-harimurti-b51a1471" target="_blank">Dr. Agung Harimurti</a>, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/><a href="http://staff.ui.ac.id/nizar" target="_blank">Dr. Achmad Nizar</a>, Universitas Indonesia (Indonesia)
                                    <br/><a href="http://staff.ui.ac.id/dana" target="_blank">Dr. Dana Indra Sensuse</a>, Universitas Indonesia (Indonesia)
                                    <br/><a href="http://research.eng.ui.ac.id/researcher/ajib" target="_blank">Ajib Setya A, Ph.D.</a>, Universitas Indonesia (Indonesia)
                                    <br/><a href="http://staff.ui.ac.id/m.suryanegara" target="_blank">Dr. Muhammad Suryanegara</a>, Universitas Indonesia (Indonesia)
                                    <br/>
                                    <a href="https://scholar.google.co.id/citations?user=VM5-xTMAAAAJ&hl=en">Dr. Sigit Jarot</a>, Universitas Indonesia (Indonesia)
                                    <br/>
                                    <a href="https://scholar.google.co.id/citations?user=Z7SOhwEAAAAJ&hl=en">Dr. Udi Rusadi</a>, Universitas Indonesia (Indonesia)
                                    <br/>
                                    <a href="http://staff.ui.ac.id/dadang.gunawam" target="_blank">Dr. Dadang Gunawan</a>, Universitas Indonesia (Indonesia)
                                    <br/><a href="https://id.linkedin.com/in/arif-wismadi-4708a418" target="_blank">Dr. Arif Wismadi</a>, Universitas Gadjah Mada (Indonesia)
                                    <br/><a href="http://i-system.ft.ugm.ac.id/about-us/research-team/lukito-edi-nugroho-phd/" target="_blank">Dr. Lukito Edi</a>, Universitas Gadjah Mada (Indonesia)
                                    <br/><a href="http://hi.fisipol.ugm.ac.id/pengajar/dedy-permadi-ma/" target="_blank">Dr. Dedy Permadi</a>, Universitas Gadjah Mada (Indonesia)
                                    <br/><a href="https://anwarkhoirul.staff.telkomuniversity.ac.id/" target="_blank">Dr. Khoirul Anwar</a>, Telkom University (Indonesia)
                                    <br/><a href="http://lipi.go.id/staf/detail/yanr001/" target="_blank">Dr. Yan Rianto</a>, Lembaga Ilmu Pengetahuan Indonesia (Indonesia)
                                    <br/><a href="http://lipi.go.id/staf/detail/rifk001" target="_blank">Dr. Rifki Sadikin</a>, Lembaga Ilmu Pengetahuan Indonesia (Indonesia)
                                    <br/><a href="http://lipi.go.id/staf/detail/didi016" target="_blank">Dr. Didi Rosiyadi</a>, Lembaga Ilmu Pengetahuan Indonesia (Indonesia)
                                    <br/><a href="http://www.profildosen.com/detail/0027085807.html" target="_blank">Dr. Lala Kolopaking</a>, Institut Pertanian Bogor (Indonesia)
                                    <br/><a href="http://et.stei.itb.ac.id/author/mohammadridwaneffendi/" target="_blank">Dr. Ridwan Effendi</a>, Institut Teknologi Bandung (Indonesia)
                                    <br/><a href="http://mercubuana.academia.edu/IwanKrisnadi" target="_blank">Dr. Iwan Krisnadi</a>, Universitas Mercubuana (Indonesia)
                                    <br/><a href="http://resits.its.ac.id/index.php/expert/Information_System/Ahmad_Muklason" target="_blank">Ahmad Muklason, Ph.D.</a>, Institut Teknologi Sepuluh Nopember (Indonesia)
                                    <br/><a href="http://staff.ui.ac.id/ivan" target="_blank">Dr. Ivan Fanany</a>, Universitas Indonesia (Indonesia)
                                    <br/><a href="https://romisatriawahono.net/profile/romi-cv.pdf" target="_blank">Dr. Romy Satrio Wahono</a>, Brainmatics (Indonesia)
                                    <br/><a href="https://acadstaff.ugm.ac.id/nasetiawan" target="_blank">Dr. Noor Akhmad S.</a>, Universitas Gadjah Mada (Indonesia)
                                    <br/><a href="https://dsp.stei.itb.ac.id/yoanes-bandung/" target="_blank">Dr. Yoanes Bandung</a>, Institut Teknologi Bandung (Indonesia)
                                    <br/><a href="https://fa.itb.ac.id/wp-content/uploads/sites/44/2016/01/CV-Suhardi-SA-ITB.pdf" target="_blank">Dr. Ing. Suhardi</a>, Institut Teknologi Bandung (Indonesia)
                                    <br/><a href="https://www.stei.itb.ac.id/file/stei-script/arryakhmad.html" target="_blank">Dr. Arry Akhmad Arman</a>, Institut Teknologi Bandung (Indonesia)
                                    <br/><a href="https://scholar.google.com/citations?user=tPqyDHAAAAAJ&hl=en" target="_blank">Dr. Aghus Sofwan</a>, Universitas Diponegoro (Indonesia)
                                    <br/><a href="http://staff.ui.ac.id/eko" target="_blank">Dr. Eko Budiarjo</a>, Universitas Indonesia (Indonesia)
                                    <br/><a href="http://wahyul.blog.undip.ac.id/curiculum-vitae/" target="_blank">Dr. Eng. Wahyul Amien Syafei</a>, Universitas Diponegoro (Indonesia)
                                    <br/><a href="https://id.linkedin.com/in/gerry-firmansyah-6ab85b22" target="_blank">Dr. Gerry Firmansyah, ST., M.Kom.</a>, Dewan Teknologi Informasi dan Komunikasi Nasional (Indonesia)
                                    <br/><a href="http://scholar.binus.ac.id/D3803/dr-ir-yaya-heryadi/" target="_blank">Dr. Ir. Yaya Heryadi, M. Sc.</a>, Bina Nusantara University (Indonesia)
                                    <br/>
                                    <a href="http://staff.ui.ac.id/irwansyah09">Dr. Irwansyah, S.Sos., M.A</a>., Universitas Indonesia (Indonesia)
                                    

                            </li>
                            <li>
                                <strong><span style="text-align: center; font-size: 21px;">Organizing Committee</span></strong>
                                <div style="text-align: left; font-size: 14px;">
                                    <br/>
                                    <b>General Chair:</b>
                                    <br/>Dr. Wiryanta, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/><br/>
                                    <b>Organizing Chair:</b>
                                    <br/>Haryati, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Bambang Hariyadi, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Emyana Ruth, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Eyla Alivia Maranny, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Vidyantina Heppy A, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Sukirdi, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Dita Kusumasari, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Diah Kusumawati, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Riva'atul Adaniah Wahab, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Cut Medika Zellatifanny, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Olivia Nelar, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Vience Mutiara Rumata, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/><br/>
                                    <b>Technical Support Chair:</b>
                                    <br/>Bima Hariaputra, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Badar Agung Nugroho, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Onny Rafizan, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Bayu Yudo Numboro, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/><br/>
                                    <b>Publication Chair:</b>
                                    <br/>Somo Arifianto, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Faiq Wildana, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Christiany Juditha, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Maulia Jayantina Islami, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Yan Andriariza, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/><br/>
                                    <b>Financial Team:</b>
                                    <br/>Agnes Irwanti, IEEE Indonesia Section (Indonesia)
                                    <br/>Argasi Susenna, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Fitri Widyaningsih, Ministry of Communications and Informatics RI (Indonesia)
                                    <br/>Indah Maharani, Ministry of Communications and Informatics RI (Indonesia)
                                </div>
                            </li>
                        </ul>
                    </div>

                </div> <!-- col -->
            </div>

        </div>

    </section>
    
    <!-- Registration -->
    <section id="registration" class="section-registration section grey-bg border-top-grey">
        <div class="container">
            <div class="row justify-content-center title-section m-60px-b sm-m-40px-b">
                <div class="col-md-8 col-lg-8 text-center">
                    <h2 class="font-alt">Registration</h2>
                </div>
            </div>
            <div class="tab-style-1">

                <ul class="nav nav-fill" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="active" id="registrationtab-tab" data-toggle="tab" href="#registrationTabFee" role="tab" aria-controls="registrationTabFee" aria-selected="true">Fee
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="profile-tab" data-toggle="tab" href="#registrationTabForm" role="tab" aria-controls="registrationTabForm" aria-selected="false">
                            Form
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane p-20px-t fade show active" id="registrationTabFee" role="tabpanel" aria-labelledby="importantdatetab-tab">
                    <div class="row">
                        <div class="col-md-12 sm-m-30px-t">
                            <table align="center" style="font-size: 14px;padding: 0px; border-collapse: separate; border-spacing: 7px;">
                                <tbody>
                                <tr style="border-bottom: 1px solid black; border: 1px solid black; font-weight: bolder;">
                                    <td style="width: 31%;" align="left" valign="middle" >Registration Fee</td>
                                    <td style="width: 36%;" align="left" valign="middle" >Foreign Participant</td>
                                    <td style="width: 33%;" align="left" valign="middle" >Local Participant</td>
                                </tr>
                                <tr style="border-bottom: 1px solid black;">
                                    <td align="left" valign="middle" >Professional</td>
                                    <td align="left" valign="top" >USD 325/<br>
                                        USD 300*</td>
                                    <td align="left" valign="top" >IDR 3,000,000/<br>
                                        IDR 2,500,000*</td>
                                </tr>
                                <tr style="border-bottom: 1px solid black;">
                                    <td align="left" valign="middle" >Student</td>
                                    <td align="left" valign="top" >USD 275/<br>
                                        USD 250*</td>
                                    <td align="left" valign="top" >IDR 2,500,000/<br>
                                        IDR 2,250,000*</td>
                                </tr>
                                <tr>
                                    <td align="left" valign="middle" >Non-Presenter</td>
                                    <td align="left" valign="top" >USD 100</td>
                                    <td align="left" valign="top" >IDR 1,000,000</td>
                                </tr>
                                <tr>
                                    <td colspan="3" align="left"><br/>*) For IEEE member</td>
                                </tr>
                                </tbody>
                            </table>
                        </div> <!-- col -->

                    </div> <!-- col -->
                </div>
                <div class="tab-pane p-20px-t " id="registrationTabForm" role="tabpanel" aria-labelledby="importantdatetab-tab">
                    <style>
                        .formRegis{
                            left:auto;
                            text-align:left;

                        }

                    </style>
                    <script src="static/regist.js"></script>
                    <div class="row justify-content-center " >
                        <div id="formRegis" class="formRegis ">
                            <form id="Form_Reg" >
                                <div class="form-group">
                                    <label >Registration As :</label>
                                    <select onChange="loadPage('formRegis2','q=5862394y782323t8&val='+this.value)" id="jenis" class="form-control form-control-sm" >
                                        <option onChange="" >Select One</option>
                                        <option value="participant">Presenter</option>
                                        <option value="non-participant">Participant (Non Presenter)</option>
                                    </select>
                                    <small id="emailHelp" class="form-text text-muted">*Choose Presenter ONLY if you wish to present a paper !</small>
                                </div>
                                <div id="formRegis2"></div>
                            </form>
                        </div><!-- Form Regist -->
                    </div>
                </div><!-- registrationTabForm -->
            </div>
        </div>
    </section>
    

<!-- Participants -->
    <section id="Participants" class="section testimonial-section grey-bg border-top-grey">
        <div class="container">
            <div class="row justify-content-center title-section m-60px-b sm-m-40px-b">
                <div class="col-md-12 col-lg-12 text-center">
                    <h2 class="font-alt">	
                        Participants
                    </h2>
                    <!-- Organizer -->
                    <div class="clients-list clients-border clients-col-1" >
                        <ul>
                            <li>
                                <strong>
                                    <span style="text-align: center; font-size: 21px;">Paper Presenter </span>
                                </strong><br>
                                *login first to download invitation letter and uploading payment receipt <br>
                                * <a href="https://k-cloud.kominfo.go.id/s/ictrudev2018">Download Schedule of Paper Presentation and Materials </a>                              
                                <div style="text-align: left; font-size: 14px;">
                                    <br/>
                                    
                                </div>
                            </li>
                            <li>
                                <strong><span style="text-align: center; font-size: 21px;">Participant</span></strong>
                                <div style="text-align: left; font-size: 14px;">
                                    <table width="95%" border="0">
                                        
                                    </table>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div> <!-- col -->
            </div>
        </div>
    </section>
</main>
<!-- Main End -->



<!-- Footer -->
<footer class="footer theme-g-bg">
    <section class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-lg-6 sm-m-15px-tb">
                    <h4 class="font-alt">Contact us</h4>
                    <p><strong>International Conference on ICT for Rural Development 2018</strong></p>
                    <p><strong>E-Mail: <a style="color: #082859" href="mailto:ictrudev@kominfo.go.id?Subject=ICTRudev2018" target="_blank">ictrudev@kominfo.go.id</a></strong></span></p>
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

</html><?php /**PATH C:\xampp\htdocs\rudev-app\resources\views/rudev.blade.php ENDPATH**/ ?>