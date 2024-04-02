import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import {Fancybox} from "@fancyapps/ui";
import countdown from "./countdown.js";
import carousel from "./carousel.js";
import captcha from "./captcha.js";

Alpine.data('countdown', countdown);
Alpine.data('carousel', carousel);
Alpine.data('captcha', captcha);

Fancybox.bind('[data-fancybox]');
Livewire.start();
