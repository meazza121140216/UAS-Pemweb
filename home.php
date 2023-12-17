<!-- Berisi kode yang mengatur tampilan content beranda -->
<?php
if(isset($_SESSION['admin'])){
?>
<div class="container-awal">
    <div class="conten awal">
        <div class="desc">
            <h2>Halaman Dashboard Lapangan Mini Soccer</h2>
        </div>
        <div class="my_img">
            <img src="img/minsoc.jpg" alt="foto lapangan" >
        </div>
    </div>
</div>
<?php
}else{
?>
<div class=container-home>
    <aside class="home" id="tentang">
            <article class="profile-card">
                <h1 class="konten2">Football is Love</h1>
                <div class="my_img">
            <img src="img/minsoc.jpg" alt="foto lapangan" >
        </div>
                <h1 class="konten2">JEBRET!</h1>
                </a>
                <h2>Giuseppe Meazza</h2>
                <p>Attack Win You Game, Defend Win You Title</p>
            </article>
        </aside>
        </div>
<?php
}
?>