@extends('admin.layout.main')

@section('title', 'Edit Artikel')

@section('head')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.snow.css"> </head>
@endsection

@section('container')
@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <i class="fa fa-check mx-2"></i>
        <strong>Sukses!</strong> {{session('status')}}
    </div>
@endif

<div class="main-content-container container-fluid px-4">
    <!-- Page Header -->
    <div class="page-header row no-gutters py-4">
      <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
        <span class="text-uppercase page-subtitle">Overview</span>
        <h3 class="page-title">Edit Artikel</h3>
      </div>
    </div>
    
    <form action="/admin/artikel/{{$artikel->id}}" method="post" enctype="multipart/form-data">
      @csrf
      @method('patch')
      <div class="row">
          <div class="col-lg-9 col-md-12">
            <!-- Add New Post Form -->
            <div class="card card-small mb-3">
              <div class="card-body">
                <div class="add-new-post">
                  <input class="form-control form-control-lg mb-3" name="judul" type="text" placeholder="Judul" value="{{$artikel->judul}}" required>
                  <div id="editor" class="add-new-post__editor mb-1">{!! $artikel->konten !!}</div>
                  <input name="konten" type="hidden" value="{{$artikel->konten}}">
                </div>
              </div>
            </div>
            <!-- / Add New Post Form -->
          </div>
          <div class="col-lg-3 col-md-12">
            <!-- Post Overview -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0">Actions</h6>
              </div>
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item p-3">
                    <span class="d-flex mb-2">
                      <i class="material-icons mr-1">flag</i>
                      <strong class="mr-1">Status:</strong> {{($artikel->status ? 'Published' : 'Draft')}}
                    </span>
                    <span class="d-flex mb-2">
                      <i class="material-icons mr-1">calendar_today</i>
                      <strong class="mr-1">Created:</strong> <span style="font-size:13px; margin-top:2px">{{$artikel->created_at}}</span>
                    </span>
                    <span class="d-flex mb-2">
                      <i class="material-icons mr-1">calendar_today</i>
                      <strong class="mr-1">Updated:</strong> <span style="font-size:13px; margin-top:2px">{{$artikel->updated_at}}</span>
                    </span>
                  </li>
                  <li class="list-group-item d-flex px-3">
                    <button class="btn btn-sm btn-outline-accent" name="draft" type="submit" value="submit">
                      <i class="material-icons">save</i> Save Draft</button>
                    <button class="btn btn-sm btn-accent ml-auto" name="publish" type="submit" value="submit">
                      <i class="material-icons">file_copy</i> Publish</button>
                  </li>
                </ul>
              </div>
            </div>
            <!-- / Post Overview -->
            <!-- Post Overview -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0">Bidang</h6>
              </div>
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item px-3 pb-2">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="bidang" id="lukis" value="Lukis" {{($artikel->bidang === 'Lukis' ? 'checked' : '')}}>
                          <label class="form-check-label" for="lukis">
                            Lukis
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="bidang" id="musik" value="Musik" {{($artikel->bidang === 'Musik' ? 'checked' : '')}}>
                          <label class="form-check-label" for="musik">
                            Musik
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="bidang" id="tari" value="Tari" {{($artikel->bidang === 'Tari' ? 'checked' : '')}}>
                          <label class="form-check-label" for="tari">
                            Tari
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="bidang" id="semua" value="Semua" {{($artikel->bidang === 'Semua' ? 'checked' : '')}}>
                          <label class="form-check-label" for="semua">
                            Semua
                          </label>
                        </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- / Post Overview -->
            <!-- Image Overview -->
            <div class='card card-small mb-3'>
              <div class="card-header border-bottom">
                <h6 class="m-0">Banner Gambar</h6>
              </div>
              <div class='card-body p-0'>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item px-3 pb-2">
                    <div class="form-group">
                      <input type="file" name="upload" class="form-control-file" id="upload-foto" accept="image/*" onchange="ValidateSize(this)">
                    </div>
                  </li>
                </ul>
              </div>
            </div>
            <!-- / Post Overview -->
          </div>
      </div>
    </form>
</div>
@endsection

@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/quill/1.3.6/quill.min.js"></script>
    <script src="{{url('assets/admin/scripts/app/app-blog-new-post.1.1.0.js')}}"></script>

    <script>
      var quill = new Quill('#editor', {
        placeholder: 'Isi konten artikel disini...',
        theme: 'snow'
      });

      quill.on('editor-change', function(eventName, ...args) {
        if (eventName === 'text-change') {
          var konten = document.querySelector('input[name=konten]');
          konten.value = quill.root.innerHTML;
        } else if (eventName === 'selection-change') {
          // args[0] will be old range
        }
      });
    </script>
@endsection
