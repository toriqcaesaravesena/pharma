<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/11496/11496733.png" type="image/png">
    <link rel="stylesheet" href="../../../public/css/styles.css">
    <title>HiDoc</title>
    <style>
      html{
      scroll-behavior: smooth;
     }
    </style>
</head>
<body class="m-0 p-0"> 
     <section
      class="w-full h-[3.8rem] bg-primary items-center flex px-[17%] justify-between font-normal"
    >
      <div>
        <p class="font-Inter text-white">
          Welcome to Pharma. We provides medical accessories
        </p>
      </div>
      <div class="flex flex-row items-center gap-3">
        <div>
          <img
            src="../../../public/asset/phone.svg"
            alt="telephone"
            height="34px"
            width="34px"
          />
        </div>
        <div>
          <p class="font-Inter text-white">
            <a href="https://wa.me/081338064094">0813-3806-4094</a>
          </p>
        </div>
      </div>
    </section>
    <section
      class="flex px-[17%] justify-between py-10 items-center text-black"
    >
      <div class="flex gap-2">
        <div>
          <a href="user.php"
            ><img
              src="../../../public/asset/Icon.svg"
              alt="icon"
              height="34px"
              width="34px"
          /></a>
        </div>
        <div class="font-Inter font-semibold text-3xl">
          <p><a href="user.php">Pharma</a></p>
        </div>
      </div>
      <div>
        <ul class="flex gap-10 w-max text-lg">
          <li class="hover:text-primary cursor-pointer">
            <a href="user.php">Home</a>
          </li>
          <li class="hover:text-primary cursor-pointer">
            <a href="about.php">About</a>
          </li>
          <li class="hover:text-primary cursor-pointer">
            <a href="services.php">Service</a>
          </li>
          <li
            @click.away="open = false"
            class="relative"
            x-data="{ open: false }"
          >
            <button
              @click="open = !open"
              class="flex flex-row items-center w-full text-left md:w-auto md:inline md:mt-0 md:ml-4 hover:text-primary focus:text-primary focus:outline-none focus:shadow-outline"
            >
              <span>Pages</span>
              <svg
                fill="currentColor"
                viewBox="0 0 20 20"
                :class="{'rotate-180': open, 'rotate-0': !open}"
                class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"
              >
                <path
                  fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
            <div
              x-show="open"
              x-transition:enter="transition ease-out duration-100"
              x-transition:enter-start="transform opacity-0 scale-95"
              x-transition:enter-end="transform opacity-100 scale-100"
              x-transition:leave="transition ease-in duration-75"
              x-transition:leave-start="transform opacity-100 scale-100"
              x-transition:leave-end="transform opacity-0 scale-95"
              class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48"
            >
              <div
                class="px-2 py-2 bg-white rounded-md shadow dark-mode:bg-gray-800"
              >
                <a
                  class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                  href="blog.php"
                  >Blog</a
                >
                <a
                  class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                  href="team.php"
                  >Team</a
                >
                <a
                  class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                  href="appointment.php"
                  >Appointment</a
                >
              </div>
            </div>
          </li>
          <li class="hover:text-primary cursor-pointer">
            <a href="contact_us.php">Contact Us</a>
          </li>
        </ul>
      </div>
      <div>
        <button
          class="w-[11.75rem] h-[3.8rem] bg-green font-semibold text-lg hover:bg-emerald-300"
        >
          <a href="appointment.php">Appointment</a>
        </button>
      </div>
    </section>
    <section class="px-[3rem]">
        <div class="bg-bg_main b w-full bg-cover bg-center">
            <div class="py-[9rem] px-[12.8%]">
            <!-- <div class="py-[11.3rem] pl-[12.8%] pr-[42%]"> -->
                <div class="py-2 w-[22.1rem] bg-green font-Lato tracking-[0.4rem] text-[16px] text-center items-center">
                    <p>MEDICAL PROFESSIONALS</p>
                </div>
                <div class="font-bold text-[50px] text-header1">
                    <p">Makes Your Health <br> Better Will Makes <br> Us Better</p>
                </div>
                <div class="font-normal text-base text-header2">
                    <p>Our team of highly trained professionals uses the latest <br> healing technologies to restore you to pain-free health <br> quickly and easily.</p>
                </div>
                <div class="mt-7">
                    <button class="w-[11.75rem] h-[3.8rem] bg-primary font-normal text-base text-white hover:bg-blue-700">
                        Get Started
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="flex justify-center font-bold text-3xl w-full my-[2.5rem] font-Lato text-header2">
            <p>Our Offerings</p>
        </div>
        <div class="flex w-full justify-around px-[12%]">
            <img src="../../../public/asset/services/1.svg" width="130px" height="32px">
            <img src="../../../public/asset/services/2.svg" width="130px" height="32px">
            <img src="../../../public/asset/services/3.svg" width="130px" height="32px">
            <img src="../../../public/asset/services/4.svg" width="130px" height="32px">
            <img src="../../../public/asset/services/5.svg" width="130px" height="32px">
        </div>
    </section>
    <section class="px-[15%] py-[4.5rem]">
        <div class="bg-bg_cta w-full bg-cover bg-center flex flex-col justify-center text-center font-Inter py-20">
            <div>
                <p class="text-white font-semibold text-3xl">Schedule an imperson or virtual <br> appointment today</p>
            </div>
            <div>
                <button class="w-[11.75rem] h-[3.8rem] bg-green font-semibold text-xs text-header2 mt-5 hover:bg-emerald-300 rounded-[50px]">
                    Book an Appointment
                </button>
            </div>
        </div>
    </section>
    <section class="flex-col text-center justify-center">
        <div class="flex justify-center" >
            <p class="font-Lato font-normal tracking-[0.4rem] border border-solid border-gray-400 w-36 h-7 flex justify-center items-center pl-2">FEEDBACK</p>
        </div>
        <div class="pb-12 pt-6">
            <p class="font-Montserrat font-semibold text-3xl ">Feedbacks about our service <br> from the buttom of heart</p>
        </div>
    </section>
    <section class="flex justify-center px-[15%] pb-32">
        
        <div class="grid grid-cols-2 gap-6">
            <div>
                <img src="../../../public/asset/testimonial/1.svg">
            </div>
            <div>
                <img src="../../../public/asset/testimonial/2.svg" ">
            </div>
            <div>
                <img src="../../../public/asset/testimonial/3.svg" ">
            </div>
            <div>
                <img src="../../../public/asset/testimonial/4.svg" ">
            </div>
        </div>
    </section>

    <section class="bg-primary py-[7%] px-[15%]">
            <div id="Medical" class="w-full h-full mb-16 flex justify-between">
                    <div>
                        <p class="mb-3 border-2 border-white border-opacity-30 font-Lato font-medium text-base text-white tracking-[0.8rem] pl-5">MEDICAL EXPERTS</p>
                        <div class="font-Montserrat font-semibold text-3xl text-white">The Professional Doctors</div>
                    </div>

              
                    <div>
                        <button class="mt-[7px] font-Inter font-meidum text-base bg-green hover:bg-emerald-300 text-primary p-5">View All Doctors</button>
                    </div>
  
                
            </div>
                  <!-- Foto -->
            <div class="flex justify-between gap-5 mb-16">
                <div>
                    <img src="../../../public/asset/team/1.svg">
                </div>
                <div>
                    <img src="../../../public/asset/team/2.svg">
                </div>
                <div>
                    <img src="../../../public/asset/team/3.svg">
                </div>
            </div>

            <!-- garis -->

            <div class="py-[0.5px] rounded bg-white bg-opacity-70 px-[15%] mb-12"></div>
            <div class="py-[0.5px] rounded bg-white bg-opacity-20 px-[15%] mb-12"></div>
    
            <!-- angka -->
            <div class="flex text-center justify-center">
                <div class="flex flex-col justify-center items-center px-10">
                        <span class="text-5xl text-white font-Lato mb-4 font-semibold">25</span>
                        <p class="border border-white border-opacity-30 py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">YEARS</p>
                        <p class="border border-white border-opacity-30 -mt-[0.5px] py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">EXPERIENCE</p>
                </div>
                <div class="flex flex-col justify-center items-center px-10">
                        <span class="text-5xl text-white font-Lato mb-4 font-semibold">893</span>
                        <p class="border border-white border-opacity-30 py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">MEDICAMENT</p>
                        <p class="border border-white border-opacity-30 -mt-[0.5px] py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">INVENTED</p>
                </div>
                <div class="flex flex-col justify-center items-center px-10">
                        <span class="text-5xl text-white font-Lato mb-4 font-semibold">75</span>
                        <p class="border border-white border-opacity-30 py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">AWARDS</p>
                        <p class="border border-white border-opacity-30 -mt-[0.5px] py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">WINNED</p>
                </div>
                <div class="flex flex-col justify-center items-center px-10">
                        <span class="text-5xl text-white font-Lato mb-4 font-semibold">673 k</span>
                        <p class="border border-white border-opacity-30 py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">HAPPY</p>
                        <p class="border border-white border-opacity-30 -mt-[0.5px] py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem] ">CLIENTS</p>
                </div>
                <div class="flex flex-col justify-center items-center px-10">
                        <span class="text-5xl text-white font-Lato mb-4 font-semibold">751</span>
                        <p class="border border-white border-opacity-30 py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">PHARMACIES</p>
                        <p class="border border-white border-opacity-30 -mt-[0.5px] py-1 px-2 font-Lato font-extralight text-xs text-white tracking-[0.3rem]">PARTNERS</p>
                </div>
            </div>
    </div> 

    </section>

    <!-- Footer -->

    <section class="px-[3rem] py-[7.37rem] bg-[#FFFFFF]">
        <div class=" bg-[#E5F2EF] px-[12.8%] flex flex-col py-[5.92rem]">

        <div class="wrapper 1 flex  w-full justify-between">

             <div class="flex gap-2 pharma">
            <div>
                <img src="../../../public/asset/Icon.svg" alt="icon" height="34px" width="34px">
            </div>
            <div class="font-Inter font-semibold text-3xl">
                <p>Pharma</p>
            </div>
        </div>

        <div class="flex  gap-[3.31rem]">

                <div class=" flex gap-2 items-center cursor-pointer" >
                <img src="../../../public/asset/footer/phone.svg">

                    <p><a href="https://wa.me/081338064094">(+64) 813 - 3806 - 4094</a></p>
                </div>

                <div class="flex gap-2 items-center cursor-pointer">
                <img src="../../../public/asset/footer/email.svg">
                <p><a href="#">support@doctorate.com</a></p>
                </div>
            
            <div class="flex gap-[1.625rem] items-center">
                <img src="../../../public/asset/footer/ig.svg" class=" cursor-pointer">
                <img src="../../../public/asset/footer/fb.svg" class=" cursor-pointer">
                <img src="../../../public/asset/footer/twitter.svg" class=" cursor-pointer">
            </div>
        </div>
    </div>
        <div class=" flex justify-between mt-[3.94rem]">
            <div>
                <dv>
                    <p class="font-Montserrat font-semibold leading-[2.6rem] text-3xl text-[#1C1C1C]">

                        “A Simple Story About <br>The Doctorate Medical <br>Center & Health Care <br>Foundation"</p>
                    </p>
            </div>
            <div>
                <p class=" text-xl font-semibold font-Montserrat text-[#1C1C1C] mb-[0.88rem]">Explore</p>
                <ul class=" text-base flex flex-col gap-2 text-[#545454] font-Lato">
                    <li class=" cursor-pointer hover:text-primary"><a href="user.php">Home</a></li>
                    <li class=" cursor-pointer hover:text-primary"><a href="services.php">Services</a></li>
                    <li class=" cursor-pointer hover:text-primary"><a href="about.php">About us</a></li>
                  
                    <li class=" cursor-pointer hover:text-primary"><a href="blog.php">News</a></li>
                </ul>
            </div>
            <div>
                <p class=" text-xl font-semibold font-Montserrat text-[#1C1C1C] mb-[0.88rem]">Utility Pages</p>
                <ul class=" text-base gap-2 flex flex-col text-[#545454] font-Lato">
                    <li class=" cursor-pointer hover:text-primary">Style Guide</li>
                    <li class=" cursor-pointer hover:text-primary">Changelog</li>
                    <li class=" cursor-pointer hover:text-primary">Licenses</li>
                    <li class=" cursor-pointer hover:text-primary">Protected Page</li>
                    <li class=" cursor-pointer hover:text-primary">404 Page</li>
                </ul>
            </div>
            <div class=" flex gap-[1rem] flex-col">
                <p class=" text-xl font-semibold font-Montserrat text-[#1C1C1C] ">Book an appointment</p>
                <p class=" text-base gap-2 flex flex-col text-[#545454] font-Lato">It is a long established fact that a reader will <br>be distracted</p>
                <div>
                    <input type="text" placeholder="Your Email Address" class=" px-[1.57rem] py-[1.06rem] w-[20.356rem] h-[3.75rem] items-center flex">
                </div>
                <button class="px-[2.6rem] py-[1.06rem] bg-primary w-[8.6rem] h-auto text-[#FFFFFF] hover:bg-blue-700">
                    Submit 
                </button>

            </div>
        </div>
    </div>
    </section>
</body>
</html>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>