<?php view(
    'partials/header',
    [
        'cssLinks' => '<link rel="stylesheet" href="./assets/css/dashboard.css">',
    ]
); ?>


<main class="dashboard-container h-screen">
    <?=Widget("BaseAdminAside")?>

</main>
