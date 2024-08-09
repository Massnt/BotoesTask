KB.http.get('/kanboard/?controller=BotoesTaskController&action=getUserBotoes&plugin=BotoesTask')
    .success(function (response) {
        if(response.user == "Diogo Munarin") {
            $('#reprovado-analise-div').removeClass('hide');
            $('#arquivado-div').removeClass('hide');
        } else if(response.user == "Willian") {
            $('#arquivado-div').removeClass('hide');
        }
    })

