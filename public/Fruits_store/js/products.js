const productDOM = document.querySelector(".product__center");
const cartDOM = document.querySelector(".cart");
const itemDOM = document.querySelector(".items");
const cartContent = document.querySelector(".cart__centent");
const itemContent = document.querySelector(".item__centent");
const openCart = document.querySelector(".cart__icon");
const closeCart = document.querySelector(".close__cart");
const closeItem = document.querySelector(".close__item");
const overlay = document.querySelector(".cart__overlay");
const itemOverlay = document.querySelector(".item__overlay");
const cartTotal = document.querySelector(".cart__total");
const clearCartBtn = document.querySelector(".clear__cart");
const itemTotals = document.querySelector(".item__total");

let cart = [];
let buttonDOM = [];
// set Ui of website
class UI {
  displayProducts(products) {
    let results = "";
    products.forEach(({ title, price, image, id }) => {
      results += `<!-- Single Product -->
      <div class="product" >
        <div class="image__container">
          <img src=${image} alt="" id=${title} />
        </div>
        <div class="product__footer">
          <h1>${title}</h1>
          <div class="rating">
            <span>
            <i class="fas fa-star"></i>
            </span>
            <span>
            <i class="fas fa-star"></i>
            </span>
            <span>
            <i class="fas fa-star"></i>
            </span>
            <span>
            <i class="fas fa-star"></i>
            </span>
            <span>
            <i class="fas fa-star"></i>
            </span>
          </div>
          <div class="bottom">
            <div class="btn__group">
              <button class="btn addToCart" data-id= ${id} >Add to Cart</button>
              <button class="btn viewBtn" data-id= ${id}>View</button>
            </div>
            <div class="price">$${price}</div>
          </div>
        </div>
      </div>
      <!-- End of Single Product -->`;
    });
    productDOM.innerHTML = results;
  }


  buyBUtton(){

  }


  viewButton() {
    const buttons = [...document.querySelectorAll(".viewBtn")];
    buttonDOM = buttons;
    buttons.forEach(button => {
      const id = button.dataset.id;

      button.addEventListener("click", e => {
        e.preventDefault();
        console.log(id);
        const viewItem = { ...Storage.getProduct(id), amount: 1 };
        console.log(viewItem);
        itemDOM.classList.add("show");
        itemOverlay.classList.add("show");

        const div = document.createElement("div");

        div.classList.add("product_details");

        div.innerHTML = `<div class="items_details_view" style="background-color: ${viewItem.color2}">
        <section class="item_product">
        <div class="item_product_photo">
            <div class="item_photo_container">
                <div class="item_photo_main" style="background:${viewItem.color1}">
                    <div class="item_controls">
                        <i class="fa fa-share-alt"></i>
                        <i class="fa fa-heart"></i>
                    </div>
                    <img id="apple-img" src="${viewItem.image_details}" alt="">
                </div>
                <div class="photo-ablum">
                    <ul>
                        <li><img src="../img/apple/green-apple2.png"></li>
                        <li><img src="../img/apple/half-apple.png"></li>
                        <li><img src="../img/apple/apple-flipped.png"></li>
                        <li><img src="../img/apple/apple-top.png"></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="product_info">

            <div class="title">
                <h1>
                    ${viewItem.title}
                </h1>
                <span>
                    COD: 45999
                </span>
            </div>

            <div class="price">
                $ <span>${viewItem.price}</span>
            </div>

            <div class="variant">
                <h3>SELECT A COLOR</h3>
                <ul>
                    <li  onclick="changeGreen()"><img  src="../img/apple/green-apple2 (1).png"></li>
                    <li  onclick="changeRed()"><img src="../img/apple/red-apple.png"></li>
                </ul>
            </div>

            <div class="description">
                <h3>BENEFITS</h3>
                <ul>
                  ${viewItem.description}
                </ul>
            </div>

            <button class="buy-btn">ADD TO CART</button>
        </div>
        </div>`;
        itemContent.innerHTML = div.innerHTML;
        const buyButton = document.querySelector(".buy-btn");

        buyButton.addEventListener("click", e=>{
          e.preventDefault();
          e.target.innerHTML = "In Cart";
          e.target.disabled = true;

          // Get product from products
          const cartItem = { ...Storage.getProduct(id), amount: 1 };

          // Add product to cart
          cart = [...cart, cartItem];

          // save the cart in local storage
          Storage.saveCart(cart);
          // set cart values
          this.setItemValues(cart);
          // display the cart item
          this.addCartItem(cartItem);
          // show the cart
        })
      });
    });
  }

  addCartButton(){

  }

  getButtons() {
    const buttons = [...document.querySelectorAll(".addToCart")];
    buttonDOM = buttons;
    buttons.forEach(button => {
      const id = button.dataset.id;
      const inCart = cart.find(item => item.id === parseInt(id, 10));

      if (inCart) {
        button.innerText = "In Cart";
        button.disabled = true;
      }

      button.addEventListener("click", e => {
        e.preventDefault();
        e.target.innerHTML = "In Cart";
        e.target.disabled = true;

        // Get product from products
        const cartItem = { ...Storage.getProduct(id), amount: 1 };

        // Add product to cart
        cart = [...cart, cartItem];

        // save the cart in local storage
        Storage.saveCart(cart);
        // set cart values
        this.setItemValues(cart);
        // display the cart item
        this.addCartItem(cartItem);
        // show the cart
      });
    });
  }

