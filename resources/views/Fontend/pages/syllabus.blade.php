@extends('Fontend.LayoutInner.master')

@section('contned')

<!--------------about banner--------------->
<section id="noticeBanner" class="syllabusbanner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-banner-text ">
                    <h3>সিলেবাস</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------about banner--------------->
<section>
    <div class="container">
        <div class="row mt-2">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="noticeBoard">
                            <img src="{{ asset('public/Fontend/image/notice/syllabus.png')}}" class="img-fulid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="side-menu">
                    <ul>
                        @foreach ( $submenu as $myMenu )
                        <a href="{{$myMenu->StaticViewUrl}}">
                            <li>{{$myMenu->MenunameBangla}}</li>
                        </a>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!------faunded-------->

<section id="noticeBoadfInner">
<div class="container">
   <div class="row">
       <div class="col-lg-9">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <div class="schoolNoticeDetails syllabus">
                   <div class="noticedetailsLeft downloadSallybusText">
                    <h3>সিলেবাস - ১ম শ্রেনী</h3>
                   </div>
                   <div class="noticedetailRight downloadSallybus text-center">
                    <a href="{{ asset('public/Fontend/image/salllybas/Class One.pdf')}}" target="blank"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Syllabus</span></a>
                   </div>
                </div>
               </div>
               <div class="col-lg-12 mb-3">
                <div class="schoolNoticeDetails syllabus">
                   <div class="noticedetailsLeft downloadSallybusText">
                    <h3>সিলেবাস - ২য় শ্রেনী</h3>
                   </div>
                   <div class="noticedetailRight downloadSallybus text-center">
                    <a href="{{ asset('public/Fontend/image/salllybas/2. Class  Two.pdf')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Syllabus</span></a>
                   </div>
                </div>
               </div>
               <div class="col-lg-12 mb-3">
                <div class="schoolNoticeDetails syllabus">
                   <div class="noticedetailsLeft downloadSallybusText">
                    <h3>সিলেবাস - ৩য় শ্রেনী</h3>
                   </div>
                   <div class="noticedetailRight downloadSallybus text-center">
                    <a href="{{ asset('public/Fontend/image/salllybas/3. Class  Three.pdf')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Syllabus</span></a>
                   </div>
                </div>
               </div>
               <div class="col-lg-12 mb-3">
                <div class="schoolNoticeDetails syllabus">
                   <div class="noticedetailsLeft downloadSallybusText">
                    <h3>সিলেবাস - ৪র্থ শ্রেনী</h3>
                   </div>
                   <div class="noticedetailRight downloadSallybus text-center">
                    <a href="{{ asset('public/Fontend/image/salllybas/4.  Class Four.pdf')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Syllabus</span></a>
                   </div>
                </div>
               </div>
               <div class="col-lg-12 mb-3">
                <div class="schoolNoticeDetails syllabus">
                   <div class="noticedetailsLeft downloadSallybusText">
                    <h3>সিলেবাস - ৫ম শ্রেনী</h3>
                   </div>
                   <div class="noticedetailRight downloadSallybus text-center">
                    <a href="{{ asset('public/Fontend/image/salllybas/5.  Class  Five.pdf')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Syllabus</span></a>
                   </div>
                </div>
               </div>
               <div class="col-lg-12 mb-3">
                <div class="schoolNoticeDetails syllabus">
                   <div class="noticedetailsLeft downloadSallybusText">
                    <h3>সিলেবাস - ৬ষ্ঠ শ্রেনী</h3>
                   </div>
                   <div class="noticedetailRight downloadSallybus text-center">
                    <a href="{{ asset('public/Fontend/image/salllybas/6. Class  Six.pdf')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Syllabus</span></a>
                   </div>
                </div>
               </div>
               <div class="col-lg-12 mb-3">
                <div class="schoolNoticeDetails syllabus">
                   <div class="noticedetailsLeft downloadSallybusText">
                    <h3>সিলেবাস - ৭ম শ্রেনী</h3>
                   </div>
                   <div class="noticedetailRight downloadSallybus text-center">
                    <a href="{{ asset('public/Fontend/image/salllybas/7.  Class  Seven.pdf')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Syllabus</span></a>
                   </div>
                </div>
               </div>
               <div class="col-lg-12 mb-3">
                <div class="schoolNoticeDetails syllabus">
                   <div class="noticedetailsLeft downloadSallybusText">
                    <h3>সিলেবাস - ৮ম শ্রেনী</h3>
                   </div>
                   <div class="noticedetailRight downloadSallybus text-center">
                    <a href="{{ asset('public/Fontend/image/salllybas/8.  Class Eight .pdf')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Syllabus</span></a>
                   </div>
                </div>
               </div>
               <div class="col-lg-12 mb-3">
                <div class="schoolNoticeDetails syllabus">
                   <div class="noticedetailsLeft downloadSallybusText">
                    <h3>সিলেবাস - ৯ম শ্রেনী</h3>
                   </div>
                   <div class="noticedetailRight downloadSallybus text-center">
                    <a href="{{ asset('public/Fontend/image/salllybas/9. Class Nine .pdf')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Syllabus</span></a>
                   </div>
                </div>
               </div>
               <div class="col-lg-12 mb-3">
                <div class="schoolNoticeDetails syllabus">
                   <div class="noticedetailsLeft downloadSallybusText">
                    <h3>সিলেবাস - ১০ম শ্রেনী</h3>
                   </div>
                   <div class="noticedetailRight downloadSallybus text-center">
                    <a href="{{ asset('public/Fontend/image/salllybas/10.  Class  Ten .pdf')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Syllabus</span></a>
                   </div>
                </div>
               </div>
               <div class="col-lg-12 mb-3">
                <div class="schoolNoticeDetails syllabus">
                   <div class="noticedetailsLeft downloadSallybusText">
                    <h3>সিলেবাস - এইচএসসি বিজ্ঞান শ্রেনী</h3>
                   </div>
                   <div class="noticedetailRight downloadSallybus text-center">
                    <a href="{{ asset('public/Fontend/image/salllybas/11. HSC  Seciene.pdf')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Syllabus</span></a>
                   </div>
                </div>
               </div>
               <div class="col-lg-12 mb-3">
                <div class="schoolNoticeDetails syllabus">
                   <div class="noticedetailsLeft downloadSallybusText">
                    <h3>সিলেবাস - এইচএসসি মানবিক শ্রেনী</h3>
                   </div>
                   <div class="noticedetailRight downloadSallybus text-center">
                    <a href="{{ asset('public/Fontend/image/salllybas/12. HSC Arts.pdf')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Syllabus</span></a>
                   </div>
                </div>
               </div>
               <div class="col-lg-12 mb-3">
                <div class="schoolNoticeDetails syllabus">
                   <div class="noticedetailsLeft downloadSallybusText">
                    <h3>সিলেবাস - এইচএসসি ব্যবসায় শিক্ষা শ্রেনী </h3>
                   </div>
                   <div class="noticedetailRight downloadSallybus text-center">
                    <a href="{{ asset('public/Fontend/image/salllybas/13. HSC  Busines.pdf')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Syllabus</span></a>
                   </div>
                </div>
               </div>

        </div>
       </div>

</div>
</section>




@endsection
