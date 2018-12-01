<html>

   <head>
      <title>Form Example</title>
   </head>

   <body>
      <form action = "inserirRegistrosBd" method = "post">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">

         <table>
            <tr>
               <td></td>
               <td><input type = "number" name = "equipamento_id" /></td>
            </tr>


              <tr>

               <td colspan = "2" align = "center">
                  <input type = "submit" value = "InserirEquipamentos" />
               </td>
            </tr>
         </table>

      </form>
   </body>
</html>
