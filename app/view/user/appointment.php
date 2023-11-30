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
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
      theme: {
        extend: {
          backgroundImage: {
            bg_main: "url('../../../public/asset/Background.svg')",
            bg_cta: "url('../../../public/asset/cta.svg')",
            bg_service: "url('../../../public/asset/services/banner.svg')",
            bg_bot: "url('../../../public/asset/services/bot-service.svg')",
            bg_blog: "url('../../../public/asset/blog/bg2.svg')",
            bg_team: "url('../../../public/asset/team/Team.svg')",
            bg_Contact: "url('../../../public/asset/contactUs.svg')",
            bg_login: "url('../../../public/asset/Banner.jpg')"
          },
          fontFamily: {
            Inter: "'Inter', sans-serif",
            Lato: "'Lato', sans-serif",
            Montserrat: "'Montserrat', sans-serif",
          },
          colors: {
            primary: "#0152A8",
            green: "#0fe3af",
            greyy: "#F1F1F1",
          },
          textColor: {
            header1: "#143450",
            header2: "#1C1C1C",
          },
        }
      }
    }
  </script>
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
              class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48 z-50"
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
          class="w-[11.75rem] h-[3.8rem] bg-slate-400 font-semibold text-lg hover:bg-slate-300 text-white tracking-[0.1rem] rounded-full"
        >
          <a href="login.php">Login</a>
        </button>
      </div>
    </section>

    <section class="px-[3rem] mb-[8.74rem]">
      <section
        class="bg-[#DCEDFE] h-[27rem] flex items-center justify-center relative"
      >
        <div
          class="flex bg-greyy px-[1.9rem] py-[1.65rem] absolute top-[6.5rem] gap-[2.5rem]"
        >
          <div class="w-[19rem] h-[24rem]">
            <img
              class="h-full w-full object-cover"
              src="../../../public/asset/team/doctor1.svg"
              alt=""
            />
          </div>
          <div>
            <div>
              <p class="text-[2.5rem] font-bold font-Montserrat mb-2">
                Dr. Kristina Castle
              </p>
              <p
                class="text-primary font-Montserrat font-semibold text-xl mb-5"
              >
                Surgeon
              </p>
              <p class="text-base text-[#545454] mb-[2.5rem]">
                Lorem Ipsum Capitalize on low hanging fruit to identify a
                ballpark value added activity <br />
                to beta immersion along the information highway will close the
                loop on focusing <br />solely on the bottom line rather than
                client-centric imperatives the efficiency.
              </p>
            </div>
            <div class="flex gap-[3rem]">
              <div class="flex gap-3 items-center">
                <div>
                  <img src="../../../public/asset/team/phone2.svg" alt="" />
                </div>
                <div>
                  <p class="text-sm font-semibold text-black font-Lato">
                    CALL NOW :
                  </p>
                  <p class="text-xl font-bold text-black font-Lato">
                    (+22) 123 - 4567 - 900
                  </p>
                </div>
              </div>
              <div class="flex gap-3 items-center">
                <div>
                  <img src="../../../public/asset/team/add.svg" alt="" />
                </div>
                <div>
                  <p class="text-sm font-semibold text-black font-Lato">
                    EMAIL NOW :
                  </p>
                  <p class="text-xl font-bold text-black font-Lato">
                    info@doctorate.com
                  </p>
                </div>
              </div>
            </div>
            <div class="mt-[2.4rem]">
              <button
                class="bg-primary text-center px-[2.56rem] py-[1.06rem] text-white font-semibold"
              >
                Discover Now
              </button>
            </div>
          </div>
        </div>
      </section>
    </section>

    <section class="">
      <div class="px-[17%] w-full flex gap-[1.3rem] mt-[15rem]">
        <form
          class="flex flex-col bg-greyy gap-5 px-[7%] py-[4rem] w-[60%] justify-center"
        >
          <p class="font-Montserrat text-[1.9rem] font-bold">
            Book an appointment
          </p>
          <p>
            Lorem Ipsum is simply dummy text of printing and typesetting
            industry standard dummy text the with the release.
          </p>
          <input type="text" class="h-[3rem] px-7 py-4" placeholder="Name" />
          <input type="text" class="h-[3rem] px-7 py-4" placeholder="Email" />
          <input type="text" class="h-[3rem] px-7 py-4" placeholder="Phone" />
          <input
            type="text"
            class="h-[3rem] px-7 py-4"
            placeholder="Address"
          />
          <input type="date" class="h-[3rem] px-7 py-4" placeholder="Date" />
          <input
            type="text"
            class="h-[3rem] px-7 py-4"
            placeholder="Choose Doctor"
          />
          <!-- <input
            type="text"
            class="h-[3rem] px-7 pt-6 pb-32 flex justify-start"
            placeholder="Message"
          /> -->
          <button
            class="px-[2.6rem] py-[1.06rem] bg-primary h-auto text-[#FFFFFF] hover:bg-blue-700 w-full"
          >
            Submit
          </button>
        </form>
        <div class="flex flex-col gap-[1.3rem]">
          <div class="w-[30rem]">
            <img
              class="w-full h-full"
              src="../../../public/asset/appointment/Timing.svg"
              alt=""
            />
          </div>

          <div
            class="bg-primary py-[4.3rem] text-center items-center justify-center gap-[1.3rem] flex flex-col"
          >
            <p class="font-Montserrat text-[3.125rem] text-white">
              Didn’t Find a Question?
            </p>
            <p class="text-white">
              Donec efficitur, enim bibendum <br />
              volutpat dictum, tellus risus <br />
              porttitor leo.
            </p>
            <button
              class="px-[2.6rem] py-[1.06rem] bg-green h-auto text-black font-semibold"
            >
              More Questions
            </button>
          </div>
        </div>
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

              <p><a href="https://wa.me/081338064094">(+64) 813 - 3806 - 4094</a></p>
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
              <li class="cursor-pointer hover:text-primary"><a href="user.php">Home</a></li>
              <li class="cursor-pointer hover:text-primary"><a href="services.php">Services</a></li>
              <li class="cursor-pointer hover:text-primary"><a href="about.php">About us</a></li>
              <li class="cursor-pointer hover:text-primary"><a href="blog.php">News</a></li>
            </ul>
          </div>
          <div>
            <p
              class="text-xl font-semibold font-Montserrat text-[#1C1C1C] mb-[0.88rem]"
            >
              Administrator
            </p>
            <ul class="text-base gap-2 flex flex-col text-[#545454] font-Lato">
              <li class="cursor-pointer hover:text-primary"><a href="../admin/login.php">Login</a></li>
              <li class="cursor-pointer hover:text-primary">Licenses</li>
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
              <a href="appointment.php">Submit</a>
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
