<!DOCTYPE html>
<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
    <!-- Costume CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('flipbook/css/flipbook.style.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('flipbook/css/footer.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('flipbook/css/font-awesome.css') ?>">
    <!-- Bootstrap Css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <script src="<?= base_url('flipbook/js/flipbook.min.js') ?>"></script>

    <script type="text/javascript">
        // $(document).ready(function () {
        //     $(".book-1").flipBook({
        //         // Layout Setting
        //         pdfUrl:'pdf/pdf.pdf',
        //         lightBox:true,
        //         layout:3,
        //         currentPage:{vAlign:"bottom", hAlign:"left"},
        //         // BTN SETTING
        //         btnShare : {enabled:false},
        //         btnPrint : {
        //           hideOnMobile:true
        //         },
        //         btnDownloadPages : {
        //           enabled: true,
        //           title: "Download pages",
        //           icon: "fa-download",
        //           icon2: "file_download",
        //           url: "images/pdf.rar",
        //           name: "allPages.zip",
        //           hideOnMobile:false
        //         },
        //         btnColor:'rgb(255,120,60)',
        //         sideBtnColor:'rgb(255,120,60)',
        //         sideBtnSize:60,
        //         sideBtnBackground:"rgba(0,0,0,.7)",
        //         sideBtnRadius:60,
        //         btnSound:{vAlign:"top", hAlign:"left"},
        //         btnAutoplay:{vAlign:"top", hAlign:"left"},
        //         // SHARING
        //         btnShare : {
        //           enabled: true,
        //           title: "Share",
        //           icon: "fa-share-alt"
        //         },
        //         facebook : {
        //           enabled: true,
        //           url: "ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf"
        //         },
        //         google_plus : {
        //           enabled: false
        //         },
        //         email : {
        //         enabled: true,
        //         url: "https://ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf",
        //         title: "PDF KPK",
        //         description: "Silahkan click link di bawah untuk melihat / mengunduf pdf"
        //         },
        //         twitter : {
        //         enabled: true,
        //         url: "https://ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf"
        //         },
        //         pinterest : {
        //         enabled: true,
        //         url: "https://ismanyan.github.io/Pdf_flipbook.demo.github.io/pdf/pdf.pdf"
        //         }
        //     });
        // })
    </script>

    <style type="text/css">
        body {
            background-color: #f6f6f6;
        }

        .bookshelf .thumb {
            display: inline-block;
            cursor: pointer;
            margin: 0px 0.5%;
            width: 15% !important;
            box-shadow: 0px 1px 3px rgba(0, 0, 0, .3);
            max-width: 200px;
        }

        .bookshelf .thumb img {
            width: 100%;
            display: block;
            vertical-align: top;
        }

        .bookshelf .shelf-img {
            z-index: 0;
            height: 15%;
            width: 75%;
            max-width: 200%;
            vertical-align: top;
            margin-top: -12px;
        }

        .bookshelf .covers {
            width: 100%;
            height: auto;
            z-index: 99;
            position: relative;
            text-align: center;
        }

        .bookshelf {
            text-align: center;
            padding: 0px;
        }

        /* Pagination */
        .pagination>li>a,
        .pagination>li>span {
            color: #c0392b;
        }

        .pagination>li>a:hover,
        .pagination>li>span:hover {
            color: #c0392b !important;
        }

        .pagination>li.active>a {
            background-color: #c0392b !important;
            border: 0;
            color: #fff;
        }
    </style>
    <!-- <link rel="shortcut icon" href="images/KPK_Logo.svg"> -->

</head>

<body>