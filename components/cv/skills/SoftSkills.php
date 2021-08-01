<?php

class SoftSkills{
    var $skillName;
    var $flaticon;

    /**
     * @param $skillName
     * @param $flaticon
     */
    public function __construct($skillName, $flaticon)
    {
        $this->skillName = $skillName;
        $this->flaticon = $flaticon;
    }

    /**
     * @return mixed
     */
    public function getSkillName()
    {
        return $this->skillName;
    }

    /**
     * @param mixed $skillName
     */
    public function setSkillName($skillName): void
    {
        $this->skillName = $skillName;
    }

    /**
     * @return mixed
     */
    public function getFlaticon()
    {
        return $this->flaticon;
    }

    /**
     * @param mixed $flaticon
     */
    public function setFlaticon($flaticon): void
    {
        $this->flaticon = $flaticon;
    }

    public function getSoftSkillsDatabase(){
        $teamwork = new SoftSkills("Teamwork", "ti-settings");
        $solution = new SoftSkills("Solution oriented", "ti-light-bulb");
        $fastLearner = new SoftSkills("Fast learner", "ti-bolt");
        $details = new SoftSkills("Attention to detail", "ti-search");

        $softSkills = array(
                $teamwork,
                $solution,
                $fastLearner,
                $details
        );

        return $softSkills;
    }

    public function getSoftSkillsCode($softSkills){
        $code = "";
        $codePerItem = "";

        $code = '
            <section style="padding-top: 4rem !important;" class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter">

                <style>
                    @media(max-width: 450px){
                        .next-line{
                            display: none !important;
                        }
                    }
            
                    @media(min-width: 450px){
                        .verical-line{
                            display: none;
                        }
                    }
                </style>
            
                <h2 class="heading">Soft Skills</h2>
            
                <div class="container-fluid px-md-5">';

        for ($i = 0; $i < sizeof($softSkills); $i++){
            $softSkill = $softSkills[$i];

            $codePerItem = '
                <div class="row d-md-flex align-items-center">
                    <div class="col-md d-flex justify-content-center counter-wrap ftco-animate paddingCounter">
                        <div class="block-18 shadow">
                            <div class="text">
                                <h4 class="number" style="color: black"><span class="next-line flatticon-here ' . $softSkill->getFlaticon() . '"></span></span>' . $softSkill->getSkillName() .'</h4>
                            </div>
                        </div>
                    </div>
                </div>
            ';

            $code .= $codePerItem;
        }

        $code .= "</div> </section>";

        return $code;

    }


}

?>

<?php
    $utilityObject = new SoftSkills("nothing at", "all");
    echo($utilityObject->getSoftSkillsCode($utilityObject->getSoftSkillsDatabase()));

?>

