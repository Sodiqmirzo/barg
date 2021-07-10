// JavaScript

const barBtn = document.getElementById('barBtn');
const barList = document.getElementById('bar-list');
barBtn.addEventListener('click', e => {
    barList.style.display = 'inline-block';
})

window.addEventListener('click', e => {
    if (e.target == barList) {
        barList.style.display = 'none';
    }
});

// get main changer btn
const mainImgChangeBtn = document.querySelectorAll('.main-image__btn');
// get main first img 
const mainFirstImg = document.getElementById('soma');
const mainSecondImg = document.getElementById('eksa');
const mainThirdImg = document.getElementById('buldo');
const mainFourImg = document.getElementById('digger');

// get main image wrapper 
const mainImgWrapper1 = document.getElementById('mainImgWrapper1');
const mainImgWrapper2 = document.getElementById('mainImgWrapper2');
const mainImgWrapper3 = document.getElementById('mainImgWrapper3');
const mainImgWrapper4 = document.getElementById('mainImgWrapper4');

// get catalogue img change btn text
const catalogChangeBtns = document.querySelectorAll('.catalogue-image-text');
// cataloge wrapper image change btn
const catalogChangeBtnWrapper = document.querySelectorAll('.catalogue-image__btn-circle');

// get catalogue lists
const catalogList = document.querySelectorAll('.catalogue-list');
const catalogBuldozerList = document.getElementById('cbuldozer');
const catalogCombineList = document.getElementById('combine');
const catalogEkskavator = document.getElementById('ekskavator');
const catalogKatki = document.getElementById('katki');
const catalogPeregruz = document.getElementById('peregruz');
const catalogTools = document.getElementById('tools');

// get cataloge img changer btn wraper
const catalogImgWrapper1 = document.querySelector('.catalogue-btn-0');
const catalogImgWrapper2 = document.querySelector('.catalogue-btn-1');
const catalogImgWrapper3 = document.querySelector('.catalogue-btn-2');
const catalogImgWrapper4 = document.querySelector('.catalogue-btn-3');
const catalogImgWrapper5 = document.querySelector('.catalogue-btn-5');
const catalogImgWrapper6 = document.querySelector('.catalogue-btn-6 ');
// get navbar menu btn
const navBtn = document.getElementById('barBtn');
// get navbar list
const navList = document.querySelector('.nav-list-second');
// get nav close btn
const navCloseBtn = document.getElementById('barCloseBtn');
// open navbar
navList.style.display = 'none';
const navBarCloseImg = document.querySelector('.nav-bar__img');
// main container 
const mainContainer = document.querySelector('.main-text-side');
// main navbar brand
const navBarBrand = document.querySelector('.nav');
const headerElement = document.querySelector('header');

navBtn.addEventListener('click', e => {
    bodyWrapper.style.display = 'block';
    navCloseBtn.style.display = 'inline-block';
    navBtn.style.display = 'none';
    navList.style.display = 'flex';
    // mainContainer.classList.add('blured')
    navBarBrand.classList.add('blured');
})

navCloseBtn.addEventListener('click', e => {
    navList.style.display = 'none';
    navCloseBtn.style.display = 'none';
    navBtn.style.display = 'block';
    // mainContainer.classList.remove('blured');
    navBarBrand.classList.remove('blured');
    bodyWrapper.style.display = 'none';
})

const mainLine = document.querySelector('.main-line')

window.addEventListener('click', e => {
    if (e.target == mainLine || e.target == bodyWrapper) {
        bodyWrapper.style.display = 'none';
        navList.style.display = 'none';
        navCloseBtn.style.display = 'none';
        navBtn.style.display = 'block';
        mainContainer.classList.remove('blured');
        navBarBrand.classList.remove('blured');
    }
});

