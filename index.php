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
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 gap-12 mt-10 p-5">
      <?php
      while ($data = mysqli_fetch_array($query)) {
      ?>
        <div class="bg-white shadow-md rounded-none overflow-hidden border-2">
          <img src="uploads/<?php echo $data['image']; ?>" alt="<?php echo $data['item_name']; ?>" class="w-full h-90 object-cover">
          <div class="p-4">
            <h2 class="text-lg text-center"><?php echo $data['item_name']; ?></h2>
            <div class="mt-4 text-center">
              <a class="text-yellow-600 border-b-2 border-yellow-600" href="<?php echo 'detailproduk.php?id=' .  $data['item_id'] ?>">Lihat Lebih Banyak</a>
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

<?php
include 'layout/footer.php'
?>
<script src="src/js/index.js" defer></script>
</body>

</html>