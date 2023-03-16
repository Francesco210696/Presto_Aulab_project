 <!-- FOOTER START -->
 <div class="footer p-3  ">
     <div class="row ">
         <div class="col-12 text-center">
             @if (session()->has('message'))
                 <p class="text-success fw-bold">{{ session('message') }}</p>
             @endif
         </div>
         {{-- about Us --}}
         <div class="col-4">
            <h3 class="f-title">Per te</h3>
             
                 <div class="li-foot d-block mb-3 ">
                     <a class="footer-a btn" href="{{ route('became.revisor') }}">
                         {{ __('ui.about') }}
                     </a>
                    </div>
                 <div class="li-foot ">
                     <a href="{{ route('contactUs') }}" class="footer-a btn">
                         Contattaci
                     </a>
                    </div>
             
         </div>

         {{-- Where Find --}}
         <div class="col-4">
             <h3 class="f-title">{{ __('ui.company') }}</h3>
             
             <div class="nav-elements">
                sede Legale: La nostra sede legale
                <br>
                contatti: 0302211544
                <br>
                P.Iva 00234681256646
                <br>
                 <a href="#" class="footer-a">Leggi l'informativa sulla privacy</a>
                <br>
                 © 2023 Soon. Tutti i diritti riservati
                 

             </div>
         </div>


         <div class="col-4">
            <h3 class="f-title">Dove trovarci</h3>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d118930.13300054015!2d-157.94259507673553!3d21.328132818158576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7c00183b8cc3464d%3A0x4b28f55ff3a7976c!2sHonolulu%2C%20Hawaii%2C%20Stati%20Uniti!5e0!3m2!1sit!2sit!4v1678995911826!5m2!1sit!2sit" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         </div>
     </div>
 </div>

 <!-- END OF FOOTER -->
