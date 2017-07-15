app.service('FlashService', function() {
    this.Success = function (message) {
                return {message: message,
                type: 'success'}
    }
        this.Error = function (message) {
                return {message: message,
                type: 'error'}
    }
});