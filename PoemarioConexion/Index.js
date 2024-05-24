const poemaTitle = document.getElementById('poemaTitulo');
const poemaAutor = document.getElementById('poemaAutor');
const poemaCuerpo = document.getElementById('poemaCuerpo');

document.querySelectorAll('[data-bs-toggle="modal"]').forEach((button) => {
    button.addEventListener('click', (e) => {
        
        const row = e.target.dataset.bsPoema.split('*');
        poemaTitle.textContent = row[0];
        poemaAutor.textContent = row[1];
        poemaCuerpo.textContent = row[2];
        });
});
    