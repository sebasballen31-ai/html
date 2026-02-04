import { canvas, context } from "./constants.js";

let undoStack = [];
let redoStack = [];

function restoreState(from, to) {
    if (from.length === 0) return;

    to.push(canvas.toDataURL());
    const img = new Image();
    img.src = from.pop();
    img.onload = () => {
        context.clearRect(0, 0, canvas.width, canvas.height);
        context.drawImage(img, 0, 0);
    };
}

const undoBtn = document.getElementById("undoBtn");
const redoBtn = document.getElementById("redoBtn");

export function saveState() {
    undoStack.push(canvas.toDataURL());
    redoStack = [];
}

// ↩
const undo = () => restoreState(redoStack, undoStack);

// ↪
const redo = () => restoreState(undoStack, redoStack);

export const initHistoryEvents = () => {
    undoBtn.addEventListener("click", () => {
        redo();
    });

    redoBtn.addEventListener("click", () => undo());

    document.addEventListener("keydown", e => {
        if (e.ctrlKey && e.key === "z") redo();
        if (e.ctrlKey && e.key === "y") undo();
    });
};
