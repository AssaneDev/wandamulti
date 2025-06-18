<div class="vertical-menu">
    
    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                {{-- <li>
                    <a href="index.html">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li> --}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Acceuil</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('section_1')}}">
                                <span data-key="t-calendar">Qui je suis</span>
                            </a>
                        </li>

                        <li>
                            <a href="{{route('section_2')}}">
                                <span data-key="t-calendar">Services</span>
                            </a>
                        </li>


                          <li>
                            <a href="{{route('section.projet')}}">
                                <span data-key="t-calendar">Projets</span>
                            </a>
                        </li>


                       
                       
                        
                      
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="users"></i>
                        <span data-key="t-authentication">WANDA-IA</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#" data-key="t-login">IA En Formation</a></li>
                    </ul>
                      <ul class="sub-menu" aria-expanded="false">
                   
                       <li> <a href="https://chatgpt.com/g/g-6842dd6c3e248191991c35cc8f717cbe-assistant-afo" >Wanda IA Afo</a></li>

                    </ul>

                    <ul class="sub-menu" aria-expanded="false">
                        
                       <li> <a href="https://chatgpt.com/g/g-6843cb80c038819195fc947fe59cd3b8-wandaiamulti" >Wanda IA MultiVoies</a></li>

                    </ul>
                </li>
  
                <!-- Modal -->
<div id="trialModal" class="modal-overlay">
  <div class="modal-content">
    <h2>⏳ Période d’essai de votre gpt en cours </h2>
    <p>Il vous reste <strong>1 jour</strong> d’essai gratuit. Veuillez ne pas interrompre l'apprentissage de votre IA acheter l'abonnement annuelle!
      <a href="{{ route('gpt.premium') }}" target="_blank" class="btn btn-primary">
    Pourquoi acheter les tokens d'Open IA ?
</a>
    </p>
    <div class="modal-actions">
      <button onclick="closeModal()">Annuler</button>
      <button class="continue" id="continueBtn">Continuer</button>
    </div>
  </div>
</div>
               
                

                {{-- <li class="menu-title mt-2" data-key="t-components">Elements</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="briefcase"></i>
                        <span data-key="t-components">Components</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="ui-alerts.html" data-key="t-alerts">Alerts</a></li>
                        <li><a href="ui-buttons.html" data-key="t-buttons">Buttons</a></li>
                      
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="gift"></i>
                        <span data-key="t-ui-elements">Extended</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="extended-lightbox.html" data-key="t-lightbox">Lightbox</a></li>
                        <li><a href="extended-rangeslider.html" data-key="t-range-slider">Range Slider</a></li>
                        
                    </ul>
                </li> --}}

               

                

               
                

            </ul>

            <div class="card sidebar-alert border-0 text-center mx-4 mb-0 mt-5">
                <div class="card-body">
                    <img src="assets/images/giftbox.png" alt="">
                    <div class="mt-4">
                        <h5 class="alertcard-title font-size-16">En cas de probleme</h5>
                        <p class="font-size-13"></p>
                        <a href="#!" class="btn btn-primary mt-2">Contacter Assane</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Sidebar -->
    </div>
</div>