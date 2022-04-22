
export class ModalSpy {
    constructor() {
        this.spySections = []
        this.anchors = []
        this.modal = null;
        this.modalContent = null;
    }

    init() {
        this.getElements();
        if(!this.spySections){
            return;
        }
        this.bindElements();
    }

    getElements() {
        this.spySections = Array.from(document.querySelectorAll('.js-spy'));
        this.anchors = Array.from(document.querySelectorAll('a[href*="#"]'));
    }

    bindElements() {
        // document.addEventListener("load", this.onSpyListen());
        this.modal = document.querySelector('.js-spy-modal.active');
        if (this.modal == null) {
            return;
        }
        this.modalContent = this.modal.querySelector('.privacy-policy__content');
        // this.resetCheckBoxes();
        this.onClickAnchors();
        this.onScroll();
    }

    onSpyListen(selectedLocation=null) {
        let spyLocation = selectedLocation ? selectedLocation : window.location.hash
        this.spySections.forEach(element => {
            if(element.getAttribute('spy-scroll-id') == spyLocation) {
                this.scrollView(element);
            }
        });
    }
    scrollView(element) {
 
        setTimeout(()=> {
            this.modalContent.scrollTo({
                behavior: "smooth",
                left: 0,
                top: element.offsetTop - 70
            });
        }, 300); 
    }

    onClickAnchors() {
        let _self = this;
        this.anchors.forEach((element)=> {
            element.addEventListener("click", function(e) {
                e.preventDefault();
                _self.onSpyListen(element.getAttribute('href'));
            });
        });
    }

    onScroll(){
        this.modalContent.addEventListener('scroll',(element)=> {
            let scrollY = element.target.scrollTop;
            this.spySections.forEach(current => {
                const sectionHeight = current.offsetHeight;
                const sectionTop = current.offsetTop - 85;
                let sectionId = current.getAttribute("spy-scroll-id");
                if(this.modal.querySelector(`a[href*="${sectionId}"]`)){
                    if(scrollY > sectionTop &&
                        scrollY <= sectionTop + sectionHeight){
                        this.modal.querySelector(`a[href*="${sectionId}"]`).classList.add('active');
                    } else {
                        this.modal.querySelector(`a[href*="${sectionId}"]`).classList.remove('active');
                    }
                }
            });
        });

    }
}