
function addLocalCart(slug){
    const cart = [ JSON.parse(window.localStorage.getItem('cart')) ];
    cart.push(slug);
    objSerialized = JSON.stringify(cart);
    window.localStorage.setItem('cart', objSerialized);
}

