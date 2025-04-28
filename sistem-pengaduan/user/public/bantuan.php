<?php include("header.php"); ?>

            <!-- content -->
            <div class="main-content">


                <h3>Bantuan</h3>
                <hr/>

                <p>Anda dapat menyampaikan pengaduan Anda melalui tiga cara:</p>
                <p><strong>1. Secara Online</strong></p>
                <ul>
                    <li>
                        Masukan data pribadi dan pengaduan Anda di <strong><a href="lapor">sini</a></strong>
                    </li>
                    <li>
                        Setelah memasukan semua data yang diperlukan Anda akan mendapatkan nomor pengaduan,
                        <br>catat nomor ini karena Anda akan membutuhkannya untuk mengetahui status pengaduan Anda.
                    </li>
                    <li>
                        Untuk mengetahui status pengaduan, masukan nomor
                        pengaduan Anda pada menu <strong><a href="lihat">Lihat Pengaduan</a></strong>.
                    </li>
                    <li>
                        Bila ada data atau dokumen pelengkap yang ingin
                        disampaikan langsung, dapat menghubungi
                        <strong><a href="kontak">Bagian Pengaduan Masyarakat</a></strong>
                    </li>
                </ul>
                <p>&nbsp;</p>
                <p>
                    <strong>2. Melalui Surat</strong>
                </p>
                <ul>
                    <li>
                        Kirimkan surat pengaduan Anda ke alamat
                        <strong><a href="kontak">ini</a></strong>
                    </li>
                    <li>
                        Untuk mendapatkan nomor pengaduan silakan hubungi
                        <strong><a href="kontak">Bagian Pengaduan Masyarakat</a></strong>
                        Dispendukcapil Bangkalan
                    </li>
                    <li>
                        Untuk mengetahui status pengaduan, masukan nomor pengaduan
                        Anda pada menu <strong><a href="lihat">Lihat Pengaduan</a></strong>.
                    </li>
                </ul>
                <p>&nbsp;</p>
                <p>
                    <strong>3. Datang Langsung</strong>
                </p>
                <ul>
                    <li>
                        Silahkan datang langsung ke alamat
                         <strong><a href="kontak">Bagian Hubungan Masyarakat</a></strong>
                        Dispendukcapil Bangkalan
                    </li>
                    <li>
                        Setelah data Anda dimasukan, Anda akan diberikan nomor pengaduan,
                        catat nomor ini karena Anda akan membutuhkannya untuk mengetahui status pengaduan Anda.
                    </li>
                    <li>
                        Untuk mengetahui status pengaduan, masukan nomor pengaduan Anda
                        pada menu <strong><a href="lihat">Lihat Pengaduan</a></strong>.
                    </li>
                </ul>

                <!-- /.section -->

                <hr>
                <!-- link to top -->
                <a id="top" href="#" onclick="topFunction()">
                    <i class="fa fa-arrow-circle-up"></i>
                </a>
                <script>
                    // When the user scrolls down 100px from the top of the document, show the button
                    window.onscroll = function() {scrollFunction()};
                    function scrollFunction() {
                        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
                            document.getElementById("top").style.display = "block";
                        } else {
                            document.getElementById("top").style.display = "none";
                        }
                    }

                    // When the user clicks on the button, scroll to the top of the document
                    function topFunction() {
                        document.body.scrollTop = 0;
                        document.documentElement.scrollTop = 0;
                    }
                </script>
                <!-- link to top -->

            </div>
            
<?php include("footer.php"); ?>

