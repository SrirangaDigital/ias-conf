<script type="text/javascript">
$(document).ready(function() {

    var mTop = $('.navbar').height() - 10;
    $('#grid').css('margin-top', mTop + 'px');
    $('.schedule-text').hide();

    var hloc = window.location.href;
    
    var tab = 'day1';
    if(hloc.match('#')){ tab = hloc.split("#")[1]; }

    $('#' + tab).show(function(){

        $('a[href="#' + tab + '"').parent().addClass('active');
        $("html, body").animate({scrollTop: 0}, 1);
    });

    $('.schedule .nav li a').on('click', function(event){

        event.preventDefault();
        tab = $(this).attr('href');
        $('.schedule-text').hide();
        $(tab).show();
        $('.schedule .nav li').removeClass('active');
        $(this).parent().addClass('active');
    });
});
</script>

<div class="container">
    <div class="row">
        <!-- Column 1 -->
        <div class="col-md-12 text-center">
            <p>&nbsp;</p>    
        </div>
    </div>
</div>
<div id="grid" class="container gap-above">
    <div class="row">
        <div class="col-md-9 main">
            <h1>Programme Schedule</h1>
            <div class="schedule">
                <ul class="nav nav-justified">
                    <li><a href="#day1">Day 1</a></li>
                    <li><a href="#day2">Day 2</a></li>
                    <li><a href="#day3">Day 3</a></li>
                    <li><a href="#allied">Allied Events</a></li>
                    <li><a href="#spouse">For Spouses</a></li>
                </ul>
                <div class="schedule-text" id="day1">
                    <h3>4 November 2016 (Friday)</h3>

                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>0900 - 0930</dt>
                            <dd>
                                <span class="aux">Registration</span><br />(Venue: Lecture Hall Complex)
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>0930 - 1000</dt>
                            <dd>
                                <span class="aux">Inauguration and introduction of Fellows</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1A - Presidential Address</span><br /><br />
                        <dl class="dl-horizontal">
                            <dt>1000 - 1045</dt>
                            <dd>
                                <span class="speaker">Ram Ramaswamy</span><br />
                                JNU, New Delhi<br />
                                <span class="talk">Chimeras: A spontaneous emergence of dynamical disorder</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>1045 - 1130</dt>
                            <dd>
                                <span class="aux">Book release</span><br />
                                <span class="talk">A Life in Science – Author: Prof. C N R Rao,</span><br />Published by Penguin Random House India
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>1135 - 1200</dt>
                            <dd>Group Photograph &amp; Tea break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1B - Inaugural Lectures of Fellows/Associates</span><br />
                        Chairperson: Subrata Ghosh, IACS, Kolkata<br /><br />
                        <dl class="dl-horizontal">
                            <dt>1200 - 1220</dt>
                            <dd>
                                <span class="speaker">Arun Chattopadhyay</span><br />
                                IIT-Guwahati<br />
                                <span class="talk">Decorating the surface of a quantum dot with molecules</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>1225 - 1245</dt>
                            <dd>
                                <span class="speaker">Sanjib K Agarwalla,</span><br />
                                IOP, Bhubaneswar<br />
                                <span class="talk">Neutrino oscillation parameters: Present status and future roadmap</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>1250 - 1400</dt>
                            <dd>Lunch Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1C - Inaugural Lectures of Fellows</span><br />
                        (Venue: Auditorium – Visitors’ Hostel)<br />
                        Chairperson: Probir Roy, Kolkata<br /><br />
                        <dl class="dl-horizontal">
                            <dt>1400 - 1420</dt>
                            <dd>
                                <span class="speaker">Javed N Agrewala</span><br />
                                IMTECH, Chandigarh<br />
                                <span class="talk">Caerulomycin A suppresses arthritis symptoms by expanding regulatory T cells</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>1425 - 1445</dt>
                            <dd>
                                <span class="speaker">A Raghuram</span><br />
                                IISER, Pune<br />
                                <span class="talk">From calculus to number theory</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>1450 - 1530</dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>                    
                    <div class="session">
                        <span class="type">Session 1D - Walter Kohn Memorial Symposium</span><br />
                        (Venue: Visitors’ Hostel)<br />
                        Chairperson: H R Krishnamurthy, IISc, Bengaluru<br /><br />                                    
                        <dl class="dl-horizontal">
                            <dt>1530</dt>
                            <dd>
                                <span class="speaker">T V Ramakrishnan</span><br />
                                BHU, Varanasi<br />
                                <span class="talk">Walter Kohn and the rise of condensed matter physics</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>1600</dt>
                            <dd>
                                <span class="speaker">Swapan K Ghosh</span><br />
                                BARC, Mumbai<br />
                                <span class="talk">Density functional theory for materials modeling at different length scales: A legacy of Walter Kohn</span>
                            </dd>
                        </dl>                       
                        <dl class="dl-horizontal">
                            <dt>1630</dt>
                            <dd>
                                <span class="speaker">Tanusri Saha-Dasgupta</span><br />
                                SN Bose Natl. Centre for Basic Sciences, Kolkata<br />
                                <span class="talk">Beyond the conventional DFT: Life with “U”</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>1700</dt>
                            <dd>
                                <span class="speaker">Umesh V Waghmare</span><br />
                                JNCASR, Bengaluru<br />
                                <span class="talk">Electrons in a crystal: Localized versus extended orbitals</span>
                            </dd>
                        </dl>                    
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>1730 - 1800</dt>
                            <dd>Tea Break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 1E - Public lecture</span><br />
                        (Venue: L5 &mdash; Lecture Hall Complex)<br />
                        Chairperson: Ram Ramaswamy, JNU, New Delhi<br /><br />
                        <dl class="dl-horizontal">
                            <dt>1800 - 1900</dt>
                            <dd>
                                <span class="speaker">Rajendra Singh</span><br />
                                Tarun Bharat Sangh, Alwar (Rajasthan)<br />
                                <span class="talk">Indigenous knowledge system of water management in India</span>
                            </dd>
                        </dl>                                                
                    </div>                    
                </div>                        
                <div class="schedule-text" id="day2">
                    <h3>5 November 2016 (Saturday)</h3>
                    <div class="session">
                        <span class="type">Session 2A - Special Lecture</span><br />
                        (Venue: Auditorium – Visitors’ Hostel)<br />
                        Chairperson: P C Agrawal, Mumbai<br /><br />                    
                        <dl class="dl-horizontal">
                            <dt>0900 - 0940</dt>
                            <dd>
                                <span class="speaker">Sunil Mukhi</span><br />
                                IISER Pune
                                <br />
                                <span class="talk">Academic ethics in India: What we must do</span>
                            </dd>
                        </dl>                                                
                    </div> 
                    <div class="session">
                        <span class="type">Session 2B - Inaugural Lectures of Fellows/Associates</span><br />
                        Chairperson: S Thangavelu, IISc, Bengaluru<br /><br />
                        <dl class="dl-horizontal">
                            <dt>0940 - 1000</dt>
                            <dd>
                                <span class="speaker">Pradyut Ghosh</span><br />
                                IACS, Kolkata<br />
                                <span class="talk">Recognition, sensing, separation of anions</span>
                            </dd>
                        </dl>                                            
                        <dl class="dl-horizontal">
                            <dt>1005 - 1025</dt>
                            <dd>
                                <span class="speaker">Ankur A Kulkarni</span><br />
                                IIT-Bombay<br />
                                <span class="talk">Towards a convex-analytic view of impossibility results in stochastic control and information theory</span>
                            </dd>
                        </dl>                        
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>1030 - 1050</dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>           
                    <div class="session">
                        <span class="type">Session 2C - Symposium “Our Second Genome”</span><br />
                        Chairperson: Partha P Majumder, NIBMG, Kolkata<br /><br />
                        <dl class="dl-horizontal">
                            <dt>1050</dt>
                            <dd>
                                <span class="speaker">Partha P Majumder</span><br />
                                NIBMG, Kolkata
                                <br />
                                <span class="talk">An overview of our second genome</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>1110</dt>
                            <dd>
                                <span class="speaker">Sharmila S Mande</span><br />
                                TCS, Pune<br />
                                <span class="talk">Gut microbiome and human health</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>1140</dt>
                            <dd>
                                <span class="speaker">Vineet K Sharma</span><br />
                                IISER, Bhopal
                                <br />
                                <span class="talk">Novel insights into the human microbiome</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>1210</dt>
                            <dd>
                                <span class="speaker">Souvik Mukherjee</span><br />
                                NIBMG, Kolkata
                                <br />
                                <span class="talk">The microbiome in skin health and disease</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>1240</dt>
                            <dd>
                                <span class="speaker">Shekhar C Mande</span><br />
                                NCCS, Pune
                                <br />
                                <span class="talk">The Indian human microbiome initiative</span>
                            </dd>
                        </dl>                        
                    </div>                           
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>1300 - 1400</dt>
                            <dd>Lunch break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2D - Inaugural Lectures of Fellows/Associates</span><br />
                        Chairperson: P N Pandita, IISc, Bengaluru<br /><br />                    
                        <dl class="dl-horizontal">
                            <dt>1400 - 1420</dt>
                            <dd>
                                <span class="speaker">G C Anupama</span><br />
                                IIA, Bengaluru
                                <br />
                                <span class="talk">Time domain astronomy – Explosive transients</span>
                            </dd>
                        </dl>                    
                        <dl class="dl-horizontal">
                            <dt>1425 - 1445</dt>
                            <dd>
                                <span class="speaker">S Ganesh</span><br />
                                IIT-Kanpur
                                <br />
                                <span class="talk">Role of non-coding RNAs in cellular stress response</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>1450 - 1510</dt>
                            <dd>
                                <span class="speaker">K N Balaji</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">Mycobacteria scapegoat host epigenetic factors and non-coding RNAs to sneak through host immune responses</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>1515 - 1535</dt>
                            <dd>
                                <span class="speaker">Anshu Pandey</span><br />
                                IISc, Bengaluru
                                <br />
                                <span class="talk">Chemistry with bigger atoms</span>
                            </dd>
                        </dl>                        
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>1540 - 1600</dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        (Venue: L3 – Lecture Hall Complex)                        
                        <dl class="dl-horizontal">
                            <dt>1600 - 1730</dt>
                            <dd>
                                <span class="speaker">Business Meeting of Fellows</span><br />
                                <span class="talk"></span>
                            </dd>
                        </dl>
                    </div>                                                                     
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>1730 - 1800</dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <span class="type">Session 2E - Public Lecture</span><br />
                        Chairperson: Ram Ramaswamy, JNU, New Delhi<br /><br />                    
                        <dl class="dl-horizontal">
                            <dt>1800 - 1900</dt>
                            <dd>
                                <span class="speaker">Ravi Korisettar</span><br />
                                Dr VS Wakankar Archaeological Research Institute, Dharwad
                                <br />
                                <span class="talk">Importance of the Vindhya basin in the prehistory of the Indian subcontinent</span>
                            </dd>
                        </dl>                        
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>1900 - 2000</dt>
                            <dd>Dinner</dd>
                        </dl>
                    </div>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>2000</dt>
                            <dd>
                                <span class="speaker"><strong>Cultural Programme:</strong> Mehfil-e-Sama: A Qawwali Night by Emerald The Band</span><br />
                                (Venue: L5– Lecture Hall Complex)<br />
                                <span class="talk"></span>
                            </dd>
                        </dl>                    
                    </div>                        
                </div>
                <div class="schedule-text" id="day3">
                    <h3>6 November 2016 (Sunday)</h3>
                    <div class="session">
                        <span class="type">Session 3A - Inaugural Lectures of Fellows/Associates</span><br />
                        (Venue: Auditorium – Visitors’ Hostel)<br />
                        Chairperson: S S Sane, IIT-Bombay<br /><br />
                        <dl class="dl-horizontal">
                            <dt>0900 - 0920</dt>
                            <dd>
                                <span class="speaker">Krishna P Kaliappan</span><br />
                                IIT-Bombay<br />
                                <span class="talk">Domino strategy to synthesis of natural products and heterocycles</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>0925 - 0945</dt>
                            <dd>
                                <span class="speaker">Appa Rao Podile</span><br />
                                University of Hyderabad, Hyderabad<br />
                                <span class="talk">Transglycosylation by bacterial chitinases</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>0950 - 1010</dt>
                            <dd>
                                <span class="speaker">N Ravishankar</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">Intriguing structure and transport behaviour of ultrathin single crystalline gold nanowires</span>
                            </dd>
                        </dl>                                                                                            
                        <dl class="dl-horizontal">
                            <dt>1015-1035</dt>
                            <dd>
                                <span class="speaker">B Anand</span><br />
                                IIT, Guwahati<br />
                                <span class="talk">Homing mechanism of the CRISPR-Cas adaptive immune system</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>1040 - 1100</dt>
                            <dd>Tea break</dd>
                        </dl>
                    </div>           
                    <div class="session">
                        <span class="type">Session 3B - Inaugural Lectures of Fellows/Associates</span><br />
                        Chairperson: S V Bhat, IISc, Bengaluru<br /><br />                    
                        <dl class="dl-horizontal">
                            <dt>1100 - 1120</dt>
                            <dd>
                                <span class="speaker">Tirthankar Bhattacharyya</span><br />
                                IISc, Bengaluru<br />
                                <span class="talk">What do analytic functions look like?</span>
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>1125 - 1145</dt>
                            <dd>
                                <span class="speaker">Pratap Raychaudhuri</span><br />
                                TIFR, Mumbai<br />
                                <span class="talk">Low temperature scanning tunneling spectroscopy</span>
                            </dd>
                        </dl>                        
                        <dl class="dl-horizontal">
                            <dt>1150 - 1210</dt>
                            <dd>
                                <span class="speaker">G R Tripathy</span><br />
                                IISER Pune<br />
                                <span class="talk">Re-Os geochronology: Clues for past marine and atmospheric 
                                conditions</span>
                            </dd>
                        </dl>                        
                    </div>
                    <div class="session">
                        <span class="type">Session 3C - Special Lecture</span><br />
                        Chairperson: S Chandrasekaran, IISc, Bengaluru<br /><br />
                        <dl class="dl-horizontal">
                            <dt>1215 - 1300</dt>
                            <dd>
                                <span class="speaker">Amitabh Joshi</span><br />
                                JNCASR, Bengaluru<br />
                                <span class="talk">Experimental ecology and evolution in the laboratory</span>
                            </dd>
                        </dl>                                                                    
                    </div>
                    <div class="break">
                        <dl class="dl-horizontal">
                            <dt>1300 - 1400</dt>
                            <dd>Lunch</dd>
                        </dl>
                    </div>                                                                     
                </div>
                <div class="schedule-text" id="allied">
                    <h3>Allied Events</h3>
                    <h3>3 November 2016 (Thursday)</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>10.00 AM</dt>
                            <dd>
                                <span class="speaker">Academy Publications Committee Meeting</span><br />
                                Visitors Hostel: Board Room, 1st Floor<br />
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>02.30 PM</dt>
                            <dd>
                                <span class="speaker">Editorial Board Meeting – Pramana</span><br />
                                Visitors Hostel: Auditorium<br />
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>04.00 PM - 05.30 PM</dt>
                            <dd>
                                <span class="speaker">Meeting with Teachers</span><br />
                                Visitors Hostel: Auditorium<br />
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>06.00 PM</dt>
                            <dd>
                                <span class="speaker">Press conference</span><br />
                                L2, Lecture Hall Complex<br />
                            </dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>Evening</dt>
                            <dd>
                                <span class="speaker">Talk by Prof. CNR Rao<br />
                                (programme organized by IISER Bhopal)</span><br />
                                L5, Lecture Hall Complex<br />
                            </dd>
                        </dl>          
                    </div>
                    <h3>5 November 2016 (Saturday)</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>04.00 PM - 05.30 PM</dt>
                            <dd>
                                <span class="speaker">Business Meeting of Fellows</span><br />
                                 L3, Lecture Hall Complex<br />
                                <span class="talk"></span>
                            </dd>
                        </dl>                        
                    </div>                        
                </div>
                <div class="schedule-text" id="spouse">
                    <h3>For Spouses</h3>
                    <h3>4 November 2016 (Friday)</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>2.00 PM</dt>
                            <dd>
                                <span class="speaker">Visit to Sanchi Stupas</span><br />
                                (Bus will start from Visitors' Hostel at 2:00 PM)<br />
                            </dd>
                        </dl>
                    </div>                    
                    <h3>5 November 2016 (Saturday)</h3>
                    <div class="session">
                        <dl class="dl-horizontal">
                            <dt>9.30 AM</dt>
                            <dd>
                                <span class="speaker">Visit to Indira Gandhi Rashtriya Manav Sangrahalaya and Upper Lake</span><br />
                                (Bus will start from Visitors' Hostel at 9:30 AM)<br />
                            </dd>
                        </dl>
                    </div>    
                </div>
            </div>
        </div>
        <div class="col-md-3 sidebar">
            <h1>Quick links</h1>
            <ul>
                <li><a href="">Detailed Schedule</a></li>
            </ul>
        </div>
    </div>
</div>
