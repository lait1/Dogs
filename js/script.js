
// отправить сообщение из формы publish

document.getElementsByClassName('form__button')[0].onclick = function() {

    var xhr = new XMLHttpRequest();

    var message = new FormData(document.forms.main);
// 2. Конфигурируем его: GET-запрос на URL 'phones.json'
    xhr.open('POST', 'http://dogs.local/function.php', false);

// 3. Отсылаем запрос
    xhr.send(message);

// 4. Если код ответа сервера не 200, то это ошибка
    if (xhr.status != 200) {
        // обработать ошибку
        alert( xhr.status + ': ' + xhr.statusText ); // пример вывода: 404: Not Found
    } else {
        // вывести результат
        var messageElem = document.createElement('div');
        messageElem.appendChild(document.createTextNode(xhr.responseText));
        document.getElementById('form').appendChild(messageElem);
        // alert( xhr.responseText ); // responseText -- текст ответа.
    }
};

