
 <footer class=" footer-bg pt-10">

  <!-- Section: Links  -->
  <section class="footer-styling">
    <div class="px-4">
      <!-- Grid row -->
      <div class="row">
        <!-- Grid column -->
        <div class="col-lg-3 mx-auto mb-4">
          <!-- Content -->
          <a class="" href="{{ route('home')}}">
          <img src="{{ asset('images/logo-cipd-2.webp') }}" width="176px" height="85px" class="mb-3" alt="logo" title="logo"></a>
          <p class="fw-normal">
            CIPD Assignment Help provides UK students with expertly crafted CIPD assignment samples. We uphold strict academic integrity, fostering genuine learning while prohibiting misuse of our authentic academic support resources.

          </p>
          
        </div>
        <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 mx-auto my-2 mt-4 lg:mt-0">
            <!-- Links -->
            <h5 class="text-title fw-bold mb-4">
            Quick Links
            </h5>
            <p>
              <a href="{{ route('about-us')}}" class="text-reset text-decoration-none font-medium">About Us</a>
            </p>

            <p class="pt-3">
              <a href="{{ route('reviews')}}" class="text-reset text-decoration-none font-medium">Reviews</a>
            </p>
            <p class="pt-3">
              <a href="{{ route('pricing')}}" class="text-reset text-decoration-none font-medium">Pricing</a>
            </p>
            <p class="pt-3">
              <a href="{{ route('samples')}}" class="text-reset text-decoration-none font-medium">Samples</a>
            </p>
            <p class="pt-3">
              <a href="{{ route('contact-us')}}" class="text-reset text-decoration-none font-medium">Contact Us</a>
            </p>
            <p class="pt-3">
              <a href="{{ route('order')}}" class="text-reset text-decoration-none font-medium">Order Now</a>
            </p>
            <p class="pt-3">
              <a href="{{ route('sitemap')}}" class="text-reset text-decoration-none font-medium">Sitemap</a>
            </p>
          
           
           
          </div>
          <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 mx-auto my-2 mt-4 lg:mt-0">
          <!-- Links -->
          <h5 class="text-title fw-bold mb-4 styling">
            Services
          </h5>
          <p class="">
            <a href="{{ route('cipd-level-3') }}" class="text-reset text-decoration-none font-medium">CIPD Level 3</a>
          </p>
          <p class="pt-3">
            <a href="{{ route('cipd-level-5') }}" class="text-reset text-decoration-none font-medium">CIPD Level 5</a>
          </p>
          <p class="pt-3">
            <a href="{{ route('cipd-level-7') }}" class="text-reset text-decoration-none font-medium">CIPD Level 7</a>
          </p>
          <p class="pt-3">
            <a href="{{ route('hr-assignment') }}" class="text-reset text-decoration-none font-medium">HR Assignment Help</a>
          </p>
          
        
        </div>
        
        <div class="col-md-2 col-lg-3 mx-auto my-2 mt-4 lg:mt-0">
        <h5 class="text-title fw-bold mb-4 styling">
            Contacts
          </h5>          
          <p>
            <i class="fas fa-phone"></i> <a href="tel:+447403663991" class="text-decoration-none text-white font-medium">+447403663991</a></p>
          <p class="pt-2">
            <i class="bi bi-envelope-fill"></i><a href="mailto:info@cipdassignmenthelpuk.co.uk" class="text-decoration-none text-white font-medium"> info@cipdassignmenthelpuk.co.uk</a></p>

            <div class="social-media text-center m-t-10">
            <div class="social-icons social-icons-footer text-center mt-3 space-x-3">
               <ul class="wrapper">

                 
                <li class="icon facebook">
                  <a href="https://www.facebook.com/cipdassignmenthelpuk.co.uk/" target="_blank" rel="noopener" aria-label="Facebook">
                    <img class="img-fluid" src="{{ asset('images/facebook.webp') }}" alt="Facebook" title="Facebook">
                  </a>
                </li>
                <li class="icon instagram">
                  <a href="https://www.instagram.com/cipdassignmenthelpuk.co.uk/" target="_blank" rel="noopener" aria-label="Instagram">
                    <img class="img-fluid" src="{{ asset('images/instagram.webp') }}" alt="Instagram" title="Instagram">
                  </a>
                </li>
                <li class="icon instagram">
                  <a href="https://api.whatsapp.com/send/?phone=447403663991" target="_blank" rel="noopener" aria-label="Instagram">
                    <img class="img-fluid" src="{{ asset('images/whatsapp.png') }}" alt="whatsapp" title="whatsapp">
                  </a>
                </li>

               </ul>

            </div>
        </div>
         
        </div>
        
       
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-2 mt-4 border-top">
    <p class="fw-normal text-white">© 2012-{{ now()->year }} CIPD Assignment Help UK. All Rights Reserved.</p>
    <div>
      <p class="text-white"> <a href="{{route('privacy-policy')}}" class="text-title text-decoration-none px-2">Privacy Policy</a> | <a href="{{route('terms-and-conditions')}}" class="text-title text-decoration-none px-2"> Terms & Conditions </a></p>
    </div>
  </div>
  {{-- Whatsapp icon --}}
  <div class="fixed bottom-4 left-4 z-20 cursor-pointer ">
    <div class="h-12 w-12 bg-green-500 shadow-xl rounded-full">
      <a href="https://wa.me/+447403663991" target="_blank" class="absolute bottom-[4px] left-[4px]  rounded-full cursor-pointer"  aria-label="Whatsapp">
        <svg width="40px" height="40px" viewBox="0 0 1219.547 1225.016">
          <path fill="#E0E0E0" d="M1041.858 178.02C927.206 63.289 774.753.07 612.325 0 277.617 0 5.232 272.298 5.098 606.991c-.039 106.986 27.915 211.42 81.048 303.476L0 1225.016l321.898-84.406c88.689 48.368 188.547 73.855 290.166 73.896h.258.003c334.654 0 607.08-272.346 607.222-607.023.056-162.208-63.052-314.724-177.689-429.463zm-429.533 933.963h-.197c-90.578-.048-179.402-24.366-256.878-70.339l-18.438-10.93-191.021 50.083 51-186.176-12.013-19.087c-50.525-80.336-77.198-173.175-77.16-268.504.111-278.186 226.507-504.503 504.898-504.503 134.812.056 261.519 52.604 356.814 147.965 95.289 95.36 147.728 222.128 147.688 356.948-.118 278.195-226.522 504.543-504.693 504.543z">
          </path>
          <linearGradient id="htwaicona-chat" gradientUnits="userSpaceOnUse" x1="609.77" y1="1190.114" x2="609.77" y2="21.084">
            <stop id="s3_1_offset_1" offset="0" stop-color="#25D366"></stop>
            <stop id="s3_1_offset_2" offset="1" stop-color="#25D366"></stop>
          </linearGradient>
          <path fill="url(#htwaicona-chat)" d="M27.875 1190.114l82.211-300.18c-50.719-87.852-77.391-187.523-77.359-289.602.133-319.398 260.078-579.25 579.469-579.25 155.016.07 300.508 60.398 409.898 169.891 109.414 109.492 169.633 255.031 169.57 409.812-.133 319.406-260.094 579.281-579.445 579.281-.023 0 .016 0 0 0h-.258c-96.977-.031-192.266-24.375-276.898-70.5l-307.188 80.548z">
          </path>
          <image overflow="visible" opacity=".08" width="682" height="639" transform="translate(270.984 291.372)"></image>
          <path fill-rule="evenodd" clip-rule="evenodd" fill="#FFF" d="M462.273 349.294c-11.234-24.977-23.062-25.477-33.75-25.914-8.742-.375-18.75-.352-28.742-.352-10 0-26.25 3.758-39.992 18.766-13.75 15.008-52.5 51.289-52.5 125.078 0 73.797 53.75 145.102 61.242 155.117 7.5 10 103.758 166.266 256.203 226.383 126.695 49.961 152.477 40.023 179.977 37.523s88.734-36.273 101.234-71.297c12.5-35.016 12.5-65.031 8.75-71.305-3.75-6.25-13.75-10-28.75-17.5s-88.734-43.789-102.484-48.789-23.75-7.5-33.75 7.516c-10 15-38.727 48.773-47.477 58.773-8.75 10.023-17.5 11.273-32.5 3.773-15-7.523-63.305-23.344-120.609-74.438-44.586-39.75-74.688-88.844-83.438-103.859-8.75-15-.938-23.125 6.586-30.602 6.734-6.719 15-17.508 22.5-26.266 7.484-8.758 9.984-15.008 14.984-25.008 5-10.016 2.5-18.773-1.25-26.273s-32.898-81.67-46.234-111.326z">
          </path>
          <path fill="#FFF" d="M1036.898 176.091C923.562 62.677 772.859.185 612.297.114 281.43.114 12.172 269.286 12.039 600.137 12 705.896 39.633 809.13 92.156 900.13L7 1211.067l318.203-83.438c87.672 47.812 186.383 73.008 286.836 73.047h.255.003c330.812 0 600.109-269.219 600.25-600.055.055-160.343-62.328-311.108-175.649-424.53zm-424.601 923.242h-.195c-89.539-.047-177.344-24.086-253.93-69.531l-18.227-10.805-188.828 49.508 50.414-184.039-11.875-18.867c-49.945-79.414-76.312-171.188-76.273-265.422.109-274.992 223.906-498.711 499.102-498.711 133.266.055 258.516 52 352.719 146.266 94.195 94.266 146.031 219.578 145.992 352.852-.118 274.999-223.923 498.749-498.899 498.749z">
          </path>
        </svg>
      </a>
    </div>
  </div>
  </footer>
