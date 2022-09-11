
//pretraga  i sortiranje
function pretragaPoImenu() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("pretraga");
    filter = input.value.toUpperCase();
    table = document.getElementById("tableNakit");
    console.log(table);
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
        td = tr[i].getElementsByTagName("td")[0];
        if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
}



function sortiraj() {
 
    var table, rows, switching, i, j, z, k, x, y, shouldSwitch;
    table = document.getElementById("tableNakit");


    var e = document.getElementById("kriterijum");
    console.log(e);
    var result = e.options[e.selectedIndex].value;
   console.log(result);

 



    //SORT po ceni
    // sortira tako da najjeftiniji postovi idu na vrh
    if (result == "price") {
        rows = table.rows;
        for (i = 1; i < (rows.length - 1); i++) {
            for (j = i + 1; j < rows.length; j++) {
                x = rows[i].getElementsByTagName("TD")[2];
                y = rows[j].getElementsByTagName("TD")[2];
                z = parseInt(x.innerHTML);
                k = parseInt(y.innerHTML);
                if (z > k) {
                    rows[i].parentNode.insertBefore(rows[j], rows[i]);
                }
            }
        }

    }


    //SORT po imenu  
 
    if (result == "name") {
        rows = table.rows;
        for (i = 1; i < (rows.length - 1); i++) {
            for (j = i + 1; j < rows.length; j++) {
                x = rows[i].getElementsByTagName("TD")[0];
                y = rows[j].getElementsByTagName("TD")[0];

                if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
                    rows[i].parentNode.insertBefore(rows[j], rows[i]);
                }
            }
        }
    }


}