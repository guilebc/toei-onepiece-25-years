export default ({id}) => ({
    init() {
        this.$dispatch('add', {
            element: this.$refs.player,
            id
        });
    }
});


