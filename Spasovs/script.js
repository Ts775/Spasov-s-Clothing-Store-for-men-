const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');
const logo = document.querySelector("log");

if (bar){
    bar.addEventListener('click', () => {
        nav.classList.add('active');
    })
}

if (close){
    close.addEventListener('click', () => {
        nav.classList.remove('active');
    })
}


//products
let product = {
    data: [
    {
        productName: "Summer flower shirt",
        category: "Topwear",
        price: "80",
        Image: "products/p1.jpg",
    },
    {
        productName: "Leather shorts",
        category: "Bottomwear",
        price: "40",
        Image: "products/p2.jpg",
    },
    {
        productName: "Leisure Mesh Shoes",
        category: "Shoes",
        price: "125",
        Image: "products/p3.jpg",
    },
    {
        productName: "Men's Round Neck Full Sleeve T-Shirt",
        category: "Topwear",
        price: "70",
        Image: "products/p4.jpg",
    },
    {
        productName: "Oversized T-Shirt",
        category: "Topwear",
        price: "30",
        Image: "products/p5.jpg",
    },
    {
        productName: "Round Neck Shirt",
        category: "Topwear",
        price: "50",
        Image: "products/p6.jpg",
    },
    {
        productName: "Casual Lymio Shirt",
        category: "Topwear",
        price: "90",
        Image: "products/p7.jpg",
    },
    {
        productName: "White Sneaker Shoes",
        category: "Shoes",
        price: "150",
        Image: "products/p8.jpg",
    },
    {
        productName: "Grey Shirt",
        category: "Topwear",
        price: "80",
        Image: "products/p9.jpg",
    },
    {
        productName: "Color Block Casual Black Shirt",
        category: "Topwear",
        price: "100",
        Image: "products/p10.jpg",
    },
    {
        productName: "Short Sleeve Black Shirt",
        category: "Topwear",
        price: "100",
        Image: "products/p11.jpg",
    },
    {
        productName: "Short Sleeve Polo Shirt",
        category: "Topwear",
        price: "90",
        Image: "products/product.jpg",
    },
    
        
    ]
};

for (let i of product.data){
    //create card
    let card = document.createElement("div");
    //card category
    card.classList.add("card", i.category, "hide");
    //img div
    let imgContainer = document.createElement("div");
    imgContainer.classList.add("image-container");
    //imf tag
    let image = document.createElement("img");
    image.setAttribute("src", i.Image);
    imgContainer.appendChild(image);
    card.appendChild(imgContainer);

    //container
    let procontainer = document.createElement("div");
    procontainer.classList.add("procontainer");
    //product name
    let name = document.createElement("h5");
    name.classList.add("product-name");
    name.innerText = i.productName.toUpperCase();
    procontainer.appendChild(name);

    //price
    let price = document.createElement("h6");
    price.innerText = i.price + "$";
    procontainer.appendChild(price);

    card.appendChild(procontainer);
    document.getElementById("product").appendChild(card);
}

function filterProduct(value){
    //filters class
    let filters = document.querySelectorAll("button-value");
    filters.forEach((button) => {
        //check if its the same inner text
        if (value.toUpperCase() == button.innerText.toUpperCase()){
            button.classList.add("focus");
        }else{
            button.classList.remove("focus");
        }
    });

    //select all
    let elements = document.querySelectorAll(".card");
    //loop thru all cards
    elements.forEach((element) => {
        //display all crads on 'All'
        if(value == "All"){
            element.classList.remove("hide");
        }else{
            if(element.classList.contains(value)){
                //display other elements
                element.classList.remove("hide");
            }else{
                element.classList.add("hide");
            }
        }
    });
    
}

//search button
document.getElementById("search").addEventListener("click", () => {
    let searchInput = document.getElementById("search-input").value;
    let elements = document.querySelectorAll(".product-name");
    let cards = document.querySelectorAll(".card");
    
    //loop thru all elements
    elements.forEach((element, index) => {
        //checks if it includes the search value
        if(element.innerText.includes(searchInput.toUpperCase())){
            //displays the card that is searched for 
            cards[index].classList.remove("hide");
        }else{
            //hides others 
            cards[index].classList.add("hide");
        }
    });
});

//display all initially

window.onload = () => {
    filterProduct('All');
};


