<div class="top-sales-card card w-52 p-5 border-2 border-red-300  rounded  cursor-pointer  ">
    <div class="top-card flex gap-4 justify-center items-center">
        <div class="top-card-icon p-2 bg-green-400 rounded-full w-10 grid justify-center">
            <span class="text-white "><i class="<?=$icon?>"></i></span>
        </div>
        <div class="top-card-text">
            <h3 class="font-bold opacity-60"><?=$title?></h3>
        </div>
    </div>
    <div class="card-price">
        <h3 class="text-2xl font-bold opacity-80 mt-2"><?=$value?></h3>
    </div>
    <div class="card-grow">
        <span class="opacity-70 font-semibold"> <?=$grow?> </span><span class="text-green-500"><i class="fa-solid fa-arrow-up"></i></span>
    </div>
</div>