botao = document.getElementById('botao')

dominancia = document.getElementsByClassName('dominancia')
mediaD = document.getElementById('mediaD')

influencia = document.getElementsByClassName('influencia')
mediaI = document.getElementById('mediaI')

estabilidade = document.getElementsByClassName('estabilidade')
mediaE = document.getElementById('mediaE')

conformidade = document.getElementsByClassName('conformidade')
mediaC = document.getElementById('mediaC')

botao.onclick = () => {
    somaD = 0
    calculoD = 0
    for(var i = 0 in dominancia) {
        if(dominancia[i].checked){
             calculoD = dominancia[i].value;
             somaD = Number(somaD) + Number(calculoD)
        }
    }
    calculoD = 100* somaD / 40
    mediaD.value = 100* somaD / 40

    somaI = 0
    calculoI = 0
    for(var i = 0 in influencia) {
        if(influencia[i].checked){
             calculoI = influencia[i].value;
             somaI = Number(somaI) + Number(calculoI)
        }
    }
    mediaI.value = 100* somaI / 40

    somaE = 0
    calculoE = 0
    for(var i = 0 in estabilidade) {
        if(estabilidade[i].checked){
             calculoE = estabilidade[i].value;
             somaE = Number(somaE) + Number(calculoE)
        }
    }
    mediaE.value = 100* somaE / 40

    somaC = 0
    calculoC = 0
    for(var i = 0 in conformidade) {
        if(conformidade[i].checked){
             calculoC = conformidade[i].value;
             somaC = Number(somaC) + Number(calculoC)
        }
    }
    mediaC.value = 100* somaC / 40



    var perfilD = mediaD.value
    var perfilI = mediaI.value
    var perfilE = mediaE.value
    var perfilC = mediaC.value
    var perfil = document.getElementById('perfil')

    
    if((perfilD >= perfilE) && (perfilD >= perfilI) && (perfilD >= perfilC)) {
        perfil.innerHTML = 'Você é Alto D - Perfil Dominante'
    } else if ((perfilI >= perfilD) && (perfilI >= perfilE) && (perfilI >= perfilC)) {
        perfil.innerHTML = 'Você é Alto I - Perfil de influencia'
    } else if ((perfilE >= perfilD) && (perfilE >= perfilI) && (perfilE >= perfilC)) {
        perfil.innerHTML = 'Você é Alto S - Perfil de Estabilidade'
    } else if ((perfilC >= perfilD) && (perfilC >= perfilE) && (perfilC >= perfilI)) {
        perfil.innerHTML = 'Você é Alto C - Perfil de Conformidade'
    }
}
