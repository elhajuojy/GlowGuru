<?php view(
    'partials/header',
    [
        'cssLinks' => '<link rel="stylesheet" href="./assets/css/home.css">',
    ]
); ?>
<?php view('partials/banner'); ?>
<?php view('partials/navbar'); ?>


<main>
    <div class="welcome">
        <div class="welcome-content">
            <h1 class="text-6xl ">welcome to GlowGuru website </h1>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod. </p>
            <a href="#" class="btn btn-primary">Get Started</a>
            <button type="button" class="w-96  py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Shop Now </button>
        </div>
    </div>
    <div class="products">
        <div class="products-container">
            <h1 class="text-6xl py-6 ">Products</h1>
            <div class="products-list">
                <?php foreach ($products as $product) : ?>
                    <?=Widget("BaseCard", [
                        'img' => $product['product_image'],
                        'imgAlt' => $product['product_name'],
                        'title' => $product['product_name'],
                        'id' => $product['id'],
                        'content' => $product['product_description'],
                        'smallDescription' => $product['brand'],
                        'btnText' => 'See more ...',
                        'price' => $product['product_price']
                    ])?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</main>


<?php view('partials/footer', [
    'jsLinks' => '<script src="./assets/js/home.js"></script>'
]); ?>