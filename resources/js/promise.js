window.Promise = window.Promise || {};

Promise.create = function() {
    const promise = new Promise((resolve, reject) => {
        this.temp_resolve = resolve;
        this.temp_reject = reject;
    });

    promise.resolve = this.temp_resolve;
    promise.reject = this.temp_reject;

    delete this.temp_resolve;
    delete this.temp_reject;

    return promise;
};
