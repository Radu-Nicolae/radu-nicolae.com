<?php
include 'components/cv/CvUtils.php';




class CvDatabase
{
    public function getHighSchoolCv(){
        $highSchool = new CvItem(
            "2018 - ",
            "2018 - ",
            "on going",
            "prezent",
            "Baccalaureate Diploma",
            "Diplomă de Bacalaureat",
            '<a href="https://licsfsava.ro" style="color: black !important" target="_blank">"Saint Sava" National College</a>',
            '"<a href="https://licsfsava.ro" target="_blank" style="color: black !important">Colegiul Național "Sfântul Sava"</a>',
            '<div style="color:#999999">
                                <p>I study at the best high school in Romania <b>mathematics-informatics profile</b> and
                                    currently I am in the 12<sup>th</sup> grade.</p>
                                    
                               <p>I will sustain at Baccalaureate Exam Mathematics, Phisics, Romanian, Digital Competences and English  </p>
                                
                            </div>',
            '<div style="color:#999999">
                                <p>În prezent sunt elev la cel mai bun liceu din România pe profilul matematică și informatică.</p>
                                <p>
                                    Principalele subiecte studiate sunt:
                                </p>
                                <ul>
                                    <li>Matematică</li>
                                    <li>Informatică</li>
                                    <li>Fizică</li>
                                    <li>Chimie</li>
                                </ul>

                                <p>
                                    Principalele subiecte secundare studiate sunt:
                                </p>
                                <ul>
                                    <li>Română</li>
                                    <li>Engleză</li>
                                    <li>Franceză</li>
                                </ul>
                            </div>'
        );

        $sat = new CvItem(
            "Dec 2020",
            "Dec 2020",
            "",
            "",
            "Scholastic Assessment Test (SAT)",
            "Scholastic Assessment Test (SAT)",
            "College Board",
            "College Board",
            "
                <p>Overall: <b>1360 points</b> - higher than 91% of test takers</p>
                
                <p>Math: <b>760 points</b> - higher than 96% of test takers
               <br>English: <b>600 points</b> - higher than 76% of test takers</p>
                ",
            "",
        );

        $oneItemArray = array(
            $highSchool,
            $sat
        );

        return $oneItemArray;
    }


