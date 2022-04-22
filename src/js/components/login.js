export class login {
    constructor() {
        this.loginForm = null;
        this.loginBtn = null;
        this.email = null;
        this.password = null;
        this.togglePassword = null;
        this.jsMaxPassword = null;
        this.dummyPassText = null;
    }
    
    getElements() {
        this.loginForm = document.querySelector('[data-form-catcher="loginForm"]');
        this.loginBtn = document.querySelector('#loginBtn');
        this.email = document.querySelector('input[name="emailLogin"]');
        this.password = document.querySelector('input[name="passwordLogin"]');
        this.togglePassword = document.querySelector('#togglePassword');
        this.jsMaxPassword = document.querySelector('.js-max-password');
        this.dummyPasstext = document.querySelector('#dummy');
        this.logout = document.querySelector('#js-logout');
    }

    bindElements() {
        let _self = this;  

        // Click event to redirect to login page
        if(_self.logout) {
            _self.logout.addEventListener('click', function(e) {
                e.preventDefault();
                location.href = "/login.php";
            });
        }

        if (_self.loginForm != null) {

            // condition to set password masked character to asterisk
            if(_self.jsMaxPassword) {
                let inputEl = document.querySelector('.js-max-password');
                const dummyEl = document.querySelector('#dummy');

                inputEl.addEventListener('keyup', () => {
                    let dummyText = Array(inputEl.value.length).fill('*').join('');
                    dummyEl.innerHTML = dummyText;
                });
            }

            _self.togglePassword.addEventListener('click', function(e) {
                e.preventDefault();
                if(_self.password.type === "password") {
                    _self.password.type = "text";
                    _self.togglePassword.className = "ic-password-show";
                    _self.dummyPasstext.classList.remove('show');
                    _self.dummyPasstext.classList.add('hide');
                } else {
                    _self.password.type = "password";
                    _self.togglePassword.className = "ic-password-hide";
                    _self.dummyPasstext.classList.add('show');
                    _self.dummyPasstext.classList.remove('hide');
                }
            });

            _self.loginForm.addEventListener('input', function(e) {
                e.preventDefault();
                if(_self.email.value && _self.password.value) {
                    _self.loginBtn.classList.remove("o-button-disabled");
                } else {
                    _self.loginBtn.classList.add("o-button-disabled");
                }
            });

            _self.loginForm.addEventListener('submit', function (e) {
                e.preventDefault();
                // console.log(_self.password.value);
                
                if (_self.password.value !== "password") {
                    _self.email.parentNode.classList.add('is-invalid');
                    _self.email.classList.add('has-error');
                    _self.password.parentNode.classList.add('is-invalid');
                    _self.password.classList.add('has-error');
                    _self.loginBtn.classList.add("o-button-disabled");
                } else {
                    _self.email.parentNode.classList.remove('is-invalid');
                    _self.email.classList.remove('has-error');
                    _self.password.parentNode.classList.remove('is-invalid');
                    _self.password.classList.remove('has-error');
                    _self.loginBtn.classList.remove("o-button-disabled");
                }
            });
                
            // _self.loginForm.addEventListener('submit', function (e) {
            //     e.preventDefault();
            //     const valid = true;
            //     const data = {
            //         code: this.querySelector('[name="password"]'),
            //     }
            //     for (const item in data) {
            //         // for static validation only
            //         if (data[item].value != 'password') {
            //             data[item].parentNode.classList.add('is-invalid');
            //             data[item].classList.add('has-error');
            //             _self.loginBtn.classList.add("o-button-disabled");
            //         } else {
            //             data[item].parentNode.classList.remove('is-invalid');
            //             data[item].classList.remove('has-error');
            //             _self.loginBtn.classList.remove("o-button-disabled");
            //         }
            //     }
            // });
        }
    }
    
    init(){
        this.getElements();
        this.bindElements();
    }
}