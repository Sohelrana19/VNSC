@extends('Fontend.LayoutInner.master')

@section('contned')

 <!--------------about banner--------------->
 <section id="noticeBanner" class="routineBanner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-banner-text ">
                    <h3>ক্লাস রুটিন</h3>
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
                            <img src="{{ asset('public/Fontend/image/classrotuin/classRoutinebanner.png')}}" class="img-fulid w-100" alt="">
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
           <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="shiftName">
                        <p>Morning Shift</p>
                    </div>
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ১ম শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineMorning1')}}" target="blank"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ২য় শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineMorning2')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ৩য় শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineMorning3')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ৪র্থ শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineMorning4')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ৫ম শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineMorning5')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ৬ষ্ঠ শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineMorning6')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ৭ম শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineMorning7')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ৮ম শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineMorning8')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ৯ম শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineMorning9')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ১০ম শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineMorning10')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- এইচএসসি(11)</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineMorning11')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- এইচএসসি(12)</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineMorning12')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
            </div>
           </div>
           <div class="col-lg-6">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <div class="shiftName">
                        <p>Day Shift</p>
                    </div>
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ১ম শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineDay1')}}" target="blank"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ২য় শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineDay2')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ৩য় শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineDay3')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ৪র্থ শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineDay4')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ৫ম শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineDay5')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ৬ষ্ঠ শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineDay6')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ৭ম শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineDay7')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ৮ম শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineDay8')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ৯ম শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineDay9')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
                   <div class="col-lg-12 mb-3">
                    <div class="schoolNoticeDetails syllabus">
                       <div class="noticedetailsLeft downloadSallybusText downloadRoutineText">
                        <h3>ক্লাস রুটিন- ১০ম শ্রেণি</h3>
                       </div>
                       <div class="noticedetailRight downloadSallybus text-center downloadRoutine">
                        <a href="{{ asset('routineDay10')}}"><img src="{{ asset('public/Fontend/image/notice/slybus.svg')}}" alt=""> <span>Download Routine</span></a>
                       </div>
                    </div>
                   </div>
            </div>
           </div>
    </div>
</section>






@endsection
