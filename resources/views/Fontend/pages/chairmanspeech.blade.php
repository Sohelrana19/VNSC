
@extends('Fontend.LayoutInner.master')

@section('contned')




<section id="pageName">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="pageName">
                    <h3>সভাপতির বাণী</h3>
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
							
						  </li>
					  </ul>
					  
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="patronImage chairmanImage">
                            <img src="{{ asset('public/Fontend/image/GB/Mustafiz sir.jpg -2.jpg')}}" alt="">
                        </div>
                        <div class="patronImageAdvice">
                            <p>Welcome to Viqarunnisa Noon School & College website. As you read through the pages of this site, you will learn about our wonderful students, our School and get a feel for the vibrancy and strength of our wider Viqarunnisa Noon School & College community.
         
                                Viqarunnisa Noon School & College is an all-girls educational institute in Baily Road, Dhaka, Bangladesh. It has 4 campuses and around 25,000 students. Viqarunnisa Noon School & College is one of the renowned educational institutes in Bangladesh. We consider every child as unique and so we maintain inclusive learning-teaching environment at every step in our great set-up. It is a fact now that our results are getting better in the public examinations every time. It has been made possible through our extensive and effective care stretched out to every individual student. Our students conglomerate here from multifarious backgrounds; various strata of the society. They enter the threshold of our strong and fortified home of learning and come out bearing an all-round personality.</p>
                            <div class="patronDetails">
                                <h4>Md Mustafizur Rahman, PAA</h4>
                                <h5>Chairman</h5>
                                <h6>Viqarunnisa Noon School & College</h6>
                            </div>
                        </div>
                    </div>
        
        
                    </div>
            </div>
        </div>
    </div>
</section>




@endsection
