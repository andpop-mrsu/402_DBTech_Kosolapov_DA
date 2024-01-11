let View = {
    displayMessage: function(message) {
        let messageElement = document.getElementById('message');
        let attemptsElement = document.getElementById('attempts');
        if (messageElement && attemptsElement) {
            messageElement.innerText = message;
            attemptsElement.innerText = "Осталось попыток: " + (Model.maxAttempts - Model.attempts);
        } else {
            console.error('Element with id "message" not found');
        }
    },

    resetInput: function() {
        document.getElementById('userInput').value = '';
    }
};