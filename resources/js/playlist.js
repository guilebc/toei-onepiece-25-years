export default () => ({
    videos: [],

    init() {
        window.onYouTubePlayerAPIReady = () => this.youtubeAPILoaded();
        this.createElementIframeAPI();
    },

    youtubeAPILoaded() {
        this.videos.forEach((video) => {
            video.yt = new YT.Player(video.element, {
                height: '100%',
                width: '100%',
                playerVars: {
                    controls: 0
                },
                videoId: video.id
            });
        });
    },

    createElementIframeAPI() {
        const tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        const firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    },

    add({detail}) {
        this.videos.push(detail);
    },

    play({detail}) {
        const video = this.videos.find((video, index) => index === detail.index);

        if(video && video.yt) {
            this.stopAll(detail.index);
            video.yt.playVideo();
        }
    },

    stopAll(i) {
        this.videos.forEach((video, index) => index !== i && video.yt.stopVideo());
    }
});
