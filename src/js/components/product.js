import { format, differenceInHours, differenceInMinutes } from 'date-fns';
import datepicker from 'js-datepicker';
import { ModalSpy } from '../components/modalSpy';
// import $ from 'jquery';
import $ from '../../lib-js/jquery-3.6.0';
import Swal from 'sweetalert2'
import { el } from 'date-fns/locale';
import parse from 'date-fns/parse';
export class product {
    constructor() {
        this.setProductLayout = [];
        this.getProductLayout = [];
        this.setTabs = [];
        this.getTab = [];
        this.selectValue = [];
        this.triggerOperator = [];
        this.orderSummary = null;
        this.orderData = {};
        this.orderCount = 1;
        this.grandTotal = 0;
        this.magnifierThumb = null;
        this.triggerPanel = [];
        this.triggerListen = [];
        this.triggerBackPromos = [];
        this.formTrigger = null;
        this.modalDismissTrigger = [];
        this.datePickers = [];
        this.datePickersInitiated = [];
        this.orderDeliveryForm = null;
        this.promoCodeForm = null;
        this.placeholderReplace = null;
        this.addedToCartModal = null;

        this.searchStore = null;
        this.currentPage = 1;
        this.numberPerPage = 10;
        this.numberOfPages = 0;
        this.triggerModal = [];
        this.triggerPassword = [];
        this.registrationForm = null;
        this.orderPickupForm = null;
        this.triggerRemoveOrder = [];
        this.newAddress = null;
        this.quantityInputField = null;
        this.reviewOrderPage = null;
        this.specFieldValidation = null;
        this.specFieldFilter = null;
        this.orderSummaryForm = null;
        this.orderSummaryForm = null;
        this.checkOrderDetails = [];
        this.loadCountry = null;
        this.formsWithValidation = null;
        this.validateCheckbox = [];
        this.currentCountry = '';
        this.egift = null;
        this.egiftredeem = null;
        this.egifterror = null;
        this.egiftitems = null;
        this.totalegift = null;
        this.totalpegift = null;
        this.deliveryCheckoutForm = null;
        this.siteUrl = window.location.origin;
        this.initMap = [];
        this.map = null;
        this.maxOrderNow;
        this.maxRmBtn;
        this.invalidDeliveryTimeBtn;
        this.referencenumber = null;
        this.referencecheck = null;
        this.referenceerror = null;
        this.myAccountBg = null;
        this.dummyElPass1 = null;
        this.dummyElPass2 = null;
        this.togglePassword1 = null;
        this.togglePassword2 = null;
        this.redirectToProfile = null;
        this.editProfile = null;
        this.searchProduct = null;
    }
    
    getElements() {
        this.egift = document.querySelector('.js-egift');
        this.egiftredeem = document.querySelector('.js-egiftredeem');
        this.egifterror = document.querySelector('.js-egifterror');

        this.referencenumber = document.querySelector('.js-referenceNo');
        this.referencecheck = document.querySelector('.js-referenceCheck');
        this.referenceerror = document.querySelector('.js-referenceerror');

        this.egiftitems = document.querySelector('.js-egiftitems');
        this.totalegift = document.querySelector('.js-totalegift');
        this.totalpegift = document.querySelector('.js-totalpegift');
        this.setProductLayout = document.querySelectorAll('[data-trigger-layout]');
        this.getProductLayout = document.querySelectorAll('[data-target-layout]');

        this.setTabs = document.querySelectorAll('[data-trigger-tab]');
        this.getTab = document.querySelectorAll('[data-target-tab]');

        this.selectValue = document.querySelectorAll('[data-select-value]');
        this.triggerOperator = document.querySelectorAll('[ data-trigger-operator]');
        this.orderSummary = document.querySelector('[ data-summary="order"]');
        this.magnifierThumb = document.getElementById('thumb');
        this.triggerPanel = document.querySelectorAll('[data-panel-value]');
        this.triggerListen = document.querySelectorAll('[data-listen]');
        this.triggerBackPromos = document.querySelectorAll('[data-tigger-back]');
        this.formTriggerStandard = document.querySelector('[data-form="standard"]');
        this.modalDismissTrigger = document.querySelectorAll('[data-dismiss]');
        this.datePickers = document.querySelectorAll('.js-datepicker');
        this.orderDeliveryForm = document.querySelector('[data-form-catcher="orderDeliveryForm"]');
        this.promoCodeForm = document.querySelector('[data-form-catcher="promoCodeForm"]');
        this.placeholderReplace = document.querySelectorAll('[placeholder-mb]');
        this.addedToCartModal = document.querySelector('[data-form-catcher="addedToCartModal"]');
        this.searchStore = document.querySelector('[data-search="store"]');
        this.triggerModal = document.querySelectorAll('[data-trigger-modal]');
        this.triggerPassword = document.querySelectorAll('[data-trigger-password]');
        this.registrationForm = document.querySelector('[data-form-catcher="registration-form"]');
        this.orderPickupForm = document.querySelector('[data-form-catcher="orderPickupForm"]');
        this.triggerRemoveOrder = document.querySelectorAll('[data-trigger="remove-order"]');
        this.newAddress = document.querySelector('[name="address"]');
        this.quantityInputField = document.querySelectorAll('input[name="orderCount"]');
        this.reviewOrderPage = document.querySelector('.js-review-order');
        this.specFieldValidation = document.querySelectorAll('[data-field-validate]');
        this.specFieldFilter = document.querySelectorAll('[data-field-filter]');
        this.orderSummaryForm =  document.querySelector('[data-order-summary="order"]');
        this.loadCountry = document.querySelector('[data-loader-country]');
        this.formsWithValidation = document.querySelectorAll('[validation="true"]');
        this.validateCheckbox = document.querySelectorAll('[data-validate="checkbox"]');
        this.deliveryCheckoutForm = document.querySelector('[data-form-catcher="deliveryCheckoutForm"]');
        this.initMap = document.querySelectorAll('[data-map="initialize"]');
        this.maxOrderNow = document.querySelector('.js-maxOrderNow');
        this.maxRmBtn = document.querySelector('.js-maxRmBtn');
        this.invalidDeliveryTimeBtn = document.querySelector('.js-invalidTimeBtn');
        this.myAccountBg = document.querySelector('.js-account-bg');
        this.dummyElPass1 = document.querySelector('#dummyPass1');
        this.dummyElPass2 = document.querySelector('#dummyPass2');
        this.togglePassword1 = document.querySelector('.togglePass1');
        this.togglePassword2 = document.querySelector('.togglePass2');
        this.redirectToProfile = document.querySelector('.js-redirect-profile');
        this.editProfile = document.querySelector('.js-edit-profile');
        this.searchProduct = document.querySelector('[data-search="product"]');
    }

