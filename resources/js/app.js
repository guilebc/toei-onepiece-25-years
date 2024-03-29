import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/effect-fade';

import { Livewire, Alpine } from '../../vendor/livewire/livewire/dist/livewire.esm';
import {Fancybox} from "@fancyapps/ui";
import countdown from "./countdown.js";
import carousel from "./carousel.js";

Alpine.data('countdown', countdown);
Alpine.data('carousel', carousel);
Fancybox.bind('[data-fancybox]');

Livewire.start();

// https://placehold.co/120x160.png
