<div class="headline-ad container">
        <div class="image_ad">
           <img src="<?=base_url();?>img/logo2.png" alt="Kemenperin dan STMI" />
           <h4>E-Learning | Politeknik STMI</h4>
        </div>
    </div>  


<div id="intr" class="container">
        <div class="row-fluid">
            <div class="brnews span9">
                <h3>Breaking News</h3>

                        <!-- newsticker -->
                        <ul id="scroller">
                                <?php 
                                $row=NULL;
                                $i=1;
                                if ( !empty($newsticker) ) {
                                $num=$newsticker->num_rows();
                                foreach($newsticker->result() as $row):
                                $path_parts = pathinfo($row->link_thumbnail);
                                ?>

                                    <li><p><a href="<?php echo 'http://localhost/stmi_web/'.'berita/tentang/berita_'.$path_parts['filename'].'/'.$row->id_berita.'/'.url_title($row->judul_berita, 'dash', TRUE);?>" title="<?php echo ucwords($row->judul_berita);?>" rel="bookmark"><span class="title"><?php echo date('j/m/Y', strtotime($row->tanggal));?></span> <?php echo ucwords($row->judul_berita);?></a></p></li>
                                    
                                
                                <?php 
                                endforeach;
                                }
                                ?>
                        </ul>
                        <!-- newsticker -->
            </div>
        
        <div class="search span3"><div class="offset1">
            <form method="get" id="searchform" action="#">
                <p><input type="text" value="Search here..." onfocus="if ( this.value == 'Search here...' ) { this.value = ''; }" onblur="if ( this.value == '' ) { this.value = 'Search here...'; }" name="s" id="s" />
                <input type="submit" id="searchsubmit" value="Search" /></p>
            </form>
        </div></div>
        </div>
    </div>

  <div id="content" class="container">

    <div id="main" class="row-fluid">
      <div id="main-left" class="span8">

<?php
if ( !empty($artikel) ) {
foreach($artikel->result() as $row)
:?>      
        <article class="post">
          <h2 class="entry-title">
            <span class="the_title"><?php echo $row->judul_artikel;?></span>
          </h2>
          <div class="entry-meta row-fluid">
            <ul class="clearfix">
              <li><a href="#" rel="author">Ditulis oleh: <b><?php echo str_replace('*', "$row->nama_asli, ", $row->gelar) ;?></b></a></li>
              <li><img src="<?=base_url();?>images/time.png" alt=""><?php echo date('j F Y', strtotime($row->tanggal_input));?></li>
              <li><img src="<?=base_url();?>images/view-bg.png" alt="">Dilihat: <?php echo ((empty($row->view))?'0':$row->view);?> kali</li>
            </ul>
          </div>
          <div class="entry-content">
            <?php if (!empty($row->link_gambar)){?>
            <p><img width="774" height="320" src="<?php echo base_url().'assets/uploads/blog_dosen/'.$row->link_gambar;?>" alt="<?php echo $row->judul_artikel;?>" /></p>
            <?php } ?>
            <hr>
            <?php echo $row->isi_artikel;?>
          </div>
        </article>
 <?php 
endforeach;
}
?>
          
          <div class="komen">
                          <!-- COMMENT -->
                                        <div id="disqus_thread"></div>
                                        <script type="text/javascript">
                                            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                                            var disqus_shortname = 'stmiacid'; // required: replace example with your forum shortname
                                            var disqus_identifier = '<?php echo base_url().uri_string(); ?>';

                                            /* * * DON'T EDIT BELOW THIS LINE * * */
                                            (function() {
                                                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                                                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                                                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                                            })();
                                        </script>
                                        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                        <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
                                        
          </div>
                                    <!-- COMMENT -->
      
      </div><!-- #main-left -->