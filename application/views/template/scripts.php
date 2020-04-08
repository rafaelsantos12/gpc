

<script src="<?php echo base_url();?>public/jquery/appjquery.min.js"></script>
<script src="<?php echo base_url();?>public/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>public/bootstrap/js/bootstrap401.min.js"></script>
<script src="<?php echo base_url();?>public/bootstrap/js/app.min.js"></script>
</script>
   <?php if (isset($scripts)){
         foreach ($scripts as $script_name){
            $src = base_url() . "public/js/" . $script_name;?>
            <script src="<?php echo $src?>"></script>
         <?php
         }
   } ?> 

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
   <script>
    $(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');
    });

    });
  </script>

</body>
</html>