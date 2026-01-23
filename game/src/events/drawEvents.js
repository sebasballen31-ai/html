import {
    canvas,
    context,
    colorPicker,
    brushSize,
} from "../constants.js";
import { saveState } from "../history.js";
import { draw } from "../utils.js";

let groupIndex = 0
let painting = false
let coordenadas = []

function drawEvent(e) {
    if (!painting) return;

    const leftClick = e.which === 1;
    const rightClick = e.which === 3;

    if (leftClick) {
        coordenadas[groupIndex] ||= {
            color: colorPicker.value,
            size: brushSize.value,
            coordenadas: [],
        };
        coordenadas[groupIndex].coordenadas.push({
            x: e.clientX,
            y: e.clientY,
        });
        draw(e.clientX, e.clientY, colorPicker.value, brushSize.value);
    }

    if (rightClick) {
        context.clearRect(
            e.clientX - canvas.offsetLeft,
            e.clientY - canvas.offsetTop,
            brushSize.value,
            brushSize.value
        );
    }
}

function startPosition(e) {
    if (e.which === 1 || e.which === 3) {
        saveState();
        groupIndex = coordenadas.length;
        painting = true;
        context.beginPath();
        context.moveTo(
            e.clientX - canvas.offsetLeft,
            e.clientY - canvas.offsetTop
        );
    }
}

function endPosition() {
    painting = false;
    context.beginPath();
}


export function clearCanvas() {
    groupIndex = 0;
    coordenadas = [];
    painting = false;
    saveState();
    context.clearRect(0, 0, canvas.width, canvas.height);
}


export const initDrawEvents = () => {
    canvas.addEventListener("mousedown", startPosition);
    canvas.addEventListener("mouseup", endPosition);
    canvas.addEventListener("mousemove", drawEvent);
};
