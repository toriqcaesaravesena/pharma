<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/11496/11496733.png" type="image/png">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
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
<body>
    <section class="flex justify-center items-center h-screen bg-bg_login flex-col ">
        <p href="#" class="flex items-center mb-6 text-4xl font-bold text-gray-700 tracking-[0.1rem]">
            <img src="../../../public/asset/Icon.svg" height="34px" width="34px" class="mr-4">
            Pharma    
        </p>
        <div class="w-full max-w-xl p-6 space-y-8 sm:p-8 bg-slate-100 rounded-lg shadow">
            <h2 class="text-2xl font-bold text-gray-900 text-center">
                Sign in to platform 
            </h2>
            <form class="mt-8 space-y-6" action="#">
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                    <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" placeholder="Input username here" required>
                </div>
                <div>
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                </div>
                <div class="flex items-start">
                    <div class="flex items-center h-5">
                        <input id="remember" aria-describedby="remember" name="remember" type="checkbox" class="w-4 h-4 border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 hover:cursor-pointer" required>
                    </div>
                    <div class="ml-3 text-sm">
                    <label for="remember" class="font-medium text-gray-900">Remember me</label>
                    </div>
                    <a href="reset_password.php" class="ml-auto text-sm text-primary-700 hover:underline">Lost Password?</a>
                </div>
                <button type="submit" class="border-2 border-black w-full px-5 py-3 text-base font-medium text-center rounded-lg"><a href="user.php">Login to your account</a></button>
                <div class="text-sm font-medium text-gray-500 text-center cursor-default">
                    Not registered? <a class="text-primary hover:underline hover:cursor-pointer" href="register.php">Create account</a>
                </div>
            </form>
        </div>
    </section>
</body>
</html>