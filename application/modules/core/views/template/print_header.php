<?php include 'head.php';?>
  <link rel="stylesheet" href="<?php echo base_url();?>css/print.css" type="text/css" />

<body>

    <!-- navbar -->
      <div class="page-container container" style="background-color:white; min-height:800px; padding: 20px; width:1100px; ">
      
      <div class="col-xs-12  text-center">
        <div class="col-xs-2">
              <div class="logo">
                <img src="<?php echo base_url('img/'.$_SESSION['sch_id'].'.png');?>" alt="" width="115" height="115">
              </div>
        </div>

        <div class="col-xs-8" style="padding:10px 0 0 -30px">
              <div class="headings " >
                  <h3><b><?php echo strtoupper($school_details['sch_full_name']); ?></b></h3>
                  <h4><span class=""><?php echo strtoupper($school_details['sch_motto']); ?></span></h4>
                  <h4><?php echo $school_details['sch_addr']; ?></h4>
                  <h6><?php echo $school_details['sch_email_add']; ?> <?php echo $school_details['sch_web']; ?> <?php echo $school_details['sch_phone1']; ?> <?php echo $school_details['sch_phone2']; ?></b></h6>
               </div>   
        </div> 
         <div class="col-xs-2">
         </div>
      </div>

