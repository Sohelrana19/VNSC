

@extends('Fontend.LayoutInner.master')

@section('contned')


    <!------banner part html------->
    <section id="banner">
        
        <div class="row mx-0 slider">
			@foreach ($slider as $user)
            <div class="col-lg-12 p-0">
                <div class="banner-slide">
					<img src="{{URL::to($user->image)}}" class="-mg-fulid w-100 sliderMobil" alt="">
					<div class="bannerText">
						<div class="admission">
							<p>Admission 2020</p>
						</div>
						<h3>Get A Place.</h3>
						<h3>Get Ahead.</h3>

						<h5>Apply Before your Exams to Secure a Place</h5>
						<!-- <a href="">Apply Now</a> -->

					</div>
                </div>
			</div>
			@endforeach
        </div>
    </section>
    <!------banner part html------->


<section id="latestNews">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
			<div class="latestNews">
				<p>Latest Update</p>
			</div>
			<div class="scrollNews">
				<marquee class="col-xs-10 scroll-title" behavior="" direction="" onmouseover="this.stop();" onmouseout="this.start();">
					<p>২০২০-২০২১ শিক্ষাবর্ষে একাদশ শ্রেণিতে ভর্তি বিজ্ঞপ্তি || অনলাইন ক্লাসের মাধ্যমে পাঠদান কার্যক্রম ||</p>
				</marquee>
				
			</div>
		</div>
		</div>
	</div>
</section>

<section id="gbSection">
	<div class="container">
		<div class="row">
			
			<div class="col-lg-6">
				<div class="gbMain">
					<div class="gbImage">
					<img src="{{ asset('public/Fontend/image/GB/Mustafiz sir.jpg -2.jpg')}}" class="img-fulid w-100" alt="">
					<div class="gbName">
						<p>Md Mustafizur Rahman, PAA</p>
                            <h5>Chairman, Viqarunnisa Noon School & College</h5>
					</div>
				</div>
				<div class="gbIText">
					<div class="gbspeecs">
						<p>Viqarunnisa Noon School & College is an all-girls educational institute in Baily Road, Dhaka, Bangladesh. It has 4 campuses and around 25,000 students. Viqarunnisa Noon School & College is one of the renowned educational institutes in Bangladesh. We consider every child as unique and so we maintain inclusive learning-teaching environment at every step in our great set-up.
 
						</p>
					</div>
					<a href="chairmanspeech.html">Read More <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="gbMain">
					<div class="gbImage">
					<img src="{{ asset('public/Fontend/image/GB/Fougia Principal.jpg')}}" class="img-fulid w-100" alt="">
					<div class="gbName">
						<p>Professor Fougia</p>
                            <h5>Principal, Viqarunnisa Noon School & College</h5>
					</div>
				</div>
				<div class="gbIText">
					<div class="gbspeecs">
						<p> Viqarunnisa Noon School & College is an all-girls educational institute in Baily Road, Dhaka, Bangladesh. It has 4 campuses and around 25,000 students. Viqarunnisa Noon School & College is one of the renowned educational institutes in Bangladesh. We consider every child as unique and so we maintain inclusive learning-teaching environment at every step in our great set-up.
 
						</p>
					</div>
					<a href="principleSpeech.html">Read More <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section id="mainNotice">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<ul class="nav nav-pills newsEvent mb-3" id="pills-tab" role="tablist">
					<li class="nav-item" role="presentation">
						<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">All News</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Academics</a>
					</li>
					<li class="nav-item" role="presentation">
						<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Examination</a>
					</li>
				</ul>
				<div class="tab-content" id="pills-tabContent">
					<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						<div class="row">
							@foreach ($event as $row)
								
							
							<div class="col-lg-6">
								<div class="card eventCar">
								<img src="{{URL::to($row->image)}}" class="card-img-top" alt="...">
								<div class="card-body eventCardBody">
									<p class="card-text">{{$row->title}}</p>

									
								</div>
								</div>
							</div>
							@endforeach

							<div class="col-lg-6">
								<div class="row">
									@foreach ($news as $row)
									<div class="col-lg-12">
									<a href="{{ url('newsEventView',$row->id)}}">
											<div class="eventRightImage">
												<img src="{{URL::to($row->image)}}" class="imgfulid w-100" alt="">
											</div>
											<div class="eventRightText">
											<p class="card-text">{{$row->title}}</p>
											
												{{-- <h6>15 July, 2020</h6> --}}
											</div>
										</a>
									</div>
									@endforeach
								</div>
							</div>
						</div>
					</div>
					<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
					<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="noticeIteam">

					<h3>Notice Board</h3>
					<marquee behavior="" direction="up" scrollamount="2">
						<ul>
							@foreach ($allNotice as $row)
								
							
							<li>
							<a href="{{ url('notice')}}">
									<div class="noticeDate">
										<p>{{date('d-m-Y', strtotime($row->created_at))}}</p>
										</div>
										<div class="noticeDetails">
											<p>{{$row->title}}</p>
										</div>
								</a>
							</li>	
							@endforeach
						</ul>
					</marquee>
				</div>
			</div>
		</div>
	</div>
