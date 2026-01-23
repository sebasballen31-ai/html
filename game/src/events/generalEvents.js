import { canvas, clearButton, download } from "../constants.js";
import { clearCanvas } from "../events/drawEvents.js";

export const initGeneralEvents = () => {
    canvas.addEventListener("contextmenu", e => e.preventDefault());
    document.addEventListener("keydown", e => {
        if (e.code === "KeyC" || e.code === "Backspace") {
            const respuesta = confirm("Quieres limpiar tu dibujo?");
            if (respuesta === true) {
                clearCanvas();
            }
        }
    });

    clearButton.addEventListener("click", clearCanvas);
    download.addEventListener("click", e => {
        const image_url = canvas.toDataURL("image/jpg");
        const a = document.createElement("a");
        a.href = image_url;
        a.download = "dibujo.jpg";
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    });
};
