   import { renderProductCards } from "./productCards.js";

   const filter = (products, productContainer) => {
   const seriesFilterEl = document.querySelector('.js-filter-series'); // элемент с классом .js-filter-series, для делегирования события
   const seriesFilterItemsEl = document.querySelectorAll('.js-series-item'); // элемент с классом, там будут все li с сериями

   const inputSearch = document.querySelector('.js-input-search');
   const priceFilterSelect = document.querySelector('.js-filter-price-select');
   const priceInputs = document.querySelectorAll('.js-filter-price-input');

   let currentSeriesFilter = null;
   let currentPriceFilterSelect = 'default';
   let currentPriceFilterInputs = {min:0, max: Infinity};

   const filterProducts = (filterSeries, filterInputSearch, priceRange) => {
      let filteredProducts = products.filter((product) => {
         if (filterSeries && product.series !== filterSeries) {
            return false;
         }
         if (filterInputSearch && !product.model.toLowerCase().includes(filterInputSearch.toLowerCase())) {
            return false;
         }
         
         const price = parseInt(product.prices[0].replace(/\s/g, ''),10);

         if (price < priceRange.min || price > priceRange.max){
            return false;
         }
         return true;
      });

      if (currentPriceFilterSelect === 'asc')
      {
         filteredProducts.sort((a, b) => {
            const priceA = parseInt(a.prices[0].replace(/\s/g, ''),10);

            const priceB = parseInt(b.prices[0].replace(/\s/g, ''),10);
            return priceA - priceB;
         });
      }
      else if (currentPriceFilterSelect === 'desc')
      {
         filteredProducts.sort((a, b) => {
            const priceA = parseInt(a.prices[0].replace(/\s/g,''),10);

            const priceB = parseInt(b.prices[0].replace(/\s/g,''),10);
            return priceB - priceA;
         });
      }



      // console.log(filteredProducts);
      return filteredProducts;
   };
   const applyFilters = () => {
      const filteredProducts = filterProducts(currentSeriesFilter, inputSearch.value, currentPriceFilterInputs);
      renderProductCards(filteredProducts, productContainer);
   }

   const handleSearchInput = () => {
      inputSearch.addEventListener("input", applyFilters);
   };

   const handleSeriesFilterClick = () => {
      seriesFilterEl.addEventListener('click',(event) => {
         if (!event.target.matches('.js-series-item')) { // если был клик не по элементу с этим классом, то тогда весь код ниже вып-ся не будет
            return;
         }
         // console.log('Клик по лишке с серией');
         seriesFilterItemsEl.forEach((item) => {
            item.classList.remove('active');
            
         });
         event.target.classList.add('active');

         if (event.target.dataset.value !== 'all')
         {
            currentSeriesFilter = event.target.dataset.value;
         }
         else
         {
            currentSeriesFilter = null;
         }
         // console.log('currentSeriesFilter: ', currentSeriesFilter);
         // const filteredProducts = filterProducts(currentSeriesFilter);
         // renderProductCards(filteredProducts, productContainer);
         // console.log('filteredProducts:', filteredProducts);
         applyFilters();
      });
   };
   const handlePriceFilterChange = () => {
      priceFilterSelect.addEventListener('change',() => {
         //console.log(priceFilterSelect.value);
         currentPriceFilterSelect = priceFilterSelect.value;
         console.log('currentPriceFilterSelect: ', currentPriceFilterSelect);
         // filterProducts(currentSeriesFilter, inputSearch.value);
         applyFilters();
      });

   };
   const handlePriceInputChange = () =>{
      // console.log(1);
      
      const minPrice = parseInt(priceInputs[0].value, 10) || 0; // если пустая строка, то будет 0
      const maxPrice = parseInt(priceInputs[1].value, 10) || Infinity; // если пустая строка, то будет infinity

      currentPriceFilterInputs = {min: minPrice, max: maxPrice};
      // console.log('currentPriceFilterInputs: ', currentPriceFilterInputs);
      applyFilters();
   }
   priceInputs.forEach((input) => {
      input.addEventListener('input', handlePriceInputChange);
   });
   handleSeriesFilterClick();
   handleSearchInput();
   handlePriceFilterChange();
};



export {
   filter
};