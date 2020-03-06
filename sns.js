"use strict"


let fuck = () => {

    let message = document.getElementById("message").value;
    console.log(message);

    fetch("http://localhost/php-api/fuck.php", {
            method: "POST",
            headers: {
                "Content-Type": "application/json;charset=utf-8"
            },
            // mode: "cors",
            // credentials: "same-origin",
            body: JSON.stringify({
                "message": message
            })
        })
        .then(response => response.json())
        .then(json => {
            console.log(json)

        })
}