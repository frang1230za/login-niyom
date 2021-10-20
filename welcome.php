<?php 

    session_start();

    if ($_SESSION['id'] == "") {
        header("location: signin.php");
    } else {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
 <!-- Favicon-->
 <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
             
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#portfolio">COMMUNITY SHOP</a></li>
                        <li class="nav-item"><a class="nav-link" href="#about">NEWS</a></li>
                        <li class="nav-item"><a class="nav-link" href="#team">ADDMIN & DEVELOPER</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                        
        <a href="logout.php" class="btn btn-danger">Logout</a>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
        <header class="masthead">
            <div class="container">

       
              
               
                <div class="masthead-subheading">ฮาโหยยย คุณ <?php echo $_SESSION['fname']; ?> !</div>
              
                <a class="btn btn-primary btn-xl text-uppercase" href="#services">goooo</a>
            </div>
        </header>


        <section class="page-section" id="services">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">shop </h4>
                        <p class="text-muted">แหล่งรวมของร้านอาหาร หรือ จุดพักใจพักกายในเชียงใหม่</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">interesting news</h4>
                        <p class="text-muted">ที่นี่รวมข่าวสารที่น่าสนใจ รวมถึงแหล่งท่องเที่ยวใหม่  จังหวัดเชียงใหม่</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Web Security</h4>
                        <p class="text-muted">ระบบเว็บไซด์นี้ มีการป้องกันการเจาะระบบรวมถึง ความปลอดภัยของมูลผู้ใช้</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Grid-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">community shop</h2>
                    <h3 class="section-subheading text-muted"> Chiang Mai
 Shop</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/coffee1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">ร้าน Jaiboon</div>
                                <div class="portfolio-caption-subheading text-muted">คาเฟ่สีเขียวร่มรื่น มีเค้กและเครื่องดื่มให้เลือกหลากหลาย</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 2-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/coffee2222.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">JUNJUN SHOP&CAFE</div>
                                <div class="portfolio-caption-subheading text-muted">คัพเค้กราคาน่ารักเพียงชิ้นละ 20 บาท</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 3-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/coffee3333.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">CHEZ NOUS</div>
                                <div class="portfolio-caption-subheading text-muted">ร้านที่คนรักครัวซองต้องแวะ</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                        <!-- Portfolio item 4-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal4">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/coffee4444.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Samurai Kitchen สาขา สันกำแพง</div>
                                <div class="portfolio-caption-subheading text-muted">ร้านอาหารญี่ปุ่น 59 บาท มีเมนูให้เลือกเยอะมาก เช่น ปลาซาบะ ซูชิ ราเมง ข้าวปั้น</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                        <!-- Portfolio item 5-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal5">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/coffee5555.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">Southwest</div>
                                <div class="portfolio-caption-subheading text-muted">Website Design</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <!-- Portfolio item 6-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal6">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="assets/img/portfolio/car1.jpg" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading">กินเที่ยวรถเช่าเชียงใหม่</div>
                                <div class="portfolio-caption-subheading text-muted">บริษัทเช่ารถ</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">News</h2>
                    <h3 class="section-subheading text-muted">ข่าวสารรายเดือน
</h3>
                </div>
                <ul class="timeline">
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/covid1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>เชียงใหม่พบผู้ติดเชื้อรายใหม่ 86 ราย พร้อมประกาศให้ผู้ที่เข้าใช้บริการสถานที่เสี่ยงเข้ารับการตรวจหาเชื้อ</h4>
                               
                            </div>
                            <div class="timeline-body"><p class="text-muted">ร้านฟ้าใสหมูกระทะ โรงงานน้ำดื่มบิ๊กเบลล์ และร้านป๊อก 9 พบผู้ติดเชื้อเพิ่ม 3 ราย โดยเป็นพนักงาน 2 ราย และเจ้าหน้าที่ในบริษัทขนส่งที่มีประวัติพูดคุยกับพนักงานร้านฟ้าใสหมูกระทะ 1 ราย, สนามหญ้าเทียม ออลสตาร์ อารีนา พบผู้ติดเชื้อเพิ่ม 15 ราย โดยเป็นทีมนักฟุตบอลที่เข้าไปใช้บริการและผู้เข้าชม , มีโชคพลาซ่า และครอบครัวพนักงาน พบผู้ติดเชื้อในครอบครัวเพิ่ม 1 ราย เป็นครอบครัวของผู้ที่มาใช้บริการ , สถานีตำรวจภูธร อำเภอแม่อาย และครอบครัว พบผู้ติดเชื้อในครอบครัวเจ้าหน้าที่ 1 ราย , ร้านสะดวกซื้อ 7-eleven สาขา ปตท.สันคือ พบผู้ติดเชื้อเป็นพนักงานในร้าน ตรวจพบระหว่างกักตัว 1 ราย , ร้าน Weng home cooking cafe พบพนักงานและเพื่อนติดเชื้อ 5 ราย , บริษัท DKSH แผนกขายเครื่องดื่ม พบผู้ติดเชื้อเพิ่ม 1 ราย

นอกจากนี้ยังมีการติดเชื้อในกลุ่มครอบครัว กระจายใน 21 ราย 6 อำเภอ ประกอบด้วย หมู่ 1 ตำบลริมเหนือ อำเภอแม่ริม , หมู่ 6 ตำบลไชยสถาน หมู่ 4 ตำบลยางเนิ้ง ,หมู่ 5 ตำบลชมภู และหมู่ 3 ตำบลดอนแก้ว อำเภอสารภี , หมู่ 9 ตำบลหนองตอง อำเภอหางดง , หมู่ 5 ตำบลสันนาเม็ง อำเภอสันทราย , หมู่ 12 ตำบลสันกำแพง อำเภอสันกำแพง และ หอพักช้างคลาน อำเภอเมืองเชียงใหม่</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/sf1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>โรงภาพยนตร์ในเครือ เอส เอฟ พร้อมกลับมามอบความสุข ให้กับผู้ชมภาพยนตร์อีกครั้ง</h4>
                               
                            </div>
                            <div class="timeline-body"><p class="text-muted">ล่าสุด เมื่อวันที่ 27 กันยายน 2564 ทางศูนย์บริหารสถานการณ์การแพร่ระบาดของโรคติดเชื้อไวรัสโคโรนา 2019 (โควิด-19) หรือ ศบค. ได้มีมติผ่อนคลายมาตรการให้โรงภาพยนตร์กลับมาเปิดได้ ภายใต้มาตรการด้านสาธารณสุข ตั้งแต่วันที่ 1 ตุลาคม 2564 เป็นต้นไป ซึ่งเป็นข่าวดีสำหรับพวกเราที่จะได้ต้อนรับทุกคนกลับเข้าโรงหนัง COME BACK TO CINEMA อีกครั้ง” คุณพิมสิริ กล่าวต่อว่า โรงภาพยนตร์ในเครือ เอส เอฟ ไม่เพียงแค่มอบความสุขในการชมภาพยนตร์เท่านั้น แต่เรายังตั้งใจดูแลลูกค้าทุกคนอย่างดีที่สุด สำหรับการกลับมาเปิดให้บริการครั้งนี้

นอกจากมาตรการด้านสาธารณสุข ที่เราทำมาอย่างต่อเนื่อง เอส เอฟ ยังได้ยกระดับตามมาตรการ “ดูแลด้วยใจ”เพื่อให้ลูกค้าทุกคนได้ดูหนังอย่างมีความสุข สะดวกสบาย มั่นใจ และปลอดภัยมากยิ่งขึ้น โดยเตรียมความพร้อมด้านพนักงานที่ได้รับการฉีดวัคซีนแล้ว รวมถึงมีการตรวจคัดกรองด้วย Antigen Test Kit ก่อนเริ่มปฏิบัติงาน
ในส่วนของโรงภาพยนตร์ได้รับการประเมินผ่านมาตรฐาน THAI STOPCOVID PLUS (TSC+) ของกรมอนามัย พร้อมทั้งได้ติดตั้งอุปกรณ์หลอด UVC ภายในระบบปรับอากาศ และอบ Ozone เพื่อฆ่าเชื้อโรคภายในโรงภาพยนตร์ทั้งหมด</p></div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/o1.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>จับตัวได้แล้ว!! แกล้งให้รถของผู้อื่นเฉี่ยวชนแล้วเรียกค่าเสียหาย .พื้นที่ อ.ดอยสะเก็ด โดยกล่าวหาว่า “พยายามกรรโชกทรัพย์</h4>
                               
                            </div>
                            <div class="timeline-body"><p class="text-muted">วันนี้ 29 กันยายน 2564 เวลาประมาณ 14.30 น. จากการเปิดเผยเบื้องต้นของ พ.ต.อ.ธงชัย กรรณิกา ผกก.สภ.ดอยสะเก็ด จ.เชียงใหม่ พร้อมหน้าที่ชุดสืบสวน ได้ร่วมกันจับกุม นายกลวัชร  อายุ 38 ปี บ้าน หมู่ที่ 5 ต.ปากเกร็ด อ.ปากเกร็ด จ.นนทบุรี พร้อมด้วย ของกลาง 1.รถยนต์ยี่ห้อ โตโยต้า รุ่น ไฮลักษ์ รีโว หมายเลขทะเบียน  แพร่ (ติดด้านหน้ารถขณะกระทำผิด) 2. แผ่นป้ายทะเบียนร มหาสารคาม จำนวน 2 แผ่น โดยกล่าวหาว่า “พยายามกรรโชกทรัพย์” ที่เกิดเหตุ บริเวณบนถนนหมายเลข 118 เชียงใหม่ – เชียงราย) หมู่ที่ 6 ต.เชิงดอย อ.ดอยสะเก็ด จว.เชียงใหม่ พฤติการณ์คือผู้ต้องหาจะแกล้งให้รถของผู้อื่นเฉี่ยวชนแล้วเรียกค่าเสียหายและไม่ให้แจ้งเจ้าหน้าที่ตำรวจ ผู้ต้องหา รับว่าเคยก่อเหตุในพื้นที่ อ.แม่ริม,อ.สันทราย,อ.หางดง,อ.สันกำแพง มาหลายครั้งแต่จำไม่ได้ว่าก่อเหตุทั้งหมดกี่ครั้งและเมื่อไหร่บ้าง ขณะนี้อยู่ระหว่างการสอบสวนขยายผลเบื้องต้นอยู่</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/covid22.jpg" alt="..." /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>เชียงใหม่ สั่งปิด “หย่อมบ้านตระกูลหาญ หมู่ที่ 5 ตำบลลวงเหนือ อำเภอดอยสะเก็ด” 14 วัน</h4>
                          
                            </div>
                            <div class="timeline-body"><p class="text-muted">วันนี้ (28 ก.ย. 64) คณะกรรมการโรคติดต่อจังหวัดเชียงใหม่ มีมติออกคำสั่งที่ 173/2564 เรื่อง ปิดสถานที่เสี่ยงเป็นการชั่วคราว โดยให้ปิด “หย่อมบ้านตระกูลหาญ หมู่ที่ 5 ตำบลลวงเหนือ อำเภอดอยสะเก็ด จังหวัดเชียงใหม่” เป็นเวลา 14 วัน ตั้งแต่วันที่ 28 กันยายน 2564 ถึงวันที่ 11 ตุลาคม 2564 เพื่อควบคุมและป้องกันโรคโควิด-19 ภายหลังจากสำนักงานสาธารณสุขจังหวัดเชียงใหม่ ได้รายงานว่าพบการติดเชื้อโรคโควิด- 19 ในพื้นที่ดังกล่าว

