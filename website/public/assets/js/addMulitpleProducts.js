// alert("addMulitpleProducts.js is loaded");

// add mulitple products
function addMulitpleProducts() {

}

data = [];
var formData = new FormData();

function saveToBeAdd (e) {
    // var inputValue = e.inputbox.value;
    console.log (e);
    var  name = e.product_name.value;
    var  price = e.product_price.value;
    var  quantity = e.product_quantity.value;
    var  category = e.product_category.value;
    var  description = e.product_description.value;
    var  image = e.product_image.files[0];
    var product_id = e.product_id.value;
    var brand = e.brand.value;


    if (name == "" || price == "" || quantity == "" || category == "" || description == "" || image == "" || product_id == "" || brand == "") {
        alert("Please fill the form");
        return;
    }
    formData.append('product_image[]', image);
    var  product  = {
        "name": name,
        "price": price,
        "quantity": quantity,
        "description": description,
        "category": category,
        "images": formData,
        "brand": brand,
        "product_id": product_id
    }

    data.push(product);
    insertToBeAdded(data);
}


function insertToBeAdded(data) {
    addRow(); 
}

const addRow = () => {
    var table = document.getElementById("toBeAdded");
    table.innerHTML = "";
    table.innerHTML = 
    `
    <tr>
    <td class="item__name">Product Name</td>
    <td class="item__category">Product Category</td>
    <td class="item__brand">Product Brand</td>
    <td class="item__price">Product Price</td>
    <td class="item__quantity">Product Quantity</td>
    <td class="item__id">Product Id</td>
    </tr>
    `;
    for(var i = 0; i < data.length; i++) {
        var row = table.insertRow(i+1);
        var cell1 = row.insertCell(0);
        var cell2 = row.insertCell(1);
        var cell3 = row.insertCell(2);
        var cell4 = row.insertCell(3);
        var cell5 = row.insertCell(4);
        var cell6 = row.insertCell(5);
        cell1.innerHTML = data[i].name;
        cell2.innerHTML = data[i].category;
        cell3.innerHTML = data[i].brand;
        cell4.innerHTML = data[i].price;
        cell5.innerHTML = data[i].quantity;
        cell6.innerHTML = data[i].product_id;
    }
}

// var  btnAddToDatabase = document.getElementById("btnAddToDatabase");
// btnAddToDatabase.addEventListener("click", saveTotheDatabase);

const saveTotheDatabase = (e) => {
    //ask for confirmation
    // alert("Are you sure you want to add these products to the database?");
    if(!confirm("Are you sure you want to add these products to the database?")){
        return
    }

    if (data.length == 0) {
        saveToBeAdd(e);
    }
    console.log(data);

    data = JSON.stringify(data);
    forms = JSON.stringify(forms);
    

    $.ajax({
        url: '/product',
        type: 'POST',
        data: {
            data: data,
            form: formData
        },
        success: function (response) {

            console.log(response);
            if (response.status == 200) {
                alert("Successfully added");
                window.location.href = "/admin/dashboard/products";
            }
            
        }
    });

}