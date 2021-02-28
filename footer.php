<script src="jquery-3.5.1.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script type="application/javascript">
  $(".alternarFormularios").click(function(){
      $("#formularioRegistro").toggle();
      $("#formularioLogin").toggle();
  });

  $('#diario').on('input propertychange', function() {

    $.ajax({
        method:"POST",
        url:"actualizarBD.php",
        data:{content: $("#diario").val()}
})
});
</script>
    </body>
</html>