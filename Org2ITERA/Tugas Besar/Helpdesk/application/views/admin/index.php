 

<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; ?>

<body>
   
    <?php// include "header.php"; ?>
  
    <div id="main">
        
       

            <!-- START LEFT SIDEBAR NAV-->
            <?php// include "menu.php"; ?>

            
            <section id="content">

                <!--start container-->
                <div class="container" >
                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content  green white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> Tiket Baru</p>
                                        <h4 class="card-stats-number"><?php echo $total; ?></h4>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content purple white-text">
                                        <p class="card-stats-title"><i class="mdi-social-group-add"></i> Tiket Selesai</p>
                                        <h4 class="card-stats-number"><?php echo $total1 ?></h4>
                                        
                                    </div>
                                </div>
                            </div>              
                                       
                            <div class="col s12 m6 l3">
                                <div class="card">
                                    <div class="card-content blue-grey white-text">
                                        <p class="card-stats-title"><i class="mdi-action-trending-up"></i> Tiket</p>
                                        <h4 class="card-stats-number"><?php echo $total2; ?></h4>
                                        
                                    </div>
                                </div>
                            </div>
                                         
                        </div>
                    </div>
                   
                    <div id="work-collections">
                        <div class="row">
                            <div class="col s12 m12 l6">
                                <ul id="projects-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-action-bug-report circle red darken-2"></i>
                                        <span class="collection-header">Task Tiket</span>
                                        <p>Status <b style="color: red;">Open</b></p>
                                        <!-- <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>-->
                                    </li>
                                   
                    <?php 
                    $no=0;
                    while($data=mysqli_fetch_array($tampil))
                    { $no++; ?>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s9">
                                                <p class="collections-title"><?php echo $no; ?>. <?php echo $data['nama']; ?> | <?php echo $data['departemen']; ?></p>
                                                <p class="collections-content">Problem : <?php echo $data['problem']; ?></p>
                                            </div>
                                            <div class="col s3">
                                            <?php if($data['status'] == "open" ){
                                                 echo "<span class='task-cat pink'>Tiket $data[status]</span>";
                                                 } else if ($data['status'] == "close"){
                                                 echo "<span class='task-cat teal'>Tiket $data[status]</span>";
                                                 }
                                                ?>
                                            </div>
                                        </div>
                                    </li>
                         <?php   
              } 
              ?>           
                                </ul>
                            </div>
                            <div class="col s12 m12 l6">
                                <ul id="issues-collection" class="collection">
                                    <li class="collection-item avatar">
                                        <i class="mdi-file-folder circle light-blue darken-2"></i>
                                        <span class="collection-header">Task Tiket</span>
                                        <p>Status <b style="color: blue;">Close</b></p>
                                        <!-- <a href="#" class="secondary    -content"><i class="mdi-action-grade"></i></a> -->
                                    </li>
                    <?php 
                    $no=0;
                    while($data1=mysqli_fetch_array($tampil1))
                    { $no++; ?>
                                    <li class="collection-item">
                                        <div class="row">
                                            <div class="col s9">
                                                <p class="collections-title"><?php echo $no; ?>. <?php echo $data1['nama']; ?> | <?php echo $data1['departemen']; ?></p>
                                                <p class="collections-content">Problem : <?php echo $data1['problem']; ?></p>
                                            </div>
                                            <div class="col s3">
                                            <?php if($data1['status'] == "close" ){
                                                 echo "<span class='task-cat pink'>Tiket $data1[status]</span>";
                                                 } else if ($data1['status'] == "close"){
                                                 echo "<span class='task-cat teal'>Tiket $data1[status]</span>";
                                                 }
                                                ?>
                                            </div>
                                        </div>
                                    </li>
                                                 <?php   
              } 
              ?>    
                                </ul>
                            </div>
                        </div>
                    </div>
                   
                </div>
                
            </section>
            




   
    <?php include "footer.php"; ?>
 

   
    <script type="text/javascript" src="<?=base_url();?>aset/admin/js/jquery-1.11.2.min.js"></script>    
    <!--materialize js-->
    <script type="text/javascript" src="<?=base_url();?>aset/admin/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="<?=base_url();?>aset/admin/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
       
  
        
    </script>
</body>

</html>