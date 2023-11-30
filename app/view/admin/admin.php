<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="icon" href="https://cdn-icons-png.flaticon.com/512/9703/9703596.png" type="image/png">
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
            bg_AdminCRUD: "url('../../../public/asset/admin/admin-background.png')",
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
    <!-- <style>
        .modal {
            display: none;
        }
        .close {
            cursor: pointer;
            position: absolute;
            top: 1rem;
            right: 1rem;
            font-size: 1.5rem;
        }
        .modal-content {
            animation: fadeIn 0.3s;
        }
        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style> -->
    <title>Pharma Administrator</title>
</head>
<body class="bg-gray-100 font-sans bg-bg_AdminCRUD bg-cover">

    <div class="container mx-auto mt-8 p-6 bg-white shadow-md rounded-lg">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-gray-800">Appointment Customer</h1>
            <button id="openModal" class="bg-blue-500 text-white hover:bg-blue-400 px-4 py-2 ml-[42rem] rounded">Tambah Data</button>
            <button id="openModal" class="bg-slate-200 text-black hover:bg-slate-100 px-4 py-2 rounded">Logout</button>
        </div>

        <table class="w-full border-collapse border rounded-lg overflow-hidden">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-2 px-4 border-b">Id</th>
                    <th class="py-2 px-4 border-b">Name</th>
                    <th class="py-2 px-4 border-b">Email</th>
                    <th class="py-2 px-4 border-b">Phone</th>
                    <th class="py-2 px-4 border-b">Address</th>
                    <th class="py-2 px-4 border-b">Date</th>
                    <th class="py-2 px-4 border-b">Docter</th>
                    <th class="py-2 px-4 border-b"></th>
                </tr>
            </thead>
            <tbody id="dataBody">
                <!-- Data will be appended here using JavaScript -->
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <!-- <div id="myModal" class="modal fixed w-full h-full top-0 left-0 flex items-center justify-center">
        <div class="modal-content bg-white p-8 rounded shadow-md">
            <span id="closeModal" class="close">&times;</span>
            <h2 class="text-2xl font-bold mb-4">Tambah Data</h2>
            <form id="formData">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" class="w-full border p-2 mb-4 rounded-md" required>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
            </form>
        </div>
    </div> -->

    <script src="crud.js"></script>
</body>
</html>