    public function getEducationCv()
    {
        $edxHarvard = new CvItem(
            "Jun 2021 - ",
            "Jun 2021 - ",
            "on going",
            "on going",
            "Front End Course",
            "Front End Course",
            "<a style='color:black' href='https://learning.edx.org/course/course-v1:HarvardX+CS50W+Web/home'>Harvard CS50</a>",
            "<a style='color:black' href='https://learning.edx.org/course/course-v1:HarvardX+CS50W+Web/home'>Harvard CS50</a>",
            "
            <p>
                The course covers the following chapters: HTML, CSS, Git, Python, Django, MySQL, Javascript, User Interfaces, Testing and Scalability and Security.
            </p>

            <p>
                More details about the course can be found <a href='https://learning.edx.org/course/course-v1:HarvardX+CS50W+Web/home'>here</a>.
            </p>
            
            ",
            "
            <p>
            Cursul acoperă mai multe limbaje și tool-uri legate de front end:
             <ul>
                    <li>HTML</li>
                    <li>CSS</li>
                    <li>Git</li>
                    <li>Python</li>
                    <li>Django</li>
                    <li>MySQL</li>
                    <li>Javascript</li>
                </ul> 
             De asemenea, cursul contine 3 capitole constând din interfețe utilizator, testare și scalabilitate și securitate. Mai multe detalii despre curs pot fi gasite <a href='https://learning.edx.org/course/course-v1:HarvardX+CS50W+Web/home'>aici</a>.
            </p>
            "
        );


        $edxDelft = new CvItem(
            "Apr 2021 - ",
            "Apr 2021 - ",
            "Jun 2021",
            "Iun 2021",
            "<a href='https://learning.edx.org/course/course-v1:DelftX+Calc001x+2T2020/home' style='color:black;'>Pre-University Calculus</a>",
            "<a href='https://learning.edx.org/course/course-v1:DelftX+Calc001x+2T2020/home' style='color:black;'>Pre-University Calculus</a>",
            "TU Delft",
            "TU Delft",
            '
                <p>
                    I graduated the official pre-university mathematics course organized by TU Delft with the remarkable <b>final grade of 91%</b>.
                </p>
                
                <p>
                    I did gain indispensable calculus and mathematical algorithm knowledge including equations, functions, differentiation, integration and geometry.
                </p>
                
                <p>More details about the course can be found <a href="https://learning.edx.org/course/course-v1:DelftX+Calc001x+2T2020/home">here.</a></p>
            ',
            '<p>
                    Am absolvit cursul oficial de matematică preuniversitară organizat de TU Delft și am obținut <b>calificativul final de 91%</b>.
                </p>
                
                <p>
                    Am dobândit și/sau consolidat cunoștiințe de:
                </p>
                <ul>
                    <li>
                        Funcții elementare
                        <ul>
                            <li>Puteri</li> 
                            <li>Numere raționale</li> 
                            <li>Funcții Polinomiale</li> 
                            <li>Funcții trigonometrice</li> 
                            <li>Funcții exponențiale</li> 
                            <li>Funcții logaritmice</li>
                        </ul>
                    </li>
                    
                    <li>Ecuații și Inegalități</li>
                    <li>Derivate</li>
                    <li>Integrale</li>
                    <li>Geometrie
                        <ul>
                            <li>Vectori</li>
                            <li>Drepte/Segmente</li>
                            <li>Circuri</li>
                            <li>Parabole</li>
                            <li>Geometrie în spațiu</li>
                        </ul>
                    </li>
                </ul>
                
                <p>Pentru mai multe detalii despre curs click <a href="https://learning.edx.org/course/course-v1:DelftX+Calc001x+2T2020/home">aici.</a></p>
'
        );

        $sololearn = new CvItem(
            "2020 - ",
            "2020 - ",
            "on going",
            "prezent",
            "Programming Courses",
            "Cursuri de Programare",
            "SoloLearn",
            "SoloLearn",
            '
                    <p>I have attended and graduated the following SoloLearn courses: Java, PHP, HTML, CSS, Responsive Web Design.</p>
                    <p>I am currently attending MySQL and C++ courses.</p>
                ',
            '<p>Am participat la urmatoarele cursuri organizate și certificate de SoloLearn:</p>
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Responsive Web Design</li>
                                <li>Java</li>
                                <li>PHP</li>
                            </ul>

                            <p>
                                În prezent particip la cursurile de MySQL și C++.
                            </p>'
        );

        $jademyCourses = new CvItem(
            "Mar 2020 - ",
            "Mar 2020 - ",
            "Nov 2020",
            "Nov 2020",
            "Java Courses",
            "Cursuri Java",
            "Jademy",
            "Jademy",
            '
                <p>I have attended Oracle authorised back end courses of Java.</p>
                <p>The course help me develop an algorithmic thinking and I did gain knowledge of OOP, Debugging, solving problems, handling exceptions, databases (SQL and JDBC), functional programming and Java FX.</p>
                <p>For more details about Jademy click <a href="https://jademy.ro" target="_blank">here.</a></p>',


            '<p>Am participat la cursuri de back end organizate Jademy, partener Oracle .</p>
                            <p>
                                Am dobândit cunoștiițe de:
                            </p>
                            <ul>
                                <li>Elemente de sintaxă</li>
                                <li>Aplicarea de noțiuni de OOP (programare orientată pe obiecte)</li>
                                <li>Analizarea si rezolvarea bug-urilor</li>
                                <li>Principii de coding style</li>
                                <li>Java Collections</li>
                                <li>Exceptions</li>
                                <li>Databases (MySQL and JDBC)</li>
                                <li>Programare funcțională</li>
                                <li>Java FX</li>
                            </ul>

                            <p>Pentru mai mult detalii despre Jademy click <a href="https://jademy.ro" target="_blank">aici.</a></p>'
        );


        //to be removed and added to skills
        $ecdl = new CvItem(
            "2018 - ",
            "2018 - ",
            "2019",
            "2019",
            "ECDL certificate",
            "Certificat ECDL",
            "ECDL (European Computer Driving Licence)",
            "ECDL (European Computer Driving Licence)",
            '<p style="color:#999999">I have achieved the ECDL (European Computer Driving License)
                                in: </p>

                            <ul style="color:#999999">
                                <li>KompoZer 2.0</li>
                                <li>Microsoft PowerPoint</li>
                                <li>Microsoft Word</li>
                                <li>Microsoft Excel</li>
                                <li>Microsoft Access</li>
                                <li>Microsoft Outlook</li>
                                <li>Computer Usage</li>
                            </ul>',
            '<p>În clasa a 9-a am luat toate examenele ECDL: </p><ul>
									<li>KompoZer 2.0</li>
									<li>Microsoft PowerPoint</li>
									<li>Microsoft Word</li>
									<li>Microsoft Excel</li>
									<li>Microsoft Access</li>
									<li>Microsoft Outlook</li>
									<li>Utilizarea Calculatorului</li>
								</ul>'
        );



        $cv = array(
            $edxHarvard,
            $sololearn,
            $edxDelft,
            $jademyCourses
        );


        return $cv;
    }

