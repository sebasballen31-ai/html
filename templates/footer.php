<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>

<body>
    <footer class="footer">
        <h4>Síguenos en nuestras redes sociales:</h4>
        <h4>
            <a href="tel:+573138755819">
                tel&#x1F4F1;: 3138755819
            </a>
        </h4>
        <h4>
            <a href="mailto:sebasballen31@gmail.com" target="_blank">
                &#x2728;correo: sebasballen31@gmail.com&#x2728;
            </a>
        </h4>
        <h4>Direccion:susa, cundinamarca &#x1F308;</h4>
        <div class="redes">
            <a href="https://www.instagram.com/" target="_blank" class="icon instagram">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/instagram.svg" alt="Instagram">
            </a>
            <a href="https://www.facebook.com/" target="_blank" class="icon facebook">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/facebook.svg" alt="Facebook">
            </a>
            <a href="https://www.tiktok.com/" target="_blank" class="icon tiktok">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/tiktok.svg" alt="TikTok">
            </a>
            <a href="https://wa.me/573001234567" target="_blank" class="icon whatsapp">
                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/whatsapp.svg" alt="WhatsApp">
            </a>
        </div>

        <h6>© 2025 proyecto de software / Todos los derechos reservados</h6>
    </footer>
    <style>
    .footer {
        background: linear-gradient(270deg, #a8ff78, #78ffd6, #00c3ff);
        background-size: 600% 600%;
        animation: fondoMarino 10s ease infinite;
        color: #111;
        /* 👈 Texto negro oscuro */
        text-align: center;
        padding: 25px 0;
        font-family: 'Segoe UI', Arial, sans-serif;
        letter-spacing: 0.5px;
        position: relative;
    }

    /* Animación del fondo */
    @keyframes fondoMarino {
        0% {
            background-position: 0% 50%;
        }

        50% {
            background-position: 100% 50%;
        }

        100% {
            background-position: 0% 50%;
        }
    }

    .footer .redes {
        margin: 15px 0;
    }

    .footer .redes a {
        margin: 0 12px;
        display: inline-block;
        transition: transform 0.4s ease, filter 0.4s ease;
    }

    .footer .redes img {
        width: 35px;
        height: 35px;
        filter: brightness(0) invert(1);
    }

    /* Efecto al pasar el mouse */
    .footer .redes a:hover {
        transform: scale(1.3);
    }

    /* Colores de cada red social con efecto de brillo */
    .footer .instagram:hover img {
        filter: drop-shadow(0 0 10px #E1306C) brightness(1.2) saturate(200%);
    }

    .footer .facebook:hover img {
        filter: drop-shadow(0 0 10px #1877F2) brightness(1.2) saturate(200%);
    }

    .footer .tiktok:hover img {
        filter: drop-shadow(0 0 10px #69C9D0) brightness(1.2) saturate(200%);
    }

    .footer .whatsapp:hover img {
        filter: drop-shadow(0 0 10px #25D366) brightness(1.2) saturate(200%);
    }
    </style>
</body>

</html>