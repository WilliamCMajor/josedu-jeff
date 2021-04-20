/* page preloader */
window.addEventListener('load', ()=>{
    const preloader = document.querySelector('.preloader');
    
    setTimeout(()=>{
        preloader.classList.add('animate__animated', 'animate__fadeOutUpBig');
    },3000)
    
    preloader.addEventListener('click', () =>{
        preloader.classList.add('animate__animated', 'animate__fadeOutUpBig');
    })

})


 



/* Toggle Icon */
const toggle = document.querySelector('.menu-icon');

toggle.addEventListener('click', function(e){
    document.querySelector('nav').classList.toggle('show-nav')
})

/* Sculpture thumbnail view */
$(document).ready(function(){
    $('#thumb-1 img').click(function(e){
        e.preventDefault();
        $('#sculpture-1 img').hide().attr("src", $(this).attr("src")).fadeIn();
    })

    $('#thumb-2 img').click(function(e){
        e.preventDefault();
        $('#sculpture-2 img').hide().attr("src", $(this).attr("src")).fadeIn();
    })

    $('#thumb-3 img').click(function(e){
        e.preventDefault();
        $('#sculpture-3 img').hide().attr("src", $(this).attr("src")).fadeIn();
    })

    $('#thumb-4 img').click(function(e){
        e.preventDefault();
        $('#sculpture-4 img').hide().attr("src", $(this).attr("src")).fadeIn();
    })

    $('#thumb-5 img').click(function(e){
        e.preventDefault();
        $('#sculpture-5 img').hide().attr("src", $(this).attr("src")).fadeIn();
    })

})


/* Painting click view */
$(document).ready(function(){
    $('.click-view').append("<img />" + "<div class='close-sign'></div>");
    $('.painting-thumb img').css({cursor: 'pointer'}).click(function(e){
        $('.click-view').css({  
            display: 'block'
        })
        $('.click-view img').hide().attr("src", $(this).attr("src")).fadeIn();
    })

    $('.close-sign').css({cursor: 'pointer'}).click(function(){
        $('.click-view').css({
            display: 'none'
        });
    })
})


/* Project */
