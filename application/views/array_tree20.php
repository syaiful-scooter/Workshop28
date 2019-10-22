<head>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
<title>How to Add New Node in Dynamic Treeview using PHP Mysql Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-treeview/1.2.0/bootstrap-treeview.min.css" />
  <style>
  </style>
</head>
<body>
  <div id="1">

  </div>

<script type="text/javascript">

ambilData_dr_controller();

function ambilData_dr_controller() {
  $.ajax({
    type  :"POST",
    url   : '<?php echo base_url("tree4");?>',
    dataType  :"json",
    success:function(data){
      // console.log(data);
      $('#1').treeview({data:data})
    }
  });

}
</script>


</body>
