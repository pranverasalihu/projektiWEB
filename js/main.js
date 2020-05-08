var header = document.getElementById('header'),
    main = document.getElementById('main'),
    body = document.getElementsByTagName('body'),
    footer = document.getElementById('footer');

body[0].onscroll = function() {
    if(window.scrollY > header.offsetHeight){
        header.classList.add("is--fixed");
    }else{
        header.classList.remove("is--fixed");
    }
};