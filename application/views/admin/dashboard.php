    <div class="page">
        <!-- <div class="page-header">
            <h1 class="page-title font-size-26 font-weight-100">Halaman Dashboard</h1>
        </div> -->
        <div class="page-header h-300 mb-30" style="background-image: url(<?= base_url('assets/bg_aplikasi.jpg') ?>); background-size: cover;">
            <div class="text-center blue-grey-800 m-0 mt-50">
                <div class="font-size-50 mb-30 blue-grey-800 text-center">
                    <img src="<?= base_url('assets/logo_umri.png') ?>" height="100px;" alt="">
                </div>
                <ul class="list-inline font-size-14">
                    <li class="list-inline-item font-weight-bold">
                        <h5><i class="icon wb-map mr-5" aria-hidden="true"></i> Universitas Muhammadiyah Riau</h5> Simpang Komersil Arengka (SKA, Jl. Tuanku Tambusai, Delima, Kec. Tampan, Kota Pekanbaru, Riau 28290
                    </li>
                </ul>
            </div>
        </div>
        <div class="page-content container-fluid">
            <div class="row">
                <div class="col-xl-3 col-md-6 info-panel">
                    <div class="card card-shadow">
                        <div class="card-block bg-white p-20">
                            <button type="button" class="btn btn-floating btn-sm btn-warning">
                                <i class="icon wb-envelope"></i>
                            </button>
                            <span class="ml-15 font-weight-400">Semua Pengajuan</span>
                            <div class="content-text text-center mb-0">
                                <?php foreach ($countall as $key) : ?>
                                    <span class="font-size-40 font-weight-100"> <?php echo $key['jumlah'] ?></span>
                                <?php endforeach ?>
                                <!-- <a href="<?= base_url('admin/aduan') ?>">
                                    <p class="blue-grey-400 font-weight-100 m-0">Lihat Selengkapnya <i class="icon fa-info-circle"></i></p>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 info-panel">
                    <div class="card card-shadow">
                        <div class="card-block bg-white p-20">
                            <button type="button" class="btn btn-floating btn-sm btn-success">
                                <i class="icon wb-check"></i>
                            </button>
                            <span class="ml-15 font-weight-400">Menunggu verifikasi</span>
                            <div class="content-text text-center mb-0">
                                <?php foreach ($count1 as $key) : ?>
                                    <span class="font-size-40 font-weight-100"> <?php echo $key['jumlah'] ?></span>
                                <?php endforeach ?>
                                <!-- <a href="<?= base_url('admin/aduan') ?>">
                                    <p class="blue-grey-400 font-weight-100 m-0">Lihat Selengkapnya <i class="icon fa-info-circle"></i></p>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 info-panel">
                    <div class="card card-shadow">
                        <div class="card-block bg-white p-20">
                            <button type="button" class="btn btn-floating btn-sm btn-primary">
                                <i class="icon wb-time"></i>
                            </button>
                            <span class="ml-15 font-weight-400">Sedang Diproses</span>
                            <div class="content-text text-center mb-0">
                                <?php foreach ($count2 as $key) : ?>
                                    <span class="font-size-40 font-weight-100"> <?php echo $key['jumlah'] ?></span>
                                <?php endforeach ?>
                                <!-- <a href="<?= base_url('admin/aduan') ?>">
                                    <p class="blue-grey-400 font-weight-100 m-0">Lihat Selengkapnya <i class="icon fa-info-circle"></i></p>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 info-panel">
                    <div class="card card-shadow">
                        <div class="card-block bg-white p-20">
                            <button type="button" class="btn btn-floating btn-sm btn-danger">
                                <i class="icon fa-warning"></i>
                            </button>
                            <span class="ml-15 font-weight-400">Ditolak</span>
                            <div class="content-text text-center mb-0">
                                <?php foreach ($count3 as $key) : ?>
                                    <span class="font-size-40 font-weight-100"> <?php echo $key['jumlah'] ?></span>
                                <?php endforeach ?>
                                <!-- <a href="<?= base_url('admin/aduan') ?>">
                                    <p class="blue-grey-400 font-weight-100 m-0">Lihat Selengkapnya <i class="icon fa-info-circle"></i></p>
                                </a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-success text-white">
                            <i class="fa fa-paper-plane"></i> Visi & Misi
                        </div>
                        <div class="card-body">
                            <p>
                                Azas UMRI berasaskan Al-Quran, As-Sunnah, Pancasila dan Undang-Undangan Dasar 1945. Tujuan Menyiapkan peserta didik menjadi sarjana muslim yang beriman dan bertaqwa, bermarwah dan bermartabat yang mempunyai kemampuan akademik dan profesional serta beramal menuju terwujudnya masyarakat utama, adil dan makmur yang di ridhai Allah SWT. Mengamalkan, mengembangkan, menciptakan dan menyebarluaskan ilmu pengetahuan, teknologi dan kesenian dalam rangka memajukan islam dan meningkatkan kesejahteraan umat manusia. Visi Menjadikan Universitas Muhammadiyah Riau sebagai lembaga pendidikan tinggi yang bermarwah dan bermartabat dalam menghasilkan sumber daya manusia yang menguasai IPTEKS dengan landasan IMTAQ tahun 2030. Misi Mewujudkan keunggulan bidang pendidikan, pengajaran, penelitian, pengabdian kepada masyarakat dan Al-Islam Kemuhammadiyahan. Menguasai dan memanfaatkan Ilmu Pengetahuan dan Teknologi dalam pendidikan, pengajaran, penelitian, pengabdian kepada masyarakat dan Al-Islam Kemuhammadiyahan. Menyelenggarakan pendidikan, pengajaran, penelitian, pengabdian kepada masyarakat yang dilandasi etika, nilai dan moral Islami. Menciptakan iklim kondusif untuk tumbuh dan berkembangnya budaya mutu, pengembangan IPTEK dan implementasi iman dan taqwa.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>


        <script>
            var ctx = document.getElementById('grafikall').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: [<?php foreach ($dataall as $key) {
                                    echo '"' . $key['tanggal_aduan'] . '",';
                                } ?>],
                    datasets: [{
                        label: 'Aduan yang Masuk',
                        backgroundColor: '#2AB32F',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [<?php foreach ($dataall as $key) {
                                    echo '"' . $key['jumlah'] . '",';
                                } ?>]
                    }]
                },

                // Configuration options go here
                options: {
                    scales: {
                        xAxes: [{
                            barPercentage: 0.5,
                            barThickness: 6,
                            maxBarThickness: 8,
                            minBarLength: 2,
                            gridLines: {
                                offsetGridLines: true
                            }
                        }]
                    }
                }
            });
        </script>

        <script>
            var ctx = document.getElementById('grafik1').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: [<?php foreach ($data1 as $key) {
                                    echo '"' . $key['tanggal_aduan'] . '",';
                                } ?>],
                    datasets: [{
                        label: 'Aduan yang Selesai',
                        backgroundColor: '',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [<?php foreach ($data1 as $key) {
                                    echo '"' . $key['jumlah'] . '",';
                                } ?>]
                    }]
                },

                // Configuration options go here
                options: {
                    scales: {
                        xAxes: [{
                            barPercentage: 0.5,
                            barThickness: 6,
                            maxBarThickness: 8,
                            minBarLength: 2,
                            gridLines: {
                                offsetGridLines: true
                            }
                        }]
                    }
                }
            });
        </script>

        <script>
            var ctx = document.getElementById('grafik2').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: [<?php foreach ($data2 as $key) {
                                    echo '"' . $key['tanggal_aduan'] . '",';
                                } ?>],
                    datasets: [{
                        label: 'Aduan yang Sedang Dikerjakan',
                        backgroundColor: '',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [<?php foreach ($data2 as $key) {
                                    echo '"' . $key['jumlah'] . '",';
                                } ?>]
                    }]
                },

                // Configuration options go here
                options: {
                    scales: {
                        xAxes: [{
                            barPercentage: 0.5,
                            barThickness: 6,
                            maxBarThickness: 8,
                            minBarLength: 2,
                            gridLines: {
                                offsetGridLines: true
                            }
                        }]
                    }
                }
            });
        </script>

        <script>
            var ctx = document.getElementById('grafik3').getContext('2d');
            var chart = new Chart(ctx, {
                // The type of chart we want to create
                type: 'line',

                // The data for our dataset
                data: {
                    labels: [<?php foreach ($data3 as $key) {
                                    echo '"' . $key['tanggal_aduan'] . '",';
                                } ?>],
                    datasets: [{
                        label: 'Aduan yang Belum Dikerjakan',
                        backgroundColor: '#2AB32F',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [<?php foreach ($data3 as $key) {
                                    echo '"' . $key['jumlah'] . '",';
                                } ?>]
                    }]
                },

                // Configuration options go here
                options: {
                    scales: {
                        xAxes: [{
                            barPercentage: 0.5,
                            barThickness: 6,
                            maxBarThickness: 8,
                            minBarLength: 2,
                            gridLines: {
                                offsetGridLines: true
                            }
                        }]
                    }
                }
            });
        </script>