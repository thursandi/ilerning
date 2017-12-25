  <!-- BUAT JAVA SCRIPT DATE TIME PICKER -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/datetimepicker-master/jquery.datetimepicker.css"/ >

  <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                      RPS Realisasi
                  </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="<?=base_url();?>e_dosen"><i class="icon-home"></i></a><span class="divider">&nbsp;</span>
                       </li>
                       <li>
                           <?php echo str_replace('_', ' ', ucwords($this->uri->segment(2))); ?> <span class="divider-last">&nbsp;</span>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-user"></i>
                           RPS Realisasi Mata Kuliah <?php echo $record2->row_array()['nama_mtk'] ?> 
                           Dosen <?php echo $record2->row_array()['nama'] ?>
                           Kelas <?php echo $record2->row_array()['nama_kelas'] ?> 
                           </h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>                    
                        </div>

                         <!-- FORM -->
                        <div class="widget-body form">
                      <?php
echo form_open('absensi/edit_rps_realisasi/'.$id_jadual);
?>
                                    <div class="control-group">
                                        <!-- <label for="old_password">Old Password</label> -->
                                        
                            

                                 <table class="table table-bordered">
   <input type= 'hidden' name="id_absen"  value = '<?php echo $record['id_absen'] ?>' readonly />
                                       
  <tr>
    <td align="center">Waktu Mulai</td>
    <td>  <input  name='waktu_mulai' type='text'   id="datetimepicker" value = '<?php echo $record['waktu_input'] ?>' required /></td>
  </tr>
  <tr>
    <td align="center">Waktu Selesai</td>
    <td>  <input  name='waktu_selesai' type='text' id="datetimepicker2" value = '<?php echo $record['waktu_selesai'] ?>'  required /></td>
  </tr>
  <tr>
    <td align="center">RPS Realisasi</td>
    <td>
    <textarea  name="materi"   size="30" class="span6" required/><?php echo $record['materi'] ?></textarea></td>
  </tr>
  <tr>
    <td colspan="">&nbsp;     
    </td>
    <td>
    <button type="submit" class="btn">Simpan Realisasi RPS</button>
   <?php echo anchor('absensi/absen_detail/'.$id_jadual,'Kembali',array('class'=> 'btn btn-primary blue','style'=>'background-color:blue'));?>
      
    </td>
  </tr>
</table>
</form>

        </div>
                        <!-- FORM -->
                            
                            <div class="space5"></div>
                        </div>
                  </div>
               </div>
     
                                  
                                  </tbody>
                              </table>

                        </div>
                  </div>
               </div>
            </div>
            
            </div>
            <!-- END PAGE CONTENT-->         
    
         </div>
         <!-- END PAGE CONTAINER-->
      
      </div>

   <!-- END CONTAINER -->
  <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url()?>assets/datetimepicker-master/build/jquery.datetimepicker.full.min.js"></script>
  
  <script type="text/javascript">
      jQuery('#datetimepicker').datetimepicker();  
      jQuery('#datetimepicker2').datetimepicker();  

  </script>
