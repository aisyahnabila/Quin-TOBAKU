<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Welcome To Queen ToBaKu</title>
    <link rel="stylesheet" href="src/tailwindcss/tailwind.css">
</head>

<body>
    <header>
        <nav class="bg-white dark:bg-gray-900 w-full z-20 top-0 start-0 border-gray-200 dark:border-gray-600">
            <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src="images/logo.jpg" class="w-20" alt="Flowbite Logo">
                </a>
                <div class="flex md:hidden">
                    <button id="hamburger-button" data-collapse-toggle="navbar-sticky" type="button"
                        class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                        aria-controls="navbar-sticky" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h15M1 7h15M1 13h15" />
                        </svg>
                    </button>
                </div>
                <div class="hidden w-full md:flex md:items-center md:justify-between md:w-auto" id="navbar-sticky">
                    <ul
                        class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="#"
                                class="block py-2 px-3 border-b-2 border-yellow-600 text-white bg-yellow-600 md:bg-transparent md:text-yellow-600 md:p-0 md:dark:text-yellow-600"
                                aria-current="page">BERANDA</a>
                        </li>
                        <li>
                            <a href="page/tentang.html"
                                class="block py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-600 md:p-0 md:dark:hover:text-yellow-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">TENTANG
                                KAMI</a>
                        </li>
                        <li>
                            <a href="page/produk.html"
                                class="block py-2 px-3 text-gray-900 hover:bg-gray-100 md:hover:bg-transparent md:hover:text-yellow-600 md:p-0 md:dark:hover:text-yellow-600 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">PRODUK</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>