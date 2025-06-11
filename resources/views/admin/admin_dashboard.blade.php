<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!doctype html>
    <html lang="en">
    
        <head>
    
            <meta charset="utf-8" />
            <title>Admin Dashboard</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
            <meta content="Themesbrand" name="author" />
            <!-- App favicon -->
            <link rel="shortcut icon" href=" {{asset('backend/assets/images/favicon.ico')}} ">
    
            <!-- plugin css -->
            <link href=" {{asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css')}} " rel="stylesheet" type="text/css" />
    
            <!-- preloader css -->
            <link rel="stylesheet" href=" {{asset('backend/assets/css/preloader.min.css')}} " type="text/css" />
    
            <!-- Bootstrap Css -->
            <link href=" {{asset('backend/assets/css/bootstrap.min.css')}} " id="bootstrap-style" rel="stylesheet" type="text/css" />
            <!-- Icons Css -->
            <link href=" {{asset('backend/assets/css/icons.min.css')}} " rel="stylesheet" type="text/css" />
            <!-- App Css-->
            <link href=" {{asset('backend/assets/css/app.min.css')}} " id="app-style" rel="stylesheet" type="text/css" />
            <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

            <style>
.modal-overlay {
  display: none;
  position: fixed;
  z-index: 999;
  inset: 0;
  background: rgba(0, 0, 0, 0.6);
  justify-content: center;
  align-items: center;
  font-family: Arial, sans-serif;
}

.modal-content {
  background: white;
  padding: 25px;
  max-width: 400px;
  border-radius: 12px;
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
  text-align: center;
  animation: fadeIn 0.3s ease-in-out;
}

.modal-content h2 {
  margin-bottom: 10px;
}

.modal-actions {
  margin-top: 20px;
  display: flex;
  justify-content: space-between;
}

.modal-actions button {
  padding: 10px 20px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-weight: bold;
}

.modal-actions .continue {
  background-color: #1abc9c;
  color: white;
}

.modal-actions button:hover {
  opacity: 0.9;
}

@keyframes fadeIn {
  from {opacity: 0; transform: scale(0.95);}
  to {opacity: 1; transform: scale(1);}
}
</style>

        </head>
        
    
        <body>
    
        <!-- <body data-layout="horizontal"> -->
    
            <!-- Begin page -->
            <div id="layout-wrapper">
    
                @include('admin.body.header')
                
    
                <!-- ========== Left Sidebar Start ========== -->
                @include('admin.body.sidebar')
               
                <!-- Left Sidebar End -->
    
                
    
                <!-- ============================================================== -->
                <!-- Start right Content here -->
                <!-- ============================================================== -->
                <div class="main-content">
    
                   @yield('admin')
                    <!-- End Page-content -->
    
    
                  @include('admin.body.footer')
                </div>
                <!-- end main content-->
    
            </div>
            <!-- END layout-wrapper -->
    
            
            <!-- Right Sidebar -->
           @include('admin.body.rightside')
            <!-- /Right-bar -->
    
            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>
    
            <!-- JAVASCRIPT -->
            <script src=" {{asset('backend/assets/libs/jquery/jquery.min.js')}} "></script>
            <script src=" {{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
            <script src=" {{asset('backend/assets/libs/metismenu/metisMenu.min.js')}} "></script>
            <script src=" {{asset('backend/assets/libs/simplebar/simplebar.min.js')}} "></script>
            <script src=" {{asset('backend/assets/libs/node-waves/waves.min.js')}} "></script>
            <script src=" {{asset('backend/assets/libs/feather-icons/feather.min.js')}} "></script>
            <!-- pace js -->
            <script src=" {{asset('backend/assets/libs/pace-js/pace.min.js')}} "></script>
    
            <!-- apexcharts -->
            <script src=" {{asset('backend/assets/libs/apexcharts/apexcharts.min.js')}} "></script>
    
            <!-- Plugins js-->
            <script src=" {{asset('backend/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js')}} "></script>
            <script src=" {{asset('backend/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js')}} "></script>
            <!-- dashboard init -->
            <script src=" {{asset('backend/assets/js/pages/dashboard.init.js')}} "></script>
    
            <script src=" {{asset('backend/assets/js/app.js')}} "></script>

            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
           
            {{-- text redacteur --}}
               <!-- ckeditor -->
            <script src=" {{asset('backend/assets/libs/@ckeditor/ckeditor5-build-classic/build/ckeditor.js')}} "></script>

            <!-- init js -->
            <script src=" {{asset('backend/assets/js/pages/form-editor.init.js')}} "></script>
            <script>
             @if(Session::has('message'))
             var type = "{{ Session::get('alert-type','info') }}"
             switch(type){
                case 'info':
                toastr.info(" {{ Session::get('message') }} ");
                break;
            
                case 'success':
                toastr.success(" {{ Session::get('message') }} ");
                break;
            
                case 'warning':
                toastr.warning(" {{ Session::get('message') }} ");
                break;
            
                case 'error':
                toastr.error(" {{ Session::get('message') }} ");
                break; 
             }
             @endif 
            </script>
             <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
            <script>
               
    $(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");

  
                  Swal.fire({
                    title: 'Vous etes sur ?',
                    text: "De vouloir supprimer?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Oui, Supprimer!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Deleted!',
                        'Suppprimer avec succes.',
                        'success'
                      )
                    }
                  }) 


    });

  });
  </script>


<script>
let targetRedirectUrl = null;

function openTrialModal(event, url) {
    event.preventDefault();
    targetRedirectUrl = url;
    document.getElementById("trialModal").style.display = "flex";
}

function closeModal() {
    document.getElementById("trialModal").style.display = "none";
}

document.getElementById("continueBtn").addEventListener("click", function () {
    window.location.href = targetRedirectUrl;
});
</script>



    
        </body>
    
    </html>