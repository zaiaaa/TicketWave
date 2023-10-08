const inputCpf = document.getElementById('cpf')
inputCpf.addEventListener('keypress', () => {
    inputLength = inputCpf.value.length

    if(inputLength === 3 || inputLength === 7){
        inputCpf.value += '.'
    }

    if(inputLength === 11){
        inputCpf.value += '-'
    }

})
