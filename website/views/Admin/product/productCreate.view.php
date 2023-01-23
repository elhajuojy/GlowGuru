<?php view(
    'partials/header',
    [
        'cssLinks' => '<link rel="stylesheet" href="./assets/css/home.css">',
    ]
); ?>

<main class="dashboard-container h-screen flex">
    <?= Widget("BaseAdminAside") ?>
    <section class="w-full p-6">
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
        <form class="w-full p-6" name="AddProductForm" method="post" id="form" action="#" enctype="multipart/form-data">
            <?= $button == 'update' ? '<input type="hidden" name="product_id" value="' . $product['id'] . '">' : '' ?>
            <?= $button == 'update' ? '<input type="hidden" name="_method" value="UPDATE">' : '' ?>
            <div class="main-form">
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="product_name[]" id="product_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="" required value="<?= $product['product_name'] ?? '' ?>" />
                    <label for="product_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Product Name </label>
                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="product_description[]" id="product_description" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?= $product['product_description'] ?? '' ?>" required />
                    <label for="product_description" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">product desciption</label>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="file" name="product_image[]" id="product_image" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?= $product['product_image'] ?? '' ?>" />
                    <label for="product_image" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">product image</label>
                    <?php if ($button == 'update') : ?>
                        <div class=". w-32 m-2 p-4 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
                        <input type="hidden" name="old_image_path" value="<?=$product['product_image'] ?>">
                        <a href="#">
                            <img class="rounded-t-lg" src="<?= $product['product_image'] ?>" alt="" />
                        </a>
                        </div>
                    <?php endif; ?>

                </div>
                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="product_category[]" id="product_category" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?= $product['product_category'] ?? '' ?>" required />
                    <label for="floating_product_category" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">product Category </label>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="brand[]" id="brand" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?= $product['brand'] ?? '' ?>" required />
                        <label for="brand" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">brand name </label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="number" name="product_price[]" id="product_price" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?= $product['product_price'] ?? '' ?>" required />
                        <label for="product_price" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Product Price </label>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 md:gap-6">
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="number" name="product_quantity[]" id="product_quantity" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value="<?= strval($product['product_quantity']) ?? '' ?>" required />
                        <label for="product_quantity" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">product quantity </label>
                    </div>
                    <div class="relative z-0 w-full mb-6 group">
                        <input type="text" name="product_id[]" id="product_id" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " value=" <?= $product['product_id'] ?? '' ?>" required />
                        <label for="product_id" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Product Reference (id)</label>
                    </div>
                </div>
            </div>
            <div class="past-new-form">

            </div>
            <div class="btn flex mb-6 gap-6">
                <button type="button" class="add-more-forms text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add more Product </button>
                <button type="submit" name="save_multiple_data" value="save_multiple_data" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <?= $button ??   'Save to Database' ?>
                </button>
            </div>
            </div>
        </form>
    </section>

</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.js" integrity="sha512-nO7wgHUoWPYGCNriyGzcFwPSF+bPDOR+NvtOYy2wMcWkrnCNPKBcFEkU80XIN14UVja0Gdnff9EmydyLlOL7mQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="./../assets/js/addMulitpleProducts.js"></script>
</body>

</html>