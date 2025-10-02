const sleep = ms =>
    new Promise(resolve => {
        setTimeout(() => {
            resolve();
        }, ms);
    });

const cancion = async () => {
    const addLyrics = text => (console.log(text));

    addLyrics("mi primera cancion en j.s");

    await sleep(2000);

    addLyrics("nunca pedi que hicieras eso por mi");
    await sleep(5000);
    addLyrics("fue lo que dijo ella antes de partir");
    await sleep(5000);
    addLyrics("mi corazon dice que voy a morir...");
    await sleep(5000);
    addLyrics("se bien que puedo,mas no quiero estar asi");
    await sleep(5000);
    addLyrics("¿Qué tan bueno será dejarnos ir?");
    await sleep(6800);
    addLyrics("¿Para qué lastimarnos? Si al final entenderás");
    await sleep(3000);
    addLyrics("Que en las estrellas nuestros nombres");
    await sleep(3000);
    addLyrics("Siempre se van a encontrar");
    await sleep(3500);
    addLyrics("Que no puedo dejarte de adorar flaca y te vas");
    await sleep(500);
    addLyrics("pero con suerte nos veremos en el próximo big bang....");
    await sleep(4500);
};

cancion();
