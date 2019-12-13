const myForm = document.querySelector('form');
const inputSearch = document.querySelector('input[name="searchInput"]');

function ajaxCallAsynch(){
    // console.dir(myForm);
    // console.log(myForm);
    if (inputSearch.value.length === 0){
        //manu trouve que c'est mieux de faire inputSearch.value.length !== 0 et de mettre l'ajax en premier
        // et l'action d'erreur dans le else plus loin? (il me semble)
        console.log('Please enter something before El Goog-ing it');
        var resultDiv = document.querySelector('#search-result');
        resultDiv.innerHTML = "";
        return;
        
    }
    else{
        var formData = new FormData(myForm);

        var paramAjax = {
            method : "POST",
            body : formData
        };

        fetch('traitement.php', paramAjax).then(function(response){

            console.dir(response);
            return response.json();

        }).then(function(data){

            console.log("data : ", data);
            var html = "";
            var resultDiv = document.querySelector('#search-result');

            for(var i = 0; i < data.length; i++){
                html += "<p>" + data[i][1] +" "+ data[i][2] + "</p>";
            }

            resultDiv.innerHTML = html;
        });
        
    }
};

myForm.addEventListener("submit", function(event){
    event.preventDefault();
    
    ajaxCallAsynch();

    
});

inputSearch.addEventListener("keyup", function(event){
    ajaxCallAsynch();
    console.log(event.target.value);
});