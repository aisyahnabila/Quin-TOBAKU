<?php
include 'layout/head.php';
$id = $_GET['id'];
$data = mysqli_query($conn, "select * from item where item_id='$id'");
while ($row = mysqli_fetch_array($data)) {
?>
    <section class="mb-32">
        <div class="container mx-auto px-4 my-8">
            <div class="relative flex items-center justify-center w-full">
                <hr class="w-full h-px bg-yellow-600 border-0 dark:bg-gray-700">
                <h1 class="absolute px-10 text-2xl font-medium text-yellow-600 bg-white dark:text-white dark:bg-gray-900">
                    Kategori Produk</h1>
            </div>
            <div class="grid md:grid-cols-2 sm:grid-cols-1 gap-4 mt-10">
                <div>
                    <img src="uploads/<?php echo $row['image']?>" class="w-full h-30 object-cover">
                </div>
                <div class="relative">
                    <div>
                        <p class="text-xl font-bold">
                            <?php
                            echo $row['item_name']
                            ?>
                        </p>
                    </div>
                    <div class="grid grid-cols-4 gap-4">
                        <p class="text-sm text-gray-400 font-bold">
                            Stok: <?php echo $row['stock'] ?>
                        </p>
                    </div>
                    <div class="mt-3">
                        <p class="text-2xl font-bold">
                            Rp <?php
                                echo $row['price']
                                ?>,-
                        </p>
                    </div>
                    <div class="mt-3">
                        <p class="font-bold text-lg">
                            Deskripsi:
                        </p>
                        <p>
                            <?php
                            echo $row['item_description']
                            ?>
                        </p>
                    </div>
                    <div class="mt-3">
                        <p class="text-lg font-bold">
                            Komposisi:
                        </p>
                        <p class="">
                            <?php
                            echo $row['composition']
                            ?>
                        </p>
                    </div>
                    <div class="md:absolute bottom-0 w-full sm:w-full">
                        <a href="https://wa.me/62895425730090?text=Halo%20admin%20QUIN%20TOBAKU,%20saya%20ingin%20membeli%20produk%20<?php echo urlencode($row['item_name']); ?>%20dengan%20harga%20produk%20<?php echo urlencode($row['price']); ?>" type="button" class="mt-10 w-full rounded-2xl text-white bg-yellow-500 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium text-sm px-5 py-2.5 text-center me-2 mb-2 dark:focus:ring-yellow-900">Pesan Produk</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
}
include 'layout/footer.php';
?>
<script src="src/js/index.js" defer></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const categoryButtons = document.querySelectorAll(".category-button");
        const itemCards = document.querySelectorAll(".item-card");

        // Function to filter items based on category
        function filterItems(category) {
            itemCards.forEach(card => {
                if (category === "all" || card.getAttribute("data-category") === category) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        }

        // Add event listener to category buttons
        categoryButtons.forEach(button => {
            button.addEventListener("click", () => {
                const category = button.getAttribute("data-category");

                // Filter items based on the selected category
                filterItems(category);

                // Remove active class from all buttons
                categoryButtons.forEach(btn => {
                    btn.classList.remove("active");
                    btn.classList.remove("bg-yellow-600", "text-white");
                    btn.classList.add("text-yellow-600");
                });

                // Add active class to the clicked button
                button.classList.add("active");
                button.classList.remove("text-yellow-600");
                button.classList.add("text-white", "bg-yellow-600", "hover:bg-yellow-600");
            });
        });

        // Set button styles for hover effect
        categoryButtons.forEach(button => {
            button.addEventListener("mouseenter", () => {
                if (!button.classList.contains("active")) {
                    button.classList.add("text-white");
                }
            });

            button.addEventListener("mouseleave", () => {
                if (!button.classList.contains("active")) {
                    button.classList.remove("text-white");
                }
            });
        });

        // Show all items by default
        filterItems("all");

        // Set "Semua" button as active by default
        document.querySelector(".category-button[data-category='all']").classList.add("active");
    });
</script>
</body>

</html>