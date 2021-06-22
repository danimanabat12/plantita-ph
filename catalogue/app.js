const navSlide = () => {
    const burger1 = document.querySelector('.burger');
    const nav = document.querySelector('.inner-shell');
    const burger2 = document.querySelector('.burger-inside'); 
    const navLinks = document.querySelectorAll('.nav-links li');
    const shopping_cart = document.querySelector('.shopping-cart');
    const sc_middle_part = document.querySelectorAll('.sc-middle-part');
    const cart = document.querySelector('.cart img');
    const close = document.querySelector('.closing-btn');
    const cart_inside = document.querySelector('.cart-inside');

    burger1.addEventListener('click', ()=> {
        nav.classList.add('inner-shell-active');

        navLinks.forEach((link, index) => {
            link.style.animation = `navLinkFade 0.4s ease forwards ${index / 5 + 0.3}s`;
            
        })
    })

    burger2.addEventListener('click', ()=> {
        nav.classList.remove('inner-shell-active');
        navLinks.forEach((link, index) => {
            link.style.animation = '';      
        })
    
    })

    cart.addEventListener('click', ()=> {
        shopping_cart.classList.add('shopping-cart-active');
        sc_middle_part.forEach((link, index) => {
            link.style.animation = `navLinkFade 0.4s ease forwards ${index / 5 + 0.3}s`;      
        })
    })

    cart_inside.addEventListener('click', ()=> {
        shopping_cart.classList.add('shopping-cart-active');
        sc_middle_part.forEach((link, index) => {
            link.style.animation = `navLinkFade 0.4s ease forwards ${index / 5 + 0.3}s`;      
        })
    })

    close.addEventListener('click', () => {
        shopping_cart.classList.remove('shopping-cart-active');
        sc_middle_part.forEach((link, index) => {
            link.style.animation = '';      
        })
        
    })
}

navSlide();