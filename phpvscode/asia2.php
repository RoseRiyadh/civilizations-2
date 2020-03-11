 <!--header-->
 <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" ></script>

    <title>Civilization</title>
</head>

<body>
  <!--navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="index2.php">الحضارات</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="ابحث" aria-label="Search">
        <button class="btn btn-primary my-2 my-sm-0" type="submit">ابحث</button>
      </form>
    </div>
  </nav>
  <h4> لنتعلم عن كل الحضارات حول العالم</h4>
<!--Animation earth-->
<div class="earth"></div>



<h4>أهلا بك في اسيا</h4>
  <div class="container">
  <div class="row">
    <label class="label2">أختر دوله</label>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text btn-primary" for="inputGroupSelect01">الدول</label>
      </div>
    <select class="custom-select" id="country">
      <option selected></option>
      <option value="1">العراق</option>
      <option value="2">أيران</option>
      <option value="3">سوريا</option>
      <option value="3">الصين</option>
      <option value="3">الهند</option>
    </select>
    </div>
  </div>
  <div class="row">
    <label class="label2">أختر العهد</label>
    <div class="input-group mb-3">
      <div class="input-group-prepend">
        <label class="input-group-text btn-primary" for="inputGroupSelect01">العهود</label>
      </div>
    <select class="custom-select" id="testament">
      <option selected></option>
      <option value="1">الحديث</option>
      <option value="2">القديم</option>
    </select>
    </div>
  </div>
  <div class="row">
    <div class="col-6 col-lg-4">
      <a  href="civils-page2.php" type="submit" id="submit" class="btn btn2 btn-outline-primary">أذهب</a>
    </div>
  </div>
</div>

 <!--footer-->
 <footer class="footer-section"> 
  <div class="copyright-area">
    <div class="row">
        <div class="col-xl-6 col-lg-6 text-center text-lg-left">
          <div class="footer-menu">
            <ul>
              <li><a href="login.php">اللغات</a></li>
              <li><a href="about-us.php">من نحن</a></li>
            </ul>
          </div>
          </div>
    </div>
    <div class="row">
          <div class="col-xl-6 col-lg-6 text-center text-lg-left">
            <div class="copyright-text">
              <p> &copy; copy right <a href="#">Hussein</a></p>
            </div>
          </div>
    </div>
  </div>
</footer>

</body>
</html>