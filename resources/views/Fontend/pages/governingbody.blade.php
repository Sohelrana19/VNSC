@extends('Fontend.LayoutInner.master')

@section('contned')

<section id="pageName">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pageName">
                    <h3>Governing Body</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pageBody">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="pageMenu">
					<p>Choose related option</p>
                    <ul id="accordion" class="accordion">
						<li>
						  <div class="link"><a href="#">History</a><i class="fa fa-chevron-down"></i></div>
						 
						</li>
						<li>
						  <div class="link">Infrastructure<i class="fa fa-chevron-down"></i></div>
						 
						</li>
						<li>
						  <div class="link">At A Glance<i class="fa fa-chevron-down"></i></div>
						  
						</li>
						<li>
						  <div class="link">Mission & Vision<i class="fa fa-chevron-down"></i></div>
						  
						</li>
						<li>
							<div class="link">Achievement <i class="fa fa-chevron-down"></i></div>
						  </li>
						  <li>
							<div class="link">News & Events <i class="fa fa-chevron-down"></i></div>
							<ul class="submenu">
							  <li><a href="#">Google</a></li>
							  <li><a href="#">Bing</a></li>
							  <li><a href="#">Yahoo</a></li>
							</ul>
						  </li>
					  </ul>
					  
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-9 m-auto">
                        <div class="row">
                            <div class="teacherImageMain col-lg-6">
                                <a href="" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">
                                    <div class="teacherImage">
                                        <img src="{{ asset('public/Fontend/image/GB/Mustafiz sir.jpg -2.jpg')}}" class="img-fulid w-100 " alt="">
                                        
                                        <div class="teacherSocialAccount text-center">
                                            <ul>
                                                <li><i class="fab fa-facebook-f"></i></li>
                                                <li><i class="fab fa-twitter"></i></li>
                                                <li><i class="fab fa-instagram"></i></li>
                                                <li><i class="fab fa-linkedin-in"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="teacherName">
                                        <h4>জনাব মো: মোস্তাফিজুর রহমান পিএএ</h4>
                                        <p>সভাপতি</p>
                                    </div>
                                </a>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="teacherImageMain col-lg-6" data-toggle="modal" data-target="#exampleModal2" data-whatever="@mdo">
                                <div class="teacherImage">
                                    <img src="{{ asset('public/Fontend/image/GB/Fougia Principal.jpg')}}" class="img-fulid w-100 " alt="">
                                    
                                    <div class="teacherSocialAccount text-center">
                                        <ul>
                                            <li><i class="fab fa-facebook-f"></i></li>
                                            <li><i class="fab fa-twitter"></i></li>
                                            <li><i class="fab fa-instagram"></i></li>
                                            <li><i class="fab fa-linkedin-in"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="teacherName">
                                    <h4>জনাব অধ্যাপক ফওজিয়া (অধ্যক্ষ) </h4>
                                    <p>সদস্য সচিব</p>
                                </div>
                                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="row">
                            <div class="teacherImageMain col-lg-4" data-toggle="modal" data-target="#exampleModal3" data-whatever="@mdo">
                                <div class="teacherImage">
                                    <img src="{{ asset('public/Fontend/image/GB/Moniruzzaman Khokon.jpg')}}" class="img-fulid w-100 " alt="">
                                    
                                    <div class="teacherSocialAccount text-center">
                                        <ul>
                                            <li><i class="fab fa-facebook-f"></i></li>
                                            <li><i class="fab fa-twitter"></i></li>
                                            <li><i class="fab fa-instagram"></i></li>
                                            <li><i class="fab fa-linkedin-in"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="teacherName">
                                    <h4>জনাব এ. বি. এম. মনিরুজ্জামান</h4>
                                    <p>অভিভাবক প্রতিনিধি (উচ্চ মাধ্যমিক)</p>
                                </div>
                                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel3" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel3">New message</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="teacherImageMain col-lg-4" data-toggle="modal" data-target="#exampleModal4" data-whatever="@mdo">
                                <div class="teacherImage">
                                    <img src="{{ asset('public/Fontend/image/GB/Morshida Akther.jpg')}}" class="img-fulid w-100 " alt="">
                                    
                                    <div class="teacherSocialAccount text-center">
                                        <ul>
                                            <li><i class="fab fa-facebook-f"></i></li>
                                            <li><i class="fab fa-twitter"></i></li>
                                            <li><i class="fab fa-instagram"></i></li>
                                            <li><i class="fab fa-linkedin-in"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="teacherName">
                                    <h4>জনাব মুর্শিদা আখতার</h4>
                                    <p>অভিভাবক প্রতিনিধি (উচ্চ মাধ্যমিক)</p>
                                </div>
                                <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel4" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel4">New message</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="teacherImageMain col-lg-4" data-toggle="modal" data-target="#exampleModal5" data-whatever="@mdo">
                                <div class="teacherImage">
                                    <img src="{{ asset('public/Fontend/image/GB/Siddique Nasir.jpg')}}" class="img-fulid w-100 " alt="">
                                    
                                    <div class="teacherSocialAccount text-center">
                                        <ul>
                                            <li><i class="fab fa-facebook-f"></i></li>
                                            <li><i class="fab fa-twitter"></i></li>
                                            <li><i class="fab fa-instagram"></i></li>
                                            <li><i class="fab fa-linkedin-in"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="teacherName">
                                    <h4>জনাব সিদ্দিকী নাছির উদ্দিন</h4>
                                    <p>অভিভাবক প্রতিনিধি (মাধ্যমিক)</p>
                                </div>
                                <div class="modal fade" id="exampleModal5" tabindex="-1" aria-labelledby="exampleModalLabel5" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel5">New message</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="col-lg-12 m-auto">
                        <div class="row">
                            <div class="teacherImageMain col-lg-4" data-toggle="modal" data-target="#exampleModal6" data-whatever="@mdo">
                                <div class="teacherImage">
                                    <img src="{{ asset('public/Fontend/image/GB/Md. Ohaduj Zaman.jpg')}}" class="img-fulid w-100 " alt="">
                                    
                                    <div class="teacherSocialAccount text-center">
                                        <ul>
                                            <li><i class="fab fa-facebook-f"></i></li>
                                            <li><i class="fab fa-twitter"></i></li>
                                            <li><i class="fab fa-instagram"></i></li>
                                            <li><i class="fab fa-linkedin-in"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="teacherName">
                                    <h4>জনাব ওহেদুজ জামান (মন্টু)</h4>
                                    <p>অভিভাবক প্রতিনিধি (মাধ্যমিক)</p>
                                </div>
                                <div class="modal fade" id="exampleModal6" tabindex="-1" aria-labelledby="exampleModalLabel6" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel6">New message</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="teacherImageMain col-lg-4" data-toggle="modal" data-target="#exampleModal7" data-whatever="@mdo">
                                <div class="teacherImage">
                                    <img src="{{ asset('public/Fontend/image/GB/Golam Benzir.jpg')}}" class="img-fulid w-100 " alt="">
                                    
                                    <div class="teacherSocialAccount text-center">
                                        <ul>
                                            <li><i class="fab fa-facebook-f"></i></li>
                                            <li><i class="fab fa-twitter"></i></li>
                                            <li><i class="fab fa-instagram"></i></li>
                                            <li><i class="fab fa-linkedin-in"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="teacherName">
                                    <h4>জনাব গোলাম বেনজীর</h4>
                                    <p>অভিভাবক প্রতিনিধি (প্রাথমিক)</p>
                                </div>
                                <div class="modal fade" id="exampleModal7" tabindex="-1" aria-labelledby="exampleModalLabel7" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel7">New message</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                            <div class="teacherImageMain col-lg-4" data-toggle="modal" data-target="#exampleModal8" data-whatever="@mdo">
                                <div class="teacherImage">
                                    <img src="{{ asset('public/Fontend/image/GB/Advocate Rina Parveen.jpg')}}" class="img-fulid w-100 " alt="">
                                    
                                    <div class="teacherSocialAccount text-center">
                                        <ul>
                                            <li><i class="fab fa-facebook-f"></i></li>
                                            <li><i class="fab fa-twitter"></i></li>
                                            <li><i class="fab fa-instagram"></i></li>
                                            <li><i class="fab fa-linkedin-in"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="teacherName">
                                    <h4>জনাব এ্যাডভোকেট রীনা পারভীন</h4>
                                    <p>অভিভাবক প্রতিনিধি (সংরক্ষিত মহিলা)</p>
                                </div>
                                <div class="modal fade" id="exampleModal8" tabindex="-1" aria-labelledby="exampleModalLabel8" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel8">New message</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    
    
                <div class="row">
                   <div class="col-lg-12 m-auto">
                       <div class="row">
                        <div class="teacherImageMain col-lg-4" data-toggle="modal" data-target="#exampleModal9" data-whatever="@mdo">
                            <div class="teacherImage">
                                <img src="{{ asset('public/Fontend/image/GB/Badrul Alam.jpg')}}" class="img-fulid w-100 " alt="">
                                
                                <div class="teacherSocialAccount text-center">
                                    <ul>
                                        <li><i class="fab fa-facebook-f"></i></li>
                                        <li><i class="fab fa-twitter"></i></li>
                                        <li><i class="fab fa-instagram"></i></li>
                                        <li><i class="fab fa-linkedin-in"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="teacherName">
                                <h4>জনাব বাদরুল আলম</h4>
                                <p>শিক্ষক প্রতিনিধি (কলেজ)</p>
                            </div>
                            <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel9" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
        
                        <div class="teacherImageMain col-lg-4" data-toggle="modal" data-target="#exampleModal10" data-whatever="@mdo">
                            <div class="teacherImage">
                                <img src="{{ asset('public/Fontend/image/GB/Fatema Zohra.jpg')}}" class="img-fulid w-100 " alt="">
                                
                                <div class="teacherSocialAccount text-center">
                                    <ul>
                                        <li><i class="fab fa-facebook-f"></i></li>
                                        <li><i class="fab fa-twitter"></i></li>
                                        <li><i class="fab fa-instagram"></i></li>
                                        <li><i class="fab fa-linkedin-in"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="teacherName">
                                <h4>জনাব ফাতেমা জোহরা হক</h4>
                                <p>শিক্ষক প্রতিনিধি (স্কুল)</p>
                            </div>
                            <div class="modal fade" id="exampleModal10" tabindex="-1" aria-labelledby="exampleModalLabel10" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="teacherImageMain col-lg-4" data-toggle="modal" data-target="#exampleModal11" data-whatever="@mdo">
                            <div class="teacherImage">
                                <img src="{{ asset('public/Fontend/image/GB/Jannatul Ferdous.jpg')}}" class="img-fulid w-100 " alt="">
                                
                                <div class="teacherSocialAccount text-center">
                                    <ul>
                                        <li><i class="fab fa-facebook-f"></i></li>
                                        <li><i class="fab fa-twitter"></i></li>
                                        <li><i class="fab fa-instagram"></i></li>
                                        <li><i class="fab fa-linkedin-in"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="teacherName">
                                <h4>জনাব জান্নাতুল ফেরদৌস</h4>
                                <p>শিক্ষক প্রতিনিধি (সংরক্ষিত মহিলা)</p>
                            </div>
                            <div class="modal fade" id="exampleModal11" tabindex="-1" aria-labelledby="exampleModalLabel11" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                       </div>
                   </div>
                </div>
    
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="row">
                            <div class="teacherImageMain col-lg-8" data-toggle="modal" data-target="#exampleModal12" data-whatever="@mdo">
                                <div class="teacherImage">
                                    <img src="{{ asset('public/Fontend/image/GB/Moninul Islam 2.jpg')}}" class="img-fulid w-100 " alt="">
                                    
                                    <div class="teacherSocialAccount text-center">
                                        <ul>
                                            <li><i class="fab fa-facebook-f"></i></li>
                                            <li><i class="fab fa-twitter"></i></li>
                                            <li><i class="fab fa-instagram"></i></li>
                                            <li><i class="fab fa-linkedin-in"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="teacherName">
                                    <h4>জনাব মমিনুর রহমান</h4>
                                    <p>বিদ্যোৎসাহী সদস্য</p>
                                </div>
                                <div class="modal fade" id="exampleModal12" tabindex="-1" aria-labelledby="exampleModalLabel12" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          
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

@endsection
