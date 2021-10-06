
@extends('Admin.includes.layout')
@section('pageTitle', 'General settings')
@push('styles')
<style>
    .dataTables_wrapper .dataTables_paginate .paginate_button {
    padding: 0px;
    }
    .page-item.active .page-link {
    color: #000;
    background-color: transparent;
    border: 1px solid #eae0d1;
    }
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background-color: transparent;
    border: 1px solid #eae0d1;
    }
</style>
@endpush

@section('content')
    <!-- Container Fluid-->
    <canvas id="myChart" width="400" height="150" aria-label="Sale Chart" role="img"></canvas>

        <div class="d-sm-flex align-items-center justify-content-between mb-4 mt-5">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="rewardlist" class="p-l-0 p-r-0 table table-bordered">
                        <thead style="background-color:#eae0d1; color:252222a6">
                            <tr>
                                {{-- <th>Reward ID</th> --}}
                                <th>Product</th>
                                <th>Count</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>            
@endsection

@push('scripts')
<script src="{{asset('Admin/vendor/chart.min.js/chart.min.js')}}"></script>

    <script>
        
        let myChart;
        dataTables();
        var table = $('#rewardlist').DataTable;
        function dataTables() {
            // list data
                table = $('#rewardlist').DataTable({

                processing: true,
                serverSide: true,
                draw:true,
                ajax: {
                    url: "{{ url('/rewards_datatable') }}",
                    type: 'GET',
                },
                "order": [
                [0, 'desc']
                ],
                columns: [
                {
                    data: 'reward',
                    name: 'reward'
                },
                {
                    data: 'count',
                    name: 'count'
                },
                


                ],
                dom: 'Brlftip',
                buttons: [
                    {
                        extend: 'copy',
                        exportOptions: {
                            columns: "thead th:not(.noExport)"
                        },
                    },
                    {
                        extend: 'csv',
                        exportOptions: {
                            columns: "thead th:not(.noExport)"
                        },
                    },
                    {
                        extend: 'excel',
                        exportOptions: {
                            columns: "thead th:not(.noExport)"
                        },
                    },
                    {
                        extend: 'pdf',
                        exportOptions: {
                            columns: "thead th:not(.noExport)"
                        },
                    },
                    {
                        extend: 'print',
                        text: 'Print',
                        exportOptions: {
                            columns: "thead th:not(.noExport)"
                        },
                        title: 'Orders history',
                        customize: function(win) {
                        // $(win.document.body)
                        // .css( 'font-size', '10pt' )
                        // .prepend(
                        // 	'<img src="http://datatables.net/media/images/logo-fade.png" style="position:absolute; top:0; left:0;" />'
                        // 	);

                        $(win.document.body).find('table')
                        .addClass('compact')
                        .css('font-size', 'inherit');
                        }
                    },

                ]
            });
        }
        
        topSale( )
		function topSale( ) {
            ddata =  $.get("{{ url('/rewards_stat_chart') }}/" , function(data) {})
            .done(function () {
                var topDatas = [];
                var topDatasName = [];
                for(let i = 0; i < ddata.responseJSON.length; i++){
                    topDatas[i] = ddata.responseJSON[i].count;
                    topDatasName[i] = ddata.responseJSON[i].reward;
                }

                var ctx = document.getElementById('myChart');
                if(myChart != null){
                    myChart.destroy();
                }

                myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        // labels: ["","","","",""],
                        labels: topDatasName,
                        datasets: [{
                            label: 'TOP REWARD ITEMS',
                            backgroundColor: ['rgb(50,205,50)', 'rgba(6, 215, 156)', 'rgba(135, 211, 124, 1)', 'rgba(240, 255, 0, 1)', 'rgba(245, 229, 27, 1)'],
                            data: topDatas,
                            borderColor: ['rgb(50,205,50)', 'rgba(6, 215, 156)', 'rgba(135, 211, 124, 1)', 'rgba(240, 255, 0, 1)', 'rgba(250, 216, 89, 1)'],
                            borderWidth: 1,
                        }]
                    },
                    options: {
                        plugins: {
                            legend: {
                                display: false
                            }
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    beginAtZero: true
                                }
                            }]
                        }
                    }
                });
            })
        }
    </script>
@endpush