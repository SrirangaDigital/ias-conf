<script src='https://www.google.com/recaptcha/api.js'></script>
<div class="container-fluid" id="home">
    <div class="row first-row">
        <div class="col-md-12 clear-paddings">
            <div class="fixOverlayDiv">
                <img class="img-responsive gap-above" src="<?=PUBLIC_URL?>images/stock/academybldg.jpg">
                <div class="OverlayTextMain">
                    <div class="mainpage">
                        <h2>82<sup>nd</sup> Annual Meeting</h2>
                        <p>The Academy annually holds scientific meetings, symposia, public lectures for encouraging other similar activities in order to provide means of exchange of scientific knowledge among scientists and to bring new knowledge to the attention of the whole scientific community. Annually, the midyear meeting is organised during July and the Annual meeting in November. The Fellowship of the Academy, teachers and other invitees participate in these meetings. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="home">
    <div class="row">
        <div class="col-md-12 gap-above">
            <p class="text-right text-italic text-bold">“Nothing in science has any value to society if it is not communicated, and scientists are beginning to learn their social obligations.”<br />
            — Anne Roe,The Making of a Scientist (1953)</p>
        </div>
    </div>        
    <div class="row">
        <div class="col-md-12 gap-above">
            <p>The Indian Academy of Sciences(IASc), Bengaluru, through the many scientific meetings, symposia, and public lectures it organizes, aim to facilitate scientific exchange among researchers and highlight novel findings (both within the scientific community and common public). The Mid-year meetingorganised during July and the Annual meeting organised during November, are the two major annual events of the Academy in this context. The events every year see enthusiastic participation of the Fellowship of the Academy along with researchers, teachers, students and other invitees across the nation. The 82<sup>nd</sup> Annual Meeting of the Academy will take place during 4-6 November 2016 at IISER Bhopal, the meeting will include: lectures by newly elected Fellows/Associates, special lectures, two high level scientific symposia: one in honor of Professor Walter Kohn and the other on aspects of General Biology, and public lectures by eminent scholars from other fields of intellectual endeavour. The Business Meeting/ General Body Meeting of Fellows is scheduled on November 5,2016 at 4.00 p.m. </p>
        </div>
    </div>        
</div>
<div class="container-fluid physical" id="speakers">
    <div class="row">
        <div class="col-md-12">
            <h1>Speakers</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
             <img src="<?=PUBLIC_URL?>images/stock/Anshu_Pandey.jpg" class="img-thumbnail" alt="Anshu Pandey" />
             <figcaption class="figure-caption text-xs-right">Anshu Pandey</figcaption>
        </div>
        <div class="col-md-3">
             <img src="<?=PUBLIC_URL?>images/stock/Anukur_Kulkarni.jpg" class="img-thumbnail" alt="Anukur Kulkarni.jpg" />
             <figcaption class="figure-caption text-xs-right">Anukur Kulkarni</figcaption>
        </div>        
        <div class="col-md-3">
             <img src="<?=PUBLIC_URL?>images/stock/Arun_Chattopadhyay.jpg" class="img-thumbnail" alt="Arun Chattopadhyay" />
             <figcaption class="figure-caption text-xs-right">Arun Chattopadhyay</figcaption>
        </div>        
        <div class="col-md-3">
             <img src="<?=PUBLIC_URL?>images/stock/B_Anand.jpg" class="img-thumbnail" alt="B Anand" />
             <figcaption class="figure-caption text-xs-right">B Anand</figcaption>
        </div>
    </div>
    <div class="row gap-above-large">
        <div class="col-md-3">
             <img src="<?=PUBLIC_URL?>images/stock/G_R_Tripathy.jpg" class="img-thumbnail" alt="G R Tripathy" />
             <figcaption class="figure-caption text-xs-right">G R Tripathy</figcaption>
        </div>        
        <div class="col-md-3">
             <img src="<?=PUBLIC_URL?>images/stock/K_P_Kaliappan.jpg" class="img-thumbnail" alt="K P Kaliappan" />
             <figcaption class="figure-caption text-xs-right">K P Kaliappan</figcaption>
        </div>        
        <div class="col-md-3">
             <img src="<?=PUBLIC_URL?>images/stock/N_Ravishankar.jpg" class="img-thumbnail" alt="N Ravishankar" />
             <figcaption class="figure-caption text-xs-right">N Ravishankar</figcaption>
        </div>
        <div class="col-md-3">
             <img src="<?=PUBLIC_URL?>images/stock/Pradyut_Ghosh.jpg" class="img-thumbnail" alt="Pradyut Ghosh" />
             <figcaption class="figure-caption text-xs-right">Pradyut Ghosh</figcaption>
        </div>
    </div>    
    <div class="row gap-above-large">
        <div class="col-md-3">
             <img src="<?=PUBLIC_URL?>images/stock/Sanjib_Agarwalla.jpg" class="img-thumbnail" alt="Sanjib Agarwalla" />
             <figcaption class="figure-caption text-xs-right">Sanjib Agarwalla</figcaption>
        </div>        
        <div class="col-md-3">
             <img src="<?=PUBLIC_URL?>images/stock/S_Ganesh.jpg" class="img-thumbnail" alt="S Ganesh" />
             <figcaption class="figure-caption text-xs-right">S Ganesh</figcaption>
        </div>        
        <div class="col-md-3">
             <img src="<?=PUBLIC_URL?>images/stock/Tanusri_Sahadasgupta.jpg" class="img-thumbnail" alt="Tanusri Sahadasgupta" />
             <figcaption class="figure-caption text-xs-right">Tanusri Sahadasgupta</figcaption>
        </div>
        <div class="col-md-3">
             <img src="<?=PUBLIC_URL?>images/stock/Tirthankar_Bhattacharyya.jpg" class="img-thumbnail" alt="Tirthankar Bhattacharyya" />
             <figcaption class="figure-caption text-xs-right">Tirthankar Bhattacharyya</figcaption>
        </div>
    </div>                            
