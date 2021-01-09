@extends('user.layout.post')

@section('title', 'Kritik & Saran untuk UKM LUMUT')

@section('sub-title', 'Kritik dan Saran untuk UKM LUMUT')

@section('description', 'Isikan kritik dan saran kamu untuk UKM LUMUT menjadi lebih baik, identitas anda 100% akan dirahasiakan')

@section('content')

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <i class="fa fa-check mx-2"></i>
        <strong>Sukses!</strong> {{session('status')}}
    </div>
@endif
<!-- SECTIONS
    ================================================== -->
    <section id="contact-info">
        <div class="container mb-5" id="container-section">
            <form action="/kritik-dan-saran" method="post">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-lg col-sm-6 col-md-6">
                        <div class="form-group">
                            <label for="pesan"><h2>Kritik & Saran Anda!</h2></label>
                            <textarea class="form-control @error('pesan') is-invalid @enderror" name="pesan" id="pesan" rows="6" placeholder="Masukkan kritik dan saran anda disini...">{{old('pesan')}}</textarea>
                            @error('pesan')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary mb-5">Kirim</button>
                    </div>
                </div>
            </form>
            {{-- <button class="btn btn-white" onclick="genPDF()">Save PDF</button> --}}
        </div>
    </section>
    <div id="editor"></div>
@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.2.0/jspdf.umd.min.js"></script> --}}
<script>
    // var source = document.getElementById('container');
    function genPDF() {
        var doc = new jsPDF();
        var specialElementHandlers = {
            '#editor': function (element, renderer) {
                return true;
            }
        };
        doc.fromHTML($('#container-section').html(), 15, 15, {
            'width': 170,
                'elementHandlers': specialElementHandlers
        });
        doc.save('sample-file.pdf');
        }
</script>
@endsection