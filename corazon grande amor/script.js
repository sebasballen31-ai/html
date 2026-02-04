const canvas = document.getElementById("heartCanvas");
const ctx = canvas.getContext("2d");
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

const baseX = canvas.width / 2;
const baseY = canvas.height / 1.6;
const particles = [];
const numParticles = 1000;

// Función forma del corazón
function heartShape(t) {
  const x = 16 * Math.pow(Math.sin(t), 3);
  const y =
    13 * Math.cos(t) -
    5 * Math.cos(2 * t) -
    2 * Math.cos(3 * t) -
    Math.cos(4 * t);
  return { x, y };
}

// Crear partículas del corazón
for (let i = 0; i < numParticles; i++) {
  const t = Math.random() * Math.PI * 2;
  const pos = heartShape(t);
  particles.push({
    x: pos.x * 20,
    y: pos.y * 20,
    size: Math.random() * 2 + 0.5,
    alpha: Math.random() * 0.8 + 0.2,
  });
}

// Animar corazón girando 3D
function animateHeart() {
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  const time = Date.now() * 0.001;
  const angle = time * 0.4;

  ctx.save();
  ctx.translate(baseX, baseY);
  ctx.rotate(angle * 0.2);

  for (let p of particles) {
    const scale = Math.sin(time + p.x * 0.02) * 0.2 + 1.2;
    const depth = Math.sin(angle + p.y * 0.05) * 20;
    const glow = ctx.createRadialGradient(
      p.x,
      p.y,
      0,
      p.x,
      p.y,
      12 + depth
    );
    glow.addColorStop(0, `rgba(0, 153, 255, ${p.alpha})`);
    glow.addColorStop(1, "rgba(0, 0, 40, 0)");

    ctx.fillStyle = glow;
    ctx.beginPath();
    ctx.arc(p.x * scale, -p.y * scale, p.size, 0, Math.PI * 2);
    ctx.fill();
  }

  ctx.restore();

  requestAnimationFrame(animateHeart);
}

animateHeart();

// 🌧️ Lluvia infinita de "hola 💙"
const container = document.getElementById("teAmoContainer");

function lluviaTeAmo() {
  const teAmo = document.createElement("div");
  teAmo.classList.add("hola");
  teAmo.textContent = "hola 💙";
  teAmo.style.left = Math.random() * 100 + "vw";
  teAmo.style.animationDuration = 3 + Math.random() * 4 + "s";
  container.appendChild(teAmo);
  setTimeout(() => teAmo.remove(), 7000);
}

setInterval(lluviaTeAmo, 100);

window.addEventListener("resize", () => {
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
});