</div>
<div class="container-fluid physical" id="venue">
    <div class="row">
        <div class="col-md-12">
            <h1>Venue</h1>
<div id="map" style="width:100%;height:500px"></div>            
<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(23.2883503,77.273526), 
    zoom: 10
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
 
        </div>
    </div>
</div>    
<div class="container-fluid physical" id="physical">
    <div class="row">
        <div class="col-md-12">
            <h1>Physical Space</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ps1.JPG">
            <h2>Centrally located</h2>
            <p>The Heritage Centre is located in the ground floor of the Administration Block, right next to Gajendra Circle. It occupies the space where the old manual telephone exchange was situated.</p>
        </div>
        <div class="col-md-4">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ps2.JPG">
            <h2>Pictorial account</h2>
            <p>The display at the Heritage Centre provides a pictorial account of the events that led to the founding of IIT Madras, student life in the early years of the institute, the development of technological and other facilities and visits by distinguished people. The display also encompasses the campus and distinuished alumni.</p>
        </div>
        <div class="col-md-4">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/ps3.JPG">
            <h2>Variety of artefacts</h2>
            <p>Also on display are a variety of artefacts including the foundation stone laid at the inauguration of the institute in 1959, a life size oil painting of Prof. B. Sengupto, the first Director of IIT Madras, and a replica of the Inter-IIT Sports Trophy.</p>
        </div>
    </div>
</div>
<!--<div class="container-fluid" id="contact">
    <div class="row first-row">
        <div class="col-md-12 clear-paddings">
            <div class="fixOverlayDiv">
                <img class="img-responsive gap-above" src="<?=PUBLIC_URL?>images/stock/slide2.jpg">
                <div class="OverlayTextMain">
                    <div class="mainpage">
                        <h2>Get in touch</h2><br />
                        <form method="post" action="<?=BASE_URL . 'mail/send'?>">
                            <div class="form-group">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="required">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
                            </div>
                            <div class="form-group">
                                <textarea rows="5" class="form-control" name="message" id="message" placeholder="Your message here" required="required"></textarea>
                            </div>
                            <div class="form-group">
                                <div class="g-recaptcha" data-sitekey="6Le_DBsTAAAAACt5YrgWhjW00CcAF0XYlA30oLPc"></div>
                            </div>
                            <button type="submit" class="btn btn-default naked email-submit">Submit</button>
                        </form>
                        <p>
                            <br /><br /><small>
                                © 2016 Indian Academy of Sciences.<br />
                                No image available from this site may be used for commercial purposes without written permission from IASc Bengaluru.
                            </small><br />
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->
