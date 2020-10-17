const collapse = document.querySelector('.menu-btn');
const span =document.querySelector('.menu-btn-collapse')
const navMenu =document.querySelector('nav')
const navLinks = document.querySelectorAll('.nav-items-link');
const projectsCon =document.querySelectorAll('.project')


let openedHeader= false;
collapse.addEventListener('click',function(){
    span.classList.toggle('open')
    navMenu.classList.toggle('open')
    navLinks.forEach(link => {
        link.classList.toggle('open')
    });
})
/*function slideUp(this){
    this.lastElementChild.classList.toggle('SlideUp')
    console.log(this.lastElementChild)
}*/
projectsCon.forEach(project => {
    let lastChild = project.lastElementChild
    project.addEventListener('mouseenter',function(){
       $(lastChild).addClass('SlideUp')
    })
    project.addEventListener('mouseleave',function(){
        $(lastChild).removeClass('SlideUp')
        $(lastChild).addClass('SlideDown');
     })
});






