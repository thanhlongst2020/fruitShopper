const Fruit = document.getElementById("fruit-main");
const AppleControl = document.getElementById("apple");
const OrangeControl = document.getElementById("orange");
const BananaControl = document.getElementById("banana");
const StrawControl = document.getElementById("straw");
const BackgroundLayout = document.querySelector(".hero");
const SellContent = document.querySelector(".sell-content");
const SellLogan = document.querySelector(".sell-logan");
const BackImg = document.querySelector(".back-img");
const Button2 = document.querySelector(".btn2");
const r = document.querySelector(':root');

AppleControl.addEventListener('click', () =>{AppleFunction()});
OrangeControl.addEventListener('click', () =>{OrangeFunction()});
BananaControl.addEventListener('click', () =>{BananaFunction()});
StrawControl.addEventListener('click', () =>{StrawFunction()});



const AppleFunction = () =>{
    Fruit.src = "./img/apple-slice.png";
    BackgroundLayout.style.backgroundImage = "url('./img/apple_bg.png')";
    r.style.setProperty('--main-color', '#96e001');
    SellContent.innerHTML = "Usually eaten raw, Apples can also be used in various recipes, juices, and drinks. Various types abound, with a variety of colors and sizes";
    SellLogan.innerHTML = "Gifts ...<br> from nature";
    BackImg.src = "./img/back3.png";
    Button2.href = "./products/products.html#Apple";
}

const OrangeFunction = () =>{
    Fruit.src = "./img/orange-slice.png";
    BackgroundLayout.style.backgroundImage = "url('./img/orange_bg.png')";
    r.style.setProperty('--main-color', '#f9b033');
    SellContent.innerHTML = "Orange is not just a tasty fruit, its more. Get to know the multiple health benefits of adding oranges in your daily diet";
    SellLogan.innerHTML = "Eat Fresh<br> Stay Healthy...";
    BackImg.src = "./img/back1.png";
    Button2.href = "./products/products.html#Orange";
}

const BananaFunction = () =>{
    Fruit.src = "./img/banana-slice.png";
    BackgroundLayout.style.backgroundImage = "url('./img/banana_bg.png')";
    r.style.setProperty('--main-color', '#f7e544');
    SellContent.innerHTML = "Bananas are a meltingly delicious snack that are enjoyed by everyone all year-round";
    SellLogan.innerHTML = "Better than... <br> your husband's";
    BackImg.src = "./img/back2.png";
    Button2.href = "./products/products.html#Banana";
}

const StrawFunction = () =>{
    Fruit.src = "./img/straw-slice.png";
    BackgroundLayout.style.backgroundImage = "url('./img/straw_bg.png')";
    r.style.setProperty('--main-color', '#f07753');
    SellContent.innerHTML = "Strawberries are very rich in antioxidants and plant compounds, which may have benefits for heart health and blood sugar control";
    SellLogan.innerHTML = "Delicious taste <br> from the original";
    BackImg.src = "./img/back.png";
    Button2.href = "./products/products.html#Strawberries";
}

$(document).ready(function(){

    $('#itemslider').carousel({ interval: 3000 });
    
    $('.carousel-showmanymoveone .item').each(function(){
    var itemToClone = $(this);
    
    for (var i=1;i<6;i++) {
    itemToClone = itemToClone.next();
    
    if (!itemToClone.length) {
    itemToClone = $(this).siblings(':first');
    }
    
    itemToClone.children(':first-child').clone()
    .addClass("cloneditem-"+(i))
    .appendTo($(this));
    }
    });
});


const sliderContainer = document.querySelector('.slider-container')
const slideRight = document.querySelector('.right-slide');
const slideLeft = document.querySelector('.left-slide');
const upButton = document.querySelector('.up-button');
const downButton = document.querySelector('.down-button');
const slidesLength = slideRight.querySelectorAll('div').length;

let activeSlideIndex = 0;

slideLeft.style.top = `-${(slidesLength - 1) * 100}vh`;

upButton.addEventListener('click', () => changeSlide('up'));

downButton.addEventListener('click', () => changeSlide('down'));

const changeSlide = (direction) => {
    const sliderHeight = sliderContainer.clientHeight
    if(direction === 'up') {
      activeSlideIndex++
      if(activeSlideIndex > slidesLength - 1) {
        activeSlideIndex = 0
      }
    }
    else if(direction === 'down') {
      activeSlideIndex--
      if(activeSlideIndex < 0) {
        activeSlideIndex = slidesLength -1
      }
    }

    slideRight.style.transform = `translateY(-${activeSlideIndex * sliderHeight}px)`;
    slideLeft.style.transform = `translateY(${activeSlideIndex * sliderHeight}px)`;
}











