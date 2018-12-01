<html>

   <head>
      <title>Form Example</title>
   </head>

   <body>
      <form action = "inserirRegistrosBd" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

         <table>

            <tr>
              <td>Equipamento Id</td>
              <td><input type = "number" name = "equipamento_id" /></td>
            </tr>

            <tr>
               <td>Descrição</td>
               <td><input type = "text" name = "descricao" /></td>
            </tr>
            <tr>
               <td>Data Limite</td>
               <td><input type = "date" name = "datalimite" /></td>
            </tr>
            <tr>
               <td>Tipo(1-Preventiva; 2-Corretiva; 3-Urgente)</td>
               <td><input type = "number" name = "tipo" /></td>
            </tr>

              <tr>
               <td colspan = "2" align = "center">
                  <input href="indexRegistros" type = "submit" value = "InserirEquipamentos" />
               </td>
            </tr>
         </table>
         

      </form>
   </body>
</html>
