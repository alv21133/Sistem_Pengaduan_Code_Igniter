
<div class="loader"></div>
<div class="content pb-0 bg-light">


            <div class="clearfix"></div>



            <!-- tabel data -->
            <div class="row ">
                <div class="col-lg-12">
                    <div class="">  
                        
                            <h4 class="box-title display-9" style="text-align:center; ">Data Laporan Kerusakan <br> Universitas Amikom Yogyakarta</h4>
            
                            <table class=" table table-striped " id="member">                             
                                        <thead class="thead-dark">
                                            <tr class="text-center">
                                                <th>Tanggal</th>
                                                <th>Ruangan</th>
                                                <th >Diskripsi</th>                                            
                                                <th>Nim Pelapor</th>
                                                <th>Foto</th>                                             
                                                <th>Action</th>                                             
                                            </tr><br>
                                        </thead>
                                    <?php
                                    foreach ($member as $hasil) {
                                        
                                    
                                            ?>
                                            <tr class="text-center">
                                        <td><?php echo $hasil->Tanggal; ?> </td>
                                        <td><?php echo $hasil->Ruang; ?> </td>
                                        <td><?php echo $hasil->diskripsi; ?> </td>
                                        <td><?php echo $hasil->nim; ?> </td>
                                        <td><img width="100px"  src="<?php echo base_url()?>/aset/images/upload/<?php echo $hasil->file_pendukung;?>"> </td>
                                        <td><a href="<?php echo base_url().'/Welcome/hapus/'.$hasil->id?>" class="btn badge-warning" onclick="return confirm('Data akan di hapus..?')" >Hapus</a></td>
                                            
                                        
                                        
                                    <?php
                                    }
                                    ?>
                                </table>
                        <div class="row">                              
                                
                        </div> <!-- /.row --> 
                        
                        <div class="card-body"></div>
                    </div> 
                </div><!-- /# column -->
            </div>
            <!--  Traffic  End -->
        <!-- tabel2 -->
                                      
