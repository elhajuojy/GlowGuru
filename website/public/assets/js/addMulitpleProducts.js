
var arrayForms = [];
const saveToBeAdd = (e) => {
    e.preventDefault();
    new FormData(e.target);
    const formData = new FormData(e.target);
    arrayForms.push(formData);
    console.log(arrayForms);
}

 var form = document.getElementById('form');
form.addEventListener('submit', saveToBeAdd);



const saveTotheDatabase = () => {
    if (arrayForms.length === 0) {
        // saveToBeAdd(e);
        alert('No products to add');
        return;
    }
    // e.preventDefault();
    // JSON.stringify(arrayForms);
    arrayForms.forEach(async(form) => {
        data = await fetch('/product', {
            method: 'POST',
            body: JSON.stringify(form),
        });
        var response = await data.json();
        console.log(response);
    })
}