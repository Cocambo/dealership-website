<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Cars</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="img/favicon1.ico" type="image/x-icon">
    <link rel="shortcut icon" href="img/favicon1.ico" type="image/x-icon">
</head>

<body>
    <header class="header js-header row jcc aic">
        <div class="container row jcsb aic">
            <div class="logo">
                <a href="/main.php">
                    <img src="images/logo111.svg" alt="logo-888" >
                </a>
            </div>
            <div class="row jcc aic">
                <div class="search-bar">
                    <input type="text" placeholder="Поиск" class="js-input-search">
                    <img src="images/icons-search.png" alt="logo-888" >
                    <!-- <button type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
                      <img src="images/logo111.svg" alt="logo-888" > -->
                     <!-- </button> -->
                </div>
                <div class="icons row jcc aic">
                
                    <!-- <span class="shopping-cart row jcc aic js-cart-icon js-cart-btn">
                        <span class="counter row jcc aic js-cart-current-count">1</span>
                        <svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 23 20">
                            <path  d="M4.258 0c.45 0 .842.31.944.738l.749 2.649h15.132a.972.972 0 01.945 1.207L20.21 11.94a.973.973 0 01-.945.74H7.643a.973.973 0 01-.947-.748l.005.017L3.503 1.947H.973A.973.973 0 01.973 0h3.285zM19.84 5.334H6.497l1.895 5.398h10.113l1.335-5.398zM8.857 13.699a2.719 2.719 0 012.715 2.717 2.719 2.719 0 01-2.715 2.716 2.719 2.719 0 01-2.716-2.716 2.719 2.719 0 012.716-2.717zm0 1.491a1.225 1.225 0 100 2.45 1.225 1.225 0 000-2.45zM17.901 13.699a2.719 2.719 0 012.715 2.717 2.719 2.719 0 01-2.715 2.716 2.719 2.719 0 01-2.715-2.716 2.719 2.719 0 012.715-2.717zm0 1.491a1.225 1.225 0 100 2.45 1.225 1.225 0 000-2.45z"/>
                        </svg>
                    </span> -->
                </div>
            </div>
            
            
        </div>
                
        
            
    </header>
    <main class="main column aic jcfs">

        <div class="overlay js-overlay js-close-cart">
            
        </div>
        <div class="cart js-cart"> 
            <span class="close js-close-modal js-close-cart"></span>
            <div class="cart-container column aic">
                <div class="cart-empty-container column jcc aic js-cart-empty-container">
                    <div class="cart-empty">Ваша корзина пуста</div>
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24"><path d="M24 3l-.743 2h-1.929l-3.474 12h-13.239l-4.615-11h16.812l-.564 2h-13.24l2.937 7h10.428l3.432-12h4.195zm-15.5 15c-.828 0-1.5.672-1.5 1.5 0 .829.672 1.5 1.5 1.5s1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5zm6.9-7-1.9 7c-.828 0-1.5.671-1.5 1.5s.672 1.5 1.5 1.5 1.5-.671 1.5-1.5c0-.828-.672-1.5-1.5-1.5z"/></svg>
                    </div>
                </div>

                <div class="cart-order-container    column js-cart-order-container">
                    <div class="cart-order  row jcfs aic">Ваш заказ</div>
                    <form action="server.php" method="POST" class="column aic">
                        <ul class="cart-list column jcc aic js-cart-list">
                            <!-- <li class="cart-item column js-cart-item">
                                <span class="close"></span>
                                <div class="cartline row jcfs aic">
                                    <div class="cart-image-container">
                                        <img src="./img/products/quadcopters/quadcopter0001-front-view.jpg" alt="" class="cart-img">
                                    </div>
                                    <div class="column">
                                        <div class="cart-model row jcfs aic">
                                            DJI AIR 2S
                                        </div>
                                        <div class="row jcsb aic">
                                            <div class="counter row jcc aic js-counter">
                                                <button type="button" class="minus control row jcc aic js-minus disabled" >-</button>
                                                <div class="current-items row jcc aic js-current-items">1</div>
                                                <button type="button" class="plus control row jcc aic js-plus">+</button>
                                            </div>
                                            <div class="row jcc aic">
                                                <span class="cart-price  row jcfe">13 000</span>
                                                <span class="rouble">₽</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                       
                            </li>
                            <li class="cart-item column js-cart-item">
                                <span class="close"></span>
                                <div class="cartline row jcfs aic">
                                    <div class="cart-image-container">
                                        <img src="./img/products/quadcopters/quadcopter0001-front-view.jpg" alt="" class="cart-img">
                                    </div>
                                    <div class="column">
                                        <div class="cart-model row jcfs aic">
                                            DJI AIR 2S
                                        </div>
                                        <div class="row jcsb aic">
                                            <div class="counter row jcc aic js-counter">
                                                <button type="button" class="minus control row jcc aic js-minus disabled" >-</button>
                                                <div class="current-items row jcc aic js-current-items">1</div>
                                                <button type="button" class="plus control row jcc aic js-plus">+</button>
                                            </div>
                                            <div class="row jcc aic">
                                                <span class="cart-price  row jcfe">13 000</span>
                                                <span class="rouble">₽</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                       
                            </li> 
                             -->
                        </ul>
                        <div class="cart-total-container row jcsb aic">
                            <h3 class="title">Итого</h3>
                            <div>
                                <span class="total-price js-cart-total-price">14 000</span>
                                <span class="rouble">₽</span>
                            </div>
                        </div>
                        <div class="cart-btn row jcfs">
                            <button type="submit" class="btn-order">Оформить заказ</button>
                        </div>
                    </form>
                </div> 
               

            
            </div>

        </div>


       
        <div class="container column aic">
        
            <div class="filters row jcfs aic ">
                <div class="filter-series  row jcfs aic js-filter-series">
                    <ul class="row jcc aic">
                        <li class="series-item js-series-item active" data-value="all">Все</li>
                        <li class="series-item js-series-item" data-value="Land Cruiser">Land Cruiser</li>
                        <li class="series-item js-series-item" data-value="Camry">Camry</li>
                        <li class="series-item js-series-item" data-value="Corolla">Corolla</li>
                        <li class="series-item js-series-item" data-value="Hilux">Hilux</li>  
                    </ul>
                </div>

                <div class="filter-price-selects">
                    <select class="select js-filter-price-select" aria-label="Сортировка по цене">
                        <option value="default">Сортировать по цене</option>
                        <option value="asc">По возрастанию цены</option>
                        <option value="desc">По убыванию цены</option>
                    </select>
                </div>

                

                <div class="filter-price-inputs row jcc aic">
                    <label class="filter-price-label row jcsb aic">
                        <span class="filter-text">от</span>
                        <input min="0" max="2000000"  type="number" class="filter-price-input js-filter-price-input" placeholder="40000">
                        <span class="filter-text">₽</span>
                    </label>
                    <label class="filter-price-label row jcsb aic">
                        <span class="filter-text">до</span>
                        <input min="0" max="2000000"  type="number" class="filter-price-input js-filter-price-input" placeholder="2000000">
                        <span class="filter-text">₽</span>
                    </label>
                </div>
            </div>
            

            <div class="products-container">
                <ul class="products list js-products-list row jcfs ">
                    <!-- <li class="product item column aic js-product">
                        <div class="favorites js-favorites">
                            <span class="heart-lined js-heart-lined">
                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m7.234 3.004c-2.652 0-5.234 1.829-5.234 5.177 0 3.725 4.345 7.727 9.303 12.54.194.189.446.283.697.283s.503-.094.697-.283c4.977-4.831 9.303-8.814 9.303-12.54 0-3.353-2.58-5.168-5.229-5.168-1.836 0-3.646.866-4.771 2.554-1.13-1.696-2.935-2.563-4.766-2.563zm0 1.5c1.99.001 3.202 1.353 4.155 2.7.14.198.368.316.611.317.243 0 .471-.117.612-.314.955-1.339 2.19-2.694 4.159-2.694 1.796 0 3.729 1.148 3.729 3.668 0 2.671-2.881 5.673-8.5 11.127-5.454-5.285-8.5-8.389-8.5-11.127 0-1.125.389-2.069 1.124-2.727.673-.604 1.625-.95 2.61-.95z" fill-rule="nonzero"></path></svg>
                            </span>
                    
                            <span class="heart-filled js-heart-filled hidden">
                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12 5.72c-2.624-4.517-10-3.198-10 2.461 0 3.725 4.345 7.727 9.303 12.54.194.189.446.283.697.283s.503-.094.697-.283c4.977-4.831 9.303-8.814 9.303-12.54 0-5.678-7.396-6.944-10-2.461z" fill-rule="nonzero"></path></svg> 
                            </span>
                        </div>
                        <a href="#" id="c99defa172954bbdb88057e911feab72" class="link column aic js-link-card">
                            
                            <div class="product-image row jcc">
                                <img src="img/products/quadcopters/quadcopter0001-front-view.jpg" alt="" class="image js-image-card">   
                            </div>
                            <div class="product-description">
                                <h3 class="title js-title-card">DJI Mavic 3</h3>
                            </div>  
                            <div class="product-price">
                                <span class="price js-price-card">362 000</span><span>₽</span>
                            </div>       
                        </a>
                        <button type="button" class="addCart buy-button js-buy-button">В корзину</button>
                    </li>
                    <li class="product item column aic js-product">
                        <div class="favorites js-favorites">
                            <span class="heart-lined js-heart-lined">
                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m7.234 3.004c-2.652 0-5.234 1.829-5.234 5.177 0 3.725 4.345 7.727 9.303 12.54.194.189.446.283.697.283s.503-.094.697-.283c4.977-4.831 9.303-8.814 9.303-12.54 0-3.353-2.58-5.168-5.229-5.168-1.836 0-3.646.866-4.771 2.554-1.13-1.696-2.935-2.563-4.766-2.563zm0 1.5c1.99.001 3.202 1.353 4.155 2.7.14.198.368.316.611.317.243 0 .471-.117.612-.314.955-1.339 2.19-2.694 4.159-2.694 1.796 0 3.729 1.148 3.729 3.668 0 2.671-2.881 5.673-8.5 11.127-5.454-5.285-8.5-8.389-8.5-11.127 0-1.125.389-2.069 1.124-2.727.673-.604 1.625-.95 2.61-.95z" fill-rule="nonzero"></path></svg>
                            </span>
                    
                            <span class="heart-filled js-heart-filled hidden">
                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12 5.72c-2.624-4.517-10-3.198-10 2.461 0 3.725 4.345 7.727 9.303 12.54.194.189.446.283.697.283s.503-.094.697-.283c4.977-4.831 9.303-8.814 9.303-12.54 0-5.678-7.396-6.944-10-2.461z" fill-rule="nonzero"></path></svg> 
                            </span>
                        </div>
                        <a href="#" id="c99defa172954bbdb88057e911feab73" class="link column aic js-link-card">
                            <div class="product-image row jcc">
                                <img src="img/products/quadcopters/quadcopter0002-front-view.jpg" alt="" class="image js-image-card">   
                            </div>
                            <div class="product-description">
                                <h3 class="title js-title-card">DJI AIR 2S</h3>
                            </div>  
                            <div class="product-price">
                                <span class="price js-price-card">129 000</span><span>₽</span>
                            </div>       
                        </a>
                        <button type="button" class="addCart buy-button js-buy-button">В корзину</button>
                    </li>
                    <li class="product item column aic js-product">
                        <div class="favorites js-favorites">
                            <span class="heart-lined js-heart-lined">
                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m7.234 3.004c-2.652 0-5.234 1.829-5.234 5.177 0 3.725 4.345 7.727 9.303 12.54.194.189.446.283.697.283s.503-.094.697-.283c4.977-4.831 9.303-8.814 9.303-12.54 0-3.353-2.58-5.168-5.229-5.168-1.836 0-3.646.866-4.771 2.554-1.13-1.696-2.935-2.563-4.766-2.563zm0 1.5c1.99.001 3.202 1.353 4.155 2.7.14.198.368.316.611.317.243 0 .471-.117.612-.314.955-1.339 2.19-2.694 4.159-2.694 1.796 0 3.729 1.148 3.729 3.668 0 2.671-2.881 5.673-8.5 11.127-5.454-5.285-8.5-8.389-8.5-11.127 0-1.125.389-2.069 1.124-2.727.673-.604 1.625-.95 2.61-.95z" fill-rule="nonzero"></path></svg>
                            </span>
                    
                            <span class="heart-filled js-heart-filled hidden">
                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12 5.72c-2.624-4.517-10-3.198-10 2.461 0 3.725 4.345 7.727 9.303 12.54.194.189.446.283.697.283s.503-.094.697-.283c4.977-4.831 9.303-8.814 9.303-12.54 0-5.678-7.396-6.944-10-2.461z" fill-rule="nonzero"></path></svg> 
                            </span>
                        </div>
                        <a href="#" id="e62180e99588434a9b875162166b5bc8" class="link column aic js-link-card">
                            <div class="product-image row jcc">
                                <img src="img/products/quadcopters/quadcopter0003-front-view.jpg" alt="" class="image js-image-card">   
                            </div>
                            <div class="product-description">
                                <h3 class="title js-title-card">DJI Mini 2</h3> 
                            </div>  
                            <div class="product-price">
                                <span class="price js-price-card">49 000</span><span>₽</span>
                            </div>       
                        </a>
                        <button type="button" class="addCart buy-button js-buy-button">В корзину</button>
                    </li>
                    <li class="product item column aic js-product">
                        <div class="favorites js-favorites">
                            <span class="heart-lined js-heart-lined">
                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m7.234 3.004c-2.652 0-5.234 1.829-5.234 5.177 0 3.725 4.345 7.727 9.303 12.54.194.189.446.283.697.283s.503-.094.697-.283c4.977-4.831 9.303-8.814 9.303-12.54 0-3.353-2.58-5.168-5.229-5.168-1.836 0-3.646.866-4.771 2.554-1.13-1.696-2.935-2.563-4.766-2.563zm0 1.5c1.99.001 3.202 1.353 4.155 2.7.14.198.368.316.611.317.243 0 .471-.117.612-.314.955-1.339 2.19-2.694 4.159-2.694 1.796 0 3.729 1.148 3.729 3.668 0 2.671-2.881 5.673-8.5 11.127-5.454-5.285-8.5-8.389-8.5-11.127 0-1.125.389-2.069 1.124-2.727.673-.604 1.625-.95 2.61-.95z" fill-rule="nonzero"></path></svg>
                            </span>
                    
                            <span class="heart-filled js-heart-filled hidden">
                                <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m12 5.72c-2.624-4.517-10-3.198-10 2.461 0 3.725 4.345 7.727 9.303 12.54.194.189.446.283.697.283s.503-.094.697-.283c4.977-4.831 9.303-8.814 9.303-12.54 0-5.678-7.396-6.944-10-2.461z" fill-rule="nonzero"></path></svg> 
                            </span>
                        </div>
                        <a href="#" id="c578faa3db1d46a195a2efb47e7fb913" class="link column aic js-link-card">
                            <div class="product-image row jcc">
                                <img src="img/products/quadcopters/quadcopter0004-front-view.png" alt="" class="image js-image-card">   
                            </div>
                            <div class="product-description">
                                <h3 class="title js-title-card">DJI Inspire 2</h3>
                            </div>  
                            <div class="product-price">
                                <span class="price js-price-card">1 239 000</span><span>₽</span>
                            </div>       
                        </a>
                        <button type="button" class="addCart buy-button js-buy-button">В корзину</button>
                    </li> -->
                </ul> 
                
            </div>
            

            <!-- <div class="pagination js-pagination row jcc aic  hidden">
                <button type="button" class="pagination-btn pagination-btn-prev row jcc aic js-pagination-btn-prev">
                    <svg style="transform: rotate(180deg) scale(.55);" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#84868E" d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>
                </button>
                <ul class="pagination-list js-pagination-list row jcc aic">
                    
                    
                </ul>
                <button type="button" class=" pagination-btn pagination-btn-next row jcc aic js-pagination-btn-next">
                    <svg style="transform: rotate(0deg) scale(.55);" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#84868E" d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>
                </button>
            </div>

            <button type="button" class="btn-show-more js-btn-show-more">Показать ещё</button> -->
        </div>        
            
       
    </main>
    
    <footer class="footer">
        
    </footer>

    <script type="module" src="js/main.js"></script>
</body>
</html>