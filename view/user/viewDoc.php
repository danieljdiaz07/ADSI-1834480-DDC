<body class="bg-gradient-primary">

<div class="container">

  <!-- Outer Row -->
  <div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

      <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
          <!-- Nested Row within Card Body -->

              <div class="p-4">
                <div class="text-center">
                  <div class="col-lg-6-center">
                  <h1 class="h4 text-gray-900 mb-4">DDC by ADSI!</h1>
                  </div>
                </div>  
                    <?php
                        $dir = scandir("documents/".$id);
                        $result = null;

                        foreach ($dir as $key => $value) {
                            if(!in_array($value, array(".",".."))) {
                                $result[] = $value;
                            }
                        }
                        
                        foreach ($result as $value) {
                            if (substr($value, -3) == 'pdf') {
                                echo "<embed src='documents/$id/$value' type='application/pdf' width='100%' height='500px'>"; 
                            } else {
                                echo "<img src='documents/$id/$value'>";
                            }
                        }