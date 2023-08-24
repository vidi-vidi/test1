<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Library\Services\Template;

class AdminController extends Controller
{
    //
    function dashboard()
    {
        $data = Template::get();
        array_push($data['pilihCss'], "calender");
        array_push($data['pilihJs'], "calender");

        $data['jsTambahan'] = "$('#dashboard').addClass('active') ;";
        return view('admin.dashboard', $data);
    }

    function events()
    {
        $data = Template::get();
        array_push($data['pilihCss'], "calender");
        array_push($data['pilihJs'], "calender", "jqueryUI");

        $data['jsTambahan'] = "$('#events').addClass('active') ;";
        return view('admin.transaksi.events', $data);
    }

    function laporan()
    {
        $data = Template::get('defaultLaporan');

        $data['jsTambahan'] = "$('#events').addClass('active') ;";
        return view('admin.laporan.events_detail', $data);
    }

    function inbox()
    {
        $data = Template::get();
        array_push($data['pilihCss'], "calender");
        array_push($data['pilihJs'], "calender");

        $data['jsTambahan'] = "$('#dashboard').addClass('active') ;";
        return view('admin.inbox', $data);
    }

    function golongan()
    {
        $data = Template::get("defaultLaporan");

        $data['jsTambahan'] = "$('#golongan').addClass('active') ;";
        return view('admin.master.golongan', $data);
    }

    function template()
    {
        $data = Template::get("defaultLaporan");

        $data['jsTambahan'] = "$('#template').addClass('active') ;";
        return view('admin.master.templatesurat', $data);
    }

    function jabatan()
    {
        $data = Template::get("defaultLaporan");

        $data['jsTambahan'] = "$('#jabatan').addClass('active') ;";
        return view('admin.master.jabatan', $data);
    }

    function sbm()
    {
        $data = Template::get("defaultLaporan");

        $data['jsTambahan'] = "$('#sbm').addClass('active') ;";
        return view('admin.master.sbm', $data);
    }

    function rkakl()
    {
        $data = Template::get("defaultLaporan");

        $data['jsTambahan'] = "$('#rkakl').addClass('active') ;";
        return view('admin.master.rkakl', $data);
    }
}
