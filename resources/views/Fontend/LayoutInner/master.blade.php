<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Viqarunnisa Noon School & College</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&amp;display=swap" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('public/Backend/css/style.css')}}">



<!---Fonts-->
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
<!---Fonts-->
<!-- CSS only -->

    <link rel="stylesheet" href="{{ asset('public/Fontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/Fontend/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('public/Fontend/css/venobox.css') }}">
    <link rel="stylesheet" href="{{ asset('public/Fontend/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('public/Fontend/css/media.css') }}">

</head>

<body style="overflow-x: hidden;">

 
	<!---Header TopBar-->
	<section id="topHeader">
		<div class="container">
			<div class="row">
				<div class="topInfo">
					<ul>
						<li><img src="{{ asset('public/Fontend/image/schoolLogo/email-84.svg')}}" alt="">vnsc_bd@yahoo.com</li>
						<li><img src="{{ asset('public/Fontend/image/schoolLogo/phone-2.svg')}}" alt="">+88 02-58310500</li>
					</ul>
				</div>
				<div class="socialIconTop">
					<ul>
						<li class="socialIcon"><img src="{{ asset('public/Fontend/image/schoolLogo/fb.svg')}}" alt=""></li>
						<li class="socialIcon"><img src="{{ asset('public/Fontend/image/schoolLogo/twit.svg')}}" alt=""></li>
						<li class="socialIcon"><img src="{{ asset('public/Fontend/image/schoolLogo/utube.svg')}}" alt=""></li>
					<li class="parentsZone"><a href="{{ url('login')}}" target="_blank">ADMIN ZONE</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	<!---Header TopBar-->

