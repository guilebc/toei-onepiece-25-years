export default () => ({
    days: 0,
    hours: 0,
    minutes: 0,
    seconds: 0,

    interval: null,

    init() {
        this.endTime = new Date(2024, 5, 31, 23, 59, 59)
            .getTime();

        this.update();

        this.interval = window.setInterval(() => this.update(), 1000);
    },

    update() {
        const now = new Date().getTime();
        const distance = this.endTime - now;

        this.days = Math.floor(distance / (1000 * 60 * 60 * 24));
        this.hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        this.minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        this.seconds = Math.floor((distance % (1000 * 60)) / 1000);

        if(distance <= 0) {
            window.clearInterval(this.interval);
        }
    }
})
