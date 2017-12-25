
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                       E-Learning Mahasiswa
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="<?=base_url();?>"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           Absensi Mahasiswa<span class="divider-last">&nbsp;</span>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN ADVANCED TABLE widget-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN EXAMPLE TABLE widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-user"></i>&nbsp;Mata Kuliah 
                            <?php 
                            if (!empty($absensi)) {
                            echo $absensi->row_Array()['nm_matkul'];
                            }?>
                             </h4>
                            <span class="tools">
                                <a href="javascript:;" class="icon-chevron-down"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <table class="table table-striped table-bordered table-hover" id="sample_1">
                            <thead>
                                <tr>
                                  <th>No.</th>
                                    <th>Nim</th>
                                    <th>Nama</th>
                                    <th>M</th>
                                    <th>A</th>
                                    <th>S</th>
                                    <th>I</th>
                                    <th>T</th>
                                    <th>Jumlah Absensi</th>
                                     <th>Persentase Kehadiran</th> 
                                </tr>
                            </thead>
                            <tbody>
                            <!-- buat data absen -->
                            <?php
                            if($absensi == null){
   
                            }else{
                              $i = 0;
                              foreach ($absensi->result() as $row) {
                                # code...
                                $i++;
                                echo "<tr>";
                                echo "<td>".$i."</td>";
                                echo "<td>".$row->nim."</td>";
                                echo "<td>".$row->mhs_nama."</td>";
                                echo "<td>".$row->jml_masuk."</td>";
                                echo "<td>".$row->jml_alfa."</td>";
                                echo "<td>".$row->jml_sakit."</td>";
                                echo "<td>".$row->jml_izin."</td>";
                                echo "<td>".$row->jml_terlambat."</td>";
                                echo "<td>".$row->jml."</td>";
                                echo "<td>".floor($row->pers)."<sub>%</sub></td>";     
                                echo "</tr>";
                              }
                             } 
                            ?>
                            <!-- ================ -->
                            </tbody>
                        </table>
                        <tr>
    <td colspan="2" align="left">   <?php echo anchor('e_dosen/biodata/','Kembali',array('class'=> 'btn btn-primary blue','style'=>'background-color:blue'));?>
</tr>
           
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE widget-->
                </div>
            </div>

            <!-- END ADVANCED TABLE widget-->


               </div>
            </div>
            <!-- END PAGE CONTENT-->         
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->  
   </div>
   <!-- END CONTAINER -->
   