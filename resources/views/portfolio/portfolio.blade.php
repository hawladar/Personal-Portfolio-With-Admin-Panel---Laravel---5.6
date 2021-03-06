<div class="section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-md-12 ml-auto mr-auto">
        <div class="h4 text-center mb-4 title">Portfolio</div>
        <div class="nav-align-center">
          <ul class="nav nav-pills nav-pills-primary nav-pill-1" role="tablist">
              
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#laravel" role="tablist"><b>Laravel</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#codeigniter" role="tablist"><b>CodeIgniter</b></a>
              </li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#js" role="tablist"><b>JS</b></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#other" role="tablist"><b>Others</b></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#tv" role="tablist"><b>TV Programs</b></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="tab-content gallery mt-5">
        <div class="tab-pane active" id="laravel">
            <div class="ml-auto mr-auto">
                <div class="row">
                    @include('portfolio/portfolio-details', [
                                'active' => 'active',
                                'tab_id' => 'laravel',
                                'project_title' => 'Create Caddy',
                                'project_details' => 'Online Design Tool and Creator\'s  Shop',
                                'project_tools' => 'Laravel 5.6, Fabric.js, Vue.js, Redis Cache, JQuery, Ajax, Bootstrap 4, HTML5',
                                'project_img' => 'create-caddy.jpg',
                                'project_link' => 'http://qa.createcaddy.com'
                            ])
                    @include('portfolio/portfolio-details', [
                                'active' => 'active',
                                'tab_id' => 'laravel',
                                'project_title' => 'Online Food Order',
                                'project_details' => 'Online Food ordering system with payment gateway',
                                'project_tools' => 'Payment Gateway, Laravel 5.5, JQuery, Ajax, Bootstrap 4, HTML5',
                                'project_img' => 'hokuto.jpg',
                                'project_link' => 'https://hokutousuisan.com/home'
                            ])
                    @include('portfolio/portfolio-details', [
                                'active' => 'active',
                                'tab_id' => 'laravel',
                                'project_title' => 'FC2',
                                'project_details' => 'HRM and Admin',
                                'project_tools' => 'Laravel 4.2, Ajax, JQuery',
                                'project_img' => 'hrm.jpg',
                                'project_link' => 'https://github.com/rdhawladar/Human_Resource_management'
                            ])
                    @include('portfolio/portfolio-details', [
                                'active' => 'active',
                                'tab_id' => 'laravel',
                                'project_title' => 'MLM Management System',
                                'project_details' => 'Manages MLM System',
                                'project_tools' => 'Laravel',
                                'project_img' => 'fc2.jpg',
                                'project_link' => 'https://github.com/rdhawladar/fc2'
                            ])
                    @include('portfolio/portfolio-details', [
                                'active' => 'active',
                                'tab_id' => 'laravel',
                                'project_title' => 'MLM Management System',
                                'project_details' => 'Manages MLM System',
                                'project_tools' => 'Laravel',
                                'project_img' => 'fc2.jpg',
                                'project_link' => 'https://github.com/rdhawladar/fc2'
                            ])
                    @include('portfolio/portfolio-details', [
                                'active' => 'active',
                                'tab_id' => 'laravel',
                                'project_title' => 'FC2',
                                'project_details' => 'HRM ',
                                'project_tools' => 'Google API, Laravel 5.5, JQuery, Ajax, Bootstrap 4',
                                'project_img' => 'fc2.jpg',
                                'project_link' => 'https://github.com/rdhawladar/fc2'
                            ])
                </div>
            </div>
        </div>
        <div class="tab-pane" id="codeigniter">
            <div class="ml-auto mr-auto">
                <div class="row">
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'University Automation ERP',
                        'project_details' => 'Manages admission, attentendce, exams, results, Library, Accounts and many more',
                        'project_tools' => 'CodeIgniter, Ajax, JQuery',
                        'project_img' => 'university.jpg',
                        'project_link' => 'https://github.com/rdhawladar/University_Automation_ERP'
                    ])
                    @include('portfolio/portfolio-details', [
                        'project_title' => 'School Management System',
                        'project_details' => 'Manages admission, attentendce, exams, results and amny more',
                        'project_tools' => 'CodeIgniter, Ajax, JQuery',
                        'project_img' => 'university.jpg',
                        'project_link' => 'https://github.com/rdhawladar/University_Automation_ERP'
                    ])
                    @include('portfolio/portfolio-details', [
                                'project_title' => 'Recent Project',
                                'project_details' => 'Web Development',
                                'project_img' => 'images/project-1.jpg',

                                'project_title2' => 'Recent Project',
                                'project_details2' => 'Web design',
                                'project_img2' => 'images/project-2.jpg',
                            ])
                    @include('portfolio/portfolio-details', [
                                'project_title' => 'Recent Project',
                                'project_details' => 'Web Development',
                                'project_img' => 'images/project-1.jpg',

                                'project_title2' => 'Recent Project',
                                'project_details2' => 'Web design',
                                'project_img2' => 'images/project-2.jpg',
                            ])
                </div>
            </div>
        </div>

        <div class="tab-pane" id="js">
            <div class="ml-auto mr-auto">
                <div class="row">
                    @include('portfolio/portfolio-details', [
                                'project_title' => 'Code igniter',
                                'project_details' => 'Web Development',
                                'project_img' => 'images/project-1.jpg',

                                'project_title2' => 'Recent Project',
                                'project_details2' => 'Web design',
                                'project_img2' => 'images/project-2.jpg',
                            ])
                    @include('portfolio/portfolio-details', [
                                'project_title' => 'Recent Project',
                                'project_details' => 'Web Development',
                                'project_img' => 'images/project-1.jpg',

                                'project_title2' => 'Recent Project',
                                'project_details2' => 'Web design',
                                'project_img2' => 'images/project-2.jpg',
                            ])
                    @include('portfolio/portfolio-details', [
                                'project_title' => 'Recent Project',
                                'project_details' => 'Web Development',
                                'project_img' => 'images/project-1.jpg',

                                'project_title2' => 'Recent Project',
                                'project_details2' => 'Web design',
                                'project_img2' => 'images/project-2.jpg',
                            ])
                </div>
            </div>
        </div>
        <div class="tab-pane" id="wordpress">
            <div class="ml-auto mr-auto">
                <div class="row">
                    @include('portfolio/portfolio-details', [
                                'project_title' => 'wordpress',
                                'project_details' => 'Web Development',
                                'project_img' => 'images/project-1.jpg',

                                'project_title2' => 'Recent Project',
                                'project_details2' => 'Web design',
                                'project_img2' => 'images/project-2.jpg',
                            ])
                    @include('portfolio/portfolio-details', [
                                'project_title' => 'Recent Project',
                                'project_details' => 'Web Development',
                                'project_img' => 'images/project-1.jpg',

                                'project_title2' => 'Recent Project',
                                'project_details2' => 'Web design',
                                'project_img2' => 'images/project-2.jpg',
                            ])
                    @include('portfolio/portfolio-details', [
                                'project_title' => 'Recent Project',
                                'project_details' => 'Web Development',
                                'project_img' => 'images/project-1.jpg',

                                'project_title2' => 'Recent Project',
                                'project_details2' => 'Web design',
                                'project_img2' => 'images/project-2.jpg',
                            ])
                </div>
            </div>
        </div>

      
        <div class="tab-pane" id="other">
            <div class="ml-auto mr-auto">
                <div class="row">
                    @include('portfolio/portfolio-details', [
                                'project_title' => 'Code other',
                                'project_details' => 'Web Development',
                                'project_img' => 'images/project-1.jpg',

                                'project_title2' => 'Recent Project',
                                'project_details2' => 'Web design',
                                'project_img2' => 'images/project-2.jpg',
                            ])
                    @include('portfolio/portfolio-details', [
                                'project_title' => 'Recent Project',
                                'project_details' => 'Web Development',
                                'project_img' => 'images/project-1.jpg',

                                'project_title2' => 'Recent Project',
                                'project_details2' => 'Web design',
                                'project_img2' => 'images/project-2.jpg',
                            ])
                    @include('portfolio/portfolio-details', [
                                'project_title' => 'Recent Project',
                                'project_details' => 'Web Development',
                                'project_img' => 'images/project-1.jpg',

                                'project_title2' => 'Recent Project',
                                'project_details2' => 'Web design',
                                'project_img2' => 'images/project-2.jpg',
                            ])
                </div>
            </div>
        </div>

      
        <div class="tab-pane" id="tv">
            <div class="ml-auto mr-auto">
                <div class="row">
                    @include('portfolio/portfolio-details', [
                                'project_title' => 'Code igniter',
                                'project_details' => 'Web Development',
                                'project_img' => 'images/project-1.jpg',

                                'project_title2' => 'Recent Project',
                                'project_details2' => 'Web design',
                                'project_img2' => 'images/project-2.jpg',
                            ])
                    @include('portfolio/portfolio-details', [
                                'project_title' => 'Recent Project',
                                'project_details' => 'Web Development',
                                'project_img' => 'images/project-1.jpg',

                                'project_title2' => 'Recent Project',
                                'project_details2' => 'Web design',
                                'project_img2' => 'images/project-2.jpg',
                            ])
                    @include('portfolio/portfolio-details', [
                                'project_title' => 'Recent Project',
                                'project_details' => 'Web Development',
                                'project_img' => 'images/project-1.jpg',

                                'project_title2' => 'Recent Project',
                                'project_details2' => 'Web design',
                                'project_img2' => 'images/project-2.jpg',
                            ])
                </div>
            </div>
        </div>

      

    </div>
  </div>
</div>