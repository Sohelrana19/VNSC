<div id="sidebar-scrollbar">
    <nav class="iq-sidebar-menu">
       <ul class="iq-menu">
        @if(Auth::user()->userType=='Admin')
          <li class="active">
             <a href="javascript:void(0);" class="iq-waves-effect"><i class="las la-home"></i><span>Manage User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
             <ul class="iq-submenu">
             <li class=""><a href="{{ route('users.view')}}">View User</a></li>

             </ul>
          </li>
          @endif

          <li>
             <a href="javascript:void(0);" class="iq-waves-effect"></i><span>Slider</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
             <ul class="iq-submenu">
                <li><a href="{{ route('slider.view')}}">Add Slider</a></li>
                {{-- <li><a href="e-commerce-product-detail.html">Product Details</a></li> --}}

             </ul>
          </li>
          <li>
            <a href="javascript:void(0);" class="iq-waves-effect"></i><span>Notice</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">
               
               <li><a href="{{ route('notice.view')}}">Add Notice</a></li>
            </ul>
         </li>
         <li>
            <a href="javascript:void(0);" class="iq-waves-effect"></i><span>Photo Album</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">
               
               <li><a href="{{ route('album.view')}}">Add Album</a></li>
            </ul>
         </li>
         <li>
            <a href="javascript:void(0);" class="iq-waves-effect"></i><span>Photo Gallery</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">
               
               <li><a href="{{ route('gallary.view')}}">Add Gallery</a></li>
            </ul>
         </li>
         <li>
            <a href="javascript:void(0);" class="iq-waves-effect"></i><span>Branche</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">
               
               <li><a href="{{ route('branche.view')}}">Add Branche</a></li>
            </ul>
         </li>
         <li>
            <a href="javascript:void(0);" class="iq-waves-effect"></i><span>News & Eveny</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
            <ul class="iq-submenu">
               
               <li><a href="{{ route('newsEvent.view')}}">Add News & Eveny</a></li>
            </ul>
         </li>
       </ul>
    </nav>
    <d iv class="p-3"></div>
 </div>
