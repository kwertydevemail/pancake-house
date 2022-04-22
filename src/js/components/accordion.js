
export class Accordion {
    constructor() {
        this.triggerAccordion = null;
    }

    init() {
        this.getElements();
        this.bindElements();
    }

    getElements() {
        this.triggerAccordion = document.querySelector('[data-trigger="checkout-accordion"]');
    }

    bindElements() {
        let _self = this;

        if (_self.triggerAccordion != null) {
            _self.triggerAccordion.addEventListener('click', function () {
                const trigger = this.getAttribute('data-trigger');
                const catchers = this.closest('.c-checkout-summary').querySelectorAll(`[data-catcher="${trigger}"]`);
                this.classList.toggle('active');
                catchers.forEach(elem => {
                    if (elem.classList.contains('active')) {
                        elem.style.maxHeight = null;
                    } else {
                        elem.style.maxHeight = elem.scrollHeight + 48 +"px";
                    }
                    elem.classList.toggle('active');
                });
            });
        }
    }
}