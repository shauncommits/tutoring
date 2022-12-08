const tutoring = document.querySelector('#tut');
            nav = document.querySelector('nav');
            tutoringE = document.querySelector('#tutoring');
            tutoring.addEventListener('click',()=>{
                nav.classList.add('menu-btn');
            })
            tutoringE.addEventListener('click',()=>{
                nav.classList.remove('menu-btn');
            })
