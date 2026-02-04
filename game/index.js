//1. configuracion del dibujo
const canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext("2d");
const marcador = document.getElementById("puntos");

ctx.fillstyle = "red";
const size = 20;

const movements = [
    [+size, +size],
    [+size, +size],
    [+size, +size],
    [+size, +size],
    [+size, +size],
    [+size, +size],
    [+size, +size],
    [+size, +size],
    [+size, +size],
];
let movement = movements[0];

let x = 20;
let y = 10;
for (const movement of movements) {
    const [moveX, moveY] = movement;
    x += moveX;
    y += moveY;
    ctx.fillRect(x, y, size, size);
}
const clean = () => {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
};

document.addEventListener("keydown", e => {
    if (e.code === "backspace") {
        clean();
    }
});

const cleanbutton = document.getElementById("clean");
cleanbutton.addEventListener("click", e => {
    clean()
});
