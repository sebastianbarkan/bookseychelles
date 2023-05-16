const WELCOME_MSG = document.querySelector(".welcome-msg");

setTimeout(() => {
    WELCOME_MSG.textContent = "Tap to learn more.";
}, 2000);
console.log(WELCOME_MSG);
