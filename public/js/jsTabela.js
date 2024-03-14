    
    
 var table = document.getElementById("table"),rIndex,cIndex,vtext;
 document.getElementById("botao-adicionar").disabled = true;
 document.getElementById("botao-remover").disabled = true;
 document.getElementById("select").disabled = true;        
 // table rows
 
 for(var i = 1; i < table.rows.length; i++)
 {
     // row cells
     for(var j = 0; j < table.rows[i].cells.length; j++)
     {
         table.rows[i].cells[j].onclick = function()
         {
            if(typeof rIndex !== "undefined"){//desmarca a celula q foi marcada anteriormente
                table.rows[rIndex].cells[cIndex].classList.toggle("selected");
            }
             rIndex = this.parentElement.rowIndex;
             cIndex = this.cellIndex;
            

             this.classList.toggle("selected");//marca a celula q foi clicada
             vtext = table.rows[rIndex].cells[cIndex].innerHTML;
             document.getElementById("turma").value = table.rows[rIndex].cells[cIndex].innerHTML;
             document.getElementById("linha").value = rIndex;
             document.getElementById("coluna").value = cIndex;
             document.getElementById("turma1").value = table.rows[rIndex].cells[cIndex].innerHTML;
             document.getElementById("linha1").value = rIndex;
             document.getElementById("coluna1").value = cIndex;
             console.log("Row : "+rIndex+" , Cell : "+cIndex);
             //verifica se foi clicado em uma celula vazia ou nao
             console.log(vtext);
             var conteudo = vtext;
             if (conteudo !== null && conteudo !== '') {
             
               document.getElementById("botao-adicionar").disabled = true;
               document.getElementById("select").disabled = true; 
               document.getElementById("botao-remover").disabled = false; 
             } else {
                 document.getElementById("botao-adicionar").disabled = false;
                 document.getElementById("select").disabled = false;  
                 document.getElementById("botao-remover").disabled = true;
             }
         };
     }

 }


 //desabilita o botão no início


 



 
