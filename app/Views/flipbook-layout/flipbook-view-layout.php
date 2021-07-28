<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="<?= base_url('flipbook/images/KPK_Logo.svg') ?>">
    <title>View PDF</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- AJAX -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <!-- costume css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('flipbook/css/flipbook.style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('flipbook/css/font-awesome.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('flipbook/css/footer.css') ?>">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Include JS -->
    <script src="<?= base_url('flipbook/js/flipbook.min.js') ?>"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#read").flipBook({
                //Layout Setting
                pdfUrl: '<?= base_url('pdf/' . $clipping['file']); ?>',
                lightBox: true,
                layout: 3,
                currentPage: {
                    vAlign: "bottom",
                    hAlign: "left"
                },
                // BTN SETTING
                btnShare: {
                    enabled: false
                },
                btnPrint: {
                    hideOnMobile: true
                },
                btnDownloadPages: {
                    enabled: true,
                    title: "Download pages",
                    icon: "fa-download",
                    icon2: "file_download",
                    url: "images/pdf.rar",
                    name: "allPages.zip",
                    hideOnMobile: false
                },
                btnColor: 'rgb(255,120,60)',
                sideBtnColor: 'rgb(255,120,60)',
                sideBtnSize: 60,
                sideBtnBackground: "rgba(0,0,0,.7)",
                sideBtnRadius: 60,
                btnSound: {
                    vAlign: "top",
                    hAlign: "left"
                },
                btnAutoplay: {
                    vAlign: "top",
                    hAlign: "left"
                },
                // SHARING
                btnShare: {
                    enabled: true,
                    title: "Share",
                    icon: "fa-share-alt"
                },
                facebook: {
                    enabled: true,
                    url: "#"
                },
                google_plus: {
                    enabled: false
                },
                email: {
                    enabled: true,
                    url: "#",
                    title: "PDF KPK",
                    description: "Silahkan click link di bawah untuk melihat / mengunduf pdf"
                },
                twitter: {
                    enabled: true,
                    url: "#"
                },
                pinterest: {
                    enabled: true,
                    url: "#"
                }
            });
        })
    </script>

    <style>
        body {
            background-color: #f6f6f6;
        }

        #author {
            font-size: 15px;
            font-weight: bold;
            color: #0186c9;
        }

        #date {
            margin-left: 10px;
            font-size: 15px;
            color: #819196;
        }

        #size {
            font-size: 15px;
            color: #819196;
        }

        #description {
            margin-top: 20px;
            font-weight: lighter;
        }
    </style>

</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
        <a class="navbar-brand" href="/">
            <img src="<?= base_url('flipbook/images/logo.png') ?>" alt="KPK LOGO" width="150">
        </a>
    </nav>
    <!-- End Of Navbar -->

    <br><br><br><br><br>

    <!-- Begin Page Content -->
    <?= $this->renderSection('content'); ?>
    <!-- End of Main Content -->


    <!-- Footer -->
    <section id="footer" class="footer mt-5">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Tentang KPK</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Pejabat Struktural</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Rencana Strategis</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Layanan Publik</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Pengaduan Masyarakat</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>LHKPN</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Gratifikasi</a></li>
                        <li><a href="#"><i class="fa fa-angle-double-right"></i>Informasi Publik</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <h5>Kontak KPK</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i></i>GEDUNG KPK Jl. Kuningan Persada Kav. 4 Jakarta Selatan 12950</a></li>
                        <li><a href="#"><i class="fas fa-phone"></i>(021) 2557 8300</a></li>
                        <li><a href="#"><i class="fas fa-fax"></i>(021) 2557 8333</a></li>
                        <li><a href="#"><i class="fas fa-envelope"></i>informasi@kpk.go.id</a></li>
                        <li><a href="#"><i class="fas fa-headset"></i></i>Call Center: 198</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter-square"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-youtube-square"></i></a></li>
                    </ul>
                </div>
                </hr>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p class="h6">Hak Cipta © 2017 Komisi Pemberantasan Korupsi. Semua Hak Dilindungi.</p>
                </div>
                </hr>
            </div>
        </div>
    </section>
    <!-- End Of Footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>

</html>