function handleclick(abc, obj) {
    let circle = document.querySelector(".circle");
    obj.classList.replace("card", "card-hide");
    circle.classList.replace("circle", "circle-hide");
    let newCard = document.getElementById(`${Number(obj.id) + 1}`);
    let newCircle = document.getElementById(`${Number(circle.id) + 11}`);
    if (newCard === null) {
        document.getElementById("1").classList.replace("card-hide", "card");
        document
            .getElementById("11")
            .classList.replace("circle-hide", "circle");
    } else {
        newCard.classList.replace("card-hide", "card");
        newCircle.classList.replace("circle-hide", "circle");
    }
}
