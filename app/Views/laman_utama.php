<div class="atasan">
  <div class="ikon">
    <img src="/img/ikon.png">
  </div>
  <div class="judul">
    <a class="navbar-brand" href="/">
      <h1><strong>LAUNDRY</strong><span>Melayani jasa cuci pakaian</span></h1>
    </a>
    <ul>
      <li>Jemput</li>
      <li>Antar</li>
      <li>Terjangkau</li>
    </ul>
  </div>
</div>

<div class="card">
  <div class="card-title"><h1>About Laundry</h1></div>
  <div class="row">
    <div class="col-md-6">
      <img src="/img/tentang.jpg">
    </div>
    <div class="col-md-6 px-4 mt-4">
      <p>Laundry sebagai jasa cuci antar jemput dapat memberikan anda pelayanan membersihkan pakaian sekaligus mengeringkannya lebih efesien ~90%. Kami menerima cucian saat cuaca sedang cerah, hujan, dan badai. Kami telah melayani jasa cuci pakaian lebih dari 100 juta pakaian telah dibersihkan. Saat ini agen agen kami sudah tersebar di seluruh pelosok negeri. Banyak manfaat yang anda dapatkan dari jasa kami.</p>
      <ul class="keuntungan-jasa">
        <li><i class="fa fa-check"></i>Praktis</li>
        <li><i class="fa fa-check"></i>Tepat waktu</li>
        <li><i class="fa fa-check"></i>Wangi</li>
        <li><i class="fa fa-check"></i>Bersih</li>
        <li><i class="fa fa-check"></i>Bebas jamur</li>
      </ul>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-title"><h1>List of Events</h1></div>
  <ul class="list-group">
    <li class="list-group-item">Order dengan email</li>
    <li class="list-group-item">Periksa email</li>
    <li class="list-group-item">Baca email penjemputan cucian</li>
    <li class="list-group-item">Baca email Start Wash</li>
    <li class="list-group-item">Baca email Start Dry</li>
    <li class="list-group-item">Baca email Start Smoothing</li>
    <li class="list-group-item">Baca email pengantaran cucian</li>
    <li class="list-group-item">Cucian sampai rumah</li>
    <li class="list-group-item">Bebas mencuci</li>
    <li class="list-group-item">[BONUS] Lihat tracking cucian!</li>
  </ul> 
</div>
<div class="card">
  <div class="card-title"><h1>Order Now!</h1></div>
  <div class="alert alert-warning">
    Aktifkan lokasi anda! Staff kami akan kesana beberapa menit lagi!
  </div>
  <div class="alert alert-info">
    Kirim lokasi ke <a href="https://wa.me/+6282331637604">Staff</a>
  </div>
  <div class="alert alert-success" id="jawaban" hidden>
    Email berhasil dikirim<br>
    Please check your mail
  </div>
  <div class="input-group mb-3 px-5">
    <input id="alamat-email" type="text" class="form-control" placeholder="Enter email" arial-label="Enter email" aria-describedby="basic-addon2">
    <div class="input-group-append d-flex">
        <span class="input-group-text" id="desk-email-input">@gmail.com</span>
        <button class="btn btn-primary" type="button" id="order-laundry">Order</button>
    </div>
  </div>
</div>
<div class="card">
  <div class="card-title"><h1>Lastest News</h1></div>
  <div class="row">
    <?php foreach ($news as $row):?>
      <div class="col-md-4">
        <div class="kartu-berita">
          <div class="thumbnail">
            <img src="/img/<?= $row->thumbnail ?>">
          </div>
          <div class="row keterangan-kartu">
            <div class="col-md-6">
              <i class="fa fa-user"></i><?= $row->penulis ?>
            </div>
            <div class="col-md-6">
              <i class="fa fa-calendar"></i><?= date("d-M-Y", strtotime( $row->publish)) ?>
            </div> 
          </div>
          <h5><?= $row->judul ?></h5>
          <p><?= substr($row->badan, 0, 130).'...' ?></p>
          <a href="/blog/<?= str_replace(' ', '-', $row->judul) ?>">Read more</a>
        </div>
      </div>
    <?php endforeach;?>
  </div>
</div>

