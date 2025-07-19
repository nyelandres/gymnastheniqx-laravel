@extends('layouts.adminlte')

@section('subtitle', 'Products')
@section('content_header_title', 'Products')
{{-- @section('content_header_subtitle', 'Products') --}}
@section('content_body')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Monthly Products Receive</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="donutChart"
                        style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>


@stop

@push('js')
    <!-- Chart will be automatically included from config -->
    <script>
        const ctx = document.getElementById('donutChart').getContext('2d');
        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ['Chrome', 'IE', 'Firefox'],
                datasets: [{
                    data: [700, 500, 400],
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    </script>
@endpush
