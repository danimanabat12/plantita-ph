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
        nav.style.visibility = 'unset';
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
        setTimeout(function () {
            nav.style.visibility = 'hidden';
        }, 450);
        
    
    })

    cart.addEventListener('click', ()=> {
        shopping_cart.style.visibility = 'unset';
        shopping_cart.classList.add('shopping-cart-active');
        sc_middle_part.forEach((link, index) => {
            link.style.animation = `navLinkFade 0.4s ease forwards ${index / 5 + 0.3}s`;      
        })
    })

    cart_inside.addEventListener('click', ()=> {
        shopping_cart.style.visibility = 'unset';
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
        setTimeout(function () {
            shopping_cart.style.visibility = 'hidden';
        }, 450);   
    })
}

const orderSummarySlide = () => {
    const clickHere = document.querySelector('.clickhere-btn'); 
    const closeHere = document.querySelector('.close-me');
    const insideOrderSummary = document.querySelector('.inner-shell-os');
    clickHere.addEventListener('click', ()=> {
        insideOrderSummary.classList.add('inner-shell-os-active');
    })

    closeHere.addEventListener('click', ()=> {
       insideOrderSummary.classList.remove('inner-shell-os-active');
        
    })
}

const confirmationSlide = () => {
    console.log("hatdog131");
    const submitListener = document.querySelector('.checkout-btn'); 
    const placeOrderListener = document.querySelector('.place-btn'); 
    const goBackListener = document.querySelector('.go-back-btn'); 
    const firstPopup = document.querySelector('.first-popup');
    const secondPopup = document.querySelector('.second-popup'); 

    submitListener.addEventListener('click', ()=> {
        firstPopup.classList.add('inner-shell-os-active');
    })

    placeOrderListener.addEventListener('click', ()=> {
        secondPopup.classList.add('inner-shell-os-active');
    })

    goBackListener.addEventListener('click', ()=> {
        firstPopup.classList.remove('inner-shell-os-active');
    })

}

function changeQuery(x) {
    const tobeChanged1 = document.querySelector('.bottom-bottom');
    const tobeChanged2 = document.querySelector('.top-top');
    var tobeChecked1 = document.querySelector('.form2 .inner-bottom');
    var tobeChecked2 = document.querySelector('.form3 .basic-top-form .inner-bottom');
    if(x.matches) {
        tobeChanged1.classList.add('.style1');
        tobeChanged2.classList.add('.style1')
        $(".bottom-bottom").appendTo(".form2 .inner-bottom");
        $(".top-top").prependTo(".form3 .basic-top-form .inner-bottom");
    } 
    else {
        if(tobeChecked1.contains(tobeChanged1)) {
            console.log("yea");
            tobeChanged1.classList.remove('.style1');
            $(".bottom-bottom").appendTo(".form2 .complex-top-form .complex-bottom-form");
        }
        if (tobeChecked2.contains(tobeChanged2)) {
            console.log("hatdog");
            tobeChanged2.classList.remove('.style2'); 
            $(".top-top").prependTo(".form3 .basic-top-form");
        }
    }
}

navSlide();
orderSummarySlide();
confirmationSlide();