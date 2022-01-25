class Mail {
    constructor(options) {
        this._form = document.querySelector(options.formEl);
        this._postLink = options.postLink;
        this._sendTo = options.sendTo;
        this._inputEmpty = options.inputEmpty;
        if(options.active === true) this.init();
    };

    init() {

       this.form();

    };

    form() {

        this._form.addEventListener("submit", e=> {

            e.preventDefault();

            if(this._inputEmpty.active === true) {

                if(this.checkFields(e.target)) {

                    const values = this.sendForm(e.target);

                    fetch(this._postLink, {
                        method: "POST",
                        body: values,
                    }).then(data => {

                        location.href = data.url;

                    }).catch(err => {

                        location.href = err.url;

                    });

                };

            };

        });

        this.checkStatus();

    };

    sendForm(formEl) {

        const formData = new FormData(formEl);
        const formValues = new URLSearchParams();

        for (var pair of formData.entries()) {
            formValues.append([pair[0]], [pair[1]]); 
        };
        
        return formValues;

    };

    checkStatus() {

        const contactFormStatus = location.search.substr(location.search.lastIndexOf("=")+1);

        if(contactFormStatus.length > 0) {

            const alert = document.createElement("div");
            alert.setAttribute("class", "alert m-auto mt-3 mb-3");
        
            switch(contactFormStatus) {
                case 'success':
                    alert.classList.add("alert-success");
                    alert.innerHTML = "<p class='mb-0'>Your message has been sent successfully!</p>";
                    break;
                case 'danger':
                    alert.classList.add("alert-danger");
                    alert.innerHTML = "<p class='mb-0'>There was an error trying to send your message.</p>";
                    break;
                case '301':
                    alert.classList.add("alert-danger");
                    alert.innerHTML = "<p class='mb-0'>301 Moved Permanently.</p>";
                    break;
                case "field-fill-error":
                    alert.classList.add("alert-danger");
                    alert.innerHTML = "<p class='mb-0'>You must fill in the field first name, last name, email, subject and message.</p>";
                    break;
            };
        
            if(this._form) {
        
                this._form.parentElement.querySelector("p").appendChild(alert);
                alert.scrollIntoView({block: "start", behavior: "smooth"});
        
            };
        
        };

    };

    checkFields(form) {

        const checkFields = [];

        this._inputEmpty.inputName.map(input => {

            const inputEl = form.querySelector(`[id="${input}"]`);

            if(inputEl.value.length <= 0) {

                if(!inputEl.classList.contains(this._inputEmpty.classInputEmpty)) {

                    inputEl.classList.add(this._inputEmpty.classInputEmpty);

                };

                checkFields.push(false);

            } else {

                if(inputEl.classList.contains(this._inputEmpty.classInputEmpty)) {

                    inputEl.classList.remove(this._inputEmpty.classInputEmpty);

                };

                checkFields.push(true);

            };

        });

        if(checkFields.includes(false)) {

            return false;

        } else {

            return true;

        };

    };

}