    public function getDevelopingCv()
    {
        $github = new CvItem(
            "",
            "",
            "",
            "",
            '<a href="https://github.com/Radu-Nicolae?tab=repositories"
                                   style="text-decoration: underline; text-decoration-color: black !important;"><h2>
                    Github</h2></a>',
            '<a href="https://github.com/Radu-Nicolae?tab=repositories"
                                   style="text-decoration: underline; text-decoration-color: black !important;"><h2>
                    Github</h2></a>',
            "",
            "",
            '
                <p><a href="https://github.com/Radu-Nicolae?tab=repositories">Github</a> is the platform
                                    where I have uploaded all my projects.</p>
            ',
            '
                <p><a href="https://github.com/Radu-Nicolae?tab=repositories">Github</a> este platforma pe care
                    încarc toate proiectele dezvoltate de mine.</p>
            '
        );

        $topTheWhole = new CvItem(
            "Jan 2021 - ",
            "Ian 2020 - ",
            "on going",
            "prezent",
            "Website Founder",
            "Fondator Website",
            '<a href="https://topthewhole.com" class="linksiteuri"
                                                          style="text-decoration: underline; color: black !important">Top The Whole</a>',
            '<a href="https://topthewhole.com" class="linksiteuri"
                                                          style="text-decoration: underline; color: black !important">Top The Whole</a>',
            '
                <p>Website owner - developed in order to attract traffic for Google Adsense.</p>
                <p>I built the website together with <a href="https://luanaionica.com" target="_blank"><u>Luana</u></a> using PHP and SEO. I am currently keeping the maintenaince of the website.</p>        
',
            '<p> <a href="https://topthewhole.com" style="text-decoration: underline"><u>Top The Whole</u></a> este website-ul pe care l-am construit împreuna cu
                     <a href="https://luanaionica.com" target="_blank"><u>Luana</u></a> pentru a atrage trafic web care,
                     în cele din urmă, poate deveni o sursă pasivă de venit. Astfel, am dobândit cunoștințe despre SEO și mi-am exersat atât cunoștiințele de Front End, cât și pe cele de Back End.
                     În prezent, păstrez mentenanța site-ului prin postarea de articole noi și actualizarea detaliilor.
                      </p>'
        );



        $raduNicolaeWebsite = new CvItem(
            "Mar 2020 - ",
            "Mar 2020 - ",
            "on going",
            "prezent",
            "Web Developer Internship",
            "Web Developer Internship",
            '<a href="#" class="linksiteuri"
                                                          style="text-decoration: underline; color: black !important">This website</a>',
            '<a href="#" class="linksiteuri"
                                                          style="text-decoration: underline; color: black !important">Acest website</a>',
            '<p style="text-align: justify;">Structured, designed and built my personal
                                    website by my own using HTML, CSS, Javascript, PHP and GIT. In present I am keeping its maintenance. </p>',
            '<p style="text-align: justify;">Am structurat, proiectat și dezvoltat site-ul meu personal folosind HTML, CSS, 
                        Javascript, PHP și GIT. În prezent mă ocup de mentenanța acestuia.</p>'
        );

        $happyCampsWebsite = new CvItem(
            "Mar 2020 - ",
            "Mar 2020 - ",
            "Jun 2020",
            "Iun 2020",
            "Web Developer Internship",
            "Web Developer Internship",
            '<a href="https://happycamps.club" target="_blank" class="linksiteuri" style="text-decoration: underline; color: black !important">Happy Camps Club Website</a>',
            '<a href="https://happycamps.club" target="_blank" class="linksiteuri" style="text-decoration: underline; color: black !important">Happy Camps Club Website</a>',
            '<p style="text-align: justify;">Structured, designed, built and kept the
                                    maintenance for the official website of Happy Camps Club.</p>',
            '<p style="text-align: justify;">Am structurat, proiectat și dezvoltat site-ul oficial al Happy Camps Club, iar 
                        în prezent mă ocup cu mentenanța acestuia.</p>'
        );

        $interactWebsite = new CvItem(
            "Feb 2020 - ",
            "Feb 2020 - ",
            "Iul 2021",
            "Iul 2021",
            'Web Developer Internship',
            "Web Developer Internship",
            '<a href="http://interactbucuresti.ro/" target="_blank" class="linksiteuri" style="text-decoration: underline; color: black !important">Interact Bucharest</a>',
            '<a href="http://interactbucuresti.ro/" target="_blank" class="linksiteuri" style="text-decoration: underline; color: black !important">Interact București</a>',
            '<p>Structure, designed and built the
                                    official website of Interact Bucharest. I kept maintenaince of the website during the period.</p>',
            '<p>Sarcinile mele erau de a structura, proiecta și construi
                                      site-ul oficial al Interact București. În prezent păstrez întreținerea
                                      site-ului. Interact București este o organizație non-profit, aparținând Rotary Club,
                                      o organizație internațională de caritate al cărei scop este de a reuni
                                      lideri de afaceri pentru a
                                      oferi servicii umanitare.</p>'
        );

        $revistaCaVaWebsite = new CvItem(
            "Oct 2019 - ",
            "Oct 2019 - ",
            "on going",
            "prezent",
            "Web Developer Internship",
            "Web Developer Internship",
            '<a href="http://revista-cava.ro/" target="_blank" class="linksiteuri" style="text-decoration: underline; color: black !important">ÇaVa Website</a>',
            '<a href="http://revista-cava.ro/" target="_blank" class="linksiteuri" style="text-decoration: underline; color: black !important">ÇaVa Website</a>',
            '<p>Structured, designed and built the
                                    official website of CaVa, the magazine of "Saint Sava" National College. In prezent
                                    I keep the maintenance of the website by posting new articles, updating details,
                                    making announcements, etc.</p>',
            '<p>Am structurat, proiectat și construit site-ul oficial al revistei Colegiului Național Sfântul Sava.
                        În prezent mă ocup cu mentenața site-ului prin postarea noilor articole, actualizarea detaliilor, postarea 
                        noilor articole, crearea de anunțuri, etc.</p>'
        );


        $cv = array(
            $github,
            $topTheWhole,
            $raduNicolaeWebsite,
            $revistaCaVaWebsite,
            $happyCampsWebsite,
            $interactWebsite
        );

        return $cv;
    }


