let nav=document.querySelector('.nav-bar');
window.addEventListener('scroll',function(){
        if(window.scrollY>0){
        nav.classList.add('nav-active');
    }
    if(this.window.scrollY===0){
        nav.classList.remove('nav-active');
    }
    
});
const menuBtn=document.querySelector('.btn-mobile-nav');
const navBar=document.querySelector('.nav-bar');
    menuBtn.addEventListener('click',function(){
        navBar.classList.toggle('nav-open');
    })
