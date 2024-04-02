import { Livewire } from '../../vendor/livewire/livewire/dist/livewire.esm';

export default () => ({
    init() {
        if(window.turnstile) {
            window.turnstile.render('.cf-turnstile');
        }

        Livewire.on('post-submitted', (event) => {
            if(window.turnstile) {
                window.turnstile.reset('.cf-turnstile');
            }
        });
    },
});