    bindElements() {
        let _self = this;
        _self.activatePaginate();
        _self.activateProductPaginate();
        if (window.screen.width < 769) {
            _self.replacePlaceholderPerScreen();
        }
        if(_self.egift != null){
            let currentDiscount = 0;
            _self.egift.addEventListener('keyup', function(){
                if(this.value.length >= 1){
                    this.parentNode.parentNode.classList.add('active');
                }else{
                    this.classList.remove('error');
                }
            });
            _self.egiftredeem.addEventListener('click', function(e){
                e.preventDefault();
                if(_self.egift.value == 'REWARD100OFFFF'){
                    _self.egifterror.classList.add('error');
                    _self.egift.classList.add('error');
                }else{
                    if(_self.egift.parentNode.parentNode.classList.contains('active')){
                        _self.egifterror.classList.remove('error');
                        _self.egift.classList.remove('error');
                        let egiftitem = '';
                        let price = 100.00;

                        if(_self.egift.value == 'MAXSPROMO150OFF'){
                            price = 150.00;
                        }

                        let removeBtn = ''

                        if(_self.maxRmBtn) {
                            removeBtn = '<h5><span><img class="js-removeegift" src="dist/images/ic-trash-grey.svg" alt=""></span>' +_self.egift.value+ '</h5>';
                        } else {
                            removeBtn = '<h5>'+_self.egift.value+' <span><img class="js-removeegift" src="dist/images/icon-trash.svg" alt=""><span class="js-removeegift">REMOVE</span></span></h5>'; 
                        }

                        egiftitem += '<div class="order-egift__item">';
                        egiftitem += '<div class="order-egift__item-left">';
                        egiftitem += removeBtn;
                        egiftitem += '</div>';
                        egiftitem += '<div class="order-egift__item-right">';
                        egiftitem += '<p class="js-itemegift">- ₱ '+price+ '.00'+'</p>';
                        egiftitem += '</div>';
                        egiftitem += '</div>';

                        _self.egift.value = '';
                        _self.egift.parentNode.parentNode.classList.remove('active');

                        currentDiscount = currentDiscount + price;
                        _self.egiftitems.innerHTML = _self.egiftitems.innerHTML + egiftitem;

                        _self.totalegift.classList.add('active');
                        _self.totalpegift.innerHTML = '- ₱ ' + currentDiscount + '.00';
                    }
                }
            });
            _self.egiftitems.addEventListener('click',function(e){
                e.preventDefault();
                if(e.target.classList.contains('js-removeegift')){
                    let price = 100.00;
                    e.target.parentNode.parentNode.parentNode.parentNode.remove();
                    currentDiscount = currentDiscount - price;
                    _self.totalpegift.innerHTML = '- P ' + currentDiscount;
                }
            });
        }

        if(_self.referencenumber != null){
            _self.referencenumber.addEventListener('keyup', function(){
                if(this.value.length >= 1){
                    this.parentNode.parentNode.classList.add('active');
                }else{
                    this.classList.remove('error');
                }
            });
            _self.referencecheck.addEventListener('click', function(e){
                e.preventDefault();
                if(_self.referencenumber.value == 'MAXS6543370'){
                    _self.referenceerror.classList.add('error');
                    _self.referencenumber.classList.add('error');
                }else{
                    if(_self.referencenumber.parentNode.parentNode.classList.contains('active')){
                        _self.referenceerror.classList.remove('error');
                        _self.referencenumber.classList.remove('error');
                        _self.referencenumber.value = '';
                        _self.referencenumber.parentNode.parentNode.classList.remove('active');
                    }
                }
            });
        }

        // sample trigger for dynamic modal, set of data parameters needed.
        // _self.toggleModal(true, '', {
        //     title: 'title',
        //     description: 'description',
        //     proceedBtn: 'ok',
        //     proceedBtnLinkText: 'proceed',
        //     proceedBtnLink: 'https://dev.yellowcab.make.technology/',
        //     cancelBtn: 'cancel'
        // });

        // sample trigger swal loader
        // Swal.fire({
        //     title: 'Please wait...',
        //     timer: 100000,
        //     didOpen: () => {
        //       Swal.showLoading()
        //       timerInterval = setInterval(() => {
        //         const content = Swal.getHtmlContainer()
        //         if (content) {
        //           const b = content.querySelector('b')
        //           if (b) {
        //             b.textContent = Swal.getTimerLeft()
        //           }
        //         }
        //       }, 100)
        //     },
        //     willClose: () => {
        //       clearInterval(timerInterval)
        //     }
        // });

        window.addEventListener('load', function() {
            let OSName = '';
            if (navigator.appVersion.indexOf("Win")!=-1) OSName="os-win";
            if (navigator.appVersion.indexOf("Mac")!=-1) OSName="os-mac";
            if (navigator.appVersion.indexOf("X11")!=-1) OSName="os-unix";
            if (navigator.appVersion.indexOf("Linux")!=-1) OSName="os-lin";
            document.body.classList.add(OSName);
            _self.activateCurrentTimeValidation();
            _self.populateFieldSummary();

            if (_self.formsWithValidation.length) {
                _self.formsWithValidation.forEach( formElem => {
                    _self.checkFormValidation(formElem);
                });
            }
            
        });

        if(_self.redirectToProfile) {
            _self.redirectToProfile.addEventListener('click', function(e) {
                e.preventDefault();
                _self.editProfile.classList.toggle('active-profile');
            });
        }

        if(document.querySelector('.js-changePass')){
            document.querySelector('.js-changePass').addEventListener('click', function(e) {
                e.preventDefault();
                _self.editProfile.classList.toggle('active-profile');
            });
        }

        window.addEventListener('click', function () {
            _self.triggerListen.forEach(elem => {
                if (elem.parentNode.classList.contains('active')) {
                    _self.toggleDropDown(elem, false);
                    _self.toggleBodyFixed(false);
                }
            });
        });

        if (_self.setProductLayout.length) {
            _self.setProductLayout.forEach(element => {
                element.addEventListener('click', function () {
                    const productLayoyut = this.getAttribute('data-trigger-layout');

                    if(productLayoyut !== 'edit-profile') {
                        if(_self.editProfile) {
                            _self.editProfile.classList.remove('active-profile');
                        }
                    }

                    _self.getProductLayout.forEach(layoutElement => {
                        layoutElement.classList.remove('active');
                    });
                    document.querySelector(`[data-target-layout=${productLayoyut}]`).classList.add('active');
                    _self.setProductLayout.forEach(navElement => {
                        navElement.classList.remove('active');
                    });
                    this.classList.add('active');
                    if(document.querySelector('.js-max')){
                        var newurl = window.location.protocol + "//" + window.location.host + '?s='+productLayoyut;
                        window.history.pushState({path:newurl},'',newurl);
                    }
                });
            });
        }

        // function to set active on beadcrumbs
        if (_self.setTabs.length) {
            _self.setTabs.forEach(element => {
                element.addEventListener('click', function () {
                    const tab = this.getAttribute('data-trigger-tab');
                    _self.getTab.forEach(tabElement => {
                        tabElement.classList.remove('active');
                    });
                    document.querySelector(`[data-target-tab=${tab}]`).classList.add('active');
                    if(tab === 'my-orders') {
                        _self.myAccountBg.classList.remove('default-bg');
                        _self.myAccountBg.classList.add('my-order-bg');
                    }else {
                        _self.myAccountBg.classList.remove('my-order-bg');
                        _self.myAccountBg.classList.add('default-bg');
                    }
                    _self.setTabs.forEach(navElement => {
                        navElement.classList.remove('active');
                    });
                    this.classList.add('active');
                });
            });
        }
    
        if (_self.triggerListen.length) {
            _self.triggerListen.forEach(elem => {
                elem.addEventListener('click', function (e) {
                    e.stopPropagation();
                    const inSelf = this;
                    if (window.screen.width < 769) {
                        _self.listenCloseDropdown(elem);
                        _self.doScrolling(_self.getElementY(this), 100, this);
                    } else {
                        if (this.parentNode.classList.contains('active')) {
                            _self.toggleDropDown(this, false);
                            return;
                        } else {
                            _self.listenCloseDropdown(elem);
                        }
                        _self.toggleDropDown(this, true);
                    }
                    _self.datePickersInitiated.forEach(elem => {
                        if (inSelf != elem.parent.querySelector('input')) {
                            elem.hide();
                        }
                    });
                });
                elem.addEventListener('input', function (e) {
                    _self.checkFormValidation(elem);
                    if (e.target.hasAttribute('data-address-filter')) {
                        const value = e.target.value;
                        if (value != '') {
                            document.querySelector('[data-address-catcher="default"]').classList.remove('show');
                            document.querySelector('[data-address-catcher="search"]').classList.add('show');
                        } else {
                            document.querySelector('[data-address-catcher="default"]').classList.add('show');
                            document.querySelector('[data-address-catcher="search"]').classList.remove('show');
                        }
                    }
                });
            });
        }

        if (_self.selectValue.length) {
            _self.selectValue.forEach(elem => {
                elem.addEventListener('click', function() {
                    const selectValue = this.getAttribute('data-select-value');
                    const priceValue = this.getAttribute('data-price-value');
                    let inputElement = this.parentNode.previousElementSibling;
                    if (this.parentNode.hasAttribute('data-address-catcher')) {
                        inputElement = this.closest('.o-form-dropdown_input').querySelector('[name]');
                    }
                    if (this.getAttribute('disabled')) {
                        return;
                    }
                    inputElement.value = selectValue;
                    const inputName = inputElement.getAttribute('name');
                    _self.checkFormValidation(elem);
                    const selectedItem = this.parentNode.querySelector('.list-selected');
                    if (selectedItem != null) {
                        selectedItem.classList.remove('list-selected');
                        if(_self.maxOrderNow){
                            inputElement.parentElement.classList.remove('has-value');
                        }
                    }
                    this.classList.add('list-selected');
                    //to add filled state on dropdown
                    if(_self.maxOrderNow){
                        inputElement.parentElement.classList.add('has-value');
                    }
                    if (_self.orderData[inputName] != undefined) {
                        if (priceValue == -1) {
                            _self.orderData[inputName].value = '';
                            _self.orderData[inputName].price = 0;
                            inputElement.value = '';
                            _self.checkOrderDetails2();
                            return;
                        }
                        _self.orderData[inputName].value = selectValue;
                        _self.orderData[inputName].price = priceValue;
                        _self.checkOrderDetails2();
                    }

                    const parentElem = this.closest('.o-form-dropdown_input');
                    // for sort function
                    const sortElem = parentElem.querySelector('[name="sort"]');
                    if (sortElem != null) {
                        _self.filterStoreList();
                    }

                    // for populate address
                    const addressId = this.getAttribute('data-populate-address');
                    if (addressId) {
                        _self.populateAddress(addressId);
                    }

                    // for store branch placeholder
                    const selectMain = this.getAttribute('data-select-main');
                    if (selectMain) {
                        this.closest('.o-form-dropdown_input').querySelector('[data-catcher-field="store-placeholder"]').value = selectMain;
                    }
                    
                });
            });
        }

        if (_self.triggerOperator.length) {
            _self.triggerOperator.forEach(elem => {
                elem.addEventListener('click', function () {
                    const operatorValue = this.getAttribute('data-trigger-operator');
                    let inputElem = this.parentNode.querySelector('input');
                    let value = inputElem.value;
                    let formGroup = this.closest('.o-form-group');
                    if (formGroup) {
                        this.closest('.o-form-group').classList.add('active');
                    }
                    if (Number(value)) {
                        switch (operatorValue) {
                            case 'add':
                                value++;
                                break;
                            case 'sub':
                                value--;
                                break;
                        }
                    }
                    if (value > 0 && Number(value)) {
                        inputElem.value = value;
                    } else {
                        inputElem.value = 1;
                    }
                    _self.orderCount = inputElem.value;
                    _self.checkOrderDetails2();
                    _self.computeTotalPrice();
                });
            });
        }

        if(_self.reviewOrderPage != null) {
            if(_self.quantityInputField.length) {
                _self.quantityInputField.forEach(element => {
                    element.addEventListener('input', _self.computeTotalPrice);
                });
            } 
        }

        if (_self.magnifierThumb != null) {
            let evt = new Event(),
            m = new Magnifier(evt);
            m.attach({
                thumb: '#thumb',
                mode: 'inside',
                zoom: 3,
                zoomable: true,
            });
        }

        if (_self.triggerPanel.length) {
            let valueForMulti = [];
            _self.triggerPanel.forEach(elem => {
                elem.addEventListener('click', function () {
                    const panelValue = this.getAttribute('data-panel-value');
                    const panelPrice = this.getAttribute('data-panel-price');
                    const initFilterValue = this.getAttribute('data-init-filter');
                    let inputElement = null;
                    if (this.closest('.o-form-group-inner') != null) {
                        inputElement = this.closest('.o-form-group-inner').querySelector('input');
                    }
                    if (inputElement == null) {
                        inputElement = this.closest('.o-form-group').querySelector('input');
                    }
                    const panelType = inputElement.getAttribute('data-panel-type');
                    if (panelType == null && panelType != 'multiple') {
                        inputElement.value = panelValue;
                        const inputName = inputElement.getAttribute('name');
                        const panelTriggers = document.querySelectorAll(`[data-trigger-panel="${inputName}"]`);
                        if (panelTriggers.length) {
                            panelTriggers.forEach(inELem => {
                                if (inELem.classList.contains('active')) {
                                    if (_self.orderData[inputName] != undefined) {
                                        _self.orderData[inputName].value = ''
                                        _self.orderData[inputName].price = 0;
                                    }
                                    inELem.classList.remove('active');
                                    return;
                                }
                            });
                        }
                        if (_self.orderData[inputName] != undefined) {
                            _self.orderData[inputName].value = panelValue;
                            _self.orderData[inputName].price = panelPrice;
                            _self.checkOrderDetails2();
                        }
                        this.classList.add('active');
                    } else {
                        if (!valueForMulti.includes(panelValue)) {
                            valueForMulti.push(panelValue);
                        } else {
                            valueForMulti = valueForMulti.filter(data => {
                                return data != panelValue;
                            });
                        }
                        inputElement.value = JSON.stringify(valueForMulti);
                        if (this.classList.contains('active')) {
                            this.classList.remove('active');
                        } else {
                            this.classList.add('active');
                        }
                    }

                    if (this.hasAttribute('data-custom-filter') && this.closest('form').getAttribute('data-form-catcher') == 'orderDeliveryForm') {
                        _self.toggleSelectedDateForDelivery(this);
                    }

                    //for payment delivery panel
                    if (this.getAttribute('data-trigger-panel') == 'payment') {
                        _self.togglePaymentSelection(panelValue);
                    }

                    if (initFilterValue != null) {
                        _self.setDropdownFilter(this, initFilterValue);
                    }
                    
                    _self.checkFormValidation(elem);
                });
            });
        }

        if (_self.triggerBackPromos != null) {
            _self.triggerBackPromos.forEach(elem => {
                elem.addEventListener('click', function () {
                    window.history.back();
                    // THIS IS FOR PROMO UI
                    // const catcher = this.getAttribute('data-tigger-back');
                    // const figureTrigger = this.getAttribute('data-back');
                    // document.querySelector(`[data-catcher="${catcher}"]`).classList.add('active');
                    // if (catcher == 'detail-layout') {
                    //     if (figureTrigger != null) {
                    //         this.parentNode.parentNode.parentNode.classList.remove('active');
                    //         return;
                    //     }
                    //     this.parentNode.parentNode.parentNode.parentNode.parentNode.classList.remove('active');
                    //     return;
                    // }
                    // this.parentNode.classList.remove('active');
                });
            });
        }

        if (_self.formTriggerStandard != null) {
            _self.formTriggerStandard.addEventListener('submit', function (e) {
                e.preventDefault();
                const checkWithAddress = document.querySelector('.with-address');
                if (checkWithAddress == null && document.querySelector('body').classList.includes('theme-yc')){
                    _self.toggleModal(true, 'transaction-type');
                }
            });
        }

        // if (_self.modalDismissTrigger.length) {
        //     _self.modalDismissTrigger.forEach(elem => {
        //         elem.addEventListener('click', function () {
        //             const modalTarget = this.closest('.modal').getAttribute('data-modal-catcher');
        //             _self.resetModalCheckboxes();
        //             _self.toggleModal(false, modalTarget);
        //         });
        //     })
        // }

        if (_self.modalDismissTrigger.length) {
            _self.modalDismissTrigger.forEach(elem => {
                elem.addEventListener('click', function () {
                    let dismissTarget = this.getAttribute('data-dismiss');
                    let modalTarget = this.closest('.modal').getAttribute('data-modal-catcher');
                    if (dismissTarget != 'modal') {
                        modalTarget = dismissTarget;
                    }
                    _self.toggleModal(false, modalTarget);
                });
            })
        }

        if (this.datePickers != null && this.datePickers.length) {
            const datePickerOption =  {
                formatter: (input, date, instance) => {
                    const value = format(date, 'iiii, MMMM d, yyyy');
                    input.value = value // => '1/1/2099';
                },
                customDays: ['SU','MO','TU','WE','TH','FR','SA'],
                minDate: new Date(),
                onShow: instance => {
                    _self.triggerListen.forEach(elem => {
                        if (elem.parentNode.classList.contains('active')) {
                            _self.toggleDropDown(elem, false);
                            _self.toggleBodyFixed(false);
                        }
                    });
                    if(_self.maxOrderNow){
                        document.querySelector('.o-form-datetime_date').classList.add('opened');
                    }
                    if (window.screen.width < 769) {
                        _self.toggleBodyFixed(true);
                        setTimeout(() => {
                            instance.calendarContainer.classList.add('qs-show');
                            instance.calendarContainer.classList.remove('qs-hidden');
                            if(_self.maxOrderNow){
                                document.querySelector('.main-wrapper').classList.add('dropdown-open');
                            }
                        }, 10);
                    }
                },
                onHide: instance => {
                    _self.checkFormValidation(instance.parent);
                    document.querySelector('.o-form-datetime_date').classList.remove('opened');
                    if (window.screen.width < 769) {
                        _self.toggleBodyFixed(false);
                        instance.calendarContainer.classList.add('qs-hidden');
                        instance.calendarContainer.classList.remove('qs-show');

                        if(_self.maxOrderNow){
                            document.querySelector('.main-wrapper').classList.remove('dropdown-open');
                        }
                    }
                },
                onSelect: (instance, date) => {
                    if(_self.maxOrderNow){
                        instance.parent.classList.add('has-value');

                        if(date){
                            document.querySelectorAll('.qs-square').forEach((number) => {
                                if(number.classList.contains('qs-current')){
                                    number.classList.remove('qs-current');
                                }
                            })
                        }else{
                            let currentDate = instance.startDate.toString().slice(9,10);
                            pickers.setDate(new Date(instance.currentYear, instance.currentMonth, currentDate), true)
                        }
                    }


                },
            }
            const pickers = datepicker('.js-datepicker', datePickerOption);
            _self.datePickersInitiated.push(pickers);
        }

        if (_self.orderDeliveryForm != null) {
            _self.orderDeliveryForm.addEventListener('submit', function (e) {
                e.preventDefault();

                const validDate = _self.validateStoreDateTime(this);
                let invalidModal = validDate.modal == 'invalid-delivery-checkout' ? 'invalid-delivery-checkout' : 'invalid-delivery-time';
                if (validDate.valid) {
                    if(!_self.maxOrderNow){
                        _self.toggleModal(true, 'promo-code');
                    }else{
                        _self.toggleModal(true, 'other-brands');
                    }
                } else {
                    if(_self.maxOrderNow){
                        _self.toggleModal(true, invalidModal);
                    }else{
                        _self.toggleModal(true, 'invalid-delivery-time');
                    }
                }
            });
        }

        // for static validation only
        if(_self.newAddress != null) {
            _self.newAddress.addEventListener('change', function() {
                if(this.value !=  "22 Ana Maria, San Antonio, Quezon City, Second District NCR, National Capital Region, PHL") {
                    _self.toggleModal(true, 'delivery-transaction-alert');
                } 
            });
        }
        
        if (_self.promoCodeForm != null) {
            _self.promoCodeForm.addEventListener('submit', function (e) {
                e.preventDefault();
                let valid = true;
                const data = {
                    code: this.querySelector('[name="code"]'),
                }
                for (const item in data) {
                    // for static validation only
                    if (data[item].value == 'EdgetoEdge' || data[item].value == '') {
                        data[item].parentNode.classList.add('is-invalid');
                        data[item].classList.add('has-error');
                        valid = false;
                    } else {
                        data[item].parentNode.classList.remove('is-invalid');
                        data[item].classList.remove('has-error');
                    }
                }
                if (valid) {
                    _self.toggleModal(true, 'promo-code');
                }
            });
        }

        if(_self.addedToCartModal != null) {
            _self.addedToCartModal.addEventListener('submit', function(e) {
                e.preventDefault();
                const checkWithAddress = document.querySelector('.with-address');
               
                if(!document.querySelector('.o-header-trans')) {
                    _self.toggleModal(true, 'added-to-cart');
                } else if(checkWithAddress != null) {
                    _self.toggleModal(true, 'added-to-cart');
                }
            });
        }

        if (_self.searchStore != null) {
            _self.searchStore.addEventListener('input', function () {
                _self.filterStoreList();
            });
        }

        if (_self.searchProduct != null) {
            _self.searchProduct.addEventListener('input', function () {
                _self.filterProductList();
            });
        }

        if (_self.triggerModal.length) {
            _self.triggerModal.forEach(elem => {
                elem.addEventListener('click', function (e) {
                    e.preventDefault();
                    const modalTarget = this.getAttribute('data-trigger-modal');
                    _self.toggleModal(true, modalTarget);
                    new ModalSpy().init();
                });
            });
        }

        if (_self.triggerPassword.length) {
            _self.triggerPassword.forEach(elem => {
                elem.addEventListener('click', function () {
                    let inputElem = this.previousElementSibling;
                    switch (this.classList.contains('password-hide')) {
                        case true:
                            inputElem.setAttribute('type', 'text');
                            break;
                        default:
                            inputElem.setAttribute('type', 'password');
                            break;
                    }
                    this.classList.toggle('password-hide');
                    inputElem.classList.toggle('password-hide');
                });
            });
        }

        // condition to set password character to asterisk
        if(document.querySelector('.js-max-password1')) {
            let inputElPass1 = document.querySelector('.js-max-password1');
            const dummyElPass1 = document.querySelector('#dummyPass1');

            inputElPass1.addEventListener('keyup', () => {
                let dummyTextPass1 = Array(inputElPass1.value.length).fill('*').join('');
                dummyElPass1.innerHTML = dummyTextPass1;
            });
        }

        // condition to set confirm password character to asterisk
        if(document.querySelector('.js-max-password2')) {
            let inputElPass2 = document.querySelector('.js-max-password2');
            const dummyElPass2 = document.querySelector('#dummyPass2');

            inputElPass2.addEventListener('keyup', () => {
                let dummyTextPass2 = Array(inputElPass2.value.length).fill('*').join('');
                dummyElPass2.innerHTML = dummyTextPass2;
            });
        }

        // condition to hide and show password
        if(_self.togglePassword1){
            _self.togglePassword1.addEventListener('click', function(e) {
                e.preventDefault();
                let password = document.querySelector('.js-max-password1');
                if(password.type === "password") {
                    _self.dummyElPass1.classList.add('show');
                    _self.dummyElPass1.classList.remove('hide');
                } else {
                    _self.dummyElPass1.classList.remove('show');
                    _self.dummyElPass1.classList.add('hide');
                }
            });
        }

        // condition to hide and show confirm password
        if(_self.togglePassword2){
            _self.togglePassword2.addEventListener('click', function(e) {
                e.preventDefault();
                let password = document.querySelector('.js-max-password2');
                if(password.type === "password") {
                    _self.dummyElPass2.classList.add('show');
                    _self.dummyElPass2.classList.remove('hide');
                } else {
                    _self.dummyElPass2.classList.remove('show');
                    _self.dummyElPass2.classList.add('hide');
                }
            });
        }

        if (_self.registrationForm != null) {

            _self.registrationForm.addEventListener('submit', function (e) {
                e.preventDefault();
                let valid = true;
                const data = {
                    firstName: this.querySelector('[name="firstName"]'),
                    lastName: this.querySelector('[name="lastName"]'),
                    month: this.querySelector('[name="month"]'),
                    day: this.querySelector('[name="day"]'),
                    gender: this.querySelector('[name="gender"]'),
                    address1: this.querySelector('[name="address1"]'),
                    address2: this.querySelector('[name="address2"]'),
                    city: this.querySelector('[name="city"]'),
                    province: this.querySelector('[name="province"]'),
                    country: this.querySelector('[name="country"]'),
                    mobileNoPre: this.querySelector('[name="mobileNoPre"]'),
                    mobileNo: this.querySelector('[name="mobileNo"]'),
                    email: this.querySelector('[name="email"]'),
                    password1: this.querySelector('[name="password1"]'),
                    password2: this.querySelector('[name="password2"]'),
                    captchaCode: this.querySelector('[name="captchaCode"]'),
                    captcha: this.querySelector('[name="captcha"]'),
                    terms: this.querySelector('[name="terms"]'),
                }
                for (const item in data) {
                    const inputDescription = data[item].closest('.o-form-group-inner').querySelector('[data-catcher="password-description"]');
                    
                    if (data[item].value == '') {
                        _self.setValidationState(false, data[item]);
                        valid = false;
                        if (inputDescription != null) {
                            inputDescription.classList.add('hide-all');
                        }
                    } else {
                        _self.setValidationState(true, data[item]);
                        if (inputDescription != null) {
                            inputDescription.classList.remove('hide-all');
                        }
                    }
                    if (item == 'captcha') {
                        if (!_self.validateCaptcha(this)) {
                            valid = false;
                        }
                        _self.setValidationState(_self.validateCaptcha(this), data[item]);
                    }
                    if (item == 'password1' || item == 'password2') {
                        switch (data[item].value != '') {
                            case true:
                                _self.setValidationState(_self.validatePassword(this), data[item]);
                                if (inputDescription != null && _self.validatePassword(this)) {
                                    inputDescription.classList.remove('hide-all');
                                } else if (inputDescription != null) {
                                    inputDescription.classList.add('hide-all');
                                }
                                break;
                        }
                    }
                    
                }
                
                if (valid) {
                    _self.toggleModal(true, 'registration-success');
                }
            });
        }

        if (_self.orderPickupForm != null) {
            _self.orderPickupForm.addEventListener('submit', function (e) {
                e.preventDefault();

                const validDate = _self.validateStoreDateTime(this);
                let invalidModal = validDate.modal == 'invalid-delivery-checkout' ? 'invalid-delivery-checkout' : 'invalid-pickup-time';
                if (validDate.valid) {
                    if(!_self.maxOrderNow){
                        _self.toggleModal(true, 'promo-code');
                    }else{
                        _self.toggleModal(true, 'other-brands');
                    }
                } else {
                    if(_self.maxOrderNow){
                        _self.toggleModal(true, invalidModal);
                    }else{
                        _self.toggleModal(true, 'invalid-pickup-time');
                    }
                }
            });
        }

        if (_self.triggerRemoveOrder.length) {
            _self.triggerRemoveOrder.forEach(elem => {
                elem.addEventListener('click', function () {
                    _self.toggleModal(true, 'remove-order');
                });
            })
        }

        if (_self.specFieldValidation.length) {
            _self.specFieldValidation.forEach(elem => {
                const validationType = elem.getAttribute('data-field-validate');
                if (validationType == 'email') {
                    elem.addEventListener('blur', function () {
                        const value = this.value;
                        _self.setValidationState(_self.validateEmail(value), this);
                    });
                }
            });
        }

        if (_self.specFieldFilter.length && _self.loadCountry == null) {
            _self.filterDropdown();
            let proc = false;
            _self.specFieldFilter.forEach( elem => {
                const attrValue = elem.getAttribute('data-field-filter');
                if (attrValue == 'provinces' || attrValue == 'cities') {
                    proc = true;
                }
            });
            if (proc) {
                _self.filterCitiesProvinces();
            }
        }

        if (_self.checkOrderDetails.length) {
            _self.fetchOrderDetails();
        }

        if (_self.loadCountry != null) {
            _self.filterDropdown();
            _self.filterCitiesProvinces('Philippines');
        }

        if (_self.validateCheckbox.length) {
            _self.validateCheckbox.forEach(elem => {
                elem.addEventListener('change', function () {
                    _self.checkFormValidation(elem);
                });
            });
        }

        if (_self.deliveryCheckoutForm != null) {
            _self.deliveryCheckoutForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const thisTarget = e.currentTarget;
                const changeValue = thisTarget.querySelector('[data-catcher="payment-change"]').value;
                const totalPriceValue = thisTarget.querySelector('[data-checker="total-price"]').value;
                if (changeValue == '') {
                    Swal.fire({
                        title: 'Change for field cannot be blank',
                        text: 'Paying for Exact Amount?',
                        showCancelButton: true,
                        cancelButtonText: `Cancel`,
                        confirmButtonText: `Ok`,
                        reverseButtons: true,
                        showCloseButton: true,
                        closeButtonHtml: '<i class="ic-close"></i>'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // this is where your proceed codes @aldrein
                        }
                    });
                } else if (parseFloat(changeValue) < parseFloat(totalPriceValue)) {
                    Swal.fire({
                        title: 'Heads Up!',
                        text: 'The change for amount must be greater than or equal to the total amount due. See order summary for the total amount.',
                        confirmButtonText: `Ok`,
                    });
                }
            });
        }

        if (_self.initMap.length) {
            _self.initMap.forEach(elem => {
                elem.addEventListener('click', (e) => {
                    const currentTarget = e.currentTarget;
                    _self.toggleModal(true, 'map');
                    _self.map = new google.maps.Map(document.getElementById("ycMap"), {
                        center: { lat: -34.397, lng: 150.644 },
                        zoom: 8,
                    });
                });
            });
        }

        if(_self.maxOrderNow){
            let form = document.querySelector('.o-form-timeline');
            let inputFields = form.querySelectorAll('.o-form-group_input');

            inputFields.forEach((field) => {
                field.addEventListener('input', (event) => {
                    if(event.target.value != ''){
                        event.target.classList.add('has-value');
                    }else{
                        event.target.classList.remove('has-value');
                    }
                })
            })
        }

        //for static validation of Deliver now on delivery page
        if(_self.maxOrderNow){
            _self.triggerPanel.forEach(element => {
                element.addEventListener('click', function () {
                    if(element.dataset.customFilter == 'when-order' && element.dataset.panelValue == 'Deliver now'){
                        _self.validateDeliveryForm();
                    }
                });
            });
        }

        if(_self.invalidDeliveryTimeBtn){
            _self.invalidDeliveryTimeBtn.addEventListener('click', () => {
                document.body.classList.remove('modal-open');
                _self.invalidDeliveryTimeBtn.closest('.modal').classList.remove('active');
                document.querySelector('.modal-backdrop').classList.remove('active');
            })
        }
    }

    validateDeliveryForm(){
        //for static validation of Deliver now
        const formElem = document.querySelector('.o-form-timeline');
        const validation = formElem.getAttribute('validation');
        let formValid = true;
        if (validation) {
            const allInputs = formElem.querySelectorAll('[name][data-required-validate]');
            allInputs.forEach(input => {
                const inputValue = input.value;
                const validateType = input.getAttribute('data-validate');
                const validateDropdown = input.getAttribute('data-validate-dropdown');
                if(!input.classList.contains('js-time')){
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
                }

            });
            if (!formValid) {
                formElem.classList.add('is-invalid');
                formElem.querySelector('[type="submit"]').setAttribute('disabled','disabled');
                return;
            }
            formElem.classList.remove('is-invalid');
            formElem.querySelector('[type="submit"]').disabled = false;
        }
    }

    resetModalCheckboxes() {
        let modal = document.querySelector('.js-spy-modal.active')
        let checkBoxes = modal.querySelectorAll('input[type="checkbox"]');
        checkBoxes.forEach(element => {
            element.checked = false;
        })
    }
    
    toggleDropDown(element, status) {
        if (status) {
            element.parentNode.classList.add('active');
            element.closest('.o-form-group').classList.add('active');

            if(element.parentNode.classList.contains('is-invalid') && this.maxOrderNow &&  document.querySelector('.o-form-timeline .error-data')){
                document.querySelector('.o-form-timeline .error-data').style.display = 'none';

                document.querySelectorAll('.is-invalid').forEach((invalidField) => {
                    invalidField.classList.remove('is-invalid');
                    invalidField.closest('.o-form-group_input');
                })
            }

        } else {
            element.parentNode.classList.remove('active');
            element.closest('.o-form-group').classList.remove('active');

        }
    }

    checkOrderDetails2() {
        let _self = this;
        let showSummary = false;
        let grandTotal = 0;
        for (let value in _self.orderData) {
            const selectedCatcher = document.querySelector(`[data-catcher="${value}"]`);
            if (selectedCatcher != null && typeof _self.orderData[value] === 'object' && _self.orderData[value].value != '' && !value.includes('_id') && !value.includes('_option')) {
                showSummary = true;
                selectedCatcher.innerText = _self.orderData[value].value;
                selectedCatcher.classList.add('filled');
                grandTotal = parseInt(grandTotal) + parseInt( _self.orderData[value].price);
                if (value.includes('wings')) {
                    document.querySelector('[data-catcher="wings0"]').innerText = 'Wings - 1/2 pound';
                }
            } else {
                if (selectedCatcher != null && !value.includes('_id') && !value.includes('_option')) {
                    selectedCatcher.innerText = '';
                    selectedCatcher.classList.remove('filled');
                    grandTotal = parseInt(grandTotal) - parseInt( _self.orderData[value].price);
                }
            }
        }
        if (Number(_self.orderCount) && _self.orderCount > 0 ) {
            grandTotal = grandTotal * _self.orderCount;
        }
        let totalElem = document.querySelector(`[data-catcher="total"]`);
        if (totalElem != null) {
            totalElem.innerText = grandTotal.toFixed(2);
        }

        if (showSummary) {
            _self.orderSummary.classList.add('active');
            _self.orderSummary.parentNode.classList.add('order-summary-active');
        }
    }

    computeTotalPrice() {
        let review = document.querySelector('.js-review-order');
        let quantity = document.querySelectorAll('input[name="orderCount"]');
        let hiddenPrice = document.querySelectorAll('input[name="price"]');
        let price = document.querySelectorAll('.js-price');
        let totalPerItem = 0.00;
        let total = 0.00;
        let totalElement = document.querySelector('.js-total');
        
        if(review != null) {
            
            quantity.forEach( (qty, index) => {
                if(!qty.value) {
                    price[index].innerHTML = "0.00";
                } else {
                    totalPerItem = parseFloat(qty.value) * parseFloat(hiddenPrice[index].value.replace(/,/g, ''));
                    price[index].innerHTML = totalPerItem.toLocaleString("en", {minimumFractionDigits: 2});
                    total = total + totalPerItem;
                }
            }); 
            
            totalElement.innerHTML = total.toLocaleString("en", {minimumFractionDigits: 2});
        }
    }

    addClassNameListener(selector, callback) {
        let elem = document.querySelectorAll(selector);
        elem.forEach(inElem => {
            let lastClassName = inElem.className;
            window.setInterval( function() {   
               let className = inElem.className;
                if (className !== lastClassName) {
                    callback({
                        elem: inElem,
                        class: className
                    });
                    lastClassName = className;
                }
            },10);
        })
    }

    checkInputHolder(element) {
        let listenContainers = element.parentNode.parentNode.querySelectorAll('.active');
        if (listenContainers.length == 0) {
            element.parentNode.parentNode.classList.remove('active');
        }
    }

    doScrolling(elementY, duration, thisElement) {
        let _self = this;
        let startingY = window.pageYOffset;
        let offSetToTarget = 400;
        const checkWithAddress = document.querySelector('.with-address');
        if (checkWithAddress != null) {
            offSetToTarget = 428;
        }
        let diff = elementY - startingY - offSetToTarget;
        let offset = startingY + diff;

        const fixedOffset = offset.toFixed(),
        onScroll = function () {
            const offsetY = window.pageYOffset;
            if (parseInt(offsetY.toFixed()) === parseInt(fixedOffset) || parseInt(offsetY.toFixed()) + 1 === parseInt(fixedOffset)) {
                window.removeEventListener('scroll', onScroll);
                _self.getGapOfBottomToElement(thisElement);
            }
        }
        if (window.pageYOffset.toFixed() === fixedOffset) {
            _self.getGapOfBottomToElement(thisElement);
        }
        window.addEventListener('scroll', onScroll);
        window.scrollTo({
            top: offset,
        });
    }

    getGapOfBottomToElement(element) {
        let _self = this;
        
        let dropdownElem = element.parentNode.querySelector('ul');
        if (dropdownElem) {
            if (!dropdownElem.hasAttribute('data-address-catcher')) {
                // dropdownElem.style.height = `${window.innerHeight - element.getBoundingClientRect().bottom}px`;
            }
            
            if (element.parentNode.classList.contains('active')) {
                _self.toggleDropDown(element, false);
                _self.toggleBodyFixed(false);
                return;
            } else {
                _self.triggerListen.forEach(inElem => {
                    _self.toggleDropDown(inElem, false);
                });
            }
            _self.toggleDropDown(element, true);
            _self.toggleBodyFixed(true);
        }
    }
    
    toggleBodyFixed(stat) {
        let _self = this;
        if (stat) {
            document.body.classList.add('opened');
            if(_self.maxOrderNow){
                document.querySelector('.main-wrapper').classList.add('dropdown-open');
            }
        } else {
            document.body.classList.remove('opened');
            if(_self.maxOrderNow){
                document.querySelector('.main-wrapper').classList.remove('dropdown-open');
            }
        }
    }

    hidePicker(element) {
        element.parentNode.querySelector('.qs-datepicker-container').classList.add('qs-hidden');
    }

    getElementY(query) {
        return window.pageYOffset + query.getBoundingClientRect().top;
    }

    toggleModal(status, target, data = null) {
        if (data != null) {
            target = 'default';
        }
        let modalCatcher = document.querySelector(`[data-modal-catcher="${target}"]`);
        if(modalCatcher){
            let modalBackdrop = document.querySelector('[data-modal-catcher="backdrop"]');
            let bodyElem = document.body;
            if (status) {
                modalCatcher.classList.add('active');
                modalBackdrop.classList.add('active');
                bodyElem.classList.add('modal-open');
    
                if (data != null) {
                    for (const content in data) {
                        const catcherElem = document.querySelector(`[data-modal-content="${content}"]`);
                        if (catcherElem) {
                            if (content == 'proceedBtn' || content == 'cancelBtn') {
                                catcherElem.classList.remove('hide');
                                catcherElem.querySelector('span').innerHTML = data[content];
                            } else if (content == 'proceedBtnLink') {
                                catcherElem.classList.remove('hide');
                                catcherElem.setAttribute('href', data[content]);
                                catcherElem.querySelector('span').innerHTML = data['proceedBtnLinkText'];
                            } else {
                                catcherElem.innerHTML = data[content];
                            }
                        }
                    }
                }
    
            } else {
                modalCatcher.classList.remove('active');
                modalBackdrop.classList.remove('active');
                bodyElem.classList.remove('modal-open');
            }
        }
    }

    checkFormValidation(elem) {
        const formElem = elem.getAttribute('validation') ? elem : elem.closest('form');
        const validation = formElem.getAttribute('validation');
        
        let formValid = true;
        if (validation) {
            const allInputs = formElem.querySelectorAll('[name][data-required-validate]');
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
                formElem.classList.add('is-invalid');
                formElem.querySelector('[type="submit"]').setAttribute('disabled','disabled');
                return;
            }
            formElem.classList.remove('is-invalid');
            formElem.querySelector('[type="submit"]').disabled = false;
        }
    }
    
    toggleSelectedDateForDelivery(elem) {
        const value = elem.getAttribute('data-panel-value').toLowerCase();
        let forFilterValue = 'now';
        if (value.includes('later')) {
            forFilterValue = 'later';
        }
        const deliverElem = document.querySelectorAll(`[data-delivery-date]`);
        deliverElem.forEach(inElem => {
            inElem.classList.remove('show');
            if (inElem.getAttribute('data-delivery-date') == forFilterValue) {
                inElem.classList.add('show');
            }
        });
        
    }

    activateCurrentTimeValidation() {
        // const hourParent = document.querySelectorAll('[data-time-validation="hour"]');
        // const minuteParent = document.querySelectorAll('[data-time-validation="minute"]');
        // const sessionParent = document.querySelectorAll('[data-time-validation="session"]');
        // const currentDate = new Date();
        // const currentSession = currentDate.getHours() >= 12 ? 'PM' : 'AM';
        // let currentHours = currentDate.getHours() ? currentDate.getHours() : 12;
        // currentHours = currentHours % 12;
        // if (hourParent) {
        //     hourParent.forEach(elem => {
        //         elem.querySelectorAll('ul li').forEach(inElem => {
        //             const value = inElem.getAttribute('data-select-value');
        //             if (value < currentHours) {
        //                 inElem.setAttribute('disabled', 'disabled');
        //             }
        //         });
        //     });
        // }
    }

    // function for product filter
    filterProductList() {
        let _self = this;
        const searchValue = document.querySelector('[data-search="product"]').value.toLowerCase();

        let searchCatchers = document.querySelectorAll('[data-catcher-search-product]');
        console.log(searchCatchers);
        if (searchValue != '') {

            searchCatchers.forEach(searchElem => {
                if (searchElem.getAttribute('data-catcher-search-product').toLowerCase().indexOf(searchValue) > -1) {
                    searchElem.classList.remove('hide');
                    searchElem.classList.add('searched');
                } else {
                    searchElem.classList.add('hide');
                    searchElem.classList.remove('searched');
                }
            });
        }
        _self.activateProductPaginate();
    }

    // function to activate product pagination
    activateProductPaginate() {
        let _self = this;
        const searchElem = document.querySelector('[data-search="product"]');

        if(document.querySelector('#product-list')) {
            _self.numberPerPage = 8;
        }

        if (searchElem) {
            const searchValue = searchElem.value.toLowerCase();
            let searchCatchers = [];
            if (searchValue != '') {
                searchCatchers = document.querySelectorAll('[data-catcher-search-product].searched');
            } else {
                searchCatchers = document.querySelectorAll('[data-catcher-search-product]');
            }
            _self.numberOfPages = Math.ceil(searchCatchers.length / _self.numberPerPage);

            const paginatePagesElem = document.querySelector('[data-catcher="paginate-product-pages"]');
            const paginatePagesDropDownElem = document.querySelector('[data-page="product-getter"]').closest('.for-product-page').querySelector('ul');
            paginatePagesElem.innerHTML = '';
            let toAppendButton = '';
            let toAppendDropdown = '';
    
            let begin = ((_self.currentPage - 1) * _self.numberPerPage);
            let end = begin + _self.numberPerPage;

            document.querySelector('[data-page="product-getter"]').value = `Page ${_self.currentPage} of ${_self.numberOfPages}`;
            
            searchCatchers.forEach((element, i) => {
                if (begin <= i && end > i ) {
                    element.classList.remove('hide');
                } else {
                    element.classList.add('hide');
                }
            });
            for (let i = 0; i < _self.numberOfPages; i++) {
    
                let classActive = '';
                if(_self.currentPage == i+1) {
                    classActive = 'active';
                }
                toAppendButton += `<a href="javascript:void(0)" class="${classActive}" data-paginate-product="${i+1}">${i+1}</a>`;
                toAppendDropdown += `<li class="[ u-df-mb ] li-lg" data-select-value="Page ${_self.currentPage} of ${_self.numberOfPages}" data-select-main="${i+1}">
                    <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                        <h5 class="h5">${i+1}</h5>
                    </div>
                </li>`;
            }
            paginatePagesElem.innerHTML = (toAppendButton);
            paginatePagesDropDownElem.innerHTML = (toAppendDropdown);
            _self.setProductPaginateNavs();
            // _self.setDropdownPaginate();
            _self.hideProductPages();
        }
    }

    // function to set product pagination nav
    setProductPaginateNavs() {
        let _self = this;
        const paginateNav = document.querySelectorAll('[data-paginate-product]');
        paginateNav.forEach(elem => {
            elem.addEventListener('click', function (e) {
                e.stopImmediatePropagation();
                const paginateValue = this.getAttribute('data-paginate-product');
                const activePage = this.closest('[data-catcher="paginate-holder-product"]').querySelector('.active');
                if (paginateValue == 'next') {
                    if (activePage.nextElementSibling != null && activePage.nextElementSibling.getAttribute('data-paginate-product') != 'next') {
                        activePage.nextElementSibling.classList.add('active');
                        activePage.classList.remove('active');
                        _self.currentPage++;
                    }
                } else if (paginateValue == 'prev') {
                    if (activePage.previousElementSibling != null && activePage.previousElementSibling.getAttribute('data-paginate-product') != 'prev') {
                        activePage.previousElementSibling.classList.add('active');
                        activePage.classList.remove('active');
                        _self.currentPage--;
                    }
                } else {
                    activePage.classList.remove('active');
                    this.classList.add('active');
                    _self.currentPage = paginateValue;
                }
                _self.activateProductPaginate();
            });
        });
    }

    // function to hide product page
    hideProductPages() {
        let _self = this;
        if (window.screen.width < 769) {
            for(let i = 1; i <= _self.numberOfPages; i++) {
                const pageElem =  document.querySelector(`[data-paginate-product="${i}"]`);
                if (pageElem != null) {
                    pageElem.classList.add('hide');
                }
            }
            let pageShow = _self.currentPage - 2;

            for(let i = 1; i <= 5; i++) {
                const pageElem = document.querySelector(`[data-paginate-product="${pageShow}"]`);
                if (pageElem != null) {
                    pageElem.classList.remove('hide');
                }
                pageShow++;
            }
        }
    }

    filterStoreList() {
        let _self = this;
        const searchValue = document.querySelector('[data-search="store"]').value.toLowerCase();

        let searchCatchers = document.querySelectorAll('[data-catcher-search]');
        if (searchValue != '') {

            searchCatchers.forEach(searchElem => {
                if (searchElem.getAttribute('data-catcher-search').toLowerCase().indexOf(searchValue) > -1) {
                    searchElem.classList.remove('hide');
                    searchElem.classList.add('searched');
                } else {
                    searchElem.classList.add('hide');
                    searchElem.classList.remove('searched');
                }
            });
        }

        const sortValue = document.querySelector('[name="sort"]').value;
        let storeList = document.querySelector('[data-catcher="store-list"]');
        storeList.innerHTML = "";
        let toHtmlStores = '';
        if (searchCatchers.length) {
            if (sortValue != 'A-Z' && sortValue != 'Z-A') {
                let upElem = [];
                let lowElem = [];
                searchCatchers.forEach(storeElem => {
                    const storeFilter = JSON.parse(storeElem.dataset.storeFilter);
                    if (storeFilter.includes(sortValue)) {
                        upElem.push(storeElem);
                    } else {
                        lowElem.push(storeElem);
                    }
                });
                const mergeStores = upElem.concat(lowElem);
                [].forEach.call(mergeStores, function(item, i) {
                    toHtmlStores += item.outerHTML;
                });
                storeList.innerHTML = toHtmlStores;
            } else {
                [].slice.call(searchCatchers)
                .sort(function(a, b) {
                    if (sortValue != 'Z-A') {
                        return a.getAttribute('data-catcher-search').localeCompare(b.getAttribute('data-catcher-search'));
                    } else {
                        return b.getAttribute('data-catcher-search').localeCompare(a.getAttribute('data-catcher-search'));
                    }
                }).forEach(function(ele) {
                    toHtmlStores += ele.outerHTML;
                });
                storeList.innerHTML = toHtmlStores;
            }
        }
        _self.activatePaginate();
    }

    activatePaginate() {
        let _self = this;
        const searchElem = document.querySelector('[data-search="store"]');

        if(document.querySelector('#store-list')) {
            _self.numberPerPage = 4;
        }

        if (searchElem) {
            const searchValue = searchElem.value.toLowerCase();
            let searchCatchers = [];
            if (searchValue != '') {
                searchCatchers = document.querySelectorAll('[data-catcher-search].searched');
            } else {
                searchCatchers = document.querySelectorAll('[data-catcher-search]');
            }
            _self.numberOfPages = Math.ceil(searchCatchers.length / _self.numberPerPage);

            const paginatePagesElem = document.querySelector('[data-catcher="paginate-pages"]');
            const paginatePagesDropDownElem = document.querySelector('[data-page="getter"]').closest('.for-store-page').querySelector('ul');
            paginatePagesElem.innerHTML = '';
            let toAppendButton = '';
            let toAppendDropdown = '';
    
            let begin = ((_self.currentPage - 1) * _self.numberPerPage);
            let end = begin + _self.numberPerPage;

            document.querySelector('[data-page="getter"]').value = `Page ${_self.currentPage} of ${_self.numberOfPages}`;
            
            searchCatchers.forEach((element, i) => {
                if (begin <= i && end > i ) {
                    element.classList.remove('hide');
                } else {
                    element.classList.add('hide');
                }
            });
            for (let i = 0; i < _self.numberOfPages; i++) {
    
                let classActive = '';
                if(_self.currentPage == i+1) {
                    classActive = 'active';
                }
                toAppendButton += `<a href="javascript:void(0)" class="${classActive}" data-paginate="${i+1}">${i+1}</a>`;
                toAppendDropdown += `<li class="[ u-df-mb ] li-lg" data-select-value="Page ${_self.currentPage} of ${_self.numberOfPages}" data-select-main="${i+1}">
                    <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                        <h5 class="h5">${i+1}</h5>
                    </div>
                </li>`;
            }
            paginatePagesElem.innerHTML = (toAppendButton);
            paginatePagesDropDownElem.innerHTML = (toAppendDropdown);
            _self.setPaginateNavs();
            _self.setDropdownPaginate();
            _self.hidePages();
        }
    }

    setPaginateNavs() {
        let _self = this;
        const paginateNav = document.querySelectorAll('[data-paginate]');
        paginateNav.forEach(elem => {
            elem.addEventListener('click', function (e) {
                e.stopImmediatePropagation();
                const paginateValue = this.getAttribute('data-paginate');
                const activePage = this.closest('[data-catcher="paginate-holder"]').querySelector('.active');
                if (paginateValue == 'next') {
                    if (activePage.nextElementSibling != null && activePage.nextElementSibling.getAttribute('data-paginate') != 'next') {
                        activePage.nextElementSibling.classList.add('active');
                        activePage.classList.remove('active');
                        _self.currentPage++;
                    }
                } else if (paginateValue == 'prev') {
                    if (activePage.previousElementSibling != null && activePage.previousElementSibling.getAttribute('data-paginate') != 'prev') {
                        activePage.previousElementSibling.classList.add('active');
                        activePage.classList.remove('active');
                        _self.currentPage--;
                    }
                } else {
                    activePage.classList.remove('active');
                    this.classList.add('active');
                    _self.currentPage = paginateValue;
                }
                _self.activatePaginate();
            });
        });
    }

    replacePlaceholderPerScreen() {
        let _self = this;
        if (_self.placeholderReplace.length) {
            _self.placeholderReplace.forEach(elem => {
                const attributeValue = elem.getAttribute('placeholder-mb');
                elem.setAttribute('placeholder', attributeValue);
            });
        }
    }

    togglePaymentSelection(value) {
        const paymentCatchers = document.querySelectorAll('[data-catcher-payment]');
        paymentCatchers.forEach(elem => {
            if (elem.classList.contains('active')) {
                elem.classList.remove('active');
            }
        });
        document.querySelector(`[data-catcher-payment="${value}"]`).classList.add('active');

    }

    setValidationState(validation, elem) {
        if (!validation) {
            elem.parentNode.classList.add('is-invalid');
            elem.classList.add('has-error');
        } else {
            elem.parentNode.classList.remove('is-invalid');
            elem.classList.remove('has-error');
        }

    }

    validateCaptcha(form) {
        const captchaValue = form.querySelector('[name="captcha"]').value;
        const captchaCode = form.querySelector('[name="captchaCode"]').value;
        if (captchaValue == captchaCode) {
            return true;
        }
        return false;
    }

    validatePassword(form) {
        const password1 = form.querySelector('[name="password1"]').value;
        const password2 = form.querySelector('[name="password2"]').value;
        if (password1 == password2) {
            return true;
        }
        return false;
    }

    validateStoreDateTime(form) {
        let _self = this;
        let valid = true;
        let modal;
        let startStoreHours = 8;
        let endStoreHours = 20;
        let values = {};
        
        const date = {
            dateValue: form.querySelector('[name="date"]'),
            hourValue: form.querySelector('[name="hour"]'),
            minValue: form.querySelector('[name="min"]'),
            sessionValue: form.querySelector('[name="session"]'),
        }

        const stringyFullDate = `${date.dateValue.value} ${date.hourValue.value}:${date.minValue.value} ${date.sessionValue.value}`;
        let currentHour = new Date(Date.parse(stringyFullDate)).getHours();
        
        if (differenceInHours(Date.parse(stringyFullDate) ,new Date()) < 1) {
            valid = false;
            modal = 'invalid-delivery-time';
        }
        if (differenceInMinutes(Date.parse(stringyFullDate) ,new Date()) < 90) {
            valid = false;
            modal = 'invalid-delivery-time';
        }
        if (!(startStoreHours <= currentHour && currentHour <= endStoreHours)) {
            valid = false;
            modal = 'invalid-delivery-checkout';
        }

        for (const data in date) {
            if (data != 'dateValue') {
                switch (valid) {
                    case true:
                        date[data].parentNode.classList.remove('is-invalid');
                        date[data].classList.remove('has-error');
                        break;
                    case false:
                        date[data].parentNode.classList.add('is-invalid');
                        date[data].classList.add('has-error');

                        if(this.maxOrderNow && document.querySelector('.o-form-timeline .error-data')){
                            document.querySelector('.o-form-timeline .error-data').style.display = 'block';
                        }
                        break;
                }
            }
        }

        values = {
            'valid' : valid,
            'modal' : modal
        };

        return values;
    }

    listenCloseDropdown(elem) {
        let _self = this;
        _self.triggerListen.forEach(inElem => {
            _self.toggleDropDown(inElem, false);
            if (!elem.classList.contains('js-datepicker') && inElem.classList.contains('js-datepicker')) {
                _self.hidePicker(inElem);
            }
        });
        _self.toggleBodyFixed(false);
    }

    setDropdownFilter(elem, val) {
        const filterCatcher = elem.closest('.o-form-group').querySelector('input').getAttribute('data-throw-filter');
        const dropdownList = document.querySelectorAll(`[data-catcher-filter="${filterCatcher}"] li`);
        for (let i = 0; i < dropdownList.length; i++) {
            let filterValue = dropdownList[i].getAttribute("data-value-filter").split(',');
            if (Array.isArray(filterValue)) {
                if (filterValue.includes(val)) {
                    dropdownList[i].classList.remove('hide');
                } else {
                    dropdownList[i].classList.add('hide');
                }
            }
        }
    }

    validateEmail(value) {
        if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(value)) {
            return true;
        }
        return false;
    }

    filterDropdown() {
        let _self = this;
        _self.specFieldFilter.forEach(elem => {
            const filterType = elem.getAttribute('data-field-filter');
            if (filterType == 'country') {
                $.ajax({
                    type: 'GET',
                    url: `${this.siteUrl}/populate.php?fetch-data=country`,
                    success: (result => {
                        const parsedData = JSON.parse(result);
                        let toHtml = '';
                        parsedData.forEach(data => {
                            toHtml += `<li class="[ u-df-mb ]" data-select-value="${data.name}">
                                    <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                        <h5 class="h5">${data.name}</h5>
                                    </div>
                                </li>`;
                        });
                        $(elem).closest('.o-form-group-inner').find('ul').html(toHtml);
                        _self.specFieldFilterSelecValue(elem.closest('.o-form-group-inner').querySelectorAll('ul li'));
                    })
                });
            }
            elem.addEventListener('keyup', function () {
                const listItem = this.closest('[data-catcher-filter="holder"]').querySelectorAll('ul li');
                const filter = this.value;
                for (let i = 0; i < listItem.length; i++) {
                    const value = listItem[i].getAttribute('data-select-value');
                    if (value != null) {
                        if (value.toLowerCase().indexOf(filter.toLowerCase()) > -1) {
                            listItem[i].classList.remove('hide');
                        } else {
                            listItem[i].classList.add('hide');
                        }
                    }
                }

                if (_self.currentCountry == 'Philippines') {
                    _self.validateDropdown(this, 'false');
                } else {
                    _self.validateDropdown(this, 'true');
                }
            });
        });
    }

    populateFieldSummary() {
        let _self = this;
        if (_self.orderSummaryForm != null) {
            const fields = _self.orderSummaryForm.querySelectorAll('[name]');
            let toHtml = '';
            let wingsCounter = 0;
            fields.forEach(elem => {
                const fieldName = elem.getAttribute('name');
                const fieldValue = document.querySelector(`[name="${fieldName}"]`).value;
                if (fieldName == 'product_price') {
                    _self.orderData[fieldName] = {
                        value: fieldValue,
                        price: fieldValue
                    };
                } else {
                    _self.orderData[fieldName] = {
                        value: fieldValue,
                        price: 0
                    };
                }
                if (wingsCounter == 0 && fieldName.toLowerCase().includes('wing')) {
                    toHtml += `<li data-catcher="wings0" class="order-summary-list_title"></li>`;
                    wingsCounter = 1;
                }
                if (wingsCounter == 1 && fieldName.toLowerCase().includes('wing')) {
                    toHtml += `<li  class="item-indent" data-catcher="${fieldName}"></li>`;
                } else if (fieldName.toLowerCase().includes('product_price')) {
                    toHtml += `<li class="hidden" data-catcher="${fieldName}"></li>`;
                } else {
                    toHtml += `<li data-catcher="${fieldName}"></li>`;
                }
            });
            if ($('[data-summary="order"]').length) {
                $('[data-summary="order"] ul').html(toHtml);
            }

            let orderDataCount = 0;

            for (const keys in _self.orderData) {
                if (keys != 'product_price' && keys != 'orderCount') {
                    orderDataCount++;
                }
            }
            
            const orderSummaryElem = document.querySelector('[data-summary="order"]');
            if (orderDataCount == 0 && orderSummaryElem && !document.querySelector('body').classList.contains('theme-max')) {
                orderSummaryElem.classList.add('active');
            }
        }
    }

    specFieldFilterSelecValue(selectValueElem) {
        let _self = this;
        selectValueElem.forEach(elem => {
            elem.addEventListener('click', function() {
                const selectValue = this.getAttribute('data-select-value');
                _self.initSelectValue(this);
                _self.filterCitiesProvinces(selectValue);
            });
        });
    }

    initSelectValue(elem) {
        let _self = this;
        const selectValue = elem.getAttribute('data-select-value');
        let inputElement = elem.parentNode.previousElementSibling;
        inputElement.value = selectValue;
        const selectedItem = elem.parentNode.querySelector('.list-selected');
        if (selectedItem != null) {
            selectedItem.classList.remove('list-selected');
            if(_self.jsMaxOrderNow){
                inputElement.parentElement.classList.remove('has-value');
            }
        }
        elem.classList.add('list-selected');
        if(_self.maxOrderNow){
            inputElement.parentElement.classList.add('has-value');
        }
        _self.validateDropdown(elem, 'true');
    }

    filterCitiesProvinces(country = null) {
        let _self = this;
        const countryHolder = document.querySelector('[data-field-filter="country"]');
        let countryField = null;
        if (countryHolder != null) {
            countryField = countryHolder.closest('.o-form-group-inner');
        }
        const cityField = document.querySelector('[data-field-filter="cities"]').closest('.o-form-dropdown_input');
        const provincesField = document.querySelector('[data-field-filter="provinces"]').closest('.o-form-dropdown_input');
        setTimeout(() => {
            if (country == null && countryHolder != null) {
                countryField.querySelector('input').value = 'Philippines';
                countryField.querySelector('[data-select-value="Philippines"]').classList.add('active');
                country = 'Philippines';
            }

            if (country.toLowerCase() == 'philippines' || country.toLowerCase() == 'united states') {
                cityField.classList.remove('hide-dropdown');
                provincesField.classList.remove('hide-dropdown');
            } else {
                cityField.classList.add('hide-dropdown');
                provincesField.classList.add('hide-dropdown');
            }

            _self.currentCountry = country;
            
            $.ajax({
                type: 'GET',
                url: `${this.siteUrl}/populate.php?fetch-country=${country}`,
                success: (result => {
                    const parsedData = JSON.parse(result);
                    for (const item in parsedData) {
                        let toHtml = '';
                        let filterElem = document.querySelector(`[data-field-filter="${item}"]`);
                        if (filterElem.closest('.o-form-group-inner') != null) {
                            filterElem = filterElem.closest('.o-form-group-inner');
                        } else if (filterElem.closest('.o-form-group') != null) {
                            filterElem = filterElem.closest('.o-form-dropdown_input');
                        }
                        filterElem.querySelector('input').value = '';

                        if (parsedData[item].length) {
                            parsedData[item].forEach(data => {
                                toHtml += `<li class="[ u-df-mb ]" data-select-value="${data.name}">
                                        <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                            <h5 class="h5">${data.name}</h5>
                                        </div>
                                    </li>`;
                            });
                        } else {
                            toHtml += `<li class="[ u-df-mb ]">
                                    <div class="o-form-dropdown_input--item [ u-df-mb u-df-mb-fd-c u-df-mb-jc-c ]">
                                        <h5 class="h5">No Data</h5>
                                    </div>
                                </li>`;
                        }

                        let jQFilterElem = $(`[data-field-filter="${item}"]`);
                        if (filterElem.closest('.o-form-group-inner') != null) {
                            jQFilterElem.closest('.o-form-group-inner').find('ul').html(toHtml);
                        } else if (filterElem.closest('.o-form-group') != null) {
                            jQFilterElem.closest('.o-form-dropdown_input').find('ul').html(toHtml);
                        }
                        filterElem.querySelectorAll('ul li').forEach(elem => {
                            elem.addEventListener('click', function() {
                                _self.initSelectValue(this);
                            });
                        });
                    }
                })
            });
        }, 200);
    }
    
    populateAddress(addressId) {
        $.ajax({
            type: 'GET',
            url: `${this.siteUrl}/populate-address.php?fetch-address=${addressId}`,
            success: (result => {
                const parsedData = JSON.parse(result);
                document.querySelector('[data-populate-catcher="address"]').innerText = parsedData.address;
            })
        });
    }

    fetchOrderDetails () {
        let _self = this;
        _self.checkOrderDetails.forEach(elem => {
            elem.addEventListener('click', function () {
                $.ajax({
                    type: 'GET',
                    url: `${this.siteUrl}/populate-order.php`,
                    success: (result => {
                        _self.toggleModal(true, 'order-details');
                        const parsedData = JSON.parse(result);
                        const orderDetails = document.querySelector('[data-modal-catcher="order-details"]');
                        const orderDetailsList = orderDetails.querySelector('.order-detail_list');
                        if (parsedData.order_details.length) {
                            let toHtml = '';
                            parsedData.order_details.forEach(data => {
                                toHtml += `
                                    <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6">${data.title}</h6>
                                    </li>
                                `;
                                
                                if (data.options && data.options.length) {
                                    data.options.forEach(inData => {
                                        toHtml += `
                                            <li class="[ u-df-mb u-df-mb-jc-sb ]">
                                                <span>${inData.name}</span>
                                                <span>${inData.qty}</span>
                                                <span>P ${inData.price.toFixed(2)}</span>
                                            </li>
                                        `;
                                        if (inData.options && inData.options.length) {
                                            inData.options.forEach(dpData => {
                                                toHtml += `
                                                    <li class="inner [ u-df-mb u-df-mb-jc-sb ]">
                                                        <span>${dpData.name}</span>
                                                    </li>
                                                `;
                                            });
                                        }
                                    });
                                }

                                toHtml += `
                                    <li class="subtotal [ u-df-mb u-df-mb-jc-sb ]">
                                        <h6 class="h6">Subtotal</h6>
                                        <h6 class="h6">P ${data.total.toFixed(2)}</h6>
                                    </li>
                                `;
                            });

                            $(orderDetailsList).html(toHtml);
                        }

                        const orderSummaryDetails = orderDetails.querySelectorAll('[data-catcher-order]');
                        if (orderSummaryDetails.length) {
                            orderSummaryDetails.forEach(elem => {
                               const val = elem.getAttribute('data-catcher-order');
                               if (val == 'subtotal') {
                                   elem.innerText = `P ${parsedData.subtotal.toFixed(2)}`;
                               }
                               if (val == 'total') {
                                   elem.innerText = `P ${parsedData.grand_total.toFixed(2)}`;
                               }
                               if (val == 'charges') {
                                   elem.innerText = `P ${parsedData.extra_charges.toFixed(2)}`;
                               }
                            });
                        }
                        
                    })
                });
            });
        });
    }

    setDropdownPaginate() {
        const dropdownPaginate = document.querySelector('[data-page="getter"]');
        if (dropdownPaginate != null) {
            const paginateItems = dropdownPaginate.closest('.o-form-group').querySelectorAll('li');
            setTimeout(() => {
                paginateItems.forEach(elem => {
                    elem.addEventListener('click', function (e) {
                        e.stopImmediatePropagation();
                        const paginateval = elem.getAttribute('data-select-main');
                        document.querySelector(`[data-paginate="${paginateval}"]`).click();
                    });
                });
            }, 1000);
        }
    }

    hidePages() {
        let _self = this;
        if (window.screen.width < 769) {
            for(let i = 1; i <= _self.numberOfPages; i++) {
                const pageElem =  document.querySelector(`[data-paginate="${i}"]`);
                if (pageElem != null) {
                    pageElem.classList.add('hide');
                }
            }
            let pageShow = _self.currentPage - 2;

            for(let i = 1; i <= 5; i++) {
                const pageElem = document.querySelector(`[data-paginate="${pageShow}"]`);
                if (pageElem != null) {
                    pageElem.classList.remove('hide');
                }
                pageShow++;
            }
        }
    }

    validateDropdown(elem, bool) {
        let _self = this;
        let validateDropdown = elem.parentNode.previousElementSibling;
        if (elem.type == 'text') {
            validateDropdown = elem;
        }
        if(validateDropdown.getAttribute('data-validate-dropdown') != null) {
            validateDropdown.setAttribute('data-validate-dropdown', bool);
        }
        _self.checkFormValidation(elem);
    }

    init(){
        this.getElements();
        this.bindElements();
    }
}