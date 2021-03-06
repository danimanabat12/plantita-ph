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
    const sections = document.querySelector('.sections');

    burger1.addEventListener('click', ()=> {
        nav.style.visibility = 'unset';
        sections.classList.add('section-block');
        nav.classList.add('inner-shell-active');

        navLinks.forEach((link, index) => {
            link.style.animation = `navLinkFade 0.3s ease forwards ${index/10}s`;
        })
    })

    burger2.addEventListener('click', ()=> {
        sections.classList.remove('section-block');
        nav.classList.remove('inner-shell-active'); 
        navLinks.forEach((link, index) => {
            link.style.animation = '';      
        })
        setTimeout(function () {
            nav.style.visibility = 'hidden';
        }, 450);
        
    
    })

    cart.addEventListener('click', ()=> {
        shopping_cart.style.visibility = 'unset';
        shopping_cart.classList.add('shopping-cart-active');
        sections.classList.add('section-block');
        sc_middle_part.forEach((link, index) => {
            link.style.animation = `navLinkFade 0.4s ease forwards ${index / 5 + 0.3}s`;      
        })
    })

    cart_inside.addEventListener('click', ()=> {
        shopping_cart.style.visibility = 'unset';
        shopping_cart.classList.add('shopping-cart-active');
        sections.classList.add('section-block');
        sc_middle_part.forEach((link, index) => {
            link.style.animation = `navLinkFade 0.4s ease forwards ${index / 5 + 0.3}s`;      
        })
    })

    close.addEventListener('click', () => {
        shopping_cart.classList.remove('shopping-cart-active');
        sections.classList.remove('section-block');
        sc_middle_part.forEach((link, index) => {
            link.style.animation = '';      
        })
        setTimeout(function () {
            shopping_cart.style.visibility = 'hidden';
        }, 450);   
    })
}

navSlide();