    public function getInternshipCv(){


        $jademyInternship = new cvItem(
            "May 2020 - ",
            "Mai 2020 - ",
            "on going",
            "prezent",
            "Front-End Trainer Internship",
            "Front-End Trainer Internship",
            '<span class="position"><a
                                            href="https://edu.jademy.ro/wiki/doku.php/core:precourseweb:start"
                                            target="_blank" class="linksiteuri"
                                            style="text-decoration: underline; color: black !important">Jademy Front-End Course</a></span>',
            '<span class="position"><a
                                            href="https://edu.jademy.ro/wiki/doku.php/core:precourseweb:start"
                                            target="_blank" class="linksiteuri"
                                            style="text-decoration: underline; color: black !important">Curs Front-End</a></span>',
            '<p>I structured, created and implemented a 25 module front end course containg notions and exercises of Javascript, HTML and CSS for <b>Jademy - Oracle Silver Partner</b>. The course can be found here <a href="https://edu.jademy.ro/wiki/doku.php/core:precourseweb:start"><u>here</u>.</a ></p>
                        <p>I participated as a trainer assistant at Java Courses.</p> ',


            '<p style="text-align: justify;">Am obținut un internship cu Jademy unde am structurat, creat și implementat 
                                    un curs de front end care constă în 25 de module cu informații și exerciții cu HTML 5, CSS 3 și
                                     Javascript. De asemenea, am participat și la cursuri de Java ca trainer assistant. Cursul poate fi
                                      accesat <a
                                            href = "https://edu.jademy.ro/wiki/doku.php/core:precourseweb:start" ><u>aici</u>.</a >
                                </p > 
                                '
        );

        $cv = array($jademyInternship);

        return $cv;
    }


