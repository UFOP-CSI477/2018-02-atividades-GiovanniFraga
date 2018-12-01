
<html>

   <head>
      <title>Form Example</title>
   </head>

   <body>
      <form action = "pesquisaRegistrosBd" method = "get">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

         <table>
            <tr>
               <td>Id do Equipamento</td>
               <td><input type = "number" name = "equipamento_id" /></td>
            </tr>


              <tr>

               <td colspan = "2" align = "center">
                  <input type = "submit" value = "PesquisaRegistros" />
               </td>
            </tr>
         </table>

      </form>
   </body>
</html>
