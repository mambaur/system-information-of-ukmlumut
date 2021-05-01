@extends('admin.layout.main', ['menu' => 'component'])

@section('title', 'Component halaman utama UKM LUMUT')

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

<!-- / .main-navbar -->
<div class="main-content-container container-fluid px-4">
<!-- Page Header -->
<div class="page-header row no-gutters py-4">
  <div class="col-12 col-sm-4 text-center text-sm-left mb-0">
    <span class="text-uppercase page-subtitle">Overview</span>
    <h3 class="page-title">Component</h3>
  </div>
</div>
<div class="row">
    <div class="col-lg mb-4">
      <div class="card card-small mb-4">
        <ul class="list-group list-group-flush">
          <li class="list-group-item p-3">
            <div class="row mx-1 py-2">
                <div class="col-md-12">
                    <form method="post" action="{{url('/admin/component/update/')}}/{{@$component->id}}"  enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <h4>Widged 1</h4>
                        <div class="card">
                            <div class="card-body">
                              <div class="form-group">
                                <label for="jumbotron_title">Jumbotron Title</label>
                                <input type="text" name="jumbotron_title" id="jumbotron_title" value="{{@$component->jumbotron_title}}" class="form-control" placeholder="" aria-describedby="helpId">
                              </div>

                              <div class="form-group">
                                <label for="jumbotron_desc">Jumbotron Description</label>
                                <textarea class="form-control" name="jumbotron_desc" id="jumbotron_desc" rows="3">{{@$component->jumbotron_desc}}</textarea>
                              </div>
                            </div>
                        </div>
                        <hr>

                        <h4>Widged 2</h4>
                        <div class="card">
                            <div class="card-body row">
                                <div class="col-md-4">
                                    <img style="width: 100%" src="{{url('/')}}/assets/user/images/{{@$component->widget_one_image}}" alt="">
                                    <div class="form-group mt-1">
                                      <label for="widget_one_image">Update Image (768 x 1151)</label>
                                      <input type="file" class="form-control-file" name="widget_one_image" id="widget_one_image" placeholder="" aria-describedby="fileHelpId">
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                      <label for="widget_one_title">Title</label>
                                      <input type="text" name="widget_one_title" id="widget_one_title" class="form-control" value="{{@$component->widget_one_title}}" placeholder="" aria-describedby="helpId">
                                    </div>
      
                                    <div class="form-group">
                                      <label for="widget_one_desc">Description</label>
                                      <textarea class="form-control" name="widget_one_desc" id="widget_one_desc" rows="3">{{@$component->widget_one_desc}}</textarea>
                                    </div>

                                    <div class="form-group">
                                      <label for="widget_one_oprec_desc">Oprec Description</label>
                                      <input type="text"
                                        class="form-control" name="widget_one_oprec_desc" id="widget_one_oprec_desc" aria-describedby="helpId" value="{{@$component->widget_one_oprec_desc}}">
                                    </div>
                                    
                                    <div class="form-group">
                                      <label for="widget_one_aplikasi_desc">Aplikasi Description</label>
                                      <input type="text"
                                        class="form-control" name="widget_one_aplikasi_desc" id="widget_one_aplikasi_desc" aria-describedby="helpId" value="{{@$component->widget_one_aplikasi_desc}}">
                                    </div>
                                    
                                    <div class="form-group">
                                      <label for="widget_one_depresi_desc">Depresi Description</label>
                                      <input type="text"
                                        class="form-control" name="widget_one_depresi_desc" id="widget_one_depresi_desc" aria-describedby="helpId" value="{{@$component->widget_one_depresi_desc}}">
                                    </div>
                                    
                                    <div class="form-group">
                                      <label for="widget_one_diesnat_desc">Diesnat Description</label>
                                      <input type="text"
                                        class="form-control" name="widget_one_diesnat_desc" id="widget_one_diesnat_desc" aria-describedby="helpId" value="{{@$component->widget_one_diesnat_desc}}">
                                    </div>
                                    
                                    <div class="form-group">
                                      <label for="widget_one_rat_desc">RAT Description</label>
                                      <input type="text"
                                        class="form-control" name="widget_one_rat_desc" id="widget_one_rat_desc" aria-describedby="helpId" value="{{@$component->widget_one_rat_desc}}">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <h4>Widged 2</h4>
                        <div class="card">
                            <div class="card-body row">
                                <div class="col-md-4">
                                    <img style="width: 100%" src="{{url('/')}}/assets/user/images/{{@$component->widget_two_list_1_image}}" alt="">

                                    <div class="form-group mt-1">
                                      <label for="">Change image (800 x 533)</label>
                                      <input type="file" class="form-control-file" name="widget_two_list_1_image" id="widget_two_list_1_image" placeholder="" aria-describedby="fileHelpId">
                                    </div>
                                    <div class="form-group">
                                      <input type="text"
                                        class="form-control" name="widget_two_list_1_title" id="widget_two_list_1_title" aria-describedby="helpId" value="{{@$component->widget_two_list_1_title}}" placeholder="Title">
                                    </div>
                                    <div class="form-group">
                                      <textarea class="form-control" name="widget_two_list_1_desc" id="widget_two_list_1_desc" rows="3">{{@$component->widget_two_list_1_desc}}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img style="width: 100%" src="{{url('/')}}/assets/user/images/{{@$component->widget_two_list_2_image}}" alt="">
                                    <div class="form-group mt-1">
                                        <label for="widget_two_list_2_image">Change image (800 x 533)</label>
                                        <input type="file" class="form-control-file" name="widget_two_list_2_image" id="widget_two_list_2_image" placeholder="" aria-describedby="fileHelpId">
                                      </div>
                                    <div class="form-group">
                                        <input type="text"
                                          class="form-control" name="widget_two_list_2_title" id="widget_two_list_2_title" value="{{@$component->widget_two_list_2_title}}" aria-describedby="helpId" placeholder="Title">
                                      </div>
                                      <div class="form-group">
                                        <textarea class="form-control" name="widget_two_list_2_desc" id="widget_two_list_2_desc" rows="3">{{@$component->widget_two_list_2_desc}}</textarea>
                                      </div>
                                </div>
                                <div class="col-md-4">
                                    <img style="width: 100%" src="{{url('/')}}/assets/user/images/{{@$component->widget_two_list_3_image}}" alt="">
                                    <div class="form-group mt-1">
                                        <label for="">Change image (800 x 533)</label>
                                        <input type="file" class="form-control-file" name="widget_two_list_3_image" id="widget_two_list_3_image" placeholder="" aria-describedby="fileHelpId">
                                      </div>
                                    <div class="form-group">
                                        <input type="text"
                                          class="form-control" name="widget_two_list_3_title" id="widget_two_list_3_title" value="{{@$component->widget_two_list_3_title}}" aria-describedby="helpId" placeholder="Title">
                                      </div>
                                      <div class="form-group">
                                        <textarea class="form-control" name="widget_two_list_3_desc" id="widget_two_list_3_desc" rows="3">{{@$component->widget_two_list_3_desc}}</textarea>
                                      </div>
                                </div>

                                <div class="col-md-12"><h4>Slider</h4></div>

                                <div class="col-md-6">
                                    <img style="width: 100%" src="{{url('/')}}/assets/user/images/slider/{{@$component->widget_two_slider_1_image}}" alt="">
                                    <div class="form-group mt-1">
                                        <label for="widget_two_slider_1_image">Change image (1152 x 560)</label>
                                        <input type="file" class="form-control-file" name="widget_two_slider_1_image" id="widget_two_slider_1_image" placeholder="" aria-describedby="fileHelpId">
                                      </div>
                                    <div class="form-group">
                                        <input type="text"
                                          class="form-control" name="widget_two_slider_1_title" id="widget_two_slider_1_title" aria-describedby="helpId" value="{{@$component->widget_two_slider_1_title}}" placeholder="Title">
                                      </div>
                                      <div class="form-group">
                                        <textarea class="form-control" name="widget_two_slider_1_desc" id="widget_two_slider_1_desc" rows="3">{{@$component->widget_two_slider_1_desc}}</textarea>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <img style="width: 100%" src="{{url('/')}}/assets/user/images/slider/{{@$component->widget_two_slider_2_image}}" alt="">
                                    <div class="form-group mt-1">
                                        <label for="widget_two_slider_2_image">Change image (1152 x 560)</label>
                                        <input type="file" class="form-control-file" name="widget_two_slider_2_image" id="widget_two_slider_2_image" placeholder="" aria-describedby="fileHelpId">
                                      </div>
                                    <div class="form-group">
                                        <input type="text"
                                          class="form-control" name="widget_two_slider_2_title" id="widget_two_slider_2_title" value="{{@$component->widget_two_slider_2_title}}" aria-describedby="helpId" placeholder="Title">
                                      </div>
                                      <div class="form-group">
                                        <textarea class="form-control" name="widget_two_slider_2_desc" id="widget_two_slider_2_desc" rows="3">{{@$component->widget_two_slider_2_desc}}</textarea>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <img style="width: 100%" src="{{url('/')}}/assets/user/images/slider/{{@$component->widget_two_slider_3_image}}" alt="">
                                    <div class="form-group mt-1">
                                        <label for="widget_two_slider_3_image">Change image (1152 x 560)</label>
                                        <input type="file" class="form-control-file" name="widget_two_slider_3_image" id="widget_two_slider_3_image" placeholder="" aria-describedby="fileHelpId">
                                      </div>
                                    <div class="form-group">
                                        <input type="text"
                                          class="form-control" name="widget_two_slider_3_title" id="widget_two_slider_3_title" aria-describedby="helpId" value="{{@$component->widget_two_slider_3_title}}" placeholder="Title">
                                      </div>
                                      <div class="form-group">
                                        <textarea class="form-control" name="widget_two_slider_3_desc" id="widget_two_slider_3_desc" rows="3">{{@$component->widget_two_slider_3_desc}}</textarea>
                                      </div>
                                </div>
                                <div class="col-md-6">
                                    <img style="width: 100%" src="{{url('/')}}/assets/user/images/slider/{{@$component->widget_two_slider_4_image}}" alt="">
                                    <div class="form-group mt-1">
                                        <label for="widget_two_slider_4_image">Change image (1152 x 560)</label>
                                        <input type="file" class="form-control-file" name="widget_two_slider_4_image" id="widget_two_slider_4_image" placeholder="" aria-describedby="fileHelpId">
                                      </div>
                                    <div class="form-group">
                                        <input type="text"
                                          class="form-control" name="widget_two_slider_4_title" id="widget_two_slider_4_title" aria-describedby="helpId" value="{{@$component->widget_two_slider_4_title}}" placeholder="Title">
                                      </div>
                                      <div class="form-group">
                                        <textarea class="form-control" name="widget_two_slider_4_desc" id="widget_two_slider_4_desc" rows="3">{{@$component->widget_two_slider_4_desc}}</textarea>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <hr>

                        <h4>Widged 3</h4>
                        <div class="card">
                            <div class="card-body row">
                              <div class="form-group col-md-12">
                                <label for="widget_three_image">Title</label>
                                <input type="text" name="widget_three_title" id="widget_three_title" value="{{@$component->widget_three_title}}" class="form-control" placeholder="" aria-describedby="helpId">
                              </div>

                              <div class="form-group col-md-12">
                                <label for="widget_three_desc">Description</label>
                                <textarea class="form-control" name="widget_three_desc" id="widget_three_desc" rows="3">{{@$component->widget_three_desc}}</textarea>
                              </div>

                              <div class="col-md-4">
                                <img style="width: 100%" src="{{url('/')}}/assets/user/images/projects/{{@$component->widget_three_list_1_image}}" alt="">
                                <div class="form-group mt-1">
                                    <label for="">Change image (768 x 512)</label>
                                    <input type="file" class="form-control-file" name="widget_three_list_1_image" id="widget_three_list_1_image" placeholder="" aria-describedby="fileHelpId">
                                  </div>
                                <div class="form-group">
                                    <input type="text"
                                      class="form-control" name="widget_three_list_1_title" id="widget_three_list_1_title" value="{{@$component->widget_three_list_1_title}}" aria-describedby="helpId" placeholder="Title">
                                  </div>
                                  <div class="form-group">
                                    <textarea class="form-control" name="widget_three_list_1_desc" id="widget_three_list_1_desc" rows="3">{{@$component->widget_three_list_1_desc}}</textarea>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img style="width: 100%" src="{{url('/')}}/assets/user/images/projects/{{@$component->widget_three_list_2_image}}" alt="">
                                <div class="form-group mt-1">
                                    <label for="widget_three_list_2_image">Change image (768 x 512)</label>
                                    <input type="file" class="form-control-file" name="widget_three_list_2_image" id="widget_three_list_2_image" placeholder="" aria-describedby="fileHelpId">
                                  </div>
                                <div class="form-group">
                                    <input type="text"
                                      class="form-control" name="widget_three_list_2_title" id="widget_three_list_2_title" value="{{@$component->widget_three_list_2_title}}" aria-describedby="helpId" placeholder="Title">
                                  </div>
                                  <div class="form-group">
                                    <textarea class="form-control" name="widget_three_list_2_desc" id="widget_three_list_2_desc" rows="3">{{@$component->widget_three_list_2_desc}}</textarea>
                                </div>
                              </div>
                              <div class="col-md-4">
                                <img style="width: 100%" src="{{url('/')}}/assets/user/images/projects/{{@$component->widget_three_list_3_image}}" alt="">
                                <div class="form-group mt-1">
                                    <label for="widget_three_list_3_image">Change image (768 x 512)</label>
                                    <input type="file" class="form-control-file" name="widget_three_list_3_image" id="widget_three_list_3_image" placeholder="" aria-describedby="fileHelpId">
                                  </div>
                                <div class="form-group">
                                    <input type="text"
                                      class="form-control" name="widget_three_list_3_title" id="widget_three_list_3_title" value="{{@$component->widget_three_list_3_title}}" aria-describedby="helpId" placeholder="Title">
                                  </div>
                                  <div class="form-group">
                                    <textarea class="form-control" name="widget_three_list_3_desc" id="widget_three_list_3_desc" rows="3">{{@$component->widget_three_list_3_desc}}</textarea>
                                </div>
                              </div>

                              <div class="col-md-12">
                                <img style="width: 100%" src="{{url('/')}}/assets/user/images/bg/{{@$component->widget_three_main_image}}" alt="">
                                <div class="form-group mt-1">
                                    <label for="widget_three_main_image">Change image (1920 x 1303)</label>
                                    <input type="file" class="form-control-file" name="widget_three_main_image" id="widget_three_main_image" placeholder="" aria-describedby="fileHelpId">
                                  </div>
                                <div class="form-group">
                                    <input type="text"
                                      class="form-control" name="widget_three_main_title" id="widget_three_main_title" aria-describedby="helpId" value="{{@$component->widget_three_main_title}}" placeholder="Title">
                                  </div>
                                  <div class="form-group">
                                    <textarea class="form-control" name="widget_three_main_desc" id="widget_three_main_desc" rows="3">{{@$component->widget_three_main_desc}}</textarea>
                                </div>
                              </div>
                            </div>
                        </div>
                        <hr>

                        <h4>Youtube URL</h4>
                        <div class="card">
                            <div class="card-body">
                              <div class="form-group">
                                <label for="youtube_url">Youtube URL</label>
                                <input type="text" name="youtube_url" id="youtube_url" value="{{@$component->youtube_url}}" class="form-control" placeholder="" aria-describedby="helpId">
                              </div>
                            </div>
                        </div>
                        <hr>
                        
                        <button type="submit" class="mb-2 btn btn btn-success float-right py-3 px-5"><i class="fa fa-save"></i> Simpan</button>
                        {{-- <img class="w-100" src="{{url('assets/admin/images/anggota/flat-design/Social.png')}}" alt=""> --}}
                    </form>
                </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<script>
function ValidateSize(file) {
    var FileSize = file.files[0].size / 1024 / 1024; // in MiB
    if (FileSize > 2) {
        alert('Ukuran file harus kurang dari 1 MB');
        document.getElementById('upload-foto').value = "";
    }
}
</script>
@endsection