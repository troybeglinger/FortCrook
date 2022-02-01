<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Joining Fort Crook Lodge &#35;250</title>

  <?php include 'components/header.php';?>
  
</head>

<body>

  <section class="colored-section" id="title">

    <div class="container-fluid">

      <!-- Nav Bar -->
      <?php include 'components/nav.php';?>


      <!-- Title -->

      <div class="row">

        <div class="col-lg-6">
          <h1 class="big-heading">Joining the Masons</h1>
        </div>

        <div class="col-lg-6">
        <i class="far fa-handshake fa-6x"></i>
        </div>

      </div>

    </div>

  </section>


  <!-- Form -->

  <section class="white-section" id="form">

    <div class="container-fluid">
      <p>Ready to join the world’s oldest and most popular fraternity? All you have to do is ask.</p>
      <p>Masons seek to form lasting friendships, practice self-improvement, and make our world a better place to live in. Thanks to that, our fraternity only accepts adult men of excellent character who profess a belief in a Supreme Being.</p>
      <p>To learn more about joining us, please complete the form below or view our detailed <a href="instructions.php">instructions for applicants</a>.</p>
    </div>
  </section>

  <section class="colored-section" id="form">
      <br>
  <div class="container">
  <div class="row mx-0 justify-content-center">
    <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 px-xl-0 px-xxl-3">
      <form
        method="POST"
        class="w-100 rounded-1 p-4 border bg-white"
        action="mailto:secretary@fortcrook250.org?subject=Joining the Masons"
      >
        <label class="d-block mb-4">
          <span class="form-label d-block">Full Name</span>
          <input
            name="name"
            type="text"
            class="form-control"
            placeholder="Full Name"
            required
          />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Email Address</span>
          <input
            name="email"
            type="email"
            class="form-control"
            placeholder="my.email@example.com"
            required
          />
        </label>

        <label class="d-block mb-4">
          <span class="form-label d-block">Message</span>
          <textarea
            name="message"
            class="form-control"
            rows="3"
            placeholder="Tell us about why you want to join."
            required
          ></textarea>
        </label>

        <div class="mb-3">
          <button type="submit" class="btn btn-lg btn-primary">
            Ask to Join
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
      <br>
  </section>

  <!-- Footer -->
  <?php include 'components/footer.php';?>


</body>

</html>
