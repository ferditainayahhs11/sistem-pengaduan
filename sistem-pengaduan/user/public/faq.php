<?php include("header.php"); ?>


            <!-- content -->
            <div class="main-content">
                <h3>Frequently Asked Question (FAQ):</h3>
                <hr/>
		        <p class="text-justify">
                    Q: Apakah Aplikasi Pengaduan Masyarakat Dispendukcapil Bangkalan ini?
                    <br />
		            A: Aplikasi Pengaduan Masyarakat Dispendukcapil Bangkalan adalah aplikasi
                    pengelolaan dan tindak lanjut pengaduan serta pelaporan hasil pengelolaan pengaduan yang
                    disediakan oleh Dispendukcapil Bangkalan sebagai salah satu sarana bagi
                    setiap pejabat/pegawai Dispendukcapil Bangkalan sebagai pihak internal
                    maupun masyarakat luas pengguna layanan Dispendukcapil Bangkalan sebagai
                    pihak eksternal untuk melaporkan dugaan adanya pelanggaran dan/atau ketidakpuasan terhadap
                    pelayanan yang dilakukan/diberikan oleh pejabat/pegawai Dispendukcapil Bangkalan.
                </p>
                <hr/>
        		<p class="text-justify">
                    Q: Apakah nomor pengaduan itu dan apa yang harus saya lakukan terhadap nomor pengaduan ini?
                    <br />
        		    A: Nomor pengaduan adalah nomor yang digunakan sebagai identitas dari sebuah laporan atau pengaduan
                    yang didapatkan ketika pelapor menyampaikan laporan melalui aplikasi ini.
                    Simpan dengan baik nomor pengaduan yang Anda peroleh, jangan sampai tercecer dan
                    diketahui oleh pihak yang tidak berhak karena pelayanan untuk mengetahui status tindak
                    lanjut pengaduan yang disampaikan hanya dapat diberikan melalui nomor pengaduan tersebut.
                </p>
                <hr/>
        		<p class="text-justify">
                    Q: Apakah bentuk respon yang diberikan kepada pelapor atas pengaduan yang disampaikan?
                    <br />
        		    A: Respon yang diberikan kepada pelapor berupa respon awal (ucapan terima kasih telah melakukan pengaduan)
                     dan status/tindak lanjut pengaduan paling akhir sesuai dengan respon yang telah diberikan
                     oleh pihak penerima pengaduan. Respon terkait dengan status/tindak lanjut pengaduan dapat
                     dilihat dalam history pengaduan.
                </p>
                <hr/>
        		<p class="text-justify">
                    Q: Berapa lama respon atas pengaduan yang disampaikan diberikan kepada pelapor?
                    <br />
        		    A: Sesuai dengan KMK 149 tahun 2011 jawaban/respon atas pengaduan yang
                    disampaikan wajib diberikan dalam kurun waktu paling lambat 30 (tiga puluh)
                    hari terhitung sejak pengaduan diterima.
        		    Untuk respon yang disampaikan tertulis melalui surat dapat diberikan apabila
                    pelapor mencantumkan identitas secara jelas (nama dan alamat koresponden).
                    Untuk respon dari media pengaduan lainnya akan disampaikan dan diberikan
                    sesuai identitas pelapor yang dicantumkan dalam media pengaduan tersebut.
                </p>
                <hr/>
        		<p class="text-justify">
                    Q: Apakah pengaduan yang saya berikan akan selalu mendapatkan respon?
                    <br />
        		    A: Pengaduan yang Anda berikan akan direspon dan tercantum dalam aplikasi
                    ini dan akan terupdate secara otomatis sesuai dengan respon yang telah
                    diberikan oleh pihak penerima pengaduan.
            		Untuk dapat melihat respon yang diberikan, Anda dapat
                    melihat status pengaduan dalam menu <strong><a href="lihat">Lihat Pengaduan</a></strong> sesuai dengan nomor
                    pengaduan yang didapatkan.
                    <br />
            		<i>Sebagai catatan, pengaduan Anda akan lebih mudah ditindaklanjuti
                    apabila memenuhi unsur pengaduan.</i>
                </p>
                <hr/>
        		<p class="text-justify">
                    Q: Apakah kerahasiaan identitas saya sebagai pengadu/pelapor terjaga?
                    <br />
        		    A: Kerahasiaan identitas Anda sebagai pelapor akan terjaga seperti yang telah
                    disebutkan dalam KMK 149 tahun 2011. Namun agar kerahasiaan identitas Anda dapat
                    lebih terjaga sebaiknya Anda memperhatikan hal-hal sebagaimana disebutkan di <strong><a href="bantuan">sini.</a></strong>
                </p>
                <hr>
            </div>

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
           
 <?php include("footer.php"); ?>