  setItemValues(cart) {
    let tempTotal = 0;
    let itemTotal = 0;

    cart.map(item => {
      tempTotal += item.price * item.amount;
      itemTotal += item.amount;
    });
    cartTotal.innerText = parseFloat(tempTotal.toFixed(2));
    itemTotals.innerText = itemTotal;
  }

  addCartItem({ image, price, title, id }) {
    const div = document.createElement("div");
    div.classList.add("cart__item");

    div.innerHTML = `<img src=${image}>
          <div>
            <h3>${title}</h3>
            <h3 class="price">$${price}</h3>
          </div>
          <div>
            <span class="increase" data-id=${id}>
              <i class="fas fa-angle-up"></i>
            </span>
            <p class="item__amount">1</p>
            <span class="decrease" data-id=${id}>
              <i class="fas fa-angle-down"></i>
            </span>
          </div>

            <span class="remove__item" data-id=${id}>
              <i class="fas fa-trash"></i>
            </span>

        </div>`;
    cartContent.appendChild(div);
  }

  show() {
    cartDOM.classList.add("show");
    overlay.classList.add("show");
  }

  hide() {
    cartDOM.classList.remove("show");
    overlay.classList.remove("show");
  }

  close() {
    itemDOM.classList.remove("show");
    itemOverlay.classList.remove("show");
  }

  setAPP() {
    cart = Storage.getCart();
    this.setItemValues(cart);
    this.populate(cart);

    openCart.addEventListener("click", this.show);
    closeCart.addEventListener("click", this.hide);
    closeItem.addEventListener("click",this.close);
  }

  populate(cart) {
    cart.forEach(item => this.addCartItem(item));
  }

  cartLogic() {
    // Clear Cart
    clearCartBtn.addEventListener("click", () => {
      this.clearCart();
      this.hide();
    });

    // Cart Functionality
    cartContent.addEventListener("click", e => {
      const target = e.target.closest("span");
      const targetElement = target.classList.contains("remove__item");
      if (!target) return;

      if (targetElement) {
        const id = parseInt(target.dataset.id);
        this.removeItem(id);
        cartContent.removeChild(target.parentElement);
      } else if (target.classList.contains("increase")) {
        const id = parseInt(target.dataset.id, 10);
        let tempItem = cart.find(item => item.id === id);
        tempItem.amount++;
        Storage.saveCart(cart);
        this.setItemValues(cart);
        target.nextElementSibling.innerText = tempItem.amount;
      } else if (target.classList.contains("decrease")) {
        const id = parseInt(target.dataset.id, 10);
        let tempItem = cart.find(item => item.id === id);
        tempItem.amount--;

        if (tempItem.amount > 0) {
          Storage.saveCart(cart);
          this.setItemValues(cart);
          target.previousElementSibling.innerText = tempItem.amount;
        } else {
          this.removeItem(id);
          cartContent.removeChild(target.parentElement.parentElement);
        }
      }
    });
  }

  clearCart() {
    const cartItems = cart.map(item => item.id);
    cartItems.forEach(id => this.removeItem(id));

    while (cartContent.children.length > 0) {
      cartContent.removeChild(cartContent.children[0]);
    }
  }

  removeItem(id) {
    cart = cart.filter(item => item.id !== id);
    this.setItemValues(cart);
    Storage.saveCart(cart);

    let button = this.singleButton(id);
    button.disabled = false;
    button.innerText = "Add to Cart";
  }

  singleButton(id) {
    return buttonDOM.find(button => parseInt(button.dataset.id) === id);
  }
}

class Products {
  async getProducts() {
    try {
      const result = await fetch("./products.json");
      const data = await result.json();
      const products = data.items;
      return products;
    } catch (err) {
      console.log(err);
    }
  }
}

class Storage {
  static saveProduct(obj) {
    localStorage.setItem("products", JSON.stringify(obj));
  }

  static saveCart(cart) {
    localStorage.setItem("cart", JSON.stringify(cart));
  }

  static getProduct(id) {
    const products = JSON.parse(localStorage.getItem("products"));
    return products.find(product => product.id === parseFloat(id, 10));
  }

  static getCart() {
    return localStorage.getItem("cart")
      ? JSON.parse(localStorage.getItem("cart"))
      : [];
  }
}

document.addEventListener("DOMContentLoaded", async () => {
  const productList = new Products();
  const ui = new UI();

  ui.setAPP();

  const products = await productList.getProducts();
  ui.displayProducts(products);
  Storage.saveProduct(products);
  ui.viewButton();
  ui.addCartButton();
  ui.getButtons();
  ui.cartLogic();
});
