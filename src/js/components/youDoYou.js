import { tns } from "tiny-slider/src/tiny-slider"

export class YouDoYou {
    constructor() {
        this.couponContainer = null;
        this.prevBtn = null;
        this.nextBtn = null;
        this.loadMore = null;
        this.showLess;
        this.transactionItems = [];
        this.hiddenTransactionItems = [];
        
    }
    
    getElements() {
        this.couponContainer = document.querySelector('.coupon_container');
        this.prevBtn = document.querySelector('.coupon_slider-buttons__prev');
        this.nextBtn = document.querySelector('.coupon_slider-buttons__next');
        this.transactionItems = Array.from(document.querySelectorAll('.rewards-transactions-card__item'));
        this.loadMore = document.querySelector('.o-button.load-more-transactions');
        this.showLess = document.querySelector('.o-button.hide-transactions');
        this.allItems = [...this.transactionItems, ...this.hiddenTransactionItems]
    }

    bindElements() {
        this.initSlider();
        this.loadMoreTransactions();
        this.hideTransactions();
    }

    initSlider() {
        if(this.couponContainer) {
            let slider = tns({
                container: this.couponContainer,
                items: 1.18,
                slideBy: 1.18,
                arrowKeys: true,
                nav: false,
                prevButton: this.prevBtn,
                nextButton: this.nextBtn,
                loop: false,
                responsive: {
                    "1208": {
                        items: 1.35,
                        slideBy: 1.05
                    },
                }
            });
        }
    }

    loadMoreTransactions() {
        if(!this.loadMore) return;
        
        this.loadMore.addEventListener('click', (e) => {
            e.preventDefault()
            this.hiddenTransactionItems = Array.from(document.querySelectorAll('.rewards-transactions-card__item.hidden'));
            this.hiddenTransactionItems.forEach(hiddenItem => {
                hiddenItem.classList.remove('hidden')
            });

            this.loadMore.classList.add('hidden');
            this.showLess.classList.remove('hidden');

        })
    }

    hideTransactions() {
        if(!this.showLess) return;

        this.showLess.addEventListener('click', (e) => {
            e.preventDefault();

            const toHide = this.allItems.filter((item, index) => index > 4)
            toHide.forEach(item => item.classList.add('hidden'));

            this.loadMore.classList.remove('hidden');
            this.showLess.classList.add('hidden');
        })
    }
    
    init(){
        this.getElements();
        this.bindElements();
    }
}