const navSlide = () => {

    const burger = document.querySelector('.burger');
    const nav = document.querySelector('nav ul');

    const navLinks = document.querySelectorAll('nav ul li a');

    burger.addEventListener('click', () => {

        nav.classList.toggle('nav-active');

        navLinks.forEach((link) =>{
            if(link.style.animation){
                link.style.animation = '';
            }
        })

        burger.classList.toggle('toggle');
    })


}

navSlide();