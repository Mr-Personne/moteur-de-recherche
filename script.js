const myForm = document.querySelector('form');
const inputSearch = document.querySelector('input[name="searchInput"]');

function ajaxCallAsynch(){
    console.dir(myForm);
    console.log(myForm);
    if (inputSearch.value.length === 0){
        // alert('Please enter something before El Goog-ing it');
        // return;
        console.log('Please enter something before El Goog-ing it');
    }
    else{
        var formData = new FormData(myForm);

        var paramAjax = {
            method : "POST",
            body : formData
        };

        fetch('traitement.php', paramAjax).then(function(response){

            console.dir(response);
            return response.text();

        }).then(function(data){

            var resultDiv = document.querySelector('#search-result');
            resultDiv.innerHTML = data;
        });
        console.log("lol");
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