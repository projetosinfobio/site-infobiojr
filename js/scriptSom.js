onload = function() {
    if ('speechSynthesis' in window) with(speechSynthesis) {

        var playEle = document.querySelector('#play');
        var pauseEle = document.querySelector('#pause');
        var stopEle = document.querySelector('#stop');
        var flag = false;

        playEle.addEventListener('click', onClickPlay);
        stopEle.addEventListener('click', onClickStop);

        function onClickPlay() {
            if(!flag){
                flag = true;
                /* Conteudo da pagina precisa estar dentro de um article */
                utterance = new SpeechSynthesisUtterance(document.querySelector('article').textContent);
                utterance.voice = getVoices()[0];
                utterance.onend = function(){
                    flag = false; playEle.className = pauseEle.className = ''; stopEle.className = 'stopped';
                };
                playEle.className = 'paused';
                stopEle.className = '';
                speak(utterance);
            }
            if (paused) { /* despausar */
                playEle.className = 'paused';
                pauseEle.className = '';
                resume();
            }
            if(speaking && !paused){ /* pausa */
                pauseEle.className = 'play';
                playEle.className = '';
                pause();
            } 
        }

        function onClickStop() {
            if(speaking){ /* stop */
                /* para navegador safari */
                stopEle.className = 'stopped';
                playEle.className = '';
                flag = false;
                cancel();
            }
        }

    }

    else { /* Suporte para o audio nao detectado */
        msg = document.createElement('h5');
        msg.textContent = "Nao detectamos suporte para o audio";
        msg.style.textAlign = 'center';
        msg.style.backgroundColor = 'red';
        msg.style.color = 'white';
        msg.style.marginTop = msg.style.marginBottom = 0;
        document.body.insertBefore(msg, document.querySelector('div'));
    }

}
