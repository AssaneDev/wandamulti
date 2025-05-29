@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
@include('components.head.tinymce-config')


<div class="page-content">
    <div class="container-fluid">

     

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Section Projet</h4>
                        <p class="card-title-desc">Modifier Projet </p>
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div>
                            <h5 class="card-title mb-4"></h5>
        <form id="pristine-valid-example"  action="{{route('Projet.Update')}}" method="post"  enctype="multipart/form-data">
            @csrf
                             <input type="hidden" name="id" value="{{ $data->id }}">  
                                <div class="row">
                               

                                    <div class="col-xl-4 col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Nom Projet</label>
                                            <input type="text" name="nomprojet" required data-pristine-required-message="Please Enter a username" class="form-control" value="{{ $data->nom_service}}"  />
                                        </div>
                                    </div>

                               <label for="categorie">Catégorie</label>
<select name="categorie_id" id="categorie" class="form-control">
    @if($categories->count() > 0)
        <option value="">-- Sélectionnez une catégorie --</option>
        @foreach($categories as $categorie)
            <option value="{{ $categorie->id }}"
                {{ $data->categorie_id == $categorie->id ? 'selected' : '' }}>
                {{ $categorie->nom }}
            </option>
        @endforeach
    @else
        <option value="">Aucune catégorie disponible</option>
    @endif
</select>
                                    </div>

                                    {{-- text editor --}}
                                              <!-- start page title -->
                        
                        <!-- end page title -->

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Courte description projet</label>
                            <textarea name="courtedesc" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $data->petite_desc_service}} </textarea>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">Description Projet</h4>
                                    </div>
                                    <div class="card-body">
                                        
                                        {{-- <textarea id="ckeditor-classic" name="longdescription" >
                                           {{ $data->long_desc_service}}
                                        </textarea>     --}}
                                        <textarea id="myeditorinstance" name="longdescription" >
                                             {{$data->long_desc_service}}
                                        </textarea> 
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        
                        

                         <div class="col-xl-4 col-md-6">
                                        <div class="form-group mb-3">
                                            <label>Lien Videos Youtube</label>
                                            <input type="text" name="lien"  class="form-control" value="{{$data->video_youtube}}"  />
                                        </div>
                                    <div class="form-group mb-3">
                                        <label for="audio">Fichier audio</label>
                                        <input class="form-control" type="file" name="audio" accept="audio/*" value="{{$data->audio}}" >
                                    </div>    
                        </div>


                      <div class="row">
                           <div class="mb-3">
                            <label for="example-text-input" class="form-label">Image Caption</label>
                            <input class="form-control" name="imagescap" type="file" value="" id="image">
                        </div>
                        <div class="mb-3">
                            <img id="showImage" src=" {{ (!empty($data->photo)) ? url($data->photo) : url('upload/no_image.jpg') }}" alt="" class="rounded-circle p-1 bg-primary" width="110" >
                        </div>


                           <div class="mb-3">
                            <label for="example-text-input" class="form-label">Image Banniere</label>
                            <input class="form-control" name="imagebanniere" type="file" value="" id="image">
                        </div>
                        <div class="mb-3">
                            <img id="showImage" src=" {{ (!empty($data->photo_banniere)) ? url($data->photo_banniere) : url('upload/no_image.jpg') }}" alt="" class="rounded-circle p-1 bg-primary" width="110" >
                        </div>
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