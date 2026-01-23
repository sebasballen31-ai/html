import { canvas, context } from "./constants.js";
import { saveState } from "./history.js";

export const resize = (element) => {
    element.width = window.innerWidth - 10;
    element.height = window.innerHeight - 80;
};

export function draw(x, y, color, size) {
    context.lineWidth = size;
    context.lineCap = "round";
    context.strokeStyle = color;
    context.lineTo(x - canvas.offsetLeft, y - canvas.offsetTop);
    context.stroke();
}
