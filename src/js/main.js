// Import your JS components here
import { product } from './components/product';
import { header } from './components/header';
import { login } from './components/login';
import { forgotpassword } from './components/forgotpassword';
import { Accordion } from './components/accordion';
import { CaptchaGenerator } from './components/captchaGenerator';
import { slider } from './components/slider';
import { Modal } from './components/modal';
import { YouDoYou } from './components/youDoYou';
import { Partners } from './components/partners';
import { TimePicker } from './components/timePicker';
import { HideSpecificModal } from './components/hideSpecificModal';
import { SetMenuLink } from './components/setMenuLink';
class App {
  constructor() {
    this.components = [];
  }

  component(component) {
    this.components.push(component);
  }

  boot() {
    this.components.forEach((component) => component.init());
  }
}

const app = new App();
// Push imported JS to component variable using .component method
app.component(new product());
app.component(new header());
app.component(new login());
app.component(new forgotpassword());
app.component(new Accordion());
app.component(new CaptchaGenerator());
app.component(new slider());
app.component(new Modal());
app.component(new YouDoYou());
app.component(new Partners());
app.component(new TimePicker());
app.component(new HideSpecificModal());
app.component(new SetMenuLink());

document.addEventListener("DOMContentLoaded", () => app.boot());