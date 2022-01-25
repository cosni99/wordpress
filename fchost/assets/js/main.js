/*!
 * Template Name: 
 * Description: 
 * Author: crowbarcode
 * Version	 :
**/

// STARTING CONTACT FORM

const currentPage = location.href.substring(location.href.lastIndexOf("/")+1);
const formEl = document.querySelector("#form-contact");

if(currentPage.includes("contact-us")) {

const mail = new Mail({
    active: true,
    formEl: "#form-contact",
    postLink: "includes/mail.php",
    inputEmpty: {
        active: true,
        inputName: ["firstName", "lastName", "email", "subject", "message"],
        classInputEmpty: "form-control-invalid",
    },
});

};

// ENDING CONTACT FORM



// STARTING OVERFLOW

const overlay = document.createElement("div");
overlay.classList.add("overlay");

// ENDING OVERFLOW

// STARTING MENU MOBILE

const menuMobile01 = document.querySelector("#open-menu-mobile-01");
const menuMobile02 = document.querySelector("#open-menu-mobile-02");

menuMobile01.addEventListener("click", e=> {

    showMenuMobile({
       menu: ".menu-mobile-01",
       classActive: ".menu-mobile-active",
       classAnimation: ".menu-mobile-active-animation",
       animationTimer: 70, 
    });

});

menuMobile02.addEventListener("click", e=> {

    showMenuMobile({
       menu: ".menu-mobile-02",
       classActive: ".menu-mobile-active",
       classAnimation: ".menu-mobile-active-animation",
       animationTimer: 70, 
    });

});

function showMenuMobile(options) {

    const menu = document.querySelector(options.menu);
    const classActive = options.classActive.replace(/[.,#]/, "");
    const classAnimation = options.classAnimation.replace(/[.,#]/, "");

    menu.classList.toggle(classActive);
    document.body.style.overflow = "hidden";
    document.body.prepend(overlay)

    if(options.animationTimer && options.animationTimer > 1) {

        setTimeout(() => {
            
            menu.classList.toggle(classAnimation);           


        }, options.animationTimer);
        

    } else {

        menu.classList.toggle(classAnimation)

    };

    menu.querySelector("button").addEventListener("click", e=> {

        menu.classList.remove(classAnimation); 

        setTimeout(() => {
            
            menu.classList.remove(classActive);
            
            document.body.removeAttribute("style");

            if(overlay) overlay.remove();


        }, options.animationTimer);

    });

    window.addEventListener("resize", e=> {

        menu.classList.remove(classAnimation); 

        setTimeout(() => {
            
            menu.classList.remove(classActive);
            
            document.body.removeAttribute("style");

            if(overlay) overlay.remove();


        }, options.animationTimer);
    
    });

};

// ENDING MENU MOBILE

// STARTING ANIMATE SCROLL PAGE

AOS.init();

// ENDING ANIMATE SCROLL PAGE


// STARTING DOMAIN EXTENSION

const domainTLDParent = document.querySelector(".domain-tld");
const domainInput = document.querySelector("#domain-input")

if(domainTLDParent) {

    domainTLDParent.querySelectorAll(".btn-tld").forEach(btn => {

        btn.addEventListener("click", e=> {

            const tld = btn.dataset.tld;

            if(domainInput) {

                domainInput.value = "";
                domainInput.value = tld;
                domainInput.setSelectionRange(0, 0);
                domainInput.focus();

            };

            document.body.scrollTop = document.documentElement.scrollTop = 0;

        });

    });

};

// ENDING DOMAIN EXTENSION

// STARTING BUTTON SCROLL TOP

const buttonScrollTop = document.createElement("button");
buttonScrollTop.innerHTML = `<i class="cci-arrow-up-02"></i>`;
buttonScrollTop.id = "scroll-top";
buttonScrollTop.setAttribute("aria-label", "UP TO TOP")
buttonScrollTop.setAttribute("class", "scroll-top btn btn-primary");

window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 20 ||
    document.documentElement.scrollTop > 20
  ) {
    
    document.body.prepend(buttonScrollTop);

  } else {
    
    if(buttonScrollTop) {

        buttonScrollTop.remove();

    };

  }
}

buttonScrollTop.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

// ENDING BUTTON SCROLL TOP



