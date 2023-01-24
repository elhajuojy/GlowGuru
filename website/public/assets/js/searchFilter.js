$(document).ready(function(){

    $("#search-navbar").change(function(){
        var search = $(this).val();
        console.log(search);
        $.ajax({
            url : `/searchProduct?search=${search}`,
            type: 'GET',
            success: function (data){
                const products = JSON.parse(data)
                console.log(products);
                display(products);

            }
        })
    })
})


const display = (products) => {
    console.log(products);
    let productsContainer = document.querySelector('#search-container');
    productsContainer.innerHTML = '';
    products.forEach((product) => {
        console.log(product);
        productsContainer.innerHTML += card(product);

    });
}

const card  =(product) => {
return `
<sl-card class="card-overview">
    <img slot="image" src="${product.product_image}" alt="" />

    <strong>${product.product_name}</strong><br />
    <p>${product.product_description}</p>
    <small>${product.brand}</small>

    <div slot="footer">
        <a href="/productDetail?id=${product.id})">
            <button class="text-blue-600" variant="secondry" pill>See more ...</button>
        </a>
        <p>$<span>${product.product_price}</span></p>
    </div>
</sl-card>
`;
}