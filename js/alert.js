const alert = document.querySelector('.message-succ');

    // Aguarde 5 segundos antes de iniciar a animação
    setTimeout(() => {
        alert.style.transition = 'opacity 0.5s ease-in-out';
        alert.style.opacity = 0;
    }, 5000); // 5000 milissegundos (5 segundos)