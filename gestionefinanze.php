<html>
 <head>
  <title>How to use Tabledit plugin with jQuery Datatable in PHP Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="https://markcell.github.io/jquery-tabledit/assets/js/tabledit.min.js"></script>

  <link rel="stylesheet" href="global.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

 </head>
 <body>




   <div class="container">
     <div class="card1">
       <br>
       <h2 align="center">Guadagni</h2>
     <br />
    <div class="panel panel-default">
     <div class="panel-heading">Dati</div>
     </div>
     <div class="panel-body">
      <div class="table-responsive">
       <table id="sample_data" class="table table-bordered table-striped">
        <thead>
         <tr>
          <th>ID</th>
          <th>Mese</th>
          <th>Anno</th>
          <th>Totale</th>
         </tr>
        </thead>
        <tbody></tbody>
       </table>
      </div>
     </div>
    </div>
   </div>
   <br />
   <br />


      <button class="btn btn-danger" onclick="openPopup()"> Apri Calcolatrice </button>

      


 </body>
</html>

<script type="text/javascript">
var newWin;
    function openPopup()
    {
     newWin= window.open('calcolatrice.html','Calcolatrice','width=400,height=700');

     document.onmousedown=focusPopup;
     document.onkeyup=focusPopup;
     document.onmousemove=focusPopup;
    }
    function focusPopup(){
      if(!newWin.closed){
        newWin.focus();
      }
    }

</script>

<script type="text/javascript" language="javascript" >
$(document).ready(function(){

 var dataTable = $('#sample_data').DataTable({
  "processing" : true,
  "serverSide" : true,
  "order" : [],
  "ajax" : {
   url:"fetchf.php",
   type:"POST"
  }
 });

 $('#sample_data').on('draw.dt', function(){
  $('#sample_data').Tabledit({
   url:'actionf.php',
   dataType:'json',
   columns:{
    identifier : [0, 'id'],
    editable:[[1, 'month'], [2, 'year'], [3, 'earn']]
   },
   restoreButton:false,
   onSuccess:function(data, textStatus, jqXHR)
   {
    if(data.action == 'delete')
    {
     $('#' + data.id).remove();
     $('#sample_data').DataTable().ajax.reload();
    }
   }
  });
 });

});
</script>
