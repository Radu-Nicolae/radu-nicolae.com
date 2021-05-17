<?php


class cvUtils
{

    public function generateCode($cv)
    {
        $code = "";
        $codePerItem = "";

        for ($i = 0; $i < sizeof($cv); $i++) {
            $codePerItem = ' ';
            $cvItem = $cv[$i];
            $codePerItem .= '
                    <div class="resume-wrap d-flex ftco-animate fadeInUp ftco-animated">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="flaticon-ideas"></span>
                        </div>
                        <div class="text pl-3">
                            <span class="date">';

            $codePerItem .= $cvItem->getStartingDate() . $cvItem->getEndingDate() . "</span>";
            $codePerItem .= '<h2>' . $cvItem->getTitle() . '</h2>';
            $codePerItem .= '<span class="position">' . $cvItem->getOrganizer() . "</span>";
            $codePerItem .= $cvItem->getDescription();
            $codePerItem .= "</div>
                    </div>
                    ";

            $code .= $codePerItem;
        }

        return $code;
    }
}