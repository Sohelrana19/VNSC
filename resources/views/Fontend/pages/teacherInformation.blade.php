@extends('Fontend.LayoutInner.master')

@section('contned')

<!--------------about banner--------------->
<section id="noticeBanner" class="applyNow">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-banner-text ">
                    <h3>শিক্ষকদের তথ্য</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------about banner--------------->

<section>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="noticeBoard">
                            <img src="{{ asset('public/Fontend/image/teacher/teacher.png')}}" class="img-fulid w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="side-menu teacherInfName">
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



<!------------Teacher------------->
<section id="teacherInformation">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="iq-card">
                    <div class="iq-card-body">
                     <div id="table" class="table-editable">
                       <table id="example" class="table table-responsive-md teacherTable table-striped text-center">
                        <thead>
                            <tr>
                              {{-- <th>ID</th> --}}
                              <th></th>
                              <th>Name</th>
                              <th>Designation</th>
                              {{-- <th>Mobil Number</th> --}}
                              <th>Educational Qualifications</th>
                            </tr>
                          </thead>
                          <tbody>

                           @foreach ($empData as $kye => $value )

                           @if ($kye== 'results')
                           @foreach ( $value as $mydata)
                           <tr>
                              {{-- <td contenteditable="true"><img src="{{ ($mydata['EmpImage']) }}" alt=""></td> --}}
                               <td contenteditable="true" class="teacherInfoImage"><img src="data:image/jpeg;base64, {{ ($mydata['EmpImage']) }}" alt=""></td>
                               <td contenteditable="true" class="teacherinfName"><p>{{ $mydata['FullName']}}</p></td>
                               <td contenteditable="true">{{ $mydata['DesignationName']}}</td>
                               {{-- <td contenteditable="true">{{ $mydata['MobileNo']}}</td> --}}
                               <td contenteditable="true">{{ $mydata['Qualification']}}</td>
                               {{-- <td contenteditable="true">{{ date('d-M-y', strtotime($mydata['JoiningDate'])) }}</td> --}}
                             </tr>

                           @endforeach
                           @endif
                           @endforeach


                          </tbody>
                       </table>
                     </div>
                 </div>
              </div>
            </div>
        </div>
    </div>
</section>
<!------------Teacher------------->





@endsection