ทั้งนี้ ให้ผู้สัมผัสเสี่ยงสูงทุกคน เข้ารับการตรวจคัดกรองหาเชื้อโควิด-19 หากผลตรวจเป็นลบให้กักตนเอง (Home Quarantine) เป็นเวลา 14 วัน ส่วนกลุ่มเสี่ยงต่ำให้คุมไว้สังเกตอาการ เป็นเวลา 14 วัน และปฏิบัติตามคำสั่งเจ้าพนักงานควบคุมโรคติดต่อในพื้นที่อย่างเคร่งครัด พร้อมขอความร่วมมือประชาชนในพื้นที่จังหวัดเชียงใหม่ งดการเดินทางเข้าไปในพื้นที่ดังกล่าวโดยไม่มีเหตุจำเป็น เพื่อลดความเสี่ยงต่อการสัมผัสโรค

ในการนี้ ได้กำหนดให้นายอำเภอดอยสะเก็ด ในฐานะหัวหน้าศูนย์ปฏิบัติการควบคุมโรคอำเภอฯ เป็นผู้กำกับและควบคุมการปฏิบัติให้เป็นไปด้วยความเรียบร้อย หากพบผู้ใดฝ่าฝืนต้องระวางโทษปรับไม่เกิน 20,000 บาท ตามมาตรา 51 แห่งพระราชบัญญัติโรคติดต่อ พ.ศ. 2558</p></div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>
                                NEW
                                <br>
                                Chiang Mai

                                
                            </h4>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">ADDMIN & developer </h2>
                    <h3 class="section-subheading text-muted">ผมเอ๊งงง  ธราธิปปป</h3>
                </div>
              
                    <div class="col-md-13">
                        
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="assets/img/team/my2.jpg" alt="..." />
                            <h4>taratip kunteemoon</h4>
                            <p class="text-muted">addmin & developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                  
                </div>
              
        </section>
     
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                
                </div>
                <!-- * * * * * * * * * * * * * * *-->
                <!-- * * SB Forms Contact Form * *-->
                <!-- * * * * * * * * * * * * * * *-->
                <!-- This form is pre-integrated with SB Forms.-->
                <!-- To make this form functional, sign up at-->
                <!-- https://startbootstrap.com/solution/contact-forms-->
                <!-- to get an API token!-->
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Your Name *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
        <!-- Footer-->
       
        <!-- Portfolio Modals-->
        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Jaiboon</h2>
                                    <p class="item-intro text-muted">คาเฟ่สีเขียวร่มรื่น มีเค้กและเครื่องดื่มให้เลือกหลากหลาย.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/cof11.jpg" alt="..." />
                                    <p>ร้าน Jaiboon ร้านกาแฟเล็กๆ ที่ร่มรื่นมาก เค้กและเครื่องดื่มรสชาติถูกปาก มุมถ่ายรูปเยอะ แอดไปช่วงบ่ายแต่อากาศเย็นสบาย ใครอยากนั่งห้องแอร์เย็นๆ ชิวๆ ก็นั่งด้านใน ส่วนใครอยากสัมผัสกับธรรมชาติแบบเต็มๆ ก็สามารถเลือกที่นั่งบริเวณด้านนอกได้ ใครที่แวะไปเที่ยวเส้นสันกำแพงสายเก่าก็แวะเวียนไปกันได้เน้อ </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>พิกัด:</strong>
                                            ร้าน Jaiboon ต.สันกลาง อ.สันกำแพง จ.เชียงใหม่ เดินทางจากตัวเมืองเชียงใหม่มาตามเส้นสันกำแพงสายเก่า ผ่านแยกบวกครกศรีวิไลมาเล็กน้อย จะเจอร้านใจบุญอยู่ขวามือ สังเกตป้ายดีๆ น้า
                                        </li>
                                        <li>
                                            <br>
                                            <strong>GPS ::</strong>
                                           <a href="https://goo.gl/maps/WtkQWxxUze15rUcY7">https://goo.gl/maps/WtkQWxxUze15rUcY7</a>
                                        </li>
                                        <li>

                                        <p>เวลาเปิด-ปิด : 09.30-18.00 น. โทร : 096-337-0375 , 086-336-3463</p>
                                        </li>
                                        <li>
                                            <strong>LINE:</strong>
                                            <a href="https://line.me/R/ti/p/%40jaiboonchiangmai">https://line.me/R/ti/p/%40jaiboonchiangmai</a>
                                        </li>
                                        <li>
                                            <strong>FAN PAGE:</strong>
                                            <a href="https://www.facebook.com/Jaiboonchiangmai/">Jaiboon</a>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Junjun shop&cafe</h2>
                                    <p class="item-intro text-muted">คัพเค้กราคาน่ารักเพียงชิ้นละ 20 บาท</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/coffee22.jpg" alt="..." />
                                    <p> Junjun shop&cafe อาณาจักรของคนรักคัพเค้ก ร้านนี้มีคัพเค้กให้เลือกหลายรสชาติ ที่สำคัญก็คือราคาเพียงชิ้นละ 20 บาทเท่านั้น เครื่องดื่มก็มีเน้อ นอกจากนี้ยังมีของแฮนด์เมดน่ารักๆ ขายอีกด้วย ตัวร้านตกแต่งน่ารัก ร่มรื่น มีบริการส่งคัพเค้กด้วยเน้อ สามารถดูรายละเอียดเพิ่มเติมได้ในเพจร้าน </p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>พิกัด:</strong>
                                            ร้าน Junjun shop&cafe ต.สันกลาง อ.สันกำแพง จ.เชียงใหม่ ร้านอยู่ซ้ายมือก่อนถึงซอยบ้านศิลาดล
                                        </li>
                                        <li>
                                            <strong>GPS:</strong>
                                            <a href="https://goo.gl/maps/39sUJ6JFbqZHCHny6">https://goo.gl/maps/39sUJ6JFbqZHCHny6</a>
                                        </li>
                                        <li>
                                            <strong>เวลาเปิด-ปิด:</strong>
                                            เปิดวันอังคาร-วันเสาร์ 08:00~16:00
                                        </li>
                                        <li>
                                            <strong>โทร:</strong>
                                            091-9898417
                                        </li>

                                        <li>
                                            <strong>Fan page:</strong>
                                            <a href="https://www.facebook.com/Junjunshopcafe-1443240995962022/">Junjunshop&cafe'</a>
                                        </li>


                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Chez Nous (เชนู)</h2>
                                    <p class="item-intro text-muted">ร้านที่คนรักครัวซองต้องแวะ</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/coffee33.jpg" alt="..." />
                                    <p>Chez Nous  ร้านที่คนรักครัวซองต้องแวะ ร้านนี้ฮอตฮิตมาก ใครอยากกินต้องโทรสั่งก่อนเน้อ เพราะแป๊บเดียวก็หมดแล้ว เขาทำสดใหม่วันต่อวันเลยจ้า นอกจากครัวซองแล้วทางร้านยังมีเมนูอาหารและเครื่องดื่มให้เลือกอีกมากมาย สำหรับครัวซองนั้นมีหลากหลายเมนู เช่น ครัวซองคาปูชิโน่ ครัวซองช็อคโกแลตและครัวซองอัลมอลน์ เป็นต้น</p>
                                    <ul class="list-inline">
                                    <li>
                                            <strong>พิกัด:</strong>
                                            ร้าน Chez Nous Artisan Baking Atelier (เชนู) ต.สันกลาง อ.สันกำแพง จ.เชียงใหม่                                        </li>
                                        <li>
                                            <strong>GPS:</strong>
                                            <a href="https://goo.gl/maps/av6zUwdpeDmzGnH97">https://goo.gl/maps/av6zUwdpeDmzGnH97</a>
                                        </li>
                                        <li>
                                            <strong>เวลาเปิด-ปิด:</strong>
                                            09:00 – 17:00 น. หยุดทุกวันพุธ

                                        </li>
                                        <li>
                                            <strong>โทร:</strong>
                                            094-6638855
                                        </li>

                                        <li>
                                            <strong>Fan page:</strong>
                                            <a href="https://www.facebook.com/cheznousbakingatelier/">Chez Nous</a>
                                        </li>

                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Samurai Kitchen สาขา สันกำแพง</h2>
                                    <p class="item-intro text-muted">ร้านอาหารญี่ปุ่น 59 บาท มีเมนูให้เลือกเยอะมาก เช่น ปลาซาบะ ซูชิ ราเมง ข้าวปั้น</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/coffee44.jpg" alt="..." />
                                    <p>ร้าน Samurai Kitchen สาขาสันกำแพง ร้านอาหารญี่ปุ่นราคา 59 บาท อิ่มแบบจุกๆ กันได้เลย ร้านนี้มีเมนูให้เลือกเยอะมาก บรรยากาศร้านก็ตกแต่งน่ารัก สไตล์ญี่ปุ่น แวะไปกินกันได้ สั่งกลับบ้านได้และมีเดลิเวอรี่ Food Panda , Grab Food</p>
                                    <ul class="list-inline">
                                    <li>
                                            <strong>พิกัด:</strong>
                                            ร้าน Samurai Kitchen สาขาสันกำแพง ต.ต้นเปา อ.สันกำแพง จ.เชียงใหม่                                        <li>
                                            <strong>GPS:</strong>
                                            <a href="https://goo.gl/maps/v5atWBQoMTDecjri7">https://goo.gl/maps/v5atWBQoMTDecjri7</a>
                                        </li>
                                        <li>
                                            <strong>เวลาเปิด-ปิด:</strong>
                                            ช่วงเช้า เปิดเวลา 11:30 – 14:30 น. 
                                            <br>
                                            ช่วงเย็น เปิดเวลา 17:00 – 21:30 น.

                                        </li>
                                        <li>
                                            <strong>โทร:</strong>
                                            095-2910346 (ในเวลาทำการ)  094-6638855
                                        </li>

                                        <li>
                                            <strong>Fan page:</strong>
                                            <a href="https://www.facebook.com/samuraikitchen.cnx/">Samurai Kitchen サムライキッチン</a>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 5 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">อุตสาชงที่บ้าน</h2>
                                    <p class="item-intro text-muted">คาเฟ่ริมลำธาร ใกล้แม่กำปอง อากาศเย็นสบายเหมาะแก่การนั่งพักผ่อนชิวๆ</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/coffee55.jpg" alt="..." />
                                    <p>ร้านอุตสาชงที่บ้าน  คาเฟ่กลางป่าติดลำธาร ท่ามกลางธรรมชาติ ส่วนตัวร้านตกแต่งน่ารัก มีที่นั่งหลายมุม จะลงไปถ่ายรูปเช็คอินชิวๆ ในลำธารก็ได้น้า </p>
                                    <ul class="list-inline">
                                    <li>
                                            <strong>พิกัด:</strong>
                                            ร้านอุตสาชงที่บ้าน ต.ห้วยแก้ว อ.แม่ออน จ.เชียงใหม่ อยู่ระหว่างทางไปแม่กำปองให้เลี้ยวซ้ายไปทางร้านกาแฟไจแอนท์ จะพบกับที่จอดรถแล้วต้องนั่งรถชาวบ้านเข้าไป ระยะทางสั้นๆ แป๊บเดียวก็ถึง เพราะบริเวณหน้าร้านไม่มีที่จอดรถเลยจ้า นั่งรถเข้าไปปลอดภัยที่สุด                 <li>
                                            <strong>GPS:</strong>
                                            <a href="https://goo.gl/maps/Whtt2t9Q1qX11kL56">https://goo.gl/maps/Whtt2t9Q1qX11kL56</a>
                                        </li>
                                        <li>
                                            <strong>เวลาเปิด-ปิด:</strong>
                                            09.00-17.00 น. ปิดวันอังคาร 
                               
                                        </li>
                                        <li>
                                            <strong>โทร:</strong>
                                            095-675-0466
                                        </li>

                                        <li>
                                            <strong>Fan page:</strong>
                                            <a href="https://www.facebook.com/%E0%B8%AD%E0%B8%B8%E0%B8%95%E0%B8%AA%E0%B8%B2%E0%B8%8A%E0%B8%87%E0%B8%97%E0%B8%B5%E0%B9%88%E0%B8%9A%E0%B9%89%E0%B8%B2%E0%B8%99-Utsahhomebrew-102815237869340/">อุตสาชงที่บ้าน Utsah.homebrew</a>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 6 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">กินเที่ยวรถเช่าเชียงใหม่</h2>
                                    <p class="item-intro text-muted"></p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/portfolio/car2.jpg" alt="..." />
                                    <p>แอดขอแว็บเข้าสู่ช่วงโฆษณากันซะหน่อย จะไปไหน ทำอะไร ใกล้ ไกลก็เช่ารถไปเลยจ้า สะดวกสบายสุดๆ รายละเอียดเพิ่มเติม</p>
                                    <br>
                                    <li>บริการดี รีวิวเยี่ยม</li> 
                                     <li>  ไม่มีมัดจำ เฉพาะรถเล็ก</li> 
                                       <li> รับส่งฟรี 7.00-22.00สนามบิน</li>
                                       <li>   รับส่งฟรี 8.30-21.30ตัวเมือง</li>
                                       <li>    แถมฟรี ประกันพาณิชย์รถเช่า ขับสบายใจถูกกฏหมาย ไปอีก ดีย์ต่อใจ ไม่ต้องห่วงเครมไม่ได้ เครมได้100%</li>
                                       <li>       รายวัน รายเดือน รายปี มีเรทพิเศษ ทักมาสอบถามได้</li>
                                       <li>            จุดเริ่มต้นที่ดี ที่เหลือความสุขตามมาค่ะ ขอให้ลูกค้ามีทริปเที่ยวเชียงใหม่ที่ดีนะครับ💕</li>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>ติดต่อเช่ารถ กินเที่ยว รถเช่า เชียงใหม่:</strong>
                                            โทรเลย
<li>082-1810011 </li>
<li>084-1775554</li>
<li>053-271201</li>
                                        </li>
                                        <li>
                                            <strong> ลิงค์ไปไลน์แอด:</strong>
                                            <a href="https://line.me/R/ti/p/%40kinteaw_rent_a_car">https://line.me/R/ti/p/%40kinteaw_rent_a_car</a>
                                        </li>
                                        <li>
                                            <strong>ออฟฟิต:</strong>
                                            <a href="https://goo.gl/maps/r6j8GSUShsb9ghBH6">https://goo.gl/maps/r6j8GSUShsb9ghBH6</a>
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-times me-1"></i>
                                        Close 
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


   





   
    </div>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>


<?php 

}
?>
  