 <!-- FOOTER START -->
 <div class="footer ">
     <div class="row  p-5">
         <div class="col-12 text-center">
             @if (session()->has('message'))
                 <p class="text-success fw-bold">{{ session('message') }}</p>
             @endif
         </div>
         {{-- about Us --}}
         <div class="col-4">
           
             <ul>
                 <li class=""><a class="footer-a nav-elements btn" href="{{ route('became.revisor') }}">{{ __('ui.about')}}</a></li>
             </ul>
         </div>

        {{-- Where Find --}}
         <div class="col-4">
            <h3 class="f-title">{{ __('ui.company') }}</h3>
            <ul>
               
            </ul>
        </div>

       
        <div class="col-4">
            <ul>
                <li class=""><a class="footer-a nav-elements btn" href="{{ route('became.revisor') }}"></a></li>
            </ul>
        </div>
     </div>
 </div>

 <!-- END OF FOOTER -->
