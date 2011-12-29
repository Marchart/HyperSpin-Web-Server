<?php

    function checkHyperSpin() {
        require('inc/config.inc');
        if(stristr($_SERVER['HTTP_USER_AGENT'], "Windows")) {
            if(file_exists($hyperSpinDir . "HyperSpin.exe")) {
                echo "<span id=\"foundMessage\">Found</span>";
            } else {
                echo "<span id=\"errorMessage\">Not found!</span>";
            }
        } else {
            if(file_exists($hyperSpinDir . "HyperSpin.exe")) {
                echo "<span id=\"foundMessage\">Found</span>";
            } else {
                echo "<span id=\"errorMessage\">Not found!</span>";
            }
        }
    }

function listOfEmulators() {
    require('inc/config.inc');
    $emulatorList = array();

    if (is_dir($emulatorDir)) {
        if ($dh = opendir($emulatorDir)) {
            while (($file = readdir($dh)) !== false) {
                if (!in_array($file, $rejected_files)) {
                    array_push($emulatorList, $file);
                }
            }
            closedir($dh);
        }
    }

    foreach ($emulatorList as $value) {
        echo "<li class=\"gameList\">" .$value. "</li>\n";
    }
}

function listOfEmulatorsURL() {
    require('inc/config.inc');
    $emulatorList = array();

    if (is_dir($emulatorDir)) {
        if ($dh = opendir($emulatorDir)) {
            while (($file = readdir($dh)) !== false) {
                if (!in_array($file, $rejected_files)) {
                    array_push($emulatorList, $file);
                }
            }
            closedir($dh);
        }
    }

    foreach ($emulatorList as $value) {
        echo "<li><a class=\"lightbox\" id=\"" .$value. "\" href=\"#" .$value. "\" />" .$value. "</a></li>\n";
    }
}

function listOfEmulatorsPlain() {
    require('inc/config.inc');

    $emulatorList = array();

    if (is_dir($emulatorDir)) {
        if ($dh = opendir($emulatorDir)) {
            while (($file = readdir($dh)) !== false) {
                if (!in_array($file, $rejected_files)) {
                    array_push($emulatorList, $file);
                }
            }

            closedir($dh);
        }
    }

    return $emulatorList;
}

function listRoms() {
    require('inc/config.inc');

    $emulatorArray = listOfEmulatorsPlain();

    echo "<div id=\"jumpNav\">";
    foreach ($emulatorArray as $title) {
        echo "<a href=\"#" .$title. "\">" .$title. "</a> | ";
    }
    echo "</div>";

    foreach ($emulatorArray as $value) {

        echo "<div class=\"emu\"><h3>" .$value. "</h3>";

        echo "<ul>";

        if($value == "MAME") {
            $romList = array();

            $romPath = $mameRomDir;

            if (is_dir($romPath)) {
                if ($dh = opendir($romPath)) {
                    while (($file = readdir($dh)) !== false) {
                        if (!in_array($file, $rejected_files)) {
                            array_push($romList, $file);
                        }
                    }

                    closedir($dh);
                }
            }

            foreach ($romList as $value) {
                echo "<li class=\"romList\" id=\"$value\">" .basename($value, ".zip"). "</li>\n";
            }
            echo "<a href=\"#top\">Back to top</a>";
        } else {
            $romList = array();
            $romPath = $romDir . "/" . $value;

            if (is_dir($romPath)) {
                if ($dh2 = opendir($romPath)) {
                    while (($file = readdir($dh2)) !== false) {
                        if (!in_array($file, $rejected_files)) {
                            array_push($romList, $file);
                        }
                    }

                    closedir($dh2);
                }
            }

            foreach ($romList as $valueList) {
                echo "<li class=\"romList\" id=\"$valueList\">" .basename($value, ".zip"). "</li>\n";
            }

            echo "<a href=\"#top\">Back to top</a>";
        }

        echo "</ul>";
        echo "</div>";
    }
}

?>