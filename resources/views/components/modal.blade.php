<div x-cloak x-show="open" class="relative z-50" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div x-transition.opacity class="fixed inset-0 bg-gray-500 bg-opacity-75"></div>
    <div x-show="open" x-transition.opacity class="fixed inset-0 z-10 w-screen overflow-y-auto">
        <div class="min-h-full flex justify-center items-center p-3">
            <div @click.outside="open = false" class="relative overflow-hidden rounded-lg bg-white text-left shadow-xl w-full max-w-5xl py-6">
                <button type="button" @click="open = false" class="absolute top-3 right-3 transition-colors hover:text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>
                </button>
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
