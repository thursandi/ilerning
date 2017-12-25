  <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                    Pembanding RPS 
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
                           <h4><i class="icon-user"></i>&nbsp;RPS Prodi
                            <?php if (!empty($record)){ 
                            echo "Mata Kuliah ".$record->row_Array()['nama'];
                           }?> 
                           </h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>                    
                        </div>

                        <div class="widget-body">
                       <table class="table table-striped table-bordered table-hover" id="">
                            <thead>
                                <tr>
                                  <th>Pertemuan</th>
                                  <th>Materi </th>
                                  <th>Pustaka</th>
                                </tr>
                            </thead>
                            <tbody>
<?php $i=1;
if ( !empty($record) )
foreach($record->result() as $row)
:?>
                                <tr class="odd gradeX">
                                    <td><?php echo $i; ?></td>
                                    <td><?php echo $row->materi; ?></td>
                                    <td><?php echo $row->pustaka; ?></td>
                                </tr>

<?php 
$i++;
endforeach;
?>
                            </tbody>
                            </table>
                        </div>
                  </div>
               </div>
            </div>

              
              <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-user"></i>&nbsp;RPS Realisasi 
                           <?php if (!empty($record2)){ 
                            echo "Mata Kuliah ".$record2->row_Array()['nama_mtk'];
                           }?> 
                           </h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>                    
                        </div>
                        <div class="widget-body">
                       <table class="table table-striped table-bordered table-hover" id="">
                            <thead>
                                <tr>
                                  <th>Pertemuan</th>
                                  <th>Materi </th>
                                </tr>
                            </thead>
                            <tbody>
<?php $i=1;
if(!empty($record2) )
foreach($record2->result() as $row)
  :?>
                                <tr class="odd gradeX">
                                    <td width="10"><?php echo $i; ?></td>
                                    <td><?php echo $row->materi; ?></td>
                                </tr>
<?php 
$i++;
endforeach;
?>
                                <tr>
                                    <td colspan="2" align="left">   
    <?php echo anchor('absensi/tampilkan_jadual_mutu/','Kembali',array('class'=> 'btn btn-primary blue','style'=>'background-color:blue'));?>
                                    </td>
                                </tr>
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
