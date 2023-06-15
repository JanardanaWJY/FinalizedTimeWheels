<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
  <head>
    <title>
      Landing Page - Time Wheels
    </title>

    <style>
      /* Chrome, Edge, and Safari */
      *::-webkit-scrollbar {
        display: none;
      }

      *::-webkit-scrollbar-track {
        display: none;
      }

      *::-webkit-scrollbar-thumb {
        display: none;
      }
    </style>

    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            fontFamily: {
              'nunito': ['Nunito', 'sans-serif'],
              'product': ['"Product Sans"', 'sans-serif'],
            },
            colors: {
              'gold': '#D4A732',
              'purple': '#6F177D',
              'darkpurple': '#4B1454',
              'red': '#E02F2F',
              'darkred': '#BB2D2D',
              'offwhite': '#F5F5F5',
              'blue': '#696687',
              'darkgrey': '#2C2C2C',
            },
          }
        }
      }
     </script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;800&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/product-sans" rel="stylesheet">
  </head>

  <body class="h-screen overflow-x-hidden">
    <div class="flex h-screen w-screen bg-auto bg-top bg-scroll fixed" style="background-image: url('/images/Background Landing.png');"></div>
    <div>
      <nav class="z-10 w-screen fixed bg-white bg-opacity-50">
        <div class="w-screen flex flex-wrap items-center justify-between mx-auto p-4">
          <a href="https://flowbite.com/" class="flex items-center">
              <img src="{{ asset('images/Time Wheels.png') }}" class="h-8 mr-3 select-none"/>
          </a>
          <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:border-0">
              <li>
                <a href="#home" class="transition block py-2 pl-3 pr-4 hover:scale-110">Home</a>
              </li>
              <li>
                <a href="#about" class="transition block py-2 pl-3 pr-4 hover:scale-110">About Us</a>
              </li>
              <li>
                <a href="#testimonials" class="transition block py-2 pl-3 pr-4 hover:scale-110">Testimonials</a>
              </li>
              <li>
                <a href="#contacts" class="transition block py-2 pl-3 pr-4 hover:scale-110">Contacts</a>
              </li>
              <li>
                <a href="{{ url('signin') }}" class="transition block py-2 pl-3 pr-4 hover:scale-110">Sign in</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="z-0 w-screen absolute text-center">
        <div id="home">
          <img class="w-9/12 mt-24 m-auto select-none" src="{{ asset('images/Landing Page Banner.png') }}">

          <div class="m-24"></div>
  
          <a href="{{ url('signin') }}"><button class="transition text-2xl rounded-full py-5 px-20 bg-gold bg-opacity-50 font-nunito m-auto shadow-2xl hover:bg-opacity-100">Get Started</button></a>
          
          <div class="m-48"></div>
          
          <p class="text-xl text-blue">Provided Vehicles</p>
          
          <div class="m-24"></div>
  
          <img class="w-1/2 m-auto select-none" src="{{ asset('images/Car Brands.png') }}">
        </div>

        <div class="m-24"></div>

        <div id="about">
          <div class="grid grid-cols-2 w-fit scale-90">
            <div class="scale-95 h-fit align-middle">
              <div class="w-1/2"><img src="{{ asset('images/About Text.png') }}" class="z-0 drop-shadow-md relative select-none"></div>
              <p class="text-left mt-[-50px] z-10 relative">
                <b>New Approach (Duration-Based Rental Services)</b><br>
                While other rental services focus on point-to-point delivery (Destination), we focus primarily on duration. No more waiting for a driver to pick up your booking only to be canceled again, have a driver standing by for you to save your valuable time. 
              </p>
            </div>

            <div class="row-span-2"><img src="{{ asset('images/About Image.png') }}" class="scale-75 select-none"></div>

            <div class="scale-95 h-fit align-middle">
              <p class="text-left mt-[-50px] z-10 relative">
                <b>Standardised Vehicles</b><br>
                We can ensure consistency in our service, providing our users with an enjoyable experience from start to finish. Nothing feels worse than hopping into a taxi and finding stains on the seat and cigarette fog. Our vehicles and drivers are maintained and supervised to keep up with our high standards.
              </p>
            </div>

            <div class="scale-95 h-fit align-middle">
              <p class="text-left mt-[-50px] z-10 relative">
                <b>Luxury Facilities</b><br>
                Your experience is our primary focus. Our standards get you there in time with elegance and poise. Business and negotiation is an image game. Wow your connections and business partners with our package's top of the line service. Show your worth to prospective acquaintances.
              </p>
            </div>

            <div class="scale-95 h-fit align-middle">
              <p class="text-left mt-[-50px] z-10 relative">
                <b>Connection</b><br>
                Relationships are the flavour of life. Find a driver that clicks with you and build a foundation of professional understanding. Our duration-based system provides more opportunities for loyal users to communicate their needs and capitalise on downtime with our drivers.
              </p>
            </div>
          </div>
        </div>

        <div class="m-24"></div>

        <div id="testimonials">
          <div class="bg-cover" style="background-image: url('/images/Testimonial Background.png')">
            <div class="p-24 w-fit m-auto scale-110">
              <div class="grid grid-cols-3 bg-white">
                <div class="grid-cols-1 bg-gold bg-opacity-20 aspect-square m-auto">
                  <div class="">
                    <img src="{{ asset('images/Testimonial Icon.png') }}" class="scale-50 select-none">
                  </div>
                </div>
                <div class="grid-cols-1 text-left w-fit m-auto">
                  <div class="row-span-2 h-24 text-xl">"Thank you"</div>
                  <div class="opacity-50">Ignatius Deo Chuanito</div>
                </div>
                <div class="grid-cols-1 text-left w-fit m-auto">
                  <div class="row-span-2 h-24 text-xl w-48">"My boss uses this service and he loves it"</div>
                  <div class="opacity-50">Faqih Ash Shiddiq</div>
                </div>
              </div>
            </div>
          </div>
          <div>
            <div class="p-48 bg-gradient-to-b from-[#D9D3BF] from-0% to-transparent to-100%">
              <p class="text-2xl w-1/2 m-auto opacity-50">"Doesn't matter if you are rich or poor, handsome or ugly, at the end of the day it's night"</p>
            </div>
          </div>
        </div>

        <div class="m-24"></div>

        <div id="contacts" class="bg-darkgrey">
          <div class="grid grid-cols-2 mx-12 p-12">
            <div class="p-6"><img src="{{ asset('images/Time Wheels Dark.png') }}"></div>
            <div class="p-6 text-white text-right">500 Terry Francine Street</div>
            <div class="p-6 text-white text-left opacity-60">© 2023 by Fantastic Four.</div>
            <div class="p-6 text-white text-right">San Francisco, CA 94158</div>
          </div>
        </div>
      </div>
    </div>
    

    
  </body>
</html>
