
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion de tâches</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../../dist/css/style.min.css" rel="stylesheet">
    
</head>

<body>
    
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                        <i class="ti-menu ti-close"></i>
                    </a>
                    
                    <div class="navbar-brand">
                        <a href="index.php" class="logo">
                            <!-- Logo icon -->
                            <b class="logo-icon">
                                <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                                <!-- Dark Logo icon -->
                                <img src="../../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../../assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../../assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="../../assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    
                </div>
                
            </nav>
        </header>
        
        <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="index.php"
                                aria-expanded="false">
                                <i class="mdi mdi-account-network"></i>
                                <span class="hide-menu">Profile</span>
                            </a>
                        </li>
                        
                        
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="gestion_tache.php"
                                aria-expanded="false">
                                <i class="mdi mdi-border-none"></i>
                                <span class="hide-menu">Gestion de Tâches</span>
                            </a>
                        </li>

                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link" href="gestion_employe.php"
                                aria-expanded="false">
                                <i class="me-2 mdi mdi-account-multiple"></i>
                                <span class="hide-menu">Gestion d'employés</span>
                            </a>
                        </li>
                        
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <div class="page-wrapper">
            
            <div class="container-fluid">
                
                <div class="row">
                    
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Ajouter un employé</h4>
                                
                                <form class="form-horizontal mt-4 ml-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                    <h4> ID : </h4>
                                    <div class="form-group">
                                        <label>Nom :</label>
                                        <input name="e_nom" class="form-control" type="text" placeholder="" >
                                    </div>
                                    <div class="form-group">
                                        <label>Prénom :</label>
                                        <input name="e_prenom" class="form-control" type="text" placeholder="" >
                                    </div>
                                    <div class="form-group">
                                        <label>Adresse</label>
                                        <textarea name="e_adresse" class="form-control" rows="2"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Grade</label>
                                        <input name="e_grade" class="form-control" type="text" placeholder="" >
                                    </div>
                                    <div class="form-group">
                                        <label>Numéro de compte :</label>
                                        <input  name="e_numCompte"class="form-control" type="number" placeholder="" >
                                    </div>
                                    <div class="form-group">
                                        <label>Supervisor ID :</label>
                                        <input name="e_idSup" class="form-control" type="text" placeholder="" >
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="submit" class="btn btn-success text-white" value="Enregistrer"></input>
                                        </div>
                                    </div>
                                </form>
                        
                            </div>
                        </div>
                    </div>

                </div>
                
            </div>
            
            <footer class="footer text-center">
                All Rights Reserved. Designed and Developed by    Hadhami Ouni
            </footer>
            
        </div>
        
    </div>
    
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
</body>

</html>
<?php
require_once "config.php";
 
$nom = $prenom = $adresse =$grade = $numCompte = $idSup	= "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $nom = trim($_POST["e_nom"]);
    $prenom = trim($_POST["e_prenom"]);
    $adresse = trim($_POST["e_adresse"]);
    $grade = trim($_POST["e_grade"]);
    $numCompte = trim($_POST["e_numCompte"]);
    $idSup= trim($_POST["e_idSup"]);
    
    
    
    // Check input errors before inserting in database
    
        // Prepare an insert statement
        $sql = 'INSERT INTO employe (nom, prenom, adresse, grade, numCompte, idSup) VALUES (?, ?, ?, ?, ?, ?)';
 
        if($stmt = $mysqli->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bind_param("ssssss", $p_nom, $p_prenom ,$p_adresse, $p_grade , $p_numCompte , $p_idSup);
            
            // Set parameters
            $p_nom= $nom ;
            $p_prenom= $prenom ;
            $p_adresse= $adresse ;
            $p_grade=$grade ;
            $p_numCompte= $numCompte ;
            $p_idSup= $idSup;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records created successfully. Redirect to landing page
                //header("location: gestion_tache.php");
                echo "OK";
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        $stmt->close();
    
    
    // Close connection
    $mysqli->close();
}
?>