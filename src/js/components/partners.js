export class Partners {
    constructor() {
        this.clubs = [];
        this.clubsAsset = [];
    }

    getElements() {
        this.clubs = document.querySelectorAll('[data-club-holder="main"] .c-partners-club_panel');
        this.clubsAsset = document.querySelectorAll('[data-club-holder="asset"] .c-partners-club_panel');
    }

    bindElements() {
        if (screen.width < 540 && this.clubs.length) {
            this.clubs.forEach((elem, key) => {
                if (key == 0 || key == 15) {
                    elem.remove();
                }
                if (key == 7) {
                    let div = document.createElement('div');
                    div.classList.add('c-partners-club_panel');
                    elem.parentNode.insertBefore(div, elem.nextSibling)
                }
            });

            this.clubsAsset.forEach((elem, key) => {
                if (key > 5) {
                    elem.remove();
                }
            });
        }
    }

    init() {
        this.getElements();
        this.bindElements();
    }
}