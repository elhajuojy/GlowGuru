<tr class="bg-white transition-all ease-in 0.5s border-b dark:bg-gray-800 product dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
    <td scope="row" class="flex items-center px-4 mx-4 py-4 text-gray-900 whitespace-nowrap              dark:text-white">
        <img class="w-10 h-10 rounded-full" src=<?=$product['product_image']??"https://images.unsplash.com/photo-1524860155154-c904628c418c?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTN8fG1ha2UlMjB1cCUyMHByb2R1Y3RzfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" ?> alt="Jese image">
        <div class="pl-3">
            <div class="text-base font-semibold">
                <?=$product['brand']?? 'Neil Sims' ?>
            </div>
            <!-- <div class="font-normal text-gray-500">neil...kjdlkjlkj</div> -->
        </div>
    </td>
    <th scope="row" class="px-6 py-4 product_name font-medium text-gray-900 whitespace-nowrap dark:text-white">
        <?=$product['product_name']?? 'Neil Sims' ?>
    </th>
    <td class="px-6 py-4">
        <?=$product['product_description']?? 'Neil Sims' ?>
    </td>
    <td class="px-6 py-4">
        <?=$product['product_category']?? 'Neil Sims' ?>
    </td>
    <td class="px-6 py-4">
        $<?=$product['product_price']?? '00.00' ?>
    </td>
    <td class="px-6 py-4">
        <div class="action">
            <a href="/product?id=<?=$product['id']?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
            <br>
            <form action="/product"  method="POST">
                <input type="hidden" name="_method" value="DELETE" >
                <input type="hidden" name="id" value="<?=$product['id']?>">
                <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
            </form>
            <!-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a> -->
        </div>
    </td>
</tr>