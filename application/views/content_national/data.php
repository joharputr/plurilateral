<h2 id="title-tab" style="margin-bottom: 20px; ">National Initiative</h2>
        <hr>
<div class="row">
    <div class="col-md-4 mb-2">
        <?php
$this->load->view('/content_national/filter');
?>
    </div>
    <div class="col-md-8">
        <?php if (!empty($show)){ ?>
        <div class="card mb-3">
            <div class="card-body">
                <a href="#" onclick="actControl('preview');">
                    <h3 class="title-head-one">Lokakarya Nasional : Pengarusutamaan Moderasi Beragama Sebagai
                        Implementasi Resolusi Dewan HAM PBB 16/18</h3>
                </a>
                <h5 class="title-head-one text-success">Hotel Royal Kuningan Jakarta, 25-27 July 2018</h5>
                <hr>
                <p class="text-justify">Lokakarya Nasional dengan tema “Pengarusutamaan Toleransi Aktif dan Moderasi Agama sebagai Implementasi Resolusi Dewan HAM PBB 16/18” diselenggarakan di Jakarta, pada tanggal 25-27 Juli 2018. Lokakarya Nasional ini akan menyosialisasikan nilai-nilai Resolusi 16/18 kepada seluruh pemangku kepentingan, sekaligus juga menjaring masukan dari seluruh Forum Kerukunan Umat Beragama (FKUB) Propinsi tentang upaya penanganan intoleransi dan ujaran serta hasutan kebencian. Lokakarya Nasional merupakan kerjasama Kementerian Agama RI, Kementerian Luar Negeri RI, Kalijaga Institute for Justice dan didukung oleh Ford Foundation.</p>
            </div>
        </div>
    <?php } else { ?>
        <div class="card mb-3">
            <div class="card-body text-center bg-danger text-white">
            <span>Oppss Data Not Found <i class="fa fa-exclamation-circle"></i></span>
            </div>
        </div>
    <?php }?>
    </div>
</div>