    public function getRoboticsCv(){
        $autovortex = new CvItem(
            "Oct 2020 - ",
            "Oct 2020 - ",
            "on going",
            "prezent",
            "National Team of Robotics Member",
            "Membru al Echipei Naționale de Robotică Autovortex",
            "Autovortex",
            "Autovortex",
            '
                                    <p style="text-align: justify;"><a href="https://autovortex.ro/" target="_blank"><u>Autovortex</u></a> is the national robotics team,
                                        representing Romania in one of the biggest international contest of robotics,
                                        FIRST Tech Challenge.</p>
                                    <p>
                                        Principal activities: robot designing, construction and programming.
                                    </p>

                                    <p>
                                        Earnt Awards:
                                    </p>
                                    <ul>
                                        <li>1<sup>st</sup> place at FIRST Tech Challenge Russia 2021 - April 2021
                                        </li>
                                        <li>1<sup>st</sup> place at FIRST Tech Challenge Russia 2020 - February 2020
                                        </li>
                                        <li>1<sup>st</sup> place at FIRST Tech Challenge Russia 2019 - December 2019
                                        </li>
                                    </ul>
            ',
            '<p style="text-align: justify;"><a href="https://autovortex.ro/" target="_blank"><u>Autovortex</u></a> este echipa naționala de robotică a României</p>
                                    <p>
                                        Pricipalele activități sunt:
                                    </p>
                                    <ul>
                                        <li>proiectarea robotului</li>
                                        <li>construcția robotului</li>
                                        <li>programarea robotului</li>
                                    </ul>

                                    <p>
                                        Câteva dintre cele mai recente premii sunt:
                                    </p>
                                    <ul>
                                        <li>Locul 1 la FIRST Tech Challenge Rusia 2021 - Etapa Naționala</li>
                                        <li>Locul 1 la FIRST Tech Challenge Rusia 2020 - Etapa Națională
                                        </li>
                                        <li>Locul 2 la FIRST Tech Challenge Romania 2019 - Etapa Națională
                                        </li>
                                    </ul>'
        );

        $ftcCamp = new CvItem(
            "8 -",
            "8 -",
            "14 Jul 2019",
            "14 Iul 2019",
            "Participant at FTC summer camp",
            "Participant tabară de robotică FTC",
            "FIRST Tech Challenge",
            "FIRST Tech Challenge",
            '
                 <p>I participated at the official FIRST Tech Challenge Summer Camp where I gained knowledge of PTC Creo, Java and Android Studio robot designing and construction tactics.</p>

            ',
            '<p style="text-align: justify;">Am participat la Summer Camp organizată de FIRST Tech Challenge
                                                        unde am dobândit cunoștiințe de:</p>
                                    <ul>
                                        <li>PTC Creo</li>
                                        <li>Java and Android Studio, folosite pentur programarea roboților</li>
                                        <li>Reguli nescrise de proiectare și construcție a roboților</li>
                                        </li>
                                    </ul>'
        );

        $gammaRobotics = new CvItem(
            "Oct 2018 - ",
            "Oct 2018 - ",
            "Oct 2019",
            "Oct 2019",
            "Team Member",
            "Membru",
            "Gamma Robotics",
            "Gamma",
            '
                <p>Gamma is my high school\'s robotics team, which participated at the international contest FIRST Tech Challenge.</p>
                <p>I was team leader and driver during the season. We passed the regional stage and we competed against the best robotics teams in Romania at the national stage.</p>
',
            '<p style="text-align: justify;">Gamma este echipa de robotică a Colegiului Național Sfantul Sava care participă
                                                        la unul dintre cele mai mari concursuri internaționale de robotică, FIRST Tech Challenge.
                                    </p>

                                    <p style="text-align: justify;">
        Am reușit sa ne calificăm la etapa națională si sa concurăm împotriva celor mai bune echipe de robotică din Romania în sezonul
        2018-2019 FIRST Tech Challenge, Rover Ruckus.
                                    </p>'
        );

        $cv = array(
            $autovortex,
            $ftcCamp,
            $gammaRobotics
        );

        return $cv;
    }