</section>
    


<!----Branch ------->
    <!------------branch---------------->
	<section id="branch">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="branchhead text-center ">
						<h2>Our Branch</h2>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach ($branch as $key => $row)
					
				
				<div class="col-lg-6">
					<a href="{{ url('branchDetails',$row->id)}}">
						<div class="branch">
							<img src="{{URL::to($row->branchImage)}}" alt="">
							<div class="branchtext">
								<div class="campusname">
									<p>{{$row->branchName}}</p>
									<h6>{{$row->branchlocation}}</h6>
								</div>
								<div class="college collegebranch text-center">
									<h4>Branch</h4>
								<h5>{{$key+1}}</h5>
								</div>
								<div class="addressdetailsmubc">
									<div class="addresscampus">
										<p>{{$row->branchAddress}}</p>
									</div>
									<div class="phone">
										<p>Phone:</p>
										<h6>{{$row->branchNumber}}</h6>
									</div>
								</div>
							</div>
						</div>
					</a>
				</div>
				@endforeach
			</div>
		</div>
	</section>
	<!------------branch---------------->
<!------ Banner ------>


<section id="bekash">
        <div class="container">
            <div class="row">
                <div class="bakash">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="bekashpap bekashpaptop">
                                <img src="{{ asset('public/Fontend/image/bekash/bkashapp.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="bekashpay">
                                <p>You can pay any fee through</p>
                                <h4> Bkash</h4>
                                <img src="{{ asset('public/Fontend/image/bekash/bekas2.png')}}" alt=""> <br>
                                <a target="blank" href="{{ asset('public/Fontend/image/notice/noticePDF/Uploads_VNS Process.jpg')}}" >bKash Pay to Bill Process Flow</a> 
                                <h6></h6>
                                <a target="blank" href="{{ asset('public/Fontend/image/notice/noticePDF/Uploads_Online Banking Instruction Update 12.08.2020.pdf')}}" >Fees Payment Instruction (Sonali Bank Online Banking)</a>
                            </div>
                            </div>
                            <div class="modal fade" id="bekashPaymentImg" tabindex="-1" aria-labelledby="bekashPaymentImgLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <!-- <h5 class="modal-title" id="bekashPaymentImgLabel">Modal title</h5> -->
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('public/Fontend/image/bekash/ResidentialProcess.png')}}" class="img-fulid w-100" alt="">
                                    </div>
                                    
                                </div>
                                </div>
                        </div>
                        </div>
                    </div>
                

                <div class="bakash">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="bekashpap bekashpaptop">
                                <img src="{{ asset('public/Fontend/image/bekash/parentportal.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="bekashpay portal">
                                <p>You can pay any fee through</p>
                                <h4> Parent's Portal</h4>
                                <img src="{{ asset('public/Fontend/image/bekash/portal2.png')}}" alt="">
                                <a href="#">View Details</a>
                            </div>
                        </div>
                    </div>
				</div>
			 </div>
            </div>
        </div>
    </section>

 <!--------------bekash part-------------------->

<!-------Know Part--------->
<section id="knowSection">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="knowHeader">
					<p>YOU CAN KNOW</p>
					<h3>By Our Digital Documents</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4">
				<div class="knowIteam">
					<div class="knowIcon">
						<a href=""><img src="{{ asset('public/Fontend/image/youtubicon.svg')}}" alt=""></a>
					</div>
					<h3>YouTube</h3>
					<h4>Educational Channel</h4>
					<a href="https://www.youtube.com/channel/UCdzDg5X2iAYXaMMm2tE0n9g">View Details <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="knowIteam">
					<div class="knowIcon">
						<a href="https://www.facebook.com/www.vnsc.edu.bd/">
							<img src="{{ asset('public/Fontend/image/know/002-time-management.svg')}}" alt="">
						</a>
					</div>
					<h3>নূন বাতায়ন : স্কুল</h3>
					<h4>Class Routine Details</h4>
					<a href="https://www.facebook.com/www.vnsc.edu.bd/">View Details <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="knowIteam">
					<div class="knowIcon">
						<a href="https://www.facebook.com/%E0%A6%A8%E0%A7%82%E0%A6%A8-%E0%A6%AC%E0%A6%BE%E0%A6%A4%E0%A6%BE%E0%A7%9F%E0%A6%A8-%E0%A6%95%E0%A6%B2%E0%A7%87%E0%A6%9C-105369724629579">
							<img src="{{ asset('public/Fontend/image/know/003-brochure.svg')}}" alt="">
						</a>
					</div>
					<h3>নূন বাতায়ন : কলেজ</h3>
					<h4>Institution Details</h4>
					<a href="https://www.facebook.com/%E0%A6%A8%E0%A7%82%E0%A6%A8-%E0%A6%AC%E0%A6%BE%E0%A6%A4%E0%A6%BE%E0%A7%9F%E0%A6%A8-%E0%A6%95%E0%A6%B2%E0%A7%87%E0%A6%9C-105369724629579">View Details <img src="{{ asset('public/Fontend/image/schoolLogo/ic_arrow_back_18px.svg')}}" alt=""></a>
				</div>
			</div>
		</div>
	</div>
