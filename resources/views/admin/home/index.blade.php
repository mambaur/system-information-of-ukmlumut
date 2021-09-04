@extends('admin.layout.main', ['menu' => 'home'])

@section('title', 'Halaman Admin Pengurus UKM LUMUT')

@section('container')
<!-- / .main-navbar -->
<div class="main-content-container container-fluid px-4">
<!-- / .main-navbar -->
<div class="main-content-container container-fluid px-4">
  <!-- Page Header -->
  <div class="page-header row no-gutters py-4">
    <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
      <span class="text-uppercase page-subtitle">Dashboard</span>
      <h3 class="page-title">
      <?php
        $user_name = \Auth::user()->name;
        $greeting = '';
        $hour = date('H');
        if ($hour >= 18) {
          $greeting = "Selamat Malam";
        } elseif ($hour >= 12) {
            $greeting = "Selamat Sore";
        } elseif ($hour < 12) {
          $greeting = "Selamat Pagi";
        }

        echo $greeting.', '.$user_name;
      ?>
      </h3>
    </div>
  </div>
  <!-- End Page Header -->
  <!-- Small Stats Blocks -->
  <div class="row">
    <div class="col-lg col-md-6 col-sm-6 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Total Anggota</span>
              <h6 class="stats-small__value count my-3">{{count($anggota)}}</h6>
            </div>
            <div class="stats-small__data">
              <span class="stats-small__percentage"><i class="material-icons">person</i> Orang</span>
            </div>
          </div>
          {{-- <canvas height="120" class="blog-overview-stats-small-1"></canvas> --}}
        </div>
      </div>
    </div>
    <div class="col-lg col-md-6 col-sm-6 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Total Alumni</span>
              <h6 class="stats-small__value count my-3">{{count($alumni)}}</h6>
            </div>
            <div class="stats-small__data">
              <span class="stats-small__percentage"><i class="material-icons">person</i> Orang</span>
            </div>
          </div>
          {{-- <canvas height="120" class="blog-overview-stats-small-2"></canvas> --}}
        </div>
      </div>
    </div>
    <div class="col-lg col-md-4 col-sm-6 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Bidang Lukis</span>
              <h6 class="stats-small__value count my-3">{{count($lukis)}}</h6>
            </div>
            <div class="stats-small__data">
              <span class="stats-small__percentage"><i class="material-icons">person</i> Orang</span>
            </div>
          </div>
          {{-- <canvas height="120" class="blog-overview-stats-small-3"></canvas> --}}
        </div>
      </div>
    </div>
    <div class="col-lg col-md-4 col-sm-6 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Bidang Musik</span>
              <h6 class="stats-small__value count my-3">{{count($musik)}}</h6>
            </div>
            <div class="stats-small__data">
              <span class="stats-small__percentage"><i class="material-icons">person</i> Orang</span>
            </div>
          </div>
          {{-- <canvas height="120" class="blog-overview-stats-small-4"></canvas> --}}
        </div>
      </div>
    </div>
    <div class="col-lg col-md-4 col-sm-12 mb-4">
      <div class="stats-small stats-small--1 card card-small">
        <div class="card-body p-0 d-flex">
          <div class="d-flex flex-column m-auto">
            <div class="stats-small__data text-center">
              <span class="stats-small__label text-uppercase">Bidang Tari</span>
              <h6 class="stats-small__value count my-3">{{count($tari)}}</h6>
            </div>
            <div class="stats-small__data">
              <span class="stats-small__percentage"><i class="material-icons">person</i> Orang</span>
            </div>
          </div>
          {{-- <canvas height="120" class="blog-overview-stats-small-5"></canvas> --}}
        </div>
      </div>
    </div>
  </div>
  <!-- End Small Stats Blocks -->
  <div class="row">
    <!-- Users Stats -->
    <div class="col-lg-8 col-md-12 col-sm-12 mb-4">
      <div class="card card-small">
        <div class="card-header border-bottom">
          <h6 class="m-0">Anggota per-tahun</h6>
        </div>
        <div class="card-body pt-0">
          <canvas height="130" style="max-width: 100% !important;" class="blog-overview-users"></canvas>
        </div>
      </div>
    </div>
    <!-- End Users Stats -->
    <!-- Users By Device Stats -->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card card-small h-100">
        <div class="card-header border-bottom">
          <h6 class="m-0">Persentase per-bidang</h6>
        </div>
        <div class="card-body d-flex py-0">
          <canvas height="220" class="blog-users-by-device m-auto"></canvas>
        </div>
        <div class="card-footer border-top">
          <div class="row">
            <div class="col">
            </div>
            <div class="col text-right view-report">
              <a href="/admin/anggota">Lihat semua anggota &rarr;</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Users By Device Stats -->
    <!-- New Draft Component -->
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <!-- Quick Post -->
      <div class="card card-small">
        <div class="card-header border-bottom">
          <h6 class="m-0">Kritik dan saran</h6>
        </div>
        <div class="card-body d-flex flex-column">
          @foreach ($pesan as $item)
          <div class="blog-comments__item d-flex p-1">
            <div class="blog-comments__content">
              <p class="m-0 my-1 text-muted"><span class="badge badge-success mr-1">Pesan!</span>
                {!! \Illuminate\Support\Str::words($item->isi_pesan, 5,'....') !!}
              </p>
            </div>
          </div>
          @endforeach
          @if (!count($pesan))
          <div class="blog-comments__item d-flex justify-content-center p-1">
            <div class="blog-comments__content">
              <p class="m-0 my-1 text-muted">
                Belum ada pesan.</p>
            </div>
          </div>
          @endif
          <div class="row">
            <div class="col text-center view-report mt-3">
              <a href="/admin/pesan"><button type="button" class="btn btn-white">Lihat semua pesan</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End New Draft Component -->
    <!-- Artikel Component -->
    <div class="col-lg-5 col-md-12 col-sm-12 mb-4">
      <div class="card card-small blog-comments">
        <div class="card-header border-bottom d-flex justify-content-between">
          <h6 class="m-0">Artikel Terbaru</h6>
          <h6 class="m-0"><a href="/admin/artikel/tambah">+ Tambah</a></h6>
        </div>
        <div class="card-body p-0">
          @foreach ($artikel as $item)
          <div class="blog-comments__item d-flex p-3">
            <div class="blog-comments__avatar mr-3">
              <img style="object-fit: cover" src="/assets/admin/images/artikel/{{$item->image}}" alt="User avatar" /> </div>
            <div class="blog-comments__content">
              <div class="blog-comments__meta text-muted">
                <a class="text-secondary" href="#">{{$item->judul}}</a>
                <span class="text-muted">– {{$item->created_at}}</span>
              </div>
              <p class="m-0 my-1 mb-2 text-muted">
                {!! \Illuminate\Support\Str::words($item->konten, 10,'....') !!}
                <a href="/admin/artikel/edit/{{$item->id}}">Selengkapnya</a>
              </p>
            </div>
          </div>
          @endforeach
          @if (!count($artikel))
              <p class="text-center text-secondary m-3">Belum ada artikel. <a href="/admin/artikel/tambah">Tambah sekarang!</a></p>
          @endif
        </div>
      </div>
    </div>
    <!-- End Artikel Component -->
    <!-- Top Referrals Component -->
    <div class="col-lg-3 col-md-12 col-sm-12 mb-4">
      <div class="card card-small">
        <div class="card-header border-bottom">
          <h6 class="m-0">Informasi</h6>
        </div>
        <div class="card-body p-0">
          <ul class="list-group list-group-small list-group-flush">
            <li class="list-group-item d-flex px-3">
              <span class="text-semibold text-fiord-blue">Permohonan peminjaman</span>
              <span class="ml-auto text-right text-semibold text-reagent-gray">{{$peminjaman}}</span>
            </li>
            <li class="list-group-item d-flex px-3">
              <span class="text-semibold text-fiord-blue">Total CA</span>
              <span class="ml-auto text-right text-semibold text-reagent-gray">{{count($ca)}}</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Referrals Component -->
  </div>
