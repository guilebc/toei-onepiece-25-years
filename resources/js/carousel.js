import Swiper from "swiper";
import {EffectFade, Pagination} from "swiper/modules";

export default () => ({

    cursorCoords: {},
    paginationCoords: {},

    currentIndex: 0,

    init() {
        this.swiper = new Swiper(this.$refs.swiper, {
            modules: [Pagination, EffectFade],
            effect: 'fade',
        });

        this.update();
    },

    update() {
        this.cursorCoords = this.$refs.cursor.getBoundingClientRect();
        this.paginationCoords = this.$refs.pagination.getBoundingClientRect();
        this.caseSize = this.paginationCoords.width / 5;
        this.$refs.cursor.style.transform = "translateX(" + ((this.caseSize * this.currentIndex) + ((this.caseSize - this.cursorCoords.width) / 2)) + "px)";
    },

    slideTo(index) {
        this.swiper.slideTo(index);
        this.currentIndex = index;

        this.update();
    }
});
