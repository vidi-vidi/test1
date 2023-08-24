@extends('layouts.admin')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard </li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon bg-info elevation-1"> <i class="fas fa-clipboard-list"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Events</span>
                            <span class="info-box-number">
                                10
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-calendar-check"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Events Complete</span>
                            <span class="info-box-number">41</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-success elevation-1"><i class="fas fa-spinner"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Events Upcoming</span>
                            <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Members</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-header border-transparent">
                            <h3 class="card-title">Events</h3>

                            <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                    <i class="fas fa-minus"></i>
                                </button>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table m-0">
                                    <thead>
                                        <tr class="bg-light">
                                            <th>Nama</th>
                                            <th>Tanggal</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Call of Duty IV</td>
                                            <td>
                                                {{ date('d-m-Y') }}
                                            </td>
                                            <td><span class="badge badge-primary">Ongoing</span></td>

                                        </tr>

                                        <tr>
                                            <td>Call of Duty IV</td>
                                            <td>
                                                {{ date('d-m-Y') }}
                                            </td>
                                            <td><span class="badge badge-warning">Upcoming</span></td>

                                        </tr>

                                        <tr>
                                            <td>Call of Duty IV</td>
                                            <td>
                                                {{ date('d-m-Y') }}
                                            </td>
                                            <td><span class="badge badge-success">Complete</span></td>

                                        </tr>

                                        <tr>
                                            <td>Call of Duty IV</td>
                                            <td>
                                                {{ date('d-m-Y') }}
                                            </td>
                                            <td><span class="badge badge-warning">Upcoming</span></td>

                                        </tr>

                                        <tr>
                                            <td>Call of Duty IV</td>
                                            <td>
                                                {{ date('d-m-Y') }}
                                            </td>
                                            <td><span class="badge badge-success">Complete</span></td>

                                        </tr>

                                        <tr>
                                            <td>Call of Duty IV</td>
                                            <td>
                                                {{ date('d-m-Y') }}
                                            </td>
                                            <td><span class="badge badge-warning">Upcoming</span></td>

                                        </tr>

                                        <tr>
                                            <td>Call of Duty IV</td>
                                            <td>
                                                {{ date('d-m-Y') }}
                                            </td>
                                            <td><span class="badge badge-success">Complete</span></td>

                                        </tr>

                                        <tr>
                                            <td>Call of Duty IV</td>
                                            <td>
                                                {{ date('d-m-Y') }}
                                            </td>
                                            <td><span class="badge badge-success">Complete</span></td>

                                        </tr>

                                        <tr>
                                            <td>Call of Duty IV</td>
                                            <td>
                                                {{ date('d-m-Y') }}
                                            </td>
                                            <td><span class="badge badge-success">Complete</span></td>

                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <div class=" col-sm-7">
                    <div class="card card-primary">

                        <div class="card">
                            <div class="card-header border-transparent">
                                <h3 class="card-title">Upcoming Events</h3>

                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>

                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body p-0">
                                <div id="calendar"></div>
                            </div>
                            <!-- /.card-footer -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        var date = new Date()
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear()


        var calendarEl = document.getElementById('calendar');
        var Calendar = FullCalendar.Calendar;
        var calendar = new Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth,timeGridWeek,timeGridDay'
            },
            themeSystem: 'bootstrap',
            //Random default events
            events: [{
                    title: 'All Day Event',
                    start: new Date(y, m, 1),
                    backgroundColor: '#f56954', //red
                    borderColor: '#f56954', //red
                    allDay: true
                },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d - 5),
                    end: new Date(y, m, d - 2),
                    backgroundColor: '#f39c12', //yellow
                    borderColor: '#f39c12' //yellow
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false,
                    backgroundColor: '#0073b7', //Blue
                    borderColor: '#0073b7' //Blue
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false,
                    backgroundColor: '#00c0ef', //Info (aqua)
                    borderColor: '#00c0ef' //Info (aqua)
                },
                {
                    title: 'Birthday Party',
                    start: new Date(y, m, d + 1, 19, 0),
                    end: new Date(y, m, d + 1, 22, 30),
                    allDay: false,
                    backgroundColor: '#00a65a', //Success (green)
                    borderColor: '#00a65a' //Success (green)
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'https://www.google.com/',
                    backgroundColor: '#3c8dbc', //Primary (light-blue)
                    borderColor: '#3c8dbc' //Primary (light-blue)
                }
            ],
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(info) {
                // is the "remove after drop" checkbox checked?
                if (checkbox.checked) {
                    // if so, remove the element from the "Draggable Events" list
                    info.draggedEl.parentNode.removeChild(info.draggedEl);
                }
            }
        });

        calendar.render();
    </script>
@endsection
