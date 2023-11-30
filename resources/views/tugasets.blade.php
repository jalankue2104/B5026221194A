<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yale School Of Art</title>
    <link rel="stylesheet" href="asetugasets/UTS.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&family=Young+Serif&display=swap" rel="stylesheet">

<script>
function validateForm(){
  var hp = document.getElementById("hp");
  var msg = document.getElementById("msg");
  var nama = document.getElementById("nama");
  var email = document.getElementById("email");
  //cek hanya invalid
  if(hp.value==""){
      hp.focus();
      hp.placeholder = "Contoh: 08132456";
      alert("Kolom HP harus Diisi");
      return false;
  }

  if(isNaN(hp.value)==true){
      hp.focus();
      hp.placeholder = "Contoh: 08132456";
      alert("Masukkan Hanya Angka, Bukan Huruf");
      return false;
  }

  if(hp.value.length!=8){
      hp.focus();
      hp.placeholder = "Contoh: 08123456";
      hp.innerHTML = "Nomor HP Minimal 8 angka"
      return false;
  }

  if(nama.value==""){
      nama.focus();
      nama.placeholder = "Contoh: Budi Siregar";
      alert("Kolom Nama harus Diisi");
      return false;
  }

  if(isNaN(nama.value)==false){
      nama.focus();
      nama.placeholder = "Contoh: Budi Siregar";
      alert("Masukkan Hanya huruf, Bukan Angka");
      return false;
  }
  if(email.value==""){
      email.focus();
      email.placeholder = "Contoh: budi@gmail.com";
      alert("Kolom Email harus Diisi");
      return false;
  }
}
</script>
</head>
<body>
  <!--Navbar-->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="#">Yale</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#atj">Activity To Join</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#course">Course</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#exb">Exhibition</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#project">Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#form">Form</a>
              </li>
          </ul>
        </div>
    </div>
      </nav>
      <div class="jumbotron jumbotron-fluid bg-white" id="#home">
        <div class="container text-center">
            <br>
            <img src="asetugasets/Yaleee.png" alt="">
          <h1 class="display-4">Yale School Of Art</h1>
          <p class="lead">1156 Chapel Street, POB 208339
            New Haven, Connecticut, 06520-8339</p>
        </div>
    </div>
