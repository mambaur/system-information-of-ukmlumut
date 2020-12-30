@extends('user.layout.post')

@section('title', 'Kritik & Saran untuk UKM LUMUT')

@section('sub-title', 'Kritik dan Saran untuk UKM LUMUT')

@section('description', 'Isikan kritik dan saran kamu untuk UKM LUMUT menjadi lebih baik, identitas anda 100% akan dirahasiakan')

@section('content')
<!-- SECTIONS
    ================================================== -->
    <section id="contact-info">
        <div class="container mb-5">
            <form action="/admin" method="post">
                <div class="row justify-content-center">
                    <div class="col-lg col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Kritik dan Saran Anda!</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Masukkan kritik dan saran anda disini..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Kirim</button>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection