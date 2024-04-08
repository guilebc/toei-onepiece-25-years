export default () => ({
    video: null,
    playButton: null,

    playing: false,

    init() {
        this.video = this.$refs.video;
        this.playButton = this.$refs.playButton;

        this.playing = false;

        this.video.volume = .5;
    },

    toggle() {
        if(this.playing) {
            this.video.pause();
        } else {
            this.video.play();
        }
    },

    onPlay() {
        this.playing = true;
        this.video.muted = false;
        this.playButton.classList.add('opacity-0');
    },

    onPause() {
        this.playing = false;
        this.playButton.classList.remove('opacity-0');
    },

    onEnded() {
        this.playing = false;
        this.playButton.classList.remove('opacity-0')
    },
});