</div>
</div>

{{-- // Data untuk pie chart --}}
<input type="hidden" id="lukis-total" value="{{count($lukis)}}">
<input type="hidden" id="musik-total" value="{{count($musik)}}">
<input type="hidden" id="tari-total" value="{{count($tari)}}">
@endsection

@section('script')
    <script>
      var lukis = document.getElementById('lukis-total').value;
      var musik = document.getElementById('musik-total').value;
      var tari = document.getElementById('tari-total').value;

      // Pie chart
      var ubdCtx = document.getElementsByClassName('blog-users-by-device')[0];
      var ubdData = {
        datasets: [{
          hoverBorderColor: '#ffffff',
          data: [lukis, musik, tari],
          backgroundColor: [
            'rgba(0,123,255,0.9)',
            'rgba(0,123,255,0.5)',
            'rgba(0,123,255,0.3)'
          ]
        }],
        labels: ["Lukis", "Musik", "Tari"]
      };

      var ubdOptions = {
        legend: {
          position: 'bottom',
          labels: {
            padding: 25,
            boxWidth: 20
          }
        },
        cutoutPercentage: 0,
        // Uncomment the following line in order to disable the animations.
        // animation: false,
        tooltips: {
          custom: false,
          mode: 'index',
          position: 'nearest'
        }
      };

      window.ubdChart = new Chart(ubdCtx, {
        type: 'pie',
        data: ubdData,
        options: ubdOptions
      });


      //
    // Blog Overview Users
    //

    var bouCtx = document.getElementsByClassName('blog-overview-users')[0];

    // Data
    var bouData = {
      // Generate the days labels on the X axis.
      labels: [
        <?php
          if($key_total_anggota){
            foreach($key_total_anggota as $key => $item){
              echo $item.', ' ;
              // if($key ==  2){break;}
            }
          }
        ?>
      ],
      // labels: Array.from(new Array(3), function (_, i) {
      //   return i === 0 ? 1 : i;
      // }),
      datasets: [{
        label: 'Total anggota per-tahun',
        fill: 'start',
        data: [
          <?php
          if ($total_anggota) {
            foreach($total_anggota as $key => $item){
              echo $item.', ' ;
              // if($key ==  2){break;}
            }
          }
          ?>
        ],
        backgroundColor: 'rgba(0,123,255,0.1)',
        borderColor: 'rgba(0,123,255,1)',
        pointBackgroundColor: '#ffffff',
        pointHoverBackgroundColor: 'rgb(0,123,255)',
        borderWidth: 1.5,
        pointRadius: 0,
        pointHoverRadius: 3
      }, 
      // {
      //   label: 'Past Month',
      //   fill: 'start',
      //   data: [380, 430, 120, 230, 410, 740, 472, 219, 391, 229, 400, 203, 301, 380, 291, 620, 700, 300, 630, 402, 320, 380, 289, 410, 300, 530, 630, 720, 780, 1200],
      //   backgroundColor: 'rgba(255,65,105,0.1)',
      //   borderColor: 'rgba(255,65,105,1)',
      //   pointBackgroundColor: '#ffffff',
      //   pointHoverBackgroundColor: 'rgba(255,65,105,1)',
      //   borderDash: [3, 3],
      //   borderWidth: 1,
      //   pointRadius: 0,
      //   pointHoverRadius: 2,
      //   pointBorderColor: 'rgba(255,65,105,1)'
      // }
    ]
    };

    // Options
    var bouOptions = {
      responsive: true,
      legend: {
        position: 'top'
      },
      elements: {
        line: {
          // A higher value makes the line look skewed at this ratio.
          tension: 0.3
        },
        point: {
          radius: 0
        }
      },
      scales: {
        xAxes: [{
          gridLines: false,
          ticks: {
            callback: function (tick, index) {
              // Jump every 7 values on the X axis labels to avoid clutter.
              return index % 1 !== 0 ? '' : tick;
            }
          }
        }],
        yAxes: [{
          ticks: {
            suggestedMax: 45,
            callback: function (tick, index, ticks) {
              if (tick === 0) {
                return tick;
              }
              // Format the amounts using Ks for thousands.
              return tick > 999 ? (tick/ 1000).toFixed(1) + 'K' : tick;
            }
          }
        }]
      },
      // Uncomment the next lines in order to disable the animations.
      // animation: {
      //   duration: 0
      // },
      hover: {
        mode: 'nearest',
        intersect: false
      },
      tooltips: {
        custom: false,
        mode: 'nearest',
        intersect: false
      }
    };

    // Generate the Analytics Overview chart.
    window.BlogOverviewUsers = new Chart(bouCtx, {
      type: 'LineWithLine',
      data: bouData,
      options: bouOptions
    });

    // Hide initially the first and last analytics overview chart points.
    // They can still be triggered on hover.
    var aocMeta = BlogOverviewUsers.getDatasetMeta(0);
    aocMeta.data[0]._model.radius = 0;
    aocMeta.data[bouData.datasets[0].data.length - 1]._model.radius = 0;

    // Render the chart.
    window.BlogOverviewUsers.render();

    </script>
@endsection