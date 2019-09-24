<body class="container-fluid">
    <?php
    if (isset($_SESSION['sukses_evt'])) {
        $this->load->view('alert/success_event');
    } else if (isset($_SESSION['fail_evt'])) {
        $this->load->view('alert/fail_event');
    }
    if (isset($_SESSION['sukses_tkt'])) {
        $this->load->view('alert/success_ticket');
    } else if (isset($_SESSION['fail_tkt'])) {
        $this->load->view('alert/fail_ticket');
    }
    if (isset($_SESSION['fail_pic'])) {
        $this->load->view('alert/no_pict');
    }
    ?>
    <!-- DATA EVENT dan TICKET milik Member -->
    <div id="kelola-event" class="member-event">
        <div class="title-list-member">
            <h2 class="badge badge-light">Your Events</h2>
        </div>
        <?php if (!empty($event)) { ?>
            <div class="list-kosong text-center">
                <h1 class="badge badge-danger">Data tidak ditemukan</h1>
            </div>
        <?php } else { ?>
            <div class="center" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
                <?php foreach ($events as $event) : ?>
                    <div>
                        <div class="card">
                            <img src="<?= base_url() ?>upload/event/<?= $event['poster'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $event['namaEvent'] ?></h5>
                                <ul>
                                    <li><?= $event['tanggalEvent'] ?></li>
                                </ul>
                                <div class="btn-card-list">
                                    <a href="#" class="btn">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php } ?>
            <!-- <div>
                <div class="card">
                    <img src="<?= base_url() ?>asset/event1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Judul Event / Ticket</h5>
                        <ul>
                            <li>Tanggal</li>
                            <li>Tempat</li>
                            <li>CP / utk ticket</li>    
                        </ul>
                        <div class="btn-card-list">
                            <a href="#" class="btn">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <img src="<?= base_url() ?>asset/event1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Judul Event / Ticket</h5>
                        <ul>
                            <li>Tanggal</li>
                            <li>Tempat</li>
                            <li>CP / utk ticket</li>    
                        </ul>
                        <div class="btn-card-list">
                            <a href="#" class="btn">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <img src="<?= base_url() ?>asset/event1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Judul Event / Ticket</h5>
                        <ul>
                            <li>Tanggal</li>
                            <li>Tempat</li>
                            <li>CP / utk ticket</li>    
                        </ul>
                        <div class="btn-card-list">
                            <a href="#" class="btn">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <img src="<?= base_url() ?>asset/event1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Judul Event / Ticket</h5>
                        <ul>
                            <li>Tanggal</li>
                            <li>Tempat</li>
                            <li>CP / utk ticket</li>    
                        </ul>
                        <div class="btn-card-list">
                            <a href="#" class="btn">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div> -->
            </div>
    </div>
    <div id="kelola-ticket" class="member-ticket">
        <div class="title-list-ticket">
            <h2 class="badge badge-light">Your Ticket</h2>
        </div>
        <?php if (!empty($ticket)) { ?>
            <div class="list-kosong text-center">
                <h1 class="badge badge-danger">Data tidak ditemukan</h1>
            </div>
        <?php } else { ?>
            <div class="center" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
                <?php foreach ($tickets as $ticket) : ?>
                    <div>
                        <div class="card">
                            <img src="<?= base_url() ?>upload/ticket/<?= $ticket['poster'] ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?= $ticket['namaTicket'] ?></h5>
                                <ul>
                                    <li><?= $ticket['tanggalTicket'] ?></li>
                                    <li><?= $ticket['contactPerson'] ?></li>
                                </ul>
                                <div class="btn-card-list">
                                    <a href="#" class="btn">Edit</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            <?php } ?>
            <!-- <div>
                <div class="card">
                    <img src="<?= base_url() ?>asset/tick1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Judul Event / Ticket</h5>
                        <ul>
                            <li>Tanggal</li>
                            <li>Tempat</li>
                            <li>CP / utk ticket</li>    
                        </ul>
                        <div class="btn-card-list">
                            <a href="#" class="btn">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <img src="<?= base_url() ?>asset/tick1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Judul Event / Ticket</h5>
                        <ul>
                            <li>Tanggal</li>
                            <li>Tempat</li>
                            <li>CP / utk ticket</li>    
                        </ul>
                        <div class="btn-card-list">
                            <a href="#" class="btn">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <img src="<?= base_url() ?>asset/tick1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Judul Event / Ticket</h5>
                        <ul>
                            <li>Tanggal</li>
                            <li>Tempat</li>
                            <li>CP / utk ticket</li>    
                        </ul>
                        <div class="btn-card-list">
                            <a href="#" class="btn">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="card">
                    <img src="<?= base_url() ?>asset/tick1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Judul Event / Ticket</h5>
                        <ul>
                            <li>Tanggal</li>
                            <li>Tempat</li>
                            <li>CP / utk ticket</li>    
                        </ul>
                        <div class="btn-card-list">
                            <a href="#" class="btn">Edit</a>
                            <a href="#" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                </div>
            </div> -->
            </div>
    </div>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>asset/slick.min.js"></script>
    <script>
        $('.center').slick({
            centerMode: true,
            centerPadding: '60px',
            slidesToShow: 3,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    </script>
    <!-- INPUT -->
    <div id="input-event" class="justify-content-center" style="display: none;">
        <?php echo form_open_multipart('member/insert_event'); ?>
        <div class="form-group">
            <label for="eventname">Nama Event</label>
            <input type="input" class="form-control" name="eventname" required>
        </div>
        <!-- <div class="form-group">
                <label for="category">Kategori</label>
                <select name="" class="form-control" name="category">
                    <option value="Music">Musik</option>
                    <option value="Party">Pesta</option>
                    <option value="Sport">Olahraga</option>
                    <option value="Education">Edukasi</option>
                    <option value="Charity">Amal</option>
                    <option value="Travel">Travel</option>
                    <option value="Art">Seni</option>
                    <option value="Seminar">Seminar & Workshop</option>
                </select>
            </div> -->
        <div class="form-group">
            <label for="date">Tanggal Event</label>
            <input type="date" class="form-control" name="date" required>
        </div>
        <div class="form-group">
            <label for="poster">Foto Event / Poster</label>
            <input class="form-control" type="file" name="poster" required>
        </div>
        <div class="form-group">
            <button type="button" class="btn mx-auto"><a href="<?= base_url(); ?>">Back</a></button>
            <button type="submit" class="btn mx-auto">Submit</button>
        </div>
        </form>
    </div>

    <div id="input-ticket" class="justify-content-center" style="display: none;">
        <?php echo form_open_multipart('member/insert_ticket'); ?>
        <div class="form-group">
            <label for="ticketname">Nama Ticket</label>
            <input type="input" class="form-control" name="ticketname" required>
        </div>
        <div class="form-group">
            <label for="contatperson">Contact Person</label>
            <input type="input" class="form-control" name="contactperson" required>
        </div>
        <!-- <div class="form-group">
                <label for="category">Kategori</label>
                <select name="" class="form-control" name="category">
                    <option value="Music">Musik</option>
                    <option value="Party">Pesta</option>
                    <option value="Sport">Olahraga</option>
                    <option value="Education">Edukasi</option>
                    <option value="Charity">Amal</option>
                    <option value="Travel">Travel</option>
                    <option value="Art">Seni</option>
                    <option value="Seminar">Seminar & Workshop</option>
                </select>
            </div> -->
        <div class="form-group">
            <label for="date">Tanggal Ticket</label>
            <input type="date" class="form-control" name="date" required>
        </div>
        <div class="form-group">
            <label for="poster">Foto Ticket / Poster</label>
            <input type="file" class="form-control" name="poster" required>
        </div>
        <div class="form-group">
            <button type="button" class="btn mx-auto"><a href="<?= base_url(); ?>">Back</a></button>
            <button type="submit" class="btn mx-auto">Submit</button>
        </div>
        </form>
    </div>
</body>

</html>