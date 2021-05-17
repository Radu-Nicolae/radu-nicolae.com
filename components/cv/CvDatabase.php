<?php
include 'components/cv/CvUtils.php';




class CvDatabase
{

    public $grade = "11";

    public function getEducationCv()
    {

        $sololearn = new CvItem(
            "2020 - ",
            "2020 - ",
            "present",
            "prezent",
            "Programming Courses",
            "Cursuri de Programare",
            "SoloLearn",
            "SoloLearn",
            '
                    <p>I have attended and graduated the following SoloLearn courses:</p>
                            <ul>
                                <li>HTML</li>
                                <li>CSS</li>
                                <li>Responsive Web Design</li>
                                <li>Java</li>
                                <li>PHP</li>
                            </ul>

                            <p>
                                In present I am attending MySQL and C++ courses.
                            </p>
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
            '<p>I have attended back end courses of programming applied on Java, organized by Jademy - Oracle partner.</p>
                            <p>
                                I did gain knowledge of:
                            </p>
                            <ul>
                                <li>Language syntax elements</li>
                                <li>Application of notions of object-oriented programming (OOP)</li>
                                <li>Analysis and solving top-down and bottom-up problems</li>
                                <li>Coding style principles</li>
                                <li>Java Collections</li>
                                <li>Exceptions</li>
                                <li>Databases (MySQL and JDBC)</li>
                                <li>Functional Programming</li>
                                <li>Java FX</li>
                            </ul>

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

        $highSchool = new CvItem(
            "2018 - ",
            "2018 - ",
            "present",
            "prezent",
            "Mathematics-Informatics",
            "Matematică-Informatică",
            '<a href="https://licsfsava.ro" style="color: black !important" target="_blank">"Saint Sava" National College</a>',
            '"<a href="https://licsfsava.ro" target="_blank">Colegiul Național "Sfântul Sava"</a>',
            '<div style="color:#999999">
                                <p>I study at the best high school in Romania mathematics-informatics profile and
                                    currently I am in the 11<sup>th</sup> grade.</p>
                                <p>
                                    Principal profile subjects studied are:
                                </p>
                                <ul>
                                    <li>Mathematics</li>
                                    <li>Informatics</li>
                                    <li>Physics</li>
                                    <li>Chemistry</li>
                                </ul>

                                <p>
                                    Principal non-profile subjects studied are:
                                </p>
                                <ul>
                                    <li>Romanian</li>
                                    <li>English</li>
                                    <li>French</li>
                                </ul>
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

        $middleSchool = new CvItem(
            "2010 - ",
            "2010 - ",
            "2018",
            "2018",
            "Secondary School",
            "Școala Generală",
            'General School "Constantin Brancuși"',
            'Școala Generală "Constantin Brâncuși"',
            "",
            ""
        );

        $cv = array(
            $sololearn,
            $jademyCourses,
            $ecdl,
            $highSchool,
            $middleSchool
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

        $jademyInternship = new cvItem(
            "May 2020 - ",
            "Mai 2020 - ",
            "present",
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
            '<p style="text-align: justify;">I obtained an internship with Jademy in which I
                                    have designed, structured and implemented a front end course of 25 modules
                                    consisting of knowledge about HTML 5, CSS 3 and Javascript and I\'ve also
                                    participated at Java courses as a trainer assistant . The course can be found <a
                                            href = "https://edu.jademy.ro/wiki/doku.php/core:precourseweb:start" ><u> here</u>.</a >
                                </p > ',
            '<p style="text-align: justify;">Am obținut un internship cu Jademy unde am structurat, creat și implementat 
                                    un curs de front end care constă în 25 de module cu informații și exerciții cu HTML 5, CSS 3 și
                                     Javascript. De asemenea, am participat și la cursuri de Java ca trainer assistant. Cursul poate fi
                                      accesat <a
                                            href = "https://edu.jademy.ro/wiki/doku.php/core:precourseweb:start" ><u>aici</u>.</a >
                                </p > 
                                '
        );

        $raduNicolaeWebsite = new CvItem(
            "Mar 2020 - ",
            "Mar 2020 - ",
            "present",
            "prezent",
            "Web Developer Internship",
            "Web Developer Internship",
            '<a href="#" class="linksiteuri"
                                                          style="text-decoration: underline; color: black !important">This website</a>',
            '<a href="#" class="linksiteuri"
                                                          style="text-decoration: underline; color: black !important">Acest website</a>',
            '<p style="text-align: justify;">I have structured, designed and built my personal
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
            '<p style="text-align: justify;">My duties were to structure, design, build and keep the
                                    maintenance for the official website of Happy Camps Club.</p>',
            '<p style="text-align: justify;">Am structurat, proiectat și dezvoltat site-ul oficial al Happy Camps Club, iar 
                        în prezent mă ocup cu mentenanța acestuia.</p>'
        );

        $interactWebsite = new CvItem(
            "Feb 2020 - ",
            "Feb 2020 - ",
            "present",
            "prezent",
            'Web Developer Internship',
            "Web Developer Internship",
            'Interact Bucharest',
            'Interact București',
            '<p>My duties were to structure, design and build the
                                    official website of Interact Bucharest. In present I keep the maintenance of the
                                    website. Interact Bucharest is a non profit organization, belonging to Rotary Club,
                                    an international service organization whose stated purpose is to bring together
                                    business and professional leaders in order to
                                    provide humanitarian service and to advance goodwill and peace around the
                                    world.</p>',
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
            "present",
            "prezent",
            "Web Developer Internship",
            "Web Developer Internship",
            '<a href="http://revista-cava.ro/" target="_blank" class="linksiteuri" style="text-decoration: underline; color: black !important">ÇaVa Website</a>',
            '<a href="http://revista-cava.ro/" target="_blank" class="linksiteuri" style="text-decoration: underline; color: black !important">ÇaVa Website</a>',
            '<p>My duties were to structure, design and build the
                                    official website of CaVa, the magazine of "Saint Sava" National College. In prezent
                                    I keep the maintenance of the website by posting new articles, updating details,
                                    making announcements, etc.</p>',
            '<p>Am structurat, proiectat și construit site-ul oficial al revistei Colegiului Național Sfântul Sava.
                        În prezent mă ocup cu mentenața site-ului prin postarea noilor articole, actualizarea detaliilor, postarea 
                        noilor articole, crearea de anunțuri, etc.</p>'
        );


        $cv = array(
            $github,
            $jademyInternship,
            $happyCampsWebsite,
            $raduNicolaeWebsite,
            $interactWebsite,
            $revistaCaVaWebsite
        );

        return $cv;
    }

    public function getOtherExperienceCv()
    {

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

        $lazarMun = new CvItem(
            "14 - ",
            "14 - ",
            "17 Feb 2020",
            "17 Feb 2020",
            "Staff member at Lazăr MUN",
            "Membru Staff Lazăr MUN",
            "United Nations",
            "United Nations",
            '<p style="text-align: justify;">I have occupied the position of Staff member at
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
                                        religion, social classes. More details on <a href="https://www.icrc.org"
                                                                                     target="_blank"> icrc.org</a>.</p>',
            '<p style="text-align: justify;">Mișcarea Internațională de Cruce Roșie și Semilună Roșie este o mișcare umanitară 
                        internațională a cărei misiune este de a proteja viața și sănătatea oamenilor, de a asigura respectul față de ființa umană,
                        de a preveni și alina suferința oamenilor, fără vreo discriminare de naționalitate, rasă, religie, clase sociale sau 
                        opinii politice. Mai multe detalii pe <a href="https://www.icrc.org"
                                                                                     target="_blank">icrc.org</a>.</p>'
        );

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

        $autovortex = new CvItem(
            "Oct 2020 - ",
            "Oct 2020 - ",
            "present",
            "prezent",
            "National Team of Robotics Member",
            "Membru al Echipei Naționale de Robotică Autovortex",
            "Autovortex",
            "Autovortex",
            '
                                    <p style="text-align: justify;">Autovortex is the national robotics team,
                                        representing Romania in one of the biggest international contest of robotics,
                                        FIRST Tech Challenge.</p>
                                    <p>
                                        Principal activities are:
                                    </p>
                                    <ul>
                                        <li>robot designing</li>
                                        <li>robot construction</li>
                                        <li>robot programming</li>
                                    </ul>

                                    <p>
                                        A few of our latest awards are:
                                    </p>
                                    <ul>
                                        <li>1<sup>st</sup> place at FIRST Tech Challenge Russia 2021 - National Stage
                                        </li>
                                        <li>1<sup>st</sup> place at FIRST Tech Challenge Russia 2020 - National Stage
                                        </li>
                                        <li>2<sup>nd</sup> place at FIRST Tech Challenge Romania 2019 - National Stage
                                        </li>
                                    </ul>
            ',
            '<p style="text-align: justify;">Autovortex este echipa naționala de robotică a României</p>
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
                                        <li>Locul 2 la FIRST Tech Challenge Romania 2019 - Etapa Naționala
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
            <!-- Other experience -->
                           
                                    <p style="text-align: justify;">I participated at the official Summer Camp
                                        organized by FIRST Tech Challenge where I gained knowledge of:</p>
                                    <ul>
                                        <li>PTC Creo</li>
                                        <li>Java and Android Studio, used for programming the robots</li>
                                        <li>Unwritten rules of designing and construction</li>
                                        </li>
                                    </ul>
                                
                            <!-- Other experience -->
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

        $roboticsContest = new CvItem(
            "10 May 2019",
            "10 Mai 2019",
            "",
            "",
            "Participant at robotics contest",
            'Participant concurs de robotică',
            'Sciences and Techologies Ploiesti',
            'Științe și Tehnologii Ploiești',
            '<p>My team and I gained the special prize at robotics in the Sciences and Technologies Contest.</p>',
            '<p>Am participat la concursul "Științe și Tehnologii", într-o echipa de 2 elevi, la secțiunea robotică, unde am obținut Premiul Special.</p>'
        );

        $happyCampsVolunteer = new CvItem(
            "Apr 2019 - ",
            "Apr 2019 - ",
            "present",
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

        $gammaRobotics = new CvItem(
            "Oct 2018 - ",
            "Oct 2018 - ",
            "Oct 2019",
            "Oct 2019",
            "Team Member",
            "Membru",
            "Gamma Robotics",
            "Gamma",
            '<p style="text-align: justify;">Gamma is "Saint Sava" National College\'s robotics
                                        team, which participates at one of the biggest international robotics contests
                                        worldwide, FIRST Tech Challenge.
                                    </p>

                                    <p style="text-align: justify;">
        We have managed to pass regional stage and we have competed against the best
                                        robotics teams in Romania at the national stage in the 2018-2019 season of FIRST
                                        Tech Challenge, Rover Ruckus.
                                    </p>',
            '<p style="text-align: justify;">Gamma este echipa de robotică a Colegiului Național Sfantul Sava care participă
                                                        la unul dintre cele mai mari concursuri internaționale de robotică, FIRST Tech Challenge.
                                    </p>

                                    <p style="text-align: justify;">
        Am reușit sa ne calificăm la etapa națională si sa concurăm împotriva celor mai bune echipe de robotică din Romania în sezonul
        2018-2019 FIRST Tech Challenge, Rover Ruckus.
                                    </p>'
        );



        $cv = array(
            $happyCampsFinancial,
            $lazarMun,
            $redCross,
            $euDialogue,
            $autovortex,
            $ftcCamp,
            $cg2019,
            $kidsParliament,
            $roboticsContest,
            $happyCampsVolunteer,
            $gammaRobotics
        );

        return $cv;

    }

}