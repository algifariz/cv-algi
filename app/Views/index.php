<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<div class="page-content">
  <div id="content">
    <header>
      <div class="cover bg-light">
        <div class="container px-3">
          <div class="row">
            <div class="col-lg-6 p-2"><img class="img-fluid" src="<?= base_url(); ?>/assets/images/illustrations/hello3.svg" alt="hello" /></div>
            <div class="col-lg-6">
              <div class="mt-5">
                <p class="lead text-uppercase mb-1">Hello!</p>
                <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">I’m <?= $algi['nama']; ?></h1>
                <p class="lead fw-normal mt-3" data-aos="fade-up" data-aos-delay="100">Web Developer & Mobile Application Developer</p>
                <div class="social-nav" data-aos="fade-up" data-aos-delay="200">
                  <nav role="navigation">
                    <ul class="nav justify-content-left">
                      <li class="nav-item"><a class="nav-link" href="https://github.com/algifariz" title="Github"><i class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a></li>
                      <li class="nav-item"><a class="nav-link" href="https://web.facebook.com/algipari.zidan.3/" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
                      <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>
                    </ul>
                  </nav>
                </div>
                <div class="mt-3" data-aos="fade-up" data-aos-delay="200"><a class="btn btn-primary shadow-sm mt-1 hover-effect" href="#contact">Get In Touch <i class="fas fa-arrow-right"></i></a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="wave-bg"></div>
    </header>
    <div class="section pt-4 px-3 px-lg-4" id="about">
      <div class="container-narrow">
        <div class="row">
          <div class="col-md-6">
            <h2 class="h4 my-2">Hello! I’m <?= $algi['nama']; ?>.</h2>
            <p> <?= $algi['des']; ?>.</p>
            <div class="row mt-3">
              <div class="col-sm-2">
                <div class="pb-1">Age:</div>
              </div>
              <div class="col-sm-10">
                <div class="pb-1 fw-bolder"><?= $algi['umur']; ?></div>
              </div>
              <div class="col-sm-2">
                <div class="pb-1">Email:</div>
              </div>
              <div class="col-sm-10">
                <div class="pb-1 fw-bolder"><?= $algi['email']; ?></div>
              </div>
              <div class="col-sm-2">
                <div class="pb-1">Github:</div>
              </div>
              <div class="col-sm-10">
                <div class="pb-1 fw-bolder"><?= $algi['github']; ?></div>
              </div>
              <div class="col-sm-2">
                <div class="pb-1">Phone:</div>
              </div>
              <div class="col-sm-10">
                <div class="pb-1 fw-bolder"><?= $algi['no_hp']; ?></div>
              </div>
              <div class="col-sm-2">
                <div class="pb-1">Address:</div>
              </div>
              <div class="col-sm-10">
                <div class="pb-1 fw-bolder"><?= $algi['alamat']; ?></div>
              </div>
            </div>
          </div>
          <div class="col-md-5 offset-md-1" data-aos="fade-left" data-aos-delay="100"><img class="avatar img-fluid mt-2" src="<?= base_url(); ?>/assets/images/<?= $algi['img']; ?>" width="400" height="400" alt="Walter Patterson" /></div>
        </div>
      </div>
    </div>
    <div class="section px-3 px-lg-4 pt-5" id="services">
      <div class="container-narrow">
        <div class="text-center mb-5">
          <h2 class="marker marker-center">My Services</h2>
        </div>
        <div class="text-center">
          <p class="mx-auto mb-3" style="max-width:600px"> I offer services fit for any website or app. I can quickly maximize timely deliverables for real-time schemas.</p>
        </div>
        <div class="row py-3">
          <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100"><img class="mb-2" src="<?= base_url(); ?>/assets/images/services/web-design.svg" width="96" height="96" alt="web design" />
            <div class="h5">Web Design</div>
          </div>
          <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="200"><img class="mb-2" src="<?= base_url(); ?>/assets/images/services/graphic-design.svg" width="96" height="96" alt="graphic design" />
            <div class="h5">Graphic Design</div>
          </div>
          <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="300"><img class="mb-2" src="<?= base_url(); ?>/assets/images/services/ui-ux.svg" width="96" height="96" alt="ui-ux" />
            <div class="h5">UI/UX</div>
          </div>
          <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="400"><img class="mb-2" src="<?= base_url(); ?>/assets/images/services/app-development.svg" width="96" height="96" alt="app development" />
            <div class="h5">App Development</div>
          </div>
        </div>
      </div>
    </div>
    <div class="section px-3 px-lg-4 pt-5" id="skills">
      <div class="container-narrow">
        <div class="text-center mb-5">
          <h2 class="marker marker-center">My Skills</h2>
        </div>
        <div class="text-center">
          <p class="mx-auto mb-3" style="max-width:600px">I am a quick learner and specialize in multitude of skills required for Web Application Development and Product Design</p>
        </div>
        <div class="bg-light p-3">
          <div class="row">
            <?php foreach ($skill as $sk) : ?>
              <div class="col-md-6">
                <div class="py-1">
                  <div class="d-flex text-small fw-bolder"><span class="me-auto"><?= $sk['name']; ?></span><span><?= $sk['value']; ?>%</span></div>
                  <div class="progress my-1">
                    <div class="progress-bar bg-primary" role="progressbar" data-aos="zoom-in-right" data-aos-delay="100" data-aos-anchor=".skills-section" style="width:<?= $sk['value']; ?>%" aria-valuenow="<?= $sk['value']; ?>" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="section px-3 px-lg-4 pt-5" id="edukasi">
    <div class="container-narrow">
      <div class="text-center mb-5">
        <h2 class="marker marker-center">Edukasi</h2>
      </div>
      <div class="row">
        <?php foreach ($edu as $ed) : ?>
          <div class="col-md-6">
            <div class="card mb-3" data-aos="fade-right" data-aos-delay="100">
              <div class="card-header px-3 py-2">
                <div class="d-flex justify-content-between">
                  <div>
                    <h3 class="h5 mb-1"><?= $ed['edu_name']; ?> | <?= $ed['edu_detail'];  ?></h3>
                    <div class="text-muted text-small">Masuk/keluar <small>(<?= $ed['edu_in']; ?> - <?= $ed['edu_out'];  ?>)</small></div>
                  </div><img src="<?= base_url(); ?>/assets/images/services/ui-ux.svg" width="48" height="48" alt="ui-ux" />
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="section px-2 px-lg-4 pb-4 pt-5 mb-5" id="contact">
      <div class="container-narrow">
        <div class="text-center mb-5">
          <h2 class="marker marker-center">Contact Me</h2>
        </div>
        <div class="row">
          <div class="col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="bg-light my-2 p-3 pt-2">
              <form action="https://formspree.io/your@email.com" method="POST">
                <div class="form-group my-2">
                  <label for="name" class="form-label fw-bolder">Name</label>
                  <input class="form-control" type="text" id="name" name="name" required>
                </div>
                <div class="form-group my-2">
                  <label for="email" class="form-label fw-bolder">Email</label>
                  <input class="form-control" type="email" id="email" name="_replyto" required>
                </div>
                <div class="form-group my-2">
                  <label for="message" class="form-label fw-bolder">Message</label>
                  <textarea class="form-control" style="resize: none;" id="message" name="message" rows="4" required></textarea>
                </div>
                <button class="btn btn-primary mt-2" type="submit">Send</button>
              </form>
            </div>
          </div>
          <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
            <div class="mt-3 px-1">
              <div class="h5">Let’s talk how I can help you!</div>
              <p>If you like my work and want to avail my services then drop me a message using the contact form. </p>
              <p>Or get in touch using my email, GitHub or my contact number.</p>
              <p>See you!</p>
            </div>
            <div class="mt-53 px-1">
              <div class="row">
                <div class="col-sm-2">
                  <div class="pb-1">Email:</div>
                </div>
                <div class="col-sm-10">
                  <div class="pb-1 fw-bolder"><?= $algi['email']; ?></div>
                </div>
                <div class="col-sm-2">
                  <div class="pb-1">GitHub:</div>
                </div>
                <div class="col-sm-10">
                  <div class="pb-1 fw-bolder"><?= $algi['github']; ?></div>
                </div>
                <div class="col-sm-2">
                  <div class="pb-1">Phone:</div>
                </div>
                <div class="col-sm-10">
                  <div class="pb-1 fw-bolder">+<?= $algi['no_hp']; ?></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="pt-4 pb-4 text-center bg-light">
      <div class="container">
        <div class="my-3">
          <div class="h4"><?= $algi['nama']; ?></div>
          <p>Web Developer & Mobile Application Developer</p>
          <div class="social-nav">
            <nav role="navigation">
              <ul class="nav justify-content-center">
                <li class="nav-item"><a class="nav-link" href="https://github.com/algifariz" title="Github"><i class="fab fa-github"></i><span class="menu-title sr-only">Github</span></a></li>
                <li class="nav-item"><a class="nav-link" href="https://web.facebook.com/algipari.zidan.3/" title="Facebook"><i class="fab fa-facebook"></i><span class="menu-title sr-only">Facebook</span></a></li>
                <li class="nav-item"><a class="nav-link" href="https://www.instagram.com/templateflip" title="Instagram"><i class="fab fa-instagram"></i><span class="menu-title sr-only">Instagram</span></a></li>

              </ul>
            </nav>
          </div>
        </div>
        <div class="text-small text-secondary">
          <div class="mb-1">&copy; Super Folio. All rights reserved.</div>
          <div>
            <!-- Make sure to buy a license for the template before removing the line below. Buy license on https://templateflip.com/ -->Design - <a href="https://templateflip.com/" target="_blank">TemplateFlip</a>
          </div>
        </div>
      </div>
    </footer>
  </div>
</div>
<?= $this->endSection(); ?>