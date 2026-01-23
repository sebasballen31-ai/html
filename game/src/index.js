import { canvas } from "./constants.js";
import { initDrawEvents } from "./events/drawEvents.js";
import { initGeneralEvents } from "./events/generalEvents.js";
import { defaultDraw } from "./defaultDraw.js";
import { initHistoryEvents } from "./history.js";
import { resize } from "./utils.js";

/**
 * Resize Canvas
 */
resize(canvas);
window.addEventListener("resize", () => resize(canvas));

/**
 * Initialize events
 */
initDrawEvents();
initGeneralEvents();

/**
 * Initialize history events
 */
initHistoryEvents();


/**
 * Load default drawing
 */
defaultDraw(0, 0);
defaultDraw(800, 0);
defaultDraw(500, 320);