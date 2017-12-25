  <!-- BUAT JAVA SCRIPT DATE TIME PICKER -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/datetimepicker-master/jquery.datetimepicker.css"/ >
  <!-- ================================= -->
  
  <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                    Form Input Absen
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

<style>

input[type="text"]:focus{
    border-color: rgba(82, 168, 236, 0.8);
   outline: 0;
   outline: thin dotted  \9;
   -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
   -moz-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6);
   box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(82, 168, 236, 0.6)
}

.table tbody tr:hover td, .table tbody tr:hover th {
    background-color: #d8eeff;
}

input[type="radio"]{
  cursor: pointer;
}

.radio input[type="radio"],
.checkbox input[type="checkbox"] {
  float: left;
  margin-left: 0px;
}

#msg {display:none; position:absolute; z-index:200; background:url(images/msg_arrow.gif) left center no-repeat; padding-left:7px}
#msgcontent {display:block; background:#f3e6e6; border:2px solid #924949; border-left:none; padding:5px; min-width:150px; max-width:250px}
</style>


            <div class="row-fluid">
               <div class="span12">
                  <div class="widget">
                        <div class="widget-title">
                           <h4><i class="icon-user"></i>&nbsp;Form Input Absen
                           </i>&nbsp;Dosen <?php echo $record2->row_array()['nama'] ?> 
                           pada Mata Kuliah 
                           <?php echo $record2->row_array()['nama_mtk'] ?> 
                    <!--
                            Kelas
                           <?php //echo $record->row_array()['kelas'] ?> 
                           -->

                           </h4>
                           <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           </span>                    
                        </div>
                        <div class="widget-body">
<?php
echo validation_errors();
echo form_open('absensi/tambah_absen');
?>
 <table class="table table-bordered">
  <input  name='id_jadual' type='hidden'  value="<?php echo $id_jadual; ?>" required />
  <tr>
    <td align="center">Waktu Mulai</td>
    <td>  <input  name='waktu_mulai' type='text'   id="datetimepicker" required /></td>
  </tr>
  <tr>
    <td align="center">Waktu Selesai</td>
    <td>  <input  name='waktu_selesai' type='text' id="datetimepicker2" required /></td>
  </tr>
  <tr>
    <td align="center">RPS Realisasi</td>
    <td>
    <textarea  name="materi"   size="30" class="span6" required/> </textarea></td>
  </tr>
  <tr>
    <td align="center">Alasan</td>
    <td>  <input  name='alasan' type='text'  maxlength='100' required/> <font color="red"> minimal 5 karakter 
     </font></td>
  </tr>
</table>
  <?php
      if(isset($salah)){
        echo "<hr> <span ><font color = 'red'> <strong> <i> * Data Gagal Di Input, Alasan Minimal 5 karakter </i> </strong></font></span>";
      }
    ?>

<hr>


<table class="table table-striped table-bordered table-hover" id="">
    <thead style="vertical-align:center;">
        <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th colspan="5">Operasi</th>
        </tr>                                      
    </thead>
   <tbody>                                    
<?php
$no = 1;
$i=0;
foreach ($record as $r ) {
echo "
  <tr>
    <td><input type= 'hidden' name = 'nim[]' value = '$r->nim' readonly />$r->nim</td>
    <td>$r->nama</td>
      <td > <input type= 'radio' name='jurusan[".$i."]' value='1' checked > Masuk </td>
      <td > <input type= 'radio' name='jurusan[".$i."]' value='5'> Alfa 
      <td > <input type= 'radio' name='jurusan[".$i."]' value='2'> Sakit </td>
      <td > <input type= 'radio' name='jurusan[".$i."]' value='3'> Izin </td>
      <td > <input type= 'radio' name='jurusan[".$i."]' value='4'> Terlambat </td>
     </td>
  </tr>
";
/*echo "
  <tr>
    <td>$r->nim</td>
    <td>$r->nama</td>
    <td ><input type= 'radio' name='jurusan[]' value='1' checked> Masuk </td>
      <td > <input type= 'radio' name='jurusan[]' value='2'> Sakit </td>
      <td > <input type= 'radio' name='jurusan[]' value='3'> Izin </td>
      <td > <input type= 'radio' name='jurusan[]' value='4'> Terlambat </td>
      <td > <input type= 'radio' name='jurusan[]' value='5'> Tanpa Keterangan 
     </td>
  </tr>
";*/
$no++;
$i++;
}
?>
<tr>
<td>&nbsp;</td>
<td colspan="2">
<button type="submit" class="btn">Simpan</button>
</td>
<td colspan="4">
<?php echo anchor('absensi/absen_detail/'.$id_jadual,'Kembali',array('class'=> 'btn btn-primary blue','style'=>'background-color:blue'));?>
</td>
</tr>

                                  </tbody>
                              </table>
                        </div>
</form>


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
