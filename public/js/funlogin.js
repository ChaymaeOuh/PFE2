const hello = () => {
    const button1 = document.querySelector(".userbtn");
    const signup = document.querySelector(".usertab");

    button1.addEventListener("click", () => {
        //animation
        signup.classList.toggle("show");
    });
};
hello();
