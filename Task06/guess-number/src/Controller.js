document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('startButton').addEventListener('click', function() {
        document.getElementById('welcome-screen').style.display = 'none';
        document.getElementById('game-screen').style.display = 'block';
        Model.resetGame();
        Model.generateNumber();
        View.resetInput();
        View.displayMessage("Введите число:");

        let userInput = document.getElementById('userInput');
        userInput.min = 1;
        userInput.max = Model.maxNumber;
    });

    document.getElementById('checkButton').addEventListener('click', function() {
        let userInput = parseInt(document.getElementById('userInput').value);
        if (isNaN(userInput)) {
            View.displayMessage("Пожалуйста, введите число");
        } else {
            let message = Model.checkNumber(userInput);
            if (Model.attempts >= Model.maxAttempts) {
                View.displayMessage("Попытки исчерпаны. Игра окончена.");
            } else {
                View.displayMessage(message);
            }
        }
    });

    document.getElementById('exitButton').addEventListener('click', function() {
        document.getElementById('game-screen').style.display = 'none';
        document.getElementById('welcome-screen').style.display = 'block';
        Model.resetGame();
        View.resetInput();
    });
});