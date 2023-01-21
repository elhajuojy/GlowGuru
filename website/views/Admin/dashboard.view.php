<?php view(
    'partials/header',
    [
        'cssLinks' => '<link rel="stylesheet" href="./../assets/css/dashboard.css">
                        <link rel="stylesheet" href="./../assets/css/all.css">
                        <link rel="stylesheet" href="./../assets/css/all.min.css">',
    ]
); ?>


<main class="dashboard-container h-screen flex">
    <?= Widget("BaseAdminAside") ?>
    <main class="w-full m-auto px-6">
        <header class="w-full bg-white p-6 flex justify-between container items-center  flex-grow-1 ">
            <h3 class="text-2xl opacity-90 font-semibold">Store Overview</h3>
            <div class="input-search hidden md:block ">
                <span class="text-blue-500 mr-3"><i class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" placeholder="Search" class="w-60 h-5 rounded-full focus:outline-none bg-gray-200 p-4">
            </div>
            <div class="acitvity flex gap-4 justify-between items-center">
                <span class="text-blue-500"><i class="fa-solid fa-envelope"></i></span>
                <div class="divider h-6 w-[2px] bg-slate-300 rounded "></div>
                <span class="text-blue-500"><i class="fa-solid fa-gear"></i></span>
                <div class="divider h-6 w-[2px] bg-slate-300 rounded "></div>
                <a href="/product">
                    <button class=" border-2 rounded-xl active:border-sky-600 hover:bg-slate-200 border-sky-500 border-solid px-2 py-2">
                        <span class="text-blue-500"><i class="fa-solid fa-arrow-up-from-bracket"></i></span>
                        <span class="font-semibold text-blue-500">Add Products </span>
                    </button>
                </a>
            </div>
        </header>
        <div class="activity-cards">
            <?= Widget('activityCard', [
                'title' => 'Total Products',
                'value' => $totalProducts,
                'icon' => 'fa-solid fa-shopping-bag',
                'color' => 'bg-blue-500',
                'iconColor' => 'text-blue-500',
                'grow' => '+ 20,45 %'
            ]) ?>
            <?= Widget('activityCard', [
                'title' => 'Worring Products',
                'value' => $WorringProducts,
                'icon' => 'fa-regular fa-user-plus',
                'color' => 'bg-blue-500',
                'iconColor' => 'text-blue-500',
                'grow' => '+ 9 %'
            ]) ?>
            <?= Widget('activityCard', [
                'title' => 'Total orders',
                'value' => '3,456.22',
                'icon' => 'fa-solid fa-wallet',
                'color' => 'bg-blue-500',
                'iconColor' => 'text-blue-500',
                'grow' => '+ 7,45 %'
            ]) ?>
            <?= Widget('activityCard', [
                'title' => 'Refunded',
                'value' => '503.22',
                'icon' => 'fa-solid fa-arrow-rotate-left',
                'color' => 'bg-blue-500',
                'iconColor' => 'text-blue-500',
                'grow' => '+ 4,3 %'
            ]) ?>
        </div>
        <?= Widget("productsTable", [
            'products' => $products
        ]) ?>
    </main>
</main>