<header id="headerSticky">
		<!---logobar-->
		<section id="logoPart">
			<div class="container">
				<div class="row">
					<div class="schoolLogo">
					<a href="{{ url('/')}}">
							<img src="{{ asset('public/Fontend/image/schoolLogo/logo.svg')}}" alt="">
						</a>
					</div>
					<div class="mujibBar">
						<img src="{{ asset('public/Fontend/image/schoolLogo/mujib.svg')}}" alt="">
					</div>
				</div>
			</div>
		</section>
		<!---logobar-->
	
	
	
		<!----------------navBar------------->
		<nav id="menuBar" class="navbar navbar-expand-lg deskMenu">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"><img src="{{ asset('public/Fontend/image/schoolLogo/ic_menu_24px.svg')}}" alt=""></span>
				</button>
	
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="nav navbar-nav">
						<li>
						<a href="{{ url('/')}}" style="color: #000;">HOME</a>
						</li>
						<li>
							ABOUT US
							<ul class="dropdowndesk">
								<li><a  href="#">At a Glance</a></li>
								<li><a  href="{{ url('history')}}">History</a></li>
								<li><a  href="{{ url('chairmanspeech')}}">Message Of The Chairman</a></li>
								<li><a  href="{{ url('principlespeech')}}">Message Of The Principal</a></li>
							    <li><a  href="{{ url('governingbody')}}">GoverNing Body</a></li>
								<li><a  href="">Vision and Objectives</a></li>
								{{-- <li><a href="{{ url('infrastructure')}}">INFRASTRUCTURE</a></li> --}}
								
							</ul>			
						</li>
						<li>
							ACADEMIC
							<ul class="dropdowndesk">
							    <li><a href="#">Code of Conducts</a></li>
								<li><a href="">Guideline for Parents</a></li>
								<li><a href="">Dress Code</a></li>
								<li><a href="#">HomeWork And Class Lecture Documents</a></li>
								<li><a href="">Lesson Plan</a></li>
								<li><a href="">Academic calendar</a></li>
								<li><a href="">Lesson Plan</a></li>
								<li><a href="">Syllabus</a></li>
								<li><a href="">Class Routine</a></li>
								<li><a href="">Co-curricular Activities</a></li>
								
								
							</ul>			
						</li>
						<li>
							Information
							<ul class="dropdowndesk">
								<li><a href="{{ url('notice')}}">Notice Board</a></li>
								<li><a href="">Facilities</a></li>
								<li><a href="">News and Events</a></li>
								<li><a href="">Our Achievements</a></li>
								<li><a href="">List of Holidays</a></li>
								<li><a href="">Teachers Info</a></li>
								<li><a href="">Student Info</a></li>
								<li><a href="">Policies & Guidelines</a></li>
								<li><a href="">Library</a></li>
								<li><a href="">Health and Environmental Awarness Info</a></li>
							</ul>					
						</li>
						<li>
							Admission
							<ul class="dropdowndesk">
							<li><a href="{{ url('apply')}}">Apply Now</a></li>
								<li><a href="">Fast Facts‌</a></li>
								<li><a href="">Fees & Payment</a></li>
								<li><a href="">Scholarships</a></li>
								<li><a href="">Transfer Procedures</a></li>
							</ul>			
						</li>
						{{-- <li>
							Campus Life
							<ul class="dropdowndesk">
								<li><a href="ApplyNow.html">Photo Gallery</a></li>
                                <li><a href="FastFacts.html">Video Gallary‌</a></li>
							</ul>			
						</li> --}}
						
						<li>
							GALLERY
							<ul class="dropdowndesk">
								<li><a href="{{ url('photoGallary')}}"> Photo Gallery </a></li>
								<li><a href=""> Video Gallary </a></li>
							</ul>			
                        </li>
                        <li>NOTICE</li>
					<li><a href="{{ url('contactUs')}}" style="color: #000">CONTACT</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<!----------------navBar------------->
		<!----------------navBar------------->
				<nav id="mobilbar" class="navbar navbar-expand-lg mobilMenu">
					<div class="container">
		
						<a class="navbar-brand logoMobil" href="#"><img src="{{ asset('public/Fontend/image/schoolLogo/logo.svg')}}" alt=""></a>
						<button class="navbar-toggler mobilToggle" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						  <span class="navbar-toggler-icon mobilMenuIcon"><img src="{{ asset('public/Fontend/image/schoolLogo/ic_menu_24px.svg')}}" alt=""></span>
						</button>
			
						<div class="collapse navbar-collapse mobilMenuCollapse" id="navbarSupportedContent">
							<ul class="navbar-nav mobilNavbar mr-auto">
							  <li class="nav-item active">
								<a class="nav-link" href="#">HOME</a>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									ABOUT US<i class="fas fa-chevron-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ url('chairmanspeech')}}">Message from Chairman</a>
									<a class="dropdown-item" href="{{ url('principlespeech')}}">Message from Principal</a>
									<a class="dropdown-item" href="{{ url('governingbody')}}">Governing Body</a>
									<a class="dropdown-item" href="#">Master Plan</a>
									<a class="dropdown-item" href="{{ url('history')}}">History</a>
									<a class="dropdown-item" href="">Vision and Objectives</a>
									<a class="dropdown-item" href="#">Infrastructure</a>
								</div>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									ACADEMIC<i class="fas fa-chevron-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="#">Code of Conducts</a>
									<a class="dropdown-item" href="">Guideline for Parents</a>
									<a class="dropdown-item" href="">Dress Code</a>
									<a class="dropdown-item" href="#">HomeWork And Class Lecture Documents</a>
									<a class="dropdown-item" href="">Lesson Plan</a>
									<a class="dropdown-item" href="">Academic calendar</a>
									<a class="dropdown-item" href="">Lesson Plan</a>
									<a class="dropdown-item" href="">Syllabus</a>
									<a class="dropdown-item" href="">Class Routine</a>
									<a class="dropdown-item" href="">Co-curricular Activities</a>
								</div>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									INFORMATION<i class="fas fa-chevron-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ url('notice')}}">Notice Board</a>
									<a class="dropdown-item" href="">Facilities</a>
									<a class="dropdown-item" href="">News and Events</a>
									<a class="dropdown-item" href="">Our Achievements</a>
									<a class="dropdown-item" href="">List of Holidays</a>
									<a class="dropdown-item" href="">Teachers Info</a>
									<a class="dropdown-item" href="">Student Info</a>
									<a class="dropdown-item" href="">Policies & Guidelines</a>
									<a class="dropdown-item" href="">Library</a>
									<a class="dropdown-item" href="">Health and Environmental Awarness Info</a>
								</div>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									ADMISSION<i class="fas fa-chevron-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ url('apply')}}">Apply Now</a>
									<a class="dropdown-item" href="">Fast Facts‌</a>
									<a class="dropdown-item" href="">Fees & Payment</a>
									<a class="dropdown-item" href="">Scholarships</a>
									<a class="dropdown-item" href="">Transfer Procedures</a>
								</div>
							  </li>
							  <li class="nav-item dropdown">
								<a class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									 GALLERY<i class="fas fa-chevron-down"></i>
								</a>
								<div class="dropdown-menu" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ url('photoGallary')}}">Photo Gallery</a>
									<a class="dropdown-item" href="">Video Gallery‌</a>
								</div>
							</li>
							  
							  <li class="nav-item">
								<a class="nav-link" href="{{ url('contactUs')}}">CONTACT</a>
							  </li>
							</ul>
							<div class="navContact">
								<h4>Contact Info</h4>
								<span class="navMenuNumber">02-58310500</span> <span>vnsc_bd@yahoo.com</span>
								<ul>
									<li><i class="fab fa-facebook-f"></i></li>
									<li><i class="fab fa-twitter"></i></li>
									<li><i class="fab fa-instagram"></i></li>
									<li><i class="fab fa-linkedin-in"></i></li>
								</ul>
							</div>
						  </div>
					</div>
				</nav>
		<!----------------navBar------------->
