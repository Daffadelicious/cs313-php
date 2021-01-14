function myAlert() {
    alert("Clicked!");
}

function changeColor() {
    userColor = document.getElementById("colorInput").value;
    switch (userColor.toLowerCase()) {
        case 'red':
            document.getElementById("div1").style.backgroundColor = "red";
            document.getElementById("div1").style.color = "white";
            break;

        case 'orange':
            document.getElementById("div1").style.backgroundColor = "orange";
            document.getElementById("div1").style.color = "black";
            break;

        case 'yellow':
            document.getElementById("div1").style.backgroundColor = "yellow";
            document.getElementById("div1").style.color = "black";
            break;

        case 'green':
            document.getElementById("div1").style.backgroundColor = "green";
            document.getElementById("div1").style.color = "white";
            break;

        case 'blue':
            document.getElementById("div1").style.backgroundColor = "blue";
            document.getElementById("div1").style.color = "white";
            break;

        case 'purple':
            document.getElementById("div1").style.backgroundColor = "purple";
            document.getElementById("div1").style.color = "white";
            break;
        
        case 'pink':
            document.getElementById("div1").style.backgroundColor = "pink";
            document.getElementById("div1").style.color = "black";
            break;

        default:
            alert("Sorry, please try another color.");
            document.getElementById("div1").style.backgroundColor = "#023047";
            document.getElementById("div1").style.color = "white";
            break;
    }
}