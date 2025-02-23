class GameMessage extends HTMLElement {
    constructor() {
        super();
        this.attachShadow({ mode: "open" });
        this.shadowRoot.innerHTML = `<p><slot></slot></p>`;
    }
}
customElements.define("game-message", GameMessage);

class MemorySquare extends HTMLElement {
    constructor() {
        super();
        this.color = this.getAttribute("color");
        this.attachShadow({ mode: "open" });
        this.shadowRoot.innerHTML = `
            <style>
                div {
                    width: 100px;
                    height: 100px;
                    background-color: ${this.color};
                    border-radius: 10px;
                    cursor: pointer;
                    opacity: 1;
                    transition: opacity 0.3s;
                }
            </style>
            <div id="square"></div>
        `;
        this.square = this.shadowRoot.querySelector("#square");
        this.square.addEventListener("click", () => this.handleClick());
    }
    highlight() {
        this.square.style.opacity = "0.5";
        setTimeout(() => {
            this.square.style.opacity = "1";
        }, 500);
    }
    handleClick() {
        if (isPlaying) return;
        userSequence.push(this.color);
        this.highlight();
        checkUserInput();
    }
}
customElements.define("memory-square", MemorySquare);

var sequence = [];
var userSequence = [];
var colors = ["red", "blue", "green", "yellow"];
var isPlaying = false;

function getRandomColor() {
    return colors[Math.floor(Math.random() * colors.length)];
}

async function playSequence() {
    isPlaying = true;
    userSequence = [];
    document.getElementById("message").innerText = "Observa la secuencia";
    for (let color of sequence) {
        await new Promise(resolve => {
            document.querySelector(`memory-square[color='${color}']`).highlight();
            setTimeout(resolve, 1000);
        });
    }
    isPlaying = false;
    document.getElementById("message").innerText = "Tu turno";
}

function startGame() {
    sequence = [];
    userSequence = [];
    for (var i = 0; i < 3; i++) {
        sequence.push(getRandomColor());
    }
    setTimeout(playSequence, 1000);
}

function checkUserInput() {
    if (userSequence[userSequence.length - 1] !== sequence[userSequence.length - 1]) {
        document.getElementById("gameScreen").style.display = "none";
        document.getElementById("endScreen").style.display = "block";
        document.getElementById("resultMessage").innerText = "¡Perdiste! Inténtalo de nuevo.";
        return;
    }
    if (userSequence.length === sequence.length) {
        document.getElementById("gameScreen").style.display = "none";
        document.getElementById("endScreen").style.display = "block";
        document.getElementById("resultMessage").innerText = "¡Ganaste!";
    }
}

document.getElementById("startButton").addEventListener("click", startGame);
document.getElementById("showGame").addEventListener("click", function () {
    document.getElementById("startScreen").style.display = "none";
    document.getElementById("gameScreen").style.display = "block";
});
document.getElementById("restartGame").addEventListener("click", function () {
    document.getElementById("endScreen").style.display = "none";
    document.getElementById("gameScreen").style.display = "block";
    document.getElementById("message").innerText = "Presiona Iniciar para jugar";
});
