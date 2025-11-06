function sendMessage() {
    let input = document.getElementById("chatInputData").value;
    let chat = document.querySelector("#chatWindowResources");
    let newMessage = document.createElement("div");
    newMessage.classList.add("message", "Krzysztof");
    newMessage.innerHTML = `<img src="Krzysztof.jpg" alt="Krzysztof Łukasiński"><p>${input}</p>`;
    chat.appendChild(newMessage);
    document.getElementById("chatInputData").value = "";



}