<!--About-->
    <div class="aray-ab-box container-fluid" id="about">
        <div class="aray-ab-word row">
            <div class="col text-center">
              <br>
                <h1 class="aray-ab-word-1">About The School</h1>
            </div>
        </div>
        <div class="row" id="abs-row">
            <div class="aray-ab-word-2 text-center " class="abs-text">
                <b>" The Yale School of Art is a graduate school that confers MFAs in Graphic Design, Painting/Printmaking, Photography, and Sculpture; and offers undergraduate-level art courses to Yale College students. Our website exists as an ongoing collaborative experiment in digital publishing and information sharing. It functions as a wiki—all members of the School of Art community have the ability to add new, and edit most existing content. "</b>
                </div>
        </div>
        <br>
        <br>
        <div class="aray-ab-word row">
            <div class="col text-center">
                <h1 class="aray-ab-word-1">About The Website</h1>
            </div>
        </div>
        <div class="aray-abw row">
            <div class="aray-ab-word-2 text-center" >
            <b>  " This website exists as an ongoing collaborative experiment in digital publishing and information sharing. Because this website functions as a wiki, all members of the School of Art community—graduate students, faculty, staff, and alums—have the ability to add new content and pages, and to edit most of the site’s existing content.Content is the property of its various authors. When you contribute to this site, you agree to abide by Yale University academic and network use policy, and to act as a responsible member of our community."</b> </div>
        </div>
        <br>
        <br>
    </div>
    <!--Activity To Join-->
    <div class="aray-atj container-fluid" id="atj">
       <div class="row">
        <div class="col text-center">
          <br>
            <h1>Activity to Join</h1>
        </div>
    </div>
    <br>
    <br>
    <div class="row">
    <div class="col-7 text-center"> <img class="aray-atj-img" src="asetugasets/atj-1.png" alt="" id="ajt-img" height="600px"></div>
    <div class="aray-atj-isi col-5 text-left" id="atj-isi">
        <div>
        <h2 class="aray-atj-h">DEI Session: Generational Differences at Yale</h2>
        <b><u class="aray-atj-u">Wed, October 18</u>
        <u class="aray-atj-u">1-3PM in 36 Edgewood Ave. Room 204</u></b>
        <b><p class="aray-atj-p">This DEI session will explore the following learning outcomes:

            <ul>• Identifying the generalizations associated with differences in the generations within our school
            </ul>
            <ul>
            • Understanding ways to communicate in a manner that best relates to each generation
            </ul>
            <ul>
            • Learning why it is important to modify our approach for different people and different ages
            </ul>
            <ul>
            • Discovering why we benefit from varied and different perspectives through exploration of unconscious bias and microaggressions in ageism
            </ul>
            <ul>
            • Promoting diversity awareness, community, and effective communication in our school</p>
        </ul> </p> </b>
        <br>
        <br>
    </div>
    </div>
    </div>
  <br>
  <br>
  <br>
    <div class="row">
      <br>
      <br>
        <div class="col-7 text-center"> <img class="aray-atj-img" src="asetugasets/atj-2.jpg" alt="" id="ajt-img" height="600px"></div>
        <div class="aray-atj-isi col-5 text-left" >
            <div>
            <h2 class="aray-atj-h">Public Art Tour</h2>
            <b><u class="aray-atj-u">Thurs. October 19</u>
            <u class="aray-atj-u">2PM, meeting in the Crown Street Courtyard</u> </b>
            <b><p class="aray-atj-p">Lindsey Mancini, Assistant Director of Communications and public art researcher, is leading an art walk to, past, and around the art she's mapped so far in New Haven as part of her practice/project ArtAround.

                It'll be a short, fun, informal tour of art around our buildings at the School of Art. Join us! </p>
    </b>
                
        </div>
        </div>
        </div>
        <br>
        <br>
      </div>
    
  <!--Course-->
  <div id="course" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#course" data-slide-to="0" class="active"></li>
    <li data-target="#course" data-slide-to="1"></li>
    <li data-target="#course" data-slide-to="2"></li>
    <li data-target="#course" data-slide-to="3"></li>
    <li data-target="#course" data-slide-to="4"></li>
    <li data-target="#course" data-slide-to="5"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asetugasets/graphicdesign.png" alt="Graphic Design" width="1300" height="500">
       <div class="carousel-caption">
        <h3>Graphic Design</h3>
        <p>This Course we learn about design</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="asetugasets/typography.png" alt="Typography" width="1300" height="500">
      <div class="carousel-caption">
        <h3>Typography</h3>
        <p>This course will learn about how to typing with aestheticness</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="asetugasets/photography.png" alt="Photography" width="1300" height="500">
      <div class="carousel-caption">
        <h3>Photography</h3>
        <p>This course teach us how to capture static picture</p>
      </div>    
    </div>
    <div class="carousel-item">
      <img src="asetugasets/painting.png" alt="Painting" width="1300" height="500">
      <div class="carousel-caption">
        <h3>Painting</h3>
        <p>This course teach us how to draw in traditional way</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="asetugasets/sculpting.png" alt="Sculpting" width="1300" height="500">
      <div class="carousel-caption">
        <h3>Sculpting</h3>
        <p>this course teach us how to Sculpting the right way</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="asetugasets/videography.png" alt="Videography" width="1300" height="500">
      <div class="carousel-caption">
        <h3>Videography</h3>
        <p>This course teach us how to capture motion picture</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#course" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#course" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

    <!-- exhibition-->
    <div class="aray-exb container-fluid" id="exb">
      <br>
