const form = document.querySelector("form"),
statusTxt = form.querySelector(".button-area span");

form.onsubmit = (e) => {
    e.preventDefault(); // preventing form submitting
    statusTxt.style.display = "block";

    let xhr = new XMLHttpRequest(); // creating new xml object
    xhr.open("POST", "message.php", true); // sending post request to message.php file
    xhr.onload = () => { // once ajax loaded
        if (xhr.readyState == 4 && xhr.status == 200) { // if ajax response status is 200 & read status is 4 it means there is no error
            let response = xhr.response; // storing ajax response in a response variable
            console.log(response);
            statusTxt.innerText = response;
        }
    }
    let formData = new FormData(); // creating a new FormData obj. This obj is used to send form data
    xhr.send();
    
}

