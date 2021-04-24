@extends('layout/master')

@section('title', 'Diagram batang')

@section('main-content')
<div class="row mb-5">
  <div class="col-10">

    <h1 class="my-3">Diagram Batang Mahasiswa</h1>

    <canvas id="myChart" width="400" height="400"></canvas>

  </div>
</div>

@endsection

@push('script-after')
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.1.1/dist/chart.min.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Teknik Informatika', 'Teknik Elektro', 'Teknik Mesin'],
            datasets: [{
                label: '# of Value',
                data: [{{$informatika}}, {{$elektro}}, {{$mesin}}],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    // 'rgba(75, 192, 192, 0.2)',
                    // 'rgba(153, 102, 255, 0.2)',
                    // 'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    // 'rgba(75, 192, 192, 1)',
                    // 'rgba(153, 102, 255, 1)',
                    // 'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>
@endpush