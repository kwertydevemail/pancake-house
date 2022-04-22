//for redirection on the other brands modal
export class SetMenuLink{
    constructor(){
        this.max;
        this.sideBarList
        this.mainContent;
    }

    getElements(){
        this.max = document.querySelector('.js-max');
        this.sideBarList = document.querySelectorAll('.js-tabSidebar li');
        this.mainContent = document.querySelectorAll('.c-product-content_panel');
    }

    getTriggeredTabLink(){
        let link = window.location.search;
        if(link && this.max){
            let triggeredLink = window.location.search.slice(3);
            if(triggeredLink != 'empty'){
                this.sideBarList.forEach((child) => {
                    if(child.dataset.triggerLayout == triggeredLink){
                        child.classList.add('active');
                    }else{
                        child.classList.remove('active');
                    }
                })
                this.mainContent.forEach((content) => {
                    if(content.dataset.targetLayout == triggeredLink){
                        content.classList.add('active');
                    }else{
                        content.classList.remove('active');
                    }
                })
            }  
            this.scrollToSection();
        }
    }

    scrollToSection(){
        document.getElementById('product').scrollIntoView();
    }

    init(){
        this.getElements();
        this.getTriggeredTabLink();
    }
}