<br>
      <div class="col">
        <h1 class="aray-exb-h">EXHIBITIONS</h1>
        <br>
        <b><P class="aray-exb-p">The School of Art galleries in Green Hall provide a year-round forum for the exhibition of work by students, faculty, and special guests in the four graduate departments of the School and the undergraduate program.

          During exhibitions, Green Hall Gallery at 1156 Chapel Street is typically open to the public but due to COVID-19, it will remain open only to the Yale community until further notice.</P>
      </b>
      <br>
    </div> 
      <div class="container">
     <div class="row">
      <div class="col"><h2 class="aray-exb-h-1">Why Do I Always Fall Out Of Bed At Night?</h2></div>
      <div class="col"> <h2 class="aray-exb-h">FALL 2023 IN GREEN HALL GALLERY </h2></div> 
      </div>
     </div>
     <br>  
     <div class="row">
      <div class="col">
        <b><h4 class="aray-exb-h">1st-Year MFA Show</h4>
        <h3 class="aray-exb-u">October 16 – November 4, 2023</h3>
         <p class="aray-exb-p">Green Hall Gallery</p>
        <p class="aray-exb-p">Public reception on Wednesday, November 1 from 6-8PM</p></b>
        </div>
        <br>
        <br>
      <div class="col">
        <b><h5 class="aray-exb-h">2nd Year MFA Show</h5>
        <p class="aray-exb-u">September 20 – October 4, 2023</p>
        <i class="aray-exb-p">Public reception: Wednesday, October 4 from 6-8PM</i>
       <br>
       <br>
        <h5 class="aray-exb-h">1st Year MFA Show</h5>
        <p class="aray-exb-u">October 16 – November 4</p>
        <i class="aray-exb-p">Note: Yale College’s fall recess (for undergraduate students) is Oct 17-22.</i>
        <i class="aray-exb-p">Public reception: TBD</i>
        <br>
        <br>
        <h5 class="aray-exb-h">Undergraduate Show</h5>
        <p class="aray-exb-u">November 13 – December 8</p>
        <i class="aray-exb-p">Note: Thanksgiving recess is Nov 17-26.</i>
        <i class="aray-exb-p">Public reception: TBD</i></b>
      </div>
    </div> <br>
    <br>
    </div>
    <section class="sub-section-alternative" id="project">
          <h2>Projects</h2>
          <br>
          <br>
          <div class="project-container">
              <div class="project-card">
                  <img class="project-image" src="project1.jpg" alt="Project One Image"/>
                  <h3>Tugas 1</h3>
                  <p class="subtext">This is my project and some text about it. I enjoyed making this project.</p>
                  <hr/>
                  <p class="subtext"><a class="project-link" href="https://www.github.com/kubowania">View here</a></p>
              </div>
              <div class="project-card">
                <img class="project-image" src="src/images/project2.jpg" alt="Project One Image"/>
                <h3>Tugas Linktree</h3>
                <p class="subtext">This is my project and some text about it. I enjoyed making this project.</p>
                <hr/>
                <p class="subtext"><a class="project-link" href="https://www.github.com/kubowania">View here</a></p>
              </div>
              <div class="project-card">
                <img class="project-image" src="src/images/project3.png" alt="Project One Image"/>
                <h3>Project Three</h3>
                <p class="subtext">This is my project and some text about it. I enjoyed making this project.</p>
                <hr/>
                <p class="subtext"><a class="project-link" href="https://www.github.com/kubowania">View here</a></p>
              </div>
              <div class="project-card">
                <img class="project-image" src="src/images/Project4.jpg" alt="Project One Image"/>
                <h3>Project Four</h3>
                <p class="subtext">This is my project and some text about it. I enjoyed making this project.</p>
                <hr/>
                <p class="subtext"><a class="project-link" href="https://www.github.com/kubowania">View here</a></p>

            </div>  
            
          </div>  
          </div>
      </section>
      <section class="sub-section-alternative" id="">
          <div class="project-container">
              <div class="project-card">
                  <img class="project-image" src="src/images/project1.jpg" alt="Project One Image"/>
                  <h3>Project One</h3>
                  <p class="subtext">This is my project and some text about it. I enjoyed making this project.</p>
                  <hr/>
                  <p class="subtext"><a class="project-link" href="https://www.github.com/kubowania">View here</a></p>
              </div>
              <div class="project-card">
                <img class="project-image" src="src/images/project2.jpg" alt="Project One Image"/>
                <h3>Project Two</h3>
                <p class="subtext">This is my project and some text about it. I enjoyed making this project.</p>
                <hr/>
                <p class="subtext"><a class="project-link" href="https://www.github.com/kubowania">View here</a></p>
              </div>
              <div class="project-card">
                <img class="project-image" src="src/images/project3.png" alt="Project One Image"/>
                <h3>Project Three</h3>
                <p class="subtext">This is my project and some text about it. I enjoyed making this project.</p>
                <hr/>
                <p class="subtext"><a class="project-link" href="https://www.github.com/kubowania">View here</a></p>
              </div>
              <div class="project-card">
                <img class="project-image" src="src/images/Project4.jpg" alt="Project One Image"/>
                <h3>Project Four</h3>
                <p class="subtext">This is my project and some text about it. I enjoyed making this project.</p>
                <hr/>
                <p class="subtext"><a class="project-link" href="https://www.github.com/kubowania">View here</a></p>

            </div>  
            
          </div>  
          </div>
      </section>

    <!--Form Contact-->
<div class="aray-form container-fluid" id="form">
  <br>
  <div class="text-left">
<h1 class="aray-form-judul">Form </h1>
<p class="aray-form-deskripsi"><b>Form ini bertujuan untuk pemberitahuan berita melalui Email dan Pesan Singkat </b></p>
  </div>
  <form action="https://google.com" method="get" onsubmit="return validateForm();" >
    <div class="form-group">
      <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama">
        <div id="msg" class="text-danger">
        </div>
        <br>
        <label for="hp">Nomor HP:</label>
        <input type="text" class="form-control" id="hp">
        <div id="msg" class="text-danger">          
       </div>
       <br>
       <label for="email">Email:</label>
        <input type="text" class="form-control" id="email">
        <div id="msg" class="text-danger">
        </div>
        <br>
    </div>
    <input type="submit" value="DAFTAR" class="btn btn-light">
    <input type="reset" value="ULANGI" class="btn btn-danger">
</form>
<br>
</div>
</body>
</html>
