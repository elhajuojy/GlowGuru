//search products 


const searchInput = document.querySelector('input[name="search"]');

searchInput.addEventListener('input', function(e) {
    // alert('search.js loaded');
    let search = e.target.value;
    // console.log(search);
    let products = document.querySelectorAll('.product');

    setTimeout(() => {
        products.forEach(function(product) {
            let product_name = product.querySelector('.product_name').innerText;
            // let product_description = product.querySelector('.product_description').innerText;
            // || product_description.toLowerCase().indexOf(search.toLowerCase()) > -1
            console.log(product_name);
            
            if(search.length > 0 && product_name.includes(search)) {
                product.classList.remove("hide");
                
            } else {
                product.classList.add("hide");
            }
        });
    
        if(search.length == 0) {
            console.log('search is empty');
            products.forEach(function(product) {
                product.classList.remove("hide");
            });
        }
    }, 300);
    
});


// product_name