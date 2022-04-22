export class TimePicker{

    constructor(){
        this.maxOrderNow;
        this.hourField;
        this.minField;
        this.meridiemField;
        this.timePickerModal;
        this.timePickerDoneBtn;
        this.timePickerCancelBtn;
        this.mainWrapper;
    }

    getElements(){
        this.maxOrderNow = document.querySelector('.js-maxOrderNow');
        this.hourField = document.querySelector('.o-form-datetime_hour .o-form-group_input');
        this.minField = document.querySelector('.o-form-datetime_min .o-form-group_input');
        this.meridiemField = document.querySelector('.o-form-datetime_meridiem .o-form-group_input');
        this.timePickerModal = document.querySelector('.js-timePicker');
        
        this.timePickerDoneBtn = document.querySelector('.js-timePickerDone');
        this.timePickerCancelBtn = document.querySelector('.js-timePickerCancel');
        this.mainWrapper = document.querySelector('.main-wrapper');
    }
    
    bindElements(){
        let _self = this;

        if(_self.maxOrderNow && window.screen.width < 769){
            _self.hourField.addEventListener('click', () => {
                _self.hourField.nextElementSibling.style.display = 'none';
                _self.timePickerModal.classList.toggle('show-time');
                _self.initializeTimePicker();
                _self.toggleTimePickerOverlay();
            })

            _self.minField.addEventListener('click', () => {
                _self.minField.nextElementSibling.style.display = 'none';
                _self.timePickerModal.classList.toggle('show-time');
                _self.initializeTimePicker();
                _self.toggleTimePickerOverlay();
            })

            _self.meridiemField.addEventListener('click', () => {
                _self.meridiemField.nextElementSibling.style.display = 'none';
                _self.timePickerModal.classList.toggle('show-time');
                _self.initializeTimePicker();
                _self.toggleTimePickerOverlay();
            })

            _self.timePickerDoneBtn.addEventListener('click', () => {
                let activeHour = document.querySelector('.js-swiperHours .swiper-slide.swiper-slide-active');
                let activeMinutes = document.querySelector('.js-swiperMinutes .swiper-slide.swiper-slide-active');
                let activeMeridiem = document.querySelector('.js-swiperMeridiem .swiper-slide.swiper-slide-active');

                _self.hourField.value = parseInt(activeHour.innerHTML);
                _self.minField.value = (parseInt(activeMinutes.innerHTML) == 0) ? '00' : parseInt(activeMinutes.innerHTML);
                _self.meridiemField.value = activeMeridiem.innerHTML;
                
                
                _self.hourField.parentElement.classList.add('has-value');
                _self.minField.parentElement.classList.add('has-value');
                _self.meridiemField.parentElement.classList.add('has-value');

                _self.timePickerModal.classList.remove('show-time');

                document.body.classList.remove('opened-picker');
                _self.mainWrapper.classList.remove('dropdown-picker');

                _self.checkFormValidation();

            })

            _self.timePickerCancelBtn.addEventListener('click', () => {
                _self.timePickerModal.classList.remove('show-time');

                document.body.classList.remove('opened-picker');
                _self.mainWrapper.classList.remove('dropdown-picker');
            })
        }
    }

    toggleTimePickerOverlay(){
        let _self = this;

        document.body.classList.add('opened-picker');
        _self.mainWrapper.classList.add('dropdown-picker');

        document.addEventListener('click', function(event) {
            if(_self.timePickerModal.classList.contains('show-time')){
                let isClickInsideElement = _self.timePickerModal.contains(event.target);
                if (!isClickInsideElement) {
                    document.body.classList.add('opened-picker');
                    _self.mainWrapper.classList.add('dropdown-picker');
                }
            }
        });
    }

    initializeTimePicker(){
        var defaults = {
            pagination: '.swiper-pagination',
            slidesPerView: 5,
            freeMode: true,
            freeModeSticky: true,
            freeModeMomentumRatio: 0.25,
            freeModeVelocityRatio: 0.25,
            freeModeMinimumVelocity: 0.1,
            mousewheelControl: true,
            mousewheelSensitivity: 0.5,
            loop: true,
            loopAdditionalSlides: 5,
            direction: 'vertical',
            slideToClickedSlide: true,
            centeredSlides: true
          };
          
          Swiper('.swiper-container.hours', Object.assign({}, defaults));
          
          Swiper('.swiper-container.minutes', Object.assign({}, defaults, ));
          
          Swiper('.swiper-container.meridiem', Object.assign({}, defaults, {loop: false}));
    }

    checkFormValidation() {
        let _form = document.querySelector('.o-form-timeline');
        const formElem = _form.getAttribute('validation');
        
        let formValid = true;
        if (formElem) {
            const allInputs = _form.querySelectorAll('[name][data-required-validate]');
            allInputs.forEach(e => {
                const inputValue = e.value;
                const validateType = e.getAttribute('data-validate');
                const validateDropdown = e.getAttribute('data-validate-dropdown');
                if (inputValue == '') {
                    formValid = false;
                    return;
                }
                if (validateType == 'number' && inputValue.length < 10) {
                    formValid = false;
                    return;
                }
                if (validateType == 'change' && inputValue < parseInt(document.querySelector('[data-checker="total-price"]').value)) {
                    formValid = false;
                    return;
                }
                if (validateType == 'checkbox' && !e.checked) {
                    formValid = false;
                    return;
                }
                if (validateDropdown != null && !validateDropdown) {
                    formValid = false;
                    return;
                }
            });

            if (!formValid) {
                _form.classList.add('is-invalid');
                _form.querySelector('[type="submit"]').setAttribute('disabled','disabled');
                return;
            }
            _form.classList.remove('is-invalid');
            _form.querySelector('[type="submit"]').disabled = false;
        }
    }

    init(){
        this.getElements();
        this.bindElements();
    }
}