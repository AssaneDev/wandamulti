@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

     

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Services MultiVoix</h4>
                        <p class="card-title-desc">Services</p>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div>
                            <h5 class="card-title mb-4"></h5>
        <form id="pristine-valid-example"  action="{{route('Service.Update')}}" method="post"  enctype="multipart/form-data">
            @csrf
                                <input type="hidden" name="id" value="{{$item->id}}" id="">
                                
                                <div class="row">
                               

                                    <div class="col-xl-4 col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Nom Service</label>
                                            <input type="text" name="nomservice" required data-pristine-required-message="Please Enter a username" class="form-control" value="{{$item->nom_service}}" />
                                        </div>
                                    </div>

                                    {{-- text editor --}}
                                              <!-- start page title -->
                        
                        <!-- end page title -->

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Courte description service</label>
                            <textarea name="petitedescservice" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$item->petite_desc_service}} </textarea>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Description</h4>
                                    </div>
                                    <div class="card-body">
                                        
                                        <textarea id="ckeditor-classic" name="longdescservice" >
                                            {{$description_service->description}}
                                        </textarea>    
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>


                  

                      

                       
                      
                        <!-- end row -->

                                    {{-- End text editor --}}
                                    
                                </div>
                                <!-- end row -->

                                
                                <div class="form-group">
                                    <button  type="submit" class="btn btn-primary">Envoyer</button>
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