catalogChangeBtns.forEach(element => {
    element.addEventListener('click', e => {
        console.log(e.target);
        if (e.target.dataset.target == 'cbuldozer') {
            if (catalogBuldozerList.id  == e.target.dataset.target) {
                catalogBuldozerList.classList.add('active')
                catalogImgWrapper3.classList.add('active');
            } else {
                catalogBuldozerList.classList.remove('active');
                catalogImgWrapper3.classList.remove('active');
            }
        } else {
            catalogBuldozerList.classList.remove('active');
            catalogImgWrapper3.classList.remove('active');
        }
        if (e.target.dataset.target == 'ekskavator'){
            if (catalogEkskavator.id  == e.target.dataset.target) {
                catalogEkskavator.classList.add('active');
                catalogImgWrapper4.classList.add('active');
            } else {
                catalogEkskavator.classList.remove('active');
                catalogImgWrapper4.classList.remove('active');
            }
        } else {
            catalogEkskavator.classList.remove('active');
            catalogImgWrapper4.classList.remove('active');
        }
        if (e.target.dataset.target == 'combine'){
            if (catalogCombineList.id  == e.target.dataset.target) {
                catalogCombineList.classList.add('active');
                catalogImgWrapper5.classList.add('active');
            } else {
                catalogCombineList.classList.remove('active');
                catalogImgWrapper5.classList.remove('active');
            }
        } else {
            catalogCombineList.classList.remove('active');
            catalogImgWrapper5.classList.remove('active');
        }
        if (e.target.dataset.target == 'katki'){
            if (catalogKatki.id  == e.target.dataset.target) {
                catalogKatki.classList.add('active');
                catalogImgWrapper6.classList.add('active');
            } else {
                catalogKatki.classList.remove('active');
                catalogImgWrapper6.classList.remove('active');
            }
        } else {
            catalogKatki.classList.remove('active');
            catalogImgWrapper6.classList.remove('active');
        }
        if (e.target.dataset.target == 'peregruz'){
            if (catalogPeregruz.id  == e.target.dataset.target) {
                catalogPeregruz.classList.add('active')
                catalogImgWrapper2.classList.add('active');
            } else {
                catalogPeregruz.classList.remove('active')
                catalogImgWrapper2.classList.remove('active');
            }
        } else {
            catalogPeregruz.classList.remove('active');
            catalogImgWrapper2.classList.remove('active');
        }
        if (e.target.dataset.target == 'tools'){
            if (catalogTools.id  == e.target.dataset.target) {
                catalogTools.classList.add('active');
                catalogImgWrapper1.classList.add('active');
            } else {
                catalogTools.classList.remove('active')
                catalogImgWrapper1.classList.remove('active');
            }
        } else {
            catalogTools.classList.remove('active');
            catalogImgWrapper1.classList.remove('active');
        }
    })
})

catalogChangeBtnWrapper.forEach(element => {
    element.addEventListener('click', e => {
        console.log(e.target.id);
        if (e.target.id == 'buldozerSircle') {
            
            catalogBuldozerList.classList.add('active')
            catalogImgWrapper3.classList.add('active');
            
            
            
        } else {
            catalogBuldozerList.classList.remove('active');
            catalogImgWrapper3.classList.remove('active');
        }
        if (e.target.id == 'ekskavatorSircle'){
            
            catalogEkskavator.classList.add('active');
            catalogImgWrapper4.classList.add('active');
            
            
            
        } else {
            catalogEkskavator.classList.remove('active');
            catalogImgWrapper4.classList.remove('active');
        }
        if (e.target.id== 'combineSircle'){
            
            catalogCombineList.classList.add('active');
            catalogImgWrapper5.classList.add('active');
            
            
            
        } else {
            catalogCombineList.classList.remove('active');
            catalogImgWrapper5.classList.remove('active');
        }
        if (e.target.id == 'katkiSircle'){
            
            catalogKatki.classList.add('active');
            catalogImgWrapper6.classList.add('active');
            
            
            
        } else {
            catalogKatki.classList.remove('active');
            catalogImgWrapper6.classList.remove('active');
        }
        if (e.target.id == 'peregruzSircle'){
            
            catalogPeregruz.classList.add('active')
            catalogImgWrapper2.classList.add('active');
            
            
        } else {
            catalogPeregruz.classList.remove('active');
            catalogImgWrapper2.classList.remove('active');
        }
        if (e.target.id == 'toolsCircle'){
            
            catalogTools.classList.add('active');
            catalogImgWrapper1.classList.add('active');
            
            
            
        } else {
            catalogTools.classList.remove('active');
            catalogImgWrapper1.classList.remove('active');
        }
    })
})


