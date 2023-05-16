let circle = document.querySelector("circle");
function handleclick(abc, obj) {
    obj.classList.replace("card", "card-hide");

    let newCard = document.getElementById(`${Number(obj.id) + 1}`);

    if (newCard === null) {
        document.getElementById("1").classList.replace("card-hide", "card");
    } else {
        newCard.classList.replace("card-hide", "card");
    }
}
