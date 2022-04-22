import { tns } from "tiny-slider/src/tiny-slider"

export class slider {
    constructor() {
        this.productSlider = null;
        this.prevBtn = null;
        this.nextBtn = null;
    }
    
    getElements() {
        this.productSlider = document.querySelector('.products-carousel');
        this.prevBtn = document.querySelector('.slider-buttons__prev');
        this.nextBtn = document.querySelector('.slider-buttons__next');
    }

    bindElements() {

        if(this.productSlider != null) {
            let slider = tns({
                container: this.productSlider,
                items: 4,
                slideBy: 4,
                arrowKeys: true,
                nav: false,
                prevButton: this.prevBtn,
                nextButton: this.nextBtn,
                loop: true,
                responsive: {
                    "769": {
                      items: 4,
                      slideBy: 1,
                    },
                }
            });
        }
    }
    
    init(){
        this.getElements();
        this.bindElements();
    }
}