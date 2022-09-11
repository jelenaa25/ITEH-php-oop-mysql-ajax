function obrisinakit(deleteid){//2


    request = $.ajax({  
        url: 'handler/delete.php',  
        type: 'post', 
        data: {deleteid:deleteid},


        success: function(data, status){
            location.reload(true);
            alert("Uspesno obrisano!");
        }


    });



}
function azurirajNakit(azurirajid){ //ovo je kad korisnik klikne dugme iz tabele za azuriranje
    //prvo moramo da popunimo formu sa vec unetim podacima pa onda da ih azuriramo
  
    $.post("handler/get.php",{azurirajid:azurirajid},function(data,status){
        console.log(data);
        var nakit=JSON.parse(data);//
        console.log(nakit); 
        $('#nazivEdit').val(nakit.naziv  );
        $('#opisEdit').val(nakit.opis);
        $('#kategorijeEdit').val(nakit.kategorija).change();
        console.log(nakit.kategorija);
        $('#cenaEdit').val(nakit.cena);

        $('#sakrivenoPoljeID').val(nakit.id); 
        


    }); 
 

}


//ovo je kad korisnik klikne dugme unutar forme da sacuva promene 
$('#editform').submit(function () {
 
    var form = $('#editform')[0];
    var formData = new FormData(form);
    event.preventDefault();  
   
 


    request = $.ajax({  
        url: 'handler/edit.php',  
        type: 'post', 
        processData: false,
        contentType: false,
        data: formData
    });

    request.done(function (response, textStatus, jqXHR) {
      
        if (response === "Success") {
            alert("Uspesno azurirano");
            
            location.reload(true);
        }
        else {
       
            console.log("Azuriranje neuspesno" + response);
        }
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error('Greska: ' + textStatus, errorThrown);
    });
     
    


});



$('#dodajNoviProizvod').submit(function () {

    var form = $('#dodajNoviProizvod')[0];
    console.log(form);
    var formData = new FormData(form);
    event.preventDefault();  
    console.log(formData);

    request = $.ajax({  
        url: 'handler/add.php',  
        type: 'post', 
        processData: false,
        contentType: false,
        data: formData
    });
    console.log(request);
    request.done(function (response, textStatus, jqXHR) {
        //console.log(textStatus);
        //console.log(jqXHR);
     // console.log(response);

        if (response === "Success") {
            alert("Uspesno dodato");
            
            location.reload(true);
        }
        else {
       
            console.log("Neuspesno" + response);
        }
    });

    request.fail(function (jqXHR, textStatus, errorThrown) {
        console.error('Greska: ' + textStatus, errorThrown);
    });
}); 
