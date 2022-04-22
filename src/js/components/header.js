import { format } from 'date-fns';
import { th } from 'date-fns/locale';
import { product } from '../components/product';

export class header {
    constructor() {
        this.catchCurrentDate = null;
        this.triggerEditAddress = [];

        this.cartIc = null;
        this.cartNav = null;
        this.cartCloseBtn = null;
        this.triggerMenu = null;

        this.toggleSearch = null
        this.searchIc = null;
        this.seachNav = null;
    }
    
    getElements() {
        this.catchCurrentDate = document.querySelectorAll('[data-catcher="current-date"]');
        this.triggerEditAddress = document.querySelectorAll('[data-trigger="edit-address"]');
        this.triggerMenu = document.querySelectorAll('[data-trigger-menu]');

        this.toggleSearch =  document.querySelector('.js-search');
        this.searchIc = document.querySelector('#searchIc');
        this.searchNav = document.querySelector('#search-top-nav');
    }

    bindElements() {
        let _self = this;
        function showTime() {
            let showTimeElem = document.querySelectorAll('[data-catcher="clock"]');
            var date = new Date();
            var h = date.getHours(); // 0 - 23
            var m = date.getMinutes(); // 0 - 59
            var s = date.getSeconds(); // 0 - 59
            var session = "AM";
            
            if(h == 0){
                h = 12;
            }
            
            if(h >= 12){
                h = h - 12;
                session = "PM";
            }
            
            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;
            
            var time = h + ":" + m + ":" + s + " " + session;

            showTimeElem.forEach(elem => {
                elem.innerText = time;
                elem.textContent = time;
            });
            
            setTimeout(showTime, 1000);
        };
        showTime();

        fetch('https://extreme-ip-lookup.com/json/')
            .then( res => res.json())
            .then(response => {
                const actualTime = `${format(new Date(), 'iii, MMMM d, yyyy')}`;
                console.log(response)
                var country = ''
                if(response.country === ''){
                    country = 'Philippine Time';
                } else {
                    country = response.country;
                }
                // const countryTimeDate = `${response.country}: ${actualTime}`;
                const countryTimeDate = `${country}: ${actualTime}`;
                _self.catchCurrentDate.forEach(elem => {
                    elem.innerText = countryTimeDate;
                    elem.textContent = countryTimeDate;
                });
            });
        _self.checkHeaderHeight();
        
        window.addEventListener('resize', function () {
            _self.checkHeaderHeight();
        });

        // Search Toggle
        if(_self.toggleSearch) {
            _self.toggleSearch.addEventListener('click', function () {
                let toggleSearch = document.querySelector('#toggle-search');
                let closeSearch = document.querySelector('#close-search');

                if(toggleSearch.classList.contains('show')) {
                    toggleSearch.classList.remove('show');
                    toggleSearch.classList.add('hide');
                } else {
                    toggleSearch.classList.remove('hide');
                    toggleSearch.classList.add('show');
                }

                if(closeSearch.classList.contains('show')) {
                    closeSearch.classList.remove('show');
                    closeSearch.classList.add('hide');
                } else {
                    closeSearch.classList.remove('hide');
                    closeSearch.classList.add('show');
                }
            });
        }

        // Click Event to toggle search navigation
        if (_self.searchIc) {
            _self.searchIc.addEventListener('click',()=>{
                if(_self.searchNav.classList.contains('active')){
                    _self.searchNav.classList.toggle('animate');
                    setTimeout(function(){
                        _self.searchNav.classList.toggle('active');
                    },300);
                }else{
                    _self.searchNav.classList.toggle("active"); 
                    setTimeout(function(){
                        _self.searchNav.classList.toggle('animate');
                    },100);
                }
                document.body.classList.toggle('opened');
            });
        }

        // Search input validation
        if (document.querySelector('#search-input')) {
            var input, a, i, div;
            input = document.getElementById("search-input");
            div = document.querySelector('#search-content');
                a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                a[i].style.display = "none";  
            }

            // validate on every input on field to filter
            document.querySelector('#search-input').addEventListener('keyup', ()=> {
                var input, filter, a, i, div, txtValue, groupInp;
                input = document.getElementById("search-input");
                filter = input.value.toUpperCase();
                div = document.querySelector('#search-content');
                groupInp = document.querySelector('#groupInp');
                a = div.getElementsByTagName("a");

                let countNone = 0;

                if(filter === '') {
                    for (i = 0; i < a.length; i++) {
                        a[i].style.display = "none";  
                        countNone = 0
                    }
                    groupInp.classList.remove('border');
                    return
                } else {
                    for (i = 0; i < a.length; i++) {
                        txtValue = a[i].textContent || a[i].innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                          a[i].style.display = "";
                          countNone++;
                        } else {
                          a[i].style.display = "none";
                        }
                      }
                }

                if(countNone !== 0) {
                    groupInp.classList.add('border');
                } else {
                    groupInp.classList.remove('border');
                }
            });
        }

        // Seatch Input for search page
        if (document.querySelector('#input-search')) {
            // Variables for products
            var a, i, div, count;
            div = document.querySelector('#item-card');
            a = div.getElementsByTagName("a");

            // Variables for store location
            var h4, o, storeDiv;
            var storeCount = 0;
            storeDiv = document.querySelector('#store-list-item');
            h4 = storeDiv.getElementsByTagName("h4");

            count = 0;
            for (i = 0; i < a.length; i++) {
                count++;  
            }
            for (o = 0; o < h4.length; o++) {
                count++;
                storeCount++;  
            }

            // Condition to show pagination on store 
            if(storeCount > 4) {
                document.querySelector('.c-store-list-paginate').classList.add('show');
                document.querySelector('.c-store-list-paginate').classList.remove('hidden');
            } else {
                document.querySelector('.c-store-list-paginate').classList.remove('show');
                document.querySelector('.c-store-list-paginate').classList.add('hidden');
            }

            document.querySelector('.text-result').innerHTML = count + ' Results';

            var url_string = window.location.href;
            var url = new URL(url_string);
            var searchParam = url.searchParams.get("name");
            
            if (searchParam !== null) {
                document.getElementById("input-search").value = searchParam;
                _self.itemFilter(count, storeDiv, i);
            }

            document.querySelector('#input-search').addEventListener('keyup', ()=> {
                _self.itemFilter(count, storeDiv, i);
            });
        }

        if (_self.triggerEditAddress.length) {
            _self.triggerEditAddress.forEach(elem => {
                elem.addEventListener('click', function () {
                    const catcher = this.getAttribute('data-trigger');
                    const catcherOut = this.parentNode.querySelector(`[data-catcher="${catcher}-out"]`);
                    const catcherIn = this.parentNode.querySelector(`[data-catcher="${catcher}-in"]`);
                    if (catcherOut.classList.contains('active')) {
                        catcherIn.classList.add('active');
                        catcherOut.classList.remove('active');
                        catcherIn.focus();
                        return;
                    }
                    catcherOut.innerHTML = catcherIn.value;
                    catcherIn.classList.remove('active');
                    catcherOut.classList.add('active');
                    
                });
            });
        }

        if (_self.triggerMenu != null) {
            _self.triggerMenu.forEach(elem => {
                elem.addEventListener('click', function (e) {
                    e.preventDefault();
                    this.cartNav = document.getElementById("cart-side-nav");
                    this.cartLink = document.getElementById("cartLink");

                    this.cartNav.classList.remove("active");
                    this.cartLink.classList.remove("active");
                    this.parentNode.classList.toggle('active');
                    const submenuElem = this.parentNode.querySelector('.active');
                    if (this.getAttribute('data-trigger-menu') == 'menu' && submenuElem != null) {
                        submenuElem.classList.remove('active');
                    }
                });
            });
        }
        fetch('/products-search.php', { headers: { "Content-Type": "application/json; charset=utf-8" }})
        .then(res => res.json()) 
        .then(response => {
            console.dir(response);
        });
    }

    itemFilter(count, storeDiv, i) {
        // Variables for product
        var input, filter, a, div, txtValue, countProduct;
        countProduct = 0;
        count = 0;
        input = document.getElementById("input-search");
        filter = input.value.toUpperCase();
        div = document.querySelector('#item-card');
        a = div.getElementsByTagName("a");

        if(document.querySelector('#store-search')) {
            // Change value of store filter
            document.querySelector('#store-search').value = input.value;
            new product().filterStoreList();
            new product().activatePaginate();
        }

        // Variables for store location
        var storeItem, o, storeDivItem, h4txtValue, countStore;
        countStore = 0;
        storeDivItem = document.querySelector('#store-list-item');
        storeItem = storeDiv.getElementsByClassName("c-store-list-stores_contacts--item");

        for (i = 0; i < a.length; i++) {
            txtValue = a[i].textContent || a[i].innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              a[i].style.display = "";
                count++;
                countProduct++;
            } else {
              a[i].style.display = "none";
            }
        }

        for (o = 0; o < storeItem.length; o++) {
            var h4txtInner = storeItem[o].querySelector(".h4").innerText;
            var h4txtContent = storeItem[o].querySelector(".h4").textContent;
            h4txtValue = h4txtContent || h4txtInner;
            if (h4txtValue.toUpperCase().indexOf(filter) > -1) {
                storeItem[o].style.display = "";
                count++;
                countStore++;
            } else {
                storeItem[o].style.display = "none";
            }
        }

        document.querySelector('.text-result').innerHTML = count + ' Results';

        // Condition if no result on products
        if (countProduct === 0) {
            document.querySelector('#product-list').style.display = "none";
        } else {
            document.querySelector('#product-list').style.display = "";
        }

        // Condition if no result on store locations
        if (countStore === 0) {
            document.querySelector('#store-list').style.display = "none";
        } else {
            document.querySelector('#store-list').style.display = "";
        }

        // Condition to show pagination on store 
        if(countStore > 4) {
            document.querySelector('.c-store-list-paginate').classList.add('show');
            document.querySelector('.c-store-list-paginate').classList.remove('hidden');
        } else {
            document.querySelector('.c-store-list-paginate').classList.remove('show');
            document.querySelector('.c-store-list-paginate').classList.add('hidden');
        }

        // Condition if no result for products and store locations
        if(count === 0) {
            document.querySelector('.no-results').style.display = "block";
        } else {
            document.querySelector('.no-results').style.display = "none";
        }
    }

    setUpMenus(){
        let _self = this;
        _self.cartIc = document.getElementById("cartIc");
        _self.cartLink = document.getElementById("cartLink");

        _self.cartNav = document.getElementById("cart-side-nav");
        _self.cartClose = document.getElementById("cart-side-close");
        if(!_self.cartIc){
            return;
        }
        _self.cartIc.addEventListener('click',()=>{
            if(_self.cartNav.classList.contains('active')){
                _self.cartNav.classList.toggle('animate');
                setTimeout(function(){
                    _self.cartNav.classList.toggle('active');
                },300);
            }else{
                _self.cartNav.classList.toggle("active"); 
                setTimeout(function(){
                    _self.cartNav.classList.toggle('animate');
                },100);
            }

            _self.cartLink.classList.toggle("active"); 
            document.body.classList.toggle('opened');
            document.querySelector('[data-trigger-menu=menu]').parentNode.classList.remove('active');
        });

        _self.cartClose.addEventListener('click',()=>{
            _self.cartNav.classList.toggle('animate');
            setTimeout(function(){
                _self.cartNav.classList.toggle('active');
                _self.cartLink.classList.toggle("active"); 
            },500);

            document.body.classList.remove('opened');
        })
    }

    checkHeaderHeight() {
        setTimeout(() => {
            const headerHeight = document.querySelector('header').offsetHeight;
            const addressAffix = document.querySelector('.c-address-affix.active');
            if(addressAffix != null && window.screen.width <= 769) {
                document.querySelector('.main-wrapper').style.paddingTop = `${headerHeight + addressAffix.offsetHeight}px`;
            }
        }, 300);
    }
    
    init(){
        this.getElements();
        this.bindElements();
        this.setUpMenus()
    }
}
