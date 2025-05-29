var menu = document.querySelector('.menu-mob')
var verify = document.querySelector('.ul')

menu.addEventListener('click', ()=>{
    if (verify.classList.contains('on')) {
        verify.classList.remove('on')
    } else {
        verify.classList.add('on')
    }
})