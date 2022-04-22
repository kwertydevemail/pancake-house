
export class Modal {
  constructor() {
      this.modal = null;
      this.modalClose = null;
      this.popupModal = null;

      this.maxPromoModal;
      this.maxPromoModalClose;
  }

  getElements(){
    this.maxPromoModal = document.querySelector('.js-promoModal');
    if(this.maxPromoModal){
      this.maxPromoModalClose = this.maxPromoModal.querySelector('.modal-dismiss');
    }
  }

  bindElements() {
      this.closeMaxPopupOutside();
      this.closeMaxPopup();
      this.modal = document.querySelector('.modal.active');
      if (!this.modal) {
          return;
      }
      this.modalClose = this.modal.querySelector('.modal-dismiss');
      this.popupModal = document.querySelector('.c-modal-popup');
      this.popupModalInside = document.querySelector('.modal-container');

      this.onClose();

      this.popupModalInit();

      this.dissolveOnTime(this.modal, 2000);
      this.clickOutSide();
      this.clickInSide();
  }

  showMaxPopup(){
    let maxPromoModal = document.querySelector('.js-promoModal');
    if(maxPromoModal){
      setTimeout(function() {
        maxPromoModal.classList.add('active');
      }, 2000);
    }
  }

  closeMaxPopup(){
    if(this.maxPromoModal){
      this.maxPromoModalClose.addEventListener('click', (event) => {
        event.preventDefault();
        this.maxPromoModal.classList.remove('active');
      })
    }
  }

  closeMaxPopupOutside(){
    if(this.maxPromoModal){
      this.maxPromoModal.addEventListener("click", () => {
        this.maxPromoModal.classList.remove('active');
      });
    }
  }

  clickInSide() {
    this.popupModalInside.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();
      e.stopImmediatePropagation();
      return false;
      });
  }

  clickOutSide() {
    this.popupModal.addEventListener("click", () => {
      this.modal.classList.remove('active');
    });
  }

  dissolveOnTime(modal, seconds) {
    setTimeout(function(){
      modal.classList.remove('active');
    }, seconds);
  }

  onClose() {
    this.modalClose.addEventListener("click", () => {
      this.modal.classList.remove('active');
    });
  }

  popupModalInit() {
    if (!this.popupModal) return;

    this.setPopupModalCookie('popup', true, 30);
  }

  setPopupModalCookie(cName, cValue, expDays) {
    let date = new Date();
    date.setTime(date.getTime() + (expDays * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = cName + "=" + cValue + "; " + expires + "; path=/";
  }

  init() {
    this.getElements();
    this.bindElements();
    this.showMaxPopup();
  }
}