// changa main image function
mainImgChangeBtn.forEach(element => {
    element.addEventListener('click', e => {
        if (e.target.id == 'mainImageBtn1' || e.target.id == 'mainImgCircle1' || e.target.id == 'mainImgWrapper1') {
            mainFirstImg.classList.add('first');
            mainImgWrapper1.classList.add('active')
        } else {
            mainFirstImg.classList.remove('first');
            mainImgWrapper1.classList.remove('active');
        } 
        if (e.target.id == 'mainImageBtn2' || e.target.id == 'mainImgCircle2' || e.target.id == 'mainImgWrapper2') {
            mainSecondImg.classList.add('second')
            mainImgWrapper2.classList.add('active');
        } else {
            mainSecondImg.classList.remove('second');
            mainImgWrapper2.classList.remove('active');
        }
        if (e.target.id == 'mainImageBtn3' || e.target.id == "mainImgCircle3" || e.target.id == 'mainImgWrapper3') {
            mainThirdImg.classList.add('third');
            mainImgWrapper3.classList.add('active');
        } else {
            mainThirdImg.classList.remove('third')
            mainImgWrapper3.classList.remove('active');
        }
        if (e.target.id == 'mainImageBtn4' || e.target.id == 'mainImgCircle4' || e.target.id == 'mainImgWrapper4') {
            mainFourImg.classList.add('four');
            mainImgWrapper4.classList.add('active');
        } else {
            mainFourImg.classList.remove('four')
            mainImgWrapper4.classList.remove('active');
        }
    })
}); 


var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    autoplay: {
        delay: 2000,
    },
    speed: 800,
    lazy: true,
    parallax: true,
    slidesPerView: 'auto',
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    
});

var swiper = new Swiper(".mySwiper2", {});


const catalogueSelectElement = document.querySelector('.catalogue-select');

const catalogueSelectOptionElement = document.querySelectorAll('.catalogue-select option');

AOS.init();


// main img select responsive
const mainImageChangeHederText = document.querySelector('.main-image-select-header-text');
const mainImageChangeResTexts = document.querySelectorAll('.main-image-responsive-select-text');
const mainImageChangeResList = document.querySelector('.main-image-select-res-list');
const mainImagesRes = document.querySelectorAll('.main-image-res')
const mainImgChangeWrapper = document.querySelector('.main-images-select-wrapper');
mainImgChangeWrapper.style.display = 'none';

mainImageChangeHederText.addEventListener('click', function(e) {
    mainImageChangeResList.classList.add('active');
    mainImgChangeWrapper.style.display = 'block';
    mainImageChangeHederText.classList.add('active');
})

mainImageChangeResTexts.forEach(function(text){
    text.addEventListener('click', e => {
        mainImagesRes.forEach(function(img) {
            if (e.target.dataset.target == img.id) {
                img.classList.add('active');
                mainImgChangeWrapper.style.display = 'none';
                mainImageChangeResList.classList.remove('active');
                mainImageChangeHederText.textContent = e.target.textContent;
                mainImageChangeHederText.classList.remove('active');
            } else {
                img.classList.remove('active');
            }
        })
    })
    
})

const catalogueSelectList = document.querySelector('.catalogue-select-list');
const catalogueSelectItem = document.querySelectorAll('.catalogue-select-list li');
const catalogueSecectText = document.querySelector('.catalogue-selector-text');
const catalogueSecectTextAffter = document.querySelector('.catalogue-selector-text::after');
const catalogueSelectSubtext = document.querySelectorAll('.catalogue-selector-subtext');
const catalogueSelectModal = document.querySelector('.catalogue-select-wrapper');
const catalogueSelectWrapperModal = document.querySelector('.catalogue-select-header')

catalogueSecectText.classList.remove('active') 

window.addEventListener('click', e => {
    if (e.target == catalogueSelectModal) {
        catalogueSelectList.classList.remove('active');
        catalogueSelectList.classList.add('remove')
        catalogueSelectModal.style.display = 'none';   
        catalogueSecectText.classList.remove('active')   
    }
    if (e.target == mainImgChangeWrapper) {
        mainImageChangeResList.classList.remove('active');
        mainImgChangeWrapper.style.display = 'none';
        mainImageChangeHederText.classList.remove('active');
    }
})

