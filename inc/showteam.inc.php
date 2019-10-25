<?php

class showTeam extends Echipa {

    public function showAllTeam() {

        $data0 = $this->getAllTeam();
        $data1 = $this->getAllRoles();

        foreach($data1 as $data) {

            echo '
            <script>

            var team = document.getElementById("' . $data['Role'] . '");
            team.setAttribute("id", "' . $data['Role'] . '");
            console.log("' . $dataa['Role'] . '");
    
            </script>
            ';

            echo '
            <div style="padding: 20px" id="' . $data['Role'] . '">
                <h1 class="text-center position-relative" style="padding: 20px;">' . $data['Role'] . '</h1>
            </div>
            ';

        }

        foreach($data0 as $dataa) {
            
            echo '
            <script>
                var cv = document.getElementById("' . $dataa['Role'] . '");
                console.log("' . $dataa['Role'] . '");
                cv.innerHTML += `
                <div class="card card-custom mx-auto">
                <img src="https://i.imgur.com/ePGIcEg.jpg" class="rounded-circle" style="position: absolute; width: 30%; left: 15px;">
                    <div class="teamcardname">
                    ' . $dataa['Prenume'] . '
                    </div>
                    <div class="teamcardrole">
                    ' . $dataa['Role'] . '
                    </div>
                </div>
                `;
            </script>
            ';

        }

    }

}

?>