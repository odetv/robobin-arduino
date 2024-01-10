<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>ROBOBIN</title>
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
    <script type="text/javascript" src="jquery/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            setInterval(function() {
                $("#info_ipaddress").load("src/info_ipaddress.php");
                $("#info_jarakobjek").load("src/info_jarakobjek.php");
                $("#info_jaraksampah").load("src/info_jaraksampah.php");
                $("#info_kapasitas").load("src/info_kapasitas.php");
                $("#info_dayabaterai").load("src/info_dayabaterai.php");
                $("#info_status").load("src/info_status.php");
            }, 500);
        });
    </script>
</head>

<body class="xl:h-screen bg-gray-100 flex items-center">
    <section class="container mx-auto p-6">
        <header>
            <h1 class="text-4xl font-bold text-center pb-1">ROBOBIN</h1>
            <p class="text-2xl text-blueGray-500 font-semibold text-center pb-1">Tong Sampah Cerdas Otomatis</p>
            <div class="text-base text-center text-blueGray-500 mb-8">
                <h1>Uptime 1 Hari 8 Jam 47 Menit 21 Detik</h1>
            </div>
        </header>
        <section>
            <div class="flex flex-col-reverse sm:flex-row md:flex-row lg:flex-row xl:flex-row justify-between items-center gap-2 mb-2">
                <div class="flex gap-2 text-center">
                    <button id="roboToggle" class="text-white font-semibold bg-emerald-500 hover:bg-emerald-700 transition-all ease-linear rounded-lg px-6 py-4">
                        Buka ROBOBIN
                    </button>
                    <button id="modeToggle" class="text-white font-semibold bg-emerald-500 hover:bg-emerald-700 transition-all ease-linear rounded-lg px-6 py-4">
                        Mode Standby
                    </button>
                </div>
                <div class="flex gap-2 text-center">
                    <h1 class="bg-green-500 rounded-lg px-6 py-1 text-white text-base font-semibold">IP Address
                        <p>
                            <a class="hover:text-green-700 transition-all ease-linear" href="http://192.168.8.103" target="_blank" rel="noopener noreferrer">
                                <span id="info_ipaddress">0.0.0.0
                                </span>
                            </a>
                        </p>
                    </h1>
                    <h1 class="bg-red-500 rounded-lg px-6 py-1 text-white text-base font-semibold">
                        Status
                        <p>
                            <span id="info_status">-</span>
                        </p>

                    </h1>
                </div>
            </div>
            <div class="flex flex-wrap bg-blue-500 rounded-lg justify-center">
                <div class="mt-4 w-full lg:w-6/12 xl:w-3/12 px-5 mb-4">
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-3 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">Jarak Objek</h5>
                                    <span class="font-semibold text-xl text-blueGray-700"><span id="info_jarakobjek">0</span>
                                        <span class="font-semibold text-xl text-blueGray-700">cm</span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-red-500">
                                        <i class="fas fa-chart-bar"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <span class="text-emerald-500 mr-2"><i class="fas fa-arrow-up"></i> Aktif</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class=" mt-4 w-full lg:w-6/12 xl:w-3/12 px-5">
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-4 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">Jarak Sampah</h5>
                                    <span class="font-semibold text-xl text-blueGray-700"><span id="info_jaraksampah">0</span>
                                        <span class="font-semibold text-xl text-blueGray-700">cm</span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-pink-500">
                                        <i class="fas fa-chart-pie"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <span class="text-emerald-500 mr-2"><i class="fas fa-arrow-up"></i> Aktif</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 w-full lg:w-6/12 xl:w-3/12 px-5">
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">Kapasitas</h5>
                                    <span class="font-semibold text-xl text-blueGray-700"><span id="info_kapasitas">0</span>
                                        <span class="font-semibold text-xl text-blueGray-700">% Terpakai</span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-lightBlue-500">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <span class="text-emerald-500 mr-2"><i class="fas fa-arrow-up"></i> Aktif</span>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 w-full lg:w-6/12 xl:w-3/12 px-5">
                    <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                        <div class="flex-auto p-4">
                            <div class="flex flex-wrap">
                                <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                                    <h5 class="text-blueGray-400 uppercase font-bold text-xs">Daya Baterai</h5>
                                    <span class="font-semibold text-xl text-blueGray-700"><span id="info_dayabaterai">0</span>
                                        <span class="font-semibold text-xl text-blueGray-700">% Tersisa</span>
                                </div>
                                <div class="relative w-auto pl-4 flex-initial">
                                    <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full  bg-emerald-500">
                                        <i class="fas fa-percent"></i>
                                    </div>
                                </div>
                            </div>
                            <p class="text-sm text-blueGray-400 mt-4">
                                <span class="text-emerald-500 mr-2"><i class="fas fa-arrow-up"></i> Aktif</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="relative mt-8">
            <div class="container mx-auto px-4">
                <div class="flex flex-wrap items-center md:justify-between justify-center">
                    <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                        <div class="text-sm text-blueGray-500 font-semibold py-1">
                            Made with <a href="https://tailwindcss.com" class="text-blueGray-500 hover:text-gray-800" target="_blank">Tailwind CSS</a> by <a href="https://github.com/odetv" class="text-blueGray-500 hover:text-blueGray-800" target="_blank"> GELGEL</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
</body>

<script>
    const roboToggle = document.getElementById("roboToggle");
    const modeToggle = document.getElementById("modeToggle");

    roboToggle.addEventListener("click", function() {
        if (roboToggle.innerText === "Buka ROBOBIN") {
            roboToggle.innerText = "Tutup ROBOBIN";
        } else {
            roboToggle.innerText = "Buka ROBOBIN";
        }
    });

    modeToggle.addEventListener("click", function() {
        if (modeToggle.innerText === "Mode Standby") {
            modeToggle.innerText = "Mode Aktif";
        } else {
            modeToggle.innerText = "Mode Standby";
        }
    });
</script>


</html>