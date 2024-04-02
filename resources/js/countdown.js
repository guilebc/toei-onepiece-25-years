import dayjs from "dayjs";

export default ({until}) => ({
    days: 0,
    hours: 0,
    minutes: 0,
    seconds: 0,

    interval: null,

    init() {
        this.endTime = dayjs(until).unix();

        this.update();

        this.interval = window.setInterval(() => this.update(), 1000);
    },

    update() {
        const now = dayjs().unix();
        const distance = this.endTime - now;

        this.days = Math.floor(distance / (60 * 60 * 24));
        this.hours = Math.floor((distance % (60 * 60 * 24)) / (60 * 60));
        this.minutes = Math.floor((distance % (60 * 60)) / 60);
        this.seconds = Math.floor(distance % 60);

        if(distance <= 0) {
            window.clearInterval(this.interval);
        }
    }
})
