<?php
include 'layout/head.php';
$category = "SELECT * FROM category";
$item = "SELECT * FROM item";
$querycategory = mysqli_query($conn, $category);
$queryitem = mysqli_query($conn, $item);
?>
<section class="mb-32">
    <div class="container mx-auto px-4 my-8">
        <div class="relative flex items-center justify-center w-full">
            <hr class="w-full h-px bg-yellow-600 border-0 dark:bg-gray-700">
            <h1 class="absolute px-10 text-2xl font-medium text-yellow-600 bg-white dark:text-white dark:bg-gray-900">
                Produk Kami</h1>
        </div>
        <div class="mt-10 grid grid-cols-3 sm:grid-cols-3 md:grid-cols-7 gap-4">
            <button type="button" class="category-button w-full h-16 text-yellow-600 bg-white border-2 border-yellow-600 hover:bg-yellow-600 hover:text-white focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900" data-category="all">
                Semua
            </button>

            <?php
            while ($data = mysqli_fetch_array($querycategory)) {
            ?>
                <button type="button" class="category-button w-full h-16 text-yellow-600 bg-white border-2 hover:text-white border-yellow-600 hover:bg-yellow-600 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900" data-category="<?php echo $data['category_id']; ?>">
                    <?php echo $data['category_name']; ?>
                </button>
            <?php
            }
            ?>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12 mt-10">
            <?php
            while ($data = mysqli_fetch_array($queryitem)) {
            ?>
                <div class="item-card bg-white shadow-md rounded-none overflow-hidden border-2" data-category="<?php echo $data['category_id']; ?>">
                    <img src="uploads/<?php echo $data['image']; ?>" alt="<?php echo $data['item_name']; ?>" class="w-full h-90 object-cover">
                    <div class="p-4">
                        <h2 class="text-lg text-center"><?php echo $data['item_name']; ?></h2>
                        <div class="mt-4 text-center">
                            <a class="text-yellow-600 border-b-2 border-yellow-600" href="">Lihat Lebih Banyak</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</section>
<?php
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