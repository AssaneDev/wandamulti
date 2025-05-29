@extends('admin.admin_dashboard')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

       
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <h4 class="card-title">Section Projet</h4>
                    <p class="card-title-desc">Section projet du site</p>
                    <div class="card-header">
                         
                    <a href="{{route('SectionProjet.create')}}" class="btn btn-primary waves-effect waves-light" style="float: right;">
                        <button type="button" class="btn btn-primary waves-effect waves-light">
                            Nouveau Projet</button>

                       <button type="button" class="btn btn-outline-primary waves-effect waves-light"></button>

                    </a> 

                     <!-- Bouton -->
<button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#addCategorieModal">
    + Ajouter une catégorie
</button>

<!-- Modal -->
<div class="modal fade" id="addCategorieModal" tabindex="-1" aria-labelledby="addCategorieModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="addCategorieModalLabel">Nouvelle catégorie</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
          </div>
          <div class="modal-body">
            <div class="mb-3">
              <label for="nom" class="form-label">Nom de la catégorie</label>
              <input type="text" class="form-control" name="nom" id="nom" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Ajouter</button>
          </div>
        </div>
    </form>
  </div>
</div>

                    

                   
                 
                    </div>
                    <!-- end card header -->

                    <div class="card-body">
                        <div>
                            <h5 class="card-title mb-4"></h5>
        <form id="pristine-valid-example"  action="{{route('SectionDeux.Update')}}" method="post"  enctype="multipart/form-data">
            @csrf
                                
                                <!-- end row -->

                              
            
                        

                        <hr class="my-5">

                       {{-- Table data --}}
                                                         <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Liste des Projets</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Liste des Projets</a></li>
                                            <li class="breadcrumb-item active">Projets</li>
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
                                                <th>Nom Projet</th>
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
                                                    <a href="{{route('edit.projet',$item->id)}}" class="btn btn-secondary waves-effect waves-light" > Modifier</a>
                                                    <a href="{{route('delete.projet',$item->id)}}" class="btn btn-danger px-3 radius-30" id="delete"> Supprimer</a>

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