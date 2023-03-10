<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>


<script>
    const words = ['кот', 'собака', 'школа', 'обувь', 'доска', 'ноутбук'];
    const randomWord = words[Math.floor(Math.random() * words.length)].split(""); //загаданное слово
    let quantityLetters = randomWord.length; // кол-во букв
    let count = 0; // кол-во попыток
    let secretWord = []; //секретное слово

    for (let i=0; i< randomWord.length; i++){
        secretWord.push(' - ');
    }
    alert(secretWord.join(" "));
    alert(quantityLetters + "букв");
    while(true) {
        const letter = checkLetter();

        if(!letter) {
            alert('Игра закончена');
            break;
        }


        count++;
        let letterPositions = findLetterInWord(letter, randomWord, secretWord)

        if (letterPositions.length === 0) {
            alert('Такой буквы нет!');
        } else {
            for (let i = 0; i < letterPositions.length; i++) {
                secretWord[letterPositions[i]] = letter;
                quantityLetters--;
            }
            alert("Осталось " + quantityLetters + "букв");

            alert(secretWord.join(" "));
        }

        if(quantityLetters === 0) {

            alert("U r winner. Tried " + count + "times");
            break;
        }


    }

    function findLetterInWord(letter, word) {
        let wordPositions = []; //позиции букв

        for (let i=0; i< word.length; i++) {
            if (word[i] === letter) {
                wordPositions.push(i);
            }
        }

        return wordPositions;
    }


     function checkLetter () {
        let letter = "";
        while(true) {
            letter = prompt("input letter: ");

            if(Number.isInteger(letter) || letter.length > 1) {
                alert("Вы ввели цифру или несколько букв, введите коректные данные!")

            }else {
                break;
            }
        }

        return letter;
    }
</script>
</body>
</html>
