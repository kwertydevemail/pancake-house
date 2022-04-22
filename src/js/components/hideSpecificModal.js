export class HideSpecificModal{
    constructor(){
        this.maxOrderNow;
    }

    getElements(){
        this.maxOrderNow = document.querySelector('.js-maxOrderNow');
    }

    hideIrrelevantModal(){
        if(this.maxOrderNow){
            let _modals = document.querySelectorAll('.modal');
            _modals.forEach((modal) => {
                if(modal.dataset.modalCatcher == 'transaction-type' || modal.dataset.modalCatcher == 'added-to-cart'){
                    modal.classList.add('on-hide');
                }
            })
        }
    }

    init(){
        this.getElements();
        this.hideIrrelevantModal();
    }
}