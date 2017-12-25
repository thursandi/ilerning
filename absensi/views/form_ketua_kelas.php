  <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                      Form Ketua Kelas
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
                           <h4><i class="icon-user"></i>Form Ketua Kelas</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>                    
                        </div>

                         <!-- FORM -->
                        <div class="widget-body form">
                      <?php
echo form_open('absensi/simpan_ketua_kelas/'.$id_jadual);
?>
                                  
                                
                               <table class="table table-bordered " id="">
                                <tr>
                                	<td>Nim</td>
                                	<td>	<input class="form-control" type="text" name="nim" placeholder = 'Masukan NIM'/>
                                </td>
                                </tr>
                                <tr>
                                <td>&nbsp;</td>
                                	<td> <button type="submit" class="btn">Simpan Ketua Kelas</button></td>
                                </tr>	
                                </table>
                        </div>
                        </form> 
                            
                            <div class="space5"></div>
                        </div>
                  </div>
               </div>
     
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-user"></i>&nbsp;Biodata Ketua Kelas</h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>                    
                        </div>
                        <div class="widget-body">
                      <table class="table table-striped table-bordered table-hover" id="">
                                  <thead>
                                      <tr>
                                        <th>Nim</th>
                                        <th>Nama</th>
                                        <th>No Telpon</th>
                                        <th>Alamat</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                              <?php
if ($record == null ) {
  
}else{
$no = 1;
foreach ($record->result() as $r ) {
echo "
    <tr>
        <td>$r->nim</td>
        <td>$r->nama</td>
        <td>$r->hp</td>
        <td>$r->alamat</td>
    </tr>
";
$no++;
}
}
?>
    

                                  
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