</section>
<!-------Know Part--------->

<section id="videoGallarySection">
	<div class="container">
		<div class="row">
			<div class="col-lg-7">
				<div class="videoGallaryImage">
					<img src="{{ asset('public/Fontend/image/videoGallary/video.png')}}" alt="">
				</div>
			</div>
			<div class="col-lg-5">
				<div class="videoText">
					<h3>VIDEO GALLERY</h3>
					<h2>Watch our latest video</h2>
					<a href="">Apply Now</a>
				</div>
			</div>
		</div>
	</div>
</section>



 <!---------image gallary----------->
 <section>
	<div class="container">
		<div class="row mt-5 mx-0">
			<div class="col-lg-12">
				<div class="gallary text-center">
					<h2>PHOTO GALLERY</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6">
				<div class="gallary">
					<div class="row">
						@foreach ($photo as $row)
							
						
						<div class="col-lg-6">
							<div class="gallaryimg-main">
								<div class="gallaryrightimage">
								
									<a class="venobox" data-gall="gallery01" href="{{URL::to($row->gallaryImage)}}"><img src="{{URL::to($row->gallaryImage)}}" alt="" class="img-fulid w-100"></a>
									
								</div>

							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="gallary bigGallary">
					<a class="venobox" data-gall="gallery01" href="{{ asset('public/Fontend/image/Event/eventBig.png')}}"><img src="{{ asset('public/Fontend/image/Event/eventBig.png')}}" alt="" class="img-fulid w-100"></a>
					
				</div>
			</div>
		</div>
	</div>
</section>
<!---------image gallary----------->

    <!------app part-------------->

    <section id="apps">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="apps-download">
                        <h3>GET OUR APP NOW!</h3>
                        <p>Integrated with Mobile Apps, Hardware &amp; API connectivity, Student or Parents Portal, which taking care of Academic and Administrative activities on an institution.</p>
                        <a href="https://play.google.com/store/apps/details?id=com.addiesoft.oems_apps&amp;pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1"><img alt="Get it on Google Play" src="https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png" class="img-fulid w-100"></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="apps-mobil">
                        <img src="{{ asset('public/Fontend/image/apps.png')}}" class="img-fulid" alt="">
                    </div>
                </div>
            </div>
        </div>

    </section>
	<!-------app party------------>
	 <!---------admission part----------------->
    <section id="admissinpart">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 m-auto">
                    <div class="ourScool">
						<p>Here you can review some statistics about our School</p>

						<div class="ourSchoolIteam">
							<div class="schoolIcon">
								<img src="{{ asset('public/Fontend/image/schoolLogo/005-teacher-1.svg')}}" alt="">
							</div>
							<div class="schoolIconText">
								<h3>253+</h3>
								<p>Certified Teachers</p>
							</div>
						</div>
						<div class="ourSchoolIteam">
							<div class="schoolIcon">
								<img src="{{ asset('public/Fontend/image/schoolLogo/007-student.svg')}}" alt="">
							</div>
							<div class="schoolIconText">
								<h3>253555</h3>
								<p>Certified Teachers</p>
							</div>
						</div>
						<div class="ourSchoolIteam">
							<div class="schoolIcon">
								<img src="{{ asset('public/Fontend/image/schoolLogo/008-rating.svg')}}" alt="">
							</div>
							<div class="schoolIconText">
								<h3>97%</h3>
								<p>Certified Teachers</p>
							</div>
						</div>
						<div class="ourSchoolIteam">
							<div class="schoolIcon">
								<img src="{{ asset('public/Fontend/image/schoolLogo/009-family.svg')}}" alt="">
							</div>
							<div class="schoolIconText">
								<h3>100%</h3>
								<p>Certified Teachers</p>
							</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
@endsection
