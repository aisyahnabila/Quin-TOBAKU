<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../src/tailwindcss/tailwind.css">
</head>

<body>

    <header>
        <nav class="bg-white dark:bg-gray-900  w-full z-20 top-0 start-0 border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="../images/logo.jpg" class="w-20" alt="Flowbite Logo">
                </a>
                <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                    <div class="flex items-center gap-4">
                        <a href="">
                            <div class="w-8 h-8 relative">
                                <img src="../images/tiktok 1.jpg" alt="tiktok_ToBaKu">
                            </div>
                        </a>
                        <a href="">
                            <div class="w-8 h-8 relative">
                                <img src="../images/shopee.jpg" alt="shopee_ToBaKu">
                            </div>
                        </a>
                        <a href="">
                            <div class="w-8 h-8 relative">
                                <img src="../images/tokopedia.jpg" alt="tokopedia_ToBaKu">
                            </div>
                        </a>
                        <a href="">
                            <div class="w-8 h-8 relative">
                                <img src="../images/whatsapp.jpg" alt="whatsapp_ToBaKu">
                            </div>
                        </a>
                        </a>
                        <a href="">
                            <div class="w-8 h-8 relative">
                                <img src="../images/instagram 1.jpg" alt="instagram_ToBaKu">
                            </div>
                    </div>
                    </a>
                    <button data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-white bg-yellow-600 rounded md:bg-transparent md:text-gray-900 md:p-0 md:dark:text-yellow-600"
                                aria-current="page">BERANDA</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-600 md:p-0 md:dark:hover:text-yellow-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">TENTANG
                                KAMI</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block py-2 px-3 border-b-2 border-yellow-600 text-yellow-600 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-600 md:p-0 md:dark:hover:text-yellow-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">PRODUK</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="mb-32">
        <div class="container mx-auto px-4 my-8">
            <div class="relative flex items-center justify-center w-full">
                <hr class="w-full h-px bg-yellow-600 border-0 dark:bg-gray-700">
                <h1
                    class="absolute px-10 text-2xl font-medium text-yellow-600 bg-white dark:text-white dark:bg-gray-900">
                    Produk Kami</h1>
            </div>
            <div class="mt-10 grid grid-cols-3 sm:grid-cols-3 md:grid-cols-7 gap-4">
                <button type="button"
                    class="w-full h-16 text-white bg-yellow-600 hover:text-white border-2 border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    TEPUNG
                </button>
                <button type="button"
                    class="w-full h-16 text-yellow-600 hover:text-white border-2 border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    KEJU
                </button>
                <button type="button"
                    class="w-full h-16 text-yellow-600 hover:text-white border-2 border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    GLAZE
                </button>
                <button type="button"
                    class="w-full h-16 text-yellow-600 hover:text-white border-2 border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    COKELAT
                </button>
                <button type="button"
                    class="w-full h-16 text-yellow-600 hover:text-white border-2 border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    MAYONAIS
                </button>
                <button type="button"
                    class="w-full h-16 text-yellow-600 hover:text-white border-2 border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-xs px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    PEWARNA MAKANAN
                </button>
                <button type="button"
                    class="w-full h-16 text-yellow-600 hover:text-white border-2 border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    PENGEMBANG
                </button>
                <button type="button"
                    class="w-full h-16 text-yellow-600 hover:text-white border-2 border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    JELY
                </button>
                <button type="button"
                    class="w-full h-16 text-yellow-600 hover:text-white border-2 border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    SAUS
                </button>
                <button type="button"
                    class="w-full h-16 text-yellow-600 hover:text-white border-2 border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    MENTEGA
                </button>
                <button type="button"
                    class="w-full h-16 text-yellow-600 hover:text-white border-2 border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    KRIM KOCOK
                </button>
                <button type="button"
                    class="w-full h-16 text-yellow-600 hover:text-white border-2 border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    ES KRIM
                </button>
                <button type="button"
                    class="w-full h-16 text-yellow-600 hover:text-white border-2 border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    BROWNIES
                </button>
                <button type="button"
                    class="w-full h-16 text-yellow-600 hover:text-white border-2 border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">
                    DEKORASI KUE
                </button>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 mt-10 ">
                <div class="bg-white shadow-md rounded-none overflow-hidden border-2 ">
                    <img src="images/items/tepung.png" alt="Product 1" class="w-full h-90 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg text-center">Tepung</h2>
                        <div class="mt-4 text-center">
                            <a class="text-yellow-600 border-b-2 border-yellow-600" href="">Lihat Lebih Banyak</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-none overflow-hidden border-2 ">
                    <img src="images/items/tepung.png" alt="Product 1" class="w-full h-90 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg text-center">Tepung</h2>
                        <div class="mt-4 text-center">
                            <a class="text-yellow-600 border-b-2 border-yellow-600" href="">Lihat Lebih Banyak</a>
                        </div>
                    </div>
                </div>
                <div class="bg-white shadow-md rounded-none overflow-hidden border-2 ">
                    <img src="images/items/tepung.png" alt="Product 1" class="w-full h-90 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg text-center">Tepung</h2>
                        <div class="mt-4 text-center">
                            <a class="text-yellow-600 border-b-2 border-yellow-600" href="">Lihat Lebih Banyak</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <footer class="bg-yellow-700 text-white py-8">
        <div class="container mx-auto px-14">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Quit Tobaku -->
                <div>
                    <h2 class="text-lg font-bold mb-4 text-yellow-300">Quin Tobaku</h2>
                    <p class="text-white ">Selamat datang di Quin Tobaku, tempat terbaik untuk menemukan produk
                        berkualitas tinggi.</p>
                </div>

                <!-- Tentang -->
                <div>
                    <h2 class="text-lg font-bold mb-4 text-yellow-300">Tentang</h2>
                    <ul>
                        <li class="mb-2">
                            <a href="#" class="text-white  hover:text-white transition">Tentang Kami</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-white  hover:text-white transition">Visi & Misi</a>
                        </li>
                        <li class="mb-2">
                            <a href="#" class="text-white  hover:text-white transition">Karir</a>
                        </li>
                    </ul>
                </div>

                <!-- Hubungi Kami -->
                <div>
                    <h2 class="text-lg font-bold mb-4 text-yellow-300">Hubungi Kami</h2>
                    <ul>
                        <li class="mb-2 text-white">Email: info@quittobaku.com</li>
                        <li class="mb-2 text-white">Telepon: +62 123 456 7890</li>
                        <li class="mb-2 text-white">Alamat: Jl. Contoh No.123, Jakarta</li>
                    </ul>
                    <div class="flex space-x-4 mt-4">
                        <a href="#" class="text-white hover:text-white transition">
                            <img src="images/facebook-icon.png" alt="Facebook" class="w-6 h-6">
                        </a>
                        <a href="#" class="text-white hover:text-white transition">
                            <img src="images/twitter-icon.png" alt="Twitter" class="w-6 h-6">
                        </a>
                        <a href="#" class="text-white hover:text-white transition">
                            <img src="images/instagram-icon.png" alt="Instagram" class="w-6 h-6">
                        </a>
                    </div>
                </div>
            </div>
            <div class="text-center text-white mt-8">
                &copy; 2024 Quit Tobaku. All rights reserved.
            </div>
        </div>
    </footer>

</body>

</html>