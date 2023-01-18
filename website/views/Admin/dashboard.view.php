<?php view(
    'partials/header',
    [
        'cssLinks' => '<link rel="stylesheet" href="./assets/css/dashboard.css">',
    ]
); ?>


<main class="dashboard-container h-screen flex">
    <?=Widget("BaseAdminAside")?>
    <?=Widget("productsTable",[
        'products' => $products
    ])?>
</main>
