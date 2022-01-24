<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Student</title>
</head>
<body>
    <main class="row w-100 h-100"> 
        <?php
           include '../decoupage/sidbar.php'
        ?>   

        <div class="container-fuild  mt-2 col">
            <?php
              include '../decoupage/nav.php'
            ?>   

          <section class="d-flex flex-row justify-content-between align-items-center px-4 pt-2">
                <div>
                        <p><strong>Students List</strong></p>
                </div>
                <div class="nvr d-flex flex-row align-items-center">
                    <div class="pe-4">
                        <img class="" src="image/Vector.png" alt="liste">
                    </div>  
                    <div>  
                        <button class="btn bg-info text-white fs-6 ">ADD NEW STUDENT</button>
                    </div>  
                </div>
          </section> 
        
         <section  class="tab table-responsive mx-4  pt-2 ">
            <table class="table table-borderless">
                    <thead >
                      <tr class=" text-muted">
                        <th scope="col"></th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Enrole number</th>
                        <th scope="col">Date of admission</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                 <tbody>
                     <?php
                         $students_list= array (
                             array("img"=>"image/student.png", "Name"=>"username", "Email"=>"user@email.com", "Phone"=>"7305477760", "EnrollNumber"=>"1234567305477760", "Dateofadmission"=>"08-Dec-2021", "logo1"=>"image/vector (1).png", "logo2"=>"image/vector (2).png"),
                             array("img"=>"image/student.png", "Name"=>"username", "Email"=>"user@email.com", "Phone"=>"7305477760", "EnrollNumber"=>"1234567305477760", "Dateofadmission"=>"08-Dec-2021", "logo1"=>"image/vector (1).png", "logo2"=>"image/vector (2).png"),
                             array("img"=>"image/student.png", "Name"=>"username", "Email"=>"user@email.com", "Phone"=>"7305477760", "EnrollNumber"=>"1234567305477760", "Dateofadmission"=>"08-Dec-2021", "logo1"=>"image/vector (1).png", "logo2"=>"image/vector (2).png"),
                             array("img"=>"image/student.png", "Name"=>"username", "Email"=>"user@email.com", "Phone"=>"7305477760", "EnrollNumber"=>"1234567305477760", "Dateofadmission"=>"08-Dec-2021", "logo1"=>"image/vector (1).png", "logo2"=>"image/vector (2).png"),
                         );
                         foreach ($students_list as $info) {
                             
                             echo '<tr><td></td></tr>';
                             echo '<td  scope="row" class="bg-white aligne-middle"><img src="'.$info['img'].'" alt=""></td>';
                             echo '<td class="align-middle bg-white">'.$info['Name'].'</td>';
                             echo '<td class="align-middle bg-white">'.$info['Email'].'</td>';
                             echo '<td class="align-middle bg-white">'.$info['Phone'].'</td>';
                             echo '<td class="align-middle bg-white">'.$info['EnrollNumber'].'</td>';
                             echo '<td class="align-middle bg-white">'.$info['Dateofadmission'].'</td>';
                             echo '<td scope="row" class="align-middle bg-white"><img src="'.$info['logo1'].'" alt="logo1"></td>';
                             echo '<td scope="row" class="align-middle bg-white"><img src="'.$info['logo2'].'" alt="Logo2"></td>';
                             echo ' </tr>';
                           };
                     ?>
 
                </tbody>
            </table>
        </section>
      </div>    
    </main>
  <script src="bootstrap.bundle.min.js"></script>  
</body>
</html>