catalogueSecectText.addEventListener('click', e => {
    catalogueSelectList.classList.add('active')
    catalogueSelectList.classList.remove('remove')
    catalogueSelectModal.style.display = 'block';    
    catalogueSecectText.classList.add('active') 
    console.log(catalogueSecectText.textContent);
    catalogueSelectItem.forEach(element => {
        element.addEventListener('click', e => {
            if (e.target.dataset.target == 'cbuldozer') {
                if (catalogBuldozerList.id  == e.target.dataset.target) {
                    catalogBuldozerList.classList.add('active')
                    catalogImgWrapper3.classList.add('active');
                    catalogueSelectModal.style.display = 'none';  
                    catalogueSecectText.classList.remove('active')  
                    catalogueSecectText.textContent = e.target.textContent; 
                } else {
                    catalogBuldozerList.classList.remove('active');
                    catalogImgWrapper3.classList.remove('active');
                }
            } else {
                catalogBuldozerList.classList.remove('active');
                catalogImgWrapper3.classList.remove('active');
            }
            if (e.target.dataset.target == 'ekskavator'){
                if (catalogEkskavator.id  == e.target.dataset.target) {
                    catalogEkskavator.classList.add('active');
                    catalogImgWrapper4.classList.add('active');
                    catalogueSelectModal.style.display = 'none';  
                    catalogueSecectText.classList.remove('active')   
                    catalogueSecectText.textContent = e.target.textContent; 
                } else {
                    catalogEkskavator.classList.remove('active');
                    catalogImgWrapper4.classList.remove('active');
                }
            } else {
                catalogEkskavator.classList.remove('active');
                catalogImgWrapper4.classList.remove('active');
            }
            if (e.target.dataset.target == 'combine'){
                if (catalogCombineList.id  == e.target.dataset.target) {
                    catalogCombineList.classList.add('active');
                    catalogImgWrapper5.classList.add('active');
                    catalogueSelectModal.style.display = 'none';  
                    catalogueSecectText.classList.remove('active')  
                    catalogueSecectText.textContent = e.target.textContent;  
                } else {
                    catalogCombineList.classList.remove('active');
                    catalogImgWrapper5.classList.remove('active');
                }
            } else {
                catalogCombineList.classList.remove('active');
                catalogImgWrapper5.classList.remove('active');
            }
            if (e.target.dataset.target == 'katki'){
                if (catalogKatki.id  == e.target.dataset.target) {
                    catalogKatki.classList.add('active');
                    catalogImgWrapper6.classList.add('active');
                    catalogueSelectModal.style.display = 'none';  
                    catalogueSecectText.classList.remove('active')   
                    catalogueSecectText.textContent = e.target.textContent; 
                } else {
                    catalogKatki.classList.remove('active');
                    catalogImgWrapper6.classList.remove('active');
                }
            } else {
                catalogKatki.classList.remove('active');
                catalogImgWrapper6.classList.remove('active');
            }
            if (e.target.dataset.target == 'peregruz'){
                if (catalogPeregruz.id  == e.target.dataset.target) {
                    catalogPeregruz.classList.add('active')
                    catalogImgWrapper2.classList.add('active');
                    catalogueSelectModal.style.display = 'none';  
                    catalogueSecectText.classList.remove('active')   
                    catalogueSecectText.textContent = e.target.textContent; 
                } else {
                    catalogPeregruz.classList.remove('active')
                    catalogImgWrapper2.classList.remove('active');
                }
            } else {
                catalogPeregruz.classList.remove('active');
                catalogImgWrapper2.classList.remove('active');
            }
            if (e.target.dataset.target == 'tools'){
                if (catalogTools.id  == e.target.dataset.target) {
                    catalogTools.classList.add('active');
                    catalogImgWrapper1.classList.add('active');
                    catalogueSelectModal.style.display = 'none';  
                    catalogueSecectText.classList.remove('active')   
                    catalogueSecectText.textContent = e.target.textContent; 
                } else {
                    catalogTools.classList.remove('active')
                    catalogImgWrapper1.classList.remove('active');
                }
            } else {
                catalogTools.classList.remove('active');
                catalogImgWrapper1.classList.remove('active');
            }
        })
    })
})


var swiper = new Swiper(".mySwiper2", {
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: true,
    },
    speed: 800,
    lazy: true,
    parallax: true,
    slidesPerView: '1',
    
});


// $(function() {

//     var scroll = $(document).scrollTop();
//     var navHeight = $('header').outerHeight();

//     $(window).scroll(function() {

//         var scrolled = $(document).scrollTop();

//         if (scroll) {
//             if(scrolled > navHeight) {
//                 $('header').addClass('sticky')
//             } else {
//                 $('header').removeClass('sticky')
//             }
//         } 

//         if (scroll) {
//             if (scrolled > scroll) {
//                 $('header').removeClass('sticky')
//             } else {
//                 $('header').addClass('sticky')
//             }

//         }
//         scroll = $(document).scrollTop();

//     })

// })