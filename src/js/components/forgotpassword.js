export class forgotpassword {
    constructor() {
        this.forgotPasswordForm = null;
        this.emailForgot = null;
        this.forgotBtn = null;
        this.emailLabel = null;
    }
    
    getElements() {
        this.forgotPasswordForm = document.querySelector('[data-form-catcher="forgotPasswordForm"]');
        this.emailForgot = document.querySelector('input[name="forgotpass"]');
        this.forgotBtn = document.getElementById('forgotPassBtn');
        this.emailLabel = document.querySelector('.enter-label');
    }

    bindElements() {
        let _self = this;

        if (_self.forgotPasswordForm != null) {

            _self.forgotPasswordForm.addEventListener('input', function(e) {
                e.preventDefault();
                if(_self.emailForgot.value) {
                    _self.forgotBtn.classList.remove("o-button-disabled");
                } else {
                    _self.forgotBtn.classList.add("o-button-disabled");
                }
            });

            _self.forgotPasswordForm.addEventListener('submit', function (e) {
                e.preventDefault();

                if(_self.emailForgot.value) {
                    _self.forgotPasswordForm.classList.add('is-sent');
                    // _self.emailForgot.disabled = true;
                }

                _self.forgotPasswordForm.reset();
                _self.emailLabel.style.display = "none";
                _self.forgotBtn.classList.add("o-button-disabled");
            });
        }
    }
    
    init(){
        this.getElements();
        this.bindElements();
    }
}