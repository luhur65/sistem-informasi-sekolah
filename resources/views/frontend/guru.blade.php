@extends('layouts.frontend')
@section('content')

<main id="main" data-aos="fade-in">

  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">
      <h2>Guru</h2>
      <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Trainers Section ======= -->
  <section id="trainers" class="trainers">
    <div class="container" data-aos="fade-up">

      <div class="row" data-aos="zoom-in" data-aos-delay="100">
        <?php $i = 1; ?>
        @foreach ($guru as $g)
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="{{ asset('assets_frontend/img/trainers') }}/trainer-{{ $i++ }}.jpg" class="img-fluid" alt="">
              <div class="member-content">
                <h4>{{ $g['nama'] }}</h4>
                <span>{{ $g['nip'] }} | {{ $g['tlahir'] }}</span>
                {{-- <p class="p-0">{{ $g['alamat'] }}</p> --}}
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  {{ $g['bidangstudi'] }}
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

      {{ $guru->links("pagination::bootstrap-4") }}
    </div>
  </section><!-- End Trainers Section -->

</main><!-- End #main -->

@endsection

 