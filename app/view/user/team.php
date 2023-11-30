<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <link
      rel="icon"
      href="https://cdn-icons-png.flaticon.com/512/11496/11496733.png"
      type="image/png"
    />
    <link rel="stylesheet" href="../../../public/css/styles.css" />
    <title>HiDoc</title>
  </head>
  <body class="inset-0">
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

    <section class="px-[3rem] mb-[8.74rem]">
      <div
        class="bg-bg_team bg-cover bg-center flex items-center justify-center text-center"
      >
        <div class="py-[6.7rem] px-[12.8%]">
          <p class="text-black font-Montserrat font-bold text-4xl">
            The Doctorate Crew
          </p>
        </div>
      </div>
    </section>

    <section
      class="flex justify-center items-center flex-wrap w-full px-[16%] mt-40 gap-[3rem]"
    >
      <div
        class="flex p-[1.5rem] bg-[#F1F1F1] justify-center text-center items-center flex-col gap-6"
      >
        <div class="flex w-[14.75rem] h-[16.7rem]">
          <img
            class="w-full h-full object-cover"
            src="../../../public/asset/team/doctor1.svg"
            alt="doctor"
          />
        </div>
        <div class="flex flex-col gap-1">
          <p class="font-bold text-xl">Vanseena Adams</p>
          <p class="text-[#545454] text-base">Staff Nurse</p>
          <div
            class="text-primary gap-7 mt-5 flex text-xl justify-center items-center"
          >
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
          </div>
        </div>
      </div>
      <div
        class="flex p-[1.5rem] bg-[#F1F1F1] justify-center text-center items-center flex-col gap-6"
      >
        <div class="flex w-[14.75rem] h-[16.7rem]">
          <img
            class="w-full h-full object-cover"
            src="../../../public/asset/team/doctor2.svg"
            alt="doctor"
          />
        </div>
        <div class="flex flex-col gap-1">
          <p class="font-bold text-xl">Dr. Helen Wilmore</p>
          <p class="text-[#545454] text-base">Surgery Expert</p>
          <div
            class="text-primary gap-7 mt-5 flex text-xl justify-center items-center"
          >
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
          </div>
        </div>
      </div>
      <div
        class="flex p-[1.5rem] bg-[#F1F1F1] justify-center text-center items-center flex-col gap-6"
      >
        <div class="flex w-[14.75rem] h-[16.7rem]">
          <img
            class="w-full h-full object-cover"
            src="../../../public/asset/team/doctor3.svg"
            alt="doctor"
          />
        </div>
        <div class="flex flex-col gap-1">
          <p class="font-bold text-xl">Dr. Kate Winslot</p>
          <p class="text-[#545454] text-base">Dental Specialist</p>
          <div
            class="text-primary gap-7 mt-5 flex text-xl justify-center items-center"
          >
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
          </div>
        </div>
      </div>
      <div
        class="flex p-[1.5rem] bg-[#F1F1F1] justify-center text-center items-center flex-col gap-6"
      >
        <div class="flex w-[14.75rem] h-[16.7rem]">
          <img
            class="w-full h-full object-cover"
            src="../../../public/asset/team/doctor4.svg"
            alt="doctor"
          />
        </div>
        <div class="flex flex-col gap-1">
          <p class="font-bold text-xl">Dr. Sonia Cameron</p>
          <p class="text-[#545454] text-base">Dermatologist</p>
          <div
            class="text-primary gap-7 mt-5 flex text-xl justify-center items-center"
          >
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
          </div>
        </div>
      </div>
      <div
        class="flex p-[1.5rem] bg-[#F1F1F1] justify-center text-center items-center flex-col gap-6"
      >
        <div class="flex w-[14.75rem] h-[16.7rem]">
          <img
            class="w-full h-full object-cover"
            src="../../../public/asset/team/doctor5.svg"
            alt="doctor"
          />
        </div>
        <div class="flex flex-col gap-1">
          <p class="font-bold text-xl">Dr. Lily Smith</p>
          <p class="text-[#545454] text-base">Ophthalmologist</p>
          <div
            class="text-primary gap-7 mt-5 flex text-xl justify-center items-center"
          >
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
          </div>
        </div>
      </div>
      <div
        class="flex p-[1.5rem] bg-[#F1F1F1] justify-center text-center items-center flex-col gap-6"
      >
        <div class="flex w-[14.75rem] h-[16.7rem]">
          <img
            class="w-full h-full object-cover"
            src="../../../public/asset/team/doctor 6.svg"
            alt="doctor"
          />
        </div>
        <div class="flex flex-col gap-1">
          <p class="font-bold text-xl">Dr. Lily Smith</p>
          <p class="text-[#545454] text-base">Pulmonologist</p>
          <div
            class="text-primary gap-7 mt-5 flex text-xl justify-center items-center"
          >
            <i class="fa-brands fa-instagram"></i>
            <i class="fa-brands fa-facebook"></i>
            <i class="fa-brands fa-twitter"></i>
          </div>
        </div>
      </div>
    </section>

    <section class="w-full mt-[8.3rem] mb-6 flex">
      <div
        class="bg-primary py-[9.3rem] flex flex-col justify-end w-[50%] pl-[16%]"
      >
        <div
          class="p-1 border-solid border-[#CECECE] border-[1px] justify-end items-center w-max mb-4"
        >
          <p
            class="font-Lato tracking-[0.3rem] leading-5 text-white text-sm flex justify-end"
          >
            Book An Appointment
          </p>
        </div>
        <div class="mb-7 flex">
          <p class="font-Montserrat text-[2.55rem] text-white font-semibold">
            Our Medical Team is <br />
            Ready to Help You.
          </p>
        </div>
        <div class="flex flex-row gap-3">
          <div
            class="bg-green px-[1.2rem] py-4 font-medium text-sm text-center"
          >
            <p class="text-black font-medium">Book an Appointment</p>
          </div>
          <p class="text-white flex justify-center items-center font-medium">
            (OR)
          </p>
          <div class="bg-white px-[1.2rem] py-4 text-center">
            <p class="text-black font-medium">Call: 1-800-123-9999</p>
          </div>
        </div>
      </div>
      <div class="flex w-[50%]">
        <img
          class="w-full h-full object-cover"
          src="../../../public/asset/team/sidecontent.svg"
          alt="sdcnt"
        />
      </div>
    </section>

    <!-- Footer -->

    <section class="px-[3rem] py-[7.37rem] bg-[#FFFFFF]">
      <div class="bg-[#E5F2EF] px-[12.8%] flex flex-col py-[5.92rem]">
        <div class="wrapper 1 flex w-full justify-between">
          <div class="flex gap-2 pharma">
            <div>
              <img
                src="../../../public/asset/Icon.svg"
                alt="icon"
                height="34px"
                width="34px"
              />
            </div>
            <div class="font-Inter font-semibold text-3xl">
              <p>Pharma</p>
            </div>
          </div>

          <div class="flex gap-[3.31rem]">
            <div class="flex gap-2 items-center cursor-pointer">
              <img src="../../../public/asset/footer/phone.svg" />

              <p>(+22) 123 - 4567 - 900</p>
            </div>

            <div class="flex gap-2 items-center cursor-pointer">
              <img src="../../../public/asset/footer/email.svg" />
              <p>support@doctorate.com</p>
            </div>

            <div class="flex gap-[1.625rem] items-center">
              <img src="../../../public/asset/footer/ig.svg" class="cursor-pointer" />
              <img src="../../../public/asset/footer/fb.svg" class="cursor-pointer" />
              <img
                src="../../../public/asset/footer/twitter.svg"
                class="cursor-pointer"
              />
            </div>
          </div>
        </div>
        <!-- <div>
                
            </div> -->
        <div class="flex justify-between mt-[3.94rem]">
          <div>
            <p
              class="font-Montserrat font-semibold leading-[2.6rem] text-3xl text-[#1C1C1C]"
            >
              “A Simple Story About <br />The Doctorate Medical <br />Center &
              Health Care <br />Foundation"
            </p>
          </div>
          <div>
            <p
              class="text-xl font-semibold font-Montserrat text-[#1C1C1C] mb-[0.88rem]"
            >
              Explore
            </p>
            <ul class="text-base flex flex-col gap-2 text-[#545454] font-Lato">
              <li class="cursor-pointer hover:text-primary">Home</li>
              <li class="cursor-pointer hover:text-primary">Services</li>
              <li class="cursor-pointer hover:text-primary">About us</li>
              <li class="cursor-pointer hover:text-primary">Testimonials</li>
              <li class="cursor-pointer hover:text-primary">News</li>
            </ul>
          </div>
          <div>
            <p
              class="text-xl font-semibold font-Montserrat text-[#1C1C1C] mb-[0.88rem]"
            >
              Utility Pages
            </p>
            <ul class="text-base gap-2 flex flex-col text-[#545454] font-Lato">
              <li class="cursor-pointer hover:text-primary">Style Guide</li>
              <li class="cursor-pointer hover:text-primary">Changelog</li>
              <li class="cursor-pointer hover:text-primary">Licenses</li>
              <li class="cursor-pointer hover:text-primary">Protected Page</li>
              <li class="cursor-pointer hover:text-primary">404 Page</li>
            </ul>
          </div>
          <div class="flex gap-[1rem] flex-col">
            <p class="text-xl font-semibold font-Montserrat text-[#1C1C1C]">
              Book an appointment
            </p>
            <p class="text-base gap-2 flex flex-col text-[#545454] font-Lato">
              It is a long established fact that a reader will <br />be
              distracted
            </p>
            <div>
              <input
                type="text"
                placeholder="Your Email Address"
                class="px-[1.57rem] py-[1.06rem] w-[20.356rem] h-[3.75rem] items-center flex"
              />
            </div>
            <button
              class="px-[2.6rem] py-[1.06rem] bg-primary w-[8.6rem] h-auto text-[#FFFFFF] hover:bg-blue-700"
            >
              Submit
            </button>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>
<script
  src="https://kit.fontawesome.com/a205dbd027.js"
  crossorigin="anonymous"
></script>
<script
  src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
  defer
></script>
