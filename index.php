<?php
include 'layout/head.php';
$sql = "SELECT *FROM item";
$query = mysqli_query($conn, $sql);
?>
<!-- Banner component -->
<section class="mb-32">
  <!-- Banner Section -->
  <div class="hero w-full">
    <img src="images/banner_1.jpg" class="w-full h-auto object-cover" alt="Hero Image">
  </div>
  <!-- Banner Section End-->

  <div class="container mx-auto px-4 my-8">
    <div class="relative flex items-center justify-center w-full">
      <hr class="w-full h-px bg-yellow-600 border-0 dark:bg-gray-700">
      <h1 class="absolute px-10 text-2xl font-medium text-yellow-600 bg-white dark:text-white dark:bg-gray-900">
        Kategori Produk</h1>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 mt-10 p-5">
      <?php
      while ($data = mysqli_fetch_array($query)) {
      ?>
        <div class="bg-white shadow-md rounded-none overflow-hidden border-2 ">
          <img src="<?php echo $data['item_id'] ?>" alt="Product 1" class="w-full h-90 object-cover">
          <div class="p-4">
            <h2 class="text-lg text-center"><?php $data['item_name'] ?></h2>
            <div class="mt-4 text-center">
              <a class="text-yellow-600 border-b-2 border-yellow-600" href="">Lihat Lebih Banyak</a>
            </div>
          </div>
        </div>
      <?php
      }
      ?>
    </div>
    <div class="relative flex items-center justify-center w-full mt-10">
      <hr class="w-full h-px bg-yellow-600 border-0 dark:bg-gray-700">
      <h1 class="absolute px-10 text-2xl font-medium text-yellow-600 bg-white dark:text-white dark:bg-gray-900">
        Panduan Pemesanan Produk</h1>
    </div>
    <div class="w-full mt-10 p-16">
      <img src="images/proses_quin.png" class="w-full h-auto object-cover" alt="Hero Image">
    </div>
  </div>

</section>
<!-- Banner component End -->

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
      <div class="flex flex-col">
        <h2 class="text-lg font-bold mb-4 text-yellow-300">Hubungi Kami</h2>
        <ul class="flex flex-col">
          <li class="flex items-center mb-2 text-white">
            <img src="images/tiktok 1.jpg" alt="TikTok" class="w-11 h-11 mr-2"> @quin.tobaku
          </li>
          <li class="flex items-center mb-2 text-white">
            <img src="images/shopee.jpg" alt="Shopee" class="w-8 h-11 mr-2"> @quintobaku
          </li>
          <li class="flex items-center mb-2 text-white">
            <img src="images/tokopedia.jpg" alt="Tokopedia" class="w-11 h-11 mr-2"> QUIN TOBAKU
          </li>
          <li class="flex items-center mb-2 text-white">
            <img src="images/whatsapp.jpg" alt="WhatsApp" class="w-11 h-11 mr-2"> +62 856-3215-844
          </li>
          <li class="flex items-center mb-2 text-white">
            <img src="images/instagram 1.jpg" alt="Instagram" class="w-11 h-11 mr-2"> QUIN TOBAKU
          </li>
        </ul>
      </div>
    </div>
    <div class="text-center text-white mt-8">
      &copy; 2024 Quit Tobaku. All rights reserved.
    </div>
  </div>
</footer>
<script src="src/js/index.js" defer></script>
</body>

</html>