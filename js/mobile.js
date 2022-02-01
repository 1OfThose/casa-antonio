const navSlide = () => {

        const burger = document.querySelector('.burger');
        const nav = document.querySelector('.for-mobile');
        const link = document.querySelectorAll('.linko');
    
        burger.addEventListener('click' , () => {
            nav.classList.toggle('present');
            burger.classList.toggle('toggle');
        });

        link.forEach( (li) => {
            li.addEventListener('click', () => {
                nav.classList.toggle('present');
                burger.classList.toggle('toggle');
            });
        });

}
    
navSlide();