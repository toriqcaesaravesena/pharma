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
            bg_AdminCRUD: "url'../../../public/asset/admin-background.svg'",
            bg_login: "url('../../../public/asset/Banner.jpg')",
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
          class="w-[11.75rem] h-[3.8rem] bg-slate-500 font-semibold text-lg hover:bg-slate-400 text-white tracking-[0.05rem] rounded-lg"
        >
          <a href="login.php">Login</a>
        </button>
      </div>
    </section>
    <section class="px-[3rem] mb-[8.74rem]">
      <div
        class="bg-bg_service bg-cover flex items-center justify-center text-center"
      >
        <div class="py-[6.7rem] px-[12.8%]">
          <p class="text-black font-Montserrat font-bold text-4xl">
            Our Services
          </p>
        </div>
      </div>
    </section>
    <section
      class="px-[10%] flex mb-[7.25rem] gap-5 flex-col justify-center items-center"
    >
      <div class="flex gap-5">
        <div class="flex flex-col bg-greyy px-[1.88rem] py-[2.8rem]">
          <img
            class="mb-[1rem]"
            src="../../../public/asset/services/angioplasty.svg"
            alt="angioplasty"
            width="54"
            height="54"
          />
          <div class="flex flex-col gap-[0.7rem]">
            <p class="font-Montserrat text-xl font-semibold">Angioplasty</p>
            <p class="font-Lato text-base text-[#545454]">
              Our team of highl professionals <br />
              uses the latest heal echnologies <br />
              health quickly and easily.
            </p>
          </div>
          <div class="flex mt-[0.7rem] items-center gap-2">
            <div>
              <p class="font-Inter font-medium">Read More</p>
            </div>
            <div
              class="flex bg-[#C9C9C9] text-base p-3 w-4 h-4 rounded-full items-center justify-center text-center hover:bg-green cursor-pointer"
            >
              <i class="fa-solid fa-plus" style="color: #ffffff"></i>
            </div>
          </div>
        </div>
        <div class="flex flex-col bg-greyy px-[1.88rem] py-[2.8rem]">
          <img
            class="mb-[1rem]"
            src="../../../public/asset/services/cardiology.svg"
            alt="cardiology"
            width="54"
            height="54"
          />
          <div class="flex flex-col gap-[0.7rem]">
            <p class="font-Montserrat text-xl font-semibold">Cardiology</p>
            <p class="font-Lato text-base text-[#545454]">
              Our team of highl professionals <br />
              uses the latest heal echnologies <br />
              health quickly and easily.
            </p>
          </div>
          <div class="flex mt-[0.7rem] items-center gap-2">
            <div>
              <p class="font-Inter font-medium">Read More</p>
            </div>
            <div
              class="flex bg-[#C9C9C9] text-base p-3 w-4 h-4 rounded-full items-center justify-center text-center hover:bg-green cursor-pointer"
            >
              <i class="fa-solid fa-plus" style="color: #ffffff"></i>
            </div>
          </div>
        </div>

        <div class="flex">
          <div class="flex flex-col bg-greyy px-[1.88rem] py-[2.8rem]">
            <img
              class="mb-[1rem]"
              src="../../../public/asset/services/dental.svg"
              alt="dental"
              width="54"
              height="54"
            />
            <div class="flex flex-col gap-[0.7rem]">
              <p class="font-Montserrat text-xl font-semibold">Dental</p>
              <p class="font-Lato text-base text-[#545454]">
                Our team of highl professionals <br />
                uses the latest heal echnologies <br />
                health quickly and easily.
              </p>
            </div>
            <div class="flex mt-[0.7rem] items-center gap-2">
              <div>
                <p class="font-Inter font-medium">Read More</p>
              </div>
              <div
                class="flex bg-[#C9C9C9] text-base p-3 w-4 h-4 rounded-full items-center justify-center text-center hover:bg-green cursor-pointer"
              >
                <i class="fa-solid fa-plus" style="color: #ffffff"></i>
              </div>
            </div>
          </div>
          <div class="w-[19.2rem] h-auto">
            <img
              class="w-full h-full object-cover"
              src="../../../public/asset/services/readDoc.svg"
              alt=""
            />
          </div>
        </div>
      </div>
      <div class="flex gap-5">
        <div class="flex">
          <div class="flex flex-col bg-greyy px-[1.88rem] py-[2.8rem]">
            <img
              class="mb-[1rem]"
              src="../../../public/asset/services/eyecare.svg"
              alt="eyecare"
              width="54"
              height="54"
            />
            <div class="flex flex-col gap-[0.7rem]">
              <p class="font-Montserrat text-xl font-semibold">Eye Care</p>
              <p class="font-Lato text-base text-[#545454]">
                Our team of highl professionals <br />
                uses the latest heal echnologies <br />
                health quickly and easily.
              </p>
            </div>
            <div class="flex mt-[0.7rem] items-center gap-2">
              <div>
                <p class="font-Inter font-medium">Read More</p>
              </div>
              <div
                class="flex bg-[#C9C9C9] text-base p-3 w-4 h-4 rounded-full items-center justify-center text-center hover:bg-green cursor-pointer"
              >
                <i class="fa-solid fa-plus" style="color: #ffffff"></i>
              </div>
            </div>
          </div>
          <div class="w-[19.2rem] h-full">
            <img
              class="w-full h-full object-cover"
              src="../../../public/asset/services/dokter.svg"
              alt=""
            />
          </div>
        </div>
        <div class="flex flex-col bg-greyy px-[1.88rem] py-[2.8rem]">
          <img
            class="mb-[1rem]"
            src="../../../public/asset/services/endocrynology.svg"
            alt="angioplasty"
            width="54"
            height="54"
          />
          <div class="flex flex-col gap-[0.7rem]">
            <p class="font-Montserrat text-xl font-semibold">Endocrinology</p>
            <p class="font-Lato text-base text-[#545454]">
              Our team of highl professionals <br />
              uses the latest heal echnologies <br />
              health quickly and easily.
            </p>
          </div>
          <div class="flex mt-[0.7rem] items-center gap-2">
            <div>
              <p class="font-Inter font-medium">Read More</p>
            </div>
            <div
              class="flex bg-[#C9C9C9] text-base p-3 w-4 h-4 rounded-full items-center justify-center text-center hover:bg-green cursor-pointer"
            >
              <i class="fa-solid fa-plus" style="color: #ffffff"></i>
            </div>
          </div>
        </div>
        <div class="flex flex-col bg-greyy px-[1.88rem] py-[2.8rem]">
          <img
            class="mb-[1rem]"
            src="../../../public/asset/services/suntik.svg"
            alt="angioplasty"
            width="54"
            height="54"
          />
          <div class="flex flex-col gap-[0.7rem]">
            <p class="font-Montserrat text-xl font-semibold">Orthopaedics</p>
            <p class="font-Lato text-base text-[#545454]">
              Our team of highl professionals <br />
              uses the latest heal echnologies <br />
              health quickly and easily.
            </p>
          </div>
          <div class="flex mt-[0.7rem] items-center gap-2">
            <div>
              <p class="font-Inter font-medium">Read More</p>
            </div>
            <div
              class="flex bg-[#C9C9C9] text-base p-3 w-4 h-4 rounded-full items-center justify-center text-center hover:bg-green cursor-pointer"
            >
              <i class="fa-solid fa-plus" style="color: #ffffff"></i>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="px-[17%] py-4 w-full">
      <div
        class="bg-bg_bot bg-cover bg-center w-full justify-center items-center py-[10.75rem] flex"
      >
        <div
          class="flex flex-col bg-[#F8F9F8] bg-opacity-75 w-max text-center px-8 py-12 justify-center items-center"
        >
          <div
            class="px-[9px] py-[3px] border-solid border-[1px] w-max mb-[13px] font-Lato tracking-widest border-[#CECECE]"
          >
            <p>TIME</p>
          </div>
          <div class="flex flex-col gap-1">
            <p class="font-semibold font-Montserrat text-3xl">WORKING HOURS</p>
            <p class="text-[#545454] text-base">
              Sunday To Friday 9.00 am - 10.00 pm <br />
              Saturday Closed
            </p>
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
              <li class="cursor-pointer hover:text-primary"><a href="../admin/admin.php">Login</a></li>
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
              <form action="appointment.php" method="post">
                <input
                  type="text"
                  placeholder="Your Email Address"
                  class="px-[1.57rem] py-[1.06rem] w-[20.356rem] h-[3.75rem] items-center flex mb-5"
                  id="email_address_footer"
                  name="email_address_footer"
                />
                <button
                class="px-[2.6rem] py-[1.06rem] bg-primary w-[8.6rem] h-auto text-[#FFFFFF] hover:bg-blue-700"
                >
                <a>Submit</a>
              </button>
            </form>
          </div>
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
