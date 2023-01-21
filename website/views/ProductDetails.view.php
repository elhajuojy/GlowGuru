<?php view(
    'partials/header',
    [
        'cssLinks' => '<link rel="stylesheet" href="./assets/css/home.css">',
    ]
); ?>
<?php view('partials/banner'); ?>
<?php view('partials/navbar'); ?>

<main class="grid md:grid-cols-2  ">
    <div class="info-section grid place-content-center">
        <h1 class="text-6xl py-6 ">
            <?=$product['product_name'] ?? 'Lorem ipsum dolor sit amet, ' ?>
            
        </h1>
        <p>
            <?=$product['product_description'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.' ?>
            <span class="text-red-600">
                <?=$product['product_category'] ?? 'Lorem ipsum dolor sit amet, ' ?>
            </span>
        </p>

        <p>
           <?=$product['brand'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.' ?>
        </p>

        <p class=". text-blue-500">
            $ <?=$product['product_price'] ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.' ?>
        </p>
    </div>
    <div class="img-section ">
    </div>
</main>


<?php view('partials/footer', [
    'jsLinks' => '<script src="./assets/js/home.js"></script>'
]); ?>

<style>
    .info-section {
        padding: 2rem;
    }
    .img-section {
        height: 85vh;
        padding: 2rem;
        background-image: url("<?php echo $product['product_image'] ?? 'assets/images/products/1.jpg' ?>");
        background-size: cover;
        background-repeat: no-repeat;
    }
</style>