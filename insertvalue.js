
    function insertvalue(){
        var select=document.getElementById("select"),
            textval=document.getElementById("val").value,
            newoption=document.createElement("OPTION"),
            newoptionvalue=document.createTextNode(textval);
        
        newoption.appendChild(newoptionvalue);
        select.insertBefore(newoption,select.lastChild);
    }
