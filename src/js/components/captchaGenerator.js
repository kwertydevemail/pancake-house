
export class CaptchaGenerator {
    constructor() {
        this.catchCaptchaGenerator = null;
        this.catchCaptchatrigger = null;
    }

    init() {
        this.getElements();
        this.bindElements();
    }

    getElements() {
        this.catchCaptchaGenerator = document.querySelector('[data-catcher="captcha-generator"]');
        this.catchCaptchatrigger = document.querySelector('[data-trigger="captcha-generator"]');
    }

    bindElements() {
        let _self = this;
        _self.regenerateCaptcha();
    }
    
    regenerateCaptcha() {
        let _self = this;
        if (_self.catchCaptchaGenerator != null) {
            _self.catchCaptchaGenerator.value = _self.makeCaptcha(7);
        }

        if (_self.catchCaptchatrigger != null) {
            _self.catchCaptchatrigger.addEventListener('click', function (e) {
                e.preventDefault();
                _self.catchCaptchaGenerator.value = _self.makeCaptcha(7);
            });
        }
    }
    makeCaptcha(length) {
        var result = [];
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        var charactersLength = characters.length;
        for ( var i = 0; i < length; i++ ) {
            result.push(characters.charAt(Math.floor(Math.random() * 
            charactersLength)));
        }
       return result.join('');
    }
    
}