@extends('layouts.frontend')
@section('content')

<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Siswa</h2>
      <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Trainers Section ======= -->
  <section id="trainers" class="trainers">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php $i = 1; ?>
        @foreach ($siswa as $s)
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset('assets_frontend/img') }}/user{{ $i++ }}.png" class="img-fluid" alt="">
              <div class="member-content">
                <h4>{{ $s['nama'] }}</h4>
                <span>{{ $s['nis'] }}| {{ $s['tempatlahir'] }}</span>
                <p class="p-0">{{ $s['alamat'] }}</p>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {{ $s['nohp'] }}
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              <div class="social">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
        @endforeach

      </div>

      {{ $siswa->links("pagination::bootstrap-4") }}
    </div>
  </section><!-- End Trainers Section -->

</main><!-- End #main -->

@endsection

 