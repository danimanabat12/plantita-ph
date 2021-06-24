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


// const orderSummaryListeners = () => {
//     const removeListener = document.querySelectorAll('.remove-btn'); 
//     const increaseListener = document.querySelector('.item-increase'); 
//     const decreaseListener = document.querySelector('.item-decrease');

//     // removeListener.addEventListener('click', ()=> {
//         var itemID = $(removeListener).attr('data-itemID');
//         console.log(itemID);
//     //     console.log(itemID);
//     // })
// }

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

orderSummarySlide();
orderSummaryListeners();