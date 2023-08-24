<?php

namespace App\Library\Services;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Template
{
    /*
    https://www.freeformatter.com/html-formatter.html#ad-output
        FUNCTION TEMPLATE UNTUK MENYIMPAN LOKASI CSS DAN JS
    https://id.pinterest.com/awsmcolor/color-name-codes/
    */
    static function get($jenis = '')
    {
        $data['pilihCss'] = [];
        $data['pilihJs'] = [];
        $data['username'] = Auth::user()->name;
        /*
            CSS YANG SELALU DIGUNAKAN ADMIN LTE
        */

        $css['select2'] = "plugins/select2/css/select2.min.css";
        $css['select22'] = "plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css";
        $css['googleFont'] = "https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback";
        $css['fontAwesome'] = "/plugins/fontawesome-free/css/all.min.css";
        $css['ionicons'] = "https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css";
        $css['color'] = "plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css";
        $css['themeStyle'] = "/dist/css/adminlte.min.css";
        $css['overlayScrollbars'] = "/plugins/overlayScrollbars/css/OverlayScrollbars.min.css";
        $css['tempusdominus'] = "plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css";
        $css['sweetAlert2'] = "plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css";
        $css['toastr'] = "plugins/toastr/toastr.min.css";
        $css['daterange'] = "/plugins/daterangepicker/daterangepicker.css";
        $css['check'] = "/plugins/icheck-bootstrap/icheck-bootstrap.min.css";
        /*
            SELECT CSS 
        */
        foreach ($css as $key => $value) {
            array_push($data['pilihCss'], $key);
        }
        $css['dataTables1'] = "plugins/datatables-bs4/css/dataTables.bootstrap4.min.css";
        $css['dataTables2'] = "plugins/datatables-responsive/css/responsive.bootstrap4.min.css";
        $css['dataTableButton'] = "plugins/datatables-buttons/css/buttons.bootstrap4.min.css";
        $css['dropzone'] = "plugins/dropzone/min/dropzone.min.css";
        $css['dashboard'] = "css/dashboard.css";
        $css['dataTablehref'] = "https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css";
        $css['calender'] = "plugins/fullcalendar/main.css";
        /*
            JAVASCRIPT YANG SELALU DIGUNAKAN ADMIN LTE
        */
        $js['jQuery'] = "plugins/jquery/jquery.min.js";
        $js['overlayScrollbars'] = "plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js";
        $js['adminLTEApp'] = "dist/js/adminlte.js";
        $js['adminLTEDemo'] = "dist/js/demo.js";
        $js['bootstrap4'] = "plugins/bootstrap/js/bootstrap.bundle.min.js";
        $js['sweetAlert2'] = "plugins/sweetalert2/sweetalert2.min.js";
        $js['select2'] = "plugins/select2/js/select2.full.min.js";
        $js['toast'] = "plugins/toastr/toastr.min.js";
        $js['pusher'] = "https://js.pusher.com/7.0/pusher.min.js";
        $js['moment'] = "plugins/moment/moment.min.js";
        $js['daterange'] = "plugins/daterangepicker/daterangepicker.js";
        $js['color'] = "plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js";
        // SELECT JS 
        foreach ($js as $key => $value) {
            array_push($data['pilihJs'], $key);
        }

        $js['calender']  = "plugins/fullcalendar/main.js";
        $js['jqueryUI']  = "plugins/jquery-ui/jquery-ui.min.js";
        $js['customFile']  = "plugins/bs-custom-file-input/bs-custom-file-input.min.js";
        $js['dataTables1'] = "plugins/datatables/jquery.dataTables.min.js";
        $js['dataTables2'] = "plugins/datatables-bs4/js/dataTables.bootstrap4.min.js";
        $js['dataTables3'] = "plugins/datatables-responsive/js/dataTables.responsive.min.js";
        $js['dataTables4'] = "plugins/datatables-responsive/js/responsive.bootstrap4.min.js";

        $js['dataTablehref'] = "https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js";
        $js['dataTableButton1'] = "plugins/datatables-buttons/js/dataTables.buttons.min.js";
        $js['dataTableButton2'] = "plugins/datatables-buttons/js/buttons.bootstrap4.min.js";

        $js['dataTableButtonZip'] = "plugins/jszip/jszip.min.js";
        $js['dataTableButtonPdfMake'] = "plugins/pdfmake/vfs_fonts.js";
        $js['dataTableButtonHtml'] = "plugins/datatables-buttons/js/buttons.html5.min.js";
        $js['dataTableButtonPdf'] = "plugins/pdfmake/pdfmake.min.js";
        $js['dataTableButtonPrint'] = "plugins/datatables-buttons/js/buttons.print.min.js";
        $js['dataTableButtonCol'] = "plugins/datatables-buttons/js/buttons.colVis.min.js";

        $js['animation'] = "https://cdnjs.cloudflare.com/ajax/libs/web-animations/2.3.2/web-animations.min.js";
        $js['muri'] = "https://cdn.jsdelivr.net/gh/haltu/muuri@0.9.3/dist/muuri.min.js";
        $js['dashboard'] = "js/dashboard.js";
        $js['dashboardMuri'] = "js/muri.js";
        $js['dropzone'] = "plugins/dropzone/min/dropzone.min.js";


        $data['js'] = $js;
        $data['css'] = $css;
        if ($jenis == 'laporan') {
            array_push($data['pilihCss'], "ionicons", "dataTables1", "dataTables2", "dataTableButton");
            array_push(
                $data['pilihJs'],
                "animation",
                "dataTables1",
                "dataTables2",
                "dataTables3",
                "dataTables4",
                "dataTableButton1",
                "dataTableButton2",
                "dataTableButtonPdf",
                "dataTableButtonZip",
                "dataTableButtonPdfMake",
                "dataTableButtonHtml",
                "dataTableButtonPrint",
                "dataTableButtonCol"
            );
            $data['jsTambahan'] = "
            $('#example1').DataTable({
                //'order' : [0,'desc'],
                'responsive': true, 'lengthChange': false, 'autoWidth': false,
                'buttons': ['copy', 'csv', 'excel']
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('.overlay').addClass('d-none');
            ";
        }

        if ($jenis == "defaultLaporan") {
            array_push($data['pilihCss'], "dashboard", "ionicons", "dataTables1", "dataTables2");
            array_push($data['pilihJs'], "animation", "dashboard", "dataTables1", "dataTables2", "dataTables3", "dataTables4");
        }
        return $data;
    }
}