</header>

    <!------banner part html------->
     @yield('contned') 


	<!-------------footer------------------->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="upfooter">
                        <ul>
                            
                            <li><img src="{{ asset('public/Fontend/image/mail.png')}}" alt=""> <span>Get Appointment</span> </li>
                            <li><img src="{{ asset('public/Fontend/image/placeholder.png')}}" alt=""> <span>Contact Us Today</span> </li>
                            <li><img src="{{ asset('public/Fontend/image/paper-plane.png')}}" alt=""> <span>Take a School Tour</span> </li>
                        </ul>
                    </div>
    
                </div>
            </div>
            <div class="row mt-4 m-footer">
                <div class="col-lg-3">
                    <div class="footer-logo">
                        <h5>About us</h5>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium, suscipit! Maiores officiis, cum quidem, modi nam enim porro, unde praesentium incidunt impedit alias non assumenda!</p>
                        <a href="#" class="btn">Contact us</a>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="quick-view">
                        <h5>IMPORTANT LINK</h5>
                        <ul>
                            <li><a href="http://www.dhaka.gov.bd/" style="color: #fff;">Dhaka Districts office</a></li>
                            <li><a href="https://www.dhakaeducationboard.gov.bd/" style="color: #fff;">Dhaka Education Board</a></li>
                            <li><a href="https://erp.dhakaeducationboard.gov.bd/index.php/auth/login/" style="color: #fff;">eTIF</a> </li>
                            <li><a href="http://www.dshe.gov.bd/" style="color: #fff;">Directorate of Secondary and Higher Education</a></li>
                            <li><a href="http://www.dpe.gov.bd/" style="color: #fff;">Directorate of Primary Education</a></li>
                            <li><a href="http://www.moedu.gov.bd/" style="color: #fff;">Ministry of Education</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="quick-view">
                        <h5>Contact Info</h5>
                        <ul>
                            <li>02-58310500</li>
                           
                            <p style="color: #fff;margin-top: 4px;margin-bottom: 7px; font-weight: bold;">Working ours</p>
                            <li>Week Days: 9 AM - 5 PM</li>
                            <li>Friday & Saturday  : Close</li>
                            <li>Help Line Number (Mobile)</li>
                            <li class="helpNumber">01867268422, 01866785183, 01866785184, 01733532830</li>
                            <li>Help Line Number (Tel)</li>
                            <li class="helpNumber">02-48317513, 02-48317519, 02-48317527, 
                                02-48317529
                                </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="facebook">
                        <h4>Visitor Counter</h4>
                        
						<ul>
                            <li class="visitorCounter"> <script type="text/javascript" src="https://www.stat-counter.org/count/77qp"></script><br>
                                <a href='https://www.stat-counter.org/' >,</a> <script type='text/javascript' src='https://www.whomania.com/ctr?id=be0d770bfd390f39b54121507de161916398253b'></script></li>
                        </ul>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="footerContact">
                        <h3>Contact Info</h3>
                        <ul>
                            <li>+88 01769856256</li>
                            <li>asc1957bd@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-lg-12 text-center">
                    <div class="icon">
                        <ul>
                            <li><i class="fab fa-facebook-f"></i></li>
                            <li><i class="fab fa-twitter"></i></li>
                            <li><i class="fab fa-instagram"></i></li>
                            <li><i class="fab fa-linkedin-in"></i></li>
                        </ul>
                    </div>
                    <div class="copyright">
                        <p>© Copyright 2020 , All Rights Reserved <br> Powered by ODHYYON, A product of <a href="https://addiesoft.com/" style="color: #fff;">ADDIE Soft Ltd</a>.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!---------footer------------------>



<!-- To Top -->
<a id="totop" href="#top"><i class="tm-acadevo-icon-angle-up"></i></a>



<!-- JS, Popper.js, and jQuery -->

<script  src="{{ asset('public/Fontend/js/jquery-1.12.4.min.js')}}"></script>
<script  src="{{ asset('public/Fontend/js/bootstrap.min.js')}}"></script>
<script  src="{{ asset('public/Fontend/js/slick.min.js')}}"></script>
<script src="https://kit.fontawesome.com/dedaf8eeba.js" crossorigin="anonymous"></script>
<script  src="{{ asset('public/Fontend/js/venobox.min.js')}}"></script>
<script  src="{{ asset('public/Fontend/js/wow.min.js')}}"></script>
<script  src="{{ asset('public/Fontend/js/custom.js')}}"></script>

<script>
	$( document ).ready(function() {
	
	// Loop through each nav item
	$('nav.navbar').children('ul.nav').children('li').each(function(indexCount){
		
		// loop through each dropdown, count children and apply a animation delay based on their index value
		$(this).children('ul.dropdown').children('li').each(function(index){
			
			// Turn the index value into a reasonable animation delay
				var delay = 0.1 + index*0.03;
				
				// Apply the animation delay
				$(this).css("animation-delay", delay + "s")			
			});
		});
	});
</script>


</body>

</html>
