let Model = {
    maxNumber: 500,
    maxAttempts: 15,
    generatedNumber: null,
    attempts: 0,

    generateNumber: function() {
        let max = this.maxNumber;
        this.generatedNumber = Math.floor(Math.random() * max) + 1;
    },

    resetGame: function() {
        this.attempts = 0;
        this.generatedNumber = null;
    },

    checkNumber: function(userInput) {
        if (userInput === "" || userInput === null || isNaN(userInput)) {
            return "Пожалуйста, введите число";
        }
        userInput = parseInt(userInput);
        if (userInput === this.generatedNumber) {
            return "Поздравляем! Вы угадали число";
        } else if (this.attempts >= this.maxAttempts) {
            return "Попытки исчерпаны. Игра окончена.";
        } else {
            this.attempts++;
            if (userInput > this.generatedNumber) {
                return "Загаданное число меньше";
            } else if (userInput < this.generatedNumber) {
                return "Загаданное число больше";
            }
        }
    }
};