    public function getCompetitionsCv(){
        $ftc2019 = new CvItem(
            "",
            "",
            "",
            "",
            "1<sup>st</sup> place",
            "Locul 1",
            "First Tech Challenge Russia - Dec 2019",
            "First Tech Challenge Russia - Dec 2019",
            "<br><br>",
            "<br><br>"
        );

        $ftc2020 = new CvItem(
            "",
            "",
            "",
            "",
            "1<sup>st</sup> place",
            "Locul 1",
            "First Tech Challenge Siberia - Feb 2020",
            "First Tech Challenge Siberia - Feb 2020",
            "<br><br>",
            "<br><br>"
        );

        $ftc2021 = new CvItem(
            "",
            "",
            "",
            "",
            "1<sup>st</sup> place",
            "Locul 1",
            "First Tech Challenge Russia - Apr 2021",
            "First Tech Challenge Russia - Apr 2021",
            "<br><br>",
            "<br><br>"
        );

        $roboticsContest = new CvItem(
            "",
            "",
            "",
            "",
            "Special Prize",
            "Special Prize",
            "Sciences and Technologies Ploiesti",
            "Științe și Technologii Ploiești",
            "<br><br>",
            "<br><br>"
        );


        $cv = array(
            $ftc2019,
            $ftc2020,
            $ftc2021,
            $roboticsContest,
        );

        return $cv;
    }

    public function getVolunteeringCv(){
        $happyCampsFinancial = new CvItem(
            "Mar 2020 - ",
            "Mar 2020 - ",
            "Sep 2020",
            "Sep 2020",
            "Financial Manager",
            "Manager Financiar",
            "Happy Camps",
            "Happy Camps",
            '<p>Buget, funding and sponsorship management for Happy Camps.</p>',
            '<p>Managementul bugetului, finanțărilor și sponsorizărilor pentru Happy Camps.</p>'
        );

        $corporateGamesFinancial = new CvItem(
            'Apr 2020 - ',
            'Apr 2020 - ',
            "Sep 2020",
            "Sep 2020",
            "Sales Agent",
            "Agent de vânzari",
            "Corporate Games Romania",
            "Corporate Games Romania",
            "<p>Convince the general managers of the greatest corporations from Romania to take part of Corporate Games together with their subordinates.</p>",
            "<p> După absolvirea cursului de business organizat de <a href='https://www.corporate-games.ro/ro' target='_blank'>
                      <u> Corporate Games Romania </u> </a> am activat ca agent de vânzări. Datoria mea era să îi conving pe directorii generali de cei mai mari
                      corporații din România să participe la eveniment împreună cu subordonații lor. </p>"
        );

        $lazarMun = new CvItem(
            "14 - ",
            "14 - ",
            "17 Feb 2020",
            "17 Feb 2020",
            "Staff member at Lazăr MUN",
            "Membru Staff Lazăr MUN",
            "United Nations",
            "United Nations",
            '<p style="text-align: justify;">Staff member at
                                        Model United Nations Conference, held in "Gheorghe Lazar" National College from
                                        Bucharest.</p>',
            '<p style="text-align: justify;">Am ocupat funcția de voluntar la
                                         conferința model organizata de United Nations, desfășurată în Colegiul Național "Gheorghe Lazar" din România
                                         Bucureşti.</p>'
        );

        $redCross = new CvItem(
            "Jan 2020 - ",
            "Ian 2020 - ",
            "Apr 2020",
            "Apr 2020",
            "Volunteer",
            "Voluntar",
            "Red Cross",
            "Crucea Roșie",
            '<p style="text-align: justify;">The International Red Cross and Red Crescent
                                        Movement is an international humanitarian movement whose mission is to protect
                                        human life and health, to ensure respect for the human being, to prevent and
                                        alleviate human suffering, without any discrimination of nationality, race,
                                        religion, social classes.</p>',
            '<p style="text-align: justify;">Mișcarea Internațională de Cruce Roșie și Semilună Roșie este o mișcare umanitară 
                        internațională a cărei misiune este de a proteja viața și sănătatea oamenilor, de a asigura respectul față de ființa umană,
                        de a preveni și alina suferința oamenilor, fără vreo discriminare de naționalitate, rasă, religie, clase sociale sau 
                        opinii politice. Mai multe detalii pe <a href="https://www.icrc.org"
                                                                                     target="_blank">icrc.org</a>.</p>'
        );

        $cg2019 = new CvItem(
            "15 - ",
            "15 - ",
            "16 Jun 2019",
            "16 Iun 2019",
            "Cycling Competition Participant",
            "Concurent Ciclism",
            "Corporate Games",
            "Corporate Games",
            '
                                    <p style="text-align: justify;">I have managed to gain the second place in cycling
                                        at one of the biggest international competitions, Corporate Games. More details
                                        about Corporate Games on <a href="https://www.corporate-games.com/"
                                                                    target="_blank">corporate-games.com</a>.</p>',
            '
                      <p style="text-align: justify;">Am obținut locul al doilea la ciclism la una dintre cele mai mari competiții
                                        internaționale, Corporate Games. Mai multe detalii despre Corporate Games pe 
                                        <a href="https://www.corporate-games.com/"
                                                                    target="_blank">corporate-games.com</a>.</p>  
            '
        );

        $happyCampsVolunteer = new CvItem(
            "Apr 2019 - ",
            "Apr 2019 - ",
            "on going",
            "prezent",
            "Volunteer",
            "Voluntar",
            'Happy Camps',
            "Happy Camps",
            "<p>Happy Camps is a non profit organization for children and teenagers. Happy Camps is about help, personal development, sport and fun, being one of the biggest volunteering organizations in Romania.</p>",
            '<p style="text-align: justify;">Happy Camps este o organizație non profit pentru copii și adolescenți. Happy Camps este
                                                        despre ajutor, dezvoltare personală, sport și distracție, fiind una dintre cele mai mari organizații de voluntariat din România.
                                    </p>'
        );

        $cv = array(
            $happyCampsFinancial,
            $corporateGamesFinancial,
            $lazarMun,
            $redCross,
            $happyCampsVolunteer
        );

        return $cv;

    }

    public function getOtherExperienceCv()
    {



        $euDialogue = new CvItem(
            "16 Oct 2020",
            "16 Oct 2020",
            "",
            "",
            'Participant at "The dialogue of the European Union with young people"',
            'Participant la "Dialogul Uniunii Europene cu tinerii"',
            "European Union",
            "Uniunea Europeana",
            '<p>I have participated at the local consultation within
                                        the Seventh Cycle of the European Union Dialogue with young people, within the
                                        National College "Saint Sava". We\'ve discussed about the main problems in the
                                        European Union and seek solutions for them. The conclusions were recorded and
                                        sent to European Union\'s parliament as "the voice of the young generation".</p>',
            '<p>Am participat la consultarea locală din cadrul celui de-al Șaptelea Ciclu al Dialogului Uniunii Europene cu Tinerii, organizată în Colegiul Național "Sfântul Sava".</p>'
        );







        $kidsParliament = new CvItem(
            "07 Jun 2019",
            "07 Iun 2019",
            "",
            "",
            'Participant "Kids Parliament"',
            'Participant "Parlamentul Copiilor"',
            'The Chamber of Deputies',
            'Palatul Parlamentului - Camera Deputaților',
            '<p>I have participated as a deputy at a model conference in which we discussed the introduction of a few laws regarding the protection of the environment.</p>',
            '<p>Alături de echipa mea, am reprezentat Colegiul Național "Sfântul Sava" în "Parlamentul Copiilor". Am dezbătut diferite probleme ale țării noastre, precum și modalități de rezolvare ale acestora.</p>'
        );

//        $cv = array(
//            $happyCampsFinancial,
//            $corporateGamesFinancial,
//            $lazarMun,
//            $redCross,
//            $euDialogue,
//            $autovortex,
//            $ftcCamp,
//            $cg2019,
//            $kidsParliament,
//            $roboticsContest,
//            $happyCampsVolunteer,
//            $gammaRobotics
//        );
//
//        return $cv;

    }

}