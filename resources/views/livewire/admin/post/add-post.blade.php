<div>
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>{{$pageTitle ?? 'Create Post'}}</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">User Profile</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">

              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img src="{{asset('nopreview.jpg')}}" alt="" style="width:100%">
                  </div>

                  <h3 class="profile-username text-center">Main Image</h3>

                  <input type="file" name="cover" id="">
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->

            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#form" data-toggle="tab">Page Form</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">

                    <div class="tab-pane active" id="form">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Title</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" wire:model="title" id="inputName" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Sub Title</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" wire:model="subtitle" id="inputName" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Content</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="inputExperience" wire:model="content" placeholder="Content Here"></textarea>
                          </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Meta Author</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" wire:model="meta_author" id="inputName" placeholder="Meta Author">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Meta Keywords</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" wire:model="meta_keywords" id="inputName" placeholder="Meta Keywords">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Meta Description</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" wire:model="meta_description" id="inputName" placeholder="Meta Description">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Categry</label>
                          <div class="col-sm-10">
                              <select wire:model="cat" class="form-control">
                                  <optgroup label="Post Status">
                                      <option value=1>Category One</option>
                                      <option value=2>Category Two</option>
                                      <option value=3>Category Three</option>
                                  </optgroup>
                              </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Type</label>
                          <div class="col-sm-10">
                              <select name="" wire:model="type" class="form-control">
                                  <optgroup label="Post Status">
                                      <option value=1>Type 1</option>
                                      <option value=2>Type 2</option>
                                      <option value=3>Type 3</option>
                                      <option value=4>Type 4</option>
                                      <option value=5>Type 5</option>
                                  </optgroup>
                              </select>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Status</label>
                          <div class="col-sm-10">
                              <select name="" id="" wire:model="status" class="form-control">
                                  <optgroup label="Post Status">
                                      <option value=1>Publish</option>
                                      <option value=0>Draft</option>
                                  </optgroup>
                              </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <div class="offset-sm-2 col-sm-10">
                            <button wire:click="store()" class="btn btn-danger">Save Data</button>
                          </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.tab-pane -->
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>

  </div>
