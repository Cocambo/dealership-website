import products from './products.js'  // импортируем продукты
import { renderProductCards } from './modules/productCards.js'; // импортируем productsCards.js
import { filter } from './modules/productFilters.js'; // импортируем productsFilters.js
 

window.addEventListener('DOMContentLoaded', () => {  // это событие сработает тогда, когда весь html будет загружен и обработан
   const productContainer = document.querySelector('.js-products-list'); // считываем нашу ul и записываем в контейнер

   renderProductCards(products, productContainer);
   filter(products, productContainer);
});



