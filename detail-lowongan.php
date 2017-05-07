<?php
	include 'header.php';
	
	?>
<!--/.header-->
<div id="#top"></div>
<div id="#top" style="height:100px;"></div>
<section id="contactUs" class="contact-parlex">
  <div class="parlex-back">
    <div class="container">
      <div class="row">
        <div class="heading text-center"> 
          <!-- Heading -->
          <h2>Detail Investasi Sapi</h2>
          <p>Periode Januari - April 2017 Batch 1</p>
        </div>
      </div>
	 
      <div class="row mrgn30">
        <form method="post" action="detail-lowongan.php" id="contactfrm" role="form">
          <div class="col-sm-12">
            <div class="form-group">
              <label for="name">Masukkan jumlah saham yang ingin dibeli</label>
              <input type="text" style="color: red;" min="0" class="form-control" name="jumlah" id="jumlah" placeholder="Masukkan jumlah saham" title="Please enter your name (at least 2 characters)">
            </div>
			      <div class="form-group">
              <button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit">Submit</button>
            </div>
			
        </form>

       <div class="form-group" >
         <?php 
         $hasil; $untung;
    if(isset($_POST['jumlah'])){
      $jumlah = $_POST['jumlah'];
      $hasil = $jumlah * 100000;
      $untung = 0.1 * $hasil;
       echo "<p>Jumlah saham yang ingin dibeli = $jumlah saham</p>";
      echo "<p>Jumlah yang harus dibayarkan = Rp. $hasil,00</p>";
      echo "<p>Jumlah keuntungan yang didapat = Rp. $untung,00 </p>";
    }

    ?>    
      </div>

         


            
            
		<div  style="text-align:center;">
		
			<a href="#">	
              <button   class="btn btn-lg btn-primary" id="submit">Pilih Metode Pembayaran</button>
			</a>
		</div>
      </div>
    </div>
    <!--/.container--> 
  </div>
</section>


<?php
	include 'footer.php';
	
	?>
