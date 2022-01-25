// STARTING LOADING PAGE

const loadingPageActive = true;

if(loadingPageActive === true) {

    document.body.style.overflow = "hidden";
    const loadingPage = document.createElement("div");
    loadingPage.setAttribute("class", "loading-page");
    loadingPage.id = "loading-page";

    loadingPage.innerHTML = 
    
    `
    
    <div class="spinner-border" role="status"></div>

    <div class="loading-title h5 font-bold">Carregando</div>

    `;

    document.body.prepend(loadingPage);

};

// ENDING LOADING PAGE