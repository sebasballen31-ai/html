import { context } from "./constants.js";
import { draw } from "./utils.js";

const dataLoaded = fetch("./data.json").then(res => res.json());

export function defaultDraw(x = 0, y = 0) {
    dataLoaded.then(data => {
        for (const element of data) {
            const color = element.color;
            const size = element.size;
            const coordenadas = element.coordenadas;
            context.beginPath();

            for (const coordenada of coordenadas) {
                draw(x + coordenada.x, y + coordenada.y, color, size);
            }
        }
    });
}
