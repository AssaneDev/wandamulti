@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

       
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h4 class="card-title">Section 02</h4>
                    <p class="card-title-desc">La deuxieme section section du site</p>
                    <div class="card-header">
                      
                         
                    <a href="{{route('SectionDeux.create')}}" class="btn btn-primary waves-effect waves-light" style="float: right;">
                        <button type="button" class="btn btn-primary waves-effect waves-light">
                            Nouveau Service</button>
                    </a>  
                 
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div>
                            <h5 class="card-title mb-4"></h5>
        {{-- <form id="pristine-valid-example"  action="{{route('SectionDeux.Update')}}" method="post"  enctype="multipart/form-data">
            @csrf
                                <input type="hidden" name="id" value="{{$dataSection2->id}}" id="">
                                <div class="row">
                                        <div class="col-xl-4 col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Nom Section</label>
                                            <input type="text" name="titresec2" required data-pristine-required-message="Please Enter a username" class="form-control" value="{{$dataSection2->titre_section}}"/>
                                        </div>
                                    </div>


                                      <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Courte Description</label>
                                        <textarea class="form-control" name="dec_section2" id="exampleFormControlTextarea1" rows="3">{{$dataSection2->desc_section}}</textarea>
                                    </div>

                                    <button type="submit" class="btn btn-outline-success waves-effect waves-light">Enrigistrer</button>

                          

                                    
                                </div>
                              

                              
            </form> --}}
                        </div>

                        <hr class="my-5">

                       {{-- Table data --}}
                                                         <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Liste des Services</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Liste des Services</a></li>
                                            <li class="breadcrumb-item active">Services</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                   
                                    <div class="card-body">
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Nom Service</th>
                                                <th>Courte Description</th>
                                                <th>Action</th>
                                                
                                               
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                         
                                 @foreach ($datall as $key=>$item)       
                                            <tr>

                                                <td>{{$item->nom_service}}</td>
                                                <td>{!! Str::limit( $item->petite_desc_service ,50) !!}</td>
                                  

                                                <td>
                                                    <a href="{{route('edit.service',$item->id)}}" class="btn btn-secondary waves-effect waves-light" > Modifier</a>
                                                    <a href="{{route('delete.service',$item->id)}}" class="btn btn-danger px-3 radius-30" id="delete"> Supprimer</a>

                                                </td> 
                                                
                                                
                                                
                                            </tr>
                                 @endforeach            


               
                                        
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row --> 
                       
                        <!-- end row -->


                       {{-- Table data --}}
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