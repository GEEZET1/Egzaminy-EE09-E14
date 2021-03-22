function buttonChange(button_name) {
    document.querySelectorAll("button")
        .addEventListener("click", changeText(button_name))
}

function changeText(button_name) {
    let textSize = document.getElementById(
        "textSize").value;
    let textStyle = document.getElementById(
        "list-select").value;
    let textColor = button_name;

    document.getElementById(
        "textToChange").style.fontSize = `${textSize}%`;
    document.getElementById(
        "textToChange").style.fontStyle = textStyle;
    document.getElementById(
        "textToChange").style.color = textColor;
}