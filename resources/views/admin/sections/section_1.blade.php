@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

     

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Section 01</h4>
                        <p class="card-title-desc">La premiere section du site</p>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div>
                            <h5 class="card-title mb-4"></h5>
        <form id="pristine-valid-example"  action="{{route('SectionUn.Update')}}" method="post"  enctype="multipart/form-data">
            @csrf
                                <input type="hidden" name="id" value="{{$dataSection1->id}}" id="">
                                <div class="row">
                                    <div class="col-xl-4 col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Titre 01</label>
                                            <input type="text" name="titre1" required data-pristine-required-message="Please Enter a username" class="form-control" value="{{$dataSection1->titre1}}"/>
                                        </div>
                                    </div>

                                    <div class="col-xl-4 col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Titre 02</label>
                                            <input type="text" name="titre2" required data-pristine-required-message="Please Enter a username" class="form-control" value="{{$dataSection1->titre2}}"  />
                                        </div>
                                    </div>

                                    {{-- text editor --}}
                                              <!-- start page title -->
                        
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Description</h4>
                                    </div>
                                    <div class="card-body">
                                        
                                        <textarea id="ckeditor-classic" name="description" >
                                            {{$dataSection1->description}} 
                                        </textarea>    
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>

                        <div class="mb-3">
                            <label for="example-text-input" class="form-label">Image Profile</label>
                            <input class="form-control" name="imagesecun" type="file" value="" id="image">
                        </div>
                        <div class="mb-3">
                            <img id="showImage" src=" {{ (!empty($dataSection1->photo)) ? url('upload/image_sec1/'.$dataSection1->photo) : url('upload/no_image.jpg') }}" alt="" class="rounded-circle p-1 bg-primary" width="110" >
                        </div>
                        <!-- end row -->

                                    {{-- End text editor --}}
                                    
                                </div>
                                <!-- end row -->

                                
                                <div class="form-group">
                                    <button  type="submit" class="btn btn-primary">Submit form</button>
                                </div>
            </form>
                        </div>

                        <hr class="my-5">

                       
                    </div>
                </div>
                <!-- end card -->
            </div>
            <!-- end col -->
        </div>
       

        <!-- end row -->
    </div> <!-- container-fluid -->
</div>

<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function (e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        })
    })

</script>
 
@endsection