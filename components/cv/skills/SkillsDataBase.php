<?php

class SkillsDataBase
{
    public function getMainSkills()
    {
        $python = new Skill("Python", 90, array("Advanced", "Avansat"));
        $typescript = new Skill("TypeScript", 90, array("Advanced", "Avansat"));
        $javascript = new Skill("JavaScript", 90, array("Advanced", "Avansat"));
        $cpp = new Skill("C++", 90, array("Advanced", "Avansat"));
        $postgresql = new Skill("PostgreSQL", 90, array("Advanced", "Avansat"));
        $java = new Skill("Java", 90, array("Advanced", "Avansat"));
        $html = new Skill("HTML & CSS", 90, array("Advanced", "Avansat"));
        $git = new Skill("GIT", 90, array("Advanced", "Avansat"));

        $mainSkills = array(
            $python,
            $typescript,
            $javascript,
            $cpp,
            $postgresql,
            $java,
            $html,
            $git
        );

        return $mainSkills;
    }

    public function getSecondarySkills()
    {
        $tensorflow = new Skill("Tensorflow", "80", "");
        $numpy = new Skill("NumPy", "80", "");
        $pandas = new Skill("Pandas", "70", "");
        $keras = new Skill("Keras", "50", "");
        $matplotlib = new Skill("Matplotlib", "50", "");
        $graphql = new Skill("GraphQL", "40", "");
        $react = new Skill("React", "60", "");
        $php = new Skill("PHP", "60", "");
        $linux = new Skill("Linux/Debian", "60", "");

        $secondarySkills = array(
            $tensorflow,
            $numpy,
            $pandas,
            $keras,
            $matplotlib,
            $graphql,
            $react,
            $php,
            $linux
        );

        return $secondarySkills;
    }

    public function getCodeMain($mainSkills, $lang)
    {
        $code = "";
        $itemCode = '';

        for ($i = 0; $i < sizeof($mainSkills); $i++) {
            $itemCode = '';
            $skillItem = $mainSkills[$i];

            if ($skillItem->getName() == "<span class='cyberSecurity'>Cyber Security</span>"){
                $itemCode .= '<div class="col-lg-4 mb-4">
                                        <div class="bg-white rounded-lg shadow p-4">
                                            <h2 class="h5 font-weight-bold text-center mb-4">' . $skillItem->getName() . '</h2>

                                            <!-- Progress bar 1 -->
                                            <div class="progress mx-auto" data-value="' . $skillItem->getPercentage() . '">
									<span class="progress-left">
						  <span class="progress-bar border-primary" style="transform: rotate(' . ($skillItem->getPercentage() - 30) . 'deg);"></span>
									</span>
                                                <span class="progress-right">
						  <span class="progress-bar border-primary" style="transform: rotate(180deg);"></span>
									</span>
                                                <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                    <div class="skillsLevel font-weight-bold">' . $skillItem->getLevel($lang) . '<sup class="small"></sup>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <!-- END -->

                                            <!-- Demo info -->
                                            <!-- <div class="row text-center mt-4">
                                              <div class="col-6 border-right">
                                                <div class="h4 font-weight-bold mb-0">100%</div><span class="small text-gray">Used last week</span>
                                              </div>
                                              <div class="col-6">
                                                <div class="h4 font-weight-bold mb-0">100%</div><span class="small text-gray">Used last month</span>
                                              </div>
                                            </div> -->
                                            <!-- END -->
                                        </div>
                                    </div>
                                    
                                    ';
            }
            else {
                $itemCode .= '<div class="col-lg-4 mb-4">
                                        <div class="bg-white rounded-lg shadow p-4">
                                            <h2 class="h5 font-weight-bold text-center mb-4">' . $skillItem->getName() . '</h2>

                                            <!-- Progress bar 1 -->
                                            <div class="progress mx-auto" data-value="' . $skillItem->getPercentage() . '">
									<span class="progress-left">
						  <span class="progress-bar border-primary" style="transform: rotate(' . ($skillItem->getPercentage() - 50) . 'deg);"></span>
									</span>
                                                <span class="progress-right">
						  <span class="progress-bar border-primary" style="transform: rotate(180deg);"></span>
									</span>
                                                <div class="progress-value w-100 h-100 rounded-circle d-flex align-items-center justify-content-center">
                                                    <div class="skillsLevel font-weight-bold">' . $skillItem->getLevel($lang) . '<sup class="small"></sup>
                                                    </div>
                                                </div>
                                            </div>

                                            <br>
                                            <!-- END -->

                                            <!-- Demo info -->
                                            <!-- <div class="row text-center mt-4">
                                              <div class="col-6 border-right">
                                                <div class="h4 font-weight-bold mb-0">100%</div><span class="small text-gray">Used last week</span>
                                              </div>
                                              <div class="col-6">
                                                <div class="h4 font-weight-bold mb-0">100%</div><span class="small text-gray">Used last month</span>
                                              </div>
                                            </div> -->
                                            <!-- END -->
                                        </div>
                                    </div>
                                    
                                    ';
            }

            $code .= $itemCode;
        }

        return $code;
    }

    public function getCodeSecondary($secondarySkills){
        $code = "";

        for ($i = 0; $i < sizeof($secondarySkills); $i++){

            $skill = $secondarySkills[$i];

            $codePerItem = '<div class="col-md-6 animate-box">
                                        <div class="progress-wrap ftco-animate fadeInUp ftco-animated">
                                            <h3>' . $skill->getName() . '</h3>
                                            <div class="progress">
                                                <div class="progress-bar color-1" role="progressbar" aria-valuenow="' . $skill->getPercentage() . '"
                                                     aria-valuemin="0" aria-valuemax="100" style="width:' . $skill->getPercentage() . '%">
                                                    <span></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    ';

            $code .= $codePerItem;
        }

        